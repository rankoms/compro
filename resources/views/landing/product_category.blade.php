@extends('layouts.app_landing')

@section('content')
	<style>
		#bg-kanan {
			position: absolute;
			height: 100%;
			right: 0;
			background: url('{{ asset("storage/product_product/$category->images") }}');
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
					<span>Product</span>
					<div class="category-detail">
						{{ $category->name }}
					</div>
					<hr>
					<div class="description">
						{{ $category->description }}
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Us Section ======= -->
		<section id="services" class="services">
			<div class="container" data-aos="fade-up">


				<div class="row">
					<div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="{{ asset('storage/product/images_1.png') }}" alt="Card image cap">
							<div class="card-body category-product">
								<p class="card-text">Primary Effect Non-Woven Filter</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box genap">
							<div class="icon">
								<img src="{{ asset('storage/product/images_1.png') }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_2_title') }}</a></h4>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box ganjil">
							<div class="icon">
								<img src="{{ asset('storage/product/images_1.png') }}" alt="Filter">
							</div>
							<h4><a href="">{{ \config('config_page.product_category_3_title') }}</a></h4>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon-box genap">
							<div class="icon">
								<img src="{{ asset('storage/product/images_1.png') }}" alt="Filter">
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
