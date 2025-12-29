@php
  $destinations = [
    [
      'name' => 'Malaysia',
      'subtitle' => 'Kuala Lumpur & Singapore',
      'image' => 'https://images.unsplash.com/photo-1596422846543-75c6fc18a5cf?auto=format&fit=crop&w=800&q=80',
      'featured' => true,
    ],
    [
      'name' => 'Thailand',
      'subtitle' => 'Bangkok & Pattaya',
      'image' => 'https://images.unsplash.com/photo-1528181304800-2f140819898c?auto=format&fit=crop&w=800&q=80',
      'featured' => false,
    ],
    [
      'name' => 'Korea Selatan',
      'subtitle' => 'Seoul & Nami Island',
      'image' => 'https://images.unsplash.com/photo-1538481199705-c710c4e965fc?auto=format&fit=crop&w=800&q=80',
      'featured' => false,
    ],
    [
      'name' => 'Jam Gadang',
      'subtitle' => 'Bukittinggi, Sumatera Barat',
      'image' => 'https://images.unsplash.com/photo-1572455044327-7348c1be7267?auto=format&fit=crop&w=800&q=80',
      'featured' => false,
    ],
    [
      'name' => 'Harau & Mandeh',
      'subtitle' => 'Sumatera Barat',
      'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
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
        Destinasi <span class="text-[var(--primary)]">Favorit</span>
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
          {{ $index === 0 ? 'md:col-span-2 md:row-span-2' : '' }}"
          data-testid="card-destination-{{ $index }}"
        >
          <div class="relative {{ $index === 0 ? 'aspect-[4/3] md:aspect-[16/10]' : 'aspect-[4/3]' }}">
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
