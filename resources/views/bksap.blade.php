@extends("layouts.layout")
@section("content")
  <link href="stylekomisi1.css" rel="stylesheet">

  <section class="container">
    <h1 class="j-header4">BKSAP</h1>
    <div class="container6">
      <div class="slide">

        <div class="item" style="background-image: url(/img/kepengurusan-senatfh2026/foto-bersama/bksap.jpg);">
          <div class="content">
            <div class="name">BKSAP</div>
            <div class="des">Badan Kerja Sama Antar Parlemen terdiri dari Biro media dan Biro Humas</div>
            <a href="http://127.0.0.1:8000/komisi1" target="_blank">
              <button>Selengkapnya</button>
            </a>
          </div>
        </div>
        <div class="item" style="background-image: url(/img/kepengurusan-senatfh2026/foto-bersama/bksap.jpg);">
          <div class="content">
            <div class="name">BKSAP</div>
            <div class="des">Badan Kerja Sama Antar Parlemen terdiri dari Biro media dan Biro Humas</div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="container">
    <div class="section-header6">
      <h2 class="modern-header">Tugas Pokok dan Wewenang BKSAP</h2>
    </div>
    <div class="modern-wewenang">
      <div class="modern-card">
        <div class="content">
          <h4>Memelihara seluruh akun media sosial yang dimiliki oleh SM FH Undip.</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menyusun dan menjalankan website SM FH Undip</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Mengembangkan, membina, dan meningkatkan hubungan persahabatan dan kerja sama antara SM FH Undip dengan parlemen lain, baik secara bilateral maupun multilateral, termasuk organisasi nasional</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menerima kunjungan delegasi parlemen organisasi lain yang menjadi tamu SM FH Undip</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Mengkoordinasikan kunjungan kerja Alat Kelengkapan SM FH Undip ke luar Fakultas Hukum Universitas Diponegoro</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Memberikan saran atau usul kepada Pimpinan Inti SM FH Undip tentang masalah kerjasama antar parlemen.</h4>
        </div>
      </div>
    </div>
  </section>

  <section class="container-k">
    <h2 class="header">Agenda Kerja</h2>
    @foreach ($agendas["BKSAP"] as $agenda)
      <div class="tag-divide">
        <button class="accordion-k">{{ $agenda->nama }}</button>
        <div class="panel-k">
          <div class="agenda">
            <h2 class="title-k">Agenda</h2>
            <p>{{ $agenda->deskripsi }}</p>
          </div>
          <div class="check">
            <div class="title-k">
              <h2>Status Pelaksanaan</h2>
            </div>
            <label class="container-check">
              <input class="check-box" type="checkbox" {{ $agenda->status ? "checked disabled" : "disabled" }}>
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="file">
            <h2 class="title-k">File</h2>
            <div class="container-img">
              <svg class="bi bi-file-pdf" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                <path
                  d="M4.603 12.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.6 11.6 0 0 0-1.997.406 11.3 11.3 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.244.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 5.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
              </svg>
              @if ($agenda->file)
                <a class="d-btn" href="{{ Storage::url($agenda->file) }}" target="_blank">
                  <button class="d-btn">Dokumen</button>
                </a>
              @else
                -
              @endif
              @if ($agenda->link)
                <a class="d-btn" href="{{ $agenda->link }}" target="_blank">
                  <button class="d-btn">Link</button>
                </a>
              @else
                -
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </section>

  <section class="container">
    <h2 class="header">Anggota BKSAP</h2>
    <div class="anggota-4">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Nesa Safitri Zahra_Ketua Badan Kerjasama Antar Parlemen.png" />
        </div>
        <div class="content1">
          <h2>Nesa Safitri Zahra</h2>
          <p class="deskripsi">
            Ketua BKSAP</br>FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Dungo Robintang Immanel Situmeang_Senator Humas.png" />
        </div>
        <div class="content1">
          <h2>Dungo Robintang Immanel Situmeang</h2>
          <p class="deskripsi">
            Senator Biro Humas</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Intan Putri Cahya Septiandini_Senator Desain.png" />
        </div>
        <div class="content1">
          <h2>Intan Putri Cahya Septiandini</h2>
          <p class="deskripsi">
            Senator Biro Desain</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Najla Fakhira Fadhli_Senator Media.png" />
        </div>
        <div class="content1">
          <h2>Najla Fakhira Fadhli</h2>
          <p class="deskripsi">
            Senator Biro Media</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Sabrina Natasha Elizabeth Nababan_Ketua Biro Humas.png" />
        </div>
        <div class="content1">
          <h2>Sabrina Natasha Elizabeth Nababan</h2>
          <p class="deskripsi">
            Ketua Biro Humas</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Vory Aminda Swanriani_Ketua Biro Desain.png" />
        </div>
        <div class="content1">
          <h2>Vory Aminda Swanriani</h2>
          <p class="deskripsi">
            Ketua Biro Desain</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Nasya Digta Kuncoro_Ketua Biro Media.png" />
        </div>
        <div class="content1">
          <h2>Nasya Digta Kuncoro</h2>
          <p class="deskripsi">
            Ketua Biro Media</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Merry Licantika Manalu_Staff Ahli Biro Desain.png" />
        </div>
        <div class="content1">
          <h2>Merry Licantika Manalu</h2>
          <p class="deskripsi">
            Staff Ahli Biro Desain</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Nadine Wulan Revalintina_Staff Ahli Biro Media.png" />
        </div>
        <div class="content1">
          <h2>Nadine Wulan Revalintina</h2>
          <p class="deskripsi">
            Staff Ahli Biro Media</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Nayla Safira Azzahra_Staff Ahli Biro Desain.png" />
        </div>
        <div class="content1">
          <h2>Nayla Safira Azzahra</h2>
          <p class="deskripsi">
            Staff Ahli Biro Desain</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Nafis Faiz Nasrullah_Staff Ahli Biro Humas.png" />
        </div>
        <div class="content1">
          <h2>Nafis Faiz Nasrullah</h2>
          <p class="deskripsi">
            Staff Ahli Biro Humas</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Khalisha Rafeyfa__Staff Ahli Biro Desain.png" />
        </div>
        <div class="content1">
          <h2>Khalisha Rafeyfa</h2>
          <p class="deskripsi">
            Staff Ahli Biro Desain</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Paulus Adi Setiawan_Staff Ahli Biro Humas.png" />
        </div>
        <div class="content1">
          <h2>Paulus Adi Setiawan</h2>
          <p class="deskripsi">
            Staff Ahli Biro Humas</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/bksap/Riyandhana Wahyu Putri Bintang Nusantara_Staff Ahli Biro Media.png" />
        </div>
        <div class="content1">
          <h2>Riyandhana Wahyu Putri Bintang Nusantara</h2>
          <p class="deskripsi">
            Staff Ahli Biro Media</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="js-komisi.js"></script>
@endsection
