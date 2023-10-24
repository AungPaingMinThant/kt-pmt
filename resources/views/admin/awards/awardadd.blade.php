<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Add Branch Location – AYA Bank</title>

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
			@include('layouts.admin_sidebar', ['page'=>'Award'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Add Awards', 'page'=>'Award'])

                    <div class="layout-wrapper layout-content-navbar">
                        <div class="layout-container">
                            
                                <div class="content-wrapper">
                                    <div class="container-xxl flex-grow-1 container-p-y">
                                        <div class="row">
                                            <div class="col-xl">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <form class="mb-3" action="{{ url('/admin/awards/insert') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
                                                            {{ csrf_field() }}
                                                            <a href="{{ url('/admin/awards') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="region">Years</label>
                                                                <select class="form-select" name="blog_category" id="blog_category" aria-label="Blog Category">
                                                                    @for ($year = 2013; $year <= 2030; $year++)
                                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="award_title">Award Title</label>
                                                                <input type="text" class="form-control" name="award_title" id="award_title">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="award_text">Award Text</label>
                                                                <input type="text" class="form-control" name="award_text" id="award_text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="contact">Award Images</label>
                                                                <input class="form-control" type="file" name="cta_section_2_img" id="cta_section_2_img" />
                                                                <input type="hidden" name="award_img_old" id="award_img_old">
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
		$("#draft_btn").click(function() {
			$("#status").val('1');
			$("#submit_btn").click();
		});
	</script>
</body>
</html>