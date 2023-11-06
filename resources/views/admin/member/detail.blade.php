<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Edit Member List – Khit Thit</title>

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
			@include('layouts.admin_sidebar', ['page'=>'MemberList'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Member Detail', 'page'=>'MemberList'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<a href="{{ url('admin/member') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> << Back to list</label></a>
							<div class="space-10"></div>
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
								<div class="col-md-2">
									<a href="{{ url('/admin/member/edit/'. $member_list->id)}}">
										<button type="button" class="btn btn-outline-primary_list">
											Edit
										</button>
									</a>
								</div>
							</div>	
							<br><br><br>
							<h4>Point History</h4>
							<div class="col-xl">
								<div class="card mb-3">
									<div class="card-body_detail">
										<form class="mb-3" action="{{ url('/admin/member/edit/{member_id}') }}" method="POST" id="fx_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<div class="col-12">
												<div class="card mt-3">
													<div class="table-responsive text-nowrap">
														<table class="table">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Point in</th>
																	<th>Redeem</th>
																	<th>Member_id</th>
																</tr>
															</thead>
															
															{{-- <tbody class="table-border-bottom-0">
																@php $member_count=1; @endphp
																@foreach($member_list as $member)
																	<tr>
																		<td>{{ $member_count }}</td>
																		<td>{{ $member->name }}</td>
																		<td>{{ $member->created_at }}</td>
																		<td>{{ $member->member_point }}</td>

																	</tr>
																@php
																	$member_count = $member_count+1;
																@endphp
																@endforeach
															</tbody> --}}
														</table>
													</div>
												</div>
											</div>
											{{-- <div class="row mb-3">
												<div class="col-md-2">
													<label for="employee_id" class="form-label">Date</label>
													<div>{!! $member_list->employee_id !!}</div>
												</div>&nbsp;&nbsp;&nbsp;
												<div class="col-md-2">
													<label for="name" class="form-label">Point in</label>
													<div>{!! $member_list->name !!}</div>
												</div>&nbsp;&nbsp;&nbsp;
												<div class="col-md-2">
													<label for="phone" class="form-label">Redeem</label>
													<div>{!! $member_list->phone !!}</div>
												</div>&nbsp;&nbsp;&nbsp;
												<div class="col-md-2">
													<label for="member_point" class="form-label">Member ID</label>
													<div>{!! $member_list->member_point !!}&nbsp;Pts</div>
												</div>
											</div>	 --}}
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