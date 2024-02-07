
<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a class="{{ ($segmen == 'fasilitas')? 'active' : '' }}" href="/dashboard/fasilitas">Fasilitas</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="{{ ($segmen == 'image_fasilitas')? 'active' : '' }}" href="/dashboard/image_fasilitas">Fasilitas Image</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data " >
		<div class="order">	
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
			</div>

			<form method="post" action="/dashboard/image_fasilitas/{{ $data->id }}" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
                @method('put')
				@csrf
				<div class="mb-3">
                    <label for="fasilitas" class="form-label">Fasilitas</label>
                    <select class="form-select" name="fasilitas_id" id="fasilitas">
                    <option selected>Select menu</option>
                    @foreach ($data2 as $image)
                      @if (old('fasilitas_id', $data->fasilitas_id) == $image->id)
                        <option value="{{ $image->id }}" selected>{{ $image->name }}</option>
                      @else
                        <option value="{{ $image->id }}">{{ $image->name }}</option>
                      @endif
                    @endforeach
                    </select>
                  </div>

				<div class="mb-3">
					<label for="image" class="form-label">Fasilitas Image</label>
					<input type="hidden" name="oldImage" value="{{ $data->image }}">
					@if ($data->image)
						<img src="{{ asset('storage/' . $data->image) }}" class="img-preview img-fluid mb-3 col-5 d-block">
					@else						
						<img class="img-preview img-fluid mb-3 col-5 ">
					@endif
					<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
					@error('image')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
				</div>



				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</main>
<!-- MAIN -->

<script>
	//{{-- Ignore Trix File --}}
	document.addEventListener('trix-file-accept', function(e){
		e.preventDefault();
	})
	//{{-- End Ignore Trix File --}}

	//{{-- Preview Image --}}
	function previewImage(){
	const image = document.querySelector('#image');
	const imgPreview = document.querySelector('.img-preview');

	imgPreview.style.display = 'block';

	const oFReader = new FileReader();
	oFReader.readAsDataURL(image.files[0]);

	oFReader.onload = function(oFREvent){
		imgPreview.src = oFREvent.target.result;
	}
	}
	//{{-- End Preview Image --}}
</script>
</section>
<!-- CONTENT -->