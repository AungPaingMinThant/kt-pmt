@extends('layouts.app')

@section('title', 'Redeem – Khit Thit')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'Redeem'])

			<div class="layout-page" style="background-color: #fff">
				@include('layouts.nav', ['nav'=>'View Redeem', 'page'=>'Redeem'])
				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<a href="{{ url('admin/addpoints') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> << Back to list</label></a>
						<br><br>
						<div class="border border-9">
							<div class="row">
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
								<form id="formAuthentication" class="mb-3" action="{{ url('/admin/redeem/pointRedeem/') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="employee_id" value="{{ $member_list->employee_id }}">
									<div class="row mb-3">
										<div class="col-md-3">
											<label for="redeem" class="form-label">Total Redeem Points</label>
											<input type="text" class="form-control_create" id="redeem" name="redeem" placeholder=""/>
										</div>
									</div>
									<br>
									<div class="mb-4">
										<button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin-left: 20px">Redeem Point</button>
									</div>
								</form>
							</div>
						</div><br><br>
						<div class="border-8">
							<div class="row">
								{{-- <h1>Point add successfully</h1> --}}
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="text" data-bs-toggle="dropdown" aria-expanded="false">
									  Dropdown button
									</button>
									<ul class="dropdown-menu">
									  <li><a class="dropdown-item" href="#">Action</a></li>
									  <li><a class="dropdown-item" href="#">Another action</a></li>
									  <li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
								  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection('content')