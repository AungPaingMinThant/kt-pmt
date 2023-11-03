@extends('layouts.app')

@section('title', 'Locations – Branch Location - AYA Bank')
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
			@include('layouts.nav', ['nav'=>'Branch Locations', 'page'=>'Location'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
					    @if(auth()->user()->name != 'AYA Bank Admin')
    						<div class="col-12 text-right">
    							<a href="{{ url('/admin/location/branchadd') }}">
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
												<th>Branch Name</th>
												<th>Address</th>
												<th>Contact No</th>
                                                <th>Fax No</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $branch_count=1; @endphp
											@foreach($branch_list as $branch)
												<tr>
													<td>{{ $branch_count }}</td>
													<td>{{ $branch->region }}</td>
													<td>{{ $branch->name }}</td>
													<td>{{ $branch->list_address }}</td>
													<td>
														{{ str_replace(",",", ",$branch->telephone) }}
													</td>
													<td>
														{{ str_replace(",",", ",$branch->fax) }}
													</td>
													<td>
														<a href="{{ url('/admin/location/branch-location/edit/' . $branch->id )}}">
															<button type="button" class="btn btn-outline-primary">
																<span class="tf-icons bx bx-pencil"></span>&nbsp;
															</button>
														</a>
													
															<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$branch->id}}">
																<span class="tf-icons bx bx-trash"></span>&nbsp; 		
															 </button>
														
														<div class="modal fade" id="backDropModal_{{$branch->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('/admin/location/branch-location/delete') }}" method="post">
																	{{ csrf_field() }}
																	<div class="modal-header">					
																		<button type="button"
																		class="btn-close"
																		data-bs-dismiss="modal"
																		aria-label="Close"
																		></button>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this branch location?</h5>
																			<div class="col mb-3">
																				<input
																				type="hidden"
																				name="branch_id"
																				class="form-control"
																				value="{{$branch->id}}"
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
												$branch_count = $branch_count+1;
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
