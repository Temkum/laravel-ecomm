<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function create()
    {
        return view('pages.register');
    }
}