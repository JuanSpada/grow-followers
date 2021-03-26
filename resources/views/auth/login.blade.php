<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8VLC9M');</script>
    <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="png" href="/img/favicon.png">
  <title>MásFollows</title>

  <!-- Custom fonts for this template-->
  <link href="/backoffice/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/backoffice/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8VLC9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>	
                  <form class="user" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
								<input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
								@error('email')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
								@enderror
                    </div>
                    <div class="form-group">
								<input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

								@error('password')
									 <span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
									 </span>
								@enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
							 	<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Recordarme</label>
                      </div>
						  </div>
						  <button type="submit" class="btn btn-primary btn-user btn-block">
								{{ __('Login') }}
						  </button>
                    <hr>
                    {{-- <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login con Google
                    </a>
                    <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login con Facebook
                    </a> --}}
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="{{ route('password.request') }}">Olvidaste tu Contraseña?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="{{ route('register') }}">No tenes cuenta? Registrate</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/backoffice/vendor/jquery/jquery.min.js"></script>
  <script src="/backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/backoffice/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/backoffice/js/sb-admin-2.min.js"></script>

</body>

</html>
