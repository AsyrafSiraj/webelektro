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
          <h2 class="animate__animated animate__fadeInDown">Teknik Robotika</h2>
          <p class="animate__animated fanimate__adeInUp">Teknik Robotika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang perancang dan pengembangan mobile robot yang mampu berjalan secara autonomous, mendesain sistem robot otomatis yang digunakan untuk meningkatkan produksi dan level kepresisian pada industri yang spesifik.</p>
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
          <p>Teknik Robotika</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              Teknik Robotika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang perancang dan pengembangan mobile robot yang mampu berjalan secara autonomous, mendesain sistem robot otomatis yang digunakan untuk meningkatkan produksi dan level kepresisian pada industri yang spesifik. Selain itu lulusan prodi Teknik Robotika ini juga memiliki kemampuan untuk mengelola desain, membuat prototipe, dan menguji pengembangan produk untuk dipasarkan.
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
                    Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Robotika untuk mendukung Indonesia Maju dan Sejahtera 2045.
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
                  Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang Teknik Robotika melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
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
                    <li>1. Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang Teknik Robotika yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat</li>
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
                    <li>1. Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang Teknik Robotika.</li>
                    <li>2. Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang Teknik Robotika.</li>
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
            <li> Lulusan kami mampu secara aktif, kreatif dan inovatif mengidentifikasi dan memecahkan
              masalah yang berkaitan dengan teknologi robotika melalui penerapan prinsip-prinsip
              rekayasa</li>
            <li>Lulusan kami memiliki keterampilan personal dan interpersonal yang unggul untuk karier
              yang sukses di industri, akademisi, dan bisnis.</li>
            <li>Lulusan kami mampu beradaptasi dengan teknologi baru melalui penelitian terapan yang
              berkualitas, terbuka dan relevan, dan bekerja sama erat dengan masyarakat dan industri.</li>
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
                Capaian Pembelajaran (CP) program studi D4 Teknik Robotika telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D4 Teknik Robotika memiliki capaian pembelajaran sebagai berikut:
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
                <li>1. Mampu menerapkan pemikian logis, kritis, inovatif, bermutu, dan terukur dalam
                  melakukan pekerjaan yang spesifik di bidang keahliannya serta sesuai dengan standar
                  kompetensi kerja bidang robotika.</li>
                <li>2. Mampu menunjukkan kinerja mandiri, bermutu dan terukur.</li>
                <li>3. Mampu mengkaji kasus penerapan ilmu pengetahuan dan teknologi yang memperhatikan
                  dan menerapkan nilai humaniora sesuai dengan bidang keahlian robotika dalam rangka
                  menghasilkan prototype, prosedur baku, desain atau karya seni, menyusun hasil kajiannya
                  dalam bentuk kertas kerja, spesifikasi desain, atau esai seni, dan mengunggahnya dalam
                  laman perguruan tinggi.</li>
                <li>4. Mampu menyusun hasil kajian tersebut di atas dalam bentuk kertas kerja, spesifikasi
                  desain, atau esai seni, dan mengunggahnya dalam laman perguruan tinggi;
                .</li>
                <li>5. Mampu mengambil keputusan secara tepat berdasarkan prosedur baku, spesifikasi desain,
                  persyaratan keselamatan dan keamanan kerja dalam melakukan supervisi dan evaluasi
                  pada pekerjaannya.</li>
                <li>6. Mampu memelihara dan mengembangkan jaringan kerja sama dan hasil kerja sama di
                  dalam maupun di luar lembaganya.</li>
                <li>7. Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi
                  dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang
                  berada di bawah tanggungjawabnya;.</li>
                <li>8. Mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah
                  tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri.</li>
                <li>9. Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data
                  untuk menjamin kesahihan dan mencegah plagiasi.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa3" class="collapsed question">Keterampilan Khusus<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa3" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Mampu menerapkan pengetahuan, teknik, keterampilan dan peralatan modern
                  matematika, sains, teknik, dan teknologi untuk memecahkan masalah teknik secara luas
                  sesuai dengan disiplin ilmu robotika.</li>
                <li>2. Mampu merancang sistem, komponen, atau proses yang memenuhi kebutuhan khusus
                  untuk menyelesaikan masalah teknik secara luas sesuai dengan disiplin ilmu robotika.</li>
                <li>3. Mampu menerapkan komunikasi tertulis, lisan, dan grafis dalam lingkungan teknis dan
                  non-teknis secara luas serta mampu mengidentifikasi dan menggunakan literatur teknis
                  yang sesuai.</li>
                <li>4. Mampu melakukan tes standar, pengukuran, eksperimen, menganalisis dan menafsirkan
                  hasil untuk meningkatkan proses.</li>
                <li>5. Mampu berfungsi secara efektif sebagai anggota atau sebagai pemimpin tim teknis.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Konsep teoritis sains alam, matematika terapan secara umum.</li>
                <li>2. Konsep teoritis sains rekayasa dan prinsip-prinsip rekayasa secara mendalam.</li>
                <li>3. Konsep, prinsip, metoda dan teknik perancangan dan analisa sistem rekayasa robotika
                  menggunakan software simulasi dan teknologi mutakhir yang dapat diimplementasikan
                  menjadi sistem yang siap digunakan.</li>
                <li>4. Pengetahuan operasional lengkap tentang fungsi, cara mengoperasikan dan analisis data
                  atau informasi dari instrument yang umum digunakan untuk melakukan pekerjaan
                  teknologi rekayasa robotika.</li>
                <li>5. Pengetahuan faktual dan metode aplikasi, referensi teknis (kode dan standar) nasional dan
                  internasional serta peraturan yang berlaku di wilayah kerjanya untuk melakukan
                  pekerjaan teknologi rekayasa robotika.</li>
                <li>6. Prinsip-prinsip penjaminan mutu.</li>
                <li>7. Konsep dan prinsip pelestarian lingkungan.</li>
                <li>8. Pengetahuan faktual dan isu terkini di bidang teknologi rekayasa robotika dalam kaitannya
                  dengan masalah ekonomi, sosial dan ekologi secara umum.</li>
                <li>9. Prinsip dan tata cara kerja bengkel/studio dan kegiatan laboratorium, serta pelaksanaan
                  keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                  <li>10. Prinsip dan teknik berkomunikasi efektif secara lisan dan tulisan.</li>
                  <li>11. Pengetahuan faktual tentang perkembangan teknologi mutakhir dalam bidang teknologi
                    rekayasa robotika.</li>
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
                            <td style="max-width: 15px" >RE101</td>
                            <td style="max-width: 50px">Pengantar Teknik Robotika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE101"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE102</td>
                            <td style="max-width: 50px">Pemrograman Prosedural</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE102"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE103</td>
                            <td style="max-width: 50px">Prinsip Teknik Listrik dan Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE103"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE104</td>
                            <td style="max-width: 50px">Computer Aided Design and Drafting</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE104"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE105</td>
                            <td style="max-width: 50px">Lab Peralatan Mesin</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE105"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE106</td>
                            <td style="max-width: 50px">Kalkulus Terapan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE106"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RE107</td>
                            <td style="max-width: 50px">Kesehatan dan Keselamatan Kerja</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE107"> Rincian</button>
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
                            <td style="max-width: 15px" >RE201</td>
                            <td style="max-width: 50px">Proyek Rapid Prototyping</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE201"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE202</td>
                            <td style="max-width: 50px">Pemrograman Berorientasi Objek</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE202"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE203</td>
                            <td style="max-width: 50px">Aktuator dan Sistem Penggerak</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE203"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE204</td>
                            <td style="max-width: 50px">Statika dan Dinamika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE204"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE205</td>
                            <td style="max-width: 50px">Matematika Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE205"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE206</td>
                            <td style="max-width: 50px">Sistem Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE206"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RE207</td>
                            <td style="max-width: 50px">Design Thinking</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE207"> Rincian</button>
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
                            <td style="max-width: 15px">RE301</td>
                            <td style="max-width: 50px">Desain dan Fabrikasi Robotika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE301"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE302</td>
                            <td style="max-width: 50px">Pengantar Robotika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE302"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE303</td>
                            <td style="max-width: 50px">Desain dan Simulasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE303"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE304</td>
                            <td style="max-width: 50px">Computer Aided Manufacturing</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE304"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE305</td>
                            <td style="max-width: 50px">Sistem Kendali</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE305"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE306</td>
                            <td style="max-width: 50px">Manajemen Proyek Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE306"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK4RE</td>
                            <td style="max-width: 50px">Pendidikan Bahasa Indonesia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK4RE"> Rincian</button>
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
                            <td style="max-width: 15px">RE401</td>
                            <td style="max-width: 50px">Proyek Inovasi Agile</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE401"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE402</td>
                            <td style="max-width: 50px">Robot Operating System (ROS)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE402"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE403</td>
                            <td style="max-width: 50px">Programmable Logic Controllers</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE403"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE404</td>
                            <td style="max-width: 50px">Sensor dan Akuisisi Data</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE404"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE405</td>
                            <td style="max-width: 50px">Cloud Robotics</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE405"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE406</td>
                            <td style="max-width: 50px">Bahasa Inggris: Komunikasi Tertulis</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE406"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RE407</td>
                            <td style="max-width: 50px">Penulisan Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE407"> Rincian</button>
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
                            <td style="max-width: 15px">RE501</td>
                            <td style="max-width: 50px">Aplikasi Robotika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE501"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE502</td>
                            <td style="max-width: 50px">Data Flow Programming</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE502"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE503</td>
                            <td style="max-width: 50px">Robot Manipulator</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE503"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE504</td>
                            <td style="max-width: 50px">Bahasa Inggris: Presentasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE504"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE505</td>
                            <td style="max-width: 50px">Prinsip Rekayasa Kualitas</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE505"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE506</td>
                            <td style="max-width: 50px">Mata kuliah Pilihan 1</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE506"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK2RE</td>
                            <td style="max-width: 50px">Pendidikan Pancasila</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK2RE"> Rincian</button>
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
                            <td style="max-width: 15px">RE601</td>
                            <td style="max-width: 50px">Proyek Robotika Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE601"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE602</td>
                            <td style="max-width: 50px">Komunikasi Data Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE602"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE603</td>
                            <td style="max-width: 50px">Machine Learning</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE603"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE604</td>
                            <td style="max-width: 50px">Computer Vision</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE604"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">RE605</td>
                            <td style="max-width: 50px">Perencanaan Gerak</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE605"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">RE606</td>
                            <td style="max-width: 50px">Keterampilan dan Sikap Profesional</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE606"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">RE607</td>
                            <td style="max-width: 50px">Mata kuliah Pilihan 2</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE607"> Rincian</button>
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
                            <td style="max-width: 15px">RE701</td>
                            <td style="max-width: 50px">Proyek Akhir: Robotika Tingkat Lanjut</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE701"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">RE702</td>
                            <td style="max-width: 50px">Lokalisasi dan Pemetaan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE702"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">RE703</td>
                            <td style="max-width: 50px">Kendali Robotika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE703"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">RE704</td>
                            <td style="max-width: 50px">Kewirausahaan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE704"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">PK1RE</td>
                            <td style="max-width: 50px">Pendidikan Agama</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK1RE"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">PK3RE</td>
                            <td style="max-width: 50px">Kewarganegaraan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK3RE"> Rincian</button>
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
                            <td style="max-width: 15px">RE801</td>
                            <td style="max-width: 50px">Magang Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">20</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#RE801"> Rincian</button>
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
              <h4 class="title"><a href="">Pengembang Perangkat Lunak Robot</a></h4>
              <p class="description">
                Membantu dalam pengembangan perangkat lunak yang digunakan untuk mengontrol dan memprogram robot. Mereka bertanggung jawab untuk merancang antarmuka yang intuitif, sistem pengendalian robot, dan algoritma pemrosesan data.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Perancangan Mekanik Robot</a></h4>
              <p class="description">
                Merancang dan mengembangkan sistem mekanik robot. Mereka terlibat dalam pemilihan dan perancangan komponen, pemodelan 3D, analisis kekuatan struktural, dan pengujian prototipe.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Insinyur Kontrol Robot</a></h4>
              <p class="description">
                Bertanggung jawab untuk merancang sistem kontrol yang efisien untuk robot. Mereka mengembangkan algoritma kontrol, sistem pengendalian gerakan, dan melakukan analisis kestabilan.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Robotika Industri</a></h4>
              <p class="description">
                Memperoleh pekerjaan di industri manufaktur, otomasi, atau perusahaan teknologi untuk merancang, membangun, dan memprogram sistem robotik industri. Tugas mereka meliputi integrasi robot, pengembangan solusi otomasi, dan pemeliharaan robot.
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
      <h3>Teknik Robotika</h3>
      <p>Teknik Robotika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang perancang dan pengembangan mobile robot yang mampu berjalan secara autonomous, mendesain sistem robot otomatis yang digunakan untuk meningkatkan produksi dan level kepresisian pada industri yang spesifik.</p>
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
<div class="modal fade" id="RE101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
      <div class="modal-body">
        
        <table class="table align-middle table-bordered  table-responsive-lg text-justify my-3">
          <tbody >
            
            <tr>
              <td>Mata Kuliah</td>
              <td >:</td>
              <td>Pengantar Teknik Robotika</td>
            </tr>
            <tr>
              <td>Kode</td>
              <td >:</td>
              <td >RE101</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >3</td>
            </tr>
            <tr>
              <td>Deskripsi Mata Kuliah</td>
              <td >:</td>
              <td >Sebagai mahasiswa Teknik Robotika, Anda adalah bagian dari profesi
                teknik. Dalam mata kuliah ini, Anda akan mengembangkan identitas
                Anda sebagai insinyur modern yang akan berkontribusi secara
                kolaboratif kepada masyarakat. Mata kuliah ini akan memberikan
                kerangka kerja untuk praktik teknik dalam produk, proses, dan
                pembangunan sistem, dan memperkenalkan keterampilan pribadi dan
                interpersonal yang penting. Mahasiswa terlibat dalam praktik teknik
                melalui proyek robotika sederhana sebagai sebuah tim. Pemanfaatan
                bahasa pemrograman C, software computer-aided design (CAD), dan
                sistem kendali robot berbasis mikrokontroler ke dalam proyek akan
                membantu mahasiswa dalam membangun prototipe. Mahasiswa akan
                diminta untuk menunjukkan pemikiran kritis, kreativitas, dan
                keterampilan memecahkan masalah dalam pengalaman lab langsung.
                </td>
            </tr>
            <tr>
              <td>Pokok Bahasan</td>
              <td >:</td>
              <td >
              </td>
            </tr>
            <tr>
              <td>Bahan Pustaka</td>
              <td >:</td>
              <td >
                
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
<div class="modal fade" id="RE102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemrograman Prosedural
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE102</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mahasiswa akan mempelajari dasar-dasar pemrograman dalam
                    bahasa pemrograman C, termasuk iterasi, percabangan keputusan,
                    tipe data, dan ekspresi. Mahasiswa akan menggunakan platform
                    mikrokontroler untuk mengimplementasikan kode pemrograman C.
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
                  <td >.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
