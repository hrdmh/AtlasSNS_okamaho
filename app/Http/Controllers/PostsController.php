<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    //
    public function index(){
        return view('posts.index');
    }
}
