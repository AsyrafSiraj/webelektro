<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a class="{{ ($segmen == 'pengumuman')? 'active' : '' }}" href="/dashboard/pengumuman">Pengumuman</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="{{ ($segmen == 'categories')? 'active' : '' }}" href="/dashboard/categories">Category</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="table-data " >
		<div class="order">	
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
			</div>

			<form method="post" action="/dashboard/pengumuman/{{ $data->slug }}" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
                @method('put')
				@csrf
				<div class="mb-3">
				  <label for="title" class="form-label">Title</label>
				  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $data->title) }}" autocomplete="off" required>
				  @error('title')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>
				<div class="mb-3">
				  <label for="slug" class="form-label">Slug</label>
				  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $data->slug) }}" autocomplete="off" required>
				  @error('slug')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>
				<div class="mb-3">
				  <label for="category" class="form-label">Category</label>
				  <select class="form-select" name="category_id" id="category">
					<option selected>Select menu</option>
					@foreach ($categories as $category)
					    @if (old('category_id', $data->category_id) == $category->id)
					        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
					    @else
					        <option value="{{ $category->id }}">{{ $category->name }}</option>
					    @endif
					@endforeach
				  </select>
				</div>

				<div class="mb-3">
					<label for="image" class="form-label">Pengumuman Image</label>
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

				<div class="mb-3">
				  <label for="body" class="form-label">Body</label>
				  @error('body')
					<p class="text-danger">{{ $message }}</p>
				  @enderror
				  <input id="body" type="hidden" name="body" value="{{ old('body', $data->body) }}">
  					<trix-editor input="body"></trix-editor>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</main>
<!-- MAIN -->

<script>
	//{{-- Script Slug --}}
	const title = document.querySelector('#title');
	const slug = document.querySelector('#slug');

	title.addEventListener('change', function(){
		fetch('/dashboard/SlugPengumuman?title=' + title.value)
		.then(response => response.json())
		.then(data => slug.value = data.slug)
	});
	// {{-- End Script Slug --}}
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