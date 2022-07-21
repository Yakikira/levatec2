<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>blog</title>
    </head>
    <body>
        <h1>Blog Title</h1>
        <p class="create"><a href="/posts/create">投稿作成</a></p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <div>
            {{$posts->Links()}}
        </div>
    </body>
</html>