<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\profile;
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
    public function logout()
    {
        auth()->logout();
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
        $profile = $user->profile;

        return view('pages.users.profile', compact('pendingPosts', 'publishedPosts', 'profile'));
    }
    public function profileUpdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'bio' => 'string|max:255',
            'about' => 'string|max:1000',
        ]);
        
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->save();
        $userProfile = $user->profile ?? new profile();
        $userProfile->user_id = $user->id;
        $userProfile->bio = $request->input('bio');
        $userProfile->about = $request->input('about');

        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads'), $imageName);
            $userProfile->photo = $imageName;
        }
        

        $userProfile->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}

    