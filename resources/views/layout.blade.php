<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php
            $defaultTitle = 'Ero Tour & Travel Padang - Paket Wisata & Liburan Terbaik';
            $defaultDescription = 'Ero Tour & Travel Padang - Paket wisata Sumatera Barat terbaik. Liburan keluarga, group tour, dan perjalanan ke destinasi eksotis dengan harga terjangkau & guide profesional. Booking mudah & aman.';
            $defaultKeywords = 'paket wisata padang, tour travel padang, liburan sumatera barat, paket tour padang, wisata padang murah, agen travel padang, travel agent sumatera barat, destinasi wisata padang, tour ke padang';
            $titleContent = trim($__env->yieldContent('title')) ?: $defaultTitle;
            $descriptionContent = trim($__env->yieldContent('description')) ?: $defaultDescription;
            $keywordsContent = trim($__env->yieldContent('keywords')) ?: $defaultKeywords;
            $currentUrl = url()->current();
            $locale = app()->getLocale();
        @endphp

        <title>{{ $titleContent }}</title>
        <meta name="description" content="{{ $descriptionContent }}">
        <meta name="keywords" content="{{ $keywordsContent }}">
        <meta name="author" content="Ero Tour & Travel">
        <meta property="og:title" content="@yield('og:title', $titleContent)">
        <meta property="og:description" content="@yield('og:description', $descriptionContent)">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('twitter:title', $titleContent)">
        <meta name="twitter:description" content="@yield('twitter:description', $descriptionContent)">
        <link rel="canonical" href="{{ $currentUrl }}">
        <link rel="alternate" href="{{ $currentUrl }}" hreflang="{{ $locale }}">
        @if ($locale !== 'id')
            <link rel="alternate" href="{{ $currentUrl }}" hreflang="id">
        @endif
        <link rel="alternate" href="{{ $currentUrl }}" hreflang="x-default">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'TravelAgency',
                'name' => 'Ero Tour & Travel',
                'url' => url('/'),
                'logo' => asset('images/logo/logo-ero-tour-travel.webp'),
                'description' => $descriptionContent,
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Padang',
                    'addressRegion' => 'Sumatera Barat',
                    'addressCountry' => 'ID'
                ],
                'areaServed' => [
                    '@type' => 'State',
                    'name' => 'Sumatera Barat'
                ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>

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
