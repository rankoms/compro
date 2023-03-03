<section id="contact" class="contact" style="background-color: #1048B7">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2 class="contact-h2">Contact Us</h2>
		</div>

		<div class="row location-call">
			<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
				data-aos-delay="200">
				<div class="row">
					<div class="col-2 align-self-center">
						<div class="box-icon">
							<img src="{{ asset('contact/location.svg') }}" alt="">
						</div>
					</div>
					<div class="col description p-4">
						{{ \config('config_page.location') }}
					</div>

				</div>
			</div>
			<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
				data-aos-delay="200">
				<div class="row">
					<div class="col-2 align-self-center">
						<div class="box-icon">
							<img src="{{ asset('contact/call.svg') }}" alt="">
						</div>
					</div>
					<div class="col description p-4">
						{{ \config('config_page.telp') }}
					</div>

				</div>
			</div>
		</div>
		<div class="row p-relative">
			<div class="col-lg-12 col-sm-12 d-flex align-items-stretch p-0 m-0">
				<iframe src="{{ \config('config_page.maps') }}" frameborder="0" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
			</div>

		</div>

	</div>
</section><!-- End Contact Section -->
