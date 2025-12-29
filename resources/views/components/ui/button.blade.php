@props([
  'size' => 'md',
  'variant' => 'solid',
])

@php
  $base = 'inline-flex items-center justify-center rounded-md transition focus:outline-none focus:ring-2 focus:ring-offset-2';

  $sizeMap = [
    'sm' => 'px-3 py-1.5 text-sm',
    'md' => 'px-4 py-2 text-base',
    'lg' => 'px-6 py-3 text-lg',
  ];

  $variantClasses = match ($variant) {
    'outline' => 'border-2 border-[var(--primary)] text-[var(--primary)] bg-white hover:bg-[var(--background)] focus:ring-[var(--primary)]',
    'ghost'   => 'bg-transparent text-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-[var(--primary)]',
    default   => 'bg-[var(--primary)] text-white hover:bg-[var(--primary-dark)] focus:ring-[var(--primary)]',
  };

  $classes = collect([
    $base,
    $sizeMap[$size] ?? $sizeMap['md'],
    $variantClasses,
    $attributes->get('class'),
  ])->filter()->implode(' ');
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</button>
