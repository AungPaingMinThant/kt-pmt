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
			@include('layouts.admin_sidebar', ['page'=>'Redeem'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'View Redeem', 'page'=>'Redeem'])
				<div class="content-wrapper" style="background-color:#fff">
					<div class="container-xxl flex-grow-1 container-p-y">
						<a href="{{ url('admin/addpoints') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> << Back to list</label></a>
						<br><br>
						<div class="border border-9">
							<div class="row">
								<form id="formAuthentication" class="mb-3" action="{{ url('/admin/addpoints/redeempoint/') }}" method="POST">
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
									</div>
                                    <div class="row mb-3">
										<div class="col-md-3">
											<label for="name" class="form-label">Total Expensed Amount</label>
											<input type="text" class="form-control_create" id="name" name="name" placeholder="100000.00"/>
										</div>
									</div>
                                    <div class="row mb-3">
										<div class="col-md-3">
											<label for="name" class="form-label">Point By Expensed Amount</label>
										</div>
                                        <div class="col-md-3">
                                            <p>{!! $member_list->member_point !!}&nbsp;Pts</p>
                                        </div>
									</div>
									<br>
									<div class="mb-4">
										<a href="{{ url('/admin/addpoints/pointAdd/') }}">
											<button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin-left: 20px">Add Point</button>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')