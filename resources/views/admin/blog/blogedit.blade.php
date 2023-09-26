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
										<form class="mb-3" action="{{ url('/admin/blog/update') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/blog') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<input type="hidden" name="blog_id" value="{{$blog_data->id}}">
											<div class="mb-3">
												<label class="form-label" for="blog_title">Title</label>
												<input type="text" class="form-control" name="blog_title" id="blog_title" value="{!! html_entity_decode($blog_data->blog_title) !!}" placeholder="Blog Title" required />
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
												<textarea class="form-control" id="blog_desc" name="blog_desc" rows="3" spellcheck="false" >{!! $blog_data->blog_desc !!}</textarea>
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
													<option value="4" {{ $blog_data->media_type == '4' ? 'selected':'' }}>File</option>
													<option value="0" {{ $blog_data->media_type == '0' ? 'selected':'' }}>No File</option>
												</select>
											</div>

											<?php
												$singleblogfiles = App\Models\BlogFile::where('blog_id',$blog_data->id)->first();
												$multiblogfiles = App\Models\BlogFile::where('blog_id',$blog_data->id)->get();
												$multifilearr = array();
												foreach ($multiblogfiles as $multi) {
													$multifilearr[] = $multi->file_path;
												}

												$multifile = implode(",",$multifilearr);
											?>
											@if($blog_data->media_type == 1)
												@php
													$single_class = '';
													$multiple_class = 'd-none';
													$file_class = 'd-none';
													$file_label_class = 'd-none';
													$media_label_class = '';
												@endphp
											@elseif($blog_data->media_type == 4)
												@php
													$single_class = 'd-none';
													$multiple_class = 'd-none';
													$file_class = '';
													$file_label_class = '';
													$media_label_class = 'd-none';
												@endphp
											@else
												@php
													$single_class = 'd-none';
													$multiple_class = '';
													$file_class = 'd-none';
													$file_label_class = 'd-none';
													$media_label_class = '';
												@endphp
											@endif

											<input type="hidden" name="old_image" id="old_image" value="{{count($blog_files)}}">
											<input type="hidden" name="new_image" id="new_image" value="">
											<div class="mb-3">
												<label class="form-label {{$media_label_class}}" id="media_label">Media</label>												
												<input class="form-control {{$single_class}}" type="file" name="single_image" id="single_image" >
												<input class="form-control {{$multiple_class}}" type="file" name="multiple_image[]" id="multiple_image" multiple="" onchange="multiFileChange()">
												@if($blog_data->media_type == 2)
    												<span class="small multiple_uploaded"><b>Uploaded: {{count($multiblogfiles)}} files</b><br>
    													@foreach($multiblogfiles as $mul)
    														@php $blog_file_link = explode('/', $mul->file_path); @endphp
    														
    														<p><a href="{{ url('/public/'.$mul->file_path) }}" target="_blank" style="text-decoration: underline;">{{ end($blog_file_link) }}</a></p>
    													@endforeach
    												</span>
    											@endif

                                                @if($blog_data->media_type == 1)
												    <input type="hidden" name="single_image_old" id="single_image_old" value="{{ $singleblogfiles->file_path }}">
												@endif
												
												@if($blog_data->media_type == 2)
												    <input type="hidden" name="multiple_image_old" id="multiple_image_old" value="{{ $multifile }}">
												@endif

												<?php
													$blog_file_count = 1;
												?>
												<input type="text" name="file_count" id="file_count" value="{{count($blog_files)}}">
												<input type="text" name="file_type_edit_flag" id="file_type_edit_flag" value="0">
												<div class="row file_section {{$file_class}}" id="file_section_1">
													<div class="col-md-5">
														<label class="form-label" for="file_link_1">File</label>
														<input class="form-control" type="file" name="file_link_1" id="file_link_1" onchange="fileUploadChange(1)">

														<input type="text" name="file_link_old_url_1" id="file_link_old_url_1" value="">
													</div>
													<div class="col-md-5">
														<label class="form-label" for="file_img_link_1">File Image</label>
														<input class="form-control" type="file" name="file_img_link_1" id="file_img_link_1" onchange="fileImageUploadChange(1)">

														<input type="text" name="file_img_old_url_1" id="file_img_old_url_1" value="">
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

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
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
	        	$(".file_section").addClass('d-none');
	            $("#single_image").addClass('d-none');
				$("#multiple_image").addClass('d-none');
				$("#file_link").addClass('d-none');
				if($("#old_image").val() == '0' && $("#new_image").val() == '') {
					$("#multiple_image").removeAttr('required');
					$("#single_image").removeAttr('required');
					$("#file_link").removeAttr('required');
				}
				$("#media_label").addClass('d-none');
				$("#file_label").addClass('d-none');
	        } else {
    			if($("#media_type").val() == '1') {
    				$("#single_image").removeClass('d-none');
    				$("#multiple_image").addClass('d-none');
    				$("#file_link").addClass('d-none');
    				if($("#old_image").val() == '0' && $("#new_image").val() == '') {
    					$("#multiple_image").removeAttr('required');
    					$("#single_image").prop('required',true);
    					$("#file_link").removeAttr('required');
    				}
    				$("#media_label").removeClass('d-none');
    				$("#file_label").addClass('d-none');
    			} else {
    				if($("#media_type").val() == '4') {
    					$(".file_section").removeClass('d-none');
    					$("#file_link_1").removeClass('d-none');
    					$("#single_image").addClass('d-none');
    					$("#multiple_image").addClass('d-none');
    					if($("#old_image").val() == '0' && $("#new_image").val() == '') {
    						$("#single_image").removeAttr('required');
    						$("#multiple_image").removeAttr('required');
    						$("#file_link_1").removeAttr('required');
    					}
    					$("#media_label").addClass('d-none');
    					$("#file_label").removeClass('d-none');
    				} else {
    					$(".file_section").addClass('d-none');
    					$("#multiple_image").removeClass('d-none');
    					$("#single_image").addClass('d-none');
    					$("#file_link_1").addClass('d-none');
    					if($("#old_image").val() == '0' && $("#new_image").val() == '') {
    						$("#single_image").removeAttr('required');
    						$("#multiple_image").prop('required',true);
    						$("#file_link_1").removeAttr('required');
    					}
    					$("#media_label").removeClass('d-none');
    					$("#file_label").addClass('d-none');
    				}
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
		$("#file_link").change(function() {
			$("#old_image").val('0');
			$("#new_image").val('uploaded');
		});

		$("#featured_image").change(function() {
			$("#old_featured_image").val('');
			$("#new_featured_image").val('uploaded');
		});

		function fileUploadChange(ele_id) {
			$(".multiple_uploaded").remove();
			$("#file_link_old_url_"+ele_id).val("");
			$("#file_type_edit_flag").val('1');
		}
		function fileImageUploadChange(ele_id) {
			$("#file_img_old_url_"+ele_id).val("");
			$("#file_type_edit_flag").val('1');
		}

		function multiFileChange() {
			$(".multiple_uploaded").remove();
		}

		$("#file_add_btn").click(function(){
			var file_count = $("#file_count").val();
			var new_file_count = parseInt(file_count) + 1;
			var file_html = '<div class="row file_section" id="file_section_'+new_file_count+'">'+
								'<div class="col-md-5">'+
									'<label class="form-label" for="file_link_'+new_file_count+'">File</label>'+
									'<input class="form-control" type="file" name="file_link_'+new_file_count+'" id="file_link_'+new_file_count+'">'+
									'<input type="hidden" name="file_link_old_url_'+new_file_count+'" id="file_link_old_url_'+new_file_count+'" value="">'+
								'</div>'+
								'<div class="col-md-5">'+
									'<label class="form-label" for="file_img_link_'+new_file_count+'">File Image</label>'+
									'<input class="form-control" type="file" name="file_img_link_'+new_file_count+'" id="file_img_link_'+new_file_count+'">'+
									'<input type="hidden" name="file_img_old_url_'+new_file_count+'" id="file_img_old_url_'+new_file_count+'" value="">'+
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

		$("#submit_btn").click(function() {
			if ($("#media_type").val() == '4') {
				var file_count = parseInt($("#file_count").val());
				var file_link_old_null = 0;
				var file_link_null = 0;

				$("#blog_form").submit();
				
				// for (var i=1; i <= file_count; i++) {
				// 	if ($("#file_img_old_url_"+i).val() == '' && $("#file_link_"+i).val() == '') {
				// 		$("#file_link_"+i).prop('required',true);

				// 		file_link_old_null = file_link_old_null + 1;
				// 		file_link_null = file_link_null + 1;
				// 	}
				// }

				// if (file_link_null == '0' && file_link_old_null == '0') {
				// 	$("#blog_form").submit();
				// }
			} else {
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
			}
			
		});
	</script>
</body>
</html>