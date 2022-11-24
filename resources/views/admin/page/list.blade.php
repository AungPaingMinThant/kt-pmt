@extends('layouts.app')

@section('title', 'Page List – AYA Bank')
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
			@include('layouts.nav', ['nav'=>'Page'])

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
												<td>Mobile Banking</td>
												<td></td>
												<td>
													<a href="{{ url('/admin/page/mbanking/edit') }}">
														<button type="button" class="btn btn-outline-primary">
                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
                           								</button>
                           							</a>
                       								<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_">
                          								<span class="tf-icons bx bx-trash"></span>&nbsp; 		
                       								</button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Internet Banking</td>
												<td></td>
												<td>
													<a href="{{ url('/admin/page/ibanking/edit') }}">
														<button type="button" class="btn btn-outline-primary">
                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
                           								</button>
                           							</a>
                       								<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_">
                          								<span class="tf-icons bx bx-trash"></span>&nbsp; 		
                       								</button>
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