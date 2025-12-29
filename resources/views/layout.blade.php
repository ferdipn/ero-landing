<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name', 'Ero Tour & Travel'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite('resources/css/app.css')
        <style>
            .geist-sans { }
            .geist-mono { }
        </style>


    </head>
    <body class="geist-sans geist-mono antialiased">
        <div class="min-h-screen bg-background">
            @include('components.header')
            <main>
                @yield('content')
            </main>
            @include('components.footer')
        </div>
    </body>

    @yield('script')
</html>
