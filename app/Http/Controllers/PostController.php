<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /*public function index(Post $post)
    {
        return $post->get();
    }*/
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        //dd($post);
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
        //dd($post);
        return view('posts/create');
    }
}
