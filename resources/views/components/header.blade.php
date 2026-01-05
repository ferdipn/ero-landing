@php
$navLinks = [
  ['label' => 'Beranda', 'href' => '#hero'],
  ['label' => 'Destinasi', 'href' => '#destinations'],
  ['label' => 'Paket Wisata', 'href' => '#featured-packages'],
  ['label' => 'Layanan', 'href' => '#services'],
  ['label' => 'FAQ', 'href' => '#faq'],
];
@endphp

<header
  id="site-header"
  class="header fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
    <div class="flex items-center justify-between gap-4 h-16 md:h-20">

      {{-- Logo --}}
      <div class="flex flex-col">
        <span
          id="logo-title"
          class="text-xl md:text-2xl font-semibold tracking-tight orange-main"
        >
          Ero Tour
        </span>
        <span
          id="logo-subtitle"
          class="text-[10px] md:text-xs text-white/80"
        >
          Since 1998
        </span>
      </div>

      {{-- Desktop Nav --}}
      <nav class="hidden lg:flex items-center gap-1">
        @foreach ($navLinks as $link)
          <button
            data-href="{{ $link['href'] }}"
            class="nav-link px-4 py-2 font-medium text-lg rounded-md transition-colors text-[var(--orange-main)] hover:text-[var(--orange-main)] hover:bg-[var(--orange-soft)] hover:bg-opacity-30 cursor-pointer"
          >
            {{ $link['label'] }}
          </button>
        @endforeach
      </nav>

      {{-- CTA + Mobile Toggle --}}
      <div class="flex items-center gap-2 md:gap-3">
        <button
          data-href="#contact"
          class="cta-btn flex items-center px-4 py-2 rounded-md font-semibold bg-[var(--orange-main)] text-white transition cursor-pointer"
        >
          {{-- Icon Phone (inline SVG) --}}
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 5a2 2 0 012-2h3l2 5-2 1a11 11 0 005 5l1-2 5 2v3a2 2 0 01-2 2A16 16 0 013 5z"/>
          </svg>
          <span class="hidden sm:inline">Konsultasi</span>
        </button>

        <button
          id="mobile-menu-toggle"
          class="lg:hidden p-2 rounded-md text-white"
        >
          {{-- Menu Icon --}}
          <svg id="icon-menu" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>

          {{-- Close Icon --}}
          <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

    </div>
  </div>

  {{-- Mobile Menu --}}
  <div
    id="mobile-menu"
    class="lg:hidden hidden bg-[var(--background)] border-t shadow-lg"
  >
    <nav class="flex flex-col p-4 gap-1">
      @foreach ($navLinks as $link)
        <button
          data-href="{{ $link['href'] }}"
          class="nav-link px-4 py-3 text-left text-[var(--primary)] hover:bg-[var(--secondary)] rounded-md transition-colors"
        >
          {{ $link['label'] }}
        </button>
      @endforeach
    </nav>
  </div>
</header>
