<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body style="background-color: #ECECEC;">
        <nav style="padding: 20px; background-color: white; display: flex; justify-content: space-between;">
            <ul class="flex items-center">
                <li>
                    <a href="/" style="padding: 10px">Home</a>
                </li>
                <li>
                    <a href="/" style="padding: 10px">Dashboard</a>
                </li>
                <li>
                    <a href="/" style="padding: 10px">Posts</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a href="/" style="padding: 10px">Lewis James Mealey</a>
                </li>
                <li>
                    <a href="/" style="padding: 10px">Login</a>
                </li>
                <li>
                    <a href="/" style="padding: 10px">Register</a>
                </li>
                <li>
                    <a href="/" style="padding: 10px">Logout</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>