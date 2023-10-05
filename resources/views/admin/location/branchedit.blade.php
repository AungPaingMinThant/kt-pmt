<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Edit Branch Location – AYA Bank</title>

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
			@include('layouts.admin_sidebar', ['page'=>'Location'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Edit Branch Location', 'page'=>'Location'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/location/branch-location') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/location/branch-location') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<input type="hidden" name="blog_id" value="{{$branch_data->id}}">
											<div class="mb-3">
												<label class="form-label" for="blog_title">Region</label>
												<input type="text" class="form-control" name="blog_title" id="blog_title" value="{!! $branch_data->blog_title !!}" placeholder="Blog Title" required />
											</div>

                                            <div class="mb-3">
												<label class="form-label" for="region">Region</label>
												<input type="text" class="form-control" name="region" id="region" value="{!! $branch_data->region !!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="branch_name">Branch Name</label>
												<input type="text" class="form-control" name="branch_name" id="branch_name" value="{!! $branch_data->name!!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="address">Address</label>
												<input type="text" class="form-control" name="address" id="address" value="{!! $branch_data->address!!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="contact">Contact No</label>
												<input type="text" class="form-control" name="contact" id="contact" value="{!! $branch_data->telephone!!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="fax">Fax No</label>
												<input type="text" class="form-control" name="fax" id="fax" value="{!! $branch_data->fax!!}">
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