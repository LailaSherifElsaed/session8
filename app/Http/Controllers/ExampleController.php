<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function home()
    {
        return view('test_home');
    }
    
    public function about()
    {
        return view('about');
    }

    public function show_services()
    {
        return view('services');
    }

    public function show_guards()
    {
        return view('guards');
    }
    public function contactUs()
    {
        return view('contact_us');
    }
}
