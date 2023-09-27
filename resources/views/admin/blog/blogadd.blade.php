<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Add Blog – AYA Bank</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <style type="text/css">
    	.tox-statusbar__branding {
    		display: none;
    	}
    	.file_section {
    		margin-bottom: 20px;
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
				@include('layouts.nav', ['nav'=>'Add Blog', 'page'=>'Page'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/blog/store') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/blog') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<div class="mb-3">
												<label class="form-label" for="blog_title">Title</label>
												<input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Blog Title" required />
											</div>
											<div class="mb-3">
												<label class="form-label" for="blog_category">Category</label>
												<select class="form-select" name="blog_category" id="blog_category" aria-label="Blog Category">
													<option value="">None</option>
													@foreach($categories as $cat)
														<option value="{{$cat->id}}">{{$cat->category_name}}</option>
													@endforeach
												</select>
											</div>
											<div class="mb-3">
												<label class="form-label" for="blog_desc">Description</label>
												<textarea class="form-control" id="blog_desc" name="blog_desc" rows="3" spellcheck="false" ></textarea>
											</div>
											<div class="mb-3">
												<label class="form-label" for="featured_image">Featured Image</label>
												<input class="form-control" type="file" name="featured_image" id="featured_image" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="media_type">Media Type</label>
												<select class="form-select" name="media_type" id="media_type" aria-label="Media Type">
													<option value="1">Single Image</option>
													<option value="2">Muliple Image (Gallery)</option>
													<option value="4">File</option>
													<option value="0">No File</option>
												</select>
											</div>
											<div class="mb-3" id="single_image_div">
												<label class="form-label" for="single_image">Media</label>
												<input class="form-control" type="file" name="single_image" id="single_image" required>
											</div>
											<div class="mb-3 d-none" id="multiple_image_div">
												<label class="form-label" for="multiple_image">Media</label>
												<input class="form-control" type="file" name="multiple_image[]" id="multiple_image" multiple="">
											</div>
											<div class="mb-3 d-none" id="file_div">
												<input type="hidden" name="file_count" id="file_count" value="1">
												<div class="row file_section" id="file_section_1">
													<div class="col-md-5">
														<label class="form-label" for="file_link_1">File</label>
														<input class="form-control" type="file" name="file_link_1" id="file_link_1">
													</div>
													<div class="col-md-5">
														<label class="form-label" for="file_img_link_1">File Image</label>
														<input class="form-control" type="file" name="file_img_link_1" id="file_img_link_1">
													</div>
													<div class="col-md-2 text-right">
														<label class="form-label" style="color: transparent;user-select: none;width: 100%;">Action</label>
														<button type="button" class="btn btn-sm btn-danger" id="file_remove_btn" disabled style="float: right;">
															<i class="menu-icon tf-icons bx bx-x" style="margin: 0;"></i>
														</button>
														<button type="button" class="btn btn-sm" id="file_add_btn" style="float: right;margin-right: 20px;">
															<i class="menu-icon tf-icons bx bx-plus" style="margin: 0;"></i>
														</button>
													</div>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label" for="publish_date">Publish Date</label>
												<input class="form-control" type="datetime-local" id="publish_date" name="publish_date" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="permalink">Blog URL</label>
												<input class="form-control" type="text" id="permalink" name="permalink" required>
											</div>
											<div class="mb-3">
												<label class="form-label" for="search_keywords">Search Keyword</label>
												<input class="form-control" type="text" id="search_keywords" name="search_keywords" placeholder="Separate each keyword by comma ( , )" required>
											</div>
											<input type="hidden" name="status" id="status" value="0">
											<button type="button" class="btn" id="draft_btn">Save as Draft</button>
											<button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
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
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

		$("#media_type").change(function() {
		    if($("#media_type").val() == '0') {
		        $("#single_image_div").addClass('d-none');
				$("#multiple_image_div").addClass('d-none');
				$("#multiple_image").removeAttr('required');
				$("#file_div").addClass('d-none');
				$("#file_link_1").removeAttr('required');
				$("#single_image").removeAttr('required');
		    } else {
    			if($("#media_type").val() == '1') {
    				$("#single_image_div").removeClass('d-none');
    				$("#multiple_image_div").addClass('d-none');
    				$("#multiple_image").removeAttr('required');
    				$("#file_div").addClass('d-none');
    				$("#file_link_1").removeAttr('required');
    				$("#single_image").prop('required',true);
    			} else {
    				if($("#media_type").val() == '4') {
    					$("#file_div").removeClass('d-none');
                        // $("#file_link_1").prop('required',true);
                        $("#file_link_1").removeAttr('required');
    					$("#single_image_div").addClass('d-none');
    					$("#multiple_image_div").addClass('d-none');
    					$("#multiple_image").removeAttr('required');
    					$("#single_image").removeAttr('required');
    				} else {
    					$("#multiple_image_div").removeClass('d-none');
    					$("#single_image_div").addClass('d-none');
    					$("#single_image").removeAttr('required');
    					$("#file_div").addClass('d-none');
    					$("#file_link_1").removeAttr('required');
    					$("#multiple_image").prop('required',true);
    				}
    			}
		    }
		});

		$("#file_add_btn").click(function(){
			var file_count = $("#file_count").val();
			var new_file_count = parseInt(file_count) + 1;
			var file_html = '<div class="row file_section" id="file_section_'+new_file_count+'">'+
								'<div class="col-md-5">'+
									'<label class="form-label" for="file_link_'+new_file_count+'">File</label>'+
									'<input class="form-control" type="file" name="file_link_'+new_file_count+'" id="file_link_'+new_file_count+'">'+
								'</div>'+
								'<div class="col-md-5">'+
									'<label class="form-label" for="file_img_link_'+new_file_count+'">File Image</label>'+
									'<input class="form-control" type="file" name="file_img_link_'+new_file_count+'" id="file_img_link_'+new_file_count+'">'+
								'</div>'+
								'<div class="col-md-2"></div>'+
							'</div>';

			$("#file_section_"+file_count).after(file_html);
			$("#file_count").val(new_file_count);

			if (new_file_count > 1) {
				$("#file_remove_btn").removeAttr('disabled');
			}

			if (new_file_count == 4) {
				$("#file_add_btn").addClass('d-none');
			}
		});

		$("#file_remove_btn").click(function(){
			var file_count = $("#file_count").val();
			var new_file_count = parseInt(file_count) - 1;

			if (new_file_count == 1) {
				$("#file_remove_btn").attr('disabled', 'disabled');
			}

			if (new_file_count < 4) {
				$("#file_add_btn").removeClass('d-none');
			}

			$("#file_section_"+file_count).remove();
			$("#file_count").val(new_file_count);
		});

		$("#draft_btn").click(function() {
			$("#status").val('1');
			$("#submit_btn").click();
		});
	</script>
</body>
</html>