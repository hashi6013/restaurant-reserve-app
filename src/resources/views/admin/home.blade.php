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
    @if(Auth::check())
    <form class="logout-form" action="/logout" method="post">
        @csrf
        <button class="nav__item-link nav__item-link--button">Logout</button>
    </form>
    @endif

    <h1>管理者用画面</h1>
    <h2>店舗代表者登録</h2>
    <form action="/admin/confirm" method="post">
        @csrf
        <label for="name">
            <input name="name" id="name" type="text" placeholder="名前">
        </label>
        <label for="email">
            <input name="email" id="email" type="text" placeholder="メール">
        </label>
        <label for="password">
            <input name="password" id="password" type="text" placeholder="パスワード">
        </label>
            <input type="hidden" name="role">
            <input type="hidden" name="email_verified_at">
            <button type="submit">
                確認

            </button>
    </form>
    

</body>
</html>