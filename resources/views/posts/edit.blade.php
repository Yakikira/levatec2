<!DOCTYPE HTML>
@extends('layouts.app')
@section('content')
<html>
    <head>
        <meta charser="utf-8">
        <title>ブログ投稿編集</title>
    </head>
    <body>
        <h1>ブログ投稿記事編集画面</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" value="{{$post->title}}">
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <input name="post[body]" value="{{$post->body}}">
                <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
@endsection