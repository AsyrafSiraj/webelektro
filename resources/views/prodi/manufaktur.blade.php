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
          <h2 class="animate__animated animate__fadeInDown">Teknik Elektronika Manufaktur</h2>
          <p class="animate__animated fanimate__adeInUp">Jurusan Manufaktur Elektro berkenaan dengan proses pembuatan barang dan jasa untuk rakitan elektronik dalam jumlah besar dengan menggunakan tenaga kerja dan peralatan, dengan cara mengubah bahan baku menjadi produk yang sesuai dengan permintaan konsumen.</p>
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
          <p>Teknik Elektronika Manufaktur</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
                Manufaktur adalah salah satu cabang dari ilmu teknik mesin yang mempelajari tentang bagaimana suatu produk dibuat, dari ide, desain, proses pembuatan, hingga menjadi produk yang siap dipasarkan. Perkembangan teknologi informasi dan komunikasi saat ini juga sangat berpengaruh terhadap bidang manufaktur.
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
                    Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Elektronika Manufaktur untuk mendukung Indonesia Maju dan Sejahtera 2045.
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
                    Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang bidang Manufaktur, Elektrical Kontrol, Matematika, dan Prinsip Printed Circuit Board (PCB) layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
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
                    <li>1. Terwujudnya layanan, sumber daya dan ouput pembelajaran dan penelitian di bidang bidang Manufaktur, Elektrical Kontrol, Matematika, dan Prinsip Printed Circuit Board (PCB) yang bermutu, akses terbuka, inovatif, relevan dengan kebutuhan industri dan masyarakat.</li>
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
                    <li>1. Meningkatnya mutu, akses, relevansi dari layanan, sumberdaya dan output pembelajaran vokasi di bidang bidang Manufaktur, Elektrical Kontrol, Matematika, dan Prinsip Printed Circuit Board (PCB)</li>
                    <li>2. Meningkatnya mutu dan relevansi penelitian, publikasi hasil penelitian serta kemampuan penerapan iptek dan inovasi di bidang-bidang Manufaktur, Elektrical Kontrol, Matematika, dan Prinsip Printed Circuit Board (PCB)</li>
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
                Capaian Pembelajaran (CP) program studi D3 Teknik Manufaktur telah merujuk pada SN-Dikti (Permendikbud No 49 tahun 2014) dan memiliki level sesuai dengan jenjang Kerangka Kualifikasi Nasional Indonesia/KKNI (Perpres No.8 Tahun 2014). Setiap lulusan program studi D3 Teknik Manufaktur memiliki capaian pembelajaran sebagai berikut:
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
                <li>1. Mampu menerapkan matematika, sains alam, ilmu material, dan prinsip rekayasa ke dalam prosedur dan practical teknikal (technical practice) untuk menyelesaikan masalah teknologi dalam sistem dan proses manufaktur elektronika yang terdefinisi dengan jelas (well-defined).</li>
                <li>2. Mampu menyelesaikan masalah teknologi dalam sistem dan proses manufaktur elektronika yang terdefinisi dengan jelas (well-defined) dengan menggunakan analisis data yang relevan dari standar IPC, JEDEC, database, dan referensi serta memilih metode dengan memperhatikan faktor-faktor ekonomi, keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>3. Mampu merancang, merealisasikan rancangan, dan mengoptimasi rancangan Printed Circuit Board (PCB), Surface Mount Technology (SMT) dan menerapkan proses Integrated Circuit (IC) packaging sesuai dengan standar IPC dan JEDEC yang memenuhi kebutuhan spesifik dengan pertimbangan yang tepat terhadap masalah keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>4. Mampu melakukan soldering, desoldering, repair, rework dan modifikasi perangkat PCB yang memenuhi kebutuhan pengguna berdasarkan standar IPC dengan memperhatikan faktor-faktor ekonomi, keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>5. Mampu mengoperasikan dan melakukan perawatan perangkat sistem manufaktur elektronika secara berkesinambungan dengan mempertimbangkan faktor keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>6. Mampu menguji dan mengukur sistem manufaktur elektronika berdasarkan prosedur dan standar.</li>
                <li>7. Mampu menggunakan teknologi mutakhir dalam melaksanakan pekerjaan sistem manufaktur elektronika.</li>
                <li>8. Mampu mengkritisi prosedur operasional standar dalam penyelesaian masalah teknologi manufaktur elektronika yang telah/dan atau sedang diterapkan, dan dituangkan dalam bentuk kertas kerja</li>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <ul class="mt-4">
                <li>1. Konsep teoretis sains alam dan matematika terapan secara umum.</li>
                <li>2. Konsep teoretis sains rekayasa, prinsip rekayasa untuk perancangan sistem manufaktur elektronika secara mendalam.</li>
                <li>3. Konsep teoritis cara pengujian dan pembacaan spesifikasi teknis komponen dan sistem manufaktur elektronika secara umum.</li>
                <li>4. Konsep teoritis metode, sumberdaya, perangkat IT, dan teknologi modern yang sesuai untuk menyelesaikan masalah rekayasa dalam bidang manufaktur elektronika secara umum.</li>
                <li>5. Konsep, prinsip dan metode pengukuran radio frekuensi pada komponen dan devais elektronika.</li>
                <li>6. Pengetahuan faktual dan metode aplikasi referensi teknis (IPC, JEDEC), serta peraturan yang berlaku di
                    wilayah kerjanya untuk penyelesaian masalah rekayasa dalam bidang manufaktur elektronika.</li>
                <li>7. Prinsip-prinsip penjaminan mutu produk.</li>
                <li>8. Pengetahuan faktual isu terkini dalam masalah ekonomi dan lingkungan secara umum pada bidang manufaktur elektronika.</li>
                <li>9. Prinsip dan tata cara kerja bengkel/studio dan kegiatan laboratorium, serta pelaksanaan keselamatan dan kesehatan kerja, dan lingkungan (K3L).</li>
                <li>10. Prinsip dan teknik berkomunikasi efektif secara lisan dan tulisan.</li>
                <li>11. Pengetahuan faktual tentang perkembangan teknologi mutakhir dalam bidang manufaktur elektronika.</li>
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
            <div id="kul1" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px" >EM101</td>
                            <td style="max-width: 50px">Matematika Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >3</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM101"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">EM102</td>
                            <td style="max-width: 50px">Elektronika Dasar</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM102"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">EM103</td>
                            <td style="max-width: 50px">Fisika Terapan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM103"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">EM104</td>
                            <td style="max-width: 50px">Kimia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM104"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">EM105</td>
                            <td style="max-width: 50px">Rangkaian Listrik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM105"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">EM106</td>
                            <td style="max-width: 50px">Algoritma dan Pemrograman</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM106"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">EM107</td>
                            <td style="max-width: 50px">Keselamatan dan Kesehatan Kerja</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM107"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 2 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul2">Semester 2<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul2" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px" >MPK004</td>
                            <td style="max-width: 50px">Bahasa Indonesia</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MPK004"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">EM201</td>
                            <td style="max-width: 50px">Gambar Teknik</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM201"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">EM202</td>
                            <td style="max-width: 50px">Devais Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM202"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">EM203</td>
                            <td style="max-width: 50px">Elektronika Digital</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM203"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">EM204</td>
                            <td style="max-width: 50px">Ilmu dan Teknologi Material</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM204"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">EM205</td>
                            <td style="max-width: 50px">Teknologi Mikrokontroler</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM205"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">EM206</td>
                            <td style="max-width: 50px">Manufaktur PCB</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM206"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 3 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul3">Semester 3<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul3" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px">MKU001</td>
                            <td style="max-width: 50px">Olahraga</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">1</td>
                            <td >0</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MKU001"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MPK001</td>
                            <td style="max-width: 50px">Agama</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MPK001"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">EM301</td>
                            <td style="max-width: 50px">Teknologi Fabrikasi Semikonduktor</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM301"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">EM302</td>
                            <td style="max-width: 50px">Statistika dan Proses Kontrol</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM302"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">EM303</td>
                            <td style="max-width: 50px">Sistem Kendali Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM303"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">EM304</td>
                            <td style="max-width: 50px">Surface Mount Technology</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM304"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">EM305</td>
                            <td style="max-width: 50px">Elektromagnetika Terapan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM305"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 4 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul4">Semester 4<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul4" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px">MKU003</td>
                            <td style="max-width: 50px">Bahasa Inggris I</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MKU003"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MPK002</td>
                            <td style="max-width: 50px">Pancasila</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MPK002"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">EM401</td>
                            <td style="max-width: 50px">Operasi Fasilitas Manufaktur Elektronika</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM401"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">EM402</td>
                            <td style="max-width: 50px">Pengemasan Rangkaian Terintegrasi</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM402"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">EM403</td>
                            <td style="max-width: 50px">Mikroelektronika Frekuensi Radio</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >3</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM403"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">6</td>
                            <td style="max-width: 15px">EM404</td>
                            <td style="max-width: 50px">Inspeksi dan Perbaikan PCB</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">4</td>
                            <td >2</td>
                            <td >0</td>
                            <td >2</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM404"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">7</td>
                            <td style="max-width: 15px">EM406</td>
                            <td style="max-width: 50px">Metrologi Industri</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">3</td>
                            <td >2</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM406"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 5 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul5">Semester 5<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul5" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px">MKU004</td>
                            <td style="max-width: 50px">Bahasa Inggris II</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MKU004"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">MPK003</td>
                            <td style="max-width: 50px">Pendidikan Kewarganegaraan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >2</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#MPK003"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">3</td>
                            <td style="max-width: 15px">EM501</td>
                            <td style="max-width: 50px">Kewirausahaan</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM501"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">4</td>
                            <td style="max-width: 15px">EM502</td>
                            <td style="max-width: 50px">Proposal Proyek Akhir (PA)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">2</td>
                            <td >1</td>
                            <td >0</td>
                            <td >1</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM502"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">5</td>
                            <td style="max-width: 15px">EM503</td>
                            <td style="max-width: 50px">Magang Industri I</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >10</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM503"> Rincian</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </li>
          {{-- Semester 6 --}}
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul6">Semester 6<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul6" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered  table-responsive-lg text-center m-3">
                <thead>
                  <tr>
                    <th style="max-width: 12px">No</th>
                    <th style="max-width: 25px">Kode</th>
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
                            <td style="max-width: 15px">EM601</td>
                            <td style="max-width: 50px">Proyek Akhir (PA)</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">6</td>
                            <td >6</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM601"> Rincian</button>
                            </td>
                        </tr>

                        <tr>
                            <td style="max-width: 10px">2</td>
                            <td style="max-width: 15px">EM602</td>
                            <td style="max-width: 50px">Magang Industri II</td>
                            <td style="max-width: 50px">-</td>
                            <td style="max-width: 13px">10</td>
                            <td >10</td>
                            <td >0</td>
                            <td >0</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#EM602"> Rincian</button>
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
              <h4 class="title"><a href="">Process / Equipment Technician (IC Packaging Industry)</a></h4>
              <p class="description">
                Ahli madya yang mampu melaksanakan prosedur clean room, kesehatan, keselamatan kerja dan lingkungan (K3L).
              </p>
              <p class="description">
                melaksanakan proses assembly Integrated Circuit (IC) sesuai dengan prosedur dan spesifikasi teknis.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Surface Mount Technology (SMT) Technician</a></h4>
              <p class="description">
                Ahli madya yang mampu melaksanakan prosedur clean room dan kesehatan dan keselamatan kerja (K3).
              </p>
              <p class="description">
                mendesain rangkaian Printed Circuit Board (PCB) dengan software Computer Aided Design (CAD), memproduksi PCB single dan multilayer sesuai dengan standar IPC – Association Connecting Electronics Industries, melaksanakan soldering, desoldering, repair dan rework komponen secara hand-soldering.
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Quality Control (QC) Inspector</a></h4>
              <p class="description">
                Ahli madya yang mampu melaksanakan inspeksi kegagalan untuk proses Quality Control (QC).
              </p>
              <p class="description">
                mampu mengoperasikan mesin-mesin inspeksi dan deteksi/investigasi terhadap failure pada IC, mengkonsepkan analisis kegagalan menggunakan statistik seperti Statistical Process Control (SPC) dan Design of Experiments (DoE).
              </p>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Radio Frequency (RF) Tester</a></h4>
              <p class="description">
                Ahli madya yang mampu memahami konsep dasar teknologi radio frekuensi, membaca smith chart, membaca Vector Signal Analyzer (VSA), membaca Vector Network Analyzer (VNA), memahami s-parameter dan simulasi, mampu menjalin komunikasi dengan rekan kerja, membuat laporan teknis.
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
      <h3>Teknik Elektronika Manufaktur</h3>
      <p>Manufaktur adalah salah satu cabang dari ilmu teknik mesin yang mempelajari tentang bagaimana suatu produk dibuat, dari ide, desain, proses pembuatan, hingga menjadi produk yang siap dipasarkan.</p>
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
<div class="modal fade" id="EM101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <td >EM101</td>
            </tr>
            <tr>
              <td>SKS</td>
              <td >:</td>
              <td >3</td>
            </tr>
            <tr>
              <td>Deskripsi Mata Kuliah</td>
              <td >:</td>
              <td >Mata kuliah ini membahas tentang persamaan linear, persamaan kuadrat,
                  persamaan irasional, matriks dan determinan, trigonometri, bilangan kompleks,
                  limit dan turunan, integral, dan vector.
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
<div class="modal fade" id="EM102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektronika Dasar</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM102</td>
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
                    Matakuliah ini mempelajari bagaimana mengaplikasikan komponen dasar
                    semikonduktor seperti dioda dan transistor yang diwujudkan dalam aplikasi
                    rangkaian penyearah dan penguat sinyal.
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
<div class="modal fade" id="EM103" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >EM103</td>
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
                    Matakuliah ini berisi tentang konsep fisika yang diterapkan untuk menyelesaikan permasalahan di bidang manufaktur elektronika.
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
<div class="modal fade" id="EM104" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kimia</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM104</td>
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
                    Matakuliah ini memberikan pengetahuan tentang kimia dasar yang menunjang proses di manufaktur elektronika. Dengan ini diharapkan mahasiswa memiliki pengetahuan dasar berikut aspek proses kimia yang umumnya digunakan dalam proses Manufaktur Elektronika.
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
<div class="modal fade" id="EM105" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Rangkaian Listrik</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM105</td>
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
                    Matakuliah ini membahas tentang konsep dasar rangkaian listrik, hukum dasar rangkaian listrik, metode analisis (Node dan Mesh), teorema rangkaian (superposisi, Thevenin, Northon), memahami rangkaian transien (RC dan RL), pengenalan rangkaian AC RC, RL, RLC.
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
<div class="modal fade" id="EM106" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Algoritma dan Pemrograman</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM106</td>
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
                    Matakuliah ini akan membekali mahasiswa dengan pengetahuan tentang algoritma pemrograman berupa flowchart. Pengenalan variabel, tipe data, keywords dan operators. Pembuatan program dengan konsep percabangan (if, else-if, switchcase), konsep perulangan (for, while, do-while, break, continue), konsep fungsi, array, string, pointer, struktur dan I/O file. Implementasi software mencakup desain, penulisan, pengujian dan debugging kode program.
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
<div class="modal fade" id="EM107" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Keselamatan dan Kesehatan Kerja</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM107</td>
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
                    Mata kuliah ini membekali mahasiswa mengenai pentingnya keselamatan dan kesehatan kerja disertai beberapa metode / pendekatan untuk meningkatkan keselamatan dan kesehatan kerja para pekerja pada khususnya. Kuliah ini berisi prinsip-prinsip dan landasan hukum keselamatan dan kesehatan kerja. Adapun teori-teori K3 yang dipelajari meliputi pencegahan dan pengendalian kebakaran, identifikasi bahaya dan pengendalian resiko, safety sign, ergonomi, hygiene industry, dan P3K.
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
  <div class="modal fade" id="MPK004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >MPK004</td>
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
                    Pembelajaran bahasa Indonesia tidak bertujuan sekedar mengantarkan mahasiswa untuk mencapai nilai tertinggi, tetapi juga diharapkan dapat menjadi wahana untuk :
                    <ul>
                      <li>1. Menumbuhkan sikap mental civitas akademika yang mampu mengapresiasi nilai-nilai bahasa Indonesia sebagai simbol kedaulatan Bangsa dan Negara.</li>
                      <li>2. Memberikan pemahaman dan penghayatan atas keberadaan Bahasa Indonesia sebagai bahasa pemersatu bangsa dan bahasa ipteks.</li>
                      <li>3. Menyiapkan civitas akademika agar mampu menganalisis permasalahan dan mencari solusi terhadap persoalan kehidupan bermasyarakat, berbangsa dan bernegara melalui pembuatan dan penggunaan teks. </li>
                      <li>4. Mengembangkan keterampilan berkomunikasi secara akademik, baik dalam bentuk bahasa Indonesia lisan maupun tulisan demi pengembangan iptek dalam tatanan dunia global.
                      </li>
                    </ul>
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
  <div class="modal fade" id="EM201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >EM201</td>
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
                    Matakuliah ini mempelajari konsep dasar gambar teknik yang meliputi cara membaca gambar, proyeksi gambar, skala gambar, membuat kepala gambar, cetak gambar, dan cara membuat gambar dari 2D ke 3D dari 3D ke 2D menggunakan Computer Aided Drafting (CAD) sehingga menghasilkan rancangan sistem manufaktur elektronika yang mempertimbangkan faktor standar regulasi dan ergonomis.
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
  <div class="modal fade" id="EM202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Devais Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM202
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
                  <td>
                    Matakuliah ini mempelajari komponen dasar semikonduktor seperti Thyristor (DIAC, TRIAC, SCR), FET (JFET, MOSFET) dan CMOS serta rangkaian penguat sinyal menggunakan transistor dan operational amplifier (Op-Amp) yang diwujudkan dalam aplikasi rangkaian elektronika.
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
  <div class="modal fade" id="EM203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >EM203</td>
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
                    Mata kuliah ini memberikan pengenalan tentang teknik digital berupa sistem bilangan, gerbang logika, aljabar Boolean, rangkaian kombinasi, rangkaian sekuensial, dan rangkaian penghitung, Analog to Digital Converter (ADC), Digital to Analog Converter (DAC) serta Finite State Machine (FSM).
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
  <div class="modal fade" id="EM204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Ilmu dan Teknologi Material</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM204</td>
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
                    Matakuliah ini memberikan pengetahuan lengkap kepada mahasiswa tentang ilmu material dan teknologinya yang digunakan dalam manufaktur elektronika. Dengan ini diharapkan mahasiswa memiliki pengetahuan dasar cukup lengkap tentang material yang umumnya digunakan dalam proses Manufaktur Elektronika.
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
  <div class="modal fade" id="EM205" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknologi Mikrokontroler</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM205</td>
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
                    Materi perkuliahan meliputi konsep dan dasar pemrograman mikrokontroler yakni, digital I/O, analog I/O, clock, interrupt, modul komunikasi, timer, memori, dan watchdog timer
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
  <div class="modal fade" id="EM206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Manufaktur PCB</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM206</td>
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
                    Mata kuliah ini akan mempelajari pengenalan menu aplikasi desain PCB: Schematic Editor, tool schematic editor, PCB editor, tool PCB editor. Membuat rangkaian pada schematic editor dan PCB editor. Membuat schematic dan PCB library. Proses pembuatan PCB double layer: pengeboran, laminating, stripping, solder mask dan routing. Panelisasi board PCB. Pengujian menggunakan flying probe.
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
  <div class="modal fade" id="MKU001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Olahraga</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MKU001</td>
                </tr>
                <tr>
                  <td>SKS</td>
                  <td >:</td>
                  <td >1</td>
                </tr>
                <tr>
                  <td>Deskripsi Mata Kuliah</td>
                  <td >:</td>
                  <td>
                    Mata kuliah ini membekali wawasan, pengetahuan, dan pengalaman belajar kepada mahasiswa tentang Ilmu Kesehatan Olaharaga yang meliputi Pengertian dan ruang lingkup Olahraga, Pemeriksaan Prapartisipasi, Kebugaran Jasmani, Doping, Olahraga pada Berbagai Penyakit, dan Olahraga Jasmani Pilihan yang dapat diaplikasikan dalam kehidupan sehari-hari.
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
  <div class="modal fade" id="MPK001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Agama</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MPK001</td>
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
  <div class="modal fade" id="EM301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Teknologi Fabrikasi Semikonduktor</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM301
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
                  <td>
                    Matakuliah ini mempelajari dasar proses manufaktur semikonduktor (mikroelektronika) yang diterapkan dalam dunia industri mikroelektronika dengan mempelajari setiap tahap proses fabrikasi mikroelektronika dan teknologi fabrikasi divais dan rangkaian terintegrasi (IC) mikroelektronika dengan silabus (pokok bahasan): value-chain dalam industri semikonduktor, meliputi industri jasa desain chip/VLSI serta industri fabrikasi IC dari bahan baku untuk silicon hingga wafer yang siap untuk dikemas. Topik yang dibahas meliputi teknologi, urutan proses, serta peralatan proses yang digunakan dalam teknologi utama industri IC yaitu teknologi CMOS dan Bipolar, meliputi proses pembuatan bahan baku wafer silicon, proses oksidasi termal, fotolitografi, difusitermal, implantasiion, Chemical Vapor Deposition (CVD), pembuatan mask serta dasar perancangan layout IC.
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
  <div class="modal fade" id="EM302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Statistika dan Proses Kontrol</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM302</td>
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
                    Matakuliah ini mempelajari teknik-teknik kontrol proses untuk menghitung batasan bagi produk yang cacat serta cara pencegahannya dengan metoda statistik. Metode statistik meliputi 7 Quality Tools (Checksheet, diagram pareto, diagram fishbone, diagram scatter, histogram, control chart, stratification), distribusi normal, T-test, serta laporan statistik.

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
  <div class="modal fade" id="EM303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Statistika dan Proses Kontrol</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM303</td>
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
                    Matakuliah ini mempelajari teknik-teknik kontrol proses untuk menghitung batasan bagi produk yang cacat serta cara pencegahannya dengan metoda statistik. Metode statistik meliputi 7 Quality Tools (Checksheet, diagram pareto, diagram fishbone, diagram scatter, histogram, control chart, stratification), distribusi normal, T-test, serta laporan statistik.
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
  <div class="modal fade" id="EM304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Surface Mount Technology</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM304</td>
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
                    Mata kuliah ini membahas mengenai keterampilan dasar dalam teknologi PCB Assembly (PCBA) berupa Surface Mount Technology (SMT) mencakup teknologi, urutan proses serta peralatan yang digunakan dalam proses produksi. Pada mata kuliah ini juga dibahas mengenai keterampilan lanjut dalam standar dan kendali mutu serta perancangan kapasitas dan optimasi operasi fasilitas SMT. Di samping SMT, diberikan konsep dari wave soldering untuk perakitan komponen through hole.
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
  <div class="modal fade" id="EM305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Elektromagnetika Terapan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM305</td>
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
                    Matakuliah ini memberikan pengetahuan kepada mahasiswa tentang medan-medan elektromagnetik dan penerapannya dalam berbagai masalah di dunia nyata.
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
  <div class="modal fade" id="MKU003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris I</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MKU003</td>
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
                   <ul>
                    <li>1. General business - kontrak, pemasaran, jaminan, perencanaan bisnis,konferensi</li>
                    <li>2. Offices - surat-menyurat, peralatan dan perabotan kantor, prosedur perkantoran, teknologi perkantoran, computer</li>
                    <li>3. Personnel – iklan pekerjaan dan perekrutan, melamar dan wawancara, penerimaan pegawai, pensiun, gaji, promosi</li>
                    <li>4. Purchasing - pembelanjaan, pemesanan, pengiriman, faktur, persediaan.</li>
                    <li>5. Finance and budgeting - perbankan, pajak, akunting, investasi, laporan keuangan</li>
                    <li>6. Management Issues – property & departments, board meetings & committees, kendali mutu, pengembanagan produk, renting & leasing</li>
                   </ul>
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
  <div class="modal fade" id="MPK002" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pancasila</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MPK002</td>
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
                    Pendidikan Pancasila adalah salah satu mata kuliah wajib yang harus diikuti oleh mahasiswa. Dalam Undang-Undang No. 12 tahun 2012 pasal 35 ayat 3 disebutkan bahwa pada kurikulum pendidikan tinggi wajib memuat mata kuliah Pendidikan Agama, Pendidikan Pancasila, Pendidikan Kewarganegaraan, dan Bahasa Indonesia untuk program sarjana dan diploma. Mata kuliah ini bertujuan untuk mengantarkan mahasiswa dalam memantapkan kepribadiannya agar secara konsisten mampu mewujudkan nilai-nilai dasar keagamaan dan kebudayaan, rasa kebangsaan dan cinta tanah air sepanjang hayat.
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
  <div class="modal fade" id="EM401" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Operasi Fasilitas Manufaktur Elektronika</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM401
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
                    Mata kuliah ini berisi tentang cara pengoperasian fasilitas clean room dan fasilitas manufaktur secara umum serta cara penyimpanan bahan dasar elektronika untuk komponen pada proses manufaktur elektronika khususnya bidang pengemasan rangkaian terintegrasi, Printed Circuit Board (PCB) dan line produksi Surface Mount Technology (SMT). Mahasiswa juga mempelajari pembuatan dokumentasi traveler lot dan juga penyimpanan bahan habis pakai non kimia di industri manufaktur elektronika.
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
  <div class="modal fade" id="EM402" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Pengemasan Rangkaian Terintegrasi</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM402</td>
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
                    Matakuliah ini membahas tentang pengenalan teknologi pengemasan IC (leaded, non-lead dan non-standard) dan perkembangan teknologi IC, process flow pengemasan (leaded, QFN, BGA), wafer dicing, die attach / die bonding, flip chip, reflow, under fill, gell fill, glob top, wire bonding, molding, tin plating, trimforming (DTFS), labeling / marking, ball attached / reflow BGA, saw singulation, pick and place.
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
  <div class="modal fade" id="EM403" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Mikroelektronika Frekuensi Radio</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM403</td>
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
                    Matakuliah ini memberikan pengetahuan kepada mahasiswa tentang pengenalan Elektronika RF/Microwave dan penerapannya dalam berbagai masalah di dunia nyata.
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
  <div class="modal fade" id="EM404" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Inspeksi dan Perbaikan PCB</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM404</td>
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
                    Mata kuliah ini mempelajari tentang dasar Inspeksi Printed Circuit Board (PCB), soldering dan metode identifikasinya dengan menggunakan standard internasional IPC. Inspeksi PCB dan soldering termasuk inspeksi untuk Through Hole dan SMT. Penerapan produksi PCB untuk proses produksi dan quality nya.serta menerapkan standard yang bisa diterima industri untuk soldering dan PCB.

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
  <div class="modal fade" id="EM406" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Metrologi Industri</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM406</td>
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
                    Mata kuliah ini bertujuan untuk membekali mahasiswa tentang pengukuran dan inspeksi dalam proses manufaktur elektronika menggunakan alat-alat ukur dan inspeksi yang sesuai standar industri serta kalibrasinya. Mata kuliah ini mencakup pengukuran dan inspeksi menggunakan mikroskop, jangka sorong, mikrometer sekrup, profile projector, wire pull, ball share, depth gauge, dan pelalatan inspeksi lainnya yang berkaitan dengan manufaktur elekronika.

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
  <div class="modal fade" id="MKU004" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Bahasa Inggris II</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >MKU004
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
  <div class="modal fade" id="MPK003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td >MPK003</td>
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
  <div class="modal fade" id="EM501" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Kewirausahaan</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM501</td>
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
                    Mata kuliah ini dirancang untuk membekali mahasiswa memiliki pemahaman, pola pikir, sikap, dan skill entepreneurship yang baik. Materi perkuliahan membahas hakekat dan mental entrepreneurship, peran penting entrepreneurship dan enterpreneur, figur/tokoh entrepreneur, peta jalan entrepreneur yang sukses, dan pengembangan kapasitas/skill entrepreneur atau wirausahawan. Pengembangan skill atau kompetensi berwirausaha akan dilakukan dengan model bisnis canvas. Mahasiswa akan difasilitasi dengan meteri ajar dalam bentuk modul atau video tutorial lalu pengetahuannya akan diarahkan untuk dipraktikkan dalam bentuk tugas yang dikerjakan secara berkelompok lintas program studi. Satu kelompok terdiri dari 4 orang. Tugas kelompok tersebut adalah menyusun dan jika memungkinkan melaksanakan business plan yang berbasis data dan hasil kajian, tajam, dan feasible untuk dijalankan. Penyusunan dilakukan secara bertahap sesuai dengan urutan materi pembelajaran. Pembahasan terhadap bisnis plan yang telah disusun akan dilakukan oleh dosen pengajar lintas program studi dan dosen praktisi wirausaha secara bertahap sesuai urutan tugas. Pada akhir perkuliahan, kelompok usaha tersebut mempresentasikan bisnis plannya secara utuh (business launching) dalam bentuk video yang diupload di media sosial dan dishare ke komunitas bisnis di Polibatam, Pembina Hibah Program Kewirausahaan Mahasiswa Vokasi (PKMV), komunitas investor, dan jaringan perbankan. Kelompok yang berhasil mendapatkan investor atau mendapatkan funding atau telah beroperasi secara riil akan mendapatkan apresiasi dalam bentuk nilai A untuk semua anggota kelompok tersebut.
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
  <div class="modal fade" id="EM502" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proposal Proyek Akhir (PA)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM502</td>
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
                    Mata kuliah ini dirancang untuk mempercepat penyelesaian studi mahasiswa dengan memberikan pemahaman kepada mahasiswa tentang potensi kelayakan masalah yang ditemukan selama periode magang di industri untuk dapat dijadikan sebagai kajian penelitian proyek akhir, mahasiswa dibekali dengan materi teknik penyusunan proposal sesuai dengan pedoman penyusunan tugas akhir, serta teknik presentasi proposal. Mahasiswa diwajibkan mengangkat sebuah tema/topik proyek yang diperoleh dari tempat magang, dikonsultasikan dengan dosen pembimbing dan dipresentasikan dalam seminar proposal Proyek Akhir.
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
  <div class="modal fade" id="EM503" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Magang Industri I</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM503</td>
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
                    Mata kuliah ini memberikan pengenalan magang industri, etika profesi kerja, dan secara aktif terlibat dalam kegiatan magang di industri.
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
  <div class="modal fade" id="EM601" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Proyek Akhir (PA)</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM601</td>
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
                   Mata kuliah ini dirancang untuk mengarahkan mahasiswa dalam penyusunan Proyek Akhir sebagai salah satu persyaratan kelulusan mahasiswa. Proyek Akhir berupa karya ilmiah yang disusun berdasarkan hasil observasi dan penelitian dari proyek yang dikerjakan mahasiswa selama magang di Industri. Penyusunan Proyek Akhir berlandaskan pedoman penyusunan tugas akhir. Mata kuliah ini memiliki andil dalam pemantauan pengerjaan Proyek Akhir yang dilakukan mahasiswa secara seksama dengan bimbingan dosen pembimbing.

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
  <div class="modal fade" id="EM602" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
        <div class="modal-content">
          <div class="modal-body">
            
            <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3">
              <tbody >
                
                <tr>
                  <td>Mata Kuliah</td>
                  <td >:</td>
                  <td>Magang Industri II</td>
                </tr>
                <tr>
                  <td>Kode</td>
                  <td >:</td>
                  <td >EM602</td>
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
                    Pada mata kuliah ini mahasiswa secara aktif terlibat dalam kegiatan magang di industri disertai dengan pembuatan laporan magang industri.
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