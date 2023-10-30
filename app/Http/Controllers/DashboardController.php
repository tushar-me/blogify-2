<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $pendingPosts =  Post::where('status', 0)->get();
        return view("dashboard.post.pending", compact("pendingPosts"));
    }
    public function publishedPost()
    {
        $publishedPosts =  Post::where('status', 1)->get();
        return view("dashboard.post.published", compact("publishedPosts"));
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

    public function approvePost(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->status = 1;
        $post->save();
        return redirect()->back()->with('success','Post Approved');
    }
}
