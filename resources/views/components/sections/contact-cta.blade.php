@php
  $whatsappUrl = 'https://wa.me/6281234567890?text=Halo%20Ero%20Tour,%20saya%20ingin%20konsultasi%20perjalanan';
@endphp

<section
  id="contact"
  class="py-16 md:py-20 lg:py-24 bg-[var(--primary)] text-white"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      {{-- Left content --}}
      <div>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4">
          Siap Memulai <br />
          <span class="text-[var(--background)]">Petualangan Anda?</span>
        </h2>

        <p class="text-primary-foreground/80 text-lg mb-8 max-w-lg">
          Hubungi travel expert kami untuk konsultasi gratis dan dapatkan penawaran
          terbaik untuk perjalanan impian Anda.
        </p>

        {{-- CTA buttons --}}
        <div class="flex flex-col sm:flex-row gap-4">
          <x-ui.button
            size="lg"
            class="bg-[var(--success)] hover:bg-[var(--primary-dark)]
                   text-white border-[var(--success)] font-semibold"
            onclick="window.open('{{ $whatsappUrl }}', '_blank')"
            data-testid="button-whatsapp"
          >
            <x-ui.icon name="si-whatsapp" class="w-5 h-5 mr-2" />
            Chat via WhatsApp
          </x-ui.button>

          <x-ui.button
            size="lg"
            variant="outline"
            class="bg-white text-[var(--primary)] border-white
                   hover:bg-[var(--background)] font-semibold"
            onclick="window.location.href='tel:+6281234567890'"
            data-testid="button-call"
          >
            <x-ui.icon name="phone" class="w-5 h-5 mr-2" />
            Telepon Kami
          </x-ui.button>
        </div>
      </div>

      {{-- Right cards --}}
      <div class="space-y-4">

        {{-- Phone --}}
        <x-ui.card class="p-5 bg-white/10 border-white/20">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-full bg-[var(--primary-light)]/20
                        flex items-center justify-center shrink-0">
              <x-ui.icon name="phone" class="w-5 h-5 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Telepon</h4>
              <p class="text-white/70 text-sm">+62 812-3456-7890</p>
              <p class="text-white/70 text-sm">+62 751-123456</p>
            </div>
          </div>
        </x-ui.card>

        {{-- Email --}}
        <x-ui.card class="p-5 bg-white/10 border-white/20">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-full bg-[var(--primary-light)]/20
                        flex items-center justify-center shrink-0">
              <x-ui.icon name="mail" class="w-5 h-5 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Email</h4>
              <p class="text-white/70 text-sm">info@erotour.com</p>
              <p class="text-white/70 text-sm">booking@erotour.com</p>
            </div>
          </div>
        </x-ui.card>

        {{-- Address --}}
        <x-ui.card class="p-5 bg-white/10 border-white/20">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-full bg-[var(--primary-light)]/20
                        flex items-center justify-center shrink-0">
              <x-ui.icon name="map-pin" class="w-5 h-5 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Kantor</h4>
              <p class="text-white/70 text-sm">
                Jl. Sudirman No. 123, Padang<br />
                Sumatera Barat, Indonesia
              </p>
            </div>
          </div>
        </x-ui.card>

      </div>
    </div>
  </div>
</section>
