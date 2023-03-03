@extends('layouts.app_landing')

@section('content')
	<style>
		#bg-kanan {
			position: absolute;
			height: 100%;
			right: 0;
			background: url('{{ asset('bg1.png') }}');
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
					<div class="visi">
						<b>Guna Raya Teknik </b>is the leading specialist in air and liquid filtration, particularly in emission control
						and waste
						water treatmentapplications.
					</div>
					<hr>
					<div class="misi">
						We take pride in our extensive knowledge and expertise about filtration systems, and we have helped a great number
						of our clients maximize their filtration system efficiency and reduce operation cost.
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img  d-lg-none" data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset('bg1.png') }}" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Us Section ======= -->
		<section id="services" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Product Category</h2>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box ganjil">
							<div class="icon">
								<img src="{{ asset('storage/category/' . \config('config_page.product_category_1_img')) }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_1_title') }}</a></h4>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box genap">
							<div class="icon">
								<img src="{{ asset('storage/category/' . \config('config_page.product_category_2_img')) }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_2_title') }}</a></h4>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box ganjil">
							<div class="icon">
								<img src="{{ asset('storage/category/' . \config('config_page.product_category_3_img')) }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_3_title') }}</a></h4>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon-box genap">
							<div class="icon">
								<img src="{{ asset('storage/category/' . \config('config_page.product_category_4_img')) }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_4_title') }}</a></h4>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End About Us Section -->
		@include('landing.contact')

	</main><!-- End #main -->
	@include('landing.footer')
@endsection
