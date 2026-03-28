<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UsersController extends Controller
{

    //ユーザー検索
    public function search(Request $request){

        $keyword = $request->input('keyword');
        $query = User::query();

        $iconPath = Storage::url('public/' . Auth::user()->icon_image); //シンボリックリンクでアイコンを取得
        $iconPaths = [];
        foreach ($iconImages as $image) {
            $iconPaths[] = Storage::url('public/' . $image);
        } // アイコン画像のURLを生成

        $userlists = $query->get(); //usersテーブルからデータを取得
        //dd($userlists);

        $currentUserId = Auth::id(); //ログイン中のユーザーのIDを取得
        $query->where('id', '!=', $currentUserId); //↑ユーザーを除外

        if (!empty($keyword)) {
        $query->where('username', 'like', '%' . $keyword . '%');
        $userlists = $query->get(); //更新されたクエリを取得
        }

        return view('users.search', compact('userlists', 'keyword'));
    }

    //ログインしているユーザーIDを引数で渡す
    public function index(User $user){
        $all_users = $user->getAllUsers(auth()->user()->id);

        return view('users.index', [
            'all_users' => $all_users
        ]);
    }

}
