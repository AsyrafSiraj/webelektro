<!DOCTYPE html>
<html lang="en">

@include('_partial.header')

<body>
	<div class="container-fluid d-flex justify-content-center align-items-center center-vertical-horizontal">

		<!-- Inner row, half the width and height, centered, blue border -->
		<div class="row d-flex align-items-center" style=" width:30vw; height:50vh;">
			
			@if(session()->has('loginError'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('loginError') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif


			<div class="card">
				<div class="card-body">

					<div class="text-center">
						<div class="pb-3">
							<img src="{{ asset('img/polibatam.png') }}" width="100" height="100">
						</div>

						<div class="pb-2 ">
							<h3 class="fw-bold text-secondary">LOGIN TO WEB ELEKTRO</h3>
						</div>
					</div>

					<form method="POST" action="/login">
						@csrf
						<div class="form-group pb-3">
							<label class="pb-2">Email <span class="text-danger">*</span></label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Email" autocomplete="off" value="{{ old ('email') }}" required>
							
							@error('email')
   							 <div class="text-danger">{{ $message }}</div>
							@enderror
							
						</div>

						<div class="form-group pb-3">
							<label class="pb-2">Password <span class="text-danger">*</span></label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
						</div>

						<div class="py-2">
							<div class="pb-3">
								<button class="btn btn-primary bg-primary btn-block w-100" type="submit">
									<strong>LOGIN</strong>
								</button>
							</div>
						</div>
					</form>
					<a href="{{ url('/') }}" class="btn btn-secondary btn-block w-100">GO BACK</a>
				</div>
			</div>

		</div> <!-- Inner row -->
	</div> <!-- Outer container -->



<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>