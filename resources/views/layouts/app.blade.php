    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Home') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/icon type">
        <!-- Scripts -->
        @vite('resources/sass/app.scss')
    </head>
    <body>
        {{-- @include('layouts.nav') --}}
        <div id="app">
            <main class="py-4">
                @yield('content')
                @vite('resources/js/app.js')
                @include('sweetalert::alert')
                @stack('scripts')
            </main>
        </div>
    </body>
    </html>
