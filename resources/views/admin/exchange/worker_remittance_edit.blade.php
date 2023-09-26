@extends('layouts.app')

@section('title', 'Worker Remittance List – AYA Bank')

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
		@include('layouts.admin_sidebar', ['page'=>'Exchange'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Worker Remittance List', 'page'=>'Page'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-xl">
							<div class="card mb-4">
								<div class="card-body">
									<form class="mb-3" action="{{ url('/admin/worker-remittance/store') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
										{{ csrf_field() }}
										<a href="{{ url('/admin/exchange-rate') }}" class="mb-3" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
										<div class="row">
											<div class="col-md-12 mb-3">
												<div class="row">
													<div class="col-md-6">
														<h4>USD</h4>
														<div class="mb-3">
															<input type="text" class="form-control" name="USD_rate" id="USD_rate" placeholder="Buying" value="{{$worker_remittance->USD}}" required />
														</div>
													</div>
													<div class="col-md-6">
														<h4>MMK</h4>
														<div class="mb-3">
															<input type="text" class="form-control" name="MMK_rate" id="MMK_rate" placeholder="Buying" value="{{$worker_remittance->MMK}}" required />
														</div>
													</div>
												</div>
											</div>
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

@endsection('content')