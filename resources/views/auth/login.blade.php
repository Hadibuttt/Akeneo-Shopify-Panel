<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>My Login Page</title>
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
							<h4 class="card-title">Sign In</h4>
						<form method="POST" action="{{ route('login') }}" class="my-login-validation">
								
								@csrf

								<div class="form-group">
									<label for="email">E-Mail Address</label>
								<input id="email " type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="" required autofocus ><!--Email-->
									@error('email')
									<span class="invalid-feedback">
										{{ $message }}
									</span>	
									@enderror
									
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="{{url('forgot')}}" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required data-eye>
								    @error('password')
									<span class="invalid-feedback">
										{{ $message }}
									</span>	
									@enderror
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
															</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>


</body>
</html>
