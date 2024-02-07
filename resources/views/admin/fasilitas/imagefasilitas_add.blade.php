@php
    $i = count($data)
@endphp
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
  
        <form method="post" action="/dashboard/image_fasilitas" enctype="multipart/form-data" class="col-lg-11 col-sm-11 col-7">
          @csrf
          <div class="mb-3">
            <label for="fasilitas" class="form-label">Fasilitas</label>
            <select class="form-select" name="fasilitas_id" id="fasilitas">
            <option selected>Select menu</option>
            @foreach ($data as $image)
              @if (old('fasilitas_id') == $image->id)
                <option value="{{ $image->id }}" selected>{{ $image->name }}</option>
              @else
                <option value="{{ $image->id }}">{{ $image->name }}</option>
              @endif
            @endforeach
            </select>
          </div>
  
          <div class="mb-3">
            <label for="image" class="form-label">Fasilitas Image</label>
            <img class="img-preview img-fluid mb-3 col-5">
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
  