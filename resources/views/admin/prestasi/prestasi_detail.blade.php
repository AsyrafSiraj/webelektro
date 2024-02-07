
<main class="">
    <!-- ======= Popular Courses Section ======= -->
    <section id="" class="bg-white py-5 rounded-5 shadow-sm" >
		<div class="container" data-aos="fade-up" style="min-height: 500px">
  
		  <div class="h4  text-center mb-2 pb-1 mx-5">
			<p>{{ $data->name }}</p>
		  </div>
		  <hr>
		  
		 <div class="container">   
		  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
			<div class="col-lg-11 col-md-11 mb-2">
				<a href="/dashboard/prestasi" class="btn btn-primary">Back</a>
				<a href="/dashboard/prestasi/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
				<form action="/dashboard/prestasi/{{ $data->id }}" method="post" class="d-inline">
					@method('delete')
					@csrf
					<button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
						Hapus
					</button>
				</form>
			</div>
			  <div class=" col-lg-3 col-md-3 mt-5 mx-auto">
				<img src="{{ url('storage/' . $data->image) }}" class=" rounded-1 img-fluid"  alt="">
			  </div>
			  
			  <div class="col-lg-7 col-md-7 mx-auto" style=" ">
				 <div class="fs-6"><p>{!! $data->deskripsi !!}</p></div>
			  </div>
  
			  
			
		  </div>
		</div>
	  </section><!-- End Popular Courses Section -->
	</main>
	