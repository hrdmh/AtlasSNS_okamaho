<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
    }

    public function logout(){
        Auth::logout();
        return view('layout.login');
    }
}
