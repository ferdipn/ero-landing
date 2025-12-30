@php
  $testimonials = [
    [
      'name' => 'Andi Susanto',
      'role' => 'Wisatawan',
      'avatar' => 'AS',
      'text' => 'Ero Tour membuat perjalanan liburan saya menjadi sangat menyenangkan dan bebas stres. Layanan mereka luar biasa!',
    ],
    [
      'name' => 'Siti Rahma',
      'role' => 'Korporat',
      'avatar' => 'SR',
      'text' => 'Kami mengandalkan Ero Tour untuk perjalanan bisnis perusahaan kami. Mereka selalu memberikan pengalaman yang profesional dan efisien.',
    ],
    [
      'name' => 'Budi Hartono',
      'role' => 'Pendidik',
      'avatar' => 'BH',
      'text' => 'Perjalanan edukasi yang diorganisir oleh Ero Tour sangat bermanfaat bagi siswa kami. Terima kasih atas perhatian dan detailnya!',
    ],
  ];
@endphp

@push('scripts')
  @vite('resources/js/testimonials.js')
@endpush

<section class="py-20 md:py-24 lg:py-28 bg-[var(--bg-soft)] relative overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full -ml-48 -mb-48"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 md:mb-20">
            <h2 class="text-4xl md:text-5xl lg:text-5xl font-bold mb-4 text-[var(--orange-main)]">
              Kata Mereka Tentang Kami
            </h2>
            <p class="text-lg md:text-xl text-[var(--orange-main)]">Pengalaman nyata dari pelanggan kami yang puas</p>
            <div class="w-24 h-1 bg-[var(--orange-main)] mx-auto mt-6 rounded-full"></div>
        </div>

        <div id="testimonialSlider" class="relative max-w-4xl mx-auto">
            {{-- Testimonial Card --}}
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 relative overflow-hidden group">
                {{-- Quote icon --}}
                <div class="absolute top-6 right-8 text-[var(--orange-soft)]/20 text-7xl font-serif">"</div>
                
                <p class="text-lg md:text-xl mb-8 italic text-[var(--foreground)] leading-relaxed relative z-10" id="testimonialText"></p>
                
                {{-- Divider --}}
                <div class="w-12 h-1 bg-gradient-to-r from-[var(--orange-main)] to-[#FF8C42] rounded-full mb-6"></div>
                
                {{-- Author info --}}
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-[var(--orange-main)] to-[#FF8C42] rounded-full flex items-center justify-center text-white font-bold text-lg mr-4 shadow-lg" id="testimonialAvatar"></div>
                    <div>
                        <div class="font-bold text-lg text-[var(--foreground)]" id="testimonialName"></div>
                        <div class="text-[var(--orange-main)] font-medium text-sm" id="testimonialRole"></div>
                    </div>
                </div>
            </div>

            {{-- Navigation buttons --}}
            <button id="prevTestimonial" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-16 md:-translate-x-20 w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center text-[var(--orange-main)] hover:shadow-xl hover:scale-110 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <button id="nextTestimonial" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-16 md:translate-x-20 w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center text-[var(--orange-main)] hover:shadow-xl hover:scale-110 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        {{-- Indicators --}}
        <div class="flex justify-center gap-3 mt-12">
            @foreach ($testimonials as $index => $testimonial)
              <button
                class="indicator-dot h-2 rounded-full transition-all duration-500 {{ $index === 0 ? 'bg-[var(--orange-main)] w-8 shadow-lg' : 'bg-[var(--orange-main)] w-2 hover:bg-text-[var(--orange-main)]' }}"
                data-index="{{ $index }}"
                aria-label="Go to testimonial {{ $index + 1 }}"
              ></button>
            @endforeach
        </div>
    </div>
</section>