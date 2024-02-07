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
          <h2 class="animate__animated animate__fadeInDown">Teknik Mekatronika</h2>
          <p class="animate__animated fanimate__adeInUp">Teknik Mekatronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari kemampuan memahami, merancang, membuat dan memelihara sistem otomasi industri sehingga dapat berperan aktif dan handal dalam setiap kegiatan perencanaan, proses produksi, pengembangan kualitas output dan pemeliharaan hasil-hasil produksi.</p>
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
          <p>Teknik Mekatronika</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              Teknik Mekatronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang kemampuan memahami, merancang, membuat dan memelihara sistem otomasi industri sehingga dapat berperan aktif dan handal dalam setiap kegiatan perencanaan, proses produksi, pengembangan kualitas output dan pemeliharaan hasil-hasil produksi.
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
                    Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Mekatronika untuk mendukung Indonesia Maju dan Sejahtera 2045.
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
                  Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang Teknik Mekatronika melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
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
                    <li>1. Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang Teknik Mekatronika yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat</li>
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
                    <li>1. Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang Teknik Mekatronika.</li>
                    <li>2. Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang Teknik Mekatronika.</li>
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
            <li>Lulusan mampu membuat desain sistem otomasi/mekatronika, (electro-) pneumatic, dan SCADA, mulai dari merencanakan, menggambar skematik/diagram, membuat perencanaan anggaran, hingga pemilihan peralatan dan komponen sesuai dengan standar yang ada.</li>
            <li>Lulusan mampu melakukan pengembangan desain sistem otomasi dari sistem yang sudah ada menjadi lebih terintegrasi dengan memanfaatkan teknologi IoT.</li>
            <li>Lulusan mampu memastikan akurasi dan reliabilitas sistem otomasi & SCADA serta sistem keamanannya.</li>
            <li>Lulusan mampu mendesain arsitektur dan jaringan sistem kendali/otomasi.</li>
            <li>Lulusan mampu mengembangkan sistem instrumentasi dari sistem kendali yang sudah ada.</li>
            <li>Lulusan mampu melakukan troubleshooting sistem kendali dan mengidentifikasi jenis kerusakan, baik berupa kerusakan di sistem mekanik, elektronik, atau perangkat lunaknya.</li>
            <li>Lulusan mampu melakukan troubleshooting sistem kendali mulai dari sistem elektromekanik sederhana hingga tingkat tinggi, seperti PLC dan Robotika.</li>
            <li>Lulusan mampu membaca gambar/diagram sistem kendali mulai dari sistem pneumatik, electrical wiring, mekanik, hingga gambar sistem kendali yang kompleks.</li>
            <li>Lulusan mampu melakukan aktivitas periodic and predictive maintenance (PPM).</li>
            <li>Lulusan mampu melakukan pemrograman komputer, PLC, mikrokontroler, dan kendali cerdas pada sistem robotika.</li>
            <li>Lulusan mampu membaca dan mengimplementasikan electrical wiring diagram untuk industri.</li>
            <li>Lulusan menguasai salah satu perangkat lunak dalam menggambar menggunakan komputer, misalnya AutoCAD, Solidworks, dan sebagainya.</li>
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
                Capaian Pembelajaran (CP) program studi D4 Teknik Mekatronika telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D4 Teknik Mekatronika memiliki capaian pembelajaran sebagai berikut:
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
                <li>1. Mampu mengkaji kasus penerapan ilmu pengetahuan dan teknologi ang memperhatikan dan menerapkan nilai humaniora sesuai dengan bidang keahliannya dalam rangka menghasilkan prototype, prosedur baku, desain, atau karya seni, menyusun hasil kajiannya dalam bentuk kertas kerja, spesifikasi desain , atau esai seni, dan mengunggahnya dalam lamaran perguruan tinggi.</li>
                <li>2. Mampu menunjukkan kinerja mandiri, bermutu, dan terukur.</li>
                <li>3. Mampu menerapkan pemikiran logis, kritis, inovatif, bermutu, dan terukur dalam melakukan pekerjaan yang spesifik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan.</li>
                <li>4. Mampu menyusun hasil kajian tersebut di atas dalam bentuk kertas kerja, spesfikasi desain, atau esai seni, dan mengunggahnya dalam laman perguruan tinggi.</li>
                <li>5. Mampu memelihara dan mengembangkan jaringan kerja sama dan hasil kerja sama di dalam maupun di luar lembaganya.</li>
                <li>6. Mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggungjawabnya.</li>
                <li>7. Mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri. </li>
                <li>8. Mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi.</li>
                <li>9. Mampu mengambil keputusan secara tepat berdasarkan prosedur baku, spesifikasi desain, persyaratan keselamatan, dan keamanan kerja dalam melakukan supervisi dan evaluasi pada pekerjaannya.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa3" class="collapsed question">Keterampilan Khusus<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa3" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Mampu menerapkan dan menganalisa matematika teknik dan fisika terapan ke dalam prosedur, interpertasi instruksi, pengoperasian, pengujian, pemeliharaan, trouble Shooting dan perbaikan untuk menyelesaikan permasalahan bidang Teknik Mekatronika berdasarkan teorema yang bersesuaian.</li>
                <li>2. Mampu menggunakan perangkat lunak, simulasi dan penggunaan teknologi informasi untuk rekayasa dan penyelesaian pekerjaan dalam bidang Teknik Mekatronika.</li>
                <li>3. Mampu merancang dan merealisasi Printed Circuit Board (PCB) yang memenuhi kebutuhan pengguna dengan standar IPC dengan memperhatikan faktor K3.</li>
                <li>4. Mampu merancang dan merealisasi prototype Teknik Mekatronika yang memenuhi kebutuhan spesifik berdasarkan standar IEC dan ISO dengan memperhatikan K3.</li>
                <li>5. Mampu melakukan pengujian dan pengukuran komponen Teknik Mekatronika berdasarkan prosedur dan standar IEC dan ISO untuk menganalisis, menginterpretasi dan menerapkan sesuai peruntukan.</li>
                <li>6. Mampu membuat desain serta merancang gambar dengan menggunakan bantuan komputer untuk kemasan produk prototype Teknik Mekatronika.</li>
                <li>7. Mampu menggunakan komponen sensor, sistem Teknik Mekatronika, kelistrikan, pneumatic serta melaksanakan komisioning dengan memperhatikan K3.</li>
                <li>8. Mampu mengimplementasikan konsep teoritis, metoda dan perangkat analisis fungsi manajemen (perencanaan, pelaksanaan, pengarahan, monitoring, evaluasi dan pengendalian) serta prinsip kepemipinan dan kewirausahaan.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Menguasai konsep matematika teknik dan fisika terapan terkait dengan interpertasi instruksi, pengoperasian, pengujian, pemeliharaan dan perbaikan untuk menyelesaikan permasalahan bidang Teknik Mekatronika.</li>
                <li>2. Menguasai konsep tentang teknik pengujian dan pengukuran Teknik Mekatronika menggunakan prosedur serta standar IEC dan ISO.</li>
                <li>3. Menguasai perangkat lunak, simulasi dan penggunaan teknologi informasi untuk rekayasa dan penyelesaian pekerjaan dalam bidang Teknik Mekatronika.</li>
                <li>4. Menguasai konsep tentang standar IEC dan ISO pada bidang Teknik Mekatronika.</li>
                <li>5. Menguasai konsep tentang sains terapan pada bidang Teknik Mekatronika.</li>
                <li>6. Menguasai konsep berkomunikasi dengan memperhatikan etika komunikasi.</li>
                <li>7. Menguasai konsep SOP aktivitas laboratorium dan K3.</li>
                <li>8. Menguasai konsep standar IPC pada bidang teknologi design PCB.</li>
                <li>9. Menguasai konsep standar IEC/ANSI pada rancangan gambar teknik.</li>
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
                            <td style="max-width: 15px" >PK1MK</td>
                            <td style="max-width: 50px">PENDIDIKAN AGAMA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK1MK"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK111</td>
                            <td style="max-width: 50px">ALJABAR GEOMETRI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK111"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK112</td>
                            <td style="max-width: 50px">RANGKAIAN LISTRIK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK112"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK113</td>
                            <td style="max-width: 50px">DASAR PEMROGRAMAN</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK113"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK114</td>
                            <td style="max-width: 50px">ALAT UKUR</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK114"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK115</td>
                            <td style="max-width: 50px">DASAR ELEKTRONIKA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK115"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">MK116</td>
                            <td style="max-width: 50px">KESEHATAN DAN KESELAMATAN KERJA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK116"> Rincian</button>
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
                            <td style="max-width: 15px" >MK211</td>
                            <td style="max-width: 50px">KALKULUS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK211"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK212</td>
                            <td style="max-width: 50px">TEKNOLOGI SENSOR</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK212"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK213</td>
                            <td style="max-width: 50px">ELEKTRONIKA DIGITAL</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK213"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK214</td>
                            <td style="max-width: 50px">PEMROGRAMAN BERBASIS KOMPUTER</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK214"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK215</td>
                            <td style="max-width: 50px">DASAR TEKNIK LISTRIK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK215"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK216</td>
                            <td style="max-width: 50px">DESAIN BERBANTUAN KOMPUTER DASAR</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK216"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK2MK</td>
                            <td style="max-width: 50px">PENDIDIKAN PANCASILA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK2MK"> Rincian</button>
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
                            <td style="max-width: 15px">MK311</td>
                            <td style="max-width: 50px">MATEMATIKA TEKNIK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK311"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK312</td>
                            <td style="max-width: 50px">SISTEM STATIS DAN DINAMIS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK312"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK313</td>
                            <td style="max-width: 50px">PEMROGRAMAN SISTEM TERBENAM</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK313"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK314</td>
                            <td style="max-width: 50px">PENGGERAK ELEKTRIK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK314"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK315</td>
                            <td style="max-width: 50px">DESAIN BERBANTUAN KOMPUTER LANJUT</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK315"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK316</td>
                            <td style="max-width: 50px">SISTEM KOMPRESI FLUIDA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK316"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">KU1MK</td>
                            <td style="max-width: 50px">PENDIDIKAN OLAHRAGA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">1</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU1MK"> Rincian</button>
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
                            <td style="max-width: 15px">MK411</td>
                            <td style="max-width: 50px">PENGOLAHAN CITRA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK411"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK412</td>
                            <td style="max-width: 50px">PNEUMATIK DAN HIDROLIK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK412"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK413</td>
                            <td style="max-width: 50px">PROGRAMMABLE LOGIC CONTROLLER</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK413"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK414</td>
                            <td style="max-width: 50px">SISTEM KOMUNIKASI DATA DAN JARINGAN</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK414"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK415</td>
                            <td style="max-width: 50px">COMPUTER NUMERICAL CONTROL</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK415"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">PK3MK</td>
                            <td style="max-width: 50px">PENDIDIKAN KEWARGANEGARAAN</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK3MK"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK4MK</td>
                            <td style="max-width: 50px">PENDIDIKAN BAHASA INDONESIA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK4MK"> Rincian</button>
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
                            <td style="max-width: 15px">MK511</td>
                            <td style="max-width: 50px">MACHINE VISION</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK511"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK512</td>
                            <td style="max-width: 50px">STANDAR REGULASI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK512"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK513</td>
                            <td style="max-width: 50px">INSTALASI LISTRIK MESIN INDUSTRI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK513"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK514</td>
                            <td style="max-width: 50px">SISTEM KENDALI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK514"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK515</td>
                            <td style="max-width: 50px">INDUSTRIAL INTERNET OF THINGS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK515"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK516</td>
                            <td style="max-width: 50px">STATISTIKA INDUSTRI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK516"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">KU2MK</td>
                            <td style="max-width: 50px">BAHASA INGGRIS UMUM</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU2MK"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">KU3TRE</td>
                            <td style="max-width: 50px">Bahasa Inggris untuk Penulisan Akademik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU3TRE"> Rincian</button>
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
                            <td style="max-width: 15px">MK611</td>
                            <td style="max-width: 50px">SUPERVISORY CONTROL AND DATA ACQUISITION</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK611"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK612</td>
                            <td style="max-width: 50px">ROBOTIKA DAN KECERDASAN BUATAN</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK612"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK613</td>
                            <td style="max-width: 50px">SEMINAR PROPOSAL</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK613"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK614</td>
                            <td style="max-width: 50px">DESAIN SISTEM MEKATRONIKA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK614"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK615</td>
                            <td style="max-width: 50px">ERGONOMIS INDUSTRI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK615"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK616</td>
                            <td style="max-width: 50px">MANAJEMEN PROYEK</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK616"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">KU3MK</td>
                            <td style="max-width: 50px">BAHASA INGGRIS DUNIA KERJA</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU3MK"> Rincian</button>
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
                            <td style="max-width: 15px">MK711</td>
                            <td style="max-width: 50px">PENULISAN DOKUMEN TEKNIS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK711"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MK712</td>
                            <td style="max-width: 50px">KEWIRAUSAHAAN</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK712"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">MK713</td>
                            <td style="max-width: 50px">TUGAS AKHIR</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">8</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK713"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">MK714</td>
                            <td style="max-width: 50px">DISTRIBUTED CONTROL SYSTEM</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK714"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">MK715</td>
                            <td style="max-width: 50px">PERSIAPAN TES KEMAMPUAN BAHASA INGGRIS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">1</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK715"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">MK716</td>
                            <td style="max-width: 50px">: KEGIATAN PEMBELAJARAN DI LUAR KAMPUS</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK716"> Rincian</button>
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
                            <td style="max-width: 15px">MK811</td>
                            <td style="max-width: 50px">MAGANG INDUSTRI</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >0</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MK811"> Rincian</button>
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
              <h4 class="title"><a href="">Technopreneur Mekatronika</a></h4>
              <p class="description">
                Mengembangkan gagasan baru bagi permasalahan industri yang melibatkan penggunaan mesin, proses elektronika dan teknologi komputer. Membangun dan menguji coba pabrik yang bergerak dalam bidang produksi dengan mengkombinasikan manufaktur dan teknologi untuk meningkatkan efisiensi proses.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Design Engineering</a></h4>
              <p class="description">
                Mendesain dan membangun produk baru secara utuh dengan mengintegrasikan berbagai teknologi, contoh : sistem parkir otomatis untuk pusat perbelanjaan, mesin selam, drone
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Automation Engineer</a></h4>
              <p class="description">
                Mengembangkan, menerapkan, dan memelihara sistem kontrol otomatis yang kompleks, termasuk penggunaan sensor, aktuator, dan perangkat elektronik lainnya.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Analis Sistem Mekatronika</a></h4>
              <p class="description">
                Menggunakan pemodelan dan analisis komputer untuk mengoptimalkan kinerja sistem mekatronika dan mengidentifikasi perbaikan yang diperlukan.
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
      <h3>Teknik Mekatronika</h3>
      <p>Teknik Mekatronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang kemampuan memahami, merancang, membuat dan memelihara sistem otomasi industri sehingga dapat berperan aktif dan handal dalam setiap kegiatan perencanaan, proses produksi, pengembangan kualitas output dan pemeliharaan hasil-hasil produksi.</p>
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
<div class="modal fade" id="PK1MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
      <div class="modal-body">
        
        <table class="table align-middle table-bordered  table-responsive-lg text-justify my-3">
          <tbody >
            
            <tr>
              <td>Mata Kuliah</td>
              <td >:</td>
              <td>PENDIDIKAN AGAMA</td>
            </tr>
            <tr>
              <td>Kode</td>
              <td >:</td>
              <td >PK1MK</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >2</td>
            </tr>
            <tr>
              <td>Deskripsi Mata Kuliah</td>
              <td >:</td>
              <td >Mata kuliah ini meliputi sikap spiritual, sikap sosial, pengetahuan,
                dan keterampilan:
                <ul>
                  <li> Sikap spiritual: Menghayati dan mengamalkan ajaran agama
                    yang dianutnya sebagai pola hidup dalam konteks akademik,
                    dan/atau profesi.</li>
                  <li>Sikap sosial: Mengembangkan perilaku (jujur, disiplin, tanggung
                    jawab, peduli, santun, ramah lingkungan, gotong royong, kerja
                    sama, cinta damai, responsif dan proaktif), menunjukkan sikap
                    sebagai bagian dari solusi atas berbagai permasalahan bangsa,
                    serta memosisikan diri sebagai agen transformasi masyarakat yang
                    berakhlak mulia dalam membangun peradaban bangsa yang
                    memancarkan nilai dan moral Pancasila, dan membangun dunia
                    yang sejahtera, aman, dan damai.</li>
                  <li>Pengetahuan: Memahami, menerapkan, menganalisis,
                    mengevaluasi, dan mencipta pengetahuan faktual, konseptual,
                    prosedural, dan metakognitif, dengan wawasan kemanusiaan,
                    kebangsaan, kenegaraan, dan peradaban terkait berbagai
                    fenomena, dan kejadian, serta menggunakannya pada bidang
                    kajian yang spesifik sesuai dengan bakat dan minatnya.</li>
                  <li>Keterampilan: Mengolah, menalar, mencipta, dan menyaji
                    berbagai hal dalam ranah konkret dan abstrak secara mandiri serta
                    bertindak secara efisien, efektif, dan kreatif, serta menggunakannya
                    sesuai kaidah keilmuan dan/atau keprofesian.</li>
                </ul>
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
<div class="modal fade" id="MK111" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>ALJABAR GEOMETRI
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK111</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini membahas tentang ilmu dasar matematika yang
                    meliputi persamaan linier, persamaan kuadrat, persamaan
                    irasional, matriks, determinan, trigonometri, dan bilangan kompleks.
                    Mata kuliah ini bertujuan agar mahasiswa memiliki kemampuan
                    logika dan analisis yang baik dalam memecahkan masalah
                    matematis dasar.
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
<div class="modal fade" id="MK112" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>RANGKAIAN LISTRIK
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK112</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Materi yang dipelajari pada mata kuliah ini meliputi aplikasi hukum
                    dan teorema rangkaian listrik dan cara mengukur dan membuktikan
                    rangkaian listrik arus searah yang tersusun dari beberapa resistor
                    dengan berbagai konfigurasi.
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
<div class="modal fade" id="MK113" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DASAR PEMROGRAMAN</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK113</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini membekali mahasiswa dengan pengetahuan tentang
                    dasar pemograman C pada sistem operasi Windows. Pembahasan
                    diawali dengan pengenalan main program, variabel, tipe data,
                    keywords, operators, dan penggunaan script C dengan fungsifungsi khusus seperti if, else-if, switch-case, while, do-while, break,
                    dan continue. Mata kuliah ini juga membahas algoritma dan logika
                    berpikir untuk menyelesaikan masalah/kasus dalam pembuatan
                    aplikasi program C menggunakan konsep-konsep pemograman
                    seperti fungsi, array, string, pointer, struktur dan I/O file.
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
<div class="modal fade" id="MK114" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>ALAT UKUR</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK114</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini mempelajari tentang tata cara penggunaan alat ukur
                    elektronika mencakup akurasi, presisi, resolusi dan kalibrasi alat
                    ukur. Alat ukur yang akan dipelajari antara lain multimeter analog
                    dan digital, function generation, watt meter, LCR meter, frequency
                    counter, dan digital/analog IC tester.
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
<div class="modal fade" id="MK115" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DASAR ELEKTRONIKA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK115</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini membahas beberapa komponen elektronika dasar,
                    seperti dioda, transistor, dan operational amplifier (op-amp).
                    Mahasiswa diberikan pemahaman mengenai prinsip kerja dan
                    karakteristik setiap komponen tersebut beserta contoh-contoh
                    aplikasinya. Pokok bahasan yang diajarkan dalam mata kuliah ini
                    antara lain: pengantar semikonduktor, PN junction, dioda, transistor
                    BJT, titik kerja transistor, transistor sebagai penguat, transistor
                    sebagai saklar, pengenalan op-amp, inverting dan non-inverting opamp, dan aplikasi op-amp (summing amplifier dan comparator).
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
<div class="modal fade" id="MK116" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>KESEHATAN DAN KESELAMATAN KERJA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK116</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini membekali mahasiswa mengenai pentingnya
                    Keselamatan dan Kesehatan Kerja (K3) disertai beberapa
                    metode/cara untuk meningkatkan K3 untuk para pekerja. Kuliah ini
                    menjelaskan prinsip-prinsip dasar hukum K3. Teori K3 yang
                    dipelajari meliputi konsep K3, keselamatan kerja dan turunannya,
                    konsep kesehatan kerja dan masalah yang terjadi akibat melalaikan
                    K3, analisis sumber bahaya lingkungan dan efek yang
                    ditimbulkannya, konsep fisiologi dalam K3, penggunaan bahan-bahan kimia yang bersifat toksi/racun ditempat kerja, simbol K3
                    (safety sign) di tempat kerja, prinsip ergonomi dalam melakukan
                    pekerjaan dalam kaitan dengan K3, analisis fungsi-fungsi
                    manajemen K3, pencegah kebakaran (fire safety), dan prinsip dasar
                    P3K.                    
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
  <div class="modal fade" id="MK211" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>KALKULUS</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK211</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa agar mampu memahami dan
                    menjelaskan bilangan , variabel dan fungsi, fungsi dan limit, turunan
                    dan penggunaannya serta integral dan penggunaannya.                    
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
  <div class="modal fade" id="MK212" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>TEKNOLOGI SENSOR</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK212</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang teknologi berbagai macam
                    sensor yang banyak digunakan dalam industri di bidang teknik
                    mekaronika. Hasil pembacaan sensor diolah menjadi data digital
                    untuk kemudian digunakan sebagai input dalam sebuah sistem
                    mekatronika. Mata kuliah ini juga mambahas berbagai macam jenis
                    sensor, seperti sensor optik, suhu, mekanik, flow, getaran,
                    pressure, strain, dan sensor kimia. Selain itu, mata kuliah ini juga
                    mempelajari berbagai macam teknik pengolahan data sensor
                    hingga bisa ditampilkan secara real time dan akurat.
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
  <div class="modal fade" id="MK213" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>ELEKTRONIKA DIGITAL</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK213
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
                  <td>Mata kuliah ini bertujuan untuk memberikan pengenalan dasar
                    teknik digital berupa sistem penomoran digital, gerbang rangkaian
                    logika, rangkaian logika, aljabar Boolean, rangkaian kombinasi,
                    rangkaian sekuensial, dan rangkaian penghitung (counter).
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
  <div class="modal fade" id="MK214" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PEMROGRAMAN BERBASIS KOMPUTER</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK214</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini berisi mengenai pemrograman komputer pada
                    sistem operasi Windows. Pada mata kuliah ini, mahasiswa
                    merancang sebuah aplikasi dengan menggunakan pemrograman
                    berbasis text (misalnya C#) dan pemrograman berbasis gambar
                    (misalnya Labview). Mahasiswa juga dibkali dengan teknik
                    membaca dan mongontrol perangkat keras yang terkoneksi dengan
                    aplikasi komputer, serta teknik menyimpan data ke dalam database.                 
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
  <div class="modal fade" id="MK215" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DASAR TEKNIK LISTRIK</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK215</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mempelajari konsep dasar kapasitor, magnet,
                    induktor, bilangan kompleks, tegangan AC, Rangkaian AC, daya
                    AC, sistem 3 phasa dan transformator.                   
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
  <div class="modal fade" id="MK216" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DESAIN BERBANTUAN KOMPUTER DASAR</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK216</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mempelajari konsep dasar gambar teknik yang
                    meliputi cara membaca gambar, proyeksi gambar, skala gambar,
                    membuat kepala gambar, cetak gambar, dan menggambar diagram
                    instalasi listrik menggunakan Pedoman Umum Instalasi Listrik
                    (PUIL) untuk membuat diagram instalasi listrik mesin industri. Mata
                    kuliah ini juga membekali mahasiswa dalam mendesain gambar 2D
                    ke 3D dan dari 3D ke 2D menggunakan perangkat lunak Computer
                    Aided Drafting (CAD) untuk menghasilkan rancangan sistem
                    mekatronika. Sistem mekatronika yang dirancang tersebut
                    mempertimbangkan faktor ekonomis, standar regulasi, ergonomis, 
                    kemungkinan proses manufaktur, dan pengembangan untuk
                    membuat desain sistem lebih lanjut. 
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
  <div class="modal fade" id="PK2MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENDIDIKAN PANCASILA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK2MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas hal-hal berikut:
                    <ul>
                      <li>Perkenalan dan Pemantapan Sistem Perkuliahan</li>
                      <li>Pancasila dalam Konteks Sejarah Bangsa Indonesia</li>
                      <li>Nilai-Nilai Filsafat Pancasila</li>
                      <li>Pancasila sebagai Dasar Negara</li>
                      <li>Pancasila sebagai Ideologi
                      </li>
                      <li>Pancasila sebagai Pandangan Hidup</li>
                      <li>Pancasila sebagai Pemersatu Bangsa</li>
                      <li>Pancasila sebagai Etika Politik</li>
                      <li>Pancasila dalam konteks ketatanegaraan Republik Indonesia</li>
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
  <div class="modal fade" id="MK311" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>MATEMATIKA TEKNIK</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK311</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td> Mata kuliah ini membahas aplikasi matematika di bidang teknik,
                    yang meliputi transformasi Fourier, filter sederhana, dan
                    penyelesaian persamaan diferensial orde 1 dan 2 menggunakan
                    transformasi Laplace.
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
  <div class="modal fade" id="MK312" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SISTEM STATIS DAN DINAMIS</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK312</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Pada mata kuliah ini mahasiswa mempelajari tentang prinsip umum
                    sistem statis dan dinamis, vektor gaya, kesetimbangan partikel,
                    resultan gaya, kesetimbangan benda tegar, gaya gesek, pusat
                    massa dan titik berat, momen inersia, kinematika partikel dan benda
                    tegar, kinetik partikel dan benda tegar, gaya dan percepatan, kerja
                    dan energi, impuls dan momentum, dan getaran.
                  
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
  <div class="modal fade" id="MK313" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PEMROGRAMAN SISTEM TERBENAM</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK313
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
                  <td>Mata kuliah ini membekali mahasiswa dengan pengetahuan
                    pemrograman perangkat keras berbasis mikrokontroler ARM Cortex
                    M. Materi yang akan diberikan mencakup arsitektur mikrokontroler
                    ARM, memori model dan boot sequence, Konfigurasi ARM, GPIO,
                    UART, SPI, I2C, TIMER/COUNTER, INTERRUPT, DMA, DAC,
                    ADC dan Real Time Operating System (RTOS).
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
  <div class="modal fade" id="MK314" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENGGERAK ELEKTRIK</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK314</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas mengenai sistem penggerak elektrik
                    yang meliputi konsep dasar sistem penggerak elektrik, penggerak
                    motor listrik AC dan DC, rangkaian ekivalen, serta dasar-dasar
                    pengaturan pada penggerak motor listrik.
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
  <div class="modal fade" id="MK315" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DESAIN BERBANTUAN KOMPUTER LANJUT</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK315</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mempelajari secara lebih lanjut penggunaan
                    software 3D Modelling dengan menggunakan software (misalnya
                    Solidworks®). Pada awal perkuliahan, mahasiswa diajarkan teori
                    interface Solidworks, dasar-dasar pemodelan 3D, dan dasar-dasar
                    penyajian gambar. Dengan diajarkannya ketiga pokok bahasan ini,
                    mahasiswa diharapkan memiliki kemampuan dalam
                    pengoperasian, pemodelan 3D, dan penyajian gambar (shop
                    drawing). Kemampuan analisis shop drawing mahasiswa dibangun
                    melalui pembekalan berupa beberapa pokok bahasan penunjang, 
                    seperti dasar-dasar perbaikan model 3D, dasar-dasar konfigurasi
                    gambar, dan dasar-dasar parts assembly.
                    Setelah mengambil mata kuliah ini mahasiswa diharapkan dapat
                    mengaplikasikan dan mengembangkan keterampilannya pada
                    proyek riil di dunia kerja
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
  <div class="modal fade" id="MK316" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SISTEM KOMPRESI FLUIDA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK316</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang penerapan gaya ke dalam
                    berbagai titik material atau struktur baik zat gas atau cair, serta
                    merancang pemodelan aliran fluida dalam suatu ruang. 
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
  <div class="modal fade" id="KU1MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENDIDIKAN OLAHRAGA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU1MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >1</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mencakup:
                    <ul>
                      <li>1. Pengantar Olahraga</li>
                      <li>2. Olahraga perspektif sosiologis</li>
                      <li>3. Kebugaran jasmani</li>
                      <li>4. Praktik Olahraga</li>
                      <li>5. Olahraga sebagai Disiplin Ilmu dan Profesi</li>
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
  <div class="modal fade" id="MK411" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENGOLAHAN CITRA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK411</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang beberapa konsep olah citra
                    untuk dapat diaplikasikan pada bidang mekatronika. Pembahasan
                    meliputi konsep warna RGB dan aplikasinya, penerapan konversi
                    warna RGB ke gray dan biner dan aplikasinya dalam deteksi objek,
                    penerapan konversi warna RGB ke model warna HSL dan YCbCr
                    dan aplikasinya dalam mendeteksi objek, penerapan beberapa
                    operasi dasar citra dan aplikasinya seperti deteksi tepi, morphology
                    filter, dan image aritmatik, dan penerapan aplikasi pengolahan citra
                    digital dalam deteksi dan tracking object secara online
                    menggunakan kamera.
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
  <div class="modal fade" id="MK412" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PNEUMATIK DAN HIDROLIK</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK412</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mencakup pembuatan skematik dan cara merangkai
                    rangkaian pneumatik, elektropneumatik, dan hidrolik.
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
  <div class="modal fade" id="MK413" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PROGRAMMABLE LOGIC CONTROLLER</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK413
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
                  <td>Mata kuliah ini berisi tentang desain pemograman PLC dengan
                    menggunakan Structured Logic Design, Flowchart Logic Design,
                    dan State Based Design, yang kemudian dituangkan ke dalam
                    pemrograman PLC dengan menggunakan LD, ST, SFC dan FBD.                     
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
  <div class="modal fade" id="MK414" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SISTEM KOMUNIKASI DATA DAN JARINGAN
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK414</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Perkuliahan ini memberikan pengetahuan kepada mahasiswa
                    tentang sistem komunikasi data. Pada mata kuliah ini mahasiswa
                    akan diberikan pemahaman mengenai perbandingan komunikasi
                    suara dengan data, definisi dan terminologi dalam komunikasi data,
                    standar dan organisasi yang ada di komunikasi data, 7 layer OSI,
                    protocol dan SAP, media transmisi, konversi digital-to-digital (line
                    coding), konversi digital-to-analog (modulasi), transmisi data digital,
                    dan koordinasi transmisi.                    
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
  <div class="modal fade" id="MK415" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>COMPUTER NUMERICAL CONTROL</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK415</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk memberikan dasar pemrograman
                    CNC (baik milling maupun bubut) dan menghasilkan G code dari
                    komputer. Mata kuliah ini juga membekali mahasiswa cara untuk
                    merealisasikan hasil rancangan mekanik (yang ditampilkan dalam
                    bentuk gambar kerja) dengan menggunakan perkakas kerja bangku
                    dan permesinan dasar sesuai dengan Standard Operating Prosedur
                    (SOP) perbengkelan dengan memperhatikan faktor K3.                    
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
  <div class="modal fade" id="PK3MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENDIDIKAN KEWARGANEGARAAN</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK3MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mencakup:
                    <ul>
                      <li>1. Filsafat Pancasila dan Idiologi Nasional</li>
                      <li>2. Moral, Nilai dan Norma</li>
                      <li>3. Politik secara Universal</li>
                      <li>4. Politik dan Strategi Nasional</li>
                      <li>5. HAM di Indonesia</li>
                      <li>6. Hak dan Kewajiban Warga Negara</li>
                      <li>7. Konsepsi Demokrasi Pancasila</li>
                      <li>8. Rule of Law (Supremasi Hukum)</li>
                      <li>9. Pendidikan Demokrasi</li>
                      <li>10. Masyarakat Madani (Masyarakat Berkeadaban)</li>
                      <li>11. Pengertian dan Rasionalisasi Geopolitik</li>
                      <li>12. Wawasan Nusantara dan Otonomi Daerah</li>
                      <li>13. Geostrategi dan Ketahanan Nasional</li>
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
  <div class="modal fade" id="PK4MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENDIDIKAN BAHASA INDONESIA</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK4MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>: Substansi kajian mata kuliah Bahasa Indonesia difokuskan pada
                    penulisan akademik. Secara umum, struktur kajiannya terdiri atas
                    kedudukan bahasa Indonesia, materi menulis, membaca untuk
                    menulis, serta berbicara untuk keperluan akademik. Nantinya
                    kegiatan penggunaan bahasa Indonesia yang berdasarkan
                    substansi kajian tersebut akan dipadukan dengan keterampilan
                    menyimak, berbicara, membaca, dan menulis
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
  <div class="modal fade" id="MK511" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>MACHINE VISION</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK511
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
                  <td>Mata kuliah ini membahas tentang teknologi yang menggunakan
                    image processing sebagai input sebuah sistem, kemudian
                    menganalisisnya untuk mendapatkan interpretasi sebagai dasar
                    penentuan keputusan sistem. Mata kuliah ini juga membahas
                    komponen machine vision, seperti kamera, lensa dan
                    pencahayaan, kalibrasi kamera, Region of Interrest dan overlay,
                    Optical Character Recognition, fidusial mark detection and tracking,
                    missing component inspection, dan component alignment
                    inspection.
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
  <div class="modal fade" id="MK512" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>STANDAR REGULASI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK512</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang beberapa konsep tentang
                    analisis resiko, analisis kesalahan, persyaratan umum instalasi
                    listrik, standar keselamatan instrument, dan Standar Nasional
                    Indonesia (SNI).                  
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
  <div class="modal fade" id="MK513" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>INSTALASI LISTRIK MESIN INDUSTRI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK513</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang instalasi mesin listrik dengan
                    kendali motor secara elektromekanik hingga kendali motor dengan
                    menggunakan PLC.
                    
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
  <div class="modal fade" id="MK514" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SISTEM KENDALI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK514</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang dasar-dasar sistem kendali.
                    Sistem yang akan dikendalikan perlu diketahui permodelan
                    matematika dan fungsi alihnya. Persamaan fungsi alih ini digunakan
                    untuk mengetahui karakteristik dari sistem tersebut. Pengendali
                    yang diajarkan dalam mata kuliah ini adalah kendali proposional,
                    integrative, dan/atau derivatif. Mata kuliah ini juga membahas
                    sistem loop terbuka dan tertutup, permodelan matematika,
                    transformasi laplace, karakteristik sistem orde satu dan dua (baik
                    pada keadaan transient maupun steady), pengontrolan sistem, dan
                    pengenalan root locus.
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
  <div class="modal fade" id="MK515" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>INDUSTRIAL INTERNET OF THINGS</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK515</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa mengenai paradigma
                    teknologi IoT, akuisisi data, kontrol dan manajemen jaringan
                    berbasis internet yang diintegrasikan dengan mesin dan perangkat
                    yang biasa digunakan di industri. Mata kuliah ini juga membahas
                    konsep dasar IoT dan IIoT, paradigma teknologi IoT dan IIoT,
                    komponen IIoT, penggunaan protokol komunikasi dari IIoT, tipe
                    data dan visualisasi, pengenalan IIoT pada SCADA, dan
                    pengaplikasian teknologi IIoT pada environment serupa.
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
  <div class="modal fade" id="MK516" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>STATISTIKA INDUSTRI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK516</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mempelajari teknik-teknik statistik untuk menghitung
                    performansi mesin dan produksi, serta metode improvement-nya.
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
  <div class="modal fade" id="KU2MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>BAHASA INGGRIS UMUM</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU2MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini mencakup:
                    <ul>
                      <li>1. General business - kontrak, perjanjian, pemasaran, penjualan,
                        perencanaan bisnis, konferensi.</li>
                      <li>2. Manufacturing - manajemen pabrik, lini perakitan, kendali mutu.</li>
                      <li>3. Finance and budgeting - perbankan, penanaman modal,
                        perpajakan, akunting, penagihan.</li>
                      <li>4. Corporate development - penelitian, pengembangan produk.</li>
                      <li>5. Offices - pertemuan, komite, surat-menyurat, memorandum,
                        telefon, faks, pesan e-mail, peralatan dan perabotan kantor,
                        prosedur perkantoran.</li>
                      <li>6. Personnel - penerimaan pegawai, penugasan, pensiun, gaji,
                        promosi, lamaran kerja, periklanan.</li>
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
  <div class="modal fade" id="MK611" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SUPERVISORY CONTROL AND DATA ACQUISITION</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK611</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa dengan pengetahuan tentang
                    dasar SCADA dengan menggunakan software (misalnya
                    Wonderware Indusoft Web Studio atau Intouch Machine Edition).
                    Pembahasan meliputi development environment, tagname
                    dictionary, script untuk visualisasi sistem, trend, alarm, security,
                    koneksi PC–PLC, dan database. Mata kuliah ini juga membahas
                    algoritma dan logika berpikir untuk menyelesaikan masalah/kasus
                    dalam pembuatan aplikasi program script.
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
  <div class="modal fade" id="MK612" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>ROBOTIKA DAN KECERDASAN BUATAN
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK612</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa dengan kemampuan dalam
                    bidang teknologi robotika dan kecerdasan buatan untuk
                    menyelesaikan permasalahan pada otomasi industri. Pembahasan
                    dalam mata kuliah ini meliputi perkembangan teknologi robot,
                    kendali posisi motor, kinematika dan dinamika robot manipulator,
                    dasar logika Fuzzy, dan dasar artificial neural network.
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
  <div class="modal fade" id="MK613" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>SEMINAR PROPOSAL
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK613</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Dalam mata kuliah ini mahasiswa dibekali dengan materi teknik
                    penyusunan proposal, teknik presentasi, serta wawasan tentang
                    penelitian terkini. Mahasiswa diwajibkan mengangkat sebuah tema
                    penelitian yang dikonsultasikan dengan dosen pembimbing dan
                    kemudian diseminarkan dalam sidang proposal Tugas Akhir.
                    
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
  <div class="modal fade" id="MK614" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DESAIN SISTEM MEKATRONIKA
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK614</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang bagaimana merancang suatu
                    sistem mekatronik secara sistematis, yang diawali dengan desain
                    rancangan hingga implementasi rancangan tersebut.
                    
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
  <div class="modal fade" id="MK615" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>ERGONOMIS INDUSTRI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK615</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah membahas tentang faktor manusia dan ergonomis,
                    analisis perbaikan desain faktor manusia, investigasi faktor
                    manusia, desain penglihatan dan pencahayaan, desain kontrol,
                    tampilan dan simbol, desain interaksi manusia-komputer,
                    anthropometry pada desain tempat kerja, postur saat bekerja,
                    penanganan material secara manual, cedera akibat pengulangan
                    pergerakan dan desain alat kerja tangan, beban kerja
                    fisik,kebisingan dan vibrasi, desain manufaktur dan pemeliharaan,
                    kecelakaan, kesalahan manusia, dan keselamatan.
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
  <div class="modal fade" id="MK616" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>MANAJEMEN PROYEK
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK616</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas framework dari manajemen proyek, yang
                    mencakup integrasi, ruang lingkup, waktu, biaya, kualitas, sumber
                    daya manusia, faktor risiko, komunikasi, dan procurement.
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
  <div class="modal fade" id="KU3MK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>BAHASA INGGRIS DUNIA KERJA
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU3MK</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td> Mata kuliah ini membahas komunikasi secara lisan dan tertulis
                    dalam bahasa Inggris di dunia kerja. Mahasiswa dibekali
                    komunikasi bahasa Inggris lisan dalam bentuk product presentation,
                    meeting simulation, describing things, persuasiveness with words,
                    gesture, and tone. Untuk komunikasi tertulis, mahasiswa dibekali
                    bagaimana cara menulis cover letter, CV, responding e-mails,
                    composing report, dan strategi komunikasi profesional (what to say
                    versus how to say). Selain itu, mahasiswa juga dibekali tentang
                    ragam model tes bahasa Inggris yang diakui secara internasional
                    dan digunakan sebagai asesmen umum dalam dunia kerja.
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
  <div class="modal fade" id="MK711" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PENULISAN DOKUMEN TEKNIS</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK711</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas mengenai ragam dokumen teknis.
                    Mahasiswa juga dibekali mengenai perencanaan, penulisan,
                    pengeditan dan pendistribusian dokumen teknis.
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
  <div class="modal fade" id="MK712" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>KEWIRAUSAHAAN
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK712</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa agar memiliki pemahaman,
                    pola pikir, sikap, dan skill entepreneurship yang baik. Materi
                    perkuliahan membahas hakikat dan mental entrepreneurship, peran
                    penting entrepreneurship dan enterpreneur, figur/tokoh
                    entrepreneur, peta jalan entrepreneur yang sukses, dan
                    pengembangan kapasitas/skill entrepreneurship.
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
  <div class="modal fade" id="MK713" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>TUGAS AKHIR
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK713</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >8</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Tugas Akhir adalah suatu kegiatan penelitian untuk menghasilkan
                    suatu karya ilmiah yang diwajibkan bagi mahasiswa sebagai salah
                    satu syarat yang harus ditempuh guna mencapai gelar Sarjana
                    Terapan Teknik (S.Tr.T). Tahapan dalam melakukan suatu
                    penelitian terdiri atas perencanaan/perancangan penelitian yang
                    dilaksanakan pada Seminar Proposal dan pelaksanaan penelitian
                    dan penulisan laporan pada Tugas Akhir. Penelitian ini
                    dilaksanakan secara mandiri atau kelompok oleh mahasiswa di
                    bawah bimbingan dosen pembimbing.                 
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
  <div class="modal fade" id="MK714" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>DISTRIBUTED CONTROL SYSTEM
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK714</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini berisi tentang pengenalan system Distributed Control
                    System (DCS) dengan menggunakan software (misalnya DeltaV
                    buatan Emerson). Mahasiswa diajarkan setup DCS, setup HMI,
                    troubleshooting, aplikasi teori kontrol, dan komunikasi data                
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
  <div class="modal fade" id="MK715" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>PERSIAPAN TES KEMAMPUAN BAHASA INGGRIS
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK715</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >1</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk melatih mahasiswa dalam
                    meningkatkan skor tes kemampuan Bahasa Inggris standar                
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
  <div class="modal fade" id="MK716" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>KEGIATAN PEMBELAJARAN DI LUAR KAMPUS
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK716</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >10</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini merupakan bagian dari Program Merdeka Belajar
                    Kampus Merdeka yang terdiri atas beberapa kegiatan pilihan
                    seperti magang/praktik kerja, membangun desa/kkn tematik,
                    studi/proyek independen, asistensi mengajar di satuan pendidikan.,
                    penelitian/riset, proyek kemanusiaan, dan kegiatan wirausaha.                  
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
  <div class="modal fade" id="MK811" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>MAGANG INDUSTRI</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MK811</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >10</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Dalam mata kuliah ini, mahasiswa melakukan magang di
                    perusahaan yang memiliki kerjasama dengan Politeknik Negeri
                    Batam agar mahasiswa mengalami langsung iklim industri. Di akhir
                    magang, mahasiswa membuat laporan magang. 
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