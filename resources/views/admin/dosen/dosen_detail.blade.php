
<main class="">
    <!-- ======= Popular Courses Section ======= -->
    <section id="" class=" py-5 " >
		<div class="container" data-aos="fade-up" style="min-height: 500px">
  
            <div class="col-lg-10 col-md-10 mb-2">
				<a href="/dashboard/dosen" class="btn btn-primary">Back</a>
				<a href="/dashboard/dosen/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
				<form action="/dashboard/dosen/{{ $data->id }}" method="post" class="d-inline">
					@method('delete')
					@csrf
					<button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
						Hapus
					</button>
				</form>
			</div>
            <div class="col col-lg-12 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                  <div class="row g-0 shadow">
  
                    <div class="col-lg-3 text-center text-white rounded-start" style="background-color: #336B87">
                      <img src="{{ asset('storage/' . $data->image) }}"
                        alt="Avatar" class="img-fluid mt-5 mb-4 rounded-circle" style="width: 90px; height: 80px;" />
                        <div class=" mx-2 py-2" style="font-size: 15px;">
                          {{ $data->nama_dosen }} </div>
                          <hr class="mt-0 mb-3">
                        <div class=" ms-1 mb-3" style="font-size: 14px">{{ $data->jabatan }}</div>
                    </div>
  
                    <div class="col-lg-9 rounded-end" style="background-color: #f3f9fd">
                      <div class="card-body p-4">
                        <h6>Information</h6>
                        <hr class="mt-0 mb-3">
  
                        <div class="row " style="font-size: 14px">
                          <div class="col-12">
                            <p class=" mb-0"><b>Nidn :</b> {{ $data->nidn }}</p>
                          </div>
                          <div class="col-12">
                            <p class=" mb-0"><b>Pendidikan Terakhir :</b> {{ $data->pendidikan }}</p>
                          </div>
                          <div class="col-12">
                            <p class=" mb-0"><b>Program Studi :</b> {{ $data->program_studi }}</p>
                          </div>
                          <div class="col-12">
                            <p class=" mb-3"><b>Email :</b> {{ $data->email }}</p>
                          </div>
  
                        </div>
  
                        <h6>Riwayat Pendidikan</h6>
                        <hr class="mt-0 mb-1">
                        <div class="row " style="font-size: 14px">
                          <div class="col-12">
                            <p class=" mb-3">{!! $data->deskripsi !!}</p>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row " style="font-size: 14px">
                          <div class="col-12">
                            <p class=" mb-2"><b>Bidang Spesialis :</b> {{ $data->spesialis }}</p>
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

  
			  
			
		  </div>
		</div>
	  </section><!-- End Popular Courses Section -->
	</main>
	