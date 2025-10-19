<?php

namespace App\Http\Controllers;

use App\Models\DomainExtension;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $domains = DomainExtension::all();
        return view('welcome', compact('domains'));
    }
}
