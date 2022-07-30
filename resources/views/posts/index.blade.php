<!DOCTYPE HTML>
@extends('layouts.app')
@section('content')

<html>
    <head>
        <meta charser="utf-8">
        <title>blog</title>
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>Blog Title</h1>
        <p class="create"><a href="/posts/create">投稿作成</a></p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <a href="">{{$post->category->name}}</a>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <div class="category">
                <h3>Categoryからえらぶ</h3>
                
                    
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                            @csrf
                            <form action="/categorries/{{$category->id}}" method="GET">
                                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            </form>
                        @endforeach
                    </select>
                
            </div>
        <div>
            {{$posts->Links()}}
        </div>
    </body>
</html>
@endsection