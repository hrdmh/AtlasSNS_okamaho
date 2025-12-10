<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //一覧表示
    public function index(){
        $list->Post::get();
        return view('posts.index', ['list'->$list]);
    }

    //新規投稿処理
    public function store(Request $request){
        //
        $posts = $request->input('post');
        $users_id=Auth::user()->id;

        Post::create([
            'user_id'->$users_id,
            'post'->$posts
        ]);

        return redirect('/top');
    }

    //投稿削除処理
    public function destroy($id){
        //
    }

}
