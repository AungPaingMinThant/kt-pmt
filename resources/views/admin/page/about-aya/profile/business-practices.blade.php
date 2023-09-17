<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Business Practices – AYA Bank Profile – Configuration – AYA Bank</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{url('/fonts/Pyidaungsu-1.8_Regular.ttf')}}">
    <link href="{{url('/fonts/Sora-Regular.ttf')}}">

    <style type="text/css">
        @font-face {
            font-family: 'Pyidaungsu';
            font-style: normal;
            src: url('/fonts/Pyidaungsu-1.8_Regular.ttf');
        }
        @font-face {
            font-family: 'W35Art House';
            font-style: normal;
            src: url('/fonts/W35Art House.TTF');
        }
        @font-face {
            font-family: 'Sora';
            font-style: normal;
            src: url('/fonts/Sora-Regular.ttf');
        }
        html, body, table{
            font-family: 'Sora', sans-serif;
            background-color: #ffffff;
            font-size: 14px;
            color: #2e2e2e !important;
        }
        h1 {
            font-family: 'Sora', sans-serif;
        }
        .prevent-select {
            -webkit-user-select: none; /* Safari */
            -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */
        }
        img {
            pointer-events: none;
        }
        label {
        	text-transform: none !important;
        }
        .menu > .nav-item {            
            text-transform: uppercase !important;
            color: #222222 !important;
        }
        .menu > .nav-item:hover {
            color: #A5000B !important;
        }
        .menu > .nav-item.active > a {
            color: #A5000B !important;
        }
        .why_use_AYA{
            background-color: #fff;
            border: 1px solid #dedede;
            border-radius: 10px;
            padding: 20px 20px;
            cursor: pointer;
        }
        .why_use_AYA:hover{
            cursor: pointer;  
            -webkit-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
            -moz-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
            box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
            border: 1px solid #fff;
        }
        .mb20 {
            margin-bottom: 20px;
        }
        .space-6 {
            height: 6px;
        }
        .space-10 {
            height: 10px;
        } 
        .space-20 {
            height: 20px;
        }  
        .space-29 {
            height: 29px;
        }
        .space-30 {
            height: 30px;
        }
        .space-33 {
            height: 33px;
        }
        .space-40 {
            height: 40px;
        }
        .space-50 {
            height: 50px;
        }
        .space-60 {
            height: 60px;
        }
        .space-80 {
            height: 80px;
        }
        .space-86 {
            height: 86px;
        }
        .space-90 {
            height: 90px;
        }
        .space-100 {
            height: 100px;
        }
        .secure_req_application_icon {
            background-color: #A5000B;
            color: #fff;
            border-radius: 50%;
            font-size: 20px;
        }
        .tox-statusbar__branding {
        	display: none !important;
        }
        .page_edit_icon {
        	font-size: 18px;
		    line-height: 18px;
		    cursor: pointer;
		    border: 1px solid #2e2e2e;
		    padding: 10px;
		    border-radius: 50%;
		    color: #2e2e2e;
        }
        .page_edit_icon_red {
        	border: 1px solid #fff;
        	color: #fff;
        }
        .page_edit_icon:hover {
        	background-color: #2e2e2e80;
        	color: #fff;
        }
        .page_edit_icon_red:hover {
        	border: 1px solid #fff;
        	background-color: #fff;
        	color: #a02226;
        }
    </style>

    <script src="{{ url('/js/helpers.js') }}"></script>
