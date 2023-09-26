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
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/worker-remittance-rate/edit') }}">
								<button type="button" class="btn  btn-outline-primary flr">Update Worker Remittance Rate</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table fw-light text-center">
										<thead>
											<tr>
												<th>No</th>
												<th>USD</th>
												<th>MMK</th>
												<th>Updated Date</th>
												<th>Updated User</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $fx_count = 1; @endphp
											@foreach($worker_remittance as $worker)
												<?php
													$user_name = App\Models\User::where('id',$worker->updated_by)->first();
												?>
												<tr>
													<td>{{$fx_count}}</td>
													<td>{{$worker->USD}}</td>
													<td>{{$worker->MMK}}</td>
													<td><?php  echo date('j<\s\up>S</\s\up> M y  H:i:s', strtotime($worker->updated_at)); ?></td>
													<td>{{ $user_name->name }}</td>
												</tr>
												@php $fx_count = $fx_count + 1; @endphp
											@endforeach
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