<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function aboutUs()
    {
        return view('aboutus');
    }

    public function services()
    {
        return view('services');
    }

    public function contactUs()
    {
        return view('contactus');
    }

    public function login()
    {
        return view('login');
    }
}