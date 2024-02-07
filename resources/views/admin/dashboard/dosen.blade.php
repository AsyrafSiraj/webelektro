<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				
				<li>
					<a class="{{ ($segmen = 'dosen')? 'active' : '' }}" href="/dashboard/dosen">Dosen</a>
				</li>

			</ul>
		</div>
	</div>
	
	@if(session()->has('success'))
	<div class="alert alert-success" role="alert">
		{{ session('success') }}
	</div>
	@endif
	@if(session()->has('failed'))
	<div class="alert alert-danger" role="alert">
		{{ session('failed') }}
	</div>
	@endif

	<div class="table-data " data-aos="fade-up" data-aos-delay="100">
		<div class="order">
			
			<div class="head">
				<h3 class="me-auto">{{ $title }}</h3>
				<form action="/dashboard/dosen">
					<div class="form-input ">
	
					  <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
	
					  <button class="search-btn" type="submit"><i class="bx bx-search">  </i></button>
					</div>
				  </form>
				
			</div>
			<a href="/dashboard/dosen/create" class="btn btn-primary col-2 mb-3">create</a>
			<table class="table table-hover table-sm table-responsive text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Image</th>
						<th>Name</th>
						<th>Nidn</th>
						<th>Jabatan</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($data as $dosen)
                    
					<tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $dosen->image) }}"></td>
						<td>{{ $dosen->nama_dosen }}</td>
						<td>{{ $dosen->nidn }}</td>
						<td>{{ $dosen->jabatan }}</td>
						<td style="max-width: 300px;">{{ $dosen->email }}</td>
						<td>
                            <a href="/dashboard/dosen/{{ $dosen->id }}" class="badge bg-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/dosen/{{ $dosen->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
							<form action="/dashboard/dosen/{{ $dosen->id }}" method="post" class="d-inline">
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