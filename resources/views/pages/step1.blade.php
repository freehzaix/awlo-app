<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon1.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Appartements et maisons d'hôtes </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('pages.menu')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		<!--	<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Qui sommes-nous</h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="contact.html" class="btn btn-white-outline">En savoirplus</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h1 class="section-title">Parlez nous de votre logement</h1>

						@if(session('status'))
							<div class="alert alert-success"> {{ session('status') }} </div>
						@endif
						
						<div class="row my-5">
							
							<form action="{{ route('pages.step1.post') }}" method="POST">
								@csrf

								<div class="row">
									<div class="col-6">
										<div class="form-group">
										<label class="text-black" for="prenom">Prénom</label>
										<input type="text" 
											class="form-control @error('prenom') is-invalid @enderror" 
											id="prenom" 
											name="prenom"
											value="{{ old('prenom') }}">
											@error('prenom')
												<div class="alert alert-danger"> {{ $message }} </div>
											@enderror
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label class="text-black" for="nom">Nom</label>
										<input type="text"
											class="form-control @error('nom') is-invalid @enderror"
											id="nom"
											name="nom"
											value="{{ old('nom') }}">
											@error('nom')
												<div class="alert alert-danger"> {{ $message }} </div>
											@enderror
									</div>
								</div>
								</div>

								<div class="row mt-4">
									<div class="col-6">
										<div class="form-group">
											<label class="text-black" for="telephone">Téléphone</label>
											<input type="text"
												class="form-control @error('telephone') is-invalid @enderror" 
												id="telephone" 
												name="telephone"
												value="{{ old('telephone') }}">
												@error('telephone')
													<div class="alert alert-danger"> {{ $message }} </div>
												@enderror
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label class="text-black" for="email">Adresse mail</label>
											<input type="text"
												class="form-control @error('email') is-invalid @enderror" 
												id="email" 
												name="email"
												value="{{ old('email') }}">
												@error('email')
													<div class="alert alert-danger"> {{ $message }} </div>
												@enderror
										</div>
									</div>
								</div>
								
								<div class="form-group mt-3">
									<div class="col-md-6 text-start text-md-end mt-4">
										<a href="{{ route('pages.hote') }}" class="btn btn-secondary me-2">Retour</a>
										<button type="submit" class="btn btn-primary-hover-outline">Suivant</button>
									</div>
								</div>

							</form>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>

			</div>
			
		</div>
		<!-- End Why Choose Us Section -->



		

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<!--	<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>-->

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Awlo<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
