@props([
  'name',
])

@php
  $class = $attributes->get('class', 'w-5 h-5');
@endphp

@switch($name)

{{-- PHONE --}}
@case('phone')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
     stroke-linecap="round" stroke-linejoin="round">
  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.07 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.12 1.05.33 2.07.63 3.05a2 2 0 0 1-.45 2.11L9.91 10.09a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.11-.45c.98.3 2 .51 3.05.63A2 2 0 0 1 22 16.92z"/>
</svg>
@break

{{-- MAIL --}}
@case('mail')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
  <path d="M3 8.5v7A2.5 2.5 0 0 0 5.5 18h13a2.5 2.5 0 0 0 2.5-2.5v-7"/>
  <path d="M21 8.5l-9 6-9-6"/>
</svg>
@break

{{-- MENU --}}
@case('menu')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
  <path d="M3 6h18M3 12h18M3 18h18"/>
</svg>
@break

{{-- X --}}
@case('x')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
  <path d="M18 6L6 18M6 6l12 12"/>
</svg>
@break

{{-- CHEVRON DOWN --}}
@case('chevron-down')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
  <path d="M6 9l6 6 6-6"/>
</svg>
@break

{{-- STAR (filled) --}}
@case('star')
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="currentColor">
  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
</svg>
@break

@default
{{-- fallback --}}
<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor">
  <circle cx="12" cy="12" r="10" />
</svg>

@endswitch
