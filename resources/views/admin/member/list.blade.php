@extends('layouts.app')

@section('title', 'Member List – Khit Thit')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'MemberList'])

		<div class="layout-page" style="background-color:#fff">
			@include('layouts.nav', ['nav'=>'Member List', 'page'=>'Page'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					
					<div class="row">
						<div class="col-12 text-right">
							<label class="" for="show_entries">All(22)</label>
							<input type="search" class="form-control_date rounded" placeholder="mm-dd-yy" aria-label="Search" aria-describedby="search-addon" />&nbsp;&nbsp;
							<input type="search" class="form-control_name rounded" placeholder="Search by name" aria-label="Search" aria-describedby="search-addon" />
							<a href="{{ url('/admin/blog/add') }}">
								<button type="button" class="btn  btn-outline-primary_filter flr">Filter</button>
							</a>
						</div>
    					
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Name</th>
												<th>Membership Date</th>
												<th>Member Point</th>
												<th>Actions</th>
											</tr>
										</thead>
										
										<tbody class="table-border-bottom-0">
											@php $member_count=1; @endphp
											@foreach($member_list as $member)
												<tr>
													<td>{{ $member_count }}</td>
													<td>{{ $member->name }}</td>
													<td>{!! date('M-j-Y', strtotime($member->created_at)) !!}</td>
													<td>{{ $member->member_point }}</td>
													<td>
														<a href="{{ url('/admin/member/detail/'. $member->id)}}">
															<button type="button" class="btn btn-outline-primary_list">
																View Detail
															</button>
														</a>
														<a href="{{ url('/admin/member/edit/'. $member->id)}}">
															<button type="button" class="btn btn-outline-primary_list">
																Edit
															</button>
														</a>
														<div class="modal fade" id="backDropModal_{{$member->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('') }}" method="post">
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
																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this Member?</h5>
																			<div class="col mb-3">
																				<input
																				type="hidden"
																				name="atm_id"
																				class="form-control"
																				value="{{$member->id}}"
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
												$member_count = $member_count+1;
											@endphp
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						{{-- <div class="col-md-12">
							<div class="row">
								<div class="col-md-4 entries_count_col">
									<p>Showing <span class="first_bl_count">{{$first_member_count}}</span> to <span class="last_bl_count">{{ $last_member_count }}</span> of <span class="total_member">{{ count($total_member) }}</span> entries</p>
								</div>
								<div class="col-md-8">
									@if($show_ent != '0')
										{{ $member_list->onEachSide(3)->appends(request()->input())->links(); }}
									@endif
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection('content')