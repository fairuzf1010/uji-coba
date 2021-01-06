<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
	<title>Register - EVOLUTION ITS</title>
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Fix chrome language detection -->

	<meta http-equiv="Content-Language" content="en">

	<!-- Favicons -->
	<link rel="icon" href="/img/brand/favicon.png" type="image/png">

	<!-- Styles -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body class="">
	<div class="sites site--full" style="background: linear-gradient(-135deg, #040429, #040429, #040429, #040429, #040429, #040429, #D3247B);">
		<header class="site-banner banner--shape banner banner--fullpage">
			<div class="container">
				<div class="banner__brand">
					<a href="{{url('/')}}" style="z-index: 99;">
						<img src="img/brand/EVOLUTION.png" alt="">
					</a>
				</div>

				<div class="banner__content  animation-element " data-animation="" data-animation-options="type:fadeInTop;" style="transform: translateY(0px); opacity: 1;">
					<div class="m-w-xs m-h-a">
						<div class="box box--auth" style="background-color: #181850;">
							<div class="box__content">
								<h1 class="box__title h2" style="color: white;">Create Account</h1>

								@if ($notification = Session::get('failed'))
								<div class="alert alert-success alert-block">
									<strong>{{ $notification }}</strong>
								</div>
								@endif

								@if ($notification = Session::get('success'))
								<div class="alert alert-success alert-block">
									<strong>{{ $notification }}</strong>
								</div>
								@endif

								<form action="{{ route('user.register') }}" method="post" class="form" id="register-form" data-ps-strength="">
									@csrf
									<div class="form-group input-group" style="background-color: #595982;">
										<span class="input-group__icon"><svg class="icon-ui icon-ui--24" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24">
												<path class="stroke" d="M2,4h20v16H2V4z"></path>
												<path class="stroke" d="M2,8l10,5l10-5"></path>
											</svg>
										</span>
										<input name="email" value="" class="form-control" type="email" placeholder="Email Address" required="">
									</div>
									<div class="form-group input-group input-group--password-strength" style="background-color: #595982;">
										<span class="input-group__icon m-l-2x"><svg class="icon-ui icon-ui--24" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24">
												<path class="fill" d="M19,8V7c0-3.9-3.1-7-7-7S5,3.1,5,7v1h2V7c0-2.8,2.2-5,5-5s5,2.2,5,5v1H19"></path>
												<path class="stroke" d="M3,9h18v14H3V9z"></path>
												<circle class="fill" cx="8" cy="16" r="1"></circle>
												<circle class="fill" cx="12" cy="16" r="1"></circle>
												<circle class="fill" cx="16" cy="16" r="1"></circle>
											</svg>
										</span>
										<input name="password" class="form-control" type="password" placeholder="Password" required="" data-ps-strength-input="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
										<div class="input-group__password-addon">
											<div class="password-strength" data-ps-strength-progress="">
												<span class="password-strength__value"></span>
											</div>
										</div>
									</div>
									<hr class="hr15">
									<div class="form__actions">
										<button id="register_submit_button" type="submit" class="btn btn--primary btn--block" style="background-color: #D3247B; color: white"><span class="btn__text">Create Account</span><span class="btn-hover-effect"></span></button>
									</div>
								</form>
							</div>
						</div>
						<br>
						<div class="p-3 text-center m-b-0">Already a member?
							<a style="font-weight:bold; color: #D3247B" href="{{url('/login')}}">
								Login
							</a>
						</div>
					</div>

				</div>

			</div>

		</header>
	</div>
	<script src="css/jquery-3.5.1.min.js"></script>
	<script src="css/vendor.js"></script>
	<script src="css/main.js"></script>
	<script src="css/lazyload.min.js"></script>
	<script src="css/md5.min.js"></script>
	<script src="css/logo-animation.js"></script>