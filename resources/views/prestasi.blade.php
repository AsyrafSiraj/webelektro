
<main id="main" >
  <section class="light courses bg-white" id="popular-courses">
    <div class="container py-2" >

      <div class=" text-center text-dark text-bold mb-5" data-aos="fade" id="pageHeaderTitle">
        {{ $title }}
        <h5 class=" mt-2">Jurusan Teknik Elektro memiiliki mahasiswa berprestasi diantaranya</h5>
      </div>

      @foreach ($data_prestasi as $data)
        @if ($data->id % 2 != 0)
          <article class="postcard light blue" data-aos="fade-left">
            <a class="postcard__img_link" href="#">
              <img class="postcard__img" src="{{ url('storage/' . $data->image) }}" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark ">
              <h1 class="postcard__title blue"><a href="#">{{ $data->name }}</a></h1>
              <div class="postcard__subtitle small mb-2">
                <time class="text-muted">
                  <i class="bi bi-calendar me-2"></i>{{ $data->created_at->diffForHumans() }}
                </time>
              </div>
              <div class="postcard__bar"></div>
              <div class="postcard__preview-txt" style="font-size: 14px">{!! $data->deskripsi !!}</div>
            </div>
          </article>
        @else
          <article class="postcard light red" data-aos="fade-right">
            <a class="postcard__img_link" href="#">
              <img class="postcard__img" src="{{ url('storage/' . $data->image) }}" alt="Image Title" />	
            </a>
            <div class="postcard__text t-dark">
              <h1 class="postcard__title red"><a href="#">{{ $data->name }}</a></h1>
              <div class="postcard__subtitle small mb-2">
                <time class="text-muted">
                  <i class="bi bi-calendar me-2"></i>{{ $data->created_at->diffForHumans() }}
                </time>
              </div>
              <div class="postcard__bar"></div>
              <div class="postcard__preview-txt" style="font-size: 14px">{!! $data->deskripsi !!}</div>
            </div>
          </article>
        @endif 
      @endforeach

    </div>
  </section>
</main>
