@extends('layouts.app')

@section('title', 'Blogs – AYA Bank')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Blog'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Blog'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
					    @if(auth()->user()->name != 'AYA Bank Admin')
    						<div class="col-12 text-right">
    							<a href="{{ url('/admin/blog/add') }}">
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
												<th>Blog Title</th>
												<th>Blog Category</th>
												<th>Update Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $count=1; @endphp
											@if(auth()->user()->name == 'AYA Bank Admin')
    											@foreach($blog_list as $b)
    												<?php
    													$category_name = App\Models\Category::where('id',$b->blog_category)->first();
    												?>
    												@if($b->blog_title == "AYA Bank PCL's Foreign Currency Online Trading")
    											    	<tr>
    													<td>{{ $count }}</td>
    													<td>{!! html_entity_decode($b->blog_title) !!}</td>
    													<td>
    														{{$category_name->category_name ?? '-'}}
    													</td>
    													<td>
    														{{ date('d/m/Y H:i:s',strtotime($b->updated_at)) }}
    													</td>
    													<td>
    														<a href="{{ url('/admin/blog/edit/'.$b->id) }}">
    															<button type="button" class="btn btn-outline-primary">
    	                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
    	                           								</button>
    	                           							</a>
                               								<div class="modal fade" id="backDropModal_{{$b->id}}" data-bs-backdrop="static" tabindex="-1">
    															<div class="modal-dialog modal-dialog-centered">
    																<form class="modal-content" action="{{ url('/admin/blog/delete') }}" method="post">
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
    																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this blog?</h5>
    																			<div class="col mb-3">
    																				<input
    																				type="hidden"
    																				name="blog_id"
    																				class="form-control"
    																				value="{{$b->id}}"
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
    												@php $count = $count + 1; @endphp
    												@endif
    											@endforeach
    										@else
    										    @foreach($blog_list as $b)
    												<?php
    													$category_name = App\Models\Category::where('id',$b->blog_category)->first();
    												?>
    											   	<tr>
    													<td>{{ $count }}</td>
    													<td>{!! html_entity_decode($b->blog_title) !!}</td>
    													<td>
    														{{$category_name->category_name ?? '-'}}
    													</td>
    													<td>
    														{{ date('d/m/Y H:i:s',strtotime($b->updated_at)) }}
    													</td>
    													<td>
    														<a href="{{ url('/admin/blog/edit/'.$b->id) }}">
    															<button type="button" class="btn btn-outline-primary">
    	                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
    	                           								</button>
    	                           							</a>
                               								<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$b->id}}">
                                  								<span class="tf-icons bx bx-trash"></span>&nbsp; 		
                               								</button>
                               								<div class="modal fade" id="backDropModal_{{$b->id}}" data-bs-backdrop="static" tabindex="-1">
    															<div class="modal-dialog modal-dialog-centered">
    																<form class="modal-content" action="{{ url('/admin/blog/delete') }}" method="post">
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
    																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this blog?</h5>
    																			<div class="col mb-3">
    																				<input
    																				type="hidden"
    																				name="blog_id"
    																				class="form-control"
    																				value="{{$b->id}}"
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
    												@php $count = $count + 1; @endphp
    											@endforeach
    										@endif
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