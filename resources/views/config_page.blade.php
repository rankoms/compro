@extends('layouts.app')

@section('title', 'Configuration Page')

@section('vendor-style')
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection
@section('content')
	<div class="container-xl pb-4 pt-4">
		<!-- Basic Layout & Basic with Icons -->
		<div class="row">
			<!-- Basic Layout -->
			<div class="col-12">
				<div class="card mb-4">
					{{-- <form method="POST" enctype="multipart/form-data" action="{{ route('store_config_page') }}">
						@csrf --}}
					<form id="form">
						<h5 class="card-header">Config HR Listening</h5>
						<div class="card-body">
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="hr_listening_no_wa">No Whatsapp</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="hr_listening_no_wa" name="hr_listening_no_wa"
										value="{{ \config('config_page.hr_listening_no_wa') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="hr_listening_message_wa">Message Whatsapp</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="hr_listening_message_wa" name="hr_listening_message_wa"
										value="{{ \config('config_page.hr_listening_message_wa') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="hr_listening_email">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="hr_listening_email" name="hr_listening_email"
										value="{{ \config('config_page.hr_listening_email') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="hr_listening_user_telegram">Username Telegram</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="hr_listening_user_telegram" name="hr_listening_user_telegram"
										value="{{ \config('config_page.hr_listening_user_telegram') }}" />
								</div>
							</div>
						</div>
						<h5 class="card-header">Config MIS/IT Service</h5>
						<div class="card-body">
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="mis_it_service_no_wa">No Whatsapp</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="mis_it_service_no_wa" name="mis_it_service_no_wa"
										value="{{ \config('config_page.mis_it_service_no_wa') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="mis_it_service_email">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="mis_it_service_email" name="mis_it_service_email"
										value="{{ \config('config_page.mis_it_service_email') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="Phone Number">Phone Number</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="mis_it_service_phone_number" name="mis_it_service_phone_number"
										value="{{ \config('config_page.mis_it_service_phone_number') }}" />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label" for="mis_it_service_extension">Extension Number</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="mis_it_service_extension" name="mis_it_service_extension"
										value="{{ \config('config_page.mis_it_service_extension') }}" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
	<script>
		var currentHighlightImage = '';

		$(document).ready(function() {
			$('#form').submit(function(e) {
				e.preventDefault();

				var formData = new FormData(this);

				formData.set('_token', '{{ csrf_token() }}');

				// for (var pair of formData.entries()) {
				// 	console.log(pair[0]+ ', ' + pair[1]); 
				// }

				$.ajax({
					url: "{{ route('store_config_page') }}",
					method: 'POST',
					data: formData,
					contentType: false,
					cache: false,
					processData: false,
					dataType: 'json',
					beforeSend: function() {},
					success: function(response) {
						const meta = response.meta;

						if (meta.status === 'success') {
							Swal.fire(
								'Success',
								meta.message,
								'success'
							).then((result) => {
								if (result.isConfirmed) {
									window.location.href = "{{ route('config_page') }}";
								}
							});
						} else {
							Swal.fire(
								'Fail',
								meta.message,
								'error'
							);
						}
					},
					error: function(error) {
						const data = JSON.parse(error.responseText);

						if (data.errors) {
							var idx = 0;

							$.each(data.errors, function(key, value) {
								$('#' + key).addClass('invalid');
								$('#' + key + '_invalid-feedback').html(value.join(' '));

								if (idx == 0) {
									$('#' + key).focus();
								}

								idx++;
							});
						} else {
							Swal.fire(
								'Fail',
								error.responseJSON.message,
								'error'
							);
						}
					},
				});
			});
		});

		$(document).on('change', '.top-banner', function() {
			$(this).removeClass('invalid');
			const id = this.id;
			$(`#${id}_invalid-feedback`).html('');

			const $this = $(this)[0];

			if ($this.files.length > 0) {
				if (($this.files[0].size / 1024) > (10 * 1024)) {
					$(`#${this.id}`).addClass('invalid');
					$(`#${this.id}_invalid-feedback`).html('The size of highlight image must be less than 10 MB');
					$(`#${this.id}`).val('');

					toastr.options = {
						positionClass: "toast-center-center",
					}
					toastr['error']('', 'The size of highlight image must be less than 10 MB', );

					return;
				}

				$(`#preview-${id}`).empty();

				var reader = new FileReader();
				var closeHtml = ``;

				if (currentHighlightImage) {
					closeHtml = `<a href="#" class="avatar avatar-xs close col-close remove-attachment-${id}">
						<span class="avatar-initial rounded-circle fill">
							<i class="fas fa-xmark"></i>
						</span>
					</a>`
				}

				reader.onload = async function(event) {
					$(`#preview-${id}`).html(`
						<div class="container-attachment mt-2" id="ca-${id}">
							<img src="${event.target.result}" class="item-image">
							${closeHtml}
						</div>
					`);
				}
				reader.readAsDataURL($this.files[0]);
			}
		});
	</script>
@endsection
