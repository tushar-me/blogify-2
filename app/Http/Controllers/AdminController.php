<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminRegister()
    {
        return view("admin.register");
    }

    public function adminLogin ()
    {
        return view("admin.login");
    }
}
