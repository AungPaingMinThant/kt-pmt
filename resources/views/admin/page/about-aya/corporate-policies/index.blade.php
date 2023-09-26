@extends('layouts.frontend')

@section('title', 'Corporate Policies – AYA Bank')

@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-policies.css') }}" />
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Corporate Policies'])
        	<br>
			@include('layouts.admin_banner', ['page'=>'corporate_policies'])

			<div class="container risk_container">
				
				<div class="col-md-12">
					@foreach($corporate_policies as $co_po)
						@php
							$co_po_id = str_replace(" ", "_", strtolower($co_po->co_policies_title));
							$co_po_accordion = str_replace(" ", "", $co_po->co_policies_title);
						@endphp
						<div class="space-40" id="{{$co_po_id}}"></div>
						<h4 class="fw-bold theme_text_color">
							{{ $co_po->co_policies_title }}&nbsp;
							<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_{{$co_po_id}}_modal"></i>
						</h4>

						<div class="accordion" id="accordion{{$co_po_accordion}}Example">
							@php $co_po_detail_count = 1; @endphp
							@foreach($corporate_policies_detail as $co_po_detail)
								@php
									$co_po_detail_id = str_replace(" ", "-", strtolower($co_po->co_policies_title));
									$co_po_accordion = str_replace(" ", "", $co_po->co_policies_title);
								@endphp
								@if($co_po_detail_count == 1)
									@php
										$collapse_btn = '';
										$acc_collapse_body = 'collapse show';
									@endphp
								@else
									@php
										$collapse_btn = 'collapsed';
										$acc_collapse_body = 'collapse';
									@endphp
								
								@endif
								@if($co_po->id == $co_po_detail->policies_id)
									<div class="accordion-item">
										<h2 class="accordion-header b-b-none" id="heading{{$co_po_accordion}}{{$co_po_detail_count}}">
											<button class="accordion-button {{$co_po_detail_id}}-accor-btn {{$collapse_btn}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$co_po_accordion}}{{$co_po_detail_count}}" aria-expanded="true" aria-controls="collapse{{$co_po_accordion}}{{$co_po_detail_count}}" style="padding: 5px 20px 5px 20px !important;">
												{{$co_po_detail->policies_title}}
											</button>
										</h2>
										<div id="collapse{{$co_po_accordion}}{{$co_po_detail_count}}" class="accordion-collapse {{$acc_collapse_body}}" aria-labelledby="heading{{$co_po_accordion}}{{$co_po_detail_count}}" data-bs-parent="#accordion{{$co_po_accordion}}Example">
											<div class="accordion-body">
												{!! htmlspecialchars_decode($co_po_detail->policies_desc) !!}
											</div>
										</div>
										<div class="space-10"></div>
									</div>
									@php $co_po_detail_count = $co_po_detail_count + 1; @endphp
								@endif
							@endforeach
						</div>
					@endforeach
				</div>
			</div>	
		</div>
	</div>
</div>

<!-- Modal -->
@foreach($corporate_policies as $co_po_modal)
	@php
		$co_po_id = str_replace(" ", "_", strtolower($co_po_modal->co_policies_title));
	@endphp
	<div class="modal fade" id="section_{{$co_po_id}}_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/corporate-policies/section1/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12 {{$co_po_id}}_main_policy_row" style="margin-bottom: 10px;">
									<label class="col-form-label">Policy Main Title</label>
									<input type="text" class="form-control" id="co_policies_title" name="co_policies_title" value="{{$co_po_modal->co_policies_title}}">

									<input type="hidden" class="form-control" id="co_po_id" name="co_po_id" value="{{$co_po_modal->id}}">
									<div class="space-20"></div>
								</div>
								@php
									$policy_detail_count = 1;
								@endphp
								@foreach($corporate_policies_detail as $co_po_detail)
									@if($co_po_modal->id == $co_po_detail->policies_id)
										<div class="row {{$co_po_id}}_policy_detail_row_{{$policy_detail_count}}">
											<div class="col-md-6" style="margin-bottom: 10px;">
												<label class="col-form-label">Policy Detail Title {{$policy_detail_count}}</label>
												<input type="text" class="form-control" name="co_po_detail_title_{{$policy_detail_count}}" value="{{$co_po_detail->policies_title}}">
												
												<input type="hidden" class="form-control" name="co_po_detail_id_{{$policy_detail_count}}" value="{{$co_po_detail->id}}">
												<div class="space-20"></div>
											</div>
											<div class="col-md-6" style="margin-bottom: 10px;">
												<label class="col-form-label">Policy Detail Desc {{$policy_detail_count}}</label>
												<textarea class="form-control co_po_detail_desc" name="co_po_detail_desc_{{$policy_detail_count}}" rows="3" spellcheck="false" >{!! htmlspecialchars_decode($co_po_detail->policies_desc) !!}</textarea>
												<div class="space-20"></div>
											</div>
											<hr>
										</div>
										@php
											$policy_detail_count = $policy_detail_count + 1;
										@endphp
									@endif
								@endforeach
								<input type="hidden" name="policy_detail_count" id="{{$co_po_id}}_policy_detail_count" value="{{$policy_detail_count - 1}}">
								<div class="col-md-12" style="margin-bottom: 10px;">
									<button type="button" class="btn btn-primary" onclick="PolicyDetailAdd('{{$co_po_id}}');">Add More Policy</button>
									<div class="space-20"></div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>
@endforeach

<div class="space-60"></div>
@include('layouts.admin-footer', ['page'=>''])

<script type="text/javascript">
	function PolicyDetailAdd(main_policy) {
		var policy_detail_count = $("#"+main_policy+"_policy_detail_count").val();
    	var policy_detail_count_new = parseInt(policy_detail_count) + 1;

    	var policy_add_html = '<div class="row '+main_policy+'_policy_detail_row_'+policy_detail_count_new+'">'+
											'<div class="col-md-6" style="margin-bottom: 10px;">'+
												'<label class="col-form-label">Policy Detail Title '+policy_detail_count_new+'</label>'+
												'<input type="text" class="form-control" name="co_po_detail_title_'+policy_detail_count_new+'" value="">'+
												
												'<input type="hidden" class="form-control" name="co_po_detail_id_'+policy_detail_count_new+'" value="0">'+
												'<div class="space-20"></div>'+
											'</div>'+
											'<div class="col-md-6" style="margin-bottom: 10px;">'+
												'<label class="col-form-label">Policy Detail Desc '+policy_detail_count_new+'</label>'+
												'<textarea class="form-control co_po_detail_desc" name="co_po_detail_desc_'+policy_detail_count_new+'" rows="3" spellcheck="false" ></textarea>'+
												'<div class="space-20"></div>'+
											'</div>'+
											'<hr>'+
										'</div>';

		if (policy_detail_count_new == 1) {
			$("."+main_policy+"_main_policy_row").after(policy_add_html);
		} else {
			$("."+main_policy+"_policy_detail_row_"+policy_detail_count).after(policy_add_html);
		}
		
		$("#"+main_policy+"_policy_detail_count").val(policy_detail_count_new);

		tinymce.remove();
		tinymce.init({
	        selector: 'textarea',
	        height: 250,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });
	}
</script>

@endsection('content')