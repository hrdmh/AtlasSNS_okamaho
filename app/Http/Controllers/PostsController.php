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

        $lists = [
            'user_id' => Auth::user()->id,
            'post' => Post::post()->post,
        ];

        $lists->Post::get(); //Postモデルからレコード情報を取得
        return view('posts.index', ['lists' => $lists]); //変数をbladeへ渡す
    }

    //新規投稿処理
    public function store(Request $request){
        //
        $users_id = Auth::user()->id;
        $posts = $request->input('post');

        Post::create([
            'user_id'->$users_id,
            'post'->$posts,
        ]);

        return redirect('/top');
    }

    //投稿削除処理
    public function destroy($id){
        //
    }

}
