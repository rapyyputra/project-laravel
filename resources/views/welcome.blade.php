<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Selamat Datang di Aplikasi SIAKAD</h1>
            <div class="mt-6">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-lg text-blue-600 underline">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-lg text-green-600 underline">Register</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
