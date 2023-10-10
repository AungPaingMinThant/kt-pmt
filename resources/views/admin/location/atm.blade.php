@extends('layouts.app')

@section('title', 'Locations – ATM Location - AYA Bank')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')

<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Location'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Atm Locations', 'page'=>'Location'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
					    @if(auth()->user()->name != 'AYA Bank Admin')
    						<div class="col-12 text-right">
    							<a href="{{ url('/admin/location/atmadd') }}">
    								<button type="button" class="btn  btn-outline-primary flr">Add</button>
    							</a>
    						</div>
    					@endif
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Region</th>
												<th>Township</th>
												<th>Location/Branch</th>
												<th>Address</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $atm_count=1; @endphp
											@foreach($atm_list as $atm)
												<tr>
													<td>{{ $atm_count }}</td>
													<td>{{ $atm->region }}</td>
													<td>{{ $atm->township }}</td>
													<td>{{ $atm->name }}</td>
													<td>{{ $atm->list_address }}</td>
													<td>
														<a href="{{ url('/admin/location/atm-location/edit/'. $atm->id)}}">
															<button type="button" class="btn btn-outline-primary">
																<span class="tf-icons bx bx-pencil"></span>&nbsp;
															</button>
															<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$atm->id}}">
																<span class="tf-icons bx bx-trash"></span>&nbsp; 		
															</button>
														</a>
															
														
														<div class="modal fade" id="backDropModal_{{$atm->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('/admin/location/atm-location/delete') }}" method="post">
																	{{ csrf_field() }}
																	<div class="modal-header">					
																		<button
																		type="button"
																		class="btn-close"
																		data-bs-dismiss="modal"
																		aria-label="Close"
																		></button>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this ATM Location?</h5>
																			<div class="col mb-3">
																				<input
																				type="hidden"
																				name="atm_id"
																				class="form-control"
																				value="{{$atm->id}}"
																				/>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
																		Close
																		</button>
																		<button type="submit" class="btn btn-primary">Delete</button>
																	</div>
																</form>
															</div>
														</div>
													</td>
												</tr>
											@php
												$atm_count = $atm_count+1;
											@endphp
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
