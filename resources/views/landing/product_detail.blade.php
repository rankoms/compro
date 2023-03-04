@extends('layouts.app_landing')

@section('content')
	<style>
		p,
		h1,
		h2,
		h3,
		h4,
		h5 {
			margin: 0;
			padding: 0;
		}

		#bg-kanan {
			position: absolute;
			/* height: 100%; */
			right: 0;
			background: url('{{ asset("storage/product/$product->images") }}');
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

		.description {
			margin: 40px 0px;
		}

		.description h2,
		.detail h2 {
			color: #363636 !important;
			margin-top: 0px !important;
			margin-bottom: 0px !important;
		}

		.detail div,
		.description div {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-size: 16px;
			line-height: 32px;
			letter-spacing: 0.5px;
			color: #363636 !important;
		}
	</style>
	<style>
		@media (max-width: 768px) {
			#header .logo img {
				padding: 0;
				margin: 0;
				max-height: 30px;
			}
		}

		.aboutimg {
			padding: 0;
			margin: 0;
			max-height: 300px;
			border-radius: 20px;
		}

		.aboutprod {
			padding: 25px;
			margin: 0;
			max-height: 250px;
		}

		.detprod {
			padding: 0;
			margin: 0;
			max-height: 450px;
		}

		.detprod2 {
			padding: 0;
			margin: 0;
			max-height: 100px;
		}

		.detprod1 {
			padding: 0;
			margin: 0;
			max-height: 500px;
		}

		.detprod3 {
			display: block;
			margin: 0 auto;
			max-height: 500px;
		}

		.detprod4 {
			padding: 0;
			margin: 0;
			max-height: 500px;
		}

		.detprod4-5 {
			display: block;
			margin: 0 auto;
			max-height: 500px;
		}

		.detprod5 {
			display: block;
			margin: 0 auto;
			max-height: 500px;
		}

		.detprod6 {
			padding: 0;
			margin: 0;
			max-height: 250px;
		}

		.detprod7 {
			display: block;
			margin: 0 auto;
			max-height: 1000px;
		}

		.detprod8 {
			padding: 0;
			margin: 0;
			max-height: 200px;
		}

		.detprod9 {
			display: block;
			margin: 0 auto;
			max-height: 150px;

		}

		.detprod10 {
			display: block;
			margin: 0 auto;
			max-height: 500px;

		}

		.detprod11 {
			display: block;
			margin: 0 auto;
			max-height: 150px;

		}

		.detprod12 {
			display: block;
			margin: 0 auto;
			max-height: 500px;

		}

		.detprod13 {
			display: block;
			margin: 0 auto;
			max-height: 100px;

		}

		@media (max-width: 768px) {
			.detprod {
				padding: 0;
				margin: 0;
				max-height: 350px;
			}

			.detprod1 {
				padding: 0;
				margin: 0;
				max-height: 220px;
			}

			.detprod3 {
				display: block;
				margin: 0 auto;
				max-height: 180px;
			}

			.detprod4 {
				padding: 0;
				margin: 0;
				max-height: 150px;
			}

			.detprod4-5 {
				display: block;
				margin: 0 auto;
				max-height: 130px;
			}

			.detprod5 {
				display: block;
				margin: 0 auto;
				max-height: 83px;
			}

			.detprod6 {
				padding: 0;
				margin: 0;
				max-height: 150px;
			}

			.detprod7 {
				display: block;
				margin: 0 auto;
				max-height: 300px;
			}

			.detprod8 {
				padding: 0;
				margin: 0;
				max-height: 110px;
			}

			.detprod9 {
				display: block;
				margin: 0 auto;
				max-height: 100px;
			}

			.detprod10 {
				display: block;
				margin: 0 auto;
				max-height: 120px;

			}

			.detprod11 {
				display: block;
				margin: 0 auto;
				max-height: 90px;

			}

			.detprod12 {
				display: block;
				margin: 0 auto;
				max-height: 250px;

			}

			.detprod13 {
				display: block;
				margin: 0 auto;
				max-height: 40px;

			}

		}

		.container {
			text-align: left;
		}
	</style>
	@include('landing.header')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center" style="position: relative">
		<div class="col-lg-6" id="bg-kanan">

		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<span class="align-self-baseline">Product Detail</span>
					<div class="category-detail align-self-baseline">
						{{ $product->name }}
					</div>
					<div class="description align-self-baseline">
						{!! $product->description !!}
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset("storage/product/$product->images") }}" class="img-fluid " alt="{{ $product->name }}">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">

					<div class="detail align-self-baseline">
						{!! $product->detail !!}
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	@include('landing.contact')
	@include('landing.footer')
@endsection
