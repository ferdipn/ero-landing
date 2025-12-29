@php
  $faqs = [
    [
      'question' => 'Bagaimana cara booking paket wisata?',
      'answer' => 'Anda dapat menghubungi kami melalui WhatsApp atau telepon untuk konsultasi dan booking. Tim kami akan membantu memilih paket yang sesuai dengan kebutuhan dan budget Anda.',
    ],
    [
      'question' => 'Apakah bisa request custom itinerary?',
      'answer' => 'Tentu! Kami menyediakan layanan custom/tailor-made tour. Anda bisa menyesuaikan destinasi, durasi, dan aktivitas sesuai keinginan.',
    ],
    [
      'question' => 'Berapa minimal peserta untuk booking?',
      'answer' => 'Untuk paket reguler, minimal 2 peserta. Untuk private group tour, kami bisa mengatur mulai dari 5 peserta.',
    ],
    [
      'question' => 'Apa saja yang termasuk dalam paket wisata?',
      'answer' => 'Umumnya paket kami sudah termasuk: akomodasi hotel, transportasi lokal, tour guide, tiket masuk objek wisata, dan beberapa meals.',
    ],
    [
      'question' => 'Bagaimana sistem pembayaran?',
      'answer' => 'Pembayaran via transfer bank. DP minimal 30%, pelunasan H-14 sebelum keberangkatan.',
    ],
    [
      'question' => 'Apakah Ero Tour membantu pengurusan visa?',
      'answer' => 'Ya, kami menyediakan layanan bantuan visa untuk negara-negara tertentu.',
    ],
  ];
@endphp

<section
  id="faq"
  class="py-16 md:py-20 lg:py-24 bg-muted/30"
>
  <div class="max-w-3xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Pertanyaan <span class="text-[var(--primary)]">Umum</span>
      </h2>
      <p class="text-muted-foreground text-lg">
        Temukan jawaban untuk pertanyaan yang sering diajukan
      </p>
    </div>

    {{-- Accordion --}}
    <div class="space-y-3">
      @foreach ($faqs as $index => $faq)
        <details
          class="group bg-background border rounded-lg px-4"
          data-testid="accordion-faq-{{ $index }}"
        >
          <summary
            class="list-none cursor-pointer font-medium py-4 flex items-center justify-between"
          >
            <span>{{ $faq['question'] }}</span>
            <span class="transition-transform group-open:rotate-180">
              <x-ui.icon name="chevron-down" class="w-5 h-5" />
            </span>
          </summary>

          <div class="text-muted-foreground pb-4 leading-relaxed">
            {{ $faq['answer'] }}
          </div>
        </details>
      @endforeach
    </div>

  </div>
</section>
