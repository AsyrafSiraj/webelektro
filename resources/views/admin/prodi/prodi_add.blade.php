<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a href="/dashboard">Dashboard</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="{{ ($segmen == 'prodi')? 'active' : '' }}" href="/dashboard/prodi">Prodi</a>
				</li>

			</ul>
		</div>
	</div>


	<div class="table-data " >
		<div class="order">	
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
			</div>

			<form method="post" action="/dashboard/prodi" class="col-lg-11 col-sm-11 col-7">
				@csrf
			{{-- PRODI --}}
				<div class="mb-3">
				  <label for="title" class="form-label">Title Prodi</label>
				  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" autocomplete="off" required>
				  @error('title')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>
				<div class="mb-3">
				  <label for="slug" class="form-label">Slug</label>
				  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" autocomplete="off" required>
				  @error('slug')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				  @enderror
				</div>
			{{-- END Prodi --}}
			{{-- Hero --}}
				<h4 class="mt-5">Bagian Hero</h4><hr>
				<div class=" mb-3 ">
					<span class="form-check">
						<input class="form-check-input" type="checkbox" id="checkbox1">
						<label class="form-check-label" for="check-box">Optional Hero 1</label>
					</span>
						<span class="form-check ">
							<input class="form-check-input" type="checkbox" id="checkbox2">
						<label class="form-check-label" for="check-box">Optional Hero 2</label>
					</span>
				</div>
				  
				<div class="mb-3">
					<label for="title_hero" class="form-label">Title Hero</label>
					<input type="text" class="form-control @error('title_hero') is-invalid @enderror" id="title_hero" name="title_hero[]" value="{{ old('title_hero[]') }}" autocomplete="off" required>
					@error('title_hero[]')
					  <div class="invalid-feedback">
						  {{ $message }}
					  </div>
					@enderror
				  </div>
				<div class="mb-3">
					<label for="deskripsi_hero" class="form-label">Deskripsi</label>
					@error('deskripsi_hero[0]')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="deskripsi_hero[0]" type="hidden" name="deskripsi_hero[0]" value="{{ old('deskripsi_hero[0]') }}" required>
						<trix-editor input="deskripsi_hero[0]"></trix-editor>
				</div>
				{{-- Optional Hero --}}
				  <span id="OptionalHero1" style="display: none">
				<div class="mb-3">
					<label for="title_hero" class="form-label">Title Hero 1 </label>
					<input type="hidden" class="form-control @error('title_hero') is-invalid @enderror" id="title_hero1" name="title_hero[]" value="{{ old('title_hero[]') }}" autocomplete="off" >
					@error('title_hero[]')
					  <div class="invalid-feedback">
						  {{ $message }}
					  </div>
					@enderror
				  </div>
				<div class="mb-3">
					<label for="deskripsi_hero" class="form-label">Deskripsi 1 </label>
					@error('deskripsi_hero[1]')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="deskripsi_hero[1]" type="hidden" name="deskripsi_hero[1]" value="{{ old('deskripsi_hero[1]') }}" >
						<trix-editor input="deskripsi_hero[1]"></trix-editor>
				</div>
				</span>

				  <span id="OptionalHero2" style="display: none">
				<div class="mb-3">
					<label for="title_hero" class="form-label">Title Hero 2 </label>
					<input type="hidden" class="form-control @error('title_hero') is-invalid @enderror" id="title_hero2" name="title_hero[]" value="{{ old('title_hero[]') }}" autocomplete="off" >
					@error('title_hero[]')
					  <div class="invalid-feedback">
						  {{ $message }}
					  </div>
					@enderror
				  </div>
				<div class="mb-3">
					<label for="deskripsi_hero" class="form-label">Deskripsi 2 </label>
					@error('deskripsi_hero[2]')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="deskripsi_hero[2]" type="hidden" name="deskripsi_hero[2]" value="{{ old('deskripsi_hero[2]') }}" >
						<trix-editor input="deskripsi_hero[2]"></trix-editor>
				</div>
			</span>
				  {{-- End Optional Hero --}}
			{{-- End Hero --}}
			{{-- BAGIAN ABOUT --}}
			<h4 class="mt-5">Bagian About</h4><hr>
				  <div class="mb-3">
					<label for="title_about" class="form-label">Title About</label>
					<input type="text" class="form-control @error('title_about') is-invalid @enderror" id="title_about" name="title_about" value="{{ old('title_about') }}" autocomplete="off" required>
					@error('title_about')
					  <div class="invalid-feedback">
						  {{ $message }}
					  </div>
					@enderror
				  </div>
				  <div class="mb-3">
					<label for="deskripsi_about" class="form-label">Deskripsi About </label>
					@error('deskripsi_about')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="deskripsi_about" type="hidden" name="deskripsi_about" value="{{ old('deskripsi_about') }}" >
						<trix-editor input="deskripsi_about"></trix-editor>
				</div>
			{{-- END BAGIAN ABOUT --}}
			{{-- BAGIAN V.S.T.S --}}
				<h4 class="mt-5">Bagian V.S.T.S</h4><hr>
				<div class="mb-3">
					<label for="visi" class="form-label">Deskripsi Visi </label>
					@error('visi')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="visi" type="hidden" name="visi" value="{{ old('visi') }}" >
						<trix-editor input="visi"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="misi" class="form-label">Deskripsi Misi </label>
					@error('misi')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="misi" type="hidden" name="misi" value="{{ old('misi') }}" >
						<trix-editor input="misi"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="tujuan" class="form-label">Deskripsi Tujuan </label>
					@error('tujuan')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="tujuan" type="hidden" name="tujuan" value="{{ old('tujuan') }}" >
						<trix-editor input="tujuan"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="sasaran" class="form-label">Deskripsi Sasaran Strategis </label>
					@error('sasaran')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="sasaran" type="hidden" name="sasaran" value="{{ old('sasaran') }}" >
						<trix-editor input="sasaran"></trix-editor>
				</div>
			{{-- END BAGIAN V.S.T.S --}}
			{{-- BAGIAN CAPAIAN --}}
				<h4 class="mt-5">Bagian Capaian Pembelajaran</h4><hr>
				<div class="mb-3">
					<label for="sikap" class="form-label">Deskripsi Sikap </label>
					@error('sikap')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="sikap" type="hidden" name="sikap" value="{{ old('sikap') }}" >
						<trix-editor input="sikap"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="umum" class="form-label">Deskripsi Keterampilan Umum </label>
					@error('umum')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="umum" type="hidden" name="umum" value="{{ old('umum') }}" >
						<trix-editor input="umum"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="khusus" class="form-label">Deskripsi Keterampilan Khusus </label>
					@error('khusus')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="khusus" type="hidden" name="khusus" value="{{ old('khusus') }}" >
						<trix-editor input="khusus"></trix-editor>
				</div>
				<div class="mb-3">
					<label for="penguasaan" class="form-label">Deskripsi Penguasaan Pengetahuan </label>
					@error('penguasaan')
					  <p class="text-danger">{{ $message }}</p>
					@enderror
					<input id="penguasaan" type="hidden" name="penguasaan" value="{{ old('penguasaan') }}" >
						<trix-editor input="penguasaan"></trix-editor>
				</div> 
			{{-- END BAGIAN CAPAIAN --}}
			<h4 class="mt-5">Bagian Kurikulum</h4><hr>
			{{-- BAGIAN KURIKULUM --}}
			<div class="mb-3">
				<label for="deskripsi_kurikulum" class="form-label">Deskripsi Kurikulum </label>
				@error('deskripsi_kurikulum')
				  <p class="text-danger">{{ $message }}</p>
				@enderror
				<input id="deskripsi_kurikulum" type="hidden" name="deskripsi_kurikulum" value="{{ old('deskripsi_kurikulum') }}" >
					<trix-editor input="deskripsi_kurikulum"></trix-editor>
				<p>Note : Untuk Bagian Semester Sendiri</p>
			</div>
				
			{{-- END KURIKULUM --}}
			{{-- LULUSAN --}}
			<h4 class="mt-5">Bagian Lulusan</h4><hr>
			<div class="mb-3 col-3">
				<label for="numInput">Jumlah Lulusan:</label>
				<input type="number" class="form-control" id="numInput">
			  </div>
			  <a href="#" class="btn btn-secondary mb-3" onclick="createInputs()">Buat Input</a>
			  
			  <div id="inputContainer"></div>
			</div>
			{{-- END LULUSAN --}}


				{{-- <div class="mb-3">
				  <label for="category" class="form-label">Category</label>
				  <select class="form-select" name="category_id" id="category">
					<option selected>Select menu</option>
					@foreach ($categories as $category)
						@if (old('category_id') == $category->id)
							<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
						@else
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endif
					@endforeach
				  </select>
				</div> --}}
				{{-- <div class="mb-3">
				  <label for="body" class="form-label">Body</label>
				  @error('body')
					<p class="text-danger">{{ $message }}</p>
				  @enderror
				  <input id="body" type="hidden" name="body" value="{{ old('body') }}">
  					<trix-editor input="body"></trix-editor>
				</div> --}}

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
		fetch('/dashboard/SlugProdi?title=' + title.value)
		.then(response => response.json())
		.then(data => slug.value = data.slug)
	});
	// {{-- End Script Slug --}}
	//{{-- Ignore Trix File --}}
	document.addEventListener('trix-file-accept', function(e){
		e.preventDefault();
	})
	//{{-- End Ignore Trix File --}}
	// {{-- Checkbox Hero --}}
	var checkbox1 = document.getElementById('checkbox1');
  	var OptionalHero1 = document.getElementById('OptionalHero1');
	var checkbox2 = document.getElementById('checkbox2');
  	var OptionalHero2 = document.getElementById('OptionalHero2');
	var Input1 = document.getElementById('title_hero1');
	var Input2 = document.getElementById('title_hero2');


	checkbox1.addEventListener('change', function() {
		if (checkbox1.checked) {
			Input1.type = 'text'
			OptionalHero1.style.display = 'block';
		} else {
			Input1.type = 'hidden'
			OptionalHero1.style.display = 'none';
		}
	});
	checkbox2.addEventListener('change', function() {
		if (checkbox2.checked) {
			Input2.type = 'text'
			OptionalHero2.style.display = 'block';
		} else {
			Input2.type = 'hidden'
			OptionalHero2.style.display = 'none';
		}
	});
	// {{-- End Checkbox Hero --}}
	
	 // {{-- Number Input Semester --}}
	 function createInputs() {
      var num = parseInt(document.getElementById("numInput").value);
      var container = document.getElementById("inputContainer");
      container.innerHTML = ""; // Menghapus input sebelumnya (jika ada)

      for (var i = 0; i < num; i++) {
        var divFormGroup = document.createElement("div");
        divFormGroup.className = "mb-3";
        container.appendChild(divFormGroup);

        var label = document.createElement("label");
        label.className = "form-label";
        label.htmlFor = "title_lulusan[]";
        label.textContent = "Title Lulusan";
        divFormGroup.appendChild(label);
		// Title Semester
        var input = document.createElement("input");
        input.type = "text";
        input.className = "form-control mb-3";
        input.className += " @error('title_lulusan[]') is-invalid @enderror";
        input.id = "title_lulusan";
        input.name = "title_lulusan[]";
        input.value = "{{ old('title_lulusan[]') }}";
        input.autocomplete = "off";
        input.required = true;
        divFormGroup.appendChild(input);
		// Trix Editor 
		var label = document.createElement("label");
        label.className = "form-label";
        label.htmlFor = "deskripsi" + i;
        label.textContent = "Deskripsi Lulusan";
        divFormGroup.appendChild(label);

		var inputHidden = document.createElement("input");
        inputHidden.type = "hidden";
        inputHidden.id = "deskripsi_lulusan["+ i +"]";
        inputHidden.name = "deskripsi_lulusan["+ i +"]";
        inputHidden.value = "{{ old('deskripsi_lulusan["+ i +"]') }}";
        divFormGroup.appendChild(inputHidden);

        var trixEditor = document.createElement("trix-editor");
        trixEditor.input = "deskripsi_lulusan["+ i +"]";
        divFormGroup.appendChild(trixEditor);
      }
    }
	// {{-- End Number Input Semester --}}
</script>
</section>
<!-- CONTENT -->