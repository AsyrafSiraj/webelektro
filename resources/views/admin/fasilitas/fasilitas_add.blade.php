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

  <div class="table-data">
    <div class="order">
      <div class="head">
        <h3 class="me-auto">{{ $title }}</h3>
      </div>

      <form method="post" action="/dashboard/fasilitas" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name Fasilitas</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="off" required>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Fasilitas Image</label>
          <img class="img-preview img-fluid mb-3 col-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        {{-- <div class="mb-3">
          <div class="col-3">
            <label for="numInput" class="mb-2">Jumlah Sub Images:</label>
            <input type="number" class="form-control mb-3" id="numInput">
          </div>
          <a href="#" class="btn btn-secondary mb-3" onclick="createInputs()">Buat Input</a>
          <div id="inputContainer"></div>
        </div> --}}

        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          @error('deskripsi')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
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
  document.addEventListener('trix-file-accept', function (e) {
    e.preventDefault();
  });
  //{{-- End Ignore Trix File --}}

  //{{-- Preview Image --}}
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
      imgPreview.src = oFREvent.target.result;
    };
  }
  //{{-- End Preview Image --}}

//   //{{-- Preview SubImage --}}
//   function previewSubImage() {
//     var num = parseInt(document.getElementById("numInput").value);
//     var imgPreviewList = document.querySelectorAll('.img-preview');
    
//     for (var i = 0; i < num; i++) {
//     var input = document.getElementById(`sub_images[${i}]`);
//       var imgPreview = imgPreviewList[i];
//       imgPreview.style.display = 'block';

//       var oFReader = new FileReader();
//       oFReader.readAsDataURL(input.files[i]);

//       oFReader.onload = function (oFREvent) {
//         imgPreview.src = oFREvent.target.result;
//       };
//     }
//   }
//   //{{-- End Preview SubImage --}}

//   // {{-- Number Input Semester --}}
//   function createInputs() {
//     var num = parseInt(document.getElementById("numInput").value);
//     var container = document.getElementById("inputContainer");
//     container.innerHTML = ""; // Menghapus input sebelumnya (jika ada)

//     for (var i = 0; i < num; i++) {
//       var divFormGroup = document.createElement("div");
//       divFormGroup.className = "mb-3";
//       container.appendChild(divFormGroup);

//       var label = document.createElement("label");
//       label.className = "form-label";
//       label.htmlFor = "sub_images[]";
//       label.textContent = "Sub Images";
//       divFormGroup.appendChild(label);

//       var img = document.createElement("img");
//       img.setAttribute("class", "img-preview img-fluid mb-3 col-5");
//       divFormGroup.appendChild(img);

//       var input = document.createElement("input");
//       input.type = "file";
//       input.className = "form-control mb-3";
//       input.className += " @error('sub_images[]') is-invalid @enderror";
//       input.onchange = previewSubImage;
//       input.id = `sub_images_${i}`;
//       input.name = `sub_images[${i}]`;
//       input.value = "{{ old('sub_images[]') }}";
//       input.required = true;
//       divFormGroup.appendChild(input);
//     }
//   }
//   // {{-- End Number Input Semester --}}
</script>
