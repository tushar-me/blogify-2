<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('pages.users.login');
    }
    public function userRegister()
    {
        return view('pages.users.registration');
    }
    public function userProfile()
    {
        $posts =  Post::get();
        return view('pages.users.profile',['posts' => $posts]);
    }
}
