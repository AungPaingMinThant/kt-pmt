<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Add Points – Khit Thit</title>

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
			@include('layouts.admin_sidebar', ['page'=>'AddPoint'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Add Point', 'page'=>'AddPoint'])
				<div class="content-wrapper" style="background-color:#fff">
					<div class="container-xxl flex-grow-1 container-p-y">
						<a href="{{ url('admin/addpoints') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> << Back to list</label></a>
						<br><br>
						<div class="border border-9">
							<div class="row">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-2">
										<label for="employee_id" class="form-label">Employee ID</label>
										<div>{!! $member_list->employee_id !!}</div>
									</div>&nbsp;&nbsp;&nbsp;
									<div class="col-md-2">
										<label for="name" class="form-label">Name</label>
										<div>{!! $member_list->name !!}</div>
									</div>&nbsp;&nbsp;&nbsp;
									<div class="col-md-2">
										<label for="phone" class="form-label">Phone</label>
										<div>{!! $member_list->phone !!}</div>
									</div>&nbsp;&nbsp;&nbsp;
									<div class="col-md-2">
										<label for="member_point" class="form-label">Total Points</label>
										<div>{!! $member_list->member_point !!}&nbsp;Pts</div>
									</div>
								</div>
								<form id="formAuthentication" class="mb-3" action="{{ url('/admin/addpoints/pointAdd/') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="employee_id" value="{{ $member_list->employee_id }}">
									<div class="row mb-3">
										<div class="col-md-3">
											<label for="amount" class="form-label">Total Expensed Amount</label>
											<input type="text" class="form-control_create" id="amount" name="amount" placeholder="100000.00"/>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-3">
											<label for="name" class="form-label">Point By Expensed Amount</label>
										</div>
										<div class="col-md-3">
											<div class="addpoint" id="memberPoints" name="memberpoint">0&nbsp;Pts</div>
										</div>
									</div>
									<br>
									<div class="mb-4">
										<button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin-left: 20px">Add Point</button>
									</div>
								</form>
							</div>
						</div><br><br>
						<div class="border-8">
							<div class="row">
								{{-- <h1>Point add successfully</h1> --}}
								{{-- <div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="text" data-bs-toggle="dropdown" aria-expanded="false">
									  Dropdown button
									</button> --}}
									<div class="col-xl">
										<div class="card-body_detail">
											<form class="mb-3" action="{{ url('/admin/member/edit/{member_id}') }}" method="POST" id="fx_form" enctype="multipart/form-data" >
												{{ csrf_field() }}
												<div class="col-12">
													<div class="row mb-3">
														<div class="col-md-2">
															<label for="employee_id" class="form-label">Date</label>
															
														</div>
														<div class="col-md-2">
															<label for="name" class="form-label">Point in</label>
														
														</div>
														<div class="col-md-2">
															<label for="phone" class="form-label">Redeem</label>
														
														</div>
														<div class="col-md-2">
															<label for="member_point" class="form-label">Member ID</label>
														
														</div>
													</div>
													
													</div>
												</div>	
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
		$("#amount").keyup(function(){
			var amount = parseInt($("#amount").val());
			if(amount >= 5000){
				var point_gain = parseInt(amount/5000);
				$("#memberPoints").text('+' + point_gain + ' Pt');
			} else {
				$("#memberPoints").text('0 Pt');
			}
		});
	</script>
</body>
</html>