<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<link rel="icon" href="../../dist/img/balitjestro.png" type="image/png" sizes="16x16">
	<title>Balitjestro</title>

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<!-- Navigation -->
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
							<div class="container">
								<a class="navbar-brand" href="http://balitjestro.litbang.pertanian.go.id/">
									<img src="../../dist/img/balitjestro.png" alt="Balitjestro Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="50" height="50">
									BALITJESTRO
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<!-- logo -->

								<!-- menu start -->
								<nav class="main-menu">
									<ul>
										<li><a href="/home">Home</a></li>
										<li><a href="/datavarietas">Varietas</a></li>
										@can('user-display')
										<li><a href="/rekomendasi">Rekomendasi</a></li>
										@endcan
										<li class="nav-item dropdown">
											<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												Hello, {{ Auth::user()->name }} <span class="caret"></span>
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a  class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												<font color='black'>
													{{ __('Logout') }}
												</font>
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											</div>
										</li>
										<li>
											<div class="header-icons">
												<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
											</div>
										</li>
									</ul>
								</nav>
								<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
								<div class="mobile-menu"></div>
								<!-- menu end -->
								
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<span class="close-btn"><i class="fas fa-window-close"></i></span>
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<form action="/varietas-cari" method="GET">
									<input type="text" name="cari" placeholder="Cari Varietas.." value="{{ old('cari') }}">
									<button type="submit">Search <i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end search area -->

		@yield('konten')

		<!-- footer -->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-box about-widget">
							<h2 class="widget-title">Balitjestro</h2>
							<p>Balai Penelitian Tanaman Jeruk dan Buah Subtropika</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box get-in-touch">
							<h2 class="widget-title">Contact</h2>
							<ul>
								<li>Jl. Raya Tlekung No. 1 Batu, Jawa Timur Kotak Pos 22</li>
								<li>balitjestro@pertanian.go.id</li>
								<li>balitjestro.litbang.pertanian.go.id</li>
								<li>Phone (0341) 592683</li>
								<li>Fax (0341) 593047</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box pages">
							<h2 class="widget-title">Pages</h2>
							<ul>
								<li><a href="/home">Home</a></li>
								<li><a href="/datavarietas">Varietas</a></li>
								<li><a href="/rekomendasi">Pencarian</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box subscribe">
							<h2 class="widget-title">Peta Arah Balitjestro</h2>
							<p>Pindai menggunakan QR Code Reader</p>
							<a href="https://goo.gl/maps/u1jGiQ1aRyXtm4oH7"><img src="../../dist/img/gmaps.png" alt="gmaps" class="brand-image img-circle elevation-3" style="opacity: .8"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end footer -->

		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<p>Copyrights &copy; 2022 - <a href="http://balitjestro.litbang.pertanian.go.id/">Balitjestro</a>,  All Rights Reserved.</p>
					</div>
					<div class="col-lg-6 text-right col-md-12">
						<div class="social-icons">
							<ul>
								<li><a href="https://www.facebook.com/balitjestroindonesia" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/balitjestro" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://instagram.com/balitjestro" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://youtube.com/balitjestro" target="_blank"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end copyright -->

		<!-- jquery -->
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- count down -->
		<script src="assets/js/jquery.countdown.js"></script>
		<!-- isotope -->
		<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
		<!-- waypoints -->
		<script src="assets/js/waypoints.js"></script>
		<!-- owl carousel -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- magnific popup -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- mean menu -->
		<script src="assets/js/jquery.meanmenu.min.js"></script>
		<!-- sticker js -->
		<script src="assets/js/sticker.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>

	</body>
	</html>