<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a class="{{ ($segmen == 'prestasi')? 'active' : '' }}" href="/dashboard/prestasi">Prestasi</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data " >
		<div class="order">	
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
			</div>

			<form method="post" action="/dashboard/prestasi/{{ $data->id }}" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
                @method('put')
				@csrf
				<div class="mb-3">
				  <label for="name" class="form-label">Name Mahasiswa | Judul</label>
				  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $data->name) }}" autocomplete="off" required>
				  @error('name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>
				<div class="mb-3">
					<label for="image" class="form-label">Prestasi Image</label>
					<input type="hidden" name="oldImage" value="{{ $data->image }}">
					@if ($data->image)
						<img src="{{ asset('storage/' . $data->image) }}" class="img-preview img-fluid mb-3 col-4 d-block">
					@else						
						<img class="img-preview img-fluid mb-3 col-5 ">
					@endif
					<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
					@error('image')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    @error('deskripsi')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $data->deskripsi) }}">
                        <trix-editor input="deskripsi"></trix-editor>
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