<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AOAMS') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}"/>

    @stack('css')

</head>
<body>
@section('content')

<!-- Page Preloder -->
<div id="preloder">
		<div class="loader">
			<img src="{{asset('assets/frontend/img/logo.png')}}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


@endsection


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('assets/frontend/img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/about">About Us</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
			</ul>
		</nav>
	</header>
	
	<!-- Header section end -->

 @yield('content')

	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p> PeopleNTech Ltd. </p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
					<p class="con-item">0034 37483 2445 322</p>
					<p class="con-item">piit.com</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
				
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.24426122215777!2d90.38687261244877!3d23.750653525501193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25a8fe599b893878!2sPeopleNTech+Software+Limited!5e0!3m2!1sen!2sbd!4v1514637494622" width="100%" height="350" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
 
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2018 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Sojib</a></h2>
	</footer>
	<!-- Footer section end -->





	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('assets/frontend/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/main.js')}}"></script>

	
   

</body>
</html>
