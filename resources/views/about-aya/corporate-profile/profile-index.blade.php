@extends('layouts.frontend-app')

@section('title', 'AYA Bank Profile – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
@php
	$page_data = App\Models\AboutAYA\AyabankProfilePageConfigure::first();
	$corporate_info_data = App\Models\AboutAYA\AyabankProfilePageCorproateInfo::get();
	$leading_info_data = App\Models\AboutAYA\AyabankProfilePageLeadingCapabilitiesInfo::get();
@endphp
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold mb-0">{{$page_data->page_title}}</h4>	
				</div>
				<?php
					$needle = '<p>';
					$close_needle = '</p>';
					$positions = [];
					$close_positions = [];
					$pos_last = 0;
					while( ($pos_last = strpos($page_data->first_3_col_text, $needle, $pos_last)) !== false ) {
					    $positions[] = $pos_last;
					    $pos_last = $pos_last + strlen($needle);
					}

					while( ($pos_last = strpos($page_data->first_3_col_text, $close_needle, $pos_last)) !== false ) {
					    $close_positions[] = $pos_last;
					    $pos_last = $pos_last + strlen($close_needle);
					}
					$occur_count = count($positions);
				?>
				<br>
				<div class="row">
					<div class="full_service_col_1 col-md-4">
						{!! substr($page_data->first_3_col_text,0,($close_positions[0]+4)) !!}
					</div>
					<div class="full_service_col_2 col-md-4">
						{!! substr($page_data->first_3_col_text,$positions[1],($close_positions[1] - $positions[1])) !!}
					</div>
					<div class="full_service_col_3 col-md-4">
						{!! substr($page_data->first_3_col_text,$positions[2]) !!}
					</div>
				</div>

				<div class="space-20"></div>
				
				<div class="row full_service_bank_img" style="background-image:url('../../../{{$page_data->image_break}}')"></div>

				<div class="space-30"></div>

				<div class="row">
					<div class="col">
						{!! $page_data->second_text !!}
					</div>
				</div>

				<div class="space-20"></div>

				<div class="row">
					<h4 class="fw-semibold text-center">{!! $page_data->corporate_info_title !!}</h4>

					<div class="col-md-2 corp_info_col_1"></div>
					<div class="col-md-8 corp_info_col_2">
						<div class="row corporate_information_row">
							@foreach($corporate_info_data as $corporate_info)
								<div class="col-md-4 text-center mb-20">
									<img src="{{ url($corporate_info->CIS_img) }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">{!! $corporate_info->CIS_title !!}</p>
									<p class="mb-0 fw-semibold">{!! $corporate_info->CIS_desc !!}</p>
								</div>
							@endforeach
						</div>
					</div>
					<div class="col-md-2 corp_info_col_3"></div>
				</div>
				
				<div class="space-60"></div>

				<div class="row">
					<h4 class="fw-semibold text-center">{!! $page_data->leading_capabilities_title !!}</h4>
					<div class="space-20"></div>

					<div class="col-md-2 lead_cap_col_1"></div>
					<div class="col-md-10 lead_cap_col_2">
						<div class="row leading_capabilities_row">
							@foreach($leading_info_data as $leading)
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style">
										@if($leading->leading_prefix != '')
											{{ $leading->leading_prefix }}&nbsp;
										@endif
										<span>{{ number_format(intval($leading->leading_number)) }}</span>&nbsp;
										@if($leading->leading_postfix != '')
											{{ $leading->leading_postfix }}&nbsp;
										@endif
									</h4>
									<p class="leading_capabilities_text_style">{{ $leading->leading_label }} *</p>
								</div>
							@endforeach
						</div>
					</div>
				</div>

				<div class="row text-center py-1 update_date_div">
					<p class="mb-0" style="color: #333333;">* {{ $page_data->update_leading_at }} </p>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div drive_growth_CTA">
				<div class="container section_1">
					<div class="row">
						@php $section_1_img_link =  URL::to('/').'/'.$page_data->cta_section_1_img; @endphp
						<div class="col-md-4 CTA_detail_col_1" style="background-image:url('{{$section_1_img_link}}')"></div>
						<div class="col-md-8 CTA_detail_col_2">
							<p class="f-white" style="font-size: 20px;">{!! $page_data->cta_section_1_title !!}</p>
							{!! $page_data->cta_section_1_desc !!}
							@if($page_data->cta_section_1_link != '')
								<a href="{{ url($page_data->cta_section_1_link) }}" style="color: #fff !important;">
									<p class="f-white mt-30">Find out more&nbsp;<i class='bx bx-chevron-right f-white' style="font-size: 18px;line-height: 18px;"></i></p>
								</a>
							@endif
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>
			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row">
						@php $section_2_img_link =  URL::to('/').'/'.$page_data->cta_section_2_img; @endphp
						<div class="col-md-8 CTA2_detail_col_1">
							<p class="theme_text_color" style="font-size: 20px;">{!! $page_data->cta_section_2_title !!}</p>
							{!! $page_data->cta_section_2_desc !!}
							@if($page_data->cta_section_2_link != '')
								<a href="{{ url($page_data->cta_section_2_link) }}">
									<p class="theme_text_color mt-30">Find out more&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></p>
								</a>
							@endif
						</div>
						<div class="col-md-4 CTA2_detail_col_2" style="background-image:url('{{$section_2_img_link}}')"></div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>
			<div class="CTA_div">
				<div class="container section_1">
					<div class="row">
						@php $section_3_img_link =  URL::to('/').'/'.$page_data->cta_section_3_img; @endphp
						<div class="col-md-4 CTA_detail_2_col_1" style="background-image:url('{{$section_3_img_link}}')"></div>
						<div class="col-md-8 CTA_detail_col_2">
							<p class="f-white" style="font-size: 20px;">{!! $page_data->cta_section_3_title !!}</p>
							{!! $page_data->cta_section_3_desc !!}

							@if($page_data->cta_section_3_link != '')
								<a href="{{ url($page_data->cta_section_3_link) }}" style="color: #fff !important;">
									<p class="f_white mt-30">Find out more&nbsp;<i class='bx bx-chevron-right f_white' style="font-size: 18px;line-height: 18px;"></i></p>
								</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('layouts.footer', ['page'=>''])


@endsection('content')