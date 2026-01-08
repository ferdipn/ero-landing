@extends('layout')

@section('title', 'Ero Tour Travel | Tour Travel Sumatera Barat Terpercaya' )
@section('description', 'Ero Tour & Travel Padang - Paket wisata Sumatera Barat terbaik 2025. Liburan keluarga, group tour, dan perjalanan ke destinasi eksotis dengan harga terjangkau & guide profesional. Booking mudah & aman.')
@section('keywords', 'paket wisata padang, tour travel padang, liburan sumatera barat, paket tour padang, wisata padang murah, agen travel padang, travel agent sumatera barat, destinasi wisata padang, tour ke padang')
@section('og:title', 'Paket Wisata Padang | Liburan Sumatera Barat Bersama Ero Tour')
@section('og:description', 'Jelajahi keindahan Sumatera Barat bersama Ero Tour & Travel. Paket wisata all-inclusive, guide profesional, destinasi eksotis, dan harga kompetitif. Booking sekarang & gratis konsultasi!')
@section('twitter:title', 'Paket Wisata Padang - Tour Travel Terbaik Sumatera Barat')
@section('twitter:description', 'Paket liburan Padang terpercaya dengan destinasi eksotis, pemandu berpengalaman & harga terjangkau. Liburan keluarga, custom & group tour tersedia.')

@section('content')
    <x-sections.hero />
    <x-sections.why-us />
    <x-sections.destinations />
    <x-sections.featured-packages />
    <x-sections.services />
    <x-sections.testimonials />
    <x-sections.faq />
    <x-sections.contact-cta />
@endsection