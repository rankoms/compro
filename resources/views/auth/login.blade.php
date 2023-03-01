@extends('layouts.auth')
@section('title', 'Login')
@section('css')
	<style>
		.splash-login {
			background-image: url("{{ asset('assets/img/auth/login-splash.png') }}");
			position: relative;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>
@endsection

@section('content')
	<div class="authentication-wrapper authentication-cover">
		<div class="authentication-inner row m-0">
			<!-- /Left Text -->
			<div class="d-none d-lg-flex col-lg-6 col-xl-7 align-items-center splash-login">
				<div class="flex-row text-center mx-auto">
					{{-- <img src="{{ asset('assets/img/pages/4799410-trans.png') }}" alt="Auth Cover Bg color" width="520"
						class="img-fluid authentication-cover-img" /> --}}
					<div class="mx-auto">
						<h3>{{ __('1_Title_Eoffice') }}</h3>
					</div>
				</div>
			</div>
			<!-- /Left Text -->

			<!-- Login -->
			<div class="d-flex col-12 col-lg-6 col-xl-5 align-items-center authentication-bg p-sm-5 p-4">
				<div class="w-px-400 mx-auto">
					<!-- Logo -->
					<div class="app-brand mb-4 d-flex justify-content-center">
						<a href="/" class="app-brand-link gap-2 mb-2">
							<span class="app-brand-logo">
								<img src="{{ asset('assets/img/logo.png') }}" />
							</span>
							<span class="app-brand-text demo h3 mb-0 fw-bold"></span>
						</a>
					</div>
					<!-- /Logo -->
					<h4 class="mb-2 text-center">{{ __('2_Login') }} 👋</h4>
					<p class="mb-4 text-center">{{ __('3_Ilustration Log In') }}</p>
					<div class="demo-inline-spacing mt-3">
						{{-- <div class="list-group list-group-horizontal-md text-md-center">
							<a class="list-group-item list-group-item-action active" id="home-list-item" data-bs-toggle="list"
								href="#horizontal-home">{{ __('login.login') }}</a>
							<a class="list-group-item list-group-item-action" id="profile-list-item" data-bs-toggle="list"
								href="#horizontal-profile">{{ __('login.login_qr') }}</a>
						</div> --}}
						<div class="tab-content px-0 mt-0">
							<div class="tab-pane fade show active" id="horizontal-home">
								@if (Session::has('message'))
									<div class="alert alert-danger" role="alert">
										{{ Session::get('message') }}
									</div>
								@endif
								<form id="formAuthentication" class="mb-3 row" method="POST" action="{{ route('login') }}">
									@csrf
									<div class="col-12 mb-3">
										<label for="email" class="form-label">{{ __('4_Email') }}</label>
										<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
											placeholder="" value="{{ old('email') }}" autofocus />
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="col-12 mb-3">
										<div class="d-flex justify-content-between">
											<label class="form-label" for="password">{{ __('5_Password') }}</label>
											<a href="{{ route('password.request') }}">
												<small>Forgot Password?</small>
											</a>
										</div>
										<div class="input-group input-group-merge">
											<input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
												name="password" placeholder="" aria-describedby="password" />
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<span class="input-group-text cursor-pointer" id="toggle-password">
												<i class="bx bx-hide"></i>
											</span>
										</div>
									</div>
									{{-- <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me" />
                                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                                        </div>
                                    </div> --}}
									<div class="col-12 mt-4">
										<button id="btn-login" class="btn btn-primary d-grid w-100">{{ __('2_Login') }}</button>
									</div>
								</form>
							</div>
							<div class="tab-pane fade" id="horizontal-profile">
								<img src="{{ asset('assets/img/qrcode.png') }}" width="60%" class="mx-auto d-block" />
							</div>
						</div>
					</div>

					{{-- <p class="text-center">
						<span>{{ __('login.registration-text') }}</span>
						<a href="{{ route('register') }}">
							<span>{{ __('login.create') }}</span>
						</a>
					</p> --}}
				</div>
			</div>
			<!-- /Login -->
		</div>
	</div>
@endsection

@section('js')
	<script>
		$(function() {
			$('#toggle-password').click(function() {
				const $pass = $('#password');
				const $child = $(this).children('i');

				if ($pass.attr('type') === 'password') {
					$pass.attr('type', 'text');
					$child.removeClass('bx-hide').addClass('bx-show');
				} else {
					$pass.attr('type', 'password');
					$child.removeClass('bx-show').addClass('bx-hide');
				}
			});
		})
	</script>
@endsection
