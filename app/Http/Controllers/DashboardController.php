<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.home");
    }

    public function pendingPost()
    {
        return view("dashboard.post.pending");
    }
    public function publishedPost()
    {
        return view("dashboard.post.published");
    }
    public function singlePost()
    {
        return view("dashboard.post.single-post");
    }

    // public function addPost()
    // {
    //     return view("dashboard.post.addpost");
    // }
}
