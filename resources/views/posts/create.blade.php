<!DOCTYPE HTML>
<html>
    <head>
        <meta charser="utf-8">
        <title>ブログ投稿</title>
    </head>
    <body>
        <h1>ブログ投稿記事作成画面</h1>
        <div class="posts">
            <div class="post">
                <form action="/posts" method="POST">
                    {{ csrf_field() }}
                    <p>タイトルを記入</p>
                    <p><input tyep="text" id="post_title" placeholder="タイトル"/></p>
                    <p>記事内容を記入</p>
                    <p><textarea type="text" id="post_content" placeholder="記事内容"/></textarea> 
                    <input type="submit" value="store"/>
                </form>
            </div>
        <div><a href="/">戻る</a></div>
    </body>
</html>