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
          <h2 class="animate__animated animate__fadeInDown">Teknologi Rekayasa Elektronika</h2>
          <p class="animate__animated fanimate__adeInUp">Teknologi Rekayasa Elektronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika.</p>
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
              Teknologi Rekayasa Elektronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika. Hal ini akan diterapkan pada bidang : sistem kendali, Internt of Things (IoT) , sistem komputer, ataupun sistem elektronika daya.
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
            <li>memiliki pemahaman mendalam tentang sistem operasi pembangkitan, termasuk komponen-komponennya, prinsip kerja, dan interaksi antarbagian dalam menghasilkan listrik.</li>
            <li>memahami berbagai jenis instrumen monitoring dan pengukuran yang digunakan dalam pembangkitan, seperti sensor suhu, tekanan, arus, tegangan, dan kecepatan putaran. Mereka mampu memilih instrumen yang sesuai dan melakukan pengaturan serta kalibrasi.</li>
            <li> memiliki keterampilan untuk memantau dan mengumpulkan data operasional pembangkitan, termasuk data kinerja, kondisi operasi, dan parameter kritis lainnya. Mereka mampu melakukan pemantauan secara real-time dan mengatur pengambilan data yang akurat.</li>
            <li>memiliki kemampuan untuk menganalisis data operasional pembangkitan, termasuk penggunaan perangkat lunak analisis data dan statistik untuk mengidentifikasi tren, pola, dan masalah yang mungkin timbul. Mereka mampu menyusun laporan evaluasi berdasarkan hasil analisis data tersebut.</li>
            <li>memahami dan menafsirkan parameter operasional penting dalam pembangkitan, seperti efisiensi, pembebanan, pemeliharaan, dan keandalan. Mereka mampu mengidentifikasi area yang memerlukan perhatian lebih dan memberikan rekomendasi perbaikan.</li>
            <li>memahami peraturan keselamatan dan standar operasional yang berlaku dalam industri pembangkitan. Mereka dapat memastikan bahwa data yang disiapkan sesuai dengan persyaratan regulasi dan menerapkan langkah-langkah keamanan yang sesuai.</li>
            <li>memiliki keterampilan komunikasi yang baik untuk menyampaikan hasil evaluasi operasi pembangkitan dalam bentuk laporan yang jelas dan terstruktur. Mereka mampu menjelaskan temuan, rekomendasi, dan solusi dengan baik kepada pemangku kepentingan terkait.</li>
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
                Capaian Pembelajaran (CP) program studi D4 Teknologi Rekayasa Elektronika telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D4 Teknologi Rekayasa Elektronika memiliki capaian pembelajaran sebagai berikut:
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
                <li>1. Mampu menerapkan dan menganalisa matematika teknik dan fisika terapan ke dalam prosedur, interpertasi instruksi, pengoperasian, pengujian, pemeliharaan, trouble Shooting dan perbaikan untuk menyelesaikan permasalahan bidang elektronika berdasarkan teorema yang bersesuaian.</li>
                <li>2. Mampu menggunakan perangkat lunak, simulasi dan penggunaan teknologi informasi untuk rekayasa dan penyelesaian pekerjaan dalam bidang elektronika.</li>
                <li>3. Mampu merancang dan merealisasi Printed Circuit Board (PCB) yang memenuhi kebutuhan pengguna dengan standar IPC dengan memperhatikan faktor K3.</li>
                <li>4. Mampu merancang dan merealisasi prototype elektronika yang memenuhi kebutuhan spesifik berdasarkan standar IEC dan ISO dengan memperhatikan K3.</li>
                <li>5. Mampu melakukan pengujian dan pengukuran komponen elektronika berdasarkan prosedur dan standar IEC dan ISO untuk menganalisis, menginterpretasi dan menerapkan sesuai peruntukan.</li>
                <li>6. Mampu membuat desain serta merancang gambar dengan menggunakan bantuan komputer untuk kemasan produk prototype elektronika.</li>
                <li>7. Mampu menggunakan komponen sensor, sistem elektronika, kelistrikan, pneumatic serta melaksanakan komisioning dengan memperhatikan K3.</li>
                <li>8. Mampu mengimplementasikan konsep teoritis, metoda dan perangkat analisis fungsi manajemen (perencanaan, pelaksanaan, pengarahan, monitoring, evaluasi dan pengendalian) serta prinsip kepemipinan dan kewirausahaan.</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Menguasai konsep matematika teknik dan fisika terapan terkait dengan interpertasi instruksi, pengoperasian, pengujian, pemeliharaan dan perbaikan untuk menyelesaikan permasalahan bidang elektronika.</li>
                <li>2. Menguasai konsep tentang teknik pengujian dan pengukuran elektronika menggunakan prosedur serta standar IEC dan ISO.</li>
                <li>3. Menguasai perangkat lunak, simulasi dan penggunaan teknologi informasi untuk rekayasa dan penyelesaian pekerjaan dalam bidang elektronika.</li>
                <li>4. Menguasai konsep tentang standar IEC dan ISO pada bidang elektronika.</li>
                <li>5. Menguasai konsep tentang sains terapan pada bidang elektronika.</li>
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
                            <td style="max-width: 15px" >TRE100</td>
                            <td style="max-width: 50px">Listrik Magnet</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE100"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE101</td>
                            <td style="max-width: 50px">Rangkaian Listrik DC</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE101"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE102</td>
                            <td style="max-width: 50px">Elektronika Digital</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE102"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE103</td>
                            <td style="max-width: 50px">Pemrograman Dasar</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE103"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE104</td>
                            <td style="max-width: 50px">Teknologi Desain PCB</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE104"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE105</td>
                            <td style="max-width: 50px">Teknik Dasar Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE105"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">TRE106</td>
                            <td style="max-width: 50px">Kesehatan dan Keselamatan Kerja</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE106"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">TRE107</td>
                            <td style="max-width: 50px">Proyek Dasar Rangkaian Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE107"> Rincian</button>
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
                            <td style="max-width: 15px" >TRE200</td>
                            <td style="max-width: 50px">Kalkulus</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE200"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE201</td>
                            <td style="max-width: 50px">Elektronika Analog</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE201"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE202</td>
                            <td style="max-width: 50px">Desain Berbantuan Komputer</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE202"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE203</td>
                            <td style="max-width: 50px">Rangkaian Listrik AC</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE203"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE204</td>
                            <td style="max-width: 50px">Sistem Mikrokontroler</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE204"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE205</td>
                            <td style="max-width: 50px">Dasar Komunikasi Perangkat Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE205"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">TRE206</td>
                            <td style="max-width: 50px">Konsep Belajar</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE206"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">TRE207</td>
                            <td style="max-width: 50px">Proyek Dasar Sistem Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE207"> Rincian</button>
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
                            <td style="max-width: 15px">TRE300</td>
                            <td style="max-width: 50px">Matematika Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE300"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE301</td>
                            <td style="max-width: 50px">Elektronika Daya</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE301"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE302</td>
                            <td style="max-width: 50px">Pemrograman Perangkat Keras</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE302"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE303</td>
                            <td style="max-width: 50px">Aplikasi Sensor dan Transduser</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE303"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE304</td>
                            <td style="max-width: 50px">Internet of Things</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE304"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE305</td>
                            <td style="max-width: 50px">Manajemen Proyek</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE305"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">TRE306</td>
                            <td style="max-width: 50px">Desain Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >3</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE306"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">PK4TRE</td>
                            <td style="max-width: 50px">Pendidikan Bahasa Indonesia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK4TRE"> Rincian</button>
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
                            <td style="max-width: 15px">TRE400</td>
                            <td style="max-width: 50px">Statistik Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE400"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE401</td>
                            <td style="max-width: 50px">Simulasi Rangkaian Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE401"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE402</td>
                            <td style="max-width: 50px">Pemeliharaan Perangkat Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE402"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE403</td>
                            <td style="max-width: 50px">Programmable Logic Controller</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE403"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE404</td>
                            <td style="max-width: 50px">Pemrograman Berorientasi Objek</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE404"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE405</td>
                            <td style="max-width: 50px">Aplikasi Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >0</td>
                            <td >0</td>
                            <td >3</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE405"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK3TRE</td>
                            <td style="max-width: 50px">Pendidikan Kewarganegaraan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK3TRE"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">KU2TRE</td>
                            <td style="max-width: 50px">Bahasa Inggris komunikasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#KU2TRE"> Rincian</button>
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
                            <td style="max-width: 15px">TRE500</td>
                            <td style="max-width: 50px">Pengolahan Sinyal</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE500"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE501</td>
                            <td style="max-width: 50px">Teknik Kendali</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE501"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE502</td>
                            <td style="max-width: 50px">Metodologi Penelitian</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE502"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE503</td>
                            <td style="max-width: 50px">Design Thinking</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >3</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE503"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE504</td>
                            <td style="max-width: 50px">Teknopreneurship</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE504"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE505</td>
                            <td style="max-width: 50px">Prototipe Produk Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE505"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK2TRE</td>
                            <td style="max-width: 50px">Pendidikan Pancasila</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK2TRE"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">8</td>
                            <td style="max-width: 15px">KU3TRE</td>
                            <td style="max-width: 50px">Bahasa Inggris untuk Penulisan Akademik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
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
                            <td style="max-width: 15px">TRE600</td>
                            <td style="max-width: 50px">Ergonomi Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE600"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE601</td>
                            <td style="max-width: 50px">Kecerdasan Buatan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE601"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE602</td>
                            <td style="max-width: 50px">Seminar Proposal Tugas Akhir</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE602"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">TRE603</td>
                            <td style="max-width: 50px">Pengolahan Citra</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE603"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">TRE604</td>
                            <td style="max-width: 50px">Desain Berbantuan Komputer Lanjut</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE604"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">TRE605</td>
                            <td style="max-width: 50px">Desain Sistem Elektronika Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >0</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE605"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">PK1TRE</td>
                            <td style="max-width: 50px">Pendidikan Agama</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#PK1TRE"> Rincian</button>
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
                            <td style="max-width: 15px">TRE700</td>
                            <td style="max-width: 50px">Tugas Akhir</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">5</td>
                            <td >0</td>
                            <td >0</td>
                            <td >5</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE700"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">TRE701</td>
                            <td style="max-width: 50px">Machine Learning</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE701"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">TRE702</td>
                            <td style="max-width: 50px">Pneumatik dan Elektro Pneumatik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE702"> Rincian</button>
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
                            <td style="max-width: 15px">TRE800</td>
                            <td style="max-width: 50px">Magang Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">18</td>
                            <td >0</td>
                            <td >0</td>
                            <td >18</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#TRE800"> Rincian</button>
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
              <h4 class="title"><a href="">Insinyur Desain Hardware</a></h4>
              <p class="description">
                Bertanggung jawab untuk merancang dan mengembangkan sirkuit dan perangkat keras elektronik.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Insinyur Perangkat Lunak Embedded</a></h4>
              <p class="description">
                Membantu dalam pengembangan perangkat lunak yang tertanam dalam sistem elektronik.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Teknisi Elektronik</a></h4>
              <p class="description">
                Melakukan perbaikan, perawatan, dan pemeliharaan peralatan elektronik dan sistem.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Ahli Riset dan Pengembangan</a></h4>
              <p class="description">
                Bekerja dalam bidang penelitian dan pengembangan untuk mengembangkan teknologi elektronika baru.
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
      <h3>Teknologi Rekayasa Elektronika</h3>
      <p>Teknologi Rekayasa Elektronika merupakan program studi dari cabang ilmu teknik elektro yang mempelajari tentang merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika.</p>
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
<div class="modal fade" id="TRE100" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
      <div class="modal-body">
        
        <table class="table align-middle table-bordered  table-responsive-lg text-justify my-3">
          <tbody >
            
            <tr>
              <td>Mata Kuliah</td>
              <td >:</td>
              <td>Listrik Magnet</td>
            </tr>
            <tr>
              <td>Kode</td>
              <td >:</td>
              <td >TRE100</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >2</td>
            </tr>
            <tr>
              <td>Deskripsi Mata Kuliah</td>
              <td >:</td>
              <td >Mata kuliah ini mempelajari perhitungan, penerapan konsep serta
                analisis untuk menyelesaikan permasalahan di bidang elektronika
                berdasarkan teorema hukum Coulomb, medan listrik dan magnet,
                kapasitansi, arus listrik dan resistansi, induksi elektromagnetik.
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
<div class="modal fade" id="TRE101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Rangkaian Listrik DC
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE101</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini mempelajari bagaimana melakukan perhitungan
                    menggunakan hukum hukum dan teorema- teorema rangkaian
                    serta pengukuran pembuktian pada rangkaian listrik arus searah
                    yang tersusun dari beberapa resistor dengan berbagai
                    konfigurasi. Mahasiswa diharapkan dapat mempraktikan dan
                    membuktikan teorema rangkaian di laboratorium dan
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
<div class="modal fade" id="TRE102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektronika Digital
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE102</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini bertujuan untuk memberikan pengenalandasar
                    teknik digital, gerbang logika, aljabar Boolean, serta implementasi
                    dan analisa rangkaian digital.
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
<div class="modal fade" id="TRE103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemrograman Dasar</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE103</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini akan membekali mahasiswa dengan pengetahuan
                    tentang dasar pemrograman C dan juga membahas algoritma dan
                    logika berpikir untuk menyelesaikan masalah/kasus dalam
                    pembuatan aplikasi program C menggunakan konsep-konsep
                    pemrograman.
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
<div class="modal fade" id="TRE104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknologi Desain PCB</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE104</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini mempelajari mendesain rangkaian elektronika
                    menggunakan aplikasi pada komputer danmampu menjelaskan
                    proses pembuatan PCB.
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
<div class="modal fade" id="TRE105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknik Dasar Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE105</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini bertujuan agar mahasiswa dapat menerapkan
                    teknik dasar pengukuran listrik dan menggambarkan konsep
                    dasar semikonduktor yang meliputi karakteristik dan aplikasi
                    sederhana komponensemikonduktor yakni dioda dan BJT untuk
                    Implementasipada rangkaian elektronika terapan sederhana.
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
<div class="modal fade" id="TRE106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE106</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini memberikan pemahaman kepada mahasiswa
                    mengenai pentingnya K3 di tempat kerja, serta menjelaskan
                    teknik pencegahan dan pengendalian K3 secara umum.                    
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
<div class="modal fade" id="TRE107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Dasar Rangkaian Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE107</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td >Mata kuliah ini akan membahas tentang pengenalan projek dasar
                    sistem Elektronika.                  
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
  <div class="modal fade" id="TRE200" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kalkulus</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE200</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini dimaksudkan untuk memberi pemahaman pada
                    mahasiswa tentang konsep konsep matematika serta mampu
                    menerapkannya dalam penyelesaian permasalahan matematis,
                    diantaranya mengenai bilangan, variabel dan fungsi, fungsi dan
                    limit, turunan dan penggunaannya serta integral dan
                    penggunaannya.
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
  <div class="modal fade" id="TRE201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE201</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan agar mahasiswa dapat menggambarkan
                    prinsip dasar FET dan Op-amp yangmeliputi karakteristik dan
                    aplikasi sederhana untuk diterapkan pada rangkaian elektronika
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
  <div class="modal fade" id="TRE202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain Berbantuan Komputer</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE202
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
                  <td>Mata kuliah ini mempelajari konsep dasar gambar teknikyang
                    meliputi cara membaca gambar, proyeksi gambar,skala gambar,
                    membuat kepala gambar, cetak gambar dan menganalisa gambar
                    teknik 2D maupun 3D.
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
  <div class="modal fade" id="TRE203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Rangkaian Listrik AC</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE203</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa dengan konsep rangkaian
                    listrik AC sehingga mampu mengaplikasikan bilangan kompleks
                    untuk analisis dasar rangkaian listrik AC, menganalisis dasar
                    rangkaian AC satu fasa, daya dan faktor daya serta prinsip tiga
                    fasa.                    
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
  <div class="modal fade" id="TRE204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Sistem Mikrokontroler</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE204</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang konsep pemrograman
                    berorientasi objek, merancang algoritma dan menganalisis
                    kesalahan pada pemrograman serta mampu membuat aplikasi
                    windows form untuk kebutuhanindustri.                    
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
  <div class="modal fade" id="TRE205" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Dasar Komunikasi Perangkat Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE205</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk memberikan pengenalan dan
                    aplikasi dari sistem komunikasi data ditelaah secara perangkat
                    keras (Hardware) maupun Perangkat lunak (Software). Seperti
                    misalnya RS-232, RS-485, I2C, CAN
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
  <div class="modal fade" id="TRE206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Konsep Belajar</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE206</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan gambaran kepada mahasiswa
                    tentang bagaimana mengenal dan mengembangkan kemampuan
                    belajar efektif yang meliputi teknik untuk merawat kebugaran
                    mental dan pikiran, mengelola waktu secara efisien, teknik
                    mendapatkan ide pokok dari sumber referensi atau literatur yang
                    valid, serta konsep mengenai pentingnyalayout tempat kerja atau
                    belajar dalam meningkatkan fokus dan efektifitas belajar.
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
  <div class="modal fade" id="TRE207" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Dasar Sistem Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE207</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini merupakan implementasi dari materi dasar yang
                    diwujudkan dalam bentuk projek. Membekali mahasiswa untuk
                    dapat merancang, menjelaskan dan mengaplikasikan rangkaian
                    elektronika dengan bimbingan manajer proyek.
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
  <div class="modal fade" id="TRE300" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE300</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas mengenai konsep dasar matematika
                    yang akan diterapkan pada permasalahan keteknikan terutama
                    yang berhubungan dengan bidang Teknik Elektro yang
                    membutuhkan analisis matematis.
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
  <div class="modal fade" id="TRE301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektronika Daya</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE301</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan teori dan mempraktikkan komponen
                    Elektronika Daya
                  
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
  <div class="modal fade" id="TRE302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemrograman Perangkat Keras</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE302
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
                  <td>Mata kuliah ini bertujuan untuk mahasiswa dapat melakukan
                    perancangan rangkaian dengan menggunakan bahasa
                    pemrograman perangkat keras VHDL ataupun Verilog yang
                    diterapkan pada modul FieldProgrammable Gate Array (FPGA).
                    Dimana akan diawalidari contoh-contoh sederhana, kemudian
                    dilanjutkan pada aturan bahasa pemrograman dan teknis syntax,
                    berikutnya diikuti oleh contoh yang lebih kompleks, yang pada
                    akhirnya akan menggunakan simulasi test bench untuk verifikasi
                    kesesuaian rancangan yang telah dibuat
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
  <div class="modal fade" id="TRE303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Aplikasi Sensor dan Transduser</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE303</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk memberikan pengenalan dan
                    aplikasi dari berbagai jenis sensor dan aplikasinya pada dunia
                    industri dan aplikasinya pada kehidupan masyarakat pada
                    umumnya.
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
  <div class="modal fade" id="TRE304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Internet of Things</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE304</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untuk mampu
                    menganalisa penerapan protokol komunikasi IoTpada perangkat
                    embedded yang digunakan, dan mampu melakukan manajemen,
                    kontrol, dan monitoring proses informasi berbasis web pada line
                    produksi atau industri.
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
  <div class="modal fade" id="TRE305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE305</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untuk mampu
                    mengelola perencanaan proyek dan melakukan manajemen
                    resiko serta evaluasi projek.
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
  <div class="modal fade" id="TRE306" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE306</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untuk mampu
                    mengembangkan proyek yang berorientasi pada pembuatan
                    desain suatu produk atau prototype/divais elektronika yang dapat
                    diadopsi dalam aplikasi teknologi rekaya elektronika berbasis
                    kebutuhanmasyarakat dan industri.
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
  <div class="modal fade" id="PK4TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Bahasa Indonesia
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK4TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untuk mampu
                    berkomunikasi baik secara lisan dan tulisan menggunakan
                    tatanan bahasa Indonesia yang baik dan benar serta
                    mengaplikasikan keterampilan berbahasa yang baik dalam
                    bentuk penulisan artikel ilmiah, penyampaian presentasi,
                    penulisan surat dan email.
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
  <div class="modal fade" id="TRE400" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Statistik Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE400</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untukmampu
                    mengaplikasikan metode dan teknik-teknik statistik dalam
                    menganalisa performa kerja alat/sistem dan melakukan
                    monitoring dan improvement proses produksi produk.
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
  <div class="modal fade" id="TRE401" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Simulasi Rangkaian Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE401</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa untuk mampu
                    mensimulasikan rancangan dan rangkaian elektronika
                    menggunakan Software Simulator, menganalisa karakteristik dari
                    rangkaian elektronika dan menguji secara simulasi respon
                    transient, dan sinyal dari rangkaian elektronika untuk
                    mendeteksi komponen pada board yang beresiko terhadap
                    performa kerja perangkat/divais.
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
  <div class="modal fade" id="TRE402" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pemeliharaan Perangkat Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE402
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
                  <td>Mata kuliah ini mengenalkan kepada mahasiswa tentangkonsep
                    dasar perawatan dan inspeksi kegagalan sistem dan piranti
                    elektronika melalui analisis masalah yang dituangkan dalam
                    laporan kerja berformat.                     
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
  <div class="modal fade" id="TRE403" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Programmable Logic Controller</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE403</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas teori dan mempraktikan pengendalian
                    proses dengan menggunakan Programmable Logic Controller
                    (PLC)                    
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
  <div class="modal fade" id="TRE404" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE404</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas tentang konsep pemrograman
                    berorientasi objek, merancang algoritma dan menganalisis
                    kesalahan pada pemrograman serta mampu membuat aplikasi
                    Windows Form untuk kebutuhan industri.                    
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
  <div class="modal fade" id="TRE405" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Aplikasi Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE405</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan memfasilitasi mahasiswa untuk bisa
                    mengembangkan proyek yang berorientasi pada rangkaian,
                    desain, maupun sistem elektronika yang dapat di
                    implementasikan secara langsung dengan hasil berupa prototipe/
                    produk.
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
  <div class="modal fade" id="PK3TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pendidikan Kewarganegaraan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >PK3TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas mengenai nilai-nilai kewarganegaraan
                    sebagai bekal menjadi warga negarayang baik dan cerdas.
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
  <div class="modal fade" id="KU2TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris komunikasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU2TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan agar mahasiswa bisa mendapatkan
                    informasi secara rinci, baik dalam bentuk lisan maupun tulis,
                    terutama dalam konteks komunikasidasar percakapan berbahasa
                    inggris.
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
  <div class="modal fade" id="TRE500" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pengolahan Sinyal</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE500
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
                  <td>Mata kuliah ini bertujuan agar mahasiswa dapat memahami
                    properti dasar dari sinyal dan sistem, melakukan karakterisasi
                    dari sistem Linear Shift Invariant (LSI), konvolusi, dan
                    transformasi Fourier.
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
  <div class="modal fade" id="TRE501" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknik Kendali</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE501</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Matakuliah ini akan membekali mahasiswa tentang konsep sistem
                    kendali meliputi, transformasi laplace, fungsi transfer, digram
                    blok dan diagram alir, analisa respon transien, pengantar metoda
                    root-locus dan analisa kestabilan, teknik analisis respon frekuensi:
                    bode, pengantar kontrol desain; PID kontroler                    
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
  <div class="modal fade" id="TRE502" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Metodologi Penelitian </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE502</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk membekali mahasiswa tentang
                    pengetahuan, pemahaman, dan penerapan berbagai metode
                    penelitian dalam rangka penyusunan tugas akhir. Dalam
                    perkuliahan dibahas berbagai jenis penelitian, langkah-langkah
                    penelitian ilmiah mulai dari penentuan topik, identifikasi
                    permasalahan, ulasan kepustakaan, penentuan fokus masalah,
                    penentuan variabel, desain dan metode, teknik pengumpulan
                    data, analisis dan penarikan kesimpulan.
                    
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
  <div class="modal fade" id="TRE503" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE503</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membekali mahasiswa untuk terlibat dalam
                    analisis kritis dari masalah dunia nyata dan tantangan global.
                    Mereka akan menunjukkan kemampuan untuk mengenali
                    kesempatan dan berinisiatif dalam mengembangkan solusi
                    penerapan prinsip-prinsip desain yang berpusat pada manusia,
                    dampak lokal dan global dari solusi rekayasa pada individu,
                    organisasi dan masyarakat. Mahasiswa akan dapat berkomunikasi
                    secara efektif dan bekerja dengan baik pada tim. Masalah dan
                    solusi akan ditelaah dari masyarakat, perspektif budaya, dan
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
  <div class="modal fade" id="TRE504" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknopreneurship</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE504</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk memberikan pemahaman dan
                    skill kepada mahasiswa untuk mampu mengidentifikasi dan
                    mengevaluasi peluang usaha berbasis teknologi sesuai dengan
                    bidang keahlian mahasiswa, serta mengembangkan peluang
                    usaha tersebut. Tidak hanya belajar hardskill, mahasiswa juga
                    dilatih softskill terkait penciptaan ide bisnis berbasis teknologi
                    yang bermanfaat, bermartabat, dan berdampak positif bagi
                    lingkungan sosialnya. Penekanan terhadap model bisnis
                    kewirausahaan berbasis teknologi sangat diperlukan unt uk
                    melahirkan para Teknopreneur mua yang kreatif dan inovatif.
                    Semangat dan jiwa teknopreneur dinilai sangat prospektif dimasa
                    depan, dimana era persaingan usaha semakin ketat dan penuh
                    dengan ketidakpastian.
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
  <div class="modal fade" id="PK2TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >PK2TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Matakuliah ini bertujuan guna mewujudkan nilai-nilai dasar
                    keagamaan dan kebudayaan, rasa kebangsaan dan cinta tanah air
                    sepanjang hayat.
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
  <div class="modal fade" id="KU3TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris untuk Penulisan Akademik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >KU3TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas informasi secara rinci perihal
                    penulisan laporan dalam bahasa Inggris sesuai dengan kaidah
                    akademik yang baik dan benar.
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
  <div class="modal fade" id="TRE505" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Prototipe Produk Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE505</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan untuk memberikan pengalaman kepada
                    mahasiswa untuk membuat desain elektronika dan membuat
                    prototipnya, prototipe untuk produk terbaru yang muncul dari ide
                    mahasiswa sendiri dirancang dan dibuat menjadi prototipe,
                    diantaranya metode membuat prototipe, metode pengujian
                    prototipe, hingga siap untuk menjadi produksi.
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
  <div class="modal fade" id="TRE600" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Ergonomi Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE600</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah Ergonomi Industri membekali mahasiswa untuk
                    dapat mendesain dan menganalisis lingkungan kerja yang sehat,
                    dan nyaman serta dapat meningkatkan efisiensi, efektifitas, dan
                    produktifitas kerja sesuai dengan pendekatan ilmu ergonomic
                    yang diaplikasikan pada lingkungan kerja industri.
                    
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
  <div class="modal fade" id="TRE601" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kecerdasan Buatan
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE601</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Perkuliahan ini melingkupi definisi kendali cerdas, dan
                    sejarahnya; pengenalan fuzzy logic, dan contoh penggunaannya;
                    pengenalan jaringan syaraf tiruan dan contoh penggunaannya;
                    serta fuzzy -PID dan contoh penggunaannya. 
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
  <div class="modal fade" id="TRE602" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Seminar Proposal Tugas Akhir
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE602</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah proposal tugas akhir memberikan pemahaman dan
                    kemampuan mahasiswa dalam menyusun pikiran secara
                    sistematis, logis, kritis, terpadu, dan mengikuti kaidah ilmiah yang
                    diseminarkan dan dituliskan dalam bentuk proposal tugas akhir.
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
  <div class="modal fade" id="TRE603" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pengolahan Citra
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE603</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mahasiswa mampu menerapkan konsep citra digital dan mampu
                    membangun aplikasi komputer tentang dasar pengolahan citra
                    digital melalui representasi, perbaikan, dan analisis citra seperti ekstraksi fitur, segmentasi, dan pengenalan obyek pada citra digital untuk berbagai bidang aplikasi. Selain itu mahasiswa
                    diarahkan untuk dapat berpikir kritis dan analitis, intrapersonal
                    dan interpersonal, serta berorientasi pada target.
                    
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
  <div class="modal fade" id="TRE604" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain Berbantuan Komputer Lanjut</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE604</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Perkuliahan ini membahas tentang penggunaan software 3D
                    Modelling lanjut. Topik yang diajarkan meliputi User Interface,
                    pemodelan 3D, perakitan dan animasi part/ model 3D serta
                    penyajian gambar. Selain itu mahasiswa juga dibekali bagaimana
                    membaca dan menganalisa gambar 2D dan 3D.
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
  <div class="modal fade" id="TRE605" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Desain Sistem Elektronika Industri

                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE605</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah desain sistem industri ini bertujuan untuk
                    memberikan pengalaman kepada mahasiswa berkaitan dengan
                    design dan prototipe elektronika industri, prototipe untuk produk
                    terbaru yang muncul dari ide mahasiswa sendiri dirancang dan
                    dibuat menjadi prototipe, diantaranya metode pembuatan
                    prototipe, metode pengujian prototipe, hingga siap untuk menjadi
                    produksi.
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
  <div class="modal fade" id="PK1TRE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >PK1TRE</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >2</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td> Mata kuliah pendidikan agama bertujuan menjadikan agama
                    sebagai landasan dalam memcahkan problematika kehidupan
                    untuk meningkatkan kualitas keimanan, ketakwaan, dan akhlak
                    mulia mahasiswa. 
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
  <div class="modal fade" id="TRE700" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Tugas Akhir</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE700</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >5</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini merupakan tindak lanjut atau Implementasi dari
                    mata kuliah seminar proposal tugas akhir. Selama satu semester
                    mahasiswa diberi waktu untuk menyelesaikan sistem yang telah
                    dirancang dan diusulkan pada seminar, melakukan uji coba, dan
                    pengambilan data, serta melakukan pembahasan terhadap apa
                    yang diperoleh kemudian menyusunnya ke dalam bentuk buku
                    laporan sesuai dengan format dan aturan yang telah ditentukan.
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
  <div class="modal fade" id="TRE701" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE701</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini memberikan penjabaran mengenai berbagai
                    konsep, teknik, dan algoritma pada machine learning yang dimulai
                    dengan topik seperti klasifikasi dan regresi linear dan diakhiri
                    dengan topik terkini seperti boosting, support vector machines, model Hidden-Markov , dan Bayesian Network
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
  <div class="modal fade" id="TRE702" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pneumatik dan Elektro Pneumatik
                  </td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >TRE702</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >3</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini membahas dan mempraktikan tentang komponenkomponen, cara kerja, perhitungan kuat tekan piston, serta
                    rangkaian pada pneumatik dan elektropneumatik                   
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
  <div class="modal fade" id="TRE800" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >TRE800</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >18</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>Mata kuliah ini bertujuan membekali mahasiswa mengenai
                    lingkungan industri, aktifitas kerja, dan kedisiplinan di dunia kerja
                    dengan pengetahuan mengenai softskill, hardskill, serta
                    memadukan proses belajar akademik dengan pengalaman kerja
                    yang terencana dan terbimbing. 
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