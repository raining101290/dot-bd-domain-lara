<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\CustomerAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\CustomerLogin;
use Illuminate\Support\Facades\Http;

class CustomerAuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegisterForm()
    {
        return view('customer.auth.register');
    }

    /**
     * Handle customer registration.
     */
    public function register(Request $request)
    {
        $response = Http::post("http://127.0.0.1:8001/api/customers", [
            "full_name"        => $request->name,
            "email"            => $request->email,
            "password"         => $request->password,
            "confirm_password" => $request->cpassword,
            "mobile"           => $request->mobile,
            "company"          => $request->company,
            "nid"              => $request->NID,
            "address"          => $request->address,
            "city"             => $request->city,
            "state"            => $request->State,
            "postal_code"      => $request->post,
            "country"          => $request->country,
        ]);

        $result = $response->json();

        // If API returns success
        if ($result['success'] ?? false) {
            return back()->with('success', $result['message']);
        }

        // If validation errors exist
        if (isset($result['errors'])) {
            return back()->with('error', collect($result['errors'])->first()[0])->withInput();
        }

        // Other failure
        return back()->with('error', $result['message'] ?? 'Something went wrong')->withInput();
    }

    /**
     * Show attachment upload form
     */
    public function showAttachmentsForm()
    {
        // $customer = Auth::guard('customer')->user();

        // // If attachments already exist, skip to dashboard
        // if ($customer->attachments()->exists()) {
        //     return redirect()->route('customer.dashboard');
        // }

        return view('customer.attachments', compact('customer'));
    }

    /**
     * Handle file upload
     */
    public function uploadAttachments(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        $request->validate([
            'files.*' => 'required|file|max:5120|mimes:jpg,jpeg,png,pdf',
        ]);

        foreach ($request->file('files') as $file) {
            $path = $file->store('customer_attachments', 'public');

            CustomerAttachment::create([
                'customer_id' => $customer->id,
                'file_name' => $file->getClientOriginalName(),
                'file_url' => $path,
            ]);
        }

        return redirect()->route('customer.dashboard')
            ->with('success', 'Attachments uploaded successfully!');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('customer.auth.login');
    }

    /**
     * Handle login.
     */
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     $login = CustomerLogin::where('username', $request->username)->first();

    //     if (!$login || !Hash::check($request->password, $login->password)) {
    //         return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
    //     }

    //     Auth::guard('customer')->login($login->customer);

    //     return redirect()->route('customer.dashboard');
    // }

    /**
     * Show customer dashboard.
     */
    public function dashboard()
    {
        $customer = Auth::guard('customer')->user();
        return view('customer.dashboard', compact('customer'));
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.login');
    }
}
