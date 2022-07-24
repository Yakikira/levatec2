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
                <div>
                    @foreach ($posts as $post)
                        <h1>{{$post->category->name}}</h1>
                        <div class="post">
                        <h2 class='title'>
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h2>
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        <div><a href="/">戻る</a></div>
    </body>
</html>