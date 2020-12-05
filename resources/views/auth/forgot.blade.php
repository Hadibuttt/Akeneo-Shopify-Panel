<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">s
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<img src="assets/img/logo-blue-small._CB485919770_.svg" alt="logo" id="brand-identity" class="mx-auto d-block m-5"><!--Brand Identity-->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							
							
							@if (session('status'))
								
								<div class="alert alert-success" role="alert">
									{{session('status')}}
								</div>
												
							@endif	
							
							
							<form method="POST" class="my-login-validation" action="{{route('password.request') }}">

								@csrf
								<div class="form-group">
									<label for="email">{{__('E-Mail Address')}} </label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus><!--Email Input-->									
									@error('email')
										<span class="invalid-feedback">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									
									<div class="form-text text-muted">
										By clicking "Reset Password" we will send a password reset link
									</div>
								</div>
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; BYTEWISE
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>