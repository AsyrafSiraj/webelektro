{{-- @foreach ($data->title_semester as $semester)
  @foreach ($data->title_semester[$loop->index]->semester as $semester)
      @dump($semester)
  @endforeach
@endforeach --}}
{{-- @if ($data->tujuan[0]->misi)
  @dd($data->tujuan[0]->misi)
@endif --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/prodi/prodi.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="">{{ $title }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#kul">Kurikulum</a></li>
          <li><a class="nav-link scrollto" href="#lulusan">Lulusan</a></li>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Teknologi Rekayasa Pembangkit Energi</h2>
          <p class="animate__animated fanimate__adeInUp">Teknologi Rekayasa Pembangkit Energi merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="#fff" opacity="0.1">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="#fff" opacity="0.2">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        
        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Teknologi Rekayasa Elektronika</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              Teknik Instrumentasi merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika. Hal ini akan diterapkan pada bidang : sistem kendali, Internt of Things (IoT) , sistem komputer, ataupun sistem elektronika daya.
            </p>
            <a href="#" class="btn-learn-more ">Learn More</a>
          </div>
        </div>
        

      </div>
    </section><!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">VISI</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">MISI</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">TUJUAN</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">SASARAN STRATEGIS</h4>
            </a>
          </li>
        </ul>
       
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <p>
                    Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknologi Rekayasa Elektronika untuk mendukung Indonesia Maju dan Sejahtera 2045.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <p>
                  Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang Teknologi Rekayasa Elektronika melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <ul>
                    <li>1. Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang Teknologi Rekayasa Elektronika yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat</li>
                    <li>2. Terwujudnya jurusan yang transparan, akuntabel, produktif, dan bermutu.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <ul>
                    <li>1. Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang Teknologi Rekayasa Elektronika.</li>
                    <li>2. Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang Teknologi Rekayasa Elektronika.</li>
                    <li>3. Meningkatnya transparansi, akuntabilitas, produktivitas berorientasi kelestarian lingkungan dan mutu layanan, serta tata kelola jurusan Teknik informatika.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Features Section -->
    <!-- ======= Registrasi Section ======= -->
    <section id="regis" class="regis">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <p> Untuk adik-adik yang ingin bergabung di Program Studi D4 Animasi dapat mengunjungi web pendaftaran di registrasi.polibatam.ac.id.</p>
          </div>
          <div class="col-lg-3 regis-btn-container text-center">
            <a class="regis-btn align-middle" href="#">Pendaftaran</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Kompetensi Lulusan Section ======= -->
    <section id="kompetensi" class="container">
      <div class="row content mt-3">
        <div class="col-lg-6 text-center">
          <img src="/assets/img/course-details-tab-4.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 mt-lg-0">
          <div class="section-title" data-aos="zoom-out">
            <h2>Kompetensi Lulusan</h2>
            <p>Kompetensi Lulusan</p>
          </div>
          <ul class="">
            <li>Mampu menyiapkan data evaluasi operasi pembangkitan.</li>
            <li>Mampu melakukan evaluasi berdasarkan data hasil analisa inspeksi.</li>
            <li>Mampu mengelola operasional dan pemeliharaan pembangkit.</li>
            <li>Mampu menganalisis pelaksanaan pengoperasian unit pembangkit listrik.</li>
            <li>Mampu memonitor, menganalisa dan menanggulangi masalah operasi, melaksanakan pengujian keandalan operasi unit, serta membuat laporan.</li>
            <li>Mampu merencanakan dan menerapkan standar pemeliharaan, melaksanakan pemeliharaan, menganalisa dan menanggulangi masalah pada pembangkit listrik.</li>
            <li>Mampu mempersiapkan, menjalankan dan mengalisa studi aliran daya, studi hubung singkat, stabilitas sistem.</li>
            <li>Mampu mengoperasikan peralatan gardu induk dan transmisi, manuver jaringan SUTM, sistem SCADA untuk mengendalikan operasi jaringan tegangan menengah.</li>
            <li>Mampu menkorelasikan, mendiagnosis, dan menyimpulkan berbagai masalah pengelolaan dan penanganan bidang pembagkitan dan penyaluranenergi listrik sesuai dengan aturan-aturan pembangkitan dan standar-standar ketenagalistrikan
            .</li>
          </ul>
        </div>
      </div>
    </section><!-- End Kompetensi Lulusan Section -->
    <!-- ======= Capaian Section ======= -->
    <section id="cpa" class="cpa mt-5 pb-3">
      <div class="container">
        
        <div class="section-title pb-2" data-aos="zoom-out">
          <h2>CAPAIAN</h2>
          <p>CAPAIAN PEMBELAJARAN</p>
        </div>
        
        <div class="row mb-4" data-aos="zoom-out">
            <div class="col-lg-12">
              <p>
                Capaian Pembelajaran (CP) program studi D4 Teknik Rekayasa Pembangkit Energi telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D4 Teknik Rekayasa Pembangkit Energi memiliki capaian pembelajaran sebagai berikut:
              </p>
            </div>
          </div>

        <ul class="cpa-list" data-aos="zoom-out">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#cpa1">Sikap<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa1" class="collapse" data-bs-parent=".cpa-list">
                <p>
              <ul class="mt-5">
                <li>1. Bertaqwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.</li>
                <li>2. Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika.</li>
                <li>3. Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan peradaban berdasarkan Pancasila.</li>
                <li>4. Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa
                    tanggungjawab pada negara dan bangsa.</li>
                <li>5. Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain.</li>
                <li>6. Bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan.</li>
                <li>7. Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.</li>
                <li>8. Menginternalisasi nilai, norma, dan etika akademik.</li>
                <li>9. Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.</li>
                <li>10. Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</li>
              </ul>
            </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa2" class="collapsed question">Keterampilan Umum<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa2" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Mampu menerapkan pemikian logis, kritis, inovatif, bermutu, dan terukur
                  dalam melakukan pekerjaan yang spesifik di bidang keahliannya serta
                  sesuai dengan standar kompetensi kerja bidang yang bersangkutan.</li>
                <li>2. mampu menunjukkan kinerja mandiri, bermutu dan terukur.
                </li>
                <li>3. mampu mengkaji kasus penerapan ilmu pengetahuan dan teknologi yang
                  memperhatikan dan menerapkan nilai humaniora sesuai dengan bidang
                  keahliannya dalam rangka menghasilkan prototype, prosedur baku, desain
                  atau karya seni, menyusun hasil kajiannya dalam bentuk kertas kerja,
                  spesifikasi desain, atau esai seni, dan mengunggahnya dalam laman
                  perguruan tinggi.
                  </li>
                <li>4. mampu mengambil keputusan secara tepat berdasarkan prosedur baku,
                  spesifikasi desain, persyaratan keselamatan dan keamanan kerja dalam
                  melakukan supervisi dan evaluasi pada pekerjaannya.</li>
                <li>5. Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya.</li>
                <li>6. mampu memelihara dan mengembangkan jaringan kerja sama dan hasil
                  kerja sama di dalam maupun di luar lembaganya.</li>
                <li>7. mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan
                  melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang
                  ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya.</li>
                <li>8. mampu melakukan proses evaluasi diri terhadap kelompok kerja yang
                  berada dibawah tanggung jawabnya, dan mampu mengelola pembelajaran
                  secara mandiri.</li>
                <li>9. mampu mendokumentasikan, menyimpan, mengamankan, dan
                  menemukan kembali data untuk menjamin kesahihan dan mencegah
                  plagiasi.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa3" class="collapsed question">Keterampilan Khusus<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa3" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Mampu menganalisa hasil penunjukan alat/instrumentasi ukur untuk
                  menanggulangi masalah operasi berkaitan dengan penyimpangan
                  penunjukkan alat ukur (arus, tekanan, aliran, suhu) dengan
                  memperhatikan toleransi yang ditetapkan dalam sistem sesuai dengan
                  spesifikasi atau instruction manual.</li>
                <li>2. Mampu menganalisis sistem bahan bakar, sistem tekanan udara, sistem
                  kelistrikan, sistem pelumasan dan sistem pendinginan, sesuai dengan
                  standar dan batasan pengoperasian pada unit pembangkit gas/uap,
                .</li>
                <li>3. Mampu menganalisis masalah pada turbin gas/uap, unit boiler, HRSG, unit
                  pompa dan kompresor, piping and valve, untuk pemeliharaan unit
                  pembangkit sesuai standar perusahaan.</li>
                <li>4. Mampu mengalisis perencanaan operasi sistem tenaga listrik melalui studi
                  hubung singkat, studi aliran daya, dan studi stabilitas sistem menggunakan
                  perangkat lunak dengan memperhatikan tingkat keamaan tiap-tiap
                  peralatan dan operasi sistem tenaga listrik yang optimal.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Teori dasar pembangkit energi.</li>
                <li>2. Prinsip-prinsip pengukuran, alat ukur listrik dan mekanik.</li>
                <li>3. Kosep teoritis thermodinamika, pemindahan panas, mekanika fluida dan
                  dasar fisika mekanika.</li>
                <li>4. Konsep dasar mesin-mesin listrik, teori turbin gas, dan kompressor.</li>
                <li>5. Teori sistem proteksi, konsep peralatan kontrol, dan switch gear.</li>
                <li>6. Teori pemipaan pompa dan katup secara umum.</li>
                <li>7. Dasar-dasar gambar teknik, piping and instrument diagram (P&ID).</li>
                <li>8. Teori dasar listrik secara mendalam.</li>
                <li>9. Dasar-dasar pelumasan dan bantalan.</li>
                <li>10. Peraturan dan perundangan ketenagalistrikan dan K3.</li>
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </section><!-- End Capaian Section -->
    <!-- ======= Kurikulum Section ======= -->
    <section id="kul" class="kul mt-3 pb-3">
      <div class="container">
        
        <div class="section-title pb-2" data-aos="zoom-out">
          <h2>KURIKULUM</h2>
          <p>KURIKULUM</p>
        </div>

        <div class="row mb-4" data-aos="zoom-out">
            <div class="col-lg-12">
              <p>
                Kurikulum adalah perangkat mata kuliah dan program pendidikan yang diberikan oleh suatu lembaga penyelenggara pendidikan yang berisi rancangan pelajaran yang akan diberikan kepada peserta pelajaran dalam satu periode jenjang pendidikan.
              </p>
            </div>
          </div>

        <ul class="kul-list" data-aos="zoom-out">
          {{-- Semester 1 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul1">Semester 1<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul1" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px" >RPE101</td>
                            <td style="max-width: 50px">Matematika Dasar</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE101"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE102</td>
                            <td style="max-width: 50px">Rangkaian Listrik 1</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE102"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE103</td>
                            <td style="max-width: 50px">Dasar Teknik Listrik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE103"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE104</td>
                            <td style="max-width: 50px">Fisika Dasar</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE104"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE105</td>
                            <td style="max-width: 50px">Gambar Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE105"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RPE106</td>
                            <td style="max-width: 50px">Alat Ukur Listrik dan Instrumen</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE106"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RPE107</td>
                            <td style="max-width: 50px">Kesehatan dan Keselamatan Kerja (K3)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE107"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 2 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul2">Semester 2<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul2" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px" >RPE201</td>
                            <td style="max-width: 50px">Termodinamika 1</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE201"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE202</td>
                            <td style="max-width: 50px">Rangkaian Listrik 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE202"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE203</td>
                            <td style="max-width: 50px">Kinematika dan Dinamika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE203"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE204</td>
                            <td style="max-width: 50px">Matematika Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE204"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE205</td>
                            <td style="max-width: 50px">Ilmu Bahan Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE205"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RPE206</td>
                            <td style="max-width: 50px">Instalasi Listrik Mesin</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE206"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RPE207</td>
                            <td style="max-width: 50px">Sistem Tenaga Listrik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE207"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 3 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul3">Semester 3<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul3" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE301</td>
                            <td style="max-width: 50px">Komputer</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE301"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE302</td>
                            <td style="max-width: 50px">Pompa, Kompresor dan Blower 1</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE302"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE303</td>
                            <td style="max-width: 50px">Mesin Turbin</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE303"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE304</td>
                            <td style="max-width: 50px">Pembangkit Listrik 1</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE304"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE305</td>
                            <td style="max-width: 50px">Peralatan Listrik dan Trafo</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE305"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">KWN306</td>
                            <td style="max-width: 50px">Kewarganegaraan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN306"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RPE307</td>
                            <td style="max-width: 50px">Mekanika Fluida</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE307"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">RPE308</td>
                            <td style="max-width: 50px">Mesin dan sistem Pembakaran</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE308"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 4 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul4">Semester 4<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul4" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE401</td>
                            <td style="max-width: 50px">Thermodinamika 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE401"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE402</td>
                            <td style="max-width: 50px">Pneumatik dan Hidrolik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE402"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE403</td>
                            <td style="max-width: 50px">Motor Listrik dan Generator</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE403"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE404</td>
                            <td style="max-width: 50px">Sensor dan Transducer</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE404"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE405</td>
                            <td style="max-width: 50px">Sistem Transmisi dan Distribusi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE405"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RPE406</td>
                            <td style="max-width: 50px">Sistem Kontrol</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE406"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RPE407</td>
                            <td style="max-width: 50px">Sistem Proteksi Listrik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE407"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 5 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul5">Semester 5<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul5" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE501</td>
                            <td style="max-width: 50px">Probabilitas dan Statistika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE501"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE502</td>
                            <td style="max-width: 50px">Keselamatan Ketenagalistrikan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE502"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE503</td>
                            <td style="max-width: 50px">Operasi dan Pemeliharaan Pembangkit I</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE503"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE504</td>
                            <td style="max-width: 50px">Pembangkit Listrik 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE504"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE505</td>
                            <td style="max-width: 50px">Teknologi Pelumasan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE505"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">KWN506</td>
                            <td style="max-width: 50px">Bahasa Indonesia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN506"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RPE507</td>
                            <td style="max-width: 50px">Kewirausahaan dan PJBTL</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE507"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">KWN508</td>
                            <td style="max-width: 50px">Bahasa Inggris I</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN508"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 6 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul6">Semester 6<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul6" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE601</td>
                            <td style="max-width: 50px">HRSG dan Boiler</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE601"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE602</td>
                            <td style="max-width: 50px">Sistem Perpipaan dan Tubing</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE602"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE603</td>
                            <td style="max-width: 50px">Pompa, Kompresor dan Blower 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE603"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE604</td>
                            <td style="max-width: 50px">Ilmu korosi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE604"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RPE605</td>
                            <td style="max-width: 50px">Standarisasi Kelistrikan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE605"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">KWN606</td>
                            <td style="max-width: 50px">Bahasa Inggris II</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN606"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">KWN607</td>
                            <td style="max-width: 50px">Olahraga 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">1</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN607"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">KWN608</td>
                            <td style="max-width: 50px">Pendidikan Agama Islam</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN608-1"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">9</td>
                            <td style="max-width: 15px">KWN608</td>
                            <td style="max-width: 50px">Pendidikan Agama Kristen (Protestan & Katolik)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN608-2"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">10</td>
                            <td style="max-width: 15px">KWN608</td>
                            <td style="max-width: 50px">Pendidikan Agama Buddha</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN608-3"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 7 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul7">Semester 7<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul7" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE701</td>
                            <td style="max-width: 50px">Analisa Kegagalan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE701"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE702</td>
                            <td style="max-width: 50px">PLTGU</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE702"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RPE703</td>
                            <td style="max-width: 50px">Sistem DCS dan Scada</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE703"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RPE705</td>
                            <td style="max-width: 50px">Tugas Akhir</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">6</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE705"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">KWN706</td>
                            <td style="max-width: 50px">Pancasila</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KWN706"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 8 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul8">Semester 8<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul8" class="collapse table-responsive-md" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 21px">Kode</th>
                    <th style="max-width: 50px">Nama</th>
                    <th style="max-width: 50px">Course</th>
                    <th style="max-width: 13px">SKS</th>
                    <th style="max-width: 17px">Teori</th>
                    <th style="max-width: 28px">Seminar</th>
                    <th style="max-width: 35px">Praktikum</th>
                    <th style="max-width: 30px">Silabus</th>
                  </tr>
                </thead>
                <tbody class="py-2">
                      
                        <tr>
                            <td style="max-width: 10px">1</td>
                            <td style="max-width: 15px">RPE801</td>
                            <td style="max-width: 50px">Etika Profesi Dunia Kerja</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE801"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RPE802</td>
                            <td style="max-width: 50px">Magang Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RPE802"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Kurikulum Section -->
     <!-- ======= Services Section ======= -->
    <section id="lulusan" class="lulusan">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>PELUANG KERJA</h2>
          <p>PELUANG KERJA LULUSAN</p>
        </div>

        <div class="row">
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Insinyur Pembangkit Listrik</a></h4>
              <p class="description">
                Bekerja dalam perencanaan, desain, konstruksi, dan pemeliharaan pembangkit listrik, termasuk pembangkit listrik tenaga panas bumi, tenaga angin, tenaga surya, tenaga air, dan tenaga nuklir.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Energi Terbarukan</a></h4>
              <p class="description">
                Terlibat dalam penelitian, pengembangan, dan implementasi teknologi energi terbarukan, seperti panel surya, turbin angin, sistem penyerapan panas bumi, dan teknologi bioenergi.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Kelistrikan</a></h4>
              <p class="description">
                Mengkhususkan diri dalam perencanaan, desain, dan pengoperasian sistem kelistrikan yang kompleks, termasuk pembangkit listrik, jaringan distribusi, dan sistem kelistrikan cerdas.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Konsultan Energi</a></h4>
              <p class="description">
                Memberikan konsultasi kepada perusahaan atau individu tentang efisiensi energi, pemilihan teknologi yang tepat, dan strategi pengelolaan energi yang berkelanjutan.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End lulusan Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Rekayasa Pembangkit Energi</h3>
      <p>kapasitas dalam bidang dalam mengevaluasi, mengelola operasional dan pemeliharaan pada unit pembangkit tenaga listrik (power plant engineer), memonitor, menganalisa, dan menanggulangi masalah operasi, serta melaksanakan pemeliharaan pada unit pembangkit tenaga listrik (power plant technician).</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      {{-- <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div> --}}
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by ...</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Modal Kurikulum-->
  {{-- Semester 1 --}}
<div class="modal fade" id="RPE101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
      <div class="modal-body">
        
        <table class="table align-middle table-bordered  table-responsive-lg text-justify my-3">
          <tbody >
            
            <tr>
              <td>Mata Kuliah</td>
              <td >:</td>
              <td>Matematika Dasar</td>
            </tr>
            <tr>
              <td>Kode</td>
              <td >:</td>
              <td >RPE101</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >2</td>
            </tr>
            <tr>
              <td>Tujuan</td>
              <td >:</td>
              <td >
                Memberikan kemampuan dan pengetahuan pada mahasiswa dalam menyelesaikan perhitungan dasar dan dasar pemecahan permasalahan keteknikan; persamaan linear, persamaan kuadrat, persamaan irasional, matriks dan determinan, trigonometri, bilangan kompleks, limit dan diferensial.
                </td>
            </tr>
            <tr>
              <td>Pokok Bahasan</td>
              <td >:</td>
              <td >
                Persamaan linear, persamaan kuadrat, persamaan irasional, matriks dan determinan, trigonometri, bilangan kompleks, limit dan diferensial.
              </td>
            </tr>
            <tr>
              <td>Bahan Pustaka</td>
              <td >:</td>
              <td >
                <ul>
                  <li>1. K. A. Stroud, Matematika Teknik, Edisi Kelima, Penerbit Erlangga, 2003.</li>
                  <li>2. Erwin Kreyszig, Advance Engineering Mathematics, John Wiley & Sons, INC., 9th edition,
                    2006.</li>
                  <li>3. Purcell EI., 1984, Calculus with Analytic Geometry, Forth Edition, Prentice-Hall Inc</li>
                </ul>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Rangkaian Listrik 1
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE102</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Memberikan pengetahuan kepada mahasiswa agar dapat menganalisis dan menyelesaikan persoalan-persoalan rangkaian listrik arus searah berdasarkan hukum dan teorema rangkaian. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep Dasar Rangkaian Listrik, Hukum Dasar Rangkaian Listrik, Metode Analisis Rangkaian,
                    dan Teorema Rangkaian.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>1. Electric Circuit Analysis , David E Johnson, John Wiley & Sons, 1994.</li>
                      <li>2. Fundamentals of Electric Circuit, Charles k. Alexander and Matthew N.O. Sadiku.</li>
                      <li>3. Rangkaian Listrik I, William H. Hayyt & Jack Kimmerly,.</li>
                      <li>4. Rangkaian Listrik, Joseph.A.Edminister, Shcaum Series.1983.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Dasar Teknik Listrik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE103</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Memberikan pengetahuan kepada mahasiswa agar mampu memahami tentang medan listrik dan magnet serta prinsip-prinsip kelistrikan seperti pembangkitan, konversi energi dan transmisi daya. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Medan Magnet, Medan Listrik, elektromagnetik, Kapasitor, Induktor, Bilangan Kompleks, DasarDasar Tentang Phasor dan Sinusoiodal serta Signal Bolak Balik, Dasar Mesin Listrik, Sistem Daya Bolak Balik 1 phase, Transformator</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>1. THEODORE WILDI. Electrical Machines, Drives, and Power System 3rd edition,
                        Prentice-Hall. 1997.</li>
                      <li>2. Fundamentals of Electric Circuit, Charles k. Alexander and Matthew N.O. Sadiku.</li>
                      <li>3. NAGRATH, KOTHARI, Electric Machines, Tata McGraww-Hill
                      .</li>
                      <li>4. JOHNSON, JOHNSON & HILBURN, Electric Circuit Analysis 2nd edition. Prentice
                        Hall. 1992.</li>
                      <li>5. MAGDAY F ISKANDER, ELECTROMAGNETIC FIELDS AND WAVESMAN.
                        Prentice-Hall 1992.</li>
                      <li>6. Didi Istardi, Rangkaian Listrik Bolak Balik.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Fisika Dasar</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE104</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Matakuliah Fisika Dasar ini bertujuan untuk membekali mahasiswa agar dapat mengenal dan mengaplikasikan konsep-konsep dasar fisika untuk mendukung matakuliah lain di Program StudiD4 Rekayasa Pembangkit Energi.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Materi perkuliahan meliputi Besaran dan Pengukuran, Gerak Lurus, Hukum Newton I, Kerja dan
                    Energi, Kalor, Pengenalan Termodinamika dan Fluida, Gelombang.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Mikrajuddin Abdullah, Fisika I, ITB</li>
                      <li>Mikrajuddin Abdullah, Fisika II, ITB</li>
                      <li>Serway, Jewett, Physics for science and engineers with modern physics, USA</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Gambar Teknik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE105</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Setelah selesai kuliah ini, mahasiswa mampu untuk :
                    <ul>
                      <li>Mengetahui, mengerti dan familiar dengan gambar teknik.</li>
                      <li>Mengerti dan familiar untuk mendesign dengan CAD.</li>
                      <li>Mampu berkomunikasi dengan gambar teknik dalam lingkungan tim</li>
                      <li>Mampu memperesentasikan ide design dengan software CAD</li>
                      <li>Mampu mencetak gambar untuk skala yang tepat di kertas.</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan AutoCAD; Draw Command ; Edit command ; Block and attributes ; Dimension ;
                    Creating composite solids ; 3D Modeling ; 3D editing ;CAD Application (2D); CAD Application
                    (3D); Multivew drawing dan CAD Application (3D); dan Print Drawing.
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Mikael Sugianto, Mudah+cepat merancangang dengan AutoCAD 2009</li>
                      <li>Mikael Sugianto, 123 Teknik Dasar AutoCAD 3D</li>
                      <li>Hari Aria Soma, Mahir Menggambar AutoCAD 3D Release 2008</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Alat Ukur Listrik dan Instrumen</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE106</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Mahasiswa mampu memahami dan menjelaskan tentang; Prinsip pengukuran, fungsi, prinsip kerja & jenis-jenis alat ukur AVO meter DC, AV meter AC; Teknik pengukuran AVOmeter DC, AVmeter AC, penggunaan Osciloscope, dan alat ukur Mekanik. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Dasar-dasar pengukuran, Angka Penting, Instrumen penunjuk arus searah dan bolak-balik,
                    Osiloskop, Pengukuran dengan perbandingan, Rangakaian Jembatan, Alat-alat Ukur Listrik,
                    Caliper.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Carr, Joseph J. Elements of Electronic Instrumentation and Measurement. Prentice Hall.
                        1996. USA</li>
                      <li>Hubert, Chrarler I. Operating, Testing and Preventive Maintenance of Electrical Power
                        Apparatus. Prentince Hall. 2003. USA.</li>
                      <li>Sayer, Michael; Mansigh, Abhai. Measurement, Instrumentation and Experiment Design
                        in Physic and Engineering. Prentince Hall. 2005. India
                        </li>
                      <li>William D, Cooper. Instrumentasi Elektronik dan Teknik Pengukuran. Erlangga. 1999.
                        Jakarta</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>      
<div class="modal fade" id="RPE107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kesehatan dan Keselamatan Kerja (K3)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE107</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td >
                    Memberikan kemampuan dan pengetahuan pada mahasiswa tentang pentingnya K3, kecelakaan kerja, pencegahan bahaya-bahaya yang dapat membahayakan keselematan dan kesehatan pekerja, serta mengetahui kelembagaan K3.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pentingnya K3, Prinsip Dasar K3, Kecelakaan Kerja, Pengukuran Kecelakaan Kerja, Kelembagaan
                    K3, Alat Pelindung Diri, Pencegahan Bahaya Kebakaran, Pencegahan Bahaya Listrik, Peralatan
                    Pemadam Kebakaran Dan Alarm, Alat Ukur Dan Pengukuran Tahanan Isolasi Dan Tahanan Tanah.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Kesehatan dan Keselamatan Kerja,John Ridley,Erlangga,2008</li>
                      <li>Fundamental principles of occupational healt and safety, Benjamin O. ALLI, International
                        labour office Geneva, 2001</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

  {{-- Semester 2 --}}
  <div class="modal fade" id="RPE201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Termodinamika 1</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE201</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Mahasiswa mampu memahami konsep dan definisi termodinamika, temperature, dan hokum keNol termodinamika, jenis-jenis energi. Hukum Termodinamika I, penggunaanya dan konsekuensi hokum termodinamika I, siklus termodinamika, persamaan aliran, perubahan phase, table dan grafik. Konsep Entropi dan hokum termodinamika II untuk massa dan volume atur, persamaan energi. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep dan difenisi termodinamika. - Proses dan siklus termodinamika - Dimensi dan satuan, Jenisjenis energi dan hukum kekekalan tenaga. Hukum termodinamika I, Persamaan energi aliran
                    mantap. Proses dan penerapannya. Entropi dan hukum termodinamika II dan Energi
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Michael J. Moran, Howard N. Shapiro, Daisie D. Boettner, Margaret B. Bailey,
                        Fundamentals of Engineering Thermodynamics</li>
                      <li>Neubauer,Boris, .2018.Power Plant Technology. Germany: FH Aachen</li>
                    </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Rangkaian Listrik 2</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE202</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Memberikan pengetahuan kepada mahasiswa agar dapat menganalisis dan menyelesaikan persoalan-persoalan rangkaian listrik arus bolak balik berdasarkan hukum dan teorema rangkaian. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep Dasar Rangkaian Listrik orde satu dan dua, Hukum Dasar Rangkaian Listrik, Metode
                    Analisis Rangkaian, dan Teorema Rangkaian. Mahasiswa juga belajar tentang sistem phasa banyak,
                    daya dan trafo tiga phase</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Electric Circuit Analysis , David E Johnson, John Wiley & Sons, 1994</li>
                      <li>Fundamentals of Electric Circuit, Charles k. Alexander and Matthew N.O. Sadiku</li>
                      <li>Rangkaian Listrik I, William H. Hayyt & Jack Kimmerly,</li>
                      <li>Rangkaian Listrik, Joseph.A.Edminister, Shcaum Series.1983</li>
                      <li>Didi Istardi, Rangkaian Listrik Bolak Balik</li>
                    </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kinematika dan Dinamika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE203
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Mahasiswa mampu memahami prinsip kerja dasar dari perilaku gerak partikel yang menempati sebuah ruang dan menerapkan Hukum Newton 2 dalam analisis gerak dinamis partikel tersebut.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep Dasar Dinamika Mesin dan Kinematika, mekanisme dalam mesin dan elemen-elemennya,
                    analisis kinematis dan dinamis yang meliputi analisis kecepatan, percepatan, gaya statis dan gaya
                    dinamis, dan sintesa suatu mekanisme. Mahasiswa diharapkan dapat menganalisa pergerakan yang
                    ada dalam suatu mekanisme dan gaya yang ditimbulkannya dan atau mampu merancang
                    mekanisme yang dibutuhkan untuk suatu gerakan tertentu.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Meriam J.L and Kraige L.G, 2012, Engineering Mechanics Dynamics, vol II, John Willey
                        and Sons.</li>
                      <li>Hibbeler R.C, 2010, Enginnering Mechanics DINAMICS (Twelfth Edition), Pearson
                        Prentice Hall, USA, ISBN-13: 978-0-13-607791-6
                        </li>
                    </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Matematika Teknik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE204</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Memberikan kemampuan dan pengetahuan pada mahasiswa dalam menyelesaikan permasalahan keteknikan dan mahasiswa mampu memahami serta menyelesaikan permasalahan yang membutuhkan analisis matematis. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian yang lebih kompleks 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Persamaan Diferensial Orde 1, Persamaan Diferensial Orde 2, Transformasi Laplace, Transformasi
                    Fourier. Perangkat lunak Matlab/Scilab</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td > 
                    <ul>
                      <li>Purcell, Parberg, “Kalkulus dan Geometri Jilid I” , Edisi ke 5, Erlangga
                      </li>
                      <li>Kreyszig, “Advanced Engineering Mathematics”, Edisi ke 8, John Willey & Sons, 1999</li>
                    </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE205" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Ilmu Bahan Teknik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE205</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Mampu mengklasifikasikan material yang meliputi struktur padatan kristal, point defect, sifat mekanik logam, mekanisme kekuatan dalam logam, mekanisme kegagalan pada material, struktur dan sifat keramik, struktur polimer, korosi dan degradasi material, konduksi eletrik, semikonduktivitas, sifat dielektrik, feroelektrik, piezoelektrik dan sifat termal,
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Matakuliah ini membahas tentang ilmu material yang meliputi struktur padatan kristal, point defect,
                    sifat mekanik logam, mekanisme kekuatan dalam logam, mekanisme kegagalan pada material,
                    struktur dan sifat keramik, struktur polimer, korosi dan degradasi material, konduksi eletrik,
                    semikonduktivitas, sifat dielektrik, feroelektrik, piezoelektrik, sifat termal, magnetic, dan optik.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Callister, W. D. and Rethwisch, D. G. (2013). Material Science and Engineering An
                        Introduction. Wiley</li>
                      <li>Kasap, S. O. (2006). Principles of Electronic Materials and Devices. Canada: McGrawHill.</li>
                      <li>Gupta, K. M. dan Gupta, N. (2016) Advanced Semiconducting Materials and Devices.
                        Springer.</li>
                      <li>Streetman, B. dan Banerjee, S. (2015) Solid State Electronic Devices</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Instalasi Listrik Mesin</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE206</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Memberikan pengetahuan kepada mahasiswa agar mampu memahami mampu mengkaji komponen instalasi Listrik dan Mesin Listrik Berdasarkan standar yang berlaku. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks dan juga dengan menggunakan perangkat lunak CAD.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Komponen instalasi penerangan, bahan-bahan instalasi penerangan, PUIL2011, macam-macam
                    proteksi pada instalasi, macam-macam tenaga listrik, Instalasi pada generator dan Motor satu phasa
                    dan tiga phasa, starter Motor, Instalasi trafo Wye dan Delta, Membuat PHB untuk Daya dan
                    Penerangan.
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Persyaratan Umum Instalasi Listrik 2011. Jakarta : Yayasan PUIL</li>
                      <li>P.C SEN, Principle of Electric Machine & Power Electronic, Prentice Hall</li>
                      <li>BRIAN SCADDAN, Electrical Installation Work 4th edition, Newnes 2002</li>
                      <li>L. Herman, Stephen; N. Alerich, Walter, INDUSTRIAL MOTOR CONTROL, Delmar
                        Publishers Inc, 1985
                        </li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE207" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Tenaga Listrik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE207</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Memberikan kemampuan dan pengetahuan pada mahasiswa tentang sistem yang berfungsi membangkitkan, mentransmisikan, dan mendistribusikan energi listrik dari pusat pembangkit menuju konsumen. Mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks dan juga dengan menggunakan perangkat lunak.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan tentang macam macam pembangkit, Konsep dasar sistem Transmisi Distribusi,
                    Pembangkitan Tenaga Listrik, Gardu Induk (Substation), Transmisi Tenaga Listrik, Distribusi
                    Tenaga Listrik., dan instalasi pemanfaatan tenaga listrik serta mampu menganalisa dasar dasar
                    sistem tenaga listrik dengan menggunakan perangkat lunak Powerworld/ETAP.
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Stevenson, William D. 1984. Analisis Sistem Tenaga Listrik. Jakarta. Penerbit Erlangga</li>
                      <li>Lazaar, Irwan. 1980. Electrical System Analysis and Design for Industrial Plants. New
                        York. McGraw-Hill Book Company</li>
                      <li>Grainger, John J. and Stevenson, William D. 1994. Power System Analysis. Singapore.
                        McGraw-Hill</li>
                      <li>Arismunandar. A., Kuwahara.S, Buku Pegangan Teknik Tenaga Listrik Jilid II, PT
                        Pradnya Paramita, Jakarta, 1993</li>
                      <li>Hadi Abdul, Sistem Distribusi Daya Listrik, Erlangga, Jakarta 1994</li>
                      <li>Hutauruk .T.S, Transmisi Daya Listrik, Erlangga, Jakarta 1996</li>
                      <li>Suhadi, Wrahatnolo Tru, Teknik Distribusi Tenaga Listrik , DPSMK 200</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  

  {{-- Semester 3 --}}
  <div class="modal fade" id="RPE301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Komputer</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE301</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    Mahasiswa memahami dasar-dasar networking dan mampu membangun dan menganalisa topologitopologi jaringan komputer serta memahami protokol-protokol yang berperan dalam pembangunan jaringan komputer (LAN)
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Introduction to Networking, Communication over the Network, Application layer funcionality and
                    protocol, OSI transport layer, OSI network layer, Addressing the network-IPv4, Data Link Layer,
                    OSI Physical Layer, Ethernet, Planning and Cabling Network, TCP/IP Protocol Suite, IPv6.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>CCNA Exploration 1</li>
                      <li>Onno W. Purbo, TCP/IP</li>
                      <li>Cisco Networking Academy</li>
                      <li>Todd Lammle, CCNA Study Guide, Wiley Publishing, 2007.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pompa, Kompresor dan Blower 1</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE302</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menjelaskan prinsip kerja pompa, kompresor, dan blower. Mampu merencana
                    pompa, kompresor dan Blower serta instalasinya. Mahasiswa dapat mempraktekan dan
                    membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada rangkaian
                    yang lebih kompleks
                  
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan teori dasar pompa positip dan non positip displacement, Perencanaan dasar Pompa,
                    Konstruksi Pompa, Operasi : kurva Head dan Pengaturan kapasitas, Pemasangan dan Pemeliharaan
                    Pompa, Perencanaan dasar Kompresor dan klasifikasi, Kompresi Gas dan udara tekan, Konstruksi
                    kompresor, Simulasi proses operasi pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Sularso, Pompa dan Kompresor</li>
                      <li>Marc Borremans, pump and compressor</li>
                      <li>Maurice L Adam, Powerplant Centifugal Pumps, Taylor and Francis, 2017
                      </li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mesin Turbin</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE303
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa memiliki pengetahuan tentang sistem turbin uap dan gas, serta berbagai teori yang
                    meliptui komponen komponen, siklus kerja, hingga unjuk kerja sistem. Mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan
                    mengaplikasikan pada rangkaian yang lebih kompleks dengan menggunakan perangkat lunak
                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Siklus thermopada turbion gas, komponen pada turbin gas; seperti kompresor, ruang bakar, turbin
                    ekspansi dan utilitas instalasi turbin gas. Siklus termo pada turbin uap, komponennya yaitu pompa
                    pengisi ketel, kondensor, turbin ekspansi. Selain itu juga dilakukan simulasi pengoperasian dengan
                    menggunakan perangkat lunak SImgenics.
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Maherwan P boyce, Gas turbine engineering handbook</li>
                      <li>Heinz P Bloch dan Murari P. Singh, Steam Turbines: Design, Application, Rerating</li>
                      <li>RK Hedge, Power Plant Engineering, Pearson 2015</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pembangkit Listrik 1</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE304</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu untuk memahami tentang proses pembangkitan, jenis-jenis pusat pembangkit,
                    instalasi elektrik dari pusat pembangkit, masalah utama dalam pembangkitan tenaga elektrik, sistem
                    inter-koneksi, proses penyediaan tenaga elektrik, dan mutu tenaga elektrik. Mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan
                    mengaplikasikan pada rangkaian yang lebih kompleks dengan menggunakan perangkat lunak
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Mata kuliah ini membahas tentang proses pembangkitan, jenis-jenis pusat pembangkit, instalasi
                    elektrik dari pusat pembangkit, masalah utama dalam pembangkitan tenaga elektrik, sistem interkoneksi, proses penyediaan tenaga elektrik, dan mutu tenaga elektrik. Simulasi proses operasi
                    pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Djiteng Marsudi.,2005, Pembangkit Energi Listrik, Erlangga, Jakarta;</li>
                      <li>Arismunandar dan Kuwahara, 2003, Teknik Tenaga Listrik (Buku Pegangan), jilid 1, Pradnya
                        Paramita., Jakarta;</li>
                      <li>Soelaiman, 2004, Pembangkitan Energi Elektrik, Lab Konversi Energi Elektrik Jurusan Teknik
                        Elektro ITB, Bandung</li>
                      <li>Zark Bedalov, Practical Power Plant Engineering, John Wiley and Sons, 2020</li>
                      <li>Damian Flynn, Thermal Power Plant Simulation and Control, IEE London UK 2003</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Peralatan Listrik dan Trafo</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE305</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa diharapkan mengetahui dan memahami pemeliharaan peralatan listrik yang ada di gardu
                    induk Pembangkit dan untuk Pemakaian sendiri di pembangkit.
                  
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Instalasi dan perawatan trafo, PHB, batteri Charger dan UPS, Peralatan gardu induk. Melakukan
                    pengukuran tahanan Isolasi, tanah, RDc</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Philiph Kiameh, Power Plant Electrical Equipment and System handbook, McGrawhill
                        2013</li>
                      <li>Philiph Kiameh, Power Plant Electrical Equipment Operation and maintenance Guide,
                        McGrawhill 2011</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN306" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewarganegaraan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN306</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Memberikan pengetahuan dan menumbuhkan sikap cinta tanah air serta sadar akan hak dan
                    tanggungjawabnya sebagai warga negara Indonesia terhadap bangsa dan negaranya serta sebagai
                    warga dunia.
                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan, Filsafat Pancasila, Identitas Nasional, Politik dan Strategi, Demokrasi Indonesia, Hak
                    Asasi Manusia dan Rule of Law Hak Asasi Manusia, Hak dan kewajiban warga Negara, Geopolitik
                    Indonesia, Geostrategi Indonesia, CDA untuk Pendidikan Kewarganegaraan di Perguruan tinggi.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Kaelan M S, Pendidikan Pancasila, Paradigma, Yogyakarta, 2004</li>
                      <li>Azzumardi Azra, Pendidikan Kewarganegaraan (Civil Education), ICCE UIN Syarif
                        Hidayatullah, Jakarta, 2003</li>
                        <li>Kaelan M S, Pendidikan Kewarganegaraan, Paradigma, Yogyakarta, 2007
                        </li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE307" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mekanika Fluida</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE307</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menganalisa konsep dasar mekanika fluida dan prinsip-prinsip dari hukum
                    dasar fluida statis dan dinamis pada berbagai persoalan fluida
                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep fluida dan sifat-sifat fluida, velocity field, viscosity, dan klasifikasi pergerakan fluida,
                    Gaya-gaya pada permukaan bidang dan kurva, Persamaan Konservasi Massa, Momentum Linear,
                    Momentum Sudut, persamaan Energi, dan persamaan Bernoulli, Hubungan diferensial untuk
                    partikel fluida. Simulasi proses operasi pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>W. Fox, Robert, Alan T. McDonald; Introduction to Fluid Mechanics, Seventh Edition.
                        Jhon Wiley Sons Inc, New York, 2010.</li>
                      <li>Irving H. Shames, Mechanics of Fluids, Third Edition, McGraw-Hill Inc, New York,
                        1992.</li>
                      <li>V.L. Streeter and E.B. Wylie, Fluid Mechanics, Seventh Edition, McGraw-Hill Inc, New
                        York, 1981</li>
                      <li>Bruce R. Munson, Donald F. Young, and Theodore H. Okiishi, Fundamentals of Fluid
                        Mechanics, Third edition, John Wiley &amp; Sons Inc., New York, 1998</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE308" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mesin dan sistem Pembakaran</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE308</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Matakuliah ini bertujuan agar mahasiswa memiliki pengetahuan dasar mesin pembakaran internal.
                    Prinsip-prinsip yang mengatur desain dan pengoperasian engine disajikan, dan ditunjukkan
                    bagaimana karakteristik operasi, daya, efisiensi, dan emisi, bergantung pada desain engine utama
                    dan kondisi pengoperasian. Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa
                    teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian yang
                    lebih kompleks 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Torsi, daya, dan efisiensi bahan bakar mesin pembakaran, dan untuk membahas bagaimana sifatsifat ini berubah dengan beban, fenomena utama yang terjadi dalam mesin pembakaran internal
                    seperti pertukaran gas, pembakaran dan pembentukan / pengurangan emisi. Simulasi proses operasi
                    pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>John B. Heywood: Internal Combustion Engine Fundamentals, McGraw-Hill,
                        1988, or second edition 2018
                        </li>
                      <li>Richard Stone: Introduction to Internal Combustion Engines (4th edition), SAE
                        International, 2012</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  

  {{-- Semester 4 --}}
  <div class="modal fade" id="RPE401" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Thermodinamika 2</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE401</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mengetahui dan memahami tentang disiplin ilmu dasar yang akan membahas
                    permasalahan aliran kalor dari titik satu ketitik yang lain dan membahas fenomena apa yang terjadi
                    ketika kalor itu mengalir pada suatu media
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Memahami penggunaan Hukum Fourier pada perpindahan panas Konduksi Memahami konduksi 1
                    dimensi keadaan tunak pada dinding datar Memahami konduksi 1 dimensi keadaan tunak pada
                    dinding silinder Memahami koefisien perpindahan panas menyeluruh. Memahami sistem sumber
                    kalor. Memahami perpindahan panas melalui sirp. Memahami Perpindahan Panas konduksi
                    dimensi rangkap keadaan stedi. Prinsip-prinsip perpindahan panas radiasi</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>J.P. Holman., Alih bahasa Ir. E. Jasjfi, M.Sc. , Perpindahan Kalor, Erlangga, 1988, Jakarta</li>
                      <li>Incropera,F.P., Dewitt,D.P., Fundamentals Of Heat and Mass Transfer, 2007, 6thedition.
                        John Wiley & Sons., USA</li>
                      <li>Yunus A, Cengel., Heat Transfer ”A Practical Approach”, 2nd edition, 2003, Mc CrawHill. Boston. USA.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE402" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pneumatik dan Hidrolik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE402</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mengikuti mata kuliah ini diharapkan mahasiswa mengerti dan mampu merangkai
                    perangkat pneumatik, elektropneumatik,dan hidrolik serta dapat mengontrol secara konvensional
                    dengan menggunakan relay. Serta agar mahasiswa dapat mempraktekan dan membuktikan
                    beberapa teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian
                    yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Kendali satu aktuator; Katup waktu tunda dan katup tekanan; Rangkaian pemicu gerakan aktuator;
                    Penyelesaian sinyal konflik pada multi aktuator; Sistem Kendali Elektropneumatik konvensional;
                    Sensor elektropneumatik; Sistem kendali Elektropneumatik multi aktuator; Hidrolik. Simulasi
                    proses operasi pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Introduction To Pneumatics, Text Book, Festo Dicdatic</li>
                      <li>Introduction To Electropneumatics, Text Book, Festo Dicdatic</li>
                      <li>HUGH JACK, Automating Manufacturing Systems with PLCs. GNU . 2003</li>
                      <li>Bolton. W, Mechatronics electronic control systems in mechanical and electrical
                        engineering, pearson prantice hall. 2003</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE403" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Motor Listrik dan Generator</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE403
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mempunyai dasar pengetahuan tentang jenis-jenis motor listrik, prinsip kerja, perhitunganperhitungan dan    karakteristik berbagai macam motor listrik. Serta agar mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak
                    dan mengaplikasikan pada rangkaian yang lebih kompleks 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan, Motor Listrik DC, Motor Listrik AC, Generator Listrik DC, Generator Listrik AC,
                    BLDC, SRM, Stepper dan Servo Motor, Simulasi dengan Menggunakan perangkat lunak
                    Matlab/Scilab
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li> Petruzella Frank D., Electrical Motor and Control System, McGrow Hill, New York.</li>
                      <li> Hadi Abdul, Sistem Distribusi Daya Listrik, Erlangga, Jakarta 1994</li>
                      <li> Hutauruk .T.S, Transmisi Daya Listrik, Erlangga, Jakarta 1996</li>
                      <li>Suhadi, Wrahatnolo Tru, Teknik Distribusi Tenaga Listrik , DPSMK 200</li>
                      <li> Wildi Teodore, Electrical Machines, Drives and Power System Third Edition, Prentice Hall
                        International, USA, 1997
                        </li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE404" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sensor dan Transducer</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE404</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu memahami prinsip dasar sensor dan transducer. Dapat melakukan pengukuran
                    signal output pada sensor, merangkai sensor dan dapat memilih jenis-2 sensor untuk aplikasi di
                    Industri. . Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa teorema
                    rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian yang lebih
                    kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep Dasar Sensor & transducer, Analog To Digital Converter, Temperature & humidity sensors,
                    Optical Sensor, Mechanical, Acceleration & vibration sensor, Electromagnetism, Position &
                    motion sensor, Flow & level sensor, Chemical Sensor & biosensor, Pressure & Strain gages sensor,
                    Wireless Sensor Network (WSN), Pemrosesan data sensor. Simulasi dengan perangkat lunak
                    SimGenics</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li> Sensor Technology handbook, Jon S.Wilson, newness, 2005</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE405" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Transmisi dan Distribusi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE405</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mengikuti mata kuliah ini diharapkan mahasiswa mempunyai dasar pengetahuan tentang
                    penyaluran sistem tenaga listrik mulai dari pembangkitan, transmisi, gardu induk, dan
                    pendistribusian tenaga listrik. Serta agar mahasiswa dapat mempraktekan dan membuktikan
                    beberapa teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian
                    yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Konsep dasar sistem Transmisi Distribusi, Pembangkitan Tenaga Listrik, Gardu Induk
                    (Substation), Transmisi Tenaga Listrik, Distribusi Tenaga Listrik. Simlasi dengan menggunakan
                    trainer kit Delorenzo, perangkat lunak Matlab/ Scilab dan Powerworld/ETAP/DigSilent</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Arismunandar. A., Kuwahara.S, Buku Pegangan Teknik Tenaga Listrik Jilid II, PT
                        Pradnya Paramita, Jakarta, 1993
                        </li>
                      <li>Hadi Abdul, Sistem Distribusi Daya Listrik, Erlangga, Jakarta 1994</li>
                      <li>Hutauruk .T.S, Transmisi Daya Listrik, Erlangga, Jakarta 1996</li>
                      <li>Suhadi, Wrahatnolo Tru, Teknik Distribusi Tenaga Listrik , DPSMK 200</li>
                      <li>Wildi Teodore, Electrical Machines, Drives and Power System Third Edition, Prentice
                        Hall International, USA, 1997</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE406" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Kontrol</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE406</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Memberikan pengetahuan tentang konsep dasar sistem kendali, menganalisa stabilitas sistem
                    sederhana, dan merancang sistem kendali sederhana. mahasiswa mampu untuk : Mengetahui dan mengerti mengenai teori kendali. Mengetahui perbedaan dari sistem kendali closed loop dan open
                    loop. Mampu mendesain sebuah sistem kendali yang sederhana. Serta agar mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak
                    dan mengaplikasikan pada rangkaian yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan dari Sistem Kendali; Tranformasi Laplace; Model dari Sistem Fisikal; Penggambaran
                    Sistem Kendali; Penggambaran Sistem Kendali dan Analsis Sistem Kendali; Analisis Sistem
                    Kendali; Pengendali Otomatis di Industri. Simulasi dengan menggunakan perangkat lunak
                    Matlab/Scilab</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Katsuhiko Ogata, Modern Control Engineering Thrid Edition, Prentice-Hall International.
                        1997</li>
                      <li>Joseph J. Distefano; Allen R. Stubberud; Ivan J. Wlliams . Sistem Pengendalian dan
                        Umpan Balik. Penerbit Erlangga 1996</li>
                      <li>Eniman Y.S, Aciek Ida W.D., Diktat Kuliah Sistem Kendali, Jurusan Teknik Elektro ITB,
                        2001</li>
                      <li>Datasheet PIC Servo SC</li>
                      <li>Hugh Jack. Modelling in Control Systems. GNU. 2001
                      </li>
                      <li>Charles W. Brice. Control Systems, 2003</li>
                      <li>Daniel Sutopo P, Diktat Kuliah Sistem Kendali</li>
                      <li>Didi Istardi, Diktat Kuliah Sistem Kendali Otomatis</li>
                      <li>Nurman S. Nise, Control System Engineering, Wiley 2004</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE407" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Proteksi Listrik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE407</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu melakukan instalasi proteksi terhadap keselamatan manusia dan peralatan serta
                    perlengkapan listrik, mampu memeriksa kelayakan operasi suatu bagunan sederhana, mampu
                    melakukan audit energi gedung secara elektrikal. Serta agar mahasiswa dapat mempraktekan dan
                    membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan
                    pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan; Konsep dasar proteksi dan ruang lingkup kerja proteksi sistem tenaga listrik; Macam
                    – macam peralatan proteksi pada sistem tenaga listrik; Fungsi, prinsipkerja, karakteristik dan
                    konstruksi peralatan tenaga; Jenis, prinsip kerja dan koordinasi peralatan proteksi; Proteksi
                    jaringan; Proteksi terhadap tegangan lebih; Sifat, karakteristik rele, dan koordinasi rele ;Tahanan
                    Isolasi; Pentanahan; Petir; Pemeriksaan instalasi Listrik; Audit Energi. Simulasi dengan
                    menggunakan perangkat lunak Powerworld/ETAP/DigSilent</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>A.Arismunandar,TeknikTeganganTinggi</li>
                      <li>Diktat TeknikProteksi, Wahyudi, ITS</li>
                      <li>Diktat TeknikTeganganTinggi, I Made Yulistia Negara, ITS</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  

  {{-- Semester 5 --}}
  <div class="modal fade" id="RPE501" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Probabilitas dan Statistika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE501
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa memahami prinsip-prinsip dasar proses analisis data dengan menerapkan Ilmu
                    Statistika dan Probabilitas, khususnya penerapan pada kegiatan analisis data di industri.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan Analisis Data dan Statistik, Probabilitas, Peubah Acak & Distribusi Probabilitas,
                    Deskriptif Data Tunggal, Deskriptif Data Kelompok, Regresi Linear Sederhana, Penggunaan
                    Aplikasi Pengolahan Data.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>J. Supranto, “ Statistik Teori dan Aplikasi”, Erlangga, 2001</li>
                      <li>Walpole, Myers & Myers, “ Probabilitas& Statistika”, Prentice Hall, 2000</li>
                      <li>Harinaldi, “Prinsip-Prinsip Statistik untuk Teknik dan Sains”, Erlangga, 2005</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE502" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Keselamatan Ketenagalistrikan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE502</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu mengetahui tugas dan kewajiban dalam melaksanakan persyaratan, sistem dan
                    proses K3 di tempat kerja sesuai dengan peraturan dan perundang-undangan yang berlaku.                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >UU No. 1 Tahun 1970 Tentang K3, Peraturan UU tentang K3 Listrik, Dasar Keamanan Listrik,
                    Dasar Teknik Instalasi Listrik, Identifikasi Bahaya Listrik, Sistem Pengamanan Instalasi Listrik,
                    Khusus Kamar Persyaratan Instalasi Listrik, Lightning Protection Sistem, Klasifikasi Pengenaan,
                    Pengukuran Listrik, Pertolongan Pertama pada Kecelakaan Listrik.
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>UU No. 1 Tahun 1970 Tentang K3 Peraturan UU tentang K3 Listrik</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE503" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Operasi dan Pemeliharaan Pembangkit I </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE503</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menyusun Merencanakan dan mengoperasikan unit pembangkit,
                    Merencanakan dan mengevaluasi keandalan operasi serta faktor-faktor operasi lainnya,
                    Mengeluarkan rekomendasi untuk perbaikannya agar faktor ketersediaan (EAF) dapat optimal,
                    Melakukan first line maintenance, Melakukan optimasi dan evaluasi kinerja operasi, Merencanakan
                    dan mengelola bahan bakar serta mengevaluasi ketersediaan bahan bakar sesuai kebutuhan,
                    Merencanakan dan mengevaluasi transaksi jual beli sesuai parameter dalam perjanjian lual beli
                    tenaga listrik, Melakukan komunikasi dan pelaporan. Serta agar mahasiswa dapat mempraktekan
                    dan membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak dan
                    mengaplikasikan pada rangkaian yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Dasar-dasar manajemen operasi, Ruang lingkup program operasi sistem pembangkit, Perencanaan
                    pemeliharaan (Aspek-aspek terpadu, Pemeliharaan periodik), Prosedur pemeliharaan pembangkit,
                    Perencanaan operasi, Manajemen efisiensi, Indek kinerja pembangkit. Simulasi proses operasi
                    pembangkit dengan SIMGENICS
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Philiph Kiameh, Power Plant Electrical Equipment and System handbook, McGrawhill
                        2013</li>
                      <li>Philiph Kiameh, Power Plant Electrical Equipment Operation and maintenance Guide,
                        McGrawhill 2011</li>
                      <li>Zark Bedalov, Practical Power Plant Engineering, John Wiley and Sons, 2020</li>
                      <li>Damian Flynn, Thermal Power Plant Simulation and Control, IEE London UK 2003</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE504" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pembangkit Listrik 2</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE504</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menganalisis permasalahan dan proses pembakaran yang terjadi pada boiler,
                    menganalisis proses perubahan air menjadi superheated steam, mekanisme turbin pada pembangkit
                    serta sistem operasi kondenser secara umum pada PLTU
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Simulasi proses operasi pembangkit dengan SIMGENICS</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td ></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE505" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknologi Pelumasan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE505</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu memahami tentang pelumasan untuk di mesin. Serta agar mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak
                    dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >TRIBOLOGY, FRICTION, WEAR, LUBRICATION, LIQUID, SOLID,GAS LUBRICANT
                    LUBRICATION REZIMES NECESSARRY PROPERTIES OF LIQUID LUBRICANT THE
                    ROLE OF ADDITIVES, MINERAL OIL SYNTHETIC FLUIDS BIO LUBRICANT, ENGINE
                    OILS INDUSTRIAL LUBRICANTS GREASE, OXIDATIVE DEGRADATION.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>E.F Jones, Grease Lubrication, Esco Petroleum Coy Ltd</li>
                      <li>AE. Lindsay, Cutting Oils, Esco Petroleum Coy Ltd</li>
                      <li>O. Connor & Boyd, Standard Hand Book of Lubrication Engeneering</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN506" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Indonesia</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN506</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Matakuliah ini bertujuan agar mahasiswa memiliki pengetahuan serta sikap positif terhadap bahasa
                    Indonesia sebagai bahasa negara dan bahasa nasional dan mampu menggunakannya secara baik
                    dan benar untuk mengungkapkan pemahaman, rasa kebangsaan, dan cinta tanah air, serta untuk
                    berbagai keperluan di bidang ilmu, teknologi, seni, serta profesinya masing-masing.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Kedudukan Bahasa Indonesia; RagamBahasa; DiksiatauPilihan Kata; Kalimat ; Paragraf ; Jejaring
                    Ide; Ejaan yang disempurnakan ; Menuliskarangan; Narasi, deskripsi, eksposisi;
                    Argumentasidanpersuasi ; MenulisKaryaIlmiah ; MenulisMakalah ; Menulisartikel;
                    Menulisresensi;Menulis; Membaca untuk Menulis; Berbicara untuk Keperluan Akademik. </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Alwi, Hasan. dkk. 1998. Tata bahasa Baku Bahasa Indonesia. Jakarta: Balai Pustaka</li>
                      <li>Pusat Pembinaan dan Pengembangan Bahasa. 1993. Pedoman Umum Ejaan Bahasa
                        Indonesia yang Disempurnakan, Jakarta: Departemen Pendidikan dan Kebudayaan Indonesia</li>
                      <li>Widyamartaya. & Sudiati, Veronica. 1997. Dasar-dasar Menulis Karya Ilmiah. Jakarta:
                        Grasindo.</li>
                      <li>Samad, Daniel. 1997. Dasar-dasar Meresensi Buku. Jakarta: Grasindo</li>
                      <li>Kasali, Rhenald. 2006. Sukses Melakukan Presentasi. Jakarta: Gramedia Pustaka Utama.</li>
                      <li>Indriati, Etty. 2001. Menulis Karya Ilmiah. Jakarta: Gramedia Pustaka Utama</li>
                      <li>KamusBesarBahasa Indonesia. Jakarta: BalaiPustaka.</li>
                      <li>PedomanUmumEjaanBahasa Indonesia yang disempurnakan. Jakarta: BalaiPustaka.</li>
                      <li>Arifin, ZaenaldanAmranTasai. 2010. CermatBerbahasa Indonesia untukPerguruanTinggi.
                        Jakarta: AkademikaPressindo</li>
                      <li>Alwasih, ChaedardanSenny Suzanna Alwasilah. 2007. Pokoknyamenulis. Bandung:
                        Kiblat.</li>
                      <li>Suparno, dan Mohammad Yunus. 2007. KeterampilanDasarMenulis. Jakarta: Universtitas
                        Terbuka</li>
                      <li>Warsiman. 2007. KaidahBahasa Indonesia yang BenaruntukPenulisanKaryaIlmiah.
                        Bandung: DewaRuchi.</li>
                        <li>A.Arismunandar,TeknikTeganganTinggi</li>
                        <li>Diktat TeknikProteksi, Wahyudi, ITS</li>
                        <li>Diktat TeknikTeganganTinggi, I Made Yulistia Negara, ITS</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE508" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewirausahaan dan PJBTL</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE508</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mempelajari mata kuliah ini mahasiswa diharapkan dapat meningkatkan keempat skill
                    Bahasa Inggrisnya (listening, speaking, reading dan writing), khususnya skill readingnya sehingga
                    dapat memahami teks-teks berbahasa Inggris khususnya teks-teks atau buku-buku perkuliahan yang
                    berkenaan dengan dunia teknik. Selain itu, mahasiswa diharapkan dapat mempraktekkan
                    penerapan tata bahasa dalam membangun kalimat-kalimat Bahasa Inggris yang baik dan benar.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Electronics In The Home, Choosing A Course, present time , Full Time Students, past time
                    ,Component Values, Batteries, future time ,Making A Recording, Sound Engineer, noun &
                    pronoun , modal auxiliaries ,Remote Control, Alarm System, Radio, Transistor Characteristics,
                    Metal Detector, perfect time ,Music Center, Day Release Students connecting the idea , CDs,
                    gerund & infinitives, technician, passive voice , field engineer, adjective clause , job ads,
                    comparison , career, noun clause ,.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Glendinning, Eric H. and John McEwan. Oxford English for Electronics. Oxford
                        University Press. 2005.</li>
                      <li>Azar, Betty Schrampfer. Fundamental of English Grammar. Binarupa Aksara. 1993.</li>
                      <li>Cotton David et all, Market Leader (Intermediate).London: Pearson Education Limited.
                        2003.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE507" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewirausahaan dan PJBTL</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE507</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mengikuti mata kuliah ini diharapkan mahasiswa dapat memahami konsep kewirausahaan,
                    memiliki pengetahuan dan ketrampilan berwirausaha, mampu membuat perencanaan usaha
                    (business plan), mengelola dan mengembangkan usaha, mengadministrasikan dan menyusun
                    laporan usaha.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pembahasan silabus dan bentukan kelompok usaha, Konsep dan peran Kewirausahaan, Bagaimana
                    mendapatkan dan menangkap peluang usaha, Bagaimana mendesain produk/jasa yang “menjual”,
                    Teknik memasarkan produk/jasa, Memilih sumber-sumber pendanaan usaha yang menguntungkan,
                    Teknik Penyusunan Business Plan, Manajemen usaha kecil, Teknik penyusunan laporan keuangan
                    sederhana, Memilih bentuk badan usaha yang tepat, Kendala-kendala dalam berwirausaha, Strategi
                    pengembangan usaha</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Soesarsono Wijandi, Pengantar Kewirausahaan, Sinar Baru Algensindo, Bandung, 2000.</li>
                      <li>Thomas W Zimmerer dan Norman M Scarborough, Pengantar Kewirausahaan dan
                        Manajemen Bisnis Kecil, Person Education Asia, Jakarta, 2002.</li>
                      <li>Justin G. Longenecker dkk, Kewirausahaan Manajemen Usaha Kecil, Penerbit Salemba
                        Empat, Jakarta, 2001.</li>
                      <li>Geoffery G. Meredith, Kewirausahaan Teori dan Praktek, Lembaga Manajemen PPM,
                        Jakarta, 2000.</li>
                      <li>Masykur Wiratmo, Pengantar Kewiraswastaan Kerangka Dasar Memasuki Dunia Bisnis,
                        BPFE Yogyakarta, Yogyakarta, 2001.</li>
                      <li>Buchari Alma, Kewirausahaan, CV Alfabeta, Bandung, 2002.</li>
                      <li>Sutrisno Iwantono, Kiat Sukses Berwirausaha, Grasindo, Jakarta, 2002</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
    
  {{-- Semester 6 --}}
  <div class="modal fade" id="RPE601" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>HRSG dan Boiler</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE601</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mengikuti mata kuliah ini diharapkan mahasiswa mampu mengoperasikan
                    peralatan HRSG dan boiler PLTU sesuai prosedur standar operasi/instruksi kerja
                    (SOP/IK). Serta agar mahasiswa dapat mempraktekan dan membuktikan beberapa
                    teorema rangkaian di simulasi pada perangkat lunak dan mengaplikasikan pada rangkaian
                    yang lebih kompleks
                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >HEAT RECOVERY STEAM GENERATOR (HRSG), SISTEM AIR PENGISI,
                    KUALITAS AIR PENGISI, DEAERATOR DAN TANGKI AIR PENGISI, Sistem Kuras
                    (System Drain), Kontrol Boiler HRSG, Safety boiler HRSG, Siklus Carnot dan Siklus,
                    Rankine Sederhana, Siklus Rankine, Superheat dan Superheat Reheat, Jenis-Jenis Boiler,
                    Bagian – Bagian Boiler dan Alat Bantunya, Sirkulasi Air dan Uap, Sistem Bahan Bakar,
                    Vent dan Katup, Pengoperasian Boiler, Trouble shooting dan effisiensi boiler. Simulasi
                    dengan perangkat Lunak SimGenics</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Buecker, Brad, Basics of Boiler and HRSG Design, PennWell Corp, Year: 2002</li>
                      <li>David Lindsley, John Grist, Don Parker, Thermal Power Plant Control and
                        Instrumentation: The control of boilers and HRSGs, The Institution of Engineering and
                        Technology, Year: 2018
                        </li>
                      <li>V. Ganapathy, Steam Generators and Waste Heat Boilers: For Process and Plant
                        Engineers, CRC Press, Year: 2014</li>
                      <li>American Society of Mechanical Engineers, ASME SECTION VI 2013
                        Recommended Rules for the Care and Operation of Heating Boilers, ASME, Year: 2013</li>
                      <li>Kumar Rayaprolu, Boilers: A Practical Reference, CRC Press, Year: 2012</li>
                      <li>Mackay, John R.; Pillow, James T, Power Boilers: A Guide to Section I of the
                        ASME Boiler and Pressure Vessel Code, ASME Press, Year: 2011</li>
                      <li>Ganapathy V. Industrial Boilers and Heat Recovery Steam Generators. Design,
                        Applications, and Calculations, CRC Press, Year: 2003</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE602" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Perpipaan dan Tubing
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE602</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu memahami dan melaksanakan pemeliharaan pipa sesuai prosedur/
                    standar pemeliharaan / instruksi kerja. Serta agar mahasiswa dapat mempraktekan dan
                    membuktikan beberapa teorema rangkaian di simulasi pada perangkat lunak dan
                    mengaplikasikan pada rangkaian yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengertian Pipa dan Tube, Macam-macam Material Pipa dan Kegunaannya, Macammacam Sambungan Pipa, Macam-macam Perapat Sambungan Pipa, Indentifikasi Warna
                    Pipa, Jenis - jenis pemeliharaan pipa. Simulasi dengan menggunaka perangkat lunak
                    AUTOCAD PID.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Roy A. Parisher,Pipe Drafting and Design, Gulf Professional, Year: 2011</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE603" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pompa, Kompresor dan Blower 2
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE603</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menjelaskan prinsip kerja pompa, kompresor, dan blower. Mampu
                    merencana pompa, kompresor dan Blower serta instalasinya. Mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan
                    mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan teori dasar pompa positip dan non positip displacement, Perencanaan dasar
                    Pompa, Konstruksi Pompa, Operasi : kurva Head dan Pengaturan kapasitas, Pemasangan
                    dan Pemeliharaan Pompa, Perencanaan dasar Kompresor dan klasifikasi, Kompresi Gas
                    dan udara tekan, Konstruksi kompresor, Simulasi proses operasi pembangkit dengan
                    SIMGENICS
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Sularso, Pompa dan Kompresor</li>
                      <li>Marc Borremans, pump and compressor</li>
                      <li>Maurice L Adam, Powerplant Centifugal Pumps, Taylor and Francis, 2017</li>
                      <li>Anthony Giampaolo, Compressor Handbook: Principles and Practice
                      </li>
                      <li>Heinz P. Bloch, A Practical Guide to Compressor Technology, Second Edition</li>
                      <li>Brun K., Nored M.G, Guideline for Field Testing of Gas Turbine and Centrifugal
                        Compressor Performance</li>
                      <li>Paul Hanlon, Compressor handbook, McGraw-Hill, Year: 2001
                      </li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE604" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Ilmu korosi
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE604</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menjelaskan dan melakukan indentifikasi penyebab dan
                    penanggulangan korosi terutama pada material logam pembangkit tenaga listrik.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pemahaman tentang korosi pada material logam pembangkit, Jenis korosi dan pengaruh
                    Lingkungan, dan penyebab terjadinya korosi. Solusi korosi pada material logam
                    pembangkit.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>George Vachtsevanos, K. A. Natarajan, Ravi Rajamani, Peter Sandborn,
                        Corrosion Processes: Sensing, Monitoring, Data Analytics, Prevention/Protection,
                        Diagnosis/Prognosis and Maintenance Strategies, Springer International Publishing, Year:
                        2020</li>
                      <li>Maroš Halama (ed.), Jan Stoulil (ed.), Corrosion in Power Industry, Trans Tech,
                        Year: 2015</li>
                      <li>César A. C. Sequeira, High Temperature Corrosion Fundamentals and
                        Engineering, Wiley, Year: 2018
                        </li>
                      <li>Cicek, Volkan, Corrosion engineering and cathodic protection handbook : with
                        extensive question and answer section, John Wiley & Sons Inc. : Scrivener, Year: 2017</li>
                      <li>Schweitzer. Corrosion and Corrosion Protection Handbook, Taylor and
                        Francis;CRC, Year: 2017</li>
                      <li>R Winston Revie; Herbert Henry Uhlig, Uhlig's corrosion handbook, Wiley,
                        Year: 2011</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE605" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Standarisasi Kelistrikan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE605</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >10</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu mengerti dan mampu mengaplikasikan tentang standar standar yang
                    berlaku di kelistrikan dan juga di pembangkit
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >PUIL 2011, ASME, IEC, ANSI</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td ></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN606" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris II
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN606</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Setelah mempelajari mata kuliah ini mahasiswa diharapkan mampu berkomunikasi aktif
                    secara lisan, mampu untuk presentasi individual, dan mampu menulis tulisan ilmiah
                    sederhana dalam Bahasa Inggris, serta menguasai prinsip dasar tata bahasa dalam
                    membangun kalimat-kalimat Bahasa Inggris yang baik.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Writing Theory, Presentation Theory, Presentation Practice.
                  </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Fanany, Achmadand Uswatun Qoyyimah. Cara Mudah Menguasai IELS. Yogyakarta:
                        Bookmarks. 2005.</li>
                      <li>Pewell, Mark. 2002. Presenting in English: How to give Successful Presentation:
                        Boston: Heinle.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN607" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Olahraga 2
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN607</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >1</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td> 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td ></td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td ></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN608-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Agama Islam
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN608</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa memiliki pengetahuan agama Islam dan mampu mempraktekkannya dalam
                    kehidupan sehari-hari.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Tuhan Yang Maha Esa dan Ketuhanan pentingnya beragama dan Islam sebagai Agama;
                    Tuhan Yang Maha Esa dan Ketuhanan-Akidah dan Rukun Iman; Hukum-Sumber Ajaran
                    Agama Islam; Hukum-Fiqh Thoharoh atau Bersuci; Hukum-Fiqh Shalat; Hukum-Fiqh
                    Zakat; Hukum-Fiqh Puasa dan Haji; Hukum-Bimbingan Alquran; Hukum-Munakahat
                    atau Pernikahan, Pembentukan keluarga Sejahtera; Manusia, Masyarakat, Moral,
                    Kerukunan antar UmatBeragama, dan Politik-Etika Islam atau Akhlakul Karimah.
                    Manusia, Masyarakat, Moral, Kerukunan antar Umat Beragama, dan Politik-Muamalah;
                    Manusia, Masyarakat, Moral, Kerukunan antar Umat Beragama, dan Politik-Pembentukan
                    Masyarakat Islam; Ilmu Pengetahuan, Teknologi, Seni, dan Budaya; dan Korupsi menurut
                    pandangan Islam.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Razak, Nasruddin. 1996. Dienul Islam. Bandung: PT Ma'arif</li>
                      <li>Shihab, Quraish. 1994. Membumikan Al Quran. Bandung: Mizan</li>
                      <li>Shihab, Quraish. 1997. Wawasan Al Quran. Bandung: Mizan
                      </li>
                      <li>Rasyid, Sulaiman. 2001. Fiqih Islam. Bandung: Sinar Baru Algensindo</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN608-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Agama Kristen (Protestan & Katolik)
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN608</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mampu untuk (1) mengenal Allah, diri sendiri, sesama dan alam semesta; (2)
                    sehingga dengan itu dapat membangun relasi yang benar dan sehat dengan Allah, diri
                    sendiri, sesama, dan alam semesta; (3) dapat berpartisipasi secara bertanggung jawab
                    dalam mengembangkan kebiasaan baru yang lebih Injili.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pengenalan; Tuhan Yang Maha Esa; Manusia; Hukum; Moral; Ilmu PengetahuanTeknologi dan Seni; Kerukunan Antar Umat Beragama; Masyarakat; Budaya; Politik;
                    Konsolidasi & Refleksi Diri.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Sihombing, Belsink, dkk. Pendidikan Agama Kristen. 2009</li>
                      <li>Haryono, dkk. Pendidikan Agama Kristen Pada PT. 2009.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="KWN608-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Agama Buddha
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KWN608</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa diharapkan telah memiliki pengetahuan Agama Buddha dan mampu
                    mempraktekkannya dalam kehidupan sehari – hari.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Riwayat Hidup Buddha Gotama; Kitab Suci Agama Buddha (Tipitaka); Tuhan Yang
                    Maha Esa dalam Agama Buddha; Upacara dalam Agama Buddha; Hari Raya dalam
                    Agama Buddha; Tri Ratna/ Tiratana; Sila dalam Agama Buddha; Empat Kesunyataan
                    Mulia dan Jalan Mulia Berunsur Delapan; Hukum dalam Agama Buddha; Kerukunan
                    antar Umat Beragama.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Tim Penyusun. Kapita Selekta Agama Buddha. 2003. Jakarta: CV Dewi Kalyana
                        Abadi.</li>
                      <li>Wahyono Mulyadi. Pokok-Pokok Dasar Agama Buddha. 2002.
                        Jakarta:Departemen Agama RI.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
    
  {{-- Semester 7 --}}
  <div class="modal fade" id="RPE701" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Analisa Kegagalan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE701</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mengerti dan mampu melakukan analisa kegagalan terhadap sebuah peralatan
                    peralatan dipembangkit dan melakukan simulasi dengan menggunakan perangkat lunak.
                    Mahasiswa dapat mempraktekan dan membuktikan beberapa teorema rangkaian di
                    laboratorium dan mengaplikasikan pada rangkaian yang lebih kompleks.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Faktor-faktor penyebab kegagalan komponen mesin Panduan kegiatan analisis kegagalan
                    Studi kasus Analisis kegagalan pada sistem pemipaan akibat korosi Analisis kegagalan
                    pada pompa, SAIIDI, SAIFI. Perangkat lunak MATLAB/Scilab.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li> Neville W. Sachs, Practical Plant Failure Analysis: A Guide to Understanding
                        Machinery Deterioration and Improving Equipment Reliability, CRC Press, Year: 2020</li>
                      <li>Jose Luis Otegui, Failure Analysis: Fundamentals and Applications in
                        Mechanical Components, Springer International Publishing, Year: 2014</li>
                      <li>Stamatis, D. H, The ASQ pocket guide to failure mode and effect analysis
                        (FMEA), Amer Society for Quality, Year: 2014</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE702" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PLTGU
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE702</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mengerti dan mampu melakukan tentang pembangkit listrik gas uap.
                    Mahasiswa mengerti tentang operasi PLTGU. Mahasiswa dapat mempraktekan dan
                    membuktikan beberapa teorema rangkaian di laboratorium dan mengaplikasikan pada
                    rangkaian yang lebih kompleks
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Operasi combined cycle,Bryaton cycle, advanced gas turbines cycle, cycle analysis dan
                    simuasli dengan SIMGENICS </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Gulen, S. Can, Gas Turbine Combined Cycle Power Plants. CRC Press, Year:
                        2020</li>
                      <li>Meherwan P. Boyce, Handbook for Cogeneration and Combined Cycle Power
                        Plants, American Society of Mechanical Engineers, Year: 2001
                        </li>
                      <li>Roger W. Light, Consensus on pre-commissioning stages for cogeneration and
                        combined cycle power plants, ASME Press;John Wiley & Sons Ltd, Year: 2017
                        </li>
                      <li>Rolf Kehlhofer; et al, Combined-cycle gas & steam turbine power plants,
                        PennWell, Year: 2009</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE703" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem DCS dan Scada
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE703</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mahasiswa mengerti dan mampu melakukan tentang sistem Scada. Mahasiswa dapat
                    mempraktekan dan membuktikan beberapa teorema rangkaian di laboratorium dan
                    mengaplikasikan pada rangkaian yang lebih kompleks                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Aktuator industri, Pengenalan system, P&id, Data akuisisi, Interface ke komputer,
                    Mikrokontroler delta v , Program delta v, Macam-macam pemrograman dcs (open loop,
                    close loop, pid)
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Mini S Thomas; John D Mcdonald, Power system SCADA and smart grids, CRC
                        Press, Year: 2015</li>
                      <li>Robert Radvanovsky; Yaʻaḳov Brodsḳi, Handbook of SCADA/control systems
                        security, CRC Press, Year: 2013</li>
                      <li>Stuart G McCrady, Designing SCADA application software: a practical
                        approach, Elsevier, Year: 2013</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE705" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Tugas Akhir
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE705</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >6</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Memberi pengetahuan kepada mahasiswa agar dapat menyusun buku laporan Tugas Akhir
                    dengan baik dan dapat menyelesaikannya tepat waktu.                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan Penjelasan Buku Panduan TA, Bimbingan TA, Sidang TA, Revisi Sidang
                    TA.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Tim Penyusun, “Buku Panduan Penyusunan Tugas Akhir”, Teknik Elektro Politeknik
                        Negeri Batam,2013.</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE706" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pancasila
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE706</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Memberikan pengetahuan dan menumbuhkan sikap cinta tanah air serta sadar akan hak
                    dan tanggungjawabnya sebagai warga negara Indonesia terhadap bangsa dan negaranya
                    serta sebagai warga dunia.                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Pendahuluan, Filsafat Pancasila, Identitas Nasional, Politik dan Strategi, Demokrasi
                    Indonesia, Hak Asasi Manusia dan Rule of Law Hak Asasi Manusia, Hak dan kewajiban
                    warga Negara, Geopolitik Indonesia, Geostrategi Indonesia, CDA untuk Pendidikan
                    Kewarganegaraan di Perguruan tinggi</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Kaelan M S, Pendidikan Pancasila, Paradigma, Yogyakarta, 2004</li>
                      <li>Azzumardi Azra, Pendidikan Kewarganegaraan (Civil Education), ICCE UIN
                        Syarif Hidayatullah, Jakarta, 2003</li>
                      <li>Kaelan M S, Pendidikan Kewarganegaraan, Paradigma, Yogyakarta, 2007</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
    
  {{-- Semester 8 --}}
  <div class="modal fade" id="RPE801" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Etika Profesi Dunia Kerja</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE801</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan suatu pemahaman yang benar pada mahasiswa mengenai etika di dunia
                    kerja, aktivitas, permasalahan dan pemecahan masalah di dunia kerja
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Mengenal dan memahami masalah-masalah etika profesi dunia kerja</li>
                      <li>Mengenai dasar-dasar etika</li>
                      <li>Membentuk dan membangun moral</li>
                      <li>Mengenal kode etika profesi</li>
                      <li>Latihan memecahkan masalah etika berdasarkan teoti etika dan kode etik profesi</li>
                  </ul>
                  </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Hotzapple, MT and WD Reece, Concepts in Engineering, MGH, 2005</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
  <div class="modal fade" id="RPE802" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Magang Industri
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RPE802</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td >:</td>
                  <td>
                    <ul>
                      <li>Mahasiswa mengenal dunia kerja baik industri maupun jasa yang membutuhkan tenaga
                        kerja di bidang elektronika dan listrik</li>
                      <li>Mahasiswa dapat mengimplentasikan ilmu yang didapat diperkuliahan pada dunia kerja.</li>
                      <li>Memiliki pengetahuan tentang perkembangan teknologi terkini yang digunakan didunia
                        industri dibidang elektronikan dan listrik.</li>
                  </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td >
                  </td>
                </tr>
                <tr>
                  <td>Pokok Bahasan</td>
                  <td >:</td>
                  <td >Soft skill, hard skill, memadukan proses belajar akademik dengan pengalaman kerja yang terencana
                    dan terbimbing. Softskill, Proses mencari tempat magang, Proses Magang di Industri, Laporan
                    Magang.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    <ul>
                      <li>Pedoman Magang Industri Teknik Elektro</li>
                  </ul>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>  
    
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>