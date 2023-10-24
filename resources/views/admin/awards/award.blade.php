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
		@include('layouts.admin_sidebar', ['page'=>'Award'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Awards', 'page'=>'Award'])

			<div class="container section_1">
				<div class="space-40"></div>
			
				<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
					    @if(auth()->user()->name != 'AYA Bank Admin')
    						<div class="col-12 text-right">
    							<a href="{{ url('/admin/awards/awardadd') }}">
    								<button type="button" class="btn  btn-outline-primary flr" data-bs-toggle="modal" data-bs-target="#add_modal">Add</button>
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
												<th>Years</th>
												<th>Award Title</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $award_count=1; @endphp
											@foreach($award_list as $award)
												<tr>
													<td>{{ $award_count }}</td>
													<td>{{ $award->year_id }}</td>
													<td>{{ $award->award_title }}</td>
													<td>{{ $award->award_text }}</td>
													<td>
														<a href="{{ url('/admin/awards/edit/'. $award->id)}}">
															<button type="button" class="btn btn-outline-primary">
																<span class="tf-icons bx bx-pencil"></span>&nbsp;
															</button>
														</a>
															<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$award->id}}">
																<span class="tf-icons bx bx-trash"></span>&nbsp; 		
															</button>
										
														<div class="modal fade" id="backDropModal_{{$award->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('/admin/awards/delete') }}" method="post">
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
																				value="{{$award->id}}"
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
												$award_count = $award_count+1;
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
