{{-- @foreach ($images as $image)
  @dump($image->id)
@endforeach
@dd("selesai") --}}
  <!-- ======= Hero Section ======= -->
  <section id="values">
    <!-- End Hero -->
   
    <main id="main">
  
      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" >
  
          <div class="section-title text-center" data-aos="fade-up">
            <div class="pb-3">
              <p><?= $title ?></p>
            </div>
  
            <h4>Berikut ini merupakan Fasilitas dari Jurusan Teknik Elektro</h4>
          </div>
          
          <div class="row align-items-center" > 
            @foreach ($data_fasilitas as $fasilitas)
            <div class="col-lg-4 col-md-6 pb-4 " data-aos="fade-up" data-aos-delay="200" >
              <div class="course-item ">
                <div class="course-content ">
                    <a data-bs-toggle="modal" data-bs-target="#ModalFasilitas{{ $fasilitas->id }}">
                      <img class=" img-fluid " src="{{ asset('storage/' . $fasilitas->image_fasilitas[0]->image) }}">
                    </a>
                    <div class="item-info text-center text-capitalize">
                      {{ $fasilitas->name }}
                      <a data-bs-toggle="modal" data-bs-target="#ModalInfo{{ $fasilitas->id }}" class="ms-2 position-absolute">
                        <i class="bi bi-exclamation-circle"></i>
                      </a>
                    </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
            @endforeach
          </div>
  
        </div>
      </section><!-- End Popular Courses Section -->
  
    </main><!-- End #main -->


    <!-- Modal -->
    @foreach ($data_fasilitas as $fasilitas)
<div class="modal fade" id="ModalFasilitas{{ $fasilitas->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" >
      <div class="modal-body carousel slide" id="carousel{{ $fasilitas->id }}">
        <div class="carousel-inner">
          @foreach ($images->where('fasilitas_id', $fasilitas->id) as $key => $image)
          {{-- @dump($image->id) --}}
              <div class="carousel-item {{($loop->first) ? 'active' : ''}}">
                <img src="{{ asset('storage/' . $image->image) }}" class="d-block w-100" alt="">
              </div>
          
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $fasilitas->id }}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $fasilitas->id }}" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endforeach

    @foreach ($data_fasilitas as $fasilitas)
<div class="modal fade" id="ModalInfo{{ $fasilitas->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title mx-auto">{{ $fasilitas->name }}</h4>
      </div>
      <div class="modal-body">
        {!! $fasilitas->deskripsi !!}
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- END Modal -->
  </section>