@extends('layouts.app')

@section('title', 'Create Member – Khit Thit')

<style type="text/css">
	.flr {
		float: right;
	}
	.table {
		color: #566a7f !important;
	}
	.table_action_decoration:hover {
		text-decoration: none !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'CreateMember'])

		<div class="layout-page" style="background-color: #fff">
			@include('layouts.nav', ['nav'=>'Create Member', 'page'=>'Page'])

			<div class="content-wrapper" style="background-color:#fff">
				<div class="container-xxl flex-grow-1 container-p-y">
					
					<br>
					<div class="border border-9">
						<div class="row">
							<form id="formAuthentication" class="mb-3" action="{{ url('/admin/addmember') }}" method="POST">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="employee_id" class="form-label">Employee ID</label>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control_create" id="employee_id" name="employee_id" placeholder=""/>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="name" class="form-label">Name</label>
										<input type="text" class="form-control_create" id="name" name="name" placeholder=""/>
									</div>
									<div class="col-md-3">
										<label for="phone" class="form-label">Phone</label>
										<input type="text" class="form-control_create" id="phone" name="phone" placeholder="09 123 456 789"/>
									</div>
									<div class="col-md-3">
										<label for="amount" class="form-label">Expensed Amount</label>
										<input type="text" class="form-control_create" id="amount" name="amount" placeholder="100000.00"/>
									</div>
								</div>
								<br><br>
								<div class="row mb-3">
									<span class="point">Point By Expensed Amount</span>
								</div>
								<div class="mb-3">
									<input type="text" class="form-control_xpoint" id="xpoint" name="xpoint"/>
								</div>
								<input type="hidden" name="user_ip" id="user_ip">
								<br><br>
								<div class="mb-3">
									<span class="fill">Fill in the bank information</span>
									<div class="space-10"></div>
									<a href="{{ url('/admin/addmember') }}">
										<button type="submit" class="btn  btn-outline-primary d-grid w-30">Save Change</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function copyURL(url_id) {
		var copyText = document.getElementById("media_url_"+url_id);
		copyText.select();
		copyText.setSelectionRange(0, 99999);
		navigator.clipboard.writeText(copyText.value);
		alert("Copied the text: " + copyText.value);
	}
</script>
@endsection('content')