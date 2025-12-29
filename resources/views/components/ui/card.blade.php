@props([])

@php
  $base = 'rounded-lg shadow-sm border';

  $classes = collect([
    $base,
    $attributes->get('class'),
  ])->filter()->implode(' ');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</div>
