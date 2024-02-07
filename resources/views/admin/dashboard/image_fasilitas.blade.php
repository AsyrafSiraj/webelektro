\
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
	
	@if(session()->has('success'))
	<div class="alert alert-success" role="alert">
		{{ session('success') }}
	</div>
	@endif

	<div class="table-data " data-aos="fade-up" data-aos-delay="100">
		<div class="order">
			
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
				<form action="/dashboard/{{ $sidemenu }}">
					<div class="form-input ">
	
					  <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
	
					  <button class="search-btn" type="submit"><i class="bx bx-search">  </i></button>
					</div>
				  </form>

			</div>
            <a href="/dashboard/image_fasilitas/create" class="btn btn-primary mb-3 mt-0 col-2">create</a>
			<table class="table table-hover table-sm table-responsive text-center align-middle">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Fasilitas</th>
						<th>image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($data as $images)
                    
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td style="max-width: 300px;">{{ $images->fasilitas['name'] }}</td>
						<td><img src="{{ asset('storage/' . $images->image) }}"></td>
						<td>
                            <a href="/dashboard/image_fasilitas/{{ $images->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
							<form action="/dashboard/image_fasilitas/{{ $images->id }}" method="post" class="d-inline">
								@method('delete')
								@csrf
								<button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">
									<i class="bi bi-trash"></i>
								</button>
							</form>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
			<div class="d-flex justify-content-between">
				
				{{ $data->links() }}
				
			</div>
		</div>
	</div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->