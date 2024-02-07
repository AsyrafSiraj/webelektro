
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat datang di,<br>Jurusan Teknik Elektro</h1>
      <h2>Menjadi bagian dari Jurusan Teknik Elektro untuk mengeksplorasi dan mengembangkan bakat anda di bidang Teknik Elektro</h2>
    </div>
  </section>
  <section>
    <div class="row justify-content-center">
      @foreach ($data as $category)
      
      <div class="col-lg-3 m-3" >
        <a href="/pengumuman?category={{ $category->slug }}">
        <div class="card bg-dark text-white " id="card_pengumuman">
          <img src="assets/img/events-1.jpg" class="card-img" alt="...">
          <div class="card-img-overlay text-dark">
            <h5 class="card-title bg-white text-center" style="opacity: 0.7; margin-top: 25%">{{ $category->name }}</h5>
          </div>
        </div>
        </a>
      </div>
      @endforeach

      

      {{-- <div class="col-lg-5 ">
        <p class="fw-bold fs-2 text-center">VISI</p>
        <p>
          Menjadi jurusan vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang Teknik Informatika untuk mendukung Indonesia Maju dan Sejahtera 2045
        </p>
      </div>
      <div class="col-lg-5 ">
        <p class="fw-bold fs-2 text-center">MISI</p>
        <p>
          Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang bidang Informatika, Multimedia dan Jaringan, Geomatika, Animasi, dan Keamanan Siber melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.


        </p>
      </div> --}}
    </div>
  </section>
  <!-- End Hero -->