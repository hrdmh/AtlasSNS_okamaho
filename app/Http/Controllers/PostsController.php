<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class PostsController extends Controller
{

    //新規投稿処理
    public function store(Request $request){
        //
        $posts = $request->input('post');
        $users_id=Auth::user()->id;

        Post::create([
            'user_id'->$users_id,
            'post'->$posts,
        ]);

        return redirect('/top');
    }

    //一覧表示
    public function index(){
        $lists->Post::get(); //Postモデルからレコード情報を取得
        return view('posts.index', ['lists' => $lists]); //変数をbladeへ渡す
    }

    //投稿削除処理
    public function destroy($id){
        //
    }

}
