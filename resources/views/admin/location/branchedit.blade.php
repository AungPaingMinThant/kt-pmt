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
										<form class="mb-3" action="{{ url('/admin/location/branch-location/update') }}" method="POST" id="branch_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/location/branch-location') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<input type="hidden" name="branch_id" value="{{$branch_data->id}}">
                                            <div class="mb-3">
												<label class="form-label" for="region">Region</label>
												<input type="text" class="form-control" name="region" id="region" value="{!! $branch_data->region !!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="branch_name">Branch Name</label>
												<input type="text" class="form-control" name="branch_name" id="branch_name" value="{!! $branch_data->name !!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="address">Address</label>
												<input type="text" class="form-control" name="list_address" id="address" value="{!! $branch_data->list_address !!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="contact">Contact No</label>
												<input type="text" class="form-control" name="telephone" id="contact" value="{!! $branch_data->telephone !!}">
											</div>
                                            <div class="mb-3">
												<label class="form-label" for="fax">Fax No</label>
												<input type="text" class="form-control" name="fax" id="fax" value="{!! $branch_data->fax !!}">
											</div>
			
											<button type="submit" class="btn btn-primary" id="submit_btn">Update</button>
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

		

	</script>
</body>
</html>