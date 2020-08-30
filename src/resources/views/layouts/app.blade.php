<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._header')
</head>
<body>
    <div id="app">
        @include('layouts._navbar')

        <main class="container py-4">
            @include('layouts._flash-message')

            @yield('content')
        </main>
    </div>
</body>
</html>
