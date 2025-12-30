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
  class="py-16 md:py-20 lg:py-24 bg-white"
>
  <div class="max-w-3xl mx-auto px-4 md:px-6 lg:px-8">

    {{-- Header --}}
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-4">
        Pertanyaan <span class="text-[var(--orange-main)]">Umum</span>
      </h2>
      <p class="text-muted-foreground text-lg">
        Temukan jawaban untuk pertanyaan yang sering diajukan
      </p>
      <div class="w-24 h-1 bg-[var(--orange-main)]/20 mx-auto mt-6 rounded-full"></div>
    </div>

    {{-- Accordion --}}
    <div class="space-y-4">
      @foreach ($faqs as $index => $faq)
        <details
          class="group bg-[var(--bg-soft)] border-l-4 border-[var(--orange-main)] rounded-xl px-6 overflow-hidden transition-all duration-300 hover:shadow-md"
          data-testid="accordion-faq-{{ $index }}"
        >
          <summary
            class="list-none cursor-pointer py-5 flex items-center justify-between text-foreground hover:text-[var(--orange-main)] transition-colors"
          >
            <span>{{ $faq['question'] }}</span>
            <span class="transition-transform group-open:rotate-180 text-[var(--orange-main)]">
              <x-ui.icon name="chevron-down" class="w-5 h-5" />
            </span>
          </summary>

          <div class="text-muted-foreground pb-5 leading-relaxed border-t border-[var(--orange-main)]/10 pt-4">
            {{ $faq['answer'] }}
          </div>
        </details>
      @endforeach
    </div>

  </div>
</section>
