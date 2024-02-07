
<main class="">
    <!-- ======= Popular Courses Section ======= -->
    <section id="" class="bg-white py-5 rounded-5 shadow-sm" >
		<div class="container" data-aos="fade-up" style="min-height: 500px">
  
		  <div class="h4  text-center mb-2 pb-1 mx-5">
			<p>{{ $data->title }}</p>
		  </div>
		  <hr>
		  
		 <div class="container">   
		  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
			<div class="col-lg-10 col-md-10 mb-2">
				<a href="/dashboard/pengumuman" class="btn btn-primary">Back</a>
				<a href="/dashboard/pengumuman/{{ $data->slug }}/edit" class="btn btn-warning">Edit</a>
				<form action="/dashboard/pengumuman/{{ $data->slug }}" method="post" class="d-inline">
					@method('delete')
					@csrf
					<button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
						Hapus
					</button>
				</form>
			</div>
			  <div class=" col-lg-10 col-md-10  " style="max-height: 200px;  overflow: hidden">
				<img src="{{ asset('storage/' . $data->image) }}" class=" rounded-1 w-100"  alt="">
			  </div>
			  
			  <div class="col-lg-10 col-md-10 mt-3" style=" ">
				 <div class="fs-6"><p>{!! $data->body !!}</p></div>
			  </div>
  
			  
			
		  </div>
		</div>
	  </section><!-- End Popular Courses Section -->
	</main>
	