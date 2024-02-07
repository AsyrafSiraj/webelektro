<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a class="{{ ($segmen == 'dosen')? 'active' : '' }}" href="/dashboard/dosen">Dosen</a>
				</li>
			</ul>
		</div>
	</div>


	<div class="table-data " >
		<div class="order">	
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
			</div>

			<form method="post" action="/dashboard/dosen" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
				@csrf
				<div class="mb-3">
				  <label for="nama_dosen" class="form-label">Name</label>
				  <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" id="nama_dosen" name="nama_dosen" value="{{ old('nama_dosen') }}" autocomplete="off" required>
				  @error('nama_dosen')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>

				<div class="mb-3">
					<label for="image" class="form-label">Profile Image</label>
					<img class="img-preview img-fluid mb-3 col-3 rounded-circle">
					<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
					@error('image')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3">
				  <label for="jabatan" class="form-label">Jabatan</label>
				  <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" autocomplete="off" required>
				  @error('jabatan')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>

				<div class="mb-3">
				  <label for="nidn" class="form-label">Nidn</label>
				  <input type="number" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn') }}" autocomplete="off" required>
				  @error('nidn')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>

                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                    <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan') }}" autocomplete="off" required>
                    @error('pendidikan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="program_studi" class="form-label"> Program Studi </label>
                    <input type="text" class="form-control @error('program_studi') is-invalid @enderror" id="program_studi" name="program_studi" value="{{ old('program_studi') }}" autocomplete="off" required>
                    @error('program_studi')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="off" required>
                    @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Bidang Spesialis</label>
                    <input type="text" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis" name="spesialis" value="{{ old('spesialis') }}" placeholder="Contoh : Telecommunication, Informatics" autocomplete="off" required>
                    @error('spesialis')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>

				<div class="mb-3">
				  <label for="deskripsi" class="form-label">Riwayat Terakhir</label>
				  @error('deskripsi')
					<p class="text-danger">{{ $message }}</p>
				  @enderror
				  <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
  					<trix-editor placeholder=" Contoh :
                    Sarjana (S1) Institut Teknologi Bandung : Teknik Informatika
                    Magister (S2) Universitas Indonesia :Ilmu Komputer
                    " input="deskripsi"></trix-editor>
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