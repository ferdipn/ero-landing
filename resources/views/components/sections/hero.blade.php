@php
  $heroImage = 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1600&q=80';

  $stats = [
    ['value' => '25+', 'label' => 'Tahun Pengalaman'],
    ['value' => '10K+', 'label' => 'Wisatawan'],
    ['value' => '50+', 'label' => 'Destinasi'],
    ['value' => '100%', 'label' => 'Kepuasan'],
  ];
@endphp

@push('scripts')
    <script href="{{ asset('js/hero.js') }}" defer></script>
@endpush

<section
  id="hero"
  class="relative min-h-screen flex items-center justify-center overflow-hidden"
>
  {{-- Background image --}}
  <div
    class="absolute inset-0 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ $heroImage }}')"
  ></div>

  {{-- Overlay --}}
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>

  {{-- Content --}}
  <div class="relative z-10 max-w-5xl mx-auto px-4 md:px-6 lg:px-8 text-center py-20">

    {{-- Badge --}}
    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
      <span class="w-2 h-2 rounded-full bg-[#FFB84D] animate-pulse"></span>
      <span class="text-white/90 text-sm font-medium">Trusted Since 1998</span>
    </div>

    {{-- Headline --}}
    <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-semibold text-white leading-tight mb-6">
      Your Trusted Travel <br />
      <span class="text-[#FFB84D]">Operator</span> Since 1998
    </h1>

    {{-- Subheadline --}}
    <p class="text-lg md:text-xl text-white/85 max-w-3xl mx-auto mb-8 leading-relaxed">
      Kami adalah tour operator profesional yang menghadirkan perjalanan domestik &
      internasional untuk leisure, private group, corporate trip, dan perjalanan edukasi.
    </p>

    {{-- CTA --}}
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <x-ui.button
        size="lg"
        class="bg-[#FF7A00] hover:bg-[#E66A00] text-white font-semibold px-8"
        data-href="#contact"
      >
        <x-ui.icon name="message-circle" class="w-5 h-5 mr-2" />
        Konsultasi Perjalanan
      </x-ui.button>

      <button
        class="flex items-center px-4 py-2 rounded-md font-semibold bg-[var(--orange-main)] text-white transition cursor-pointer"
        data-href="#featured-packages"
      >
        Lihat Paket Wisata
      </button>
    </div>

    {{-- Stats --}}
    <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-2xl mx-auto">
      @foreach ($stats as $stat)
        <div class="text-center">
          <div class="text-2xl md:text-3xl font-bold text-[#FFB84D]">
            {{ $stat['value'] }}
          </div>
          <div class="text-xs md:text-sm text-white/70">
            {{ $stat['label'] }}
          </div>
        </div>
      @endforeach
    </div>
  </div>

  {{-- Scroll down --}}
  <button
    data-scroll="#why-us"
    class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/70 hover:text-white transition-colors animate-bounce"
  >
    <x-ui.icon name="chevron-down" class="w-8 h-8" />
  </button>
</section>
