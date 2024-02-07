

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses mt-5" >
      <div class="container" data-aos="fade-up" style="min-height: 500px">

        <div class="section-title text-center mb-2 pb-0">
          <p>{{ $data->title }}</p>
            <div class="text-uppercase ">
                <a href="/pengumuman?category={{ $data->Category->slug }}" class=" mt-1 mb-3">Category : {{ $data->Category->name }}</a> 
            </div>
        </div>
        <hr>
        
       <div class="container">   
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class=" col-lg-10 col-md-10  " style="max-height: 200px;  overflow: hidden">
              <img src="{{ asset('storage/' . $data->image) }}" class=" rounded-1 w-100"  alt="">
            </div>
            
            <div class="col-lg-10 col-md-10 mt-3" style=" ">
               <div class="fs-6"><p>{!! $data->body !!}</p></div>
            </div>

            <div class="col-lg-10 col-md-10 ">
                <a href="/pengumuman" class="btn btn-primary">Back</a></div>
            </div>
        </div>
      </div>
    </section><!-- End Popular Courses Section -->

  