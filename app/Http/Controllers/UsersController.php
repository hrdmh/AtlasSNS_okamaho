<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
    }

    //ログインしているユーザーIDを引数で渡す
    public function index(User $user){
        $all_users = $user->getAllUsers(auth()->user()->id);

        return view('users.index', [
            'all_users' => $all_users
        ]);
    }

}
