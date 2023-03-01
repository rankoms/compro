<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	@hasSection('title')
		<title>@yield('title') - eOffice</title>
	@else
		<title>eOffice</title>
	@endif

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{ asset('favicon.ico') }}" rel="icon">
	<link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon">

	<style>
		:root {
			--color-utama: {{ \config('color.color_utama') }};
			--color-button-utama: {{ \config('color.color_button_utama') }};
			--color-button-secondary: {{ config('color.color_button_secondary') }};
			--gradient-color: {{ \config('color.gradient_color') }};
			--color-utama-soft: {{ \config('color.color_utama_soft') }};
		}
	</style>
	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
	@yield('css')
	@yield('vendor-style')

	<!-- =======================================================
		* Template Name: Arsha - v4.10.0
		* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
		* Author: BootstrapMade.com
		* License: https://bootstrapmade.com/license/
		======================================================== -->
</head>

<body>
	@yield('content')

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ asset('landing/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('landing/vendor/waypoints/noframework.waypoints.js') }}"></script>
	<script src="{{ asset('landing/vendor/php-email-form/validate.js') }}"></script>

	<!-- Template Main JS File -->
	<script src="{{ asset('landing/js/main.js') }}"></script>

	@yield('js')

</body>

</html>
