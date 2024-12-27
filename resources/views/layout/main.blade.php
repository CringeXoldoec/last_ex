<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чудинов Кирилл</title>
</head>
<body>
    <nav>
        <div class="contents">
            @if(!Auth::check())
                <a href="{{ route('login') }}">Вход</a>
                <a href="{{ route('register') }}">Регистрация</a>
            @endif

    
            @if(Auth::check())
                <a href="{{ route('logout') }}">Выйти</a>
            @endif
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>