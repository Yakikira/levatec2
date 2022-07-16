<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>blog</title>
    </head>
    <body>
        <h1>Blog Title</h1>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <div>
            {{$posts->Links()}}
        </div>
    </body>
</html>