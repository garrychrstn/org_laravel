<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Source Layout</title>
    <link rel='stylesheet' type='text/css' href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Nawasena Abhinaya</h1>
        <h1>Login</h1>
    </header>
    <div class='hero'>
        @yield('hero')
    </div>
    <div class='navbar'>
        @yield('navbar')
    </div>
</body>
</html>