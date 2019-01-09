@extends('layouts.frontend.app')

@push('css')

@endpush

@section('content')

 -- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('assets/frontend/img/big-logo.png')}}" alt="">
				<p>Get An Appointment Here!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="{{asset('assets/frontend/img/01.jpg')}}"></div>
			<div class="item  hero-item" data-bg="{{asset('assets/frontend/img/02.jpg')}}"></div>
		</div>
	</div>
	<!-- Intro Section -->

@endsection

@push('js')

@endpush