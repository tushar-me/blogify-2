<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {   
        $currentMonth = Carbon::now();
        $postCount = Post::where('status', 1)
                ->whereMonth('created_at', $currentMonth->month)
                ->whereYear('created_at', $currentMonth->year)
                ->count();


        $likeCount = Like::whereMonth('created_at', $currentMonth->month)
                    ->whereYear('created_at', $currentMonth->year)
                    ->count();

        $mostLikedPost = Post::withCount('likes')
                    ->where('status', 1)
                    ->whereMonth('created_at', $currentMonth->month)
                    ->whereYear('created_at', $currentMonth->year)
                    ->orderBy('likes_count', 'desc')
                    ->first();

        return view("dashboard.home", compact("postCount","likeCount", "mostLikedPost"));
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
        $user = Auth::user();
        $profile = $user->profile;
        return view("dashboard.profile", compact('profile'));
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
