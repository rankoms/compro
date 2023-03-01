<!-- ======= package Section ======= -->
<section id="package" class="package">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Choose Your Plan</h2>
			<p>Let’s choose the package that is best for you and explore it happily and cheerfully</p>
		</div>

		<div class="row mt-4 mt-lg-0">
			{{-- @foreach ($package as $key => $value)
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<div class="box">
						<h3>{{ $value->name }}</h3>
						<h4><sup>{{ $value->currency }}</sup>{{ $value->price }}<span>per {{ $value->duration }}</span></h4>
						<ul>
							@foreach ($value->package_details as $key2 => $value2)
								<li {!! $value2->feature_status == 0 ? 'class="na"' : '' !!}>{!! $value2->feature_status == 0 ? '' : '<i class="bx bx-check"></i>' !!} {!! $value2->feature_status == 0 ? '<i class="bx bx-x"></i>' : '' !!}
									{{ $value2->name }}</li>
							@endforeach
						</ul>
						<a href="{{ route('registration', ['package' => $value->id]) }}" class="buy-btn">Get Started</a>
					</div>
				</div>
			@endforeach --}}
		</div>
	</div>
</section><!-- End package Section -->
