@extends('layouts.app')
@section('title', 'Job Position')
@section('vendor-style')
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection
@section('content')
	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="breadcrumb-wrapper mb-5">
			<span class="text-muted fw-light">Data Master /</span>
			<span class="text-primary">Job Position</span>
		</h4>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							@can('create job_position')
								<div class="col-12 d-flex justify-content-end mb-2 gap-2 flex-wrap">
									<button type="button" class="btn btn-primary" id="btn-create">
										Create
									</button>
								</div>
							@endcan
							<div class="col-12">
								<div class="table-responsive">
									<table class="datatables-ajax table table-bordered dataTable">
										<thead>
											<tr>
												<th>Name</th>
												<th>Icon</th>
												<th>Action</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-job_position" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form class="form-job_position">
					<div class="modal-body">

						<div class="col-12 col-md-12">
							<label class="form-label" for="name">Name</label>
							<input type="text" id="name" name="name" class="form-control" />
							<div class="invalid-feedback d-block invalid">
								<div id="name_invalid-feedback"></div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-primary" id="btn-save">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('vendor-script')
	<script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
	<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection
@section('js')
	<script>
		let id;
		let table;

		$(function() {
			const token = '{{ csrf_token() }}';
			table = $('.datatables-ajax').DataTable({
				processing: true,
				serverSide: true,
				ajax: {
					url: "{{ route('product.list') }}",
					type: "POST",
					data: {
						_token: token
					}
				},
				columns: [{
						data: 'name',
						name: 'name'
					}, {
						data: 'icon',
						name: 'icon'
					},
					{
						data: 'action',
						name: 'action',
						orderable: false,
						searchable: false,
					},
				],
				order: [
					[0, 'asc']
				],
			});

			@if (!Auth::user()->company_id)
				$('#company_id').select2({
					minimumResultsForSearch: -1,
					allowClear: false,
					placeholder: '',
					dropdownParent: $('#company_id').parent().parent(),
				});
			@endif
			$('#btn-refresh').click(function() {
				table.ajax.reload();
			});

			$('#company_id').on('select2:select', function() {
				$(this).removeClass('invalid');
				$(`#${this.id}_invalid-feedback`).html('');
			});

			$('#name').on('input', function() {
				$(this).removeClass('invalid');
				$(`#${this.id}_invalid-feedback`).html('');
			});

			$('#btn-create').click(function() {
				$('.modal-title').html('Create Job Position');
				$('#modal-job_position').modal('show');
				$('.form-job_position').attr('id', 'form_create-job_position');
				$('#company_id').val('').trigger('change');
				$('#name').val('');
				$('input').removeClass('invalid');
				$('.invalid-feedback div').html('');

				id = undefined;
			});
		});

		$(document).on('click', '.btn-edit', function() {
			$('.modal-title').html('Edit Job Position');
			$('#modal-job_position').modal('show');
			$('.form-job_position').attr('id', 'form_edit-job_position');
			$('#company_id').val($(this).data('company_id')).trigger('change');
			$('#name').val($(this).data('name'));
			$('input').removeClass('invalid');
			$('.invalid-feedback div').html('');

			id = $(this).data('id');
		});

		$(document).on('submit', '#form_create-job_position', function(e) {
			e.preventDefault();

			$('input').removeClass('invalid');
			$('.invalid-feedback div').html('');

			let data = $(this).serializeArray();

			data.push({
				name: '_token',
				value: '{{ csrf_token() }}',
			});

			$.ajax({
				type: 'POST',
				url: "{{ route('product.store') }}",
				data: data,
				beforeSend: function() {
					$('#btn-save').attr('disabled', true);
					$('#btn-save').html('Loading');
				},
				success: function(response) {
					const meta = response.meta;

					if (meta.status === 'success') {
						Swal.fire(
							'Success',
							meta.message,
							'success'
						);
						$('#modal-job_position').modal('hide');
						table.ajax.reload();
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
						$.each(data.errors, function(key, value) {
							$('#' + key).addClass('invalid');
							$('#' + key + '_invalid-feedback').html(value);
							$('#' + key).focus();
						});
					} else {
						Swal.fire(
							'Fail',
							error.responseJSON.message,
							'error'
						);
					}
				},
				complete: function(jqXHR, textStatus) {
					$('#btn-save').attr('disabled', false);
					$('#btn-save').html('Save');
				}
			});
		});

		$(document).on('submit', '#form_edit-job_position', function(e) {
			e.preventDefault();

			$('input').removeClass('invalid');
			$('.invalid-feedback div').html('');

			let data = $(this).serializeArray();
			let url = "{{ route('product.update', [':id']) }}";

			url = url.replace(':id', id);

			data.push({
				name: '_token',
				value: '{{ csrf_token() }}',
			});

			$.ajax({
				type: 'PATCH',
				url: url,
				data: data,
				beforeSend: function() {
					$('#btn-save').attr('disabled', true);
					$('#btn-save').html('Loading');
				},
				success: function(response) {
					const meta = response.meta;

					if (meta.status === 'success') {
						Swal.fire(
							'Success',
							meta.message,
							'success'
						);
						$('#modal-job_position').modal('hide');
						table.ajax.reload();
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
						$.each(data.errors, function(key, value) {
							$('#' + key).addClass('invalid');
							$('#' + key + '_invalid-feedback').html(value);
							$('#' + key).focus();
						});
					} else {
						Swal.fire(
							'Fail',
							error.responseJSON.message,
							'error'
						);
					}
				},
				complete: function(jqXHR, textStatus) {
					$('#btn-save').attr('disabled', false);
					$('#btn-save').html('Save');
				}
			});
		});

		$(document).on('click', '.btn-delete', function() {
			id = $(this).data('id');

			Swal.fire({
				title: 'Are you sure to delete this job position?',
				icon: 'warning',
				showDenyButton: true,
				showConfirmButton: false,
				showCancelButton: true,
				denyButtonText: 'Delete',
				customClass: {
					title: 'swal2-title-custom',
					denyButton: 'btn-confirm_delete',
				},
				reverseButtons: true,
				allowOutsideClick: false,
				preDeny: async () => {
					return await deletePromise(id);
				},
			}).then((result) => {
				if (result.isDenied) {}
			});
		});

		async function deletePromise(id) {
			let data = [];
			let url = "{{ route('product.destroy', [':id']) }}";

			data.push({
				name: '_token',
				value: '{{ csrf_token() }}',
			});
			url = url.replace(':id', id);

			function ajax() {
				return new Promise(function(resolve, reject) {
					$.ajax({
						type: 'DELETE',
						url: url,
						data: data,
						beforeSend: function() {
							$('.btn-confirm_delete').attr('disabled', true);
							$('.btn-confirm_delete').html('Loading');
						},
						success: function(response) {
							const meta = response.meta;

							if (meta.status === 'success') {
								Swal.fire(
									'Success',
									meta.message,
									'success',
								)
								table.ajax.reload();
								resolve(true);
							} else {
								Swal.fire(
									'Fail',
									meta.message,
									'error'
								);
								reject(false);
							}
						},
						error: function(error) {
							Swal.fire(
								'Fail',
								error.responseJSON.message,
								'error'
							);
							reject(false);
						},
						complete: function() {
							$('.btn-confirm_delete').attr('disabled', false);
							$('.btn-confirm_delete').html('Delete');
						}
					});
				});
			}

			return ajax()
				.then(() => {
					return true;
				})
				.catch(() => {
					return false;
				});
		}
	</script>
@endsection
