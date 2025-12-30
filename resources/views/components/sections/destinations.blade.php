@php
  $destinations = [
    [
      'name' => 'Jam Gadang',
      'subtitle' => 'Bukittinggi, Sumatera Barat',
      'image' => asset('images/jam gadang.webp'),
      'featured' => false,
    ],
    [
      'name' => 'Harau',
      'subtitle' => 'Payakumbuh, Sumatera Barat',
      'image' => asset('images/harau.webp'),
      'featured' => false,
    ],
    [
      'name' => 'Kawasan Mandeh',
      'subtitle' => 'Pesisir Selatan, Sumatera Barat',
      'image' => asset('images/kawasan-mandeh.webp'),
      'featured' => false,
    ],
    [
      'name' => 'Malaysia',
      'subtitle' => 'Kuala Lumpur',
      'image' => asset('images/malaysia.webp'),
      'featured' => true,
    ],
    [
      'name' => 'Thailand',
      'subtitle' => 'Bangkok & Pattaya',
      'image' => asset('images/thailand.webp'),
      'featured' => false,
    ],
    [
      'name' => 'Korea Selatan',
      'subtitle' => 'Seoul & Nami Island',
      'image' => asset('images/nami-island.webp'),
      'featured' => false,
    ],
  ];
@endphp

<section
  id="destinations"
  class="py-16 md:py-20 lg:py-24"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Section header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Destinasi <span class="text-[var(--orange-main)]">Favorit</span>
      </h2>
      <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
        Jelajahi destinasi terpopuler pilihan wisatawan kami
      </p>
    </div>

    {{-- Destination grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
      @foreach ($destinations as $index => $destination)
        <div
          class="group relative overflow-hidden rounded-2xl cursor-pointer
          {{ $index === 0 ? 'lg:col-span-2 lg:row-span-2' : '' }}"
          data-testid="card-destination-{{ $index }}"
        >
          <div class="relative aspect-[4/3]">
            <img
              src="{{ $destination['image'] }}"
              alt="{{ $destination['name'] }}"
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

            {{-- Content --}}
            <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
              <div class="flex items-center gap-2 text-white/80 text-sm mb-1">
                <x-ui.icon name="map-pin" class="w-4 h-4" />
                <span>{{ $destination['subtitle'] }}</span>
              </div>

              <h3 class="font-semibold text-white {{ $index === 0 ? 'text-2xl md:text-3xl' : 'text-xl' }}">
                {{ $destination['name'] }}
              </h3>
            </div>

            {{-- Hover overlay --}}
            <div class="absolute inset-0 bg-[var(--primary)]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
