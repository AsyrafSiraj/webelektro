<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="{{ ($segmen = 'prodi')? 'active' : '' }}" href="/dashboard/prodi">Prodi</a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="{{ ($segmen == 'category')? 'active' : '' }}" href="/dashboard/categories">Category</a>
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
				<form action="/dashboard/prodi">
					<div class="form-input ">
	
					  <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
	
					  <button class="search-btn" type="submit"><i class="bx bx-search">  </i></button>
					</div>
				  </form>

			</div>
			
			<table class="table table-hover table-sm table-responsive text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($data as $prodi)
                    
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td style="max-width: 300px;">{{ $prodi->title }}</td>
						<td>
                            <a href="/prodi/{{ $prodi->slug }}" class="badge bg-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/prodi/{{ $prodi->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
							<form action="/dashboard/prodi/{{ $prodi->slug }}" method="post" class="d-inline">
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
				<a href="/dashboard/prodi/create" class="btn btn-primary pt-2 col-2">create</a>
				{{ $data->links() }}
				
			</div>
		</div>
	</div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->