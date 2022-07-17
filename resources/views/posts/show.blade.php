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
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <p>{{$post->updated_at}}</p>
            </div>
        <div><a href="/">戻る</a></div>
    </body>
</html>