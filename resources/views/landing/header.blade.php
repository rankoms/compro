<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
	<div class="container d-flex align-items-center justify-content-between">

		<!-- Uncomment below if you prefer to use an image logo -->
		<div class="d-flex align-items-center">
			<a href="{{ route('index') }}" class="logo me-2 ms-4"><img src="{{ asset('landing/img/logo.png') }}" alt=""
					class="img-fluid"></a>
		</div>
		<nav class="navbar">
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>

					<li class="dropdown"><a href="#services"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							@foreach (\App\Models\Category::orderBy('id', 'asc')->get() as $key => $value)
								<li><a href="{{ route('product-category', $value->type) }}">{{ $value->name }}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</nav>

	</div>
</header><!-- End Header -->
