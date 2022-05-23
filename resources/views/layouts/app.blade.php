<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include ('partials.head')

<body>
    <div id="app">
        @include('partials.header')

        <main class="py-4 container">
            @yield('content')
        </main>

        @include('partials.footer')\

        @yield('footer-scritpt')

    </div>
    <script src="/public/js/app.js" defer ></script>
</body>
</html>
