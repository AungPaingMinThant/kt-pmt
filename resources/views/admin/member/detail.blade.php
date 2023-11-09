@extends('layouts.app')

@section('title', 'Member List – Khit Thit')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'MemberList'])

			<div class="layout-page" style="background-color:#fff">
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
							<br><br><br><br><br><br>
							<h5>Point History</h5>
							<div class="col-xl">
								<div class="card mb-1">
									<div class="card-body_detail">
										<form class="mb-3" action="{{ url('/admin/member/edit/{member_id}') }}" method="POST" id="fx_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<div class="col-12">
												<div class="row mb-3">
													<div class="col-md-1">
														<label for="employee_id" class="form-label">Date</label>		
													</div>
													<div class="col-md-1">
														<label for="name" class="form-label">Point in</label>
													</div>
													<div class="col-md-1">
														<label for="phone" class="form-label">Redeem</label>
													</div>
													<div class="col-md-1">
														<label for="member_point" class="form-label">Member ID</label>
													</div>
												</div>
												@foreach($point_list as $point)
													<div class="row mb-3 border-9">
														<div class="col-md-1">
															<div>{!! date('M-j-Y', strtotime($point->created_at)) !!}</div>
														</div>
														<div class="col-md-1">
															<div>+{!! $point->point_in !!}</div>
														</div>
														<div class="col-md-1">
															<div>-{!! $point->redeem !!}</div>
														</div>
														<div class="col-md-1">
															<div>{!! $point->employee_id !!}&nbsp;</div>
														</div>
													</div>
												@endforeach
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
@endsection('content')