<div class="modal fade" id="RE103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Prinsip Teknik Listrik dan Elektronika
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE103</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mahasiswa belajar prinsip-prinsip listrik dan elektronik dan
                    instrumen untuk mengukur parameter. Fundamental DC meliputi
                    sumber, resistansi, Hukum Ohm dan Kirchhoff dengan rangkaian
                    sederhana, dioda, transistor, dan FET. Sistem AC meliputi
                    transformator dan elemen reaktif, produksi dan distribusi daya,
                    penyaringan, motor, dan relai. Elektronik Digital: Melakukan kalkulasi
                    aritmatika biner dasar; menganalisis dan mensintesis sirkuit logika kombinatorial.
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
                  <td >
                  
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
<div class="modal fade" id="RE104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Computer Aided Design and Drafting</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE104</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Memperkenalkan penggunaan perangkat lunak computer-aided
                    design & drafting (CADD) untuk membuat model 3D lengkap dengan
                    dokumentasi terperinci seperti dimensi, bahan yang digunakan,
                    bahkan detail proses desain. Topik meliputi pembacaan cetak biru,
                    proyeksi ortografi, pembagian, gambar rakitan dan pemodelan solid
                    dasar
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
                  <td >
                    
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
<div class="modal fade" id="RE105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Lab Peralatan Mesin</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE105</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mahasiswa akan mendemonstrasikan kemampuan mereka untuk
                    menginterpretasikan gambar dan memilih peralatan yang sesuai yang
                    dibutuhkan untuk memproduksi setiap bagian. Bagian yang dibangun
                    akan diperiksa oleh mahasiswa untuk memverifikasi pemenuhan
                    persyaratan bagian. Mahasiswa akan memperbaiki / mengganti
                    bagian yang ditemukan tidak sesuai spesifikasi. Alat inspeksi akan
                    digunakan dalam persyaratan validasi produk Mata kuliah. Topik akan
                    divalidasi secara eksperimental melalui pembuatan bagian mekanis
                    yang akan dirakit menjadi produk akhir.
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
<div class="modal fade" id="RE106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kalkulus Terapan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE106</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Pemanfaatan kalkulus diferensial dan integral, minimal, untuk
                    mengkarakterisasi kinerja statis dan dinamis dari sistem robotika.
                    Topik mata kuliah meliputi determinan, matriks, vektor, trigonometri,
                    bilangan kompleks, limit, turunan, integral, persamaan diferensial,
                    dan transformasi Laplace.
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
                  <td >
                  
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
<div class="modal fade" id="RE107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kesehatan dan Keselamatan Kerja</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE107</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini telah dikembangkan untuk memberikan pemahaman
                    tentang tanggung jawab kesehatan dan keselamatan di tempat kerja,
                    bagaimana risiko dikelola di tempat kerja dengan menggunakan
                    proses manajemen risiko, dan apa yang dapat Anda temukan di tempat
                    kerja untuk membantu Anda bekerja dengan aman.                    
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
                  <td >
                    
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
  <div class="modal fade" id="RE201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Rapid Prototyping</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE201</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Membekali mahasiswa dengan keterampilan berpikir desain yang
                    mendalam tentang ide, pembuatan prototipe, dan iterasi. Secara
                    konsisten menghasilkan ide yang lebih banyak dan lebih baik dengan
                    menggunakan pendekatan CDIO untuk brainstorming dan ideation.
                    Menurunkan risiko dengan menjalankan eksperimen kecil untuk
                    belajar dari kegagalan dalam lingkungan yang terkendali. Ciptakan
                    budaya eksperimen dalam tim dan perluas kapasitas mahasiswa
                    untuk berinovasi.                   
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemrograman Berorientasi Objek</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE202</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan konsep-konsep pemrograman
                    berorientasi objek kepada mahasiswa dengan latar belakang
                    paradigma pemrograman prosedural. Mata kuliah dimulai dengan
                    tinjauan singkat tentang struktur kontrol, tipe data, dan pemrosesan
                    array. Kemudian bergerak untuk memperkenalkan paradigma 
                    pemrograman berorientasi objek, dengan fokus pada definisi dan
                    penggunaan kelas bersama dengan dasar-dasar desain berorientasi
                    objek. Topik lainnya termasuk ikhtisar prinsip bahasa pemrograman,
                    analisis sederhana algoritma, teknik pencarian dan penyortiran dasar,
                    manajemen memori, pengenalan masalah rekayasa perangkat lunak,
                    dan etika dalam pengembangan perangkat lunak.
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
  <div class="modal fade" id="RE203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Aktuator dan Sistem Penggerak</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE203
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan aktuator dan sistem penggerak
                    untuk aktuator pneumatik & hidrolik dan aktuator listrik. Topik Mata
                    kuliah termasuk studi tentang teknologi tenaga fluida menggunakan
                    cairan atau udara tekan sebagai media transfer. Sistem hidrolik dan
                    pneumatik lengkap dipelajari, termasuk sumber daya, reservoir,
                    pompa, kompresor, saluran, katup, dan aktuator. Strategi pemecahan
                    masalah untuk mengidentifikasi, melokalisasi, dan memperbaiki
                    malfungsi. Pemeliharaan preventif dan masalah keselamatan juga
                    akan dibahas. Pengenalan penggerak elektronik daya dengan motor
                    mencakup konversi elektromagnetik dan energi, amplifier, motor,
                    relai, sistem tenaga, pemilihan khusus aplikasi mesin dan sistem
                    penggerak
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
                  <td >
                    
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
  <div class="modal fade" id="RE204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Statika dan Dinamika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE204</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mempelajari bagaimana melakukan perhitungan statik
                    pada objek dan faktor fisik apa saja yang mempengaruhi objek
                    tersebut serta konsep analisis gerak benda tegar dan sistem dinamik
                    serta pemodelan sistem robotik               
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
                  <td > 
                    
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
  <div class="modal fade" id="RE205" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >RE205</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas bagaimana menyelesaikan permasalahan
                    matematika seperti sistem persamaan linier, nonlinier, turunan,
                    integral, diferensial dan interpolasi dengan menggunakan pendekatan
                    metode numerik. Selain itu, juga dibahas statistik dasar dan
                    probabilitas Bayesian.                 
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
                  <td >.</td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE206</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mahasiswa belajar sistem elektronik, kinerja dasar dan aplikasinya.
                    Sistem komputer disajikan dengan mikrokontroler dan memberikan
                    kemampuan untuk menulis dan membaca data baik digital maupun
                    analog. Sistem analog termasuk dioda, transistor, penguat IC, dan
                    konversi analog-digital dan digital ke analog. Semester ditutup dengan
                    menggabungkan semua topik yang disampaikan dalam pengendalian
                    kecepatan motor
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE207" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Design Thinking</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE207</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mahasiswa akan terlibat dalam analisis kritis terhadap masalah dunia
                    nyata dan tantangan global. Mereka akan menunjukkan kemampuan
                    untuk mengenali peluang dan mengambil inisiatif dalam
                    mengembangkan solusi yang menerapkan prinsip-prinsip desain yang
                    berpusat pada manusia, dampak lokal dan global dari solusi teknik
                    pada individu, organisasi, dan masyarakat. Mahasiswa akan dapat
                    berkomunikasi secara efektif dan bekerja dengan baik dalam tim.
                    Masalah dan solusi akan diperiksa dari perspektif sosial, budaya, dan
                    etika.
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain dan Fabrikasi Robotika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE301</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td> Pada mata kuliah ini, mahasiswa akan merancang dan membangun
                    sistem robotika sederhana yang mengintegrasikan mekanik, listrik,
                    elektronik, dan pemrograman menjadi produk yang berfungsi. Dalam
                    proses merancang, membangun dan fabrikasi produk, mahasiswa
                    akan mengintegrasikan pengetahuan tentang desain sistem mekanik,
                    computer aided design (CAD), kelistrikan dasar dan elektronika yang
                    dipelajari pada modul lainnya. Berbagai aspek keterampilan pribadi
                    dan interpersonal seperti kerja tim, komunikasi, serta mengelola
                    pembelajaran ditanamkan secara sistematis dalam melaksanakan
                    proyek desain-fabrikasi.
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
                  <td >
                    
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
  <div class="modal fade" id="RE302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pengantar Robotika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE302</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan konsep dasar robotika dengan
                    penekanan pada pengalaman langsung dalam pemrograman dan
                    penerapan berbagai robot. Topik yang dibahas meliputi pengenalan
                    robotika, klasifikasi robot, pemrograman robot, pertimbangan
                    keselamatan, sensor, motor, integrasi robot dan sistem, dan dasardasar kinematika. Mahasiswa akan mendapatkan pengalaman
                    langsung dengan membangun robot, mengintegrasikan sensor dan
                    aktuator, dan mengembangkan algoritme untuk kontrol robot. Ini
                    adalah tujuan eksplisit dari Mata kuliah ini untuk memajukan
                    pemikiran kritis dan keterampilan komunikasi mahasiswa. Ini dicapai
                    melalui laboratorium, kerja kelompok, dan diskusi.
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
                  <td >
                    
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
  <div class="modal fade" id="RE303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain dan Simulasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE303
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan bagian standar, mekanisme robot,
                    ergonomis, desain produk, simulasi dinamis dalam perangkat lunak
                    CAD.
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Computer Aided Manufacturing</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE304</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini berfokus pada CNC milling sebagai proses otomasi
                    manufaktur yang diterapkan pada suatu proyek. Mata kuliah
                    memberikan pengetahuan tentang pemesinan berbantuan komputer
                    dalam milling dan pembubutan, termasuk teknik perencanaan proses,
                    pengkodean mesin, dan instruksi operasional untuk menghasilkan
                    komponen presisi. Topik yang dibahas antara lain manajemen
                    manufaktur dan keterampilan sistem, seperti perencanaan produk,
                    urutan manufaktur, waktu dan biaya. Mahasiswa juga belajar
                    bagaimana mempresentasikan ide dan hasil secara efektif
                    menggunakan metode berbasis lisan dan laporan.
                    
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
                  <td >
                    
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
  <div class="modal fade" id="RE305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Kendali</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE305</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini akan mencakup pengantar sistem kontrol, model
                    matematis sistem (fungsi transfer), analisa root locus, desain sistem
                    kontrol umpan balik PID, analisis kondisi steady state, analisis respons
                    waktu transient, sistem kontrol digital. Mata kuliah ini juga akan
                    membahas sistem fuzzy untuk keperluan kontrol pada robot.
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
                  <td >
                    
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
  <div class="modal fade" id="RE306" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Manajemen Proyek Teknik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE306</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan mahasiswa keterampilan yang
                    diperlukan untuk berhasil menyelesaikan proyek desain mereka.
                    Topik yang akan dibahas meliputi dinamika kelompok, etika, time line,
                    alokasi sumber daya, manajemen proyek dan evaluasi kinerja.
                    Keterampilan yang akan dikembangkan adalah komunikasi lisan dan
                    tertulis, konseptualisasi masalah, pemecahan masalah secara kreatif
                    dan presentasi.
                    
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
                  <td >
                   
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
  <div class="modal fade" id="PK4RE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >PK4RE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Dalam mata kuliah ini mahasiswa akan mendalami materi perkuliahan
                    yang meliputi: (a) etika akademik dan perbedaan jenis dan sistematika
                    penulisan ilmiah yang tepat; (b) rumusan bahasa Indonesia yang
                    digunakan dalam karya tulis ilmiah dengan memperhatikan kaidah
                    tata bahasa, PUEBI, dan KBBI; (c) referensi yang berkaitan dengan
                    karya tulis ilmiah; (d) ketepatan rumusan bahasa Indonesia dalam
                    penulisan karya ilmiah; (e) ketepatan penggunaan rumusan bahasa
                    Indonesia secara baik dan benar dalam penyusunan karya ilmiah; (f)
                    terampil menyampaikan hasil gagasan/gagasan secara lisan termasuk
                    teknik penyajian. (g) mampu menulis email secara efektif, laporan
                    teknis, dan manual instruksi.
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
                  <td >
                    
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
  <div class="modal fade" id="RE401" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Inovasi Agile</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE401</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Matakuliah ini akan membekali mahasiswa dalam menciptakan
                    produk atau solusi inovatif. Mahasiswa berkolaborasi dalam
                    kelompok multi-disiplin untuk mendefinisikan, merancang,
                    membangun, menguji, dan merilis produk.
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
                  <td >
                   
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
  <div class="modal fade" id="RE402" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Robot Operating System (ROS)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE402</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan pengantar khusus aplikasi untuk sistem
                    operasi robotika (ROS) sebagai sarana mahasiswa untuk berlatih
                    dalam mengembangkan aplikasi robot. Topik yang akan dibahass
                    meliputi apa itu ROS, konsep dasar ROS, node, topik, service, action,
                    dan parameter. Pada mata kuliah ini, mahasiswa akan menggunakan
                    ROS untuk memeriksa dan men-debug sistem robotika, membuat
                    prototipe aplikasi perintah dan kontrol sederhana untuk mobile robot.
                    Mahasiswa bisa mensimulasikan dan mengintegrasikan sensor ke
                    dalam ekosistem ROS. Selain itu, mata kuliah ini akan membahas
                    tentang pemodelan robot menggunakan ROS dan Gazebo.
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
                  <td >
                    
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
  <div class="modal fade" id="RE403" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Programmable Logic Controllers</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE403
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mengkaji konsep, perangkat, dan praktik umum yang
                    terkait dengan sistem kontrol industri modern. Perangkat kontrol
                    industri umum dipelajari. Mahasiswa belajar cara memasang,
                    memprogram, dan memecahkan masalah sistem kontrol berbasis
                    programmable logic controller (PLC). Aplikasi PLC fokus pada
                    interfacing dan mengendalikan berbagai perangkat elektromekanis
                    seperti motor dan aktuator pneumatik.                      
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE404" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sensor dan Akuisisi Data
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE404</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan teknik akuisisi dan pemrosesan data
                    berbasis mikrokontroller, termasuk sensor, sensor fusion, interfacing,
                    sampling, rekonstruksi, dan komunikasi komputer. Pemrosesan sinyal
                    berdasarkan analisis kesalahan dan statistik.                   
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
                  <td >
                    
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
  <div class="modal fade" id="RE405" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Cloud Robotics</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE405</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini menjelaskan tentang teknologi cloud dan
                    penerapannya dalam bidang robotika. Materi yang akan dibahas pada
                    mata kuliah ini antara lain machine to machine dan machine to cloud
                    communication. Arsitektur robot awan memanfaatkan kombinasi
                    awan ad-hoc yang dibentuk oleh komunikasi mesin-ke-mesin (M2M)
                    di antara robot yang berpartisipasi, dan awan infrastruktur yang
                    diaktifkan oleh komunikasi mesin-ke-awan (M2C). Mata kuliah ini
                    menjelaskan teknologi awan dan penerapannya dalam bidang
                    robotika. Materi yang akan dibahas pada mata kuliah ini antara lain
                    machine to machine dan machine to cloud communication. Arsitektur
                    robot awan memanfaatkan kombinasi awan ad-hoc yang dibentuk
                    oleh komunikasi mesin-ke-mesin (M2M) di antara robot yang
                    berpartisipasi, dan awan infrastruktur yang diaktifkan oleh
                    komunikasi mesin-ke-awan (M2C).                  
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
                  <td >
                    
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
  <div class="modal fade" id="RE406" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris: Komunikasi Tertulis
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE406</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan kepada mahasiswa untuk menulis
                    pesan yang jelas dan positif serta memahami strategi dasar menulis.
                    Pokok bahasan Mata kuliah ini mencakup beberapa teknik tipikal
                    untuk penulisan yang efektif dan akan memberikan mahasiswa latihan
                    dalam menulis berbagai macam pesan email, memo, surat, makalah
                    ilmiah, dan laporan tempat kerja.
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
                  <td >
                    
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
  <div class="modal fade" id="RE407" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Penulisan Teknik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE407</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Memberikan pengetahuan dan praktek dalam menulis teknis. Topik
                    utama meliputi analisis audiens; mengatur, menyiapkan dan merevisi
                    dokumen teknis pendek dan panjang; merancang dokumen
                    menggunakan fitur dan prinsip desain yang efektif, dan memformat
                    elemen menggunakan tabel dan grafik; melakukan penelitian; menulis
                    definisi teknis, dan deskripsi fisik dan proses; petunjuk penulisan; dan
                    pengeditan rekan individu dan kelompok.
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
                  <td >
                    
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
  <div class="modal fade" id="RE501" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Aplikasi Robotika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE501
                  </td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek ini membekali mahasiswa dengan pengetahuan tentang robot
                    yang umum digunakan, aplikasinya, keamanan robot, dan metode
                    dasar pemrograman robot. Tujuan dari Mata kuliah adalah untuk
                    membekali mahasiswa dengan pengetahuan dasar tentang robot.
                    Mahasiswa akan menyadari manfaat menggunakan robot, dapat
                    melakukan pemrograman robot dasar, dan dapat memilih robot yang
                    sesuai dan komponen terkait untuk aplikasi yang berbeda.
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
                  <td >
                    
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
  <div class="modal fade" id="RE502" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Data Flow Programming</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE502</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Pada mata kuliah ini mahasiswa akan mempelajari konsep
                    pemrograman aliran data menggunakan LabVIEW. Topik mata kuliah
                    termasuk konsep pemrograman, fitur, VI, dan fungsi yang dapat Anda
                    gunakan untuk membuat pengujian dan pengukuran, akuisisi data,
                    kontrol instrumen, pencatatan data, analisis pengukuran, dan aplikasi
                    pembuatan laporan. Mata kuliah ini dirancang untuk membangun
                    kemahiran mahasiswa dengan LabVIEW dan membantu mereka
                    mempersiapkan ujian NI Certified LabVIEW Associate Developer                  
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE503" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Robot Manipulator</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE503</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas robot manipulator dan aplikasi terkait di
                    lingkungan industri. Mata kuliah ini akan membahas materi yang
                    berkaitan dengan transformasi homogen, kinematika manipulator,
                    dan dinamika manipulator. Aplikasi robot manipulator yang akan
                    dibahas pada mata kuliah ini antara lain pick and place dan packaging.
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                   
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
  <div class="modal fade" id="RE504" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris: Presentasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE504</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Tujuan dari Mata kuliah ini adalah untuk mempersiapkan mahasiswa
                    untuk mempresentasikan dalam bahasa Inggris dan menjawab
                    pertanyaan dari audiens di konferensi internasional dan acara lainnya.
                    Para mahasiswa akan belajar dan berlatih berbagai aspek
                    memberikan presentasi akademik. Mereka akan mempelajari strategi
                    kunci yang diperlukan untuk meningkatkan komunikatif dan
                    kefasihan mereka
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
  <div class="modal fade" id="RE505" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Prinsip Rekayasa Kualitas</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE505</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini dirancang untuk memperkenalkan mahasiswa pada
                    teknik yang diperlukan untuk mempertahankan dan meningkatkan
                    kualitas dalam organisasi manufaktur. Mata kuliah ini mencakup
                    konsep mutu, manajemen mutu dan penjaminan mutu, mutu produk,
                    desain bagan kendali mutu, pengendalian proses statistik, dan
                    peningkatan mutu melalui rancangan dengan mempertimbangkan
                    pengembangan dan implementasi konsep. Mahasiswa juga
                    diperkenalkan dengan standar dan kode industri dan teknik, yaitu IEC,
                    FMEA, Six Sigma.
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
                  <td >
                    
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
  <div class="modal fade" id="RE506" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah Pilihan 1</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE506</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan topik pilihan yaitu: teknologi seluler,
                    augmented reality dan/atau virtual reality, atau topik khusus yang
                    berkaitan dengan robotika.
                    Augmented reality dan virtual reality: Mata kuliah ini menyajikan
                    pengantar teknologi augmented dan virtual reality, dengan penekanan
                    pada perancangan dan pengembangan pengalaman virtual dan
                    augmented reality interaktif. Mata kuliah ini akan mencakup sejarah
                    area, teori fundamental, teknik interaksi, dan area aplikasi spesifik.
                    Konsep dari bidang kontribusi visi komputer, grafik komputer dan
                    interaksi manusia komputer akan diperkenalkan dalam konteks
                    virtual dan augmented reality. Mahasiswa akan ditugaskan untuk
                    membuat aplikasi virtual atau augmented reality mereka sendiri
                    sebagai proyek Mata kuliah.
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
                  <td >
                  
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
  <div class="modal fade" id="PK2RE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Pancasila</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK2RE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mahasiswa memperoleh pengetahuan dan pengalaman belajar untuk
                    meningkatkan pemahaman dan kesadaran tentang: rasa kebangsaan
                    dan cinta tanah air melalui wawasan tentang Pancasila sehingga
                    menjadi warga negara yang memiliki daya saing, dan berdisiplin tinggi
                    serta berpartisipasi aktif dalam membangun kehidupan yang damai
                    berlandaskan sistem nilai Pancasila. Setelah perkuliahan ini,
                    diharapkan mahasiswa mampu mewujudkan diri sebagai warga
                    negara yang baik yang mampu menopang bangsa dan negara. Warga
                    negara yang cerdas, beradab dan bertanggung jawab atas
                    kelangsungan negara Indonesia dalam mengamalkan kemampuan
                    ilmu pengetahuan, teknologi dan seninya.
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
                  <td >
                    
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
  <div class="modal fade" id="RE601" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Robotika Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE601</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek ini berfokus pada peran robot dalam meningkatkan
                    keselamatan, produktivitas, dan keuntungan untuk industri tertentu:
                    manufaktur, medis, layanan, hiburan & militer. Analisis biaya integrasi
                    robot industri disediakan untuk mendukung peningkatan positif
                    dalam kinerja tugas dan pengurangan biaya operasional.
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
                  <td >
                    
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
  <div class="modal fade" id="RE602" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Komunikasi Data Industri
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE602</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini akan memaparkan mahasiswa ke banyak Jaringan
                    Industri berbeda yang akan ditemui dalam pengaturan manufaktur.
                    Mahasiswa akan mendapatkan pemahaman tentang infrastruktur
                    jaringan yang digunakan oleh mesin industri dan profil komunikasi
                    yang digunakan. Profil komunikasi akan mencakup tetapi tidak
                    terbatas pada: Komunikasi Serial, RS-232, Ethernet, Modbus, Profibus,
                    DevicNet, Foundational Fieldbus, dan AS-I Bus.
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
                  <td >
                   
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
  <div class="modal fade" id="RE603" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Machine Learning
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE603</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini akan membahas algoritma machine learning (ML)
                    digunakan untuk mengekstraksi dan menganalisis data manufaktur
                    dalam jumlah besar. Mahasiswa akan dikenalkan tentang teknik
                    analisis dasar ML dan algoritma ML yang umum digunakan untuk
                    aplikasi manufaktur. Mahasiswa akan membuat, melatih, dan
                    menerapkan model ML pada platform cloud untuk membuat solusi
                    kecerdasan buatan (AI). Dalam Mata kuliah ini mahasiswa akan
                    belajar tentang dasar-dasar jaringan syaraf tiruan, dan aplikasinya
                    untuk berbagai tugas AI. 
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                   
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
  <div class="modal fade" id="RE604" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Computer Vision
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE604</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan pengetahuan mendasar tentang
                    komputer vision, kontrol kualitas dan aplikasi Robotika secara
                    terintegrasi. Topik yang dibahas di mata kuliah ini yaitu dasar dasar
                    optik, iluminasi, jenis kamera dengan teknologi terkait, dan teknik
                    pengambilan gambar yang customize, algoritma untuk pemrosesan
                    gambar, analisis gambar, dan pengenalan pola.
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
                  <td >
                    
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
  <div class="modal fade" id="RE605" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Perencanaan Gerak</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE605</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas berbagai algoritma mengenai perencanaan
                    pergerakan robot, seperti algoritma A*, djikstra, RRT dan juga
                    membahas metode optimasi yaitu metode untuk mencari nilai paling
                    optimal dari suatu permasalahan. Metode optimasi yang akan dibahas
                    meliputi algoritma genetika, particle swarm optimization, pencarian
                    larangan dan metode Monte Carlo.
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
  <div class="modal fade" id="RE606" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Keterampilan dan Sikap Profesional

                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE606</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan etika profesional, integritas,
                    tanggung jawab dan akuntabilitas, perilaku profesional, perencanaan
                    karir seseorang secara proaktif, dan tetap mengikuti dunia insinyur.
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
                  </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE607" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah Pilihan 2
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE607</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td> Mata kuliah pilihan ini memberikan kesempatan kepada mahasiswa
                    untuk memilih mata kuliah dengan topik tertentu: Robot Seluler,
                    Robot Berkaki, Robot Medis, Robot Terbang, dan topik lainnya.                    
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
    
  {{-- Semester 7 --}}
  <div class="modal fade" id="RE701" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Akhir: Robotika Tingkat Lanjut</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE701</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >4</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Ini adalah proyek batu penjuru, pengalaman desain untuk mahasiswa
                    tingkat senior di bidang teknik robot. Dalam proyek ini, tim
                    mahasiswa akan merancang, membangun, dan menguji solusi untuk
                    masalah dunia nyata. Mahasiswa akan bekerja dengan topik lanjutan
                    dalam robotika yaitu: perencanaan gerak, penentuan posisi,
                    teleoperasi, kontrol, navigasi, interaksi manusia-robot.
                    
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
                  <td >
                   
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
  <div class="modal fade" id="RE702" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Lokalisasi dan Pemetaan
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE702</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas teknik pembuatan peta lingkungan dan
                    penentuan pose robot relatif terhadap peta lingkungan yang
                    diberikan. Algoritma lokalisasi yang akan dibahas adalah Extended
                    Kalman Filter (EKF), Unscented Kalman Filter (UKF), dan Monte Carlo
                    Localization (MCL). Selain itu, algoritma pemetaan grid hunian akan
                    dijelaskan untuk pembuatan peta.
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
                  <td > </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                   
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
  <div class="modal fade" id="RE703" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kendali Robotika
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE703</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan Behaviour Tree, Finite State Machine
                    (FSM), LQR, sistem pengontrol robot Sistem Linier. Mahasiswa juga
                    dilengkapi dengan sistem kontroler robotik pilihan yang tepat yang
                    sesuai dengan proyek yang berkaitan dengan robotika dalam aplikasi
                    nyata.
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE704" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewirausahaan
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >RE704</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memperkenalkan mahasiswa teknik pada konsep dan
                    praktik pemikiran kewirausahaan teknologi dan kewirausahaan.
                    Menggunakan ceramah, studi kasus, rencana bisnis, dan presentasi
                    mahasiswa, Mata kuliah ini mengajarkan kecakapan hidup dalam
                    pemikiran dan tindakan kewirausahaan yang dapat dimanfaatkan
                    mahasiswa dalam memulai perusahaan teknologi atau melaksanakan
                    proyek R&D.               
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="PK1RE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >PK1RE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah Pendidikan Agama Islam ini membahas dan mendalami
                    materi dengan substansi hubungan manusia dengan Tuhan untuk
                    menciptakan generasi yang bertakwa dengan paradigma Al-Qur'an;
                    hubungan manusia dengan sesama manusia dalam rangka
                    memadukan Iman, Islam dan Ihsan; dan hubungan antara manusia
                    dengan lingkungannya dalam rangka landasan Islam untuk
                    mewujudkan kesejahteraan. Maka lahirlah generasi yang religius,
                    humanis, berwawasan luas dan peduli.                
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="PK3RE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewarganegaraan
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK3RE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah Kewarganegaraan membahas dan menggali pengalaman
                    belajar pengetahuan dan keterampilan untuk meningkatkan
                    pemahaman dan kesadaran akan: rasa kebangsaan dan cinta tanah air,
                    demokrasi yang beradab, menjadi warga negara yang berkepribadian
                    Indonesia yang kompetitif, disiplin dan berpartisipasi aktif dalam
                    membangun kehidupan yang damai berdasarkan sistem nilai
                    pancasila. Mampu mewujudkan diri menjadi warga negara yang baik
                    yang mampu mendukung bangsa dan negara, warga negara yang
                    demokratis, yaitu warga negara yang cerdas, beradab dan
                    bertanggung jawab atas kelangsungan negara Indonesia dalam
                    mengamalkan kemampuan ilmu pengetahuan, teknologi dan seni.                  
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
                    </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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
  <div class="modal fade" id="RE801" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >RE801</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >20</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Pada mata kuliah ini mahasiswa akan mendapatkan pengalaman
                    industri yang berharga. Memperkenalkan mahasiswa pada budaya
                    kerja di industri dan mendapatkan pengalaman nyata dari materi
                    kuliah yang sudah mahasiswa pelajari pada semester sebelumnya
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
                    
                  </td>
                </tr>
                <tr>
                  <td>Bahan Pustaka</td>
                  <td >:</td>
                  <td >
                    
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