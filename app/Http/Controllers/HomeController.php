<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $posts = Post::where('status', 1)->orderBy("created_at","desc")->get();
        return view('pages.home.home', compact('posts'));
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
