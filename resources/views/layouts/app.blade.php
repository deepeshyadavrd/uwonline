<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Urbanwood')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header">
    <div class="container header-inner">
        <div class="logo">Urbanwood</div>
        <button class="menu-btn">☰</button>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <p>© {{ date('Y') }} Urbanwood</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
