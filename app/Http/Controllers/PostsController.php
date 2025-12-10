<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //一覧表示
    public function index(){
        return view('posts.index');
    }

    //新規投稿
    public function create(){
        //
    }

    //新規投稿処理
    public function store(Request $request){
        //
    }

    //投稿削除処理
    public function destroy($id){
        //
    }

}
