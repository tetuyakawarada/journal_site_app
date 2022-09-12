<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article edit</title>
</head>

<body>
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 更新先はmemosのidにしないと増える php artisan rote:listで確認① -->
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" value="{{ old('title', $article->title) }}">

        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ old('body', $article->body) }}</textarea>

        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
