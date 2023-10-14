<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('pages.home.home');
    }

    public function aboutPage()
    {
        return view('pages.about.about');
    }

    public function contactPage()
    {
        return view('pages.contact.contact');
    }
}
