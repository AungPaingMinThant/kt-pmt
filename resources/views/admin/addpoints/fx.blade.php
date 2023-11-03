@extends('layouts.app')

@section('title', 'Locations – FX Counter Location - AYA Bank')
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
			@include('layouts.nav', ['nav'=>'FX Counter Locations', 'page'=>'Location'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
					    @if(auth()->user()->name != 'AYA Bank Admin')
    						<div class="col-12 text-right">
    							<a href="{{ url('/admin/location/fxadd') }}">
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
												<th>City</th>
												<th>Branch/Location</th>
												<th>Address</th>
                                                <th>Business Hours</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $fx_count=1; @endphp
											@foreach($fx_list as $fx)
												<tr>
													<td>{{ $fx_count }}</td>
													<td>{{ $fx->region }}</td>
													<td>{{ $fx->township }}</td>
													<td>{{ $fx->name }}</td>
                                                    <td>{{ $fx->list_address }}</td>
                                                    <td>{{ $fx->openinghour}}</td>
													<td>
														<a href="{{ url('/admin/location/fx-location/edit/'. $fx->id) }}">
															<button type="button" class="btn btn-outline-primary">
																<span class="tf-icons bx bx-pencil"></span>&nbsp;
															</button>
														</a>
															<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$fx->id}}">
																<span class="tf-icons bx bx-trash"></span>&nbsp; 		
															 </button>
														<div class="modal fade" id="backDropModal_{{$fx->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('/admin/location/fx-location/delete') }}" method="post">
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
																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this FX counter location?</h5>
																			<div class="col mb-3">
																				<input
																				type="hidden"
																				name="fx_id"
																				class="form-control"
																				value="{{$fx->id}}"
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
												$fx_count = $fx_count+1;
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
