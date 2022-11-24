@extends('layouts.app')

@section('title', 'Categories – AYA Bank')
<style type="text/css">
	.flr {
		float: right;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Categories'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Categories'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/category/add') }}">
								<button type="button" class="btn  btn-outline-primary flr">Add</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Category Name</th>
												<th>Parent Category</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $count=1; @endphp
											@foreach($categories as $cat)
												<?php
													$parent_category = App\Models\Category::where('id',$cat->parent_category)->first();
												?>
												<tr>
													<td>{{$count}}</td>
													<td>{{$cat->category_name}}</td>
													<td>{{$parent_category->category_name ?? '-'}}</td>
													<td>
														<a href="{{ url('/admin/category/edit/'.$cat->id) }}">
															<button type="button" class="btn btn-outline-primary">
	                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
	                           								</button>
	                           							</a>
                           								<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#backDropModal_{{$cat->id}}">
                              								<span class="tf-icons bx bx-trash"></span>&nbsp; 		
                           								</button>
                           								<div class="modal fade" id="backDropModal_{{$cat->id}}" data-bs-backdrop="static" tabindex="-1">
															<div class="modal-dialog modal-dialog-centered">
																<form class="modal-content" action="{{ url('/admin/category/delete') }}" method="post">
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
																			<h5 class="modal-title" id="backDropModalTitle">Are you sure want to delete this category?</h5>
																			<div class="col mb-3">
																				<input
																				type="hidden"
																				name="category_id"
																				class="form-control"
																				value="{{$cat->id}}"
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