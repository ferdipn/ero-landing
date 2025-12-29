@php
  $services = [
    ['icon' => 'plane', 'title' => 'Leisure Tour', 'description' => 'Domestik & Internasional'],
    ['icon' => 'users', 'title' => 'Private Group', 'description' => 'Tour eksklusif grup'],
    ['icon' => 'briefcase', 'title' => 'Corporate Trip', 'description' => 'Incentive & outing'],
    ['icon' => 'graduation-cap', 'title' => 'Educational Trip', 'description' => 'Perjalanan edukasi'],
    ['icon' => 'settings', 'title' => 'Custom Package', 'description' => 'Paket sesuai keinginan'],
    ['icon' => 'ticket', 'title' => 'Flight Ticket', 'description' => 'Bantuan tiket pesawat'],
    ['icon' => 'hotel', 'title' => 'Hotel Booking', 'description' => 'Reservasi hotel'],
    ['icon' => 'bus', 'title' => 'Transport Rental', 'description' => 'Sewa bus & kendaraan'],
  ];
@endphp

<section
  id="services"
  class="py-16 md:py-20 lg:py-24 bg-muted/30"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Section header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Layanan <span class="text-[#FF7A00]">Kami</span>
      </h2>
      <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
        Solusi lengkap untuk semua kebutuhan perjalanan Anda
      </p>
    </div>

    {{-- Services grid --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
      @foreach ($services as $index => $service)
        <div
          class="group p-4 md:p-6 text-center rounded-xl bg-background border border-[var(--secondary)]
                 hover:border-[var(--primary)] hover:shadow-lg transition-all duration-300"
          data-testid="card-service-{{ $index }}"
        >
          <div
            class="w-12 h-12 mx-auto mb-3 rounded-full bg-[var(--secondary)]
                   flex items-center justify-center
                   group-hover:bg-[var(--primary)]/10 transition-colors"
          >
            <x-ui.icon
              name="{{ $service['icon'] }}"
              class="w-6 h-6 text-[var(--primary)]"
            />
          </div>

          <h3 class="font-semibold text-foreground text-sm md:text-base mb-1">
            {{ $service['title'] }}
          </h3>

          <p class="text-muted-foreground text-xs md:text-sm">
            {{ $service['description'] }}
          </p>
        </div>
      @endforeach
    </div>

  </div>
</section>
