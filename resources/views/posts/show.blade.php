<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>blog</title>
    </head>
    <body>
        <h1>Blog Title</h1>
        <div class="posts">
            <div class="post">
                <a href="">{{$post->category->name}}</a>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <p>{{$post->updated_at}}</p>
            </div>
        <div><a href="/posts/{{$post->id}}/edit">編集</a></div>
        <form id='delete_form' action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <p class="delete" >[<span onclick="return deletePost(this);">削除</span>]</p>        
        </form>
        <div><a href="/">戻る</a></div>
        <script>function deletePost(e){
                'use strict';
                if (confirm("本当に削除しますか？")){
                    document.getElementById('delete_form').submit();
            }}
        </script>
            
    </body>
</html>