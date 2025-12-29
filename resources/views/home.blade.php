@extends('layout')

@section('title', 'Home')

@section('content')
    <section>
        <h2>Welcome to {{ config('app.name', 'Ero Tour & Travel') }}</h2>
        <p>This is a simple home page built with a base layout.</p>
        <div style="margin-top:1.25rem;">
            <a href="#" style="display:inline-block;padding:.5rem 1rem;background:#2563eb;color:#fff;border-radius:6px;text-decoration:none;">Explore Tours</a>
        </div>
    </section>
@endsection
