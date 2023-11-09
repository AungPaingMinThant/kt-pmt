@extends('layouts.app')

@section('title', 'Export – Khit Thit')
<style type="text/css">
	.flr {
		float: right;
	}
	.table {
		color: #566a7f !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Export'])

		<div class="layout-page" style="background-color: #fff">
			@include('layouts.nav', ['nav'=>'Export', 'page'=>'Page'])
			<br>
			<div class="content-wrapper" style="background-color:#fff">
				<div class="container-xxl flex-grow-1 container-p-y">
					
					<br>
					<div class="border border-9">
						<div class="row">
							<form id="formAuthentication" class="mb-3" action="{{ url('/admin/export') }}" method="POST">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="from_date" class="form-label">Export From Date</label>
										<input type="date" class="form-control_create" id="from_date" name="from_date" placeholder="Select a date">
									</div>
									<div class="col-md-3">
										<label for="to_date" class="form-label">Export To Date</label>
										<input type="date" class="form-control_create" id="to_date" name="to_date" placeholder="Select a date">
									</div>
								</div>
									<div class="mb-3">
                                        <button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin: -58 0 0 488px;">Export</button> 
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

@endsection('content')