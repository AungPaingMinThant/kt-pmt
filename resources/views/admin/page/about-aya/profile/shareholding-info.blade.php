<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Shareholding Information – AYA Bank Profile – Configuration – AYA Bank</title>

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
        .form-check-input:checked {
		    background-color: #A5000B;
		    border-color: #A5000B;
		}
    </style>

    <script src="{{ url('/js/helpers.js') }}"></script>
</head>
<body>
	@php
		$page_data = App\Models\AboutAYA\AyabankProfileShareholdingInfo::first();
		$page_data_table = App\Models\AboutAYA\AyabankProfileShareholdingInfoTable::get();
	@endphp

	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">	
			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'AYA Bank Profile', 'page'=>'aya_bank_profile'])
	        	<br>
				@include('layouts.admin_banner', ['page'=>'aya_bank_profile','mobilebanking'=>''])

				<div class="container sh_section">
					<div class="space-40"></div>
					<div class="row">
						<h4 class="fw-semibold">{!! $page_data->page_title !!} &nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_1_modal"></i></h4>
					</div>
					<div class="row">
						{!! $page_data->first_desc !!}
					</div>

					<div class="space-20"></div>
					

					<b>Edit Table</b> &nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#holding_table_modal"></i>
					<div class="row">
						<div class="table-responsive text-nowrap sh_table_div">
							<table class="table table-borderless sh_table">
								<thead>
									<tr valign="middle">
										<td class="f-white py-4 sh_first_td" width="250">Name</td>
										<td class="f-white sh_second_td">Board Member</td>
										<td class="f-white sh_third_td" style="text-align: right;">Holding %</td>
									</tr>
								</thead>
								<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
									@php $table_count = 1; @endphp
									@foreach($page_data_table as $p_table)
										<tr>
											@if($table_count == 1)
												<td class="sh_first_td b-t-l-radius-10 ">{{$p_table->shareholding_name}}</td>
											@else
												<td class="sh_first_td">{{$p_table->shareholding_name}}</td>
											@endif
											<td class="sh_second_td">
												@if($p_table->shareholding_board == '0')
													<i class='bx bx-check' style="font-size: 25px;"></i>
												@endif
											</td>
											@if($table_count == 1)
												<td class="sh_third_td b-t-r-radius-10">{{$p_table->shareholding_percent}}</td>
											@else
												<td class="sh_third_td">{{$p_table->shareholding_percent}}</td>
											@endif
										</tr>
										@php $table_count = $table_count + 1; @endphp
									@endforeach
									<tr>
										<td class="sh_first_td py-3" colspan="2" style="border-top: 1px solid #ccc;"><b>Total</b></td>
										<td class="sh_third_td" style="border-top: 1px solid #ccc;"><b>100 %</b></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="space-40"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="section_1_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/shareholding-info/section1/update') }}" method="POST" enctype="multipart/form-data">
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

	<div class="modal fade" id="holding_table_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/shareholding-info/holding_table/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<input type="hidden" name="holding_table_count" id="holding_table_count" value="{{ count($page_data_table) }}">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Holding Table Update</h4>
								@php $holdin = 1; @endphp
								@foreach($page_data_table as $p_table)
									<input type="hidden" class="form-control" id="shareholding_table_id_{{$holdin}}" name="shareholding_table_id_{{$holdin}}" value="{{$p_table->id}}">
									<div class="col-md-4" style="margin-bottom: 10px;">
										<label for="shareholding_name_{{$holdin}}" class="col-form-label">Name</label>
										<input type="text" class="form-control" id="shareholding_name_{{$holdin}}" name="shareholding_name_{{$holdin}}" value="{{$p_table->shareholding_name}}">
									</div>
									<div class="col-md-4" style="margin-bottom: 10px;">
										<label for="shareholding_board_{{$holdin}}" class="col-form-label">Board Member <small style="color: #777">&nbsp;&nbsp;(Checked : yes)</small></label><Br>

										@if($p_table->shareholding_board == '0')
											@php $board_check = 'checked'; @endphp
										@else
											@php $board_check = ''; @endphp
										@endif

										<input class="form-check-input" type="checkbox" name="shareholding_board_{{$holdin}}" id="shareholding_board_{{$holdin}}" {{$board_check}} />

									</div>
									<div class="col-md-4" style="margin-bottom: 10px;">
										<label for="shareholding_percent_{{$holdin}}" class="col-form-label">Holding %</label>
										<input type="text" class="form-control" id="shareholding_percent_{{$holdin}}" name="shareholding_percent_{{$holdin}}" value="{{$p_table->shareholding_percent}}">
									</div>
									@php $holdin = $holdin + 1; @endphp
								@endforeach
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
		tinymce.init({
	        selector: 'textarea#first_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });	    
	</script>
</body>
</html>