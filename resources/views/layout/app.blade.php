<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.header')
    <main>
        @yield('content')
    </main>
    @include('layout.footer')
</body>
</html>
