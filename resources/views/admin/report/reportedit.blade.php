@extends('layouts.app')

@section('title', 'Edit Report – AYA Bank')

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Report'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Edit Report'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-xl">
							<div class="card mb-4">
								<div class="card-body">
									<form class="mb-3" action="{{ url('/admin/report/update') }}" method="POST" id="report_form" enctype="multipart/form-data">
										{{ csrf_field() }}
										<a href="{{ url('/admin/report') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
										<div class="mb-3">
											<label class="form-label" for="report_title">Title</label>
											<input type="text" class="form-control" name="report_title" id="report_title" value="{{$report_data->report_title}}" placeholder="Report Title" required />
											<input type="hidden" name="report_id" value="{{$report_data->id}}">
										</div>
										<div class="mb-3">
											<label for="report_category" class="form-label">Report Category</label>
											<select class="form-select" name="report_category" id="report_category" aria-label="Parent Category">
												<option value="">None</option>
												@foreach($categories as $cat)
													<option value="{{$cat->id}}" {{ $cat->id == $report_data->report_category ? 'selected':'' }}>{{$cat->category_name}}</option>
												@endforeach
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label" for="report_file">File</label>
											<input class="form-control" type="file" name="report_file" id="report_file">
											<input type="hidden" name="old_file_url" id="old_file_url" value="{{$report_files->file_path ?? ''}}">
											<input type="hidden" name="new_image" id="new_image">
										</div>
										<div class="mb-3">
											<label class="form-label" for="search_keywords">Search Keyword</label>
											<input class="form-control" type="text" id="search_keywords" name="search_keywords" value="{{$keywords}}" placeholder="Separate each keyword by comma ( , )" required>
										</div>
										<button type="button" class="btn btn-primary" id="update_btn">Update</button>
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

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	$("#report_file").change(function(){
		$("#old_file_url").val('');
		$("#new_image").val('uploaded');
	});

	$("#update_btn").click(function() {
		if ($("#old_file_url").val() == '' && $("#new_image").val() == '') {
			$("#report_file").prop('required',true);
		} else {
			$("#report_form").submit();
		}
	});
</script>
@endsection('content')