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

  <title>{{ $data->title }}</title>
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
        <h1><a href="">{{ $data->title }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#lulusan">lulusan</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="/">back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      @foreach ($data->hero as $hero)

      <!-- Slide 1 -->
      <div class="carousel-item {{($loop->first) ? 'active' : ''}}">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{!! $hero->title !!}</h2>
          <p class="animate__animated fanimate__adeInUp">{!! $hero->deskripsi !!}</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
      @endforeach

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
        @foreach ($data->about as $about)
        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>{!! $about->title !!}</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <p>
              {!! $about->deskripsi !!}
            </p>
            <a href="#" class="btn-learn-more ">Learn More</a>
          </div>
        </div>
        @endforeach

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
        @if (count($data->tujuan) > 0)
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <p>
                  {!! $data->tujuan[0]->visi !!}
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
                  @if ($data->tujuan[0]->misi)
                  {!!$data->tujuan[0]->misi!!}
                  @endif
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
                <p>
                  @if ($data->tujuan[0]->tujuan)
                      
                  {!!$data->tujuan[0]->tujuan!!}
                  @endif
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <p>
                  @if ($data->tujuan[0]->sasaran)
                      
                  {!!$data->tujuan[0]->sasaran!!}
                  @endif
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/assets/img/course-details-tab-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        @endif
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
        @if (count($data->capaian) > 0)
        <div class="row mb-4" data-aos="zoom-out">
            <div class="col-lg-12">
              <p>
                  {!! $data->capaian[0]->deskripsi !!}
              </p>
            </div>
          </div>

        <ul class="cpa-list" data-aos="zoom-out">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#cpa1">Sikap<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa1" class="collapse" data-bs-parent=".cpa-list">
              <p>
                {!! $data->capaian[0]->sikap !!}
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa2" class="collapsed question">Keterampilan Umum<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa2" class="collapse" data-bs-parent=".cpa-list">
              <p>
                {!! $data->capaian[0]->umum !!}
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa3" class="collapsed question">Keterampilan Khusus<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa3" class="collapse" data-bs-parent=".cpa-list">
              <p>
                {!! $data->capaian[0]->khusus !!}
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#cpa4" class="collapsed question">Penguasaan Pengetahuan <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="cpa4" class="collapse" data-bs-parent=".cpa-list">
              <p>
                {!! $data->capaian[0]->penguasaan !!}
              </p>
            </div>
          </li>

        </ul>

        @endif
      </div>
    </section><!-- End Capaian Section -->
    <!-- ======= Kurikulum Section ======= -->
    <section id="kul" class="kul mt-3 pb-3">
      <div class="container">
        
        <div class="section-title pb-2" data-aos="zoom-out">
          <h2>KURIKULUM</h2>
          <p>KURIKULUM</p>
        </div>
        @if (count($data->kurikulum) > 0)
        <div class="row mb-4" data-aos="zoom-out">
            <div class="col-lg-12">
              <p>
                  {!! $data->kurikulum[0]->deskripsi !!}
              </p>
            </div>
          </div>

        <ul class="kul-list" data-aos="zoom-out">
          @foreach ($data->title_semester as $semester)
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#kul{{ $loop->iteration }}">{{ $semester->title }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="kul{{ $loop->iteration }}" class="collapse" data-bs-parent=".kul-list">
              <table class="table align-middle table-bordered table-sm table-responsive-lg text-center m-3">
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
                <tbody>
                      @foreach ($data->title_semester[$loop->index]->semester as $semester)
                        <tr>
                            <td style="max-width: 10px">{{ $loop->iteration }}</td>
                            <td style="max-width: 15px" >{{ $semester->kode }}</td>
                            <td style="max-width: 50px">{{ $semester->name }}</td>
                            <td style="max-width: 50px">{{ $semester->course }}</td>
                            <td style="max-width: 13px">{{ $semester->sks }}</td>
                            <td >{{ $semester->teori }}</td>
                            <td >{{ $semester->seminar }}</td>
                            <td >{{ $semester->praktikum }}</td>
                            <td style="max-width: 30px">
                              <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#Modal{{ $semester->id }}"> Rincian</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
          </li>
          @endforeach


        </ul>

        @endif
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
          @foreach ($data->lulusan as $lulusan)
          <div class="col-lg-6 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">{!! $lulusan->title !!}</a></h4>
              <p class="description">
                {!! $lulusan->deskripsi !!}</p>
              </div>
            </div>
            @endforeach
          
          </div>
        </div>

      </div>
    </section><!-- End lulusan Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Selecao</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Modal -->
@foreach ($data->title_semester as $semester)
  @foreach ($data->title_semester[$loop->index]->semester as $semester)
      
    <div class="modal fade" id="Modal{{ $semester->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" >
      <div class="modal-content">
        <div class="modal-body">
          
          <table class="table align-middle table-bordered table-sm table-responsive-lg text-justify my-3 ">
            <tbody >
              
              <tr>
                <td>Mata Kuliah</td>
                <td >:</td>
                <td >{{ $semester->name }}</td>
              </tr>
              <tr>
                <td>Kode</td>
                <td >:</td>
                <td >{{ $semester->kode }}</td>
              </tr>
              <tr>
                <td>SKS</td>
                <td >:</td>
                <td >{{ $semester->sks }}</td>
              </tr>
              <tr>
                <td>Deskripsi Mata Kuliah</td>
                <td >:</td>
                <td >{{ $semester->deskripsi }}</td>
              </tr>
              <tr>
                <td>Capaian Pembelajaran Umum</td>
                <td >:</td>
                <td >{{ $semester->umum }}</td>
              </tr>
              <tr>
                <td>Capaian Pembelajaran Khusus</td>
                <td >:</td>
                <td >{{ $semester->khusus }}</td>
              </tr>
              <tr>
                <td>Bahan Pustaka</td>
                <td >:</td>
                <td >{{ $semester->pustaka }}</td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
  @endforeach
@endforeach

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