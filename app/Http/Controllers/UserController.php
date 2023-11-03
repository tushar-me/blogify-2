<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('pages.users.login');
    }

    public function user_auth_login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($data)){
            $request->session()->regenerate();

            return redirect('/');
        }

            return redirect('/login');
    }

    public function userRegister()
    {
        return view('pages.users.registration');
    }


    public function create_user(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::create($data);

        return redirect('/login');

    }

    public function userProfile()
    {
        $user = Auth::user();

        $pendingPosts = $user->posts()->where('status', 0)->get();
        $publishedPosts = $user->posts()->where('status', 1)->get();

        return view('pages.users.profile', compact('pendingPosts', 'publishedPosts'));
    }
}