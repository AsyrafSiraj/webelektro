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
          <h2 class="animate__animated animate__fadeInDown">Teknik Instrumentasi</h2>
          <p class="animate__animated fanimate__adeInUp">Teknik Instrumentasi merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang pembuatan, pemeliharaan, dan pengoperasian instrumen yang digunakan pada beberapa perangkat seperti elektronika analog dan digital, perangkat mikrokontroler, komputer, dan sistem optik.</p>
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
          <p>Teknik Instrumentasi</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              Teknik Instrumentasi merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang pembuatan, pemeliharaan, dan pengoperasian instrumen yang digunakan pada beberapa perangkat seperti elektronika analog dan digital, perangkat mikrokontroler, komputer, dan sistem optik.
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
                    Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Instrumentasi untuk mendukung Indonesia Maju dan Sejahtera 2045.
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
                  Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang Instrumentasi melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
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
                    <li>1. Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang Instrumentasi yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat</li>
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
                    <li>1. Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang Instrumentasi.</li>
                    <li>2. Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang Instrumentasi.</li>
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
            <li>Mampu melakukan perbaikan peralatan mekanik, hidrolik, pneumatik, otomasi dan elektronika menurut prosedur di lapangan.</li>
            <li>Mampu menggunakan peralatan pengujian elektronika (seperti: osiloskop, multimeter, dan lain-lain) dan hand tools untuk melakukan troubleshooting dan perbaikan peralatan.</li>
            <li>Mampu melakukan perbaikan yang berhubungan pengukuran proses industri.</li>
            <li>Mampu melakukan inspeksi peralatan dan sistem untuk mendiagnosis kegagalan dengan menggunakan peralatan pengujian.</li>
            <li>Mampu menggambar piping and instrumentation diagram (P&ID) dengan berbantu computer aided design (CAD) dengan standar ISA.</li>
            <li>Mampu menggunakan sistem terkomputerisasi (sebagai kontrol dan antarmuka).</li>
            <li>Mampu melakukan kalibrasi peralatan sesuai dengan prosedur.</li>
            <li>Mampu melakukan instalasi dan merawat distributed control system (DCS), programmable logic control (PLC), supervisory control dan data acquisition (SCADA), dan jaringan kontrol proses berbasiskan fieldbus.</li>
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
                Capaian Pembelajaran (CP) program studi D3 Teknik Instrumentasi telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D3 Teknik Instrumentasi memiliki capaian pembelajaran sebagai berikut:
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
                <li>1. Mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku.</li>
                <li>2. Mampu menunjukkan kinerja bermutu dan terukur.</li>
                <li>3. Mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri.</li>
                <li>4. Mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih serta mengomunikasikannya secara efektif kepada pihak lain yang membutuhkan.</li>
                <li>5. Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya.</li>
                <li>6. Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya.</li>
                <li>7. Mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggung jawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri.</li>
                <li>8. Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa3" class="collapsed question">Keterampilan Khusus<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa3" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Mampu menerapkan matematika, sains alam, ilmu material, dan prinsip rekayasa ke dalam prosedur dan practical teknikal (technical practice) untuk menyelesaikan masalah teknologi dalam sistem dan proses Instrumentasi elektronika yang terdefinisi dengan jelas (well-defined).</li>
                <li>2. Mampu menyelesaikan masalah teknologi dalam sistem dan proses Instrumentasi elektronika yang terdefinisi dengan jelas (well-defined) dengan menggunakan analisis data yang relevan dari standar IPC, JEDEC, database, dan referensi serta memilih metode dengan memperhatikan faktor-faktor ekonomi, keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>3. Mampu merancang, merealisasikan rancangan, dan mengoptimasi rancangan Printed Circuit Board (PCB), Surface Mount Technology (SMT) dan menerapkan proses Integrated Circuit (IC) packaging sesuai dengan standar IPC dan JEDEC yang memenuhi kebutuhan spesifik dengan pertimbangan yang tepat terhadap masalah keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>4. Mampu melakukan soldering, desoldering, repair, rework dan modifikasi perangkat PCB yang memenuhi kebutuhan pengguna berdasarkan standar IPC dengan memperhatikan faktor-faktor ekonomi, keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>5. Mampu mengoperasikan dan melakukan perawatan perangkat sistem Instrumentasi elektronika secara berkesinambungan dengan mempertimbangkan faktor keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>6. Mampu menguji dan mengukur sistem Instrumentasi elektronika berdasarkan prosedur dan standar.</li>
                <li>7. Mampu menggunakan teknologi mutakhir dalam melaksanakan pekerjaan sistem Instrumentasi elektronika.</li>
                <li>8. Mampu mengkritisi prosedur operasional standar dalam penyelesaian masalah teknologi Instrumentasi elektronika yang telah/dan atau sedang diterapkan, dan dituangkan dalam bentuk kertas kerja</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Konsep teoretis sains alam dan matematika terapan secara umum.</li>
                <li>2. Konsep teoretis sains rekayasa, prinsip rekayasa untuk perancangan sistem Instrumentasi elektronika secara mendalam.</li>
                <li>3. Konsep teoritis cara pengujian dan pembacaan spesifikasi teknis komponen dan sistem Instrumentasi elektronika secara umum.</li>
                <li>4. Konsep teoritis metode, sumberdaya, perangkat IT, dan teknologi modern yang sesuai untuk menyelesaikan masalah rekayasa dalam bidang Instrumentasi elektronika secara umum.</li>
                <li>5. Konsep, prinsip dan metode pengukuran radio frekuensi pada komponen dan devais elektronika.</li>
                <li>6. Pengetahuan faktual dan metode aplikasi referensi teknis (IPC, JEDEC), serta peraturan yang berlaku di
                    wilayah kerjanya untuk penyelesaian masalah rekayasa dalam bidang Instrumentasi elektronika.</li>
                <li>7. Prinsip-prinsip penjaminan mutu produk.</li>
                <li>8. Pengetahuan faktual isu terkini dalam masalah ekonomi dan lingkungan secara umum pada bidang Instrumentasi elektronika.</li>
                <li>9. Prinsip dan tata cara kerja bengkel/studio dan kegiatan laboratorium, serta pelaksanaan keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>10. Prinsip dan teknik berkomunikasi efektif secara lisan dan tulisan.</li>
                <li>11. Pengetahuan faktual tentang perkembangan teknologi mutakhir dalam bidang Instrumentasi elektronika.</li>
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
                            <td style="max-width: 15px" >IN101</td>
                            <td style="max-width: 50px">Matematika Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >3</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN101"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">IN102</td>
                            <td style="max-width: 50px">Fisika Terapan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN102"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">IN103</td>
                            <td style="max-width: 50px">Kimia Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN103"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">IN104</td>
                            <td style="max-width: 50px">Dasar Pemograman</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN104"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">IN105</td>
                            <td style="max-width: 50px">Dasar Sistem Instrumentasi dan Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN105"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">IN106</td>
                            <td style="max-width: 50px">Manajemen Proyek</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN106"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">IN107</td>
                            <td style="max-width: 50px">Kesehatan, Keselamatan Kerja dan Lindung Lingkungan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN107"> Rincian</button>
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
                            <td style="max-width: 15px" >IN201</td>
                            <td style="max-width: 50px">Elektronika Analog</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN201"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">IN202</td>
                            <td style="max-width: 50px">Elektronika Digital</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN202"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">IN203</td>
                            <td style="max-width: 50px">Pemrograman Sistem Terbenam</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN203"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">IN204</td>
                            <td style="max-width: 50px">Sensor dan Sistem Akuisisi Data</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN204"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">IN205</td>
                            <td style="max-width: 50px">Proyek Pengukuran dan Akuisisi Data</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >3</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN205"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">PK4IN</td>
                            <td style="max-width: 50px">Pendidikan Bahasa Indonesia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK4IN"> Rincian</button>
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
                            <td style="max-width: 15px">IN301</td>
                            <td style="max-width: 50px">Seminar Proposal Projek Akhir</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN301"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">IN302</td>
                            <td style="max-width: 50px">Sistem Kontrol Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN302"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">IN303</td>
                            <td style="max-width: 50px">Programmable Logic Controller dan Aktuator</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">5</td>
                            <td >3</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN303"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">IN304</td>
                            <td style="max-width: 50px">Teknologi Sistem Informasi dan Komunikasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN304"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">IN305</td>
                            <td style="max-width: 50px">Proyek Monitor dan Kontrol</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >3</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN305"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">KU2IN</td>
                            <td style="max-width: 50px">Bahasa Ingris Umum</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >3</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU2IN"> Rincian</button>
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
                            <td style="max-width: 15px">IN401</td>
                            <td style="max-width: 50px">Teknik Kalibrasi dan Pengukuran</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN401"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">IN402</td>
                            <td style="max-width: 50px">SCADA dan DCS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN402"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">IN403</td>
                            <td style="max-width: 50px">Gambar Instrumentasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN403"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">IN404</td>
                            <td style="max-width: 50px">Proyek Akhir dan Laporan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">6</td>
                            <td >2</td>
                            <td >0</td>
                            <td >4</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN404"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">KU3IN</td>
                            <td style="max-width: 50px">Bahasa Inggris Dunia Kerja</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >3</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU3IN"> Rincian</button>
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
                            <td style="max-width: 15px">IN501</td>
                            <td style="max-width: 50px">Kuliah Pilihan 1 (Kewirausahaan)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN501"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">IN502</td>
                            <td style="max-width: 50px">Kuliah Pilihan 2 ( Internet of Things Industri )</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN502"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">IN503</td>
                            <td style="max-width: 50px">Kuliah Pilihan 3 (Instrumentasi Pertanian dan Perikanan)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN503"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">IN504</td>
                            <td style="max-width: 50px">Kuliah pilihan 4 (Instrumentasi Medis)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN504"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">IN505</td>
                            <td style="max-width: 50px">Kuliah Pilihan 5 (Proyek Sistem Aplikasi Instrumentasi)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >3</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN505"> Rincian</button>
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
                            <td style="max-width: 15px">IN601</td>
                            <td style="max-width: 50px">Magang Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >0</td>
                            <td >0</td>
                            <td >10</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#IN601"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">PK1IN</td>
                            <td style="max-width: 50px">Pendidikan Agama</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK1IN"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">PK2IN</td>
                            <td style="max-width: 50px">Pendidikan Pancasila</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK2IN"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">PK3IN</td>
                            <td style="max-width: 50px">Pendidikan Kewarganegaraan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK3IN"> Rincian</button>
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
              <h4 class="title"><a href="">Teknisi Instrumentasi</a></h4>
              <p class="description">
                Merawat, memperbaiki, dan mengkalibrasi peralatan instrumentasi industri seperti sensor, transmitter, kontroler, dan sistem pengukuran lainnya. Mereka juga bertanggung jawab untuk melakukan inspeksi rutin, pemeliharaan, dan memastikan kinerja yang optimal dari peralatan tersebut.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Otomasi Industri</a></h4>
              <p class="description">
                Mengkombinasikan pengetahuan tentang instrumentasi dengan pemrograman dan sistem kontrol untuk meningkatkan efisiensi dan otomatisasi proses industri. Mereka merancang dan mengimplementasikan sistem otomasi, seperti Distributed Control System (DCS), Programmable Logic Controller (PLC), dan Human-Machine Interface (HMI).
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Konsultan Teknik Instrumentasi</a></h4>
              <p class="description">
                Memberikan konsultasi dan solusi teknis kepada perusahaan yang membutuhkan sistem instrumentasi yang canggih dan efisien. Mereka membantu dalam pemilihan peralatan instrumentasi yang tepat, perencanaan sistem, serta pengawasan dan pelaksanaan proyek.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Spesialis Pengukuran dan Kalibrasi</a></h4>
              <p class="description">
                Bertanggung jawab untuk mengembangkan metode pengukuran yang akurat, melakukan kalibrasi peralatan instrumentasi, serta memastikan kepatuhan terhadap standar kualitas dan kepatuhan peraturan yang berlaku.
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
      <h3>Teknik Instrumentasi</h3>
      <p>Teknik Instrumentasi merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang pembuatan, pemeliharaan, dan pengoperasian instrumen yang digunakan pada beberapa perangkat seperti elektronika analog dan digital, perangkat mikrokontroler, komputer, dan sistem optik.</p>
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
<div class="modal fade" id="IN101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
      <div class="modal-body">
        
        <table class="table align-middle table-bordered  table-responsive-lg text-justify my-3">
          <tbody >
            
            <tr>
              <td>Mata Kuliah</td>
              <td >:</td>
              <td>Matematika Teknik</td>
            </tr>
            <tr>
              <td>Kode</td>
              <td >:</td>
              <td >IN101</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >3</td>
            </tr>
            <tr>
              <td>Deskripsi Mata Kuliah</td>
              <td >:</td>
              <td >
                Mata kuliah ini berisi tentang konsep matematika untuk menyelesaikan permasalahan di bidang instrumentasi dan kontrol.
                </td>
            </tr>
            <tr>
              <td>Capaian Pembelajaran Umum</td>
              <td >:</td>
              <td ><ul>
                      <li></li>
                      <li></li>
                  </ul>
              </td>
            </tr>
            <tr>
              <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Fisika Terapan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN102</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Mata kuliah ini berisi tentang konsep fisika untuk menyelesaikan permasalahan di bidang instrumentasi dan kontrol.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kimia Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN103</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Mata kuliah ini berisi tentang konsep kimia untuk menyelesaikan permasalahan di bidang instrumentasi dan kontrol.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Dasar Pemograman</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN104</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Mata kuliah ini berisi tentang struktur pemograman, membuat algoritma pemograman, serta pengaplikasian algoritma pemograman. 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Dasar Sistem Instrumentasi dan Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN105</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >5</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Mata kuliah ini berisi tentang prisip pengukuran, cara kerja alat ukur listrik dan cara menggunakan alat ukur listrik secara benar dan tepat,komponen dasar listrik, serta rangkaian dasar listrik DC dan AC.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Manajemen Proyek</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN106</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Matakuliah ini membahas framework dari manajemen proyek mencakup integrasi, ruang lingkup, waktu, biaya, kualitas, sumber daya manusia, faktor resiko, komunikasi dan procurement.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
