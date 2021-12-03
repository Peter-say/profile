<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::get();
        return view('web.welcome' , [
            'posts' => $posts,
        ]);
    }

    public function singlePost($post)
    {
        $post = Post::where("id", $post)->first();
        return view('web.single_post' ,[
            'post' => $post,
        ]);
    }

    public function blog()
    {
        return view();
    }
}
