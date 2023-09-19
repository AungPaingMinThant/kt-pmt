@extends('layouts.frontend-app')

@section('title', 'Business Practices – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')

<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">{!! $page_data->page_title !!}</h4>
				</div>
				<div class="row">
					{!! $page_data->first_desc !!}
				</div>
			</div>

			<div class="space-60"></div>

			<div class="">
				<div class="container section_1">
					@php $cta_section_1_img_link =  URL::to('/').'/'.$page_data->cta_section_1_img; @endphp
					<div class="row">
						<div class="col-md-4 CTA_business_practice_detail_col_1" style="background-image:url('{{$cta_section_1_img_link}}')"></div>
						<div class="col-md-8 CTA_business_practice_detail_col_2">
							<p class="theme_text_color" style="font-size: 20px;">{!! $page_data->cta_section_1_title !!}</p>
							{!! $page_data->cta_section_1_desc !!}
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="CTA_div responsible_CTA">
				<div class="container section_1">
					@php $cta_section_2_img_link =  URL::to('/').'/'.$page_data->cta_section_2_img; @endphp
					<div class="row">
						<div class="col-md-8 sh_CTA_detail_col_2">
							<p class="f-white" style="font-size: 20px;">{!! $page_data->cta_section_2_title !!}</p>
							{!! $page_data->cta_section_2_desc !!}
						</div>
						<div class="col-md-4 sh_CTA_detail_col_1" style="background-image:url('{{$cta_section_2_img_link}}')"></div>
					</div>
				</div>
			</div>

			<div class="space-80"></div>

			<div class="transparent_CTA">
				<div class="container section_1">
					@php $cta_section_3_img_link =  URL::to('/').'/'.$page_data->cta_section_3_img; @endphp
					<div class="row">
						<div class="col-md-4 CTA_transparent_marketing_detail_col_1" style="background-image:url('{{$cta_section_3_img_link}}')"></div>
						<div class="col-md-8 CTA_transparent_marketing_detail_col_2">
							<p class="theme_text_color" style="font-size: 20px;">{!! $page_data->cta_section_3_title !!}</p>
							{!! $page_data->cta_section_3_desc !!}
						</div>
					</div>
				</div>
			</div>
			

			<div class="space-40"></div>
			@php $cta_section_4_img_link = URL::to('/').'/'.$page_data->cta_section_4_img; @endphp
			<div class="CTA_financial_div"  style="background-image:url('{{$cta_section_4_img_link}}')">
				<div class="financial_red_bg">
					<div class="container">
						<div class="row">
							<div class="col-md-8 CTA_financial_detail_col_2">
								<p class="f-white" style="font-size: 20px;">{!! $page_data->cta_section_4_title !!}</p>
								{!! $page_data->cta_section_4_desc !!}
							</div>
							<div class="col-md-4 "></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('layouts.footer', ['page'=>''])


@endsection('content')