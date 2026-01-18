<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Post;


class PostsController extends Controller
{

    //一覧表示
    public function index(){

        $user_id = Auth::user()->id; //ログインしているユーザーのIDを取得
        $user = User::find($user_id); // ユーザーの取得
        $iconPath = Storage::url('public/' . $user->icon_image); //シンボリックリンクでアイコンを取得
        $lists = Post::with('users')->get(); //postsテーブルからデータを取得
        return view('posts.index', compact('lists', 'iconPath')); //変数をbladeへ渡す

    }


    //Userモデルとのリレーションを定義
    public function user() {
    return $this->belongsTo(User::class);
    }


    //新規投稿処理
    public function postCreate(Request $request){
        //

        $validated = $request->validate([
            'post' => 'required|max:150', //バリデーション設定
        ]);

        $user_id = Auth::user()->id; //ログインしているユーザーのIDを取得
        $post = $request->input('post');

        Post::create([
            'user_id' => $user_id,
            'post' => $post,
        ]);

        return redirect('/top');

    }

}
