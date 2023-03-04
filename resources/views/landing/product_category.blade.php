@extends('layouts.app_landing')

@section('content')
	<style>
		#bg-kanan {
			position: absolute;
			height: 100%;
			right: 0;
			background: url('{{ asset('storage/category_product/images_1.png') }}');
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
						{{ $category->name }}
					</div>
					<hr>
					<div class="description align-self-baseline">
						{{ $category->description }}
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img  d-lg-none" data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset('storage/category_product/images_1.png') }}" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Us Section ======= -->
		<section id="services" class="services product-category">
			<div class="container" data-aos="fade-up">


				<div class="row gz-2">
					@foreach ($product as $key => $value)
						<div class="col-xl-3 col-md-6 d-flex align-items-stretch item mb-4" data-aos="zoom-in" data-aos-delay="100">
							<a href="{{ route('product-detail', $value->type) }}" class="card" style="width: 18rem;">
								<img class="card-img-top" src="{{ asset('storage/product/' . $value->images) }}" alt="{{ $value->name }}">
								<div class="card-body category-product">
									<p class="card-text">{{ $value->name }}</p>
								</div>
							</a>
						</div>
					@endforeach
				</div>

			</div>
		</section><!-- End About Us Section -->


		@include('landing.contact')

	</main><!-- End #main -->
	@include('landing.footer')
@endsection
