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

        $iconPath = Storage::url('public/' . Auth::user()->icon_image); //シンボリックリンクでアイコンを取得
        $lists = Post::with('user')->get(); //postsテーブルからデータを取得
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

    //投稿内容更新
    public function postUpdate(Request $request){

        $validated = $request->validate([
            'post' => 'required|max:150', //バリデーション設定
        ]);

        //dd($request);
        $post = Post::findOrFail($request->id);
        $up_post = $request->input('post');
        $post->update([
            'post' => $up_post
        ]);

        return redirect('/top');
    }


    //投稿の削除
    public function delete($post) {

        Post::where('id', $post)->delete(); //IDで投稿を特定し削除
        return redirect('/top');
    }

}
