@extends('layouts.app')

@section('title', 'FAQ List – AYA Bank')
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
		@include('layouts.admin_sidebar', ['page'=>'FAQ'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'FAQs', 'page'=>'Page'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/faq/'.$page_slug.'/add') }}">
								<button type="button" class="btn  btn-outline-primary flr">Add FAQ</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>FAQ ( Q&A )</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $faq_count = 1; @endphp
											@foreach($faq_list as $faq)
												<tr valign="top">
													<td>{{$faq_count}}</td>
													<td>
														<span class="fw-semibold">{!! html_entity_decode($faq->faq_question) !!}</span>
														<div style="padding-left: 20px !important;">
															{!! html_entity_decode($faq->faq_answer) !!}
														</div>
													</td>
													<td>
														<a href="{{ url('/admin/faq/edit/'.$faq->id) }}">
															<button type="button" class="btn btn-outline-primary">
	                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
	                           								</button>
	                           							</a>
													</td>
												</tr>
												@php $faq_count = $faq_count + 1; @endphp
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