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
    							<a href="{{ url('/admin/location/add') }}">
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
