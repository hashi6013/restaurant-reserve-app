<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Rese</title>
</head>
<body>
    <h1>Rese</h1>
    <h2>店舗代表者の登録</h2>
    <form action="admin/confirm" method="post">
        @csrf
        <label for="name">
            <input type="text" name="name" id="name" placeholder="名前">
        </label>
        <label for="email">
            <input type="text" name="email" id="email" placeholder="メールアドレス">
        </label>
        <label for="password">
            <input type="text" name="password" id="password" placeholder="パスワード">
        </label>
        
    </form>
    

</body>
</html>