<div class="modal fade" id="IN107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kesehatan, Keselamatan Kerja dan Lindung Lingkungan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN107</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >
                    Matakuliah ini membahas prinsip-prinsip dasar hukum keselamatan dan kesehatan kerja. Adapun teori-teori K3 meliputi pencegahan dan pengendalian kebakaran, identifikasi bahaya dan pengendalian resiko, safety sign, ergonomi, hygiene industry, bahaya listrik, Bahaya zat kimia dan P3K.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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

  {{-- Semester 2 --}}
  <div class="modal fade" id="IN201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektronika Analog</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN201</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahasa tentang dioda, Transistor, dioda empat layer (SCR, DIAC TRIAC), Operational Amplifiers (Op-Amp) Filter dan Osilator.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektronika Digital</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN202</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahasa tentang dasar teknik digital berupa sistem penomoran digital, gerbang rangkaian logika, rangkaian logika, aljabar Boolean, rangkaian kombinasi, rangkaian sequential, dan rangkaian penghitung.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemrograman Sistem Terbenam</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN203
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahasa tentang pemrograman perangkat keras berbasis mikrokontroler Latte Panda atau raspberry (Mini PC) berbasis bahasa pemograman python, sistem database dan interface C#.

                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sensor dan Sistem Akuisisi Data</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN204</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahasa tentang prinsip dasar sensor dan transducer, pengelolahan sinyal sensor, pengukuran signal output pada sensor, jenis-jenis sensor yang digunakan diindustri dan sistem akusisi data.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN205" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Pengukuran dan Akuisisi Data</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN205</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahasa tentang pengukuran, akuisisi data, dan manajemen pengelolaan proyek.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="PK4IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Bahasa Indonesia</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK4IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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

  {{-- Semester 3 --}}
  <div class="modal fade" id="IN301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Seminar Proposal Projek Akhir</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN301</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahas teknik penyusunan proposal sesuai dengan pedoman yang diterbitkan. Mahasiswa diberikan pilihan topik oleh Prodi Teknik Instrumentasi atau mengusulkan sebuah topik dengan meminta persetujuan dari dosen pembimbing. Kemudian, topik tersebut dilaporkan dalam Seminar Proposal Proyek Akhir.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Kontrol Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN302</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini berisi tentang sistem kontrol proses yang ada di industri. Mulai dari dasar sistem kontrol persamaan diferensial, blok diagram, respon frekuensi, kontrol open loop, kontrol close loop, PID, Fuzzy, tuning PID (trial and error, Ziegler) dan tuning Fuzzy.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Programmable Logic Controller dan Aktuator</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN303
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >5</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah ini berisi tentang sistem kendali relay, pemograman PLC, wiring PLC,wiring relay, pengoprasikan perangkat PLC tingkat dasar dan lanjut dengan input (sensor, push button)/output ( actuator yang terdiri dari pneumatic, hidrolik dan motor listrik).
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknologi Sistem Informasi dan Komunikasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN304</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Perkuliahan ini membahas mengenai Internet of Tings (IoT) terdiri dari jaringan kamunikasi data, media komunikasi data, dan Akusisi data.

                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Monitor dan Kontrol</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN305</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini membahas tentang monitor, kontrol dan dan manajemen pengelolaan proyek.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="KU2IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Ingris Umum</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU2IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    General business - kontrak, pemasaran, jaminan, perencanaan bisnis, konferensi. Offices - surat-menyurat, peralatan dan perabotan kantor, prosedur perkantoran, teknologi perkantoran, komputer. Personnel – iklan pekerjaan dan perekrutan, melamar dan wawancara, penerimaan pegawai, pensiun, gaji, promosi. Purchasing - pembelanjaan, pemesanan, pengiriman, faktur, persediaan. Finance and budgeting - perbankan, pajak, akunting, investasi, laporan keuangan. Management Issues – property & departments, board meetings & committees, kendali mutu, pengembanagan produk, renting & leasing.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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

  {{-- Semester 4 --}}
  <div class="modal fade" id="IN401" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknik Kalibrasi dan Pengukuran</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN401</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Perkuliahan ini membahas ISO 17025, Pengelolaan Lab kalibrasi, kalibrasi alat-alat ukur besaran listrik, kalibrasi sensor, kalibrasi transduser dan sistem dokumentasi.

                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN402" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SCADA dan DCS</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN402</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini berisi tentang pengenalan system Distributed Control System (DCS) buatan Emerson dengan nama DeltaV. Mahasiswa diajarkan setup DCS, troubleshooting, aplikasi teori control, komunikasi data, setup SCADA, koneksi PLC ke system SCADA.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN403" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Gambar Instrumentasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN403
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah Gambar instrumentasi berisi tentang pengenalan Pipe and tube, Valve Proses dan Utilitas pada industri, Standar Process, Process Flow Diagram (PFD), Piping and Instumentation Diagram (P&ID) dengan menggunakan software autocad.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN404" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Akhir dan Laporan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN404</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >6</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah Laporan Proyek Akhir merupakan lanjutan dari mata kuliah Seminar Proposal dengan target realisasi alat dan penyajian data dari alat yang telah dibuat.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="KU3IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris Dunia Kerja</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU3IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah ini merupakan kelas persiapan TOEIC yang ditujukan untuk mahasiswa Politeknik Negeri Batam yang nantinya akan mengambil sertifikasi Bahasa Inggris. Mahasiswa akan belajar terkait Review of English Test, English Test Techniques and Strategies, English Grammar, English Reading Comprehension, serta Listening Techniques and Strategies. Beberapa topik yang akan dibahas terdiri dari strategi menghadapi seluruh bagian dalam tes TOEIC, baik Listening (Photos, Question-Response, Conversation, Talks) maupun Reading (Incomplete Sentences, Text completion, Reading comprehension), disertai beberapa aktivitas belajar yang bertujuan meningkatkan productive skill (speaking dan writing).
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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

  {{-- Semester 5 --}}
  <div class="modal fade" id="IN501" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kuliah Pilihan 1 (Kewirausahaan)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN501
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Matakuliah ini berisi tentang membuat bisnis plan kanvas, Perencanaan 4P : Product, Price, Place dan Promotion.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN502" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kuliah Pilihan 2 ( Internet of Things Industri )</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN502</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah membahas tentang pengenalan teknologi akuisisi data, kontrol dan manajemen pada line industri berpusat dan berbasis internet. Pada matakuliah ini akan dibahas konsep dasar IoT; paradigma teknologi IoT; pengaplikasian teknologi pendukung IoT seperti: RFID, NFC, WSN dan WiFi; pengonfigurasian jaringan serta manajemen dan monitoring proses informasi berbasis Web pada line produksi atau industri.

                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN503" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kuliah Pilihan 3 (Instrumentasi Pertanian dan Perikanan)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN503</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah membahas tentang pengaplikasin teknologi instrumentasi pada bidang pertanian dan perikanan baik berupa membangun sistem, kontrol dan monitor.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN504" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kuliah pilihan 4 (Instrumentasi Medis)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN504</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah membahas tentang teknologi instrumentasi pada bidang kesehatan, beruapa sensor aktuator dan mambuat sistem sederhana untuk sistem kesehatan.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="IN505" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>MKuliah Pilihan 5 (Proyek Sistem Aplikasi Instrumentasi)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN505</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah yang membahas tentang Aplikasi instrumentasi diberbagai bidang ilmu kesehatan, pertanian, dan penerapan aplikasi interface berbasis mobile.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
    
  {{-- Semester 6 --}}
  <div class="modal fade" id="IN601" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Magang Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >IN601</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >10</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata Kuliah ini berisi tentang tata cara pelaporan magang industri baik pelaporan kegiatan magang mingguan dan laporan magang akhir, yang sesuai dengan format PBM Pelaksanaan Magang Politeknik Negeri Batam.

                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="PK1IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Agama
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK1IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Pendidikan Agama Islam merupakan matakuliah wajib yang harus diikuti oleh mahasiswa. Dalam Undang-Undang No. 12 tahun 2012 pasal 35 ayat 3 disebutkan bahwa kurikulum pendidikan tinggi wajib memuat mata kuliah Agama, Pancasila, Pendidikan Kewarganegaraan, dan Bahasa Indonesia untuk program sarjana dan diploma. Mata kuliah ini bertujuan untuk membentuk pribadi mahasiswa yang utuh (kaffah) dengan menjadikan ajaran Islam sebagai landasan berpikir, bersikap, dan berperilaku dalam pengembangan keilmuwan dan profesinya.
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="PK2IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Pancasila
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK2IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Pendidikan Pancasila adalah salah satu matakuliah wajib yang harus diikuti oleh mahasiswa. Dalam Undang-Undang No. 12 tahun 2012 pasal 35 ayat 3 disebutkan bahwa kurikulum pendidikan tinggi wajib memuat mata kuliah Agama, Pancasila, Pendidikan Kewarganegaraan, dan Bahasa Indonesia untuk program sarjana dan diploma. Mata kuliah ini bertujuan untuk mengantarkan mahasiswa dalam memantapkan kepribadiannya agar secara konsisten mampu mewujudkan nilai-nilai dasar keagamaan dan kebudayaan, rasa kebangsaan dan cinta tanah air sepanjang hayat. 
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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
  <div class="modal fade" id="PK3IN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Kewarganegaraan
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK3IN</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Pendidikan Kewargenagaraan merupakan matakuliah wajib yang harus diikuti oleh mahasiswa. Dalam Undang-Undang No. 12 tahun 2012 pasal 35 ayat 3 disebutkan bahwa kurikulum pendidikan tinggi wajib memuat mata kuliah Agama, Pancasila, Pendidikan Kewarganegaraan, dan Bahasa Indonesia untuk program sarjana dan diploma. Mata kuliah ini bertujuan untuk membentuk mahasiswa menjadi warga negara yang baik dan cerdas (smart and good citizen).
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Umum</td>
                  <td >:</td>
                  <td ><ul>
                          <li></li>
                          <li></li>
                      </ul>
                  </td>
                </tr>
                <tr>
                  <td>Capaian Pembelajaran Khusus</td>
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