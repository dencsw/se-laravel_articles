<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!--  стили и скрипты -->
</head>
<body>
    <header>
        <!--  -->
        <nav>
            <!-- Навигация -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Подвал сайта -->
    </footer>
</body>
</html>

