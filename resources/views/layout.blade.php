<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>@yield('title', 'Новостной сайт')</title>
</head>
<body>
    <header>
        <div class="header_container">
            <a class="logo_a" href="{{ route ('home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Логотип"></a>
            <div class="nav_items">
                <nav>
                    <a href="{{ route ('about') }}">О нас</a>
                    <a href="{{ route ('contacts') }}">Контакты</a>
                    @guest
                        <a href="/auth/create">Регистрация</a>
                        <a href="/auth/login">Вход</a>
                    @endguest
                    @auth
                        <a href="/auth/logout">Выход</a>
                    @endauth
                </nav>
                <nav>
                    <a href="/article">Статьи</a>
                    <a href="/article/create">Создать статью</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="main_container">
            <div class="page_card">
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <div class="footer_container">
            Садеков Фаиль Хайдярович, 243-323
        </div>
    </footer>
</body>
</html>