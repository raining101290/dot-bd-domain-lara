<?php

namespace App\Http\Controllers;

use App\Models\DomainExtension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DomainController extends Controller
{
    public function show($tld)
    {
        // $extensions = DomainExtension::pluck('name')->toArray();
        // $pricingList = getDomainPricing();
        // $matchedDomains = array_filter($pricingList, function ($item) use ($extensions) {
        //     return in_array($item->domain, $extensions);
        // });
        // $matchedDomains = array_values($matchedDomains);
        $domain = DomainExtension::where('name', '.' . $tld)->firstOrFail();
        return view('domains.show', compact('domain'));
    }


    public function search(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'extension' => 'required|string',
        ]);

        $domainName = strtolower($request->name . $request->extension);

        // Mock check for now
        $isAvailable = $this->checkDomainAvailability($domainName);

        return redirect()->route('domain.result', [
            'domain' => $domainName,
            'available' => $isAvailable ? 1 : 0,
        ]);
    }

    private function checkDomainAvailability($domain)
    {
        return true;
    }
    public function result(Request $request)
    {
        $domain = $request->query('domain');
        $available = $request->query('available') == 1;

        return view('domains.result', compact('domain', 'available'));
    }
    public function buy($domain)
    {
        if (Auth::guard('customer')->check()) {
            // Customer is logged in → go to payment page
            return redirect()->route('payment.show', ['domain' => $domain]);
        }

        // If not logged in → go to registration
        return redirect()->route('customer.register')->with('info', 'Please register to continue buying your domain.');
    }
    public function order(Request $request)
    {
        $domain = $request->query('query');
        return view('domains.order');
    }
}
