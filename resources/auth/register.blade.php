<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<img src="assets/img/logo-blue-small._CB485919770_.svg" alt="logo" id="brand-identity" class="mx-auto d-block m-5"><!--Brand Identity-->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Create a New Account</h4>
							<form method="POST" class="my-login-validation" action="{{route('register')}}">
								@csrf

								
								<div class="form-group">
									<label for="name">{{__('Name')}}</label>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" required autofocus><!--Input name-->
									@error('name')
										<span class="invalid-feedback">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="form-group">
									<label for="email">{{ __('Email') }}</label>
									<input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"required><!--Input Email-->
									@error('email')
										<span class="invalid-feedback">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="form-group">
									<label for="password">{{ __('Password') }}</label>
									<input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror"  required data-eye> <!--Input Password-->
									@error('password')
										<span class="invalid-feedback">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>


								
								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block font-weight-bold">
										Create Your Account
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{url('login')}}">Sign In</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2020 &mdash; <a href="https://bytewise.ml">BYTEWISE</a> 
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>