<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name', 'Ero Tour & Travel'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <!-- Fallback CSS jika build belum ada -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
    </head>
    <body>
        <div class="min-h-screen bg-background">
            @include('components.header')
            <main>
                @yield('content')
            </main>
            @include('components.footer')
        </div>

    @stack('scripts')
    @yield('scripts')
    </body>

</html>
