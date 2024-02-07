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

			<form method="post" action="/dashboard/categories/{{ $data->slug }}" class="col-lg-11 col-sm-11 col-7">
                @method('put')
				@csrf
				<div class="mb-3">
				  <label for="name" class="form-label">Name Category</label>
				  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $data->name) }}" autocomplete="off" required>
				  @error('name')
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

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</main>
<!-- MAIN -->

<script>
	//{{-- Script Slug --}}
	const name = document.querySelector('#name');
	const slug = document.querySelector('#slug');

	name.addEventListener('change', function(){
		fetch('/dashboard/SlugCategories?name=' + name.value)
		.then(response => response.json())
		.then(data => slug.value = data.slug)
	});
	// {{-- End Script Slug --}}
	//{{-- Ignore Trix File --}}
	document.addEventListener('trix-file-accept', function(e){
		e.preventDefault();
	})
	//{{-- End Ignore Trix File --}}
</script>
</section>
<!-- CONTENT -->