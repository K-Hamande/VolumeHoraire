<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
    <title>Gestion Des Volumes Horaires</title>
	<!-- Site favicon -->
	{{-- <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png"> --}}

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('./styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./styles/style.css') }}">

	
	
	
	
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="./images/deskapp-logo.svg" alt="">
				</a>
			</div>
			
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('./images/login-page-img.png') }}" alt="">
					
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-sucess" style="color: #1f5f2d">GESTION DES VOLUMES HORAIRES</h2>
						</div>
                        
                         <x-auth-session-status class="mb-4" :status="session('status')" />
						<form method="POST" action="{{ route('login') }}">
                            @csrf
                                {{-- MAIL --}}
							<div class="input-group custom">
								<input type="text" name="email" class="form-control form-control-lg  @error('email')  @enderror" placeholder="Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                            {{-- MOT DE PASSE --}}
							<div class="input-group custom">
								<input type="password"  name="password" class="form-control form-control-lg  @error('password')  @enderror" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
                         @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input"  id="customCheck1">
										<label class="custom-control-label" for="customCheck1" name="remember">Se Souvenir</label>
									</div>
								</div>
								
								<div class="col-6">
									<div class="forgot-password">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié ') }}
                                            </a>
                                        @endif
                                    </div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									
                                        <button class="btn btn-success btn-lg btn-block" type="submit" >Se Connecter</button>
										
									</div>
									
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('./scripts/core.js') }}"></script>
	<script src="{{ asset('./scripts/script.min.js') }}"></script>
	<script src="{{ asset('./scripts/process.js') }}"></script>
	<script src="{{ asset('./scripts/layout-settings.js') }}"></script>
</body>
</html>