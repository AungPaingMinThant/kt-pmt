<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Edit Blog – AYA Bank</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <style type="text/css">
    	.tox-statusbar__branding {
    		display: none;
    	}
    </style>

    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/design.css') }}" />

    <link rel="stylesheet" href="{{ url('/css/perfect-scrollbar.css') }}" />

    <script src="{{ url('/js/helpers.js') }}"></script>

    <script src="{{ url('/js/config.js') }}"></script>
</head>
<body>
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'Blog'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Add Blog'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/blog/update') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/blog') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<input type="hidden" name="blog_id" value="{{$blog_data->id}}">
											<div class="mb-3">
												<label class="form-label" for="blog_title">Title</label>
												<input type="text" class="form-control" name="blog_title" id="blog_title" value="{{ $blog_data->blog_title }}" placeholder="Blog Title" required />
											</div>
											<div class="mb-3">
												<label class="form-label" for="blog_category">Category</label>
												<select class="form-select" name="blog_category" id="blog_category" aria-label="Blog Category">
													<option value="">None</option>
													@foreach($categories as $cat)
														<option value="{{$cat->id}}" {{ $cat->id == $blog_data->blog_category ? 'selected':'' }}>{{$cat->category_name}}</option>
													@endforeach
												</select>
											</div>
											<div class="mb-3">
												<label class="form-label" for="blog_desc">Description</label>
												<textarea class="form-control" id="blog_desc" name="blog_desc" rows="3" spellcheck="false" >{{ $blog_data->blog_desc }}</textarea>
											</div>
											<input type="hidden" name="old_featured_image" id="old_featured_image" value="{{$blog_data->featured_image}}">
											<input type="hidden" name="new_featured_image" id="new_featured_image" value="">
											<div class="mb-3">
												<label class="form-label" for="featured_image">Featured Image</label>
												<input class="form-control" type="file" name="featured_image" id="featured_image" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_type">Media Type</label>
												<select class="form-select" name="media_type" id="media_type" aria-label="Media Type">
													<option value="1" {{ $blog_data->media_type == '1' ? 'selected':'' }}>Single Image</option>
													<option value="2" {{ $blog_data->media_type == '2' ? 'selected':'' }}>Muliple Image (Gallery)</option>
													<option value="3" {{ $blog_data->media_type == '3' ? 'selected':'' }}>Carousel</option>
												</select>
											</div>

											@if($blog_data->media_type == 1)
												@php
													$single_class = '';
													$multiple_class = 'd-none';
												@endphp
											@else
												@php
													$single_class = 'd-none';
													$multiple_class = '';
												@endphp
											@endif

											<input type="hidden" name="old_image" id="old_image" value="{{count($blog_files)}}">
											<input type="hidden" name="new_image" id="new_image" value="">
											<div class="mb-3">
												<label class="form-label" for="media_image">Media</label>
												<input class="form-control {{$single_class}}" type="file" name="single_image" id="single_image" >
												<input class="form-control {{$multiple_class}}" type="file" name="multiple_image[]" id="multiple_image" multiple="">
											</div>
											<div class="mb-3">
												<label class="form-label" for="publish_date">Publish Date</label>
												<input class="form-control" type="datetime-local" id="publish_date" name="publish_date" value="{{$blog_data->publish_date}}" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="permalink">Blog URL</label>
												<input class="form-control" type="text" id="permalink" name="permalink" value="{{ $blog_data->permalink }}" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="search_keywords">Search Keyword</label>
												<input class="form-control" type="text" id="search_keywords" name="search_keywords" value="{{$keywords}}" placeholder="Separate each keyword by comma ( , )" required>
											</div>
											<button type="button" class="btn btn-primary" id="submit_btn">Update</button>
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

	<script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/popper.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/js/menu.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
	<script>
		tinymce.init({
	        selector: 'textarea#blog_desc',
	        height: 600
	    });

	    $("#media_type").change(function() {
			if($("#media_type").val() == '1') {
				$("#single_image").removeClass('d-none');
				$("#multiple_image").addClass('d-none');
				if($("#old_image").val() == '0' && $("#new_image").val() == '') {
					$("#multiple_image").removeAttr('required');
					$("#single_image").prop('required',true);
				}
			} else {
				$("#multiple_image").removeClass('d-none');
				$("#single_image").addClass('d-none');
				if($("#old_image").val() == '0' && $("#new_image").val() == '') {
					$("#single_image").removeAttr('required');
					$("#multiple_image").prop('required',true);
				}
			}
		});

		$("#single_image").change(function() {
			$("#old_image").val('0');
			$("#new_image").val('uploaded');
		});
		$("#multiple_image").change(function() {
			$("#old_image").val('0');
			$("#new_image").val('uploaded');
		});

		$("#featured_image").change(function() {
			$("#old_featured_image").val('');
			$("#new_featured_image").val('uploaded');
		});

		$("#submit_btn").click(function() {
			if($("#old_image").val() == '0' && $("#new_image").val() == '') {
				if($("#media_type").val() == '1') {
					$("#single_image").prop('required',true);
					$("#multiple_image").removeAttr('required');
				} else {
					$("#multiple_image").prop('required',true);
					$("#single_image").removeAttr('required');
				}
			} else {
				$("#blog_form").submit();
			}
		});
	</script>
</body>
</html>