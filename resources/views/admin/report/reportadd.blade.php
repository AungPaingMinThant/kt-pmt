@extends('layouts.app')

@section('title', 'Add Report – AYA Bank')

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Report'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Add Report'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-xl">
							<div class="card mb-4">
								<div class="card-body">
									<form class="mb-3" action="{{ url('/admin/report/store') }}" method="POST" enctype="multipart/form-data">
										{{ csrf_field() }}
										<a href="{{ url('/admin/report') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
										<div class="mb-3">
											<label class="form-label" for="report_title">Title</label>
											<input type="text" class="form-control" name="report_title" id="report_title" placeholder="Report Title" required />
										</div>
										<div class="mb-3">
											<label for="report_category" class="form-label">Report Category</label>
											<select class="form-select" name="report_category" id="report_category" aria-label="Parent Category">
												<option value="">None</option>
												@foreach($categories as $cat)
													<option value="{{$cat->id}}">{{$cat->category_name}}</option>
												@endforeach
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label" for="report_file">File</label>
											<input class="form-control" type="file" name="report_file" id="report_file" required>
										</div>
										<div class="mb-3">
											<label class="form-label" for="search_keywords">Search Keyword</label>
											<input class="form-control" type="text" id="search_keywords" name="search_keywords" placeholder="Separate each keyword by comma ( , )" required>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
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

@endsection('content')