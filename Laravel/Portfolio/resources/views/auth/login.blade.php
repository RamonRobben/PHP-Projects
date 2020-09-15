<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ramon Robben">
	<meta name="description" content="An interface for the HPC_Cluster">

	<link async="" rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
</head>

<body class="text-center">

	<!-- Login Screen HTML -->
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="POST" action="{{ route('login') }}">
				@csrf
				<img class="logo" src="/img/bitsec_logo_white_transparent.png" alt="BitSec Logo">
				<div id="errormsg"></div>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input type="text" name="email" id="email" placeholder="email" required="">
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input type="password" name="password" id="password" placeholder="password" required="">
				<button id="submit">login</button>
				<a href="{{ route('password.request') }}" class="forgot" data-toggle="modal" data-target="#helpModal">Forgot Password?</a>
			</form>
		</div>
	</div>

	{{-- <script src="js/jquery.min.js"></script> --}}
	{{-- <script src="js/popper.min.js"></script> --}}
	<script async="" src="js/bootstrap.min.js"></script>

</body>
</html>