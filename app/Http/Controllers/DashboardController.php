<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.home");
    }


    public function create()
    {
        return view("dashboard.post.create");
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
    public function adminProfile()
    {
        return view("dashboard.profile");
    }
    public function manageAdmins()
    {
        return view("dashboard.manage-admin");
    }
    
    
}
