<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__menu">
                <i class="fa-solid fa-bars"></i>
                <a class="header__logo" href="/">Rese</a>
            </div>
            @yield('search')
        </div>
    </header>

    <main>
        @yield('content')
        <script src="https://kit.fontawesome.com/281a1830c2.js" crossorigin="anonymous"></script>
    </main>
</body>
</html>