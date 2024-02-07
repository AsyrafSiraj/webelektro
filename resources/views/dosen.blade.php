<main class="mt-5">

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <div class="pb-3">
            <p><?= $title ?></p>
          </div>

          <h4>Pengelola Jurusan Teknik Elektro terdiri dari Ketua Jurusan, Sekretaris Jurusan, Ketua Program Studi, dan Koordinator Laboran</h4>
          <br>
          <h4>Berikut Pengelola Jurusan Teknik Elektro</h4>
        </div>

        <div class="row" >

          <?php foreach ($data_dosen as $key => $value) { ?>
            <div id="dosen" class="col col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0 shadow">

                  <div class="col-lg-3 text-center text-white bg-primary rounded-start">
                    <img src="{{ asset('storage/' . $value->image) }}"
                      alt="Avatar" class="img-fluid mt-5 mb-4 rounded-circle" style="width: 100px; height: 100px" />
                      <div class=" mx-2 py-2" style="font-size: 15px;">
                        {{ $value->nama_dosen }} </div>
                        <hr class="mt-0 mb-3">
                      <div class=" ms-1 mb-3" style="font-size: 14px">{{ $value->jabatan }}</div>
                  </div>

                  <div class="col-lg-9 rounded-end" style="background-color: #f3f9fd">
                    <div class="card-body p-4">
                      <h6>Information</h6>
                      <hr class="mt-0 mb-3">

                      <div class="row " style="font-size: 14px">
                        <div class="col-12">
                          <p class=" mb-0"><b>Nidn :</b> {{ $value->nidn }}</p>
                        </div>
                        <div class="col-12">
                          <p class=" mb-0"><b>Pendidikan Terakhir :</b> {{ $value->pendidikan }}</p>
                        </div>
                        <div class="col-12">
                          <p class=" mb-0"><b>Program Studi :</b> {{ $value->program_studi }}</p>
                        </div>
                        <div class="col-12">
                          <p class=" mb-3"><b>Email :</b> {{ $value->email }}</p>
                        </div>

                      </div>

                      <h6>Riwayat Pendidikan</h6>
                      <hr class="mt-0 mb-1">
                      <div class="row " style="font-size: 14px">
                        <div class="col-12">
                          <p class=" mb-3">{!! $value->deskripsi !!}</p>
                        </div>
                      </div>
                      <hr class="mt-0 mb-3">
                      <div class="row " style="font-size: 14px">
                        <div class="col-12">
                          <p class=" mb-2"><b>Bidang Spesialis :</b> {{ $value->spesialis }}</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start mt-4">
                        <a href="#!"><i class="bi bi-twitter me-3"></i></a>
                        <a href="#!"><i class="bi bi-facebook me-3"></i></a>
                        <a href="#!"><i class="bi bi-instagram "></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
          <?php } ?>

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->