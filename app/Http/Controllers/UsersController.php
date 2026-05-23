<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Follow;

class UsersController extends Controller
{

    //ユーザー検索
    public function search(Request $request){

        $keyword = $request->input('keyword');
        $iconPath = Storage::url('public/' . Auth::user()->icon_image); //シンボリックリンクでアイコンを取得
        //dd($userlists);
        $currentUserId = Auth::id(); //ログイン中のユーザーのIDを取得
        $query = User::where('id', '!=', $currentUserId); //ログイン中のユーザーを除外

        if (!empty($keyword)) {
        $query->where('username', 'like', '%' . $keyword . '%');
        }

        $userlists = $query->get(); //更新されたクエリを取得

        return view('users.search', compact('userlists', 'keyword'));
    }

    //ログインしているユーザーIDを引数で渡す
    public function index(User $user){
        $all_users = $user->getAllUsers(auth()->user()->id);

        return view('users.index', [
            'all_users' => $all_users
        ]);
    }

    //アカウントをフォローする
    public function followingCreate(Request $request){

        $user_id = Auth::user()->id; //ログインしているユーザーのIDを取得
        $following = $request->input('following_id');

        Follow::create([
            'user_id' => $user_id,
            'following_id' => $following,
        ]); //ユーザーIDとフォローした人を登録する

        return redirect('users.search', compact('userlists', 'keyword'));

    }

}
