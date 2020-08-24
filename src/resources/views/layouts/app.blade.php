<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._header')
</head>
<body>
    <div id="app">
        @include('layouts._navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
