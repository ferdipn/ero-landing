@php
  $whatsappUrl = 'https://wa.me/6281277871993?text=Halo%20Ero%20Tour,%20saya%20ingin%20konsultasi%20perjalanan';
@endphp

<section
  id="contact"
  class="py-16 md:py-20 lg:py-28 bg-gradient-to-br from-[var(--orange-main)] via-[#FF8C42] to-[var(--orange-main)] text-white relative overflow-hidden"
>
  {{-- Decorative elements --}}
  <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -mr-48 -mt-48"></div>
  <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full -ml-48 -mb-48"></div>

  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      {{-- Left content --}}
      <div>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
          Siap Memulai <br />
          <span class="text-white/95">Petualangan Anda?</span>
        </h2>

        <p class="text-white/80 text-lg mb-10 max-w-lg leading-relaxed">
          Hubungi travel expert kami untuk konsultasi gratis dan dapatkan penawaran
          terbaik untuk perjalanan impian Anda.
        </p>

        {{-- CTA buttons --}}
        <div class="flex flex-col sm:flex-row gap-4">
          <button
            onclick="window.open('{{ $whatsappUrl }}', '_blank')"
            data-testid="button-whatsapp"
            class="px-6 py-3 bg-white text-[var(--orange-main)] font-bold rounded-lg hover:bg-white/90 transition-all duration-300 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl cursor-pointer"
          >
            <x-ui.icon name="whatsapp" class="w-5 h-5 text-[var(--orange-main)] fill-current" />
            Chat via WhatsApp
          </button>

          <button
            onclick="window.location.href='tel:+6281234567890'"
            data-testid="button-call"
            class="px-6 py-3 bg-white/20 border-2 border-white text-white font-bold rounded-lg hover:bg-white/30 transition-all duration-300 flex items-center justify-center gap-2 backdrop-blur-sm"
          >
            <x-ui.icon name="phone" class="w-5 h-5" />
            Telepon Kami
          </button>
        </div>
      </div>

      {{-- Right cards --}}
      <div class="space-y-4">

        {{-- Phone --}}
        <div class="p-6 bg-white/10 border border-white/30 rounded-2xl hover:bg-white/15 transition-all duration-300 backdrop-blur-sm hover:shadow-lg">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-white/20
                        flex items-center justify-center shrink-0 backdrop-blur-sm">
              <x-ui.icon name="phone" class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-bold text-white mb-2 text-lg">Telepon</h4>
              <p class="text-white/80 text-sm leading-relaxed">+62 812-3456-7890</p>
              <p class="text-white/80 text-sm leading-relaxed">+62 751-123456</p>
            </div>
          </div>
        </div>

        {{-- Email --}}
        <div class="p-6 bg-white/10 border border-white/30 rounded-2xl hover:bg-white/15 transition-all duration-300 backdrop-blur-sm hover:shadow-lg">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-white/20
                        flex items-center justify-center shrink-0 backdrop-blur-sm">
              <x-ui.icon name="mail" class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-bold text-white mb-2 text-lg">Email</h4>
              <p class="text-white/80 text-sm leading-relaxed">info@erotour.co.id</p>
              <p class="text-white/80 text-sm leading-relaxed">mice@erotour.co.id</p>
            </div>
          </div>
        </div>

        {{-- Address --}}
        <div class="p-6 bg-white/10 border border-white/30 rounded-2xl hover:bg-white/15 transition-all duration-300 backdrop-blur-sm hover:shadow-lg">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-white/20
                        flex items-center justify-center shrink-0 backdrop-blur-sm">
              <x-ui.icon name="map-pin" class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-bold text-white mb-2 text-lg">Kantor</h4>
              <p class="text-white/80 text-sm leading-relaxed">
                Jl Juanda No 6, Padang<br />
                Sumatera Barat, Indonesia
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
