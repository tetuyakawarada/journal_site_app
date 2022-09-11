<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article show</title>
</head>

<body>
    <h1>論文詳細</h1>

    タイトル: {{ $article->title }}

    <p>
        {{ $article->body }}
    </p>

    <button onclick="location.href='/articles'">一覧へ戻る</button>
    <button onclick="location.href='/articles/{{ $article->id }}/edit'">編集する</button>


    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('マジで？')){return false};">
    </form>







</body>

</html>
