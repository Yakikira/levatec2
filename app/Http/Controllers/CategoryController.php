<?php

namespace App\Http\Controllers;

use App\Post;

use App\Category;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

class CategoryController extends Controller
{
    /*public function index(Post $post)
    {
        return $post->get();
    }*/
    public function index(Category $category)
    {
        return view('posts/categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
