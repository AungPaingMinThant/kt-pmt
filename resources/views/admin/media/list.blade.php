@extends('layouts.app')

@section('title', 'Media List – AYA Bank')

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
		@include('layouts.admin_sidebar', ['page'=>'Media'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Media List'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/media/upload') }}">
								<button type="button" class="btn  btn-outline-primary flr">Upload Media</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table fw-light">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Media Name</th>
												<th>Upload Location</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											@php $m_count = 1; @endphp
											@foreach($media_List as $m_list)
												<tr>
													<td>{{$m_count}}</td>
													<td class="text-left">{{$m_list->media_name}}</td>
													<td>{{$m_list->media_category}}</td>
													<td>
														<button class="btn btn-sm text-left" onclick="copyURL('{{$m_count}}');"><i class="menu-icon tf-icons bx bx-link"></i>&nbsp;Copy URL</button>
														<input type="text" class="d-none" id="media_url_{{$m_count}}" value="{{ URL::to('/').$m_list->media_file}}">
														<a href="{{ url('/admin/media/edit/'.$m_list->id) }}" class="table_action_decoration">
															<button class="btn btn-sm text-left"><i class="menu-icon tf-icons bx bx-pencil"></i>&nbsp;Edit</button>
														</a>
														<a href="" class="table_action_decoration">
															<button class="btn btn-sm text-left"><i class="menu-icon tf-icons bx bx-trash"></i>&nbsp;Delete</button>
														</a>
													</td>
												</tr>
												@php $m_count = $m_count + 1; @endphp
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