<?php

namespace App\Http\Controllers;

use App\Post;

use App\Category;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /*public function index(Post $post)
    {
        return $post->get();
    }*/
    public function index(Post $post, Category $category)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(), 'categories'=>$category->get()]);
    }
    public function show(Post $post)
    {
        //dd($post);
        return view('posts/show')->with(['post' => $post]);
    }
    /*public function create()
    {
        //dd($post);
        return view('posts/create');
    }*/
    public function store(PostRequest $request, Post $post)
    {
        $input = $request["post"];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post)
    {
        return view('posts/edit')->with(["post"=>$post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request["post"];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories'=>$category->get()]);
    }
}
