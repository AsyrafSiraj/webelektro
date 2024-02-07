<!-- MAIN -->

<main>
	<div class="head-title">
		<div class="left">
			<h1>{{ $title }}</h1>
			<ul class="breadcrumb">
				<li>
					<a class="{{ ($segmen = 'pengumuman')? 'active' : '' }}" href="/dashboard/pengumuman">Pengumuman</a>
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

	<div class="table-data " data-aos="fade-up" data-aos-delay="200">
		<div class="order">
			
			<div class="head">
				<h3 class="me-auto mt-2">{{ $title }}</h3>
				<form action="/dashboard/pengumuman">
					<div class="form-input ">
	
					  <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
	
					  <button class="search-btn" type="submit"><i class="bx bx-search">  </i></button>
					</div>
				  </form>

			</div>
			<a href="/dashboard/pengumuman/create" class="btn btn-primary col-2 mb-2">create</a>
			<table class="table table-hover table-sm table-responsive text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Title</th>
						<th>Category</th>
						<th>image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($data as $pengumuman)
                    
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td style="max-width: 300px;">{{ $pengumuman->title }}</td>
						<td>{{ $pengumuman->Category->name }}</td>
						<td><img src="{{ asset('storage/' . $pengumuman->image) }}"></td>
						<td>
                            <a href="/dashboard/pengumuman/{{ $pengumuman->slug }}" class="badge bg-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/pengumuman/{{ $pengumuman->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
							<form action="/dashboard/pengumuman/{{ $pengumuman->slug }}" method="post" class="d-inline">
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
				{{ $data->links() }}
		</div>
	</div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->