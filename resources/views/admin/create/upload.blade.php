@extends('layouts.app')

@section('title', 'Upload Media File – AYA Bank')

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
				@include('layouts.nav', ['nav'=>'Add Media', 'page'=>'Page'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/media/store') }}" method="POST" id="media_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<p><a href="{{ url('/admin/media') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a></p>

											<div class="mb-3">
												<label class="form-label" for="media_name">Media Name</label>
												<input type="text" class="form-control mb-30" name="media_name" id="media_name" placeholder="Media Name" required />
												<p>&nbsp;</p>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_category">Media Category</label>
												<select class="form-select" name="media_category" id="media_category" aria-label="Blog Category">
													<option value="">None</option>
													<option value="Corporate Policies">Coporate Policies</option>
													<option value="Foreign Currency Exchange">Foreign Currency Exchange</option>
												</select>
												<p>&nbsp;</p>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_file">Media File</label>
												<input class="form-control" type="file" name="media_file" id="media_file" required>
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
@endsection('content')