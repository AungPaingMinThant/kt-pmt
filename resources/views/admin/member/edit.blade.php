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
				@include('layouts.nav', ['nav'=>'Edit Member List', 'page'=>'MemberList'])
				<div class="content-wrapper" style="background-color:#fff">
					<div class="container-xxl flex-grow-1 container-p-y">
						<a href="{{ url('admin/member') }}" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> << Back to list</label></a>
						<br><br>
						<div class="border border-9">
							<div class="row">
								<form id="formAuthentication" class="mb-3" action="{{ url('/admin/member/update/') }}" method="POST">
									{{ csrf_field() }}
									<div class="row mb-3">
										<input type="hidden" name="member_id" value="{{$member_list->id}}">
										<div class="col-md-3">
											<label for="employee_id" class="form-label">Employee ID</label>&nbsp;
										</div>
										<div class="col-md-2">
											<p>{!! $member_list->employee_id !!}</p>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-3">
											<label for="name" class="form-label">Name</label>
											<input type="text" class="form-control_create" id="name" name="name" value="{!! $member_list->name !!}"/>
										</div>&nbsp;&nbsp;&nbsp;
										<div class="col-md-3">
											<label for="phone" class="form-label">Phone</label>
											<input type="text" class="form-control_create" id="phone" name="phone" value="{!! $member_list->phone !!}"/>
										</div>
									</div>
									<br>
									<div class="mb-4">
										<span class="fill" style="margin-left: 20px">Fill in the bank information</span>
										<div class="space-10"></div>
										<a href="{{ url('/admin/member/update') }}">
											<button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin-left: 20px">Save Change</button>
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
	<script>
		tinymce.init({
	        selector: 'textarea#blog_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });
	</script>
@endsection('content')