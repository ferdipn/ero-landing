@php
  $features = [
    [
      'icon' => 'verified',
      'title' => "Terpercaya Sejak 1998",
      'description' => 'Lebih dari 25 tahun pengalaman melayani wisatawan dengan profesional dan aman.',
    ],
    [
      'icon' => 'star',
      'title' => 'Layanan Premium',
      'description' => 'Pelayanan berkualitas tinggi dengan tim travel expert yang berpengalaman.',
    ],
    [
      'icon' => 'globe',
      'title' => "Domestik & Internasional",
      'description' => 'Pilihan destinasi lengkap dari wisata lokal hingga mancanegara.',
    ],
    [
      'icon' => 'gear',
      'title' => 'Paket Fleksibel',
      'description' => 'Custom tour untuk private group, corporate, dan perjalanan edukasi.',
    ],
  ];
@endphp

<section
  id="why-us"
  class="py-16 md:py-20 lg:py-24 section-why"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Section header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Mengapa Memilih <span class="text-[var(--green-main)]">Ero Tour</span>?
      </h2>
      <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
        Kepercayaan ribuan wisatawan selama lebih dari dua dekade
      </p>
    </div>

    {{-- Office Image & Features --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
      {{-- Office Image --}}
      <div class="order-2 lg:order-1">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
          <img 
            src="{{ asset('images/kantor ero tour.webp') }}" 
            alt="Kantor Ero Tour"
            class="w-full h-[500px] object-cover"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
      </div>

      {{-- Feature cards --}}
      <div class="order-1 lg:order-2 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
      @foreach ($features as $index => $feature)
        <x-ui.card
          class="p-6 text-center hover:-translate-y-1 transition-transform duration-300 section-why-card"
          data-testid="card-feature-{{ $index }}"
        >
          <div class="flex gap-2 items-center mb-4">
            <div class="w-10 h-10 rounded bg-[var(--orange-soft)] flex items-center justify-center">
              <x-ui.icon
                name="{{ $feature['icon'] }}"
                class="w-8 h-8 text-[var(--orange-main)] fill-none stroke-current"
              />
            </div>
  
            <h3 class="font-semibold text-foreground text-nowrap">
              {!! $feature['title'] !!}
            </h3>
          </div>

          <p class="text-muted-foreground leading-relaxed">
            {{ $feature['description'] }}
          </p>
        </x-ui.card>
      @endforeach
      </div>
    </div>

  </div>
</section>
