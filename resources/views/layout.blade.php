<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Library App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            @if(Auth::check())
                <li><a href="{{ route('loans.index') }}">Peminjaman</a></li>
                <li><form action="{{ route('logout') }}" method="POST">@csrf <button type="submit">Logout</button></form></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
