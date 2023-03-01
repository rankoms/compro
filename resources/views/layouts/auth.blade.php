<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style customizer-hide" dir="ltr"
	data-theme="theme-default" data-assets-path="{{ asset('assets/') }}/"
	data-template="vertical-menu-template-no-customizer">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	@hasSection('title')
		<title>@yield('title') - eOffice</title>
	@else
		<title>eOffice</title>
	@endif

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
	{{-- <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" /> --}}

	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />


	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

	<!-- Scripts -->
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

	@yield('css')
	@yield('vendor-style')
</head>

<body>
	@yield('content')

	<div class="modal modal-transparent fade" id="modals-transparent" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog">
			<div class="sk-chase sk-primary" style="margin: auto">
				<div class="sk-chase-dot"></div>
				<div class="sk-chase-dot"></div>
				<div class="sk-chase-dot"></div>
				<div class="sk-chase-dot"></div>
				<div class="sk-chase-dot"></div>
				<div class="sk-chase-dot"></div>
			</div>
		</div>
	</div>
	<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
	<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
	{{-- <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

	<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>

	<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

	<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/js/sweetalert/sweetalert2.min.js') }}"></script> --}}

	@yield('vendor-script')

	<!-- Main JS -->
	{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
	<!-- Page JS -->
	@yield('js')

</body>

</html>
