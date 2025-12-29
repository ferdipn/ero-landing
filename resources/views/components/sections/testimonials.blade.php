@php
  $testimonials = [
    [
      'id' => 1,
      'name' => 'Budi Santoso',
      'location' => 'Jakarta',
      'rating' => 5,
      'text' => 'Pengalaman tour ke Korea bersama Ero Tour sangat memuaskan. Pelayanan profesional dan akomodasi terbaik. Pasti akan booking lagi!',
      'initials' => 'BS',
    ],
    [
      'id' => 2,
      'name' => 'Siti Rahayu',
      'location' => 'Padang',
      'rating' => 5,
      'text' => 'Sudah 3 kali pakai jasa Ero Tour untuk perjalanan keluarga. Selalu puas dengan pelayanannya yang ramah dan detail.',
      'initials' => 'SR',
    ],
    [
      'id' => 3,
      'name' => 'Ahmad Fauzi',
      'location' => 'Bandung',
      'rating' => 5,
      'text' => 'Corporate trip kantor kami dihandle dengan sangat baik. Semua berjalan lancar dan sesuai jadwal. Highly recommended!',
      'initials' => 'AF',
    ],
    [
      'id' => 4,
      'name' => 'Linda Wijaya',
      'location' => 'Surabaya',
      'rating' => 5,
      'text' => 'Paket Thailand sangat worth it! Guide lokal yang disediakan sangat membantu. Terima kasih Ero Tour!',
      'initials' => 'LW',
    ],
    [
      'id' => 5,
      'name' => 'Rudi Hermawan',
      'location' => 'Medan',
      'rating' => 5,
      'text' => 'Tour Sumatera Barat bersama keluarga besar jadi pengalaman tak terlupakan. Tim Ero Tour sangat profesional.',
      'initials' => 'RH',
    ],
    [
      'id' => 6,
      'name' => 'Dewi Kusuma',
      'location' => 'Yogyakarta',
      'rating' => 5,
      'text' => 'Honeymoon package ke Malaysia-Singapore super romantic! Semua sudah diatur dengan sempurna. Love it!',
      'initials' => 'DK',
    ],
  ];
@endphp

<section
  id="testimonials"
  class="py-16 md:py-20 lg:py-24"
>
  <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Section header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Apa Kata <span class="text-[var(--primary)]">Mereka</span>?
      </h2>
      <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
        Testimoni dari wisatawan yang telah bepergian bersama kami
      </p>
    </div>

    {{-- Testimonials grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($testimonials as $testimonial)
        <x-ui.card
          class="p-6 relative"
          data-testid="card-testimonial-{{ $testimonial['id'] }}"
        >
          {{-- Quote icon --}}
          <x-ui.icon
            name="quote"
            class="absolute top-4 right-4 w-8 h-8 text-[var(--primary)]/10"
          />

          {{-- Header --}}
          <div class="flex items-center gap-3 mb-4">
            {{-- Avatar --}}
            <div class="w-10 h-10 rounded-full bg-[var(--secondary)]
                        flex items-center justify-center
                        text-[var(--primary)] font-semibold text-sm">
              {{ $testimonial['initials'] }}
            </div>

            <div>
              <h4 class="font-semibold text-foreground">
                {{ $testimonial['name'] }}
              </h4>
              <p class="text-sm text-muted-foreground">
                {{ $testimonial['location'] }}
              </p>
            </div>
          </div>

          {{-- Rating --}}
          <div class="flex gap-0.5 mb-3">
            @for ($i = 0; $i < $testimonial['rating']; $i++)
              <x-ui.icon
                name="star"
                class="w-4 h-4 text-[var(--primary)] fill-[var(--primary)]"
              />
            @endfor
          </div>

          {{-- Text --}}
          <p class="text-muted-foreground text-sm leading-relaxed">
            "{{ $testimonial['text'] }}"
          </p>
        </x-ui.card>
      @endforeach
    </div>

  </div>
</section>
