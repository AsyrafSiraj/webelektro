

  <!-- ======= Hero Section ======= -->
  <section class="p-0 hero-block">
    <div id="hero" class=" carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="/assets/img/seagulls.png" class="" alt="...">   
          <div class="carousel-caption ">
            <div class="row " data-aos="fade-up" data-aos-delay="150">
              <div class="col-lg-12 mb-5">
                <h1>JURUSAN TEKNIK ELEKTRO</h1>
              </div>
              <div class="col-lg-6 mb-5">
              <h1>Visi</h1><br>
              <p>Menjadi pusat keunggulan dalam pendidikan, penelitian, dan pengembangan teknologi di bidang elektro yang menghasilkan lulusan yang berkualitas, inovatif, dan siap menghadapi tantangan masa depan.
              </p>
              <a href="" class="btn btn-danger">Read More</a>
            </div>
              <div class="col-lg-6">
              <h1>Misi</h1><br>
              <p>Memberikan pendidikan berkualitas tinggi dalam bidang elektro dengan fokus pada pengetahuan teoritis dan keterampilan praktis yang relevan.Mengembangkan kurikulum yang selaras dengan perkembangan terkini dalam industri elektro dan teknologi informasi.
              </p>
              <a href="" class="btn btn-danger">Read More</a>
            </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/assets/img/seagulls.png" class="" alt="...">
          <div class="carousel-caption">
            <div class="row">
              <div class="col-lg-12">
                <h2>Sarjana Terapan Teknologi Rekayasa Elektronika</h2><br>
                <p>Lulusan program ini memiliki kapasitas dalam merancang dan menganalisa rangkaian elektronika baik dalam pembuatan prototipe maupun reverse engineering dari rangkaian elektronika dengan memahami standard dari pengujian, pengoperasian, dan perawatan sistem elektronika. Hal ini akan diterapkan pada bidang : sistem kendali, Internt of Things (IoT) , sistem komputer, ataupun sistem elektronika daya.
                </p>
                <a href="" class="btn btn-danger">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/assets/img/seagulls.png" class="" alt="...">
          <div class="carousel-caption">
            <div class="row">
              <div class="col-lg-12">
                <h2>Diploma 3 Teknik Elektronika Manufaktur</h2><br>
                <p>Program studi Diploma Tiga Teknik Elektronika Manufaktur mempunyai 4 kompetensi utama yaitu IC packaging industry, manufaktur PCB, Surface Mount Technology (SMT), failure analysis (FA)/product analysis (PA) dan pengujian RF.
                </p>
                <a href="" class="btn btn-danger">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
    
</section><!-- End Hero -->

  <main id="main">
    {{-- Download --}}
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <p>Pengumuman {{ $title }}</p>
          <a href="/categories">Categories</a>

          <div class="row justify-content-center mt-3">
            <div class="col-lg-5">
              <form action="/pengumuman">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group input-group-sm mb-3 ">

                  <input type="text" class="form-control " placeholder="Search.." name="search" value="{{ request('search') }}">

                  <button class="btn btn-primary" type="submit"><i class="bi bi-search">  </i></button>
                </div>
              </form>
            </div>
          </div>

        </div>

        
            
        @if ($data_pengumuman->count())
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php foreach ($data_pengumuman as $pengumuman) { ?>
            
            <div class="col-lg-12 col-md-12 ">
              <div class="course-item">
                <div class="course-content">
                  
                  <div class="row">
                    <div class="col-md-2">
                      <img src="{{ asset('storage/' . $pengumuman->image) }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-10">
                      <div class="judul">
                        <h2>{{ $pengumuman->title }}</h2>
                      </div>

                      <div class="sub-judul pb-2">
                        <p><i>{{ $pengumuman->created_at->diffForHumans() }} | {{ $pengumuman->category->name }}</i></p>
                      </div>

                      <div class="isi pb-3">
                        <p class="h2">{{ $pengumuman->excerpt }} </p>
                      </div>

                      <div class="penutup">
                        <a href="/pengumuman/{{ $pengumuman->slug }}" class="btn btn-primary">View Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
            

          <?php } ?>

        </div>
        @else
            <div class="h3 text-capitalize text-center">Search Not Found!</div>
        @endif
        <div class="mt-3 d-flex justify-content-center">
        <span>{{ $data_pengumuman->links() }}</span> 
        </div>
      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->