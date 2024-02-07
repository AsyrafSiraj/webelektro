
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-white bg-opacity-75">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="/assets/img/logo_elektro.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="/" class="logo me-auto"><img src="/assets/img/logo_elektro.png" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a class="<?= ($menu == 'pengumuman') ? 'active' : '' ?>" href="{{ url('pengumuman') }}">Pengumuman</a>
          </li>
          
          <li>
            <a class="<?= ($menu == 'beranda') ? 'active' : '' ?>" href="{{ url('beranda') }}">Beranda</a>
          </li>

          <li>
            <a class="<?= ($menu == 'fasilitas') ? 'active' : '' ?>" href="{{ url('fasilitas') }}">Fasilitas</a>
          </li>
          
        

          <li class="dropdown">
            <a href="/">
              <span>Program Studi</span> 
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="Mobile-Smooth">
              <li><a href="/prodi/elektronika-manufaktur">D3 Teknik Manufaktur</a></li>
              <li><a href="/prodi/teknik-instrumentasi">D3 Teknik Instrumentasi</a></li>
              <li><a href="/prodi/rekayasa-pembangkit-energi">D4 Teknologi Rekayasa Pembangkit Energi</a></li>
              <li><a href="/prodi/teknologi-rekayasa-elektronika">D4 Teknologi Rekayasa Elektronika</a></li>
              <li><a href="/prodi/teknik-mekatronika">D4 Teknik Mekatronika</a></li>
              <li><a href="/prodi/teknik-robotika">D4 Teknik Robotika</a></li>
            </ul>
          </li>
          
          <li>
            <a class="<?= ($menu == 'dosen') ? 'active' : '' ?>" href="{{ url('dosen') }}">Dosen</a>
          </li>

          <li>
            <a class="<?= ($menu == 'prestasi') ? 'active' : '' ?>" href="{{ url('prestasi') }}">Prestasi</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->