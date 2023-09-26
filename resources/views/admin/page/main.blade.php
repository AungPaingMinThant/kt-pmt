@extends('layouts.app')

@section('title', 'Main Page List – AYA Bank')
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
		@include('layouts.admin_sidebar', ['page'=>'Page'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Page List'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<!-- <div class="col-12 text-right">
							<a href="{{ url('/admin/report/add') }}">
								<button type="button" class="btn  btn-outline-primary flr">Add</button>
							</a>
						</div> -->
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Page Name</th>
												<th>Update Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<tr>
												<td>1</td>
												<td>About AYA</td>
												<td></td>
												<td>
													<a href="{{ url('/admin/pagelist/about-aya') }}">
														<button type="button" class="btn btn-outline-primary">
                              								<span class="tf-icons bx bx-right-arrow-alt"></span>&nbsp; 		
                           								</button>
                           							</a>
												</td>
											</tr>
										</tbody>
									</table>
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