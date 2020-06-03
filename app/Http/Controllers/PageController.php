<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function posts(){

        return view('posts',[
            // 'posts' => Post::load('user')->get()->paginate()
            // 'posts' => Post::with('user')->all()->paginate()
            'posts' => Post::with('user')->latest()->paginate(5)
        ]);
    }

    public function post(Post $post){
        // dd($post);
        return view('post',['post' => $post]);
    }
}
