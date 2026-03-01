<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //ユーザー検索
    public function search(Request $request){
        $keyword = $request->input('keyword');
        $query = User::query();

        if (!empty($keyword)) {
        $query->where('name', 'like', '%' . $keyword . '%');
        }

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
