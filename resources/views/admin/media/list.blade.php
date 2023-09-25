@extends('layouts.app')

@section('title', 'Upload Media List – AYA Bank')

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
		@include('layouts.admin_sidebar', ['page'=>'Media'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Media List'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/media/upload') }}">
								<button type="button" class="btn  btn-outline-primary flr">Upload Media</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table fw-light text-center">
										<thead>
											<tr>
												<th width="5" rowspan="2" valign="middle">No</th>
												<th colspan="2" class="text-center">USD</th>
												<th colspan="2" class="text-center">EURO</th>
												<th colspan="2" class="text-center">SGD</th>
												<th rowspan="2" valign="middle">Updated Date</th>
												<th rowspan="2" valign="middle">Updated User</th>
											</tr>
											<tr>
												<th>BUYING</th>
												<th>SELLING</th>
												<th>BUYING</th>
												<th>SELLING</th>
												<th>BUYING</th>
												<th>SELLING</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $fx_count = 1; @endphp
											
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