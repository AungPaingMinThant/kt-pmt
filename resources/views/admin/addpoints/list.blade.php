@extends('layouts.app')

@section('title', 'Add Points - Khit Thit ')
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
	@include('layouts.admin_sidebar', ['page'=>'AddPoint'])

    <div class="layout-page" style="background-color: #fff">
        @include('layouts.nav', ['nav'=>'Add Point', 'page'=>'AddPoint'])
            <br>
            <div class="content-wrapper" style="background-color:#fff">
				<div class="container-xxl flex-grow-1 container-p-y">
				
					<br>
					<div class="border border-9">
						<div class="row">
							<form id="formAuthentication" class="mb-3" action="{{ url('/authlogin') }}" method="POST">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="name" class="form-label">Phone</label>
										<input type="text" class="form-control_create" id="name" name="name" placeholder="09 123 456 789"/>
									</div>
                                </div>
                                    <div class="mb-3">
                                        <a href="{{ url('/admin/blog/add') }}">
                                            <button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin-top: -71px;">Check Number</button>
                                        </a>
                                    </div>
							</form>
						</div>
					</div>
				</div>
			</div>
        
	</div>
</div>

@endsection('content')