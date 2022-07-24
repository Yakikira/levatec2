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
                    @foreach($posts as $post)
                        //<option value="{{$post->category->id}}">{{$post->category->name}}</option>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    @endforeach
                </select>
            </div>
        <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
        <div>
            {{$posts->Links()}}
        </div>
    </body>
</html>