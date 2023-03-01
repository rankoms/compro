@extends('layouts.app_landing')

@section('content')
	@include('landing.header')
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<h1>Better Solutions For Your Business</h1>
					<h2>We are team of talented designers making websites with Bootstrap</h2>
					<div class="d-flex justify-content-center justify-content-lg-start">
						<a href="#about" class="btn-get-started scrollto">Get Started</a>
						<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
								class="bi bi-play-circle"></i><span>Watch Video</span></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="{{ asset('landing/img/illustration/talk.png') }}" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
						data-aos-delay="200">
						<h1>Better Solutions For Your Business</h1>
						<h2>We are team of talented designers making websites with Bootstrap</h2>
						<div class="d-flex justify-content-center justify-content-lg-start">
							<a href="#about" class="btn-get-started scrollto">Get Started</a>
							<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
									class="bi bi-play-circle"></i><span>Watch Video</span></a>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
						<img src="{{ asset('landing/img/hero-img.png') }}" class="img-fluid animated" alt="">
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->



		@include('landing.package')
		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Team</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-6">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
							<div class="pic"><img src="{{ asset('landing/img/team/team-1.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Walter White</h4>
								<span>Chief Executive Officer</span>
								<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4 mt-lg-0">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
							<div class="pic"><img src="{{ asset('landing/img/team/team-2.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
								<span>Product Manager</span>
								<p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
							<div class="pic"><img src="{{ asset('landing/img/team/team-3.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>William Anderson</h4>
								<span>CTO</span>
								<p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
							<div class="pic"><img src="{{ asset('landing/img/team/team-4.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
								<span>Accountant</span>
								<p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= About Us Section ======= -->
		<section id="apps" class="apps">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
						data-aos-delay="200">
						<h1>Better Solutions For Your Business</h1>
						<h2>We are team of talented designers making websites with Bootstrap</h2>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
						<img src="{{ asset('landing/img/illustration/apps.png') }}" class="img-fluid animated" alt="">
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->
	</main><!-- End #main -->
	@include('landing.footer')
@endsection
