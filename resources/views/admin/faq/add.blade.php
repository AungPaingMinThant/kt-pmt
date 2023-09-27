@extends('layouts.frontend')

@section('title', 'Add FAQ – AYA Bank')

@section('content')
<style type="text/css">
	.flr {
		float: right;
	}
	.table {
		color: #566a7f !important;
	}
</style>
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'FAQ'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Add FAQ', 'page'=>'FAQ'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-xl">
							<div class="card mb-4">
								<div class="card-body">
									<form class="mb-3" action="{{ url('/admin/faq/store') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
										{{ csrf_field() }}
										<a href="{{ url('/admin/faq/list') }}" class="mb-3" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
										<div class="row">
											<div class="col-md-12 mb-3">
												<h4>FAQs</h4>
												<div class="row">
													<div class="col-md-12">
														<div class="mb-3">
															<label class="form-label">Question</label>
															<textarea class="form-control" id="faq_question" name="faq_question" rows="3" spellcheck="false" ></textarea>
														</div>
													</div>
													<div class="col-md-12">
														<div class="mb-3">
															<label class="form-label">Answer</label>
															<textarea class="form-control" id="faq_answer" name="faq_answer" rows="3" spellcheck="false" ></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary" id="submit_btn">Update</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@include('layouts.admin-footer', ['page'=>''])

<script type="text/javascript">

</script>

@endsection('content')