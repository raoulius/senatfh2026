@extends("layouts.layout")
@section("content")
  <link href="stylekomisi1.css" rel="stylesheet">

  <section class="container">
    <h1 class="j-header4">KOMISI IV</h1>
    <div class="container6">
      <div class="slide">

        <div class="item" style="background-image: url(/img/kepengurusan-senatfh2026/foto-bersama/komisi-iv.jpg);">
          <div class="content">
            <div class="name">KOMISI IV</div>
            <div class="des">Komisi IV adalah komisi yang menaungi terkait Bidang Advokasi, Akademik, Sarana, dan Prasarana. Komisi empat berkoordinasi dan bertanggung jawab kepada mitra kerjanya, yaitu : BEM Bidang KAPRO dan ADVOKESMA
            </div>
            <a href="http://127.0.0.1:8000/komisi1" target="_blank">
              <button>Selengkapnya</button>
            </a>
          </div>
        </div>
        <div class="item" style="background-image: url(/img/kepengurusan-senatfh2026/foto-bersama/komisi-iv.jpg);">
          <div class="content">
            <div class="name">KOMISI IV</div>
            <div class="des">Komisi IV adalah komisi yang menaungi terkait Bidang Advokasi, Akademik, Sarana, dan Prasarana. Komisi empat berkoordinasi dan bertanggung jawab kepada mitra kerjanya, yaitu : BEM Bidang KAPRO dan ADVOKESMA
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="section-header6">
      <h2 class="modern-header">Tugas Pokok dan Komisi IV</h2>
    </div>
    <div class="modern-wewenang">
      <div class="modern-card">
        <div class="content">
          <h4>Melakukan koordinasi berupa rapat kerja, sosialisasi dengan Mitra Kerja.</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan 4 (empat) fungsi dari SM FH Undip.</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melakukan pengawasan dan penilaian terhadap Mitra Kerja.</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menjaring, mengadvokasikan, dan menginformasikan hasil advokasi terhadap Mitra Kerja dan mahasiswa</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melakukan koordinasi dengan alat kelengkapan lain mengenai aspirasi Mitra Kerja alat kelengkapan terkait</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melaporkan hasil pertanggungjawaban kepada publik.</h4>
        </div>
      </div>
    </div>
  </section>

  <section class="container-k">
    <h2 class="header">Agenda Kerja</h2>
    @foreach ($agendas["Komisi IV SM FH Undip"] as $agenda)
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
  <section>
    <div class="section-header6">
      <h2 class="modern-header1">Mitra Kerja Komisi IV</h2>
    </div>
    <div class="carousel">
      <div class="list">
        <div class="item">
          <img src="img/mitra-kerja4/bemkapro.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">ADVO KESMA</div>
            <div class="des">
              Bidang Advokesma BEM FH Undip Merupakan salah satu bidang yang bertujuan untuk mengawal aspirasi atau keterbutuhan mahasiswa yang berkaitan dengan Uang Kuliah Tunggal (UKT), Beasiswa, dan Pembiayaan perkuliahan lainnya.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">ADVO KESMA</div>
            <div class="des">
              Bidang Advokesma BEM FH Undip Merupakan salah satu bidang yang bertujuan untuk mengawal aspirasi atau keterbutuhan mahasiswa yang berkaitan dengan Uang Kuliah Tunggal (UKT), Beasiswa, dan Pembiayaan perkuliahan lainnya.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja4/bemadvo.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">KAPRO</div>
            <div class="des">
              Bidang Karier dan Profesi (KAPRO) BEM FH Undip adalah salah satu bidang yang bertujuan untuk membantu mahasiswa mempersiapkan karir dengan menyediakan informasi lowongan kerja dan magang di bidang hukum, serta mendukung pengembangan kemampuan mahasiswa untuk menunjang karir
              mereka di masa depan.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">KAPRO</div>
            <div class="des">
              Bidang Karier dan Profesi BEM FH Undip tahun hadir untuk membersamai dan membantu mahasiswa dalam mempersiapkan karir mereka di masa depan, baik dari sisi kemampuan mahasiswa yaitu Kepandaian maupun luar diri mahasiswa
              yaitu adanya kuota lowongan pekerjaan yang tersedia. Bidang karier dan profesi pun mengawal serta melayani mahasiswa FH Undip terkait segala hal yang bisa menunjang karier mahasiswa fakultas hukum dengan membuka jalan informasi
              terkait lowongan kerja dan magang di ranah hukum dengan harapan bahwa segala upaya yang dilakukan dapat mempermudah mahasiswa FH Undip dalam mengasah diri yang beresonansi dengan minat dan jurusannya.
            </div>

          </div>
        </div>

      </div>
      <div class="arrows">
        <button id="prev">
          < </button>
            <button id="next">></button>
            <button id="back">Lihat Semua &#8599</button>
      </div>
    </div>
  </section>

  <section class="container">
    <h2 class="header">Anggota Komisi IV</h2>
    <div class="anggota-4">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Nathania Kharisma Putri_Ketua Komisi IV_noBG.png" />
        </div>
        <div class="content1">
          <h2>Nathania Kharisma Putri</h2>
          <p class="deskripsi">
            Ketua Komisi IV</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Naufal Al Fayyadh_Senator Anggota_noBG.png" />
        </div>
        <div class="content1">
          <h2>Naufal Al Fayyadh</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Nesa Safitri Zahra_Senator Anggota.png" />
        </div>
        <div class="content1">
          <h2>Nesa Safitri Zahra</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Ridho Athif Antariksa_Senator Anggota_noBG.png" />
        </div>
        <div class="content1">
          <h2>Ridho Athif Antariksa</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Salsabeila Raisa Kamila_Senator Anggota_noBG.png" />
        </div>
        <div class="content1">
          <h2>Salsabeila Raisa Kamila</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Adinda Karunia Putri_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Adinda Karunia Putri</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Aqila Akmalia_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Aqila Akmalia</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Billy Alfarelo Ashar Nugroho_Staf Ahli_no BG.png" />
        </div>
        <div class="content1">
          <h2>Billy Alfarelo Ashar Nugroho</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Dwi Lian Arta Nugraha_Staf Ahli_no BG.png" />
        </div>
        <div class="content1">
          <h2>Dwi Lian Arta Nugraha</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Fiona Kartika Wirawan_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Fiona Kartika Wirawan</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Khansa_ Yovita Noviyana_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Khansa Yovita Noviyana</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Kinar Nayla Maury Agiztha_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Kinar Nayla Maury Agiztha</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Nathanael Almand Lembong_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Nathanael Almand Lembong</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Steveen Sari Gabriel Situmorang_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Steveen Sari Gabriel Situmorang</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-2">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/kepengurusan-senatfh2026/komisi-iv/Sultan Amanullah Madjid_Staf Ahli_noBG.png" />
        </div>
        <div class="content1">
          <h2>Sultan Amanullah Madjid</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2026
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="js-komisi.js"></script>
@endsection
