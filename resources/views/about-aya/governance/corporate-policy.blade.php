@extends('layouts.frontend-app')

@section('title', 'Corporate Policies – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-policies.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_policies'])

			<div class="container risk_container">
				<div class="col-md-12">
					@foreach($corporate_policies as $co_po)
						@php
							$co_po_id = str_replace(" ", "_", strtolower($co_po->co_policies_title));
							$co_po_accordion = str_replace(" ", "", $co_po->co_policies_title);
						@endphp
						<div class="space-40" id="{{$co_po_id}}"></div>
						<h4 class="fw-bold theme_text_color">
							{{ $co_po->co_policies_title }}
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
												{!! $co_po_detail->policies_desc !!}
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

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	
</script>

@endsection('content')