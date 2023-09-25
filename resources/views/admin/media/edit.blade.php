@extends('layouts.app')

@section('title', 'Update Media File – AYA Bank')

<style type="text/css">
	.flr {
		float: right;
	}
	.table {
		color: #566a7f !important;
	}
</style>
@section('content')
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'Media'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Update Media'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/media/update') }}" method="POST" id="media_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<input type="hidden" class="form-control" name="media_id" id="media_id" value="{{$media_data->id}}" />
											<p><a href="{{ url('/admin/media') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a></p>

											<div class="mb-3">
												<label class="form-label" for="media_name">Media Name</label>
												<input type="text" class="form-control mb-30" name="media_name" id="media_name" placeholder="Media Name" value="{{$media_data->media_name}}" required />
												<p>&nbsp;</p>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_category">Media Category</label>
												<select class="form-select" name="media_category" id="media_category" aria-label="Blog Category">
													<option value="">None</option>
													<option value="Corporate Policies" {{ $media_data->media_category == 'Corporate Policies' ? 'selected':'' }}>Coporate Policies</option>
												</select>
												<p>&nbsp;</p>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_file">Media File</label>
												<input class="form-control" type="file" name="media_file" id="media_file">
												<input type="hidden" name="media_file_old" id="media_file_old" value="{{$media_data->media_file}}">
												<p>&nbsp;</p>
											</div>
											<button type="submit" class="btn btn-primary" id="submit_btn">Upload</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.admin-footer', ['page'=>''])

	<script type="text/javascript">
		$("#media_file").change(function() {
			$("#media_file_old").val("");
		});
	</script>
@endsection('content')