@extends('layouts.app_landing')

@section('content')
	<style>
		#bg-kanan {
			position: absolute;
			/* height: 100%; */
			right: 0;
			background: url('{{ asset("storage/category_product/$product->images") }}');
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-color: #37517e;
		}

		iframe {

			border: 0;
			width: 100%;
			height: 490px !important;
			border-radius: 45px;
			margin-top: 24px;
		}
	</style>
	@include('landing.header')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center" style="position: relative">
		<div class="col-lg-6" id="bg-kanan">

		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<span class="align-self-baseline">Product</span>
					<div class="category-detail align-self-baseline">
						{{ $product->name }}
					</div>
					<hr>
					<div class="description align-self-baseline">
						{!! $product->description !!}
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset('bg1.png') }}" class="img-fluid " alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">

					<div class="description align-self-baseline">
						{!! $product->detail !!}
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	@include('landing.contact')
	@include('landing.footer')
@endsection
