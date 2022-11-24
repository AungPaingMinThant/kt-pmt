@extends('layouts.app')

@section('title', 'Add Category – AYA Bank')

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Categories'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Add Category'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-xl">
							<div class="card mb-4">
								<div class="card-body">
									<form class="mb-3" action="{{ url('/admin/category/store') }}" method="POST">
										{{ csrf_field() }}
										<a href="{{ url('/admin/categories') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
										<div class="mb-3">
											<label class="form-label" for="category_name">Name</label>
											<input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" required />
										</div>
										<div class="mb-3">
											<label for="parent_category" class="form-label">Parent Category</label>
											<select class="form-select" name="parent_category" id="parent_category" aria-label="Parent Category">
												<option value="">None</option>
												@foreach($categories as $cat)
													<option value="{{$cat->id}}">{{$cat->category_name}}</option>
												@endforeach
											</select>
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