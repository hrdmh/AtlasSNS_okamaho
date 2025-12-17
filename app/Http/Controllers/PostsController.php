<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;


class PostsController extends Controller
{
    //一覧表示
    public function index(){

        $lists = Post::select('user_id', 'post')->get(); //postsテーブルからデータを取得
        return view('posts.index', compact('lists')); //変数をbladeへ渡す
    }

    //新規投稿処理
    public function store(Request $request){
        //

        $validated = $request->validate([
            'post' => 'required|max:150', //バリデーション設定
        ]);

        $user_id = Auth::user()->id; //ログインしたユーザーの取得
        $post = $request->input('post');

        Post::create([
            'user_id'->$user_id,
            'post'->$post,
        ]);

        return redirect('/top');
    }

    //投稿削除処理
    public function destroy($id){
        //
    }

}