</head>
<body>
	@php
		$page_data = App\Models\AboutAYA\AyabankProfileBusinessPractices::first();
	@endphp

	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">	
			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'AYA Bank Profile'])
	        	<br>
				@include('layouts.admin_banner', ['page'=>'aya_bank_profile','mobilebanking'=>''])

				<div class="container section_1" >
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-semibold">{!! $page_data->page_title !!} &nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_1_modal"></i></h4>
						</div>
					</div>
					<div class="row">
						{!! $page_data->first_desc !!}
					</div>
				</div>

				<div class="space-60"></div>

				<div class="">
					<div class="container section_1">
						<div class="row">
							@php $cta_section_1_img_link =  URL::to('/').'/'.$page_data->cta_section_1_img; @endphp
							<div class="col-md-4 CTA_business_practice_detail_col_1" style="background-image:url('{{$cta_section_1_img_link}}')"></div>
							<div class="col-md-8 CTA_business_practice_detail_col_2">
								<p class="theme_text_color" style="font-size: 20px;">
									{!! $page_data->cta_section_1_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#CTA_1_modal"></i>
								</p>
								{!! $page_data->cta_section_1_desc !!}
								<div class="space-20">
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="CTA_div responsible_CTA">
					<div class="container section_1">
						@php $cta_section_2_img_link =  URL::to('/').'/'.$page_data->cta_section_2_img; @endphp
						<div class="row">
							<div class="col-md-8 sh_CTA_detail_col_2">
								<p class="f-white" style="font-size: 20px;">
									{!! $page_data->cta_section_2_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon page_edit_icon_red" data-bs-toggle="modal" data-bs-target="#CTA_2_modal"></i>
								</p>
								{!! $page_data->cta_section_2_desc !!}
							</div>
							<div class="col-md-4 sh_CTA_detail_col_1" style="background-image:url('{{$cta_section_2_img_link}}')"></div>
						</div>
					</div>
				</div>

				<div class="space-80"></div>

				<div class="transparent_CTA">
					<div class="container section_1">
						@php $cta_section_3_img_link =  URL::to('/').'/'.$page_data->cta_section_3_img; @endphp
						<div class="row">
							<div class="col-md-4 CTA_transparent_marketing_detail_col_1" style="background-image:url('{{$cta_section_3_img_link}}')"></div>
							<div class="col-md-8 CTA_transparent_marketing_detail_col_2">
								<p class="theme_text_color" style="font-size: 20px;">
									{!! $page_data->cta_section_3_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#CTA_3_modal"></i>
								</p>
								{!! $page_data->cta_section_3_desc !!}
								<div class="space-20">
							</div>
						</div>
					</div>
				</div>
				

				<div class="space-40"></div>
				@php $cta_section_4_img_link =  URL::to('/').'/'.$page_data->cta_section_4_img; @endphp
				<div class="CTA_financial_div" style="background-image:url('{{$cta_section_4_img_link}}')">
					<div class="financial_red_bg">
						<div class="container">
							<div class="row">
								<div class="col-md-8 CTA_financial_detail_col_2">
									<p class="f-white" style="font-size: 20px;">
										{!! $page_data->cta_section_4_title !!}
										&nbsp; <i class="bx bx-pencil page_edit_icon page_edit_icon_red" data-bs-toggle="modal" data-bs-target="#CTA_4_modal"></i>
									</p>
									{!! $page_data->cta_section_4_desc !!}
								</div>
								<div class="col-md-4 "></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="section_1_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business-practies/section1/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="page_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="page_title" name="page_title" value="{{$page_data->page_title}}">
									
									<div class="space-20"></div>
									
									<label for="first_desc" class="col-form-label">Section Information</label>
									<textarea class="form-control" id="first_desc" name="first_desc" rows="10" spellcheck="false" >{{$page_data->first_desc}}</textarea>
								</div>

								<div class="space-20"></div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="CTA_1_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business-practies/CTA_1/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_1_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_1_title" name="cta_section_1_title" value="{{$page_data->cta_section_1_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_1_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_1_img" id="cta_section_1_img" />
									<input type="hidden" name="cta_section_1_img_old" id="cta_section_1_img_old" value="{{$page_data->cta_section_1_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_1_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_1_desc" name="cta_section_1_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_1_desc!!}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="CTA_2_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business-practies/CTA_2/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_2_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_2_title" name="cta_section_2_title" value="{{$page_data->cta_section_2_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_2_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_2_img" id="cta_section_2_img" />
									<input type="hidden" name="cta_section_2_img_old" id="cta_section_2_img_old" value="{{$page_data->cta_section_2_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_2_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_2_desc" name="cta_section_2_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_2_desc!!}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="CTA_3_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business-practies/CTA_3/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_3_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_3_title" name="cta_section_3_title" value="{{$page_data->cta_section_3_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_3_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_3_img" id="cta_section_3_img" />
									<input type="hidden" name="cta_section_3_img_old" id="cta_section_3_img_old" value="{{$page_data->cta_section_3_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_3_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_3_desc" name="cta_section_3_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_3_desc!!}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="CTA_4_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business-practies/CTA_4/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_4_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_4_title" name="cta_section_4_title" value="{{$page_data->cta_section_4_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_4_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_4_img" id="cta_section_4_img" />
									<input type="hidden" name="cta_section_4_img_old" id="cta_section_4_img_old" value="{{$page_data->cta_section_4_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_4_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_4_desc" name="cta_section_4_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_4_desc!!}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>

	@include('layouts.admin-footer', ['page'=>''])

	<script type="text/javascript">
		$("#cta_section_1_img").change(function() {
			$("#cta_section_1_img_old").val('');
		});

		$("#cta_section_2_img").change(function() {
			$("#cta_section_2_img_old").val('');
		});

		$("#cta_section_3_img").change(function() {
			$("#cta_section_3_img_old").val('');
		});

		$("#cta_section_4_img").change(function() {
			$("#cta_section_4_img_old").val('');
		});

		tinymce.init({
	        selector: 'textarea#first_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#cta_section_1_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#cta_section_2_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#cta_section_3_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#cta_section_4_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });
	    
	</script>
</body>
</html>