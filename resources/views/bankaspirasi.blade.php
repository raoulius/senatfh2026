@extends("layouts.layout")
@section("content")
  <link href="stylebankaspirasi.css" rel="stylesheet" />

  @php
    $trackingSteps = [
      ['key' => 'submitted', 'label' => 'Pertanyaan terkirim'],
      ['key' => 'under_review', 'label' => 'Sedang diperiksa admin'],
      ['key' => 'verified', 'label' => 'Diverifikasi'],
      ['key' => 'forwarded', 'label' => 'Diteruskan ke pihak terkait'],
      ['key' => 'awaiting_answer', 'label' => 'Menunggu jawaban'],
      ['key' => 'answered', 'label' => 'Pertanyaan terjawab'],
      ['key' => 'closed', 'label' => 'Selesai'],
    ];

    $stepOrder = collect($trackingSteps)->pluck('key')->values();
  @endphp

  <section class="container">
    <h2 class="header">Bank Aspirasi</h2>
    <p class="sub-header">Berisikan tentang kumpulan aspirasi dari mahasiswa beserta jawaban.</p>

    <!-- Sarpras Section -->
    <h2 class="header-BA">Sarana dan Prasarana</h2>
    <div class="pricing">
      @if ($sarpras->isEmpty())
        <p class="slobeh">Belum ada data untuk kategori SARPRAS.</p>
      @else
        @foreach ($sarpras as $aspirasi)
          @php
            $currentStatus = $aspirasi->status ?? 'submitted';
            $currentIndex = $stepOrder->search($currentStatus);
            $currentIndex = $currentIndex === false ? 0 : $currentIndex;
          @endphp
          <div class="card">
            <div class="content">
              <h4>{{ $aspirasi->message }}</h4>
            </div>
            <button class="btn3">Selengkapnya</button>
            <div class="panel">
              <div class="response-box">
                <p>Jawaban: {{ $aspirasi->answer }}</p>
              </div>
              <div class="tracking-container">
                <div class="tracking-title">Status Tracking</div>

                <div class="tracking-steps">
                  @foreach ($trackingSteps as $index => $step)
                    @php
                      $state = 'is-pending';

                      if ($index < $currentIndex) {
                        $state = 'is-completed';
                      } elseif ($index === $currentIndex) {
                        $state = 'is-current';
                      }
                    @endphp
                    <div class="tracking-step {{ $state }}">
                      <div class="step-circle">
                        <svg viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                      @if (!$loop->last)
                        <div class="step-line"></div>
                      @endif
                      <div class="step-content">
                        <div class="step-label">{{ $step['label'] }}</div>
                        <div class="step-status">
                          @if ($state === 'is-completed')
                            ✓ Selesai
                          @elseif ($state === 'is-current')
                            Sedang Diproses
                          @else
                            Menunggu
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>

    <!-- Birokrasi Section -->
    <h2 class="header-BA">Birokrasi</h2>
    <div class="pricing">
      @if ($birokrasi->isEmpty())
        <p class="slobeh">Belum ada data untuk kategori BIROKRASI.</p>
      @else
        @foreach ($birokrasi as $aspirasi)
          @php
            $currentStatus = $aspirasi->status ?? 'submitted';
            $currentIndex = $stepOrder->search($currentStatus);
            $currentIndex = $currentIndex === false ? 0 : $currentIndex;
          @endphp
          <div class="card">
            <div class="content">
              <h4>{{ $aspirasi->message }}</h4>
            </div>
            <button class="btn3">Selengkapnya</button>
            <div class="panel">
              <div class="response-box">
                <p>Jawaban: {{ $aspirasi->answer }}</p>
              </div>
              <div class="tracking-container">
                <div class="tracking-title">Status Tracking</div>

                <div class="tracking-steps">
                  @foreach ($trackingSteps as $index => $step)
                    @php
                      $state = 'is-pending';

                      if ($index < $currentIndex) {
                        $state = 'is-completed';
                      } elseif ($index === $currentIndex) {
                        $state = 'is-current';
                      }
                    @endphp
                    <div class="tracking-step {{ $state }}">
                      <div class="step-circle">
                        <svg viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                      @if (!$loop->last)
                        <div class="step-line"></div>
                      @endif
                      <div class="step-content">
                        <div class="step-label">{{ $step['label'] }}</div>
                        <div class="step-status">
                          @if ($state === 'is-completed')
                            ✓ Selesai
                          @elseif ($state === 'is-current')
                            Sedang Diproses
                          @else
                            Menunggu
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>

    <!-- Akademik Section -->
    <h2 class="header-BA">Akademik</h2>
    <div class="pricing">
      @if ($akademik->isEmpty())
        <p class="slobeh">Belum ada data untuk kategori AKADEMIK.</p>
      @else
        @foreach ($akademik as $aspirasi)
          @php
            $currentStatus = $aspirasi->status ?? 'submitted';
            $currentIndex = $stepOrder->search($currentStatus);
            $currentIndex = $currentIndex === false ? 0 : $currentIndex;
          @endphp
          <div class="card">
            <div class="content">
              <h4>{{ $aspirasi->message }}</h4>
            </div>
            <button class="btn3">Selengkapnya</button>
            <div class="panel">
              <div class="response-box">
                <p>Jawaban: {{ $aspirasi->answer }}</p>
              </div>
              <div class="tracking-container">
                <div class="tracking-title">Status Tracking</div>

                <div class="tracking-steps">
                  @foreach ($trackingSteps as $index => $step)
                    @php
                      $state = 'is-pending';

                      if ($index < $currentIndex) {
                        $state = 'is-completed';
                      } elseif ($index === $currentIndex) {
                        $state = 'is-current';
                      }
                    @endphp
                    <div class="tracking-step {{ $state }}">
                      <div class="step-circle">
                        <svg viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                      @if (!$loop->last)
                        <div class="step-line"></div>
                      @endif
                      <div class="step-content">
                        <div class="step-label">{{ $step['label'] }}</div>
                        <div class="step-status">
                          @if ($state === 'is-completed')
                            ✓ Selesai
                          @elseif ($state === 'is-current')
                            Sedang Diproses
                          @else
                            Menunggu
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
    <script src="js-bankaspirasi.js"></script>

  </section>
@endsection
