@extends('layouts.frontend')

@section('title', 'Corporate Goals – AYA Bank')

@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-goals.css') }}">
<style type="text/css">
	.customer_satisfy_fact > ul {
		padding-left: 15px;
	}
	.customer_mission_section > p:not(.cursor-pointer):not(:first-child),
	.customer_sustainability_section > p:not(.cursor-pointer):not(:first-child),
	.community_ungc_section > p:not(.cursor-pointer):not(:first-child),
	.community_ungc_section > ol > li:not(:first-child),
	.community_csr_section > p:not(.cursor-pointer):not(:first-child),
	.staff_culture_section > p:not(.cursor-pointer):not(:first-child),
	.staff_culture_section > ol > li:not(:first-child),
	.staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3),
	.shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child),
	.shareholder_gov_frame_section > ol > li:not(:first-child),
	.shareholder_report_section > p:not(.cursor-pointer):not(:first-child)
	{
		display: none;
	}

	
</style>
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <div class="layout-page">
         @include('layouts.nav', ['nav'=>'AYA Bank Profile', 'page'=>'corporate_goals'])
         <br>
         @include('layouts.admin_banner', ['page'=>'corporate_goals', 'mobilebanking'=>''])


         @php
            $page_data = App\Models\AboutAYA\CorporateGoals::first();
         @endphp

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold" style="color: #1d1d1f;">&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#corporate_goals_modal"></i></h4>
					{!! $page_data->corporate_goal_desc !!}
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_1_link =  URL::to('/').'/'.$page_data->corporate_goal_img_1; @endphp
						<img src="{{ $corporate_goal_img_1_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_customer') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">01</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_1 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_2_link =  URL::to('/').'/'.$page_data->corporate_goal_img_2; @endphp
						<img src="{{ $corporate_goal_img_2_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_community') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">02</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_2 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_3_link =  URL::to('/').'/'.$page_data->corporate_goal_img_3; @endphp
						<img src="{{ $corporate_goal_img_3_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_staff') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">03</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_3 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_4_link =  URL::to('/').'/'.$page_data->corporate_goal_img_4; @endphp
						<img src="{{ $corporate_goal_img_4_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_shareholders') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">04</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_4 !!}</span>
							</p>
						</a>
					</div>
				</div>
				<div class="space-20" id="for_customer"></div>
			</div>
			
			<div class="section_container_bg for_customer_container" >
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->customer_title !!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#customer_Info_modal"></i></h4>
						<span class="customer_satisfy_fact" style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->customer_desc !!}</span>
					</div>

					<div class="space-20"></div>
					<div class="row for_customer_CTA">
						<div class="col-md-6">
							<div class="customer_mission_section">
								{!! $page_data->customer_card_desc_1 !!}
								<p class="theme_text_color cursor-pointer mission_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer mission_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $customer_card_img_1_link =  URL::to('/').'/'.$page_data->customer_card_img_1; @endphp
								<img src="{{ $customer_card_img_1_link }}" class="img-fluid">
								<a href="{{url ($page_data->customer_card_link_1) }}" target="_blank" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->customer_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="customer_sustainability_section">
								{!! $page_data->customer_card_desc_2 !!}
							</div>
							<p class="theme_text_color cursor-pointer social_sustainability_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer social_sustainability_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $customer_card_img_2_link =  URL::to('/').'/'.$page_data->customer_card_img_2; @endphp
							<img src="{{ $customer_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->customer_card_link_2) }}" target="_blank" style="text-decoration: none !important;">
								<p class="for_customer_mission_tagline">{!! $page_data->customer_card_text_2 !!}</p>
							</a>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>
			
			<div class="section_container_bg for_community_container" id="for_community" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->community_title !!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#community_modal"></i></h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->community_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_community_CTA">
						<div class="col-md-6">
							<div class="community_ungc_section">
								{!! $page_data->community_card_desc_1 !!}
								
								<p class="theme_text_color cursor-pointer ungc_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer ungc_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $community_card_img_1_link =  URL::to('/').'/'.$page_data->community_card_img_1; @endphp
								<img src="{{ $community_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->community_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->community_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="community_csr_section">
								{!! $page_data->community_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer csr_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer csr_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $community_card_img_2_link =  URL::to('/').'/'.$page_data->community_card_img_2; @endphp
								<img src="{{ $community_card_img_2_link }}" class="img-fluid" style="margin-top: 42px;">
								<a href="{{ url($page_data->community_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_community_csr_tagline">{!! $page_data->community_card_text_2 !!}</p>
								</a>
							</div>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_staff_container" id="for_staff">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->staff_title !!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#staff_modal"></i></h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->staff_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_staff_CTA">
						<div class="col-md-6">
							<div class="staff_culture_section">
								{!! $page_data->staff_card_desc_1 !!}
								
								<p class="theme_text_color cursor-pointer people_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer people_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $staff_card_img_1_link =  URL::to('/').'/'.$page_data->staff_card_img_1; @endphp
								<img src="{{ $staff_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->staff_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->staff_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="staff_emp_dev_section">
								{!! $page_data->staff_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer emp_development_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer emp_development_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $staff_card_img_2_link =  URL::to('/').'/'.$page_data->staff_card_img_2; @endphp
								<img src="{{ $staff_card_img_2_link }}" class="img-fluid" style="margin-top: 20px;">
								<a href="{{ url($page_data->staff_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->staff_card_text_2!!}</p>
								</a>
							</div>
						</div>
						<div class="space-60"></div>
						<div class="col-md-12 staff_quote">
							<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#people_modal"></i><br><br>
							<p style="font-size: 20px;">{!! $page_data->people_desc !!} </p>
							<small>U Zaw Zaw, Founder and Chairman</small>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_shareholders_container" id="for_shareholders" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->stakeholder_title !!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#stakeholder_modal"></i></h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->stakeholder_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_shareholders_CTA">
						<div class="col-md-6">
							<div class="shareholder_gov_frame_section">
								{!! $page_data->stakeholder_card_desc_1 !!}
								<p class="theme_text_color cursor-pointer governance_framework_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer governance_framework_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $stakeholder_card_img_1_link =  URL::to('/').'/'.$page_data->stakeholder_card_img_1; @endphp
								<img src="{{ $stakeholder_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->stakeholder_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->stakeholder_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="shareholder_report_section">
								{!! $page_data->stakeholder_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer report_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer report_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $stakeholder_card_img_2_link =  URL::to('/').'/'.$page_data->stakeholder_card_img_2; @endphp
								<img src="{{ $stakeholder_card_img_2_link }}" class="img-fluid" style="margin-top:38px">
								<a href="{{ url($page_data->stakeholder_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_community_csr_tagline">{!! $page_data->stakeholder_card_text_2 !!}</p>
								</a>
							</div>
						</div>
					</div>
					<div class="space-100"></div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Modal --}}
{{-- Corporate Goals --}}
<div class="modal fade" id="corporate_goals_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
	   <form class="modal-content" action="{{ url('/admin/corporate-goals/description/update')}}" method="POST" enctype="multipart/form-data">
		  <div class="modal-header">             
			 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body" style="padding: 0px 40px;">
			 {{ csrf_field() }}
			 <div class="row" style="margin-bottom: 20px;">
				<div class="col-md-12">
				   <div class="mb-3 row">
					  <h4>Corporate Goals Section Update</h4>
					  <div class="col-md-12" style="margin-bottom: 10px;">
						 <div class="mb-3 row">
							<label for="corporate_goal_desc" class="col-form-label">Section Desc</label>
							<textarea class="form-control" id="corporate_goal_desc" name="corporate_goal_desc" rows="10" spellcheck="false" >{!! $page_data->corporate_goal_desc !!}</textarea>
						 </div>
						 <div class="space-20"></div>
						 
						 <div class="mb-3 row">
							<label for="corporate_goal_img_1" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="corporate_goal_img_1" id="corporate_goal_img_1" />
							<input type="hidden" name="corporate_goal_img_1_old" id="corporate_goal_img_1_old" value="{!! $page_data->corporate_goal_img_1 !!}">
						 </div>
						 <div class="mb-6 row">
							<input type="text" class="form-control" id="corporate_text_1" name="corporate_text_1" value="{!! $page_data->corporate_text_1 !!}" style="width: 300px">
						 </div>
 
						 <div class="space-10"></div>
						 <div class="mb-3 row">
							<label for="corporate_goal_img_2" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="corporate_goal_img_2" id="corporate_goal_img_2" />
							<input type="hidden" name="corporate_goal_img_2_old" id="corporate_goal_img_2_old" value="{!! $page_data->corporate_goal_img_2 !!}">
						 </div>
						 <div class="space-10"></div>
						 <div class="mb-6 row">
							<input type="text" class="form-control" id="corporate_text_2" name="corporate_text_2" value="{!! $page_data->corporate_text_2 !!}" style="width: 300px">
						 </div>
 
						 <div class="space-10"></div>
						 <div class="mb-3 row">
							<label for="corporate_goal_img_3" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="corporate_goal_img_3" id="corporate_goal_img_3" />
							<input type="hidden" name="corporate_goal_img_3_old" id="corporate_goal_img_3_old" value="{!! $page_data->corporate_goal_img_3 !!}">
						 </div>
						 <div class="space-10"></div>
						 <div class="mb-6 row">
							<input type="text" class="form-control" id="corporate_text_3" name="corporate_text_3" value="{!! $page_data->corporate_text_3 !!}" style="width: 300px">
						 </div>
 
						 <div class="mb-3 row">
							<label for="corporate_goal_img_4" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="corporate_goal_img_4" id="corporate_goal_img_4" />
							<input type="hidden" name="corporate_goal_img_4_old" id="corporate_goal_img_4_old" value="{!! $page_data->corporate_goal_img_4 !!}">
						 </div>
						 <div class="space-10"></div>
						 <div class="mb-6 row">
							<input type="text" class="form-control" id="corporate_text_4" name="corporate_text_4" value="{!! $page_data->corporate_text_4 !!}" style="width: 300px">
						 </div>
 
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
 
{{-- Customer --}}
<div class="modal fade" id="customer_Info_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/corporate-goals/customer/update')}}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">             
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>For Customers</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="customer_title" class="col-form-label">Section Title</label>
								<input type="text" class="form-control" id="customer_title" name="customer_title" value="{!! $page_data->customer_title !!}">
							</div>
							
							<div class="space-20"></div>
							
							<div class="col-md-12">
								<label for="customer_desc" class="col-form-label">Section Desc</label>
								<textarea class="form-control" id="customer_desc" name="customer_desc" rows="10" spellcheck="false" >{!! $page_data->customer_desc !!}</textarea>
							</div>
						
							<div class="space-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_desc_1" class="col-form-label">Customer Section Information 1</label>
								<textarea class="form-control" id="customer_card_desc_1" name="customer_card_desc_1" rows="10" spellcheck="false" >{!! $page_data->customer_card_desc_1 !!}</textarea>
							</div>
							
							<div class="space-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_img_1" class="col-md-2 col-form-label">Image</label>
								<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
								<input class="form-control" type="file" name="customer_card_img_1" id="customer_card_img_1" />
								<input type="hidden" name="customer_card_img_1_old" id="customer_card_img_1_old" value="{!! $page_data->customer_card_img_1 !!}">
							</div>
							
							<div class="sapce-20"></div>
							
							<div class="mb-3 row">
								<input type="text" class="form-control" id="customer_card_text_1" name="customer_card_text_1" value="{!! $page_data->customer_card_text_1 !!}">
							</div>
							
							<div class="sapce-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_link_1" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="customer_card_link_1" name="customer_card_link_1" value="{{$page_data->customer_card_link_1	}}">
							</div>
							
							<div class="space-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_desc_2" class="col-form-label">Customer Section Information 2</label>
								<textarea class="form-control" id="customer_card_desc_2" name="customer_card_desc_2" rows="10" spellcheck="false" >{!! $page_data->customer_card_desc_2 !!}</textarea>
							</div>
							
							<div class="space-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_img_2" class="col-md-2 col-form-label">Image</label>
								<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
								<input class="form-control" type="file" name="customer_card_img_2" id="customer_card_img_2" />
								<input type="hidden" name="customer_card_img_2_old" id="customer_card_img_2_old" value="{!! $page_data->customer_card_img_2 !!}">
							</div>
							
							<div class="sapce-20"></div>
							
							<div class="mb-3 row">
								<input type="text" class="form-control" id="customer_card_text_2" name="customer_card_text_2" value="{!! $page_data->customer_card_text_2 !!}">
							</div>
							
							<div class="sapce-20"></div>
							
							<div class="mb-3 row">
								<label for="customer_card_link_2" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="customer_card_link_2" name="customer_card_link_2" value="{{$page_data->customer_card_link_2	}}">
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

{{-- Comminity_info --}}
<div class="modal fade" id="community_modal" data-bs-backdrop="static" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
	<form class="modal-content" action="{{ url('/admin/corporate-goals/community/update')}}" method="POST" enctype="multipart/form-data">
	  <div class="modal-header">             
		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body" style="padding: 0px 40px;">
		 {{ csrf_field() }}
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-12">
			   	<div class="mb-3 row">
					<h4>For Customers</h4>
					<div class="mb-3 row" style="margin-bottom: 10px;">
						<label for="community_title" class="col-form-label">Section Title</label>
						<input type="text" class="form-control" id="community_title" name="community_title" value="{!! $page_data->community_title !!}">
					</div>
					<div class="space-20"></div>
					<div class="mb-3 row">
						<label for="community_desc" class="col-form-label">Section Description</label>
						<textarea class="form-control" id="community_desc" name="community_desc" rows="10" spellcheck="false" >{!! $page_data->community_desc !!}</textarea>
					</div>
					<div class="mb-3 row">
						<label for="community_card_desc_1" class="col-form-label">Community Section Information 1</label>
						<textarea class="form-control" id="community_card_desc_1" name="community_card_desc_1" rows="10" spellcheck="false" >{!! $page_data->community_card_desc_1 !!}</textarea>
				 	</div>
				  	<div class="space-20"></div>
				  	<div class="mb-3 row">
						<label for="community_card_img_1" class="col-md-2 col-form-label">Image</label>
						<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
						<input class="form-control" type="file" name="community_card_img_1" id="community_card_img_1" />
						<input type="hidden" name="community_card_img_1_old" id="community_card_img_1_old" value="{!! $page_data->community_card_img_1 !!}">
				 	</div>
					<div class="sapce-20"></div>
					<div class="mb-3 row">
				 		<input type="text" class="form-control" id="community_card_text_1" name="community_card_text_1" value="{!! $page_data->community_card_text_1 !!}">
					</div>
				 	<div class="sapce-20"></div>
				 	<div class="mb-3 row">
						<label for="community_card_link_1" class="col-form-label">Section Detail Link</label>
						<input type="text" class="form-control" id="community_card_link_1" name="community_card_link_1" value="{{$page_data->community_card_link_1	}}">
					</div>
					<div class="space-20"></div>
					<div class="mb-3 row">
						<label for="community_card_desc_2" class="col-form-label">Community Section Information 2</label>
						<textarea class="form-control" id="community_card_desc_2" name="community_card_desc_2" rows="10" spellcheck="false" >{!! $page_data->community_card_desc_2 !!}</textarea>
				 	</div>
				  	<div class="space-20"></div>
				  	<div class="mb-3 row">
						<label for="community_card_img_2" class="col-md-2 col-form-label">Image</label>
						<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
						<input class="form-control" type="file" name="community_card_img_2" id="community_card_img_2" />
						<input type="hidden" name="community_card_img_2_old" id="community_card_img_2_old" value="{!! $page_data->community_card_img_2 !!}">
				 	</div>
					<div class="sapce-20"></div>
					<div class="mb-3 row">
				 		<input type="text" class="form-control" id="community_card_text_2" name="community_card_text_2" value="{!! $page_data->community_card_text_2 !!}">
				 	</div>
						<div class="sapce-20"></div>
				 	<div class="mb-3 row">
						<label for="community_card_link_2" class="col-form-label">Section Detail Link</label>
						<input type="text" class="form-control" id="community_card_link_2" name="community_card_link_2" value="{{$page_data->community_card_link_2	}}">
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
{{-- Staff-info --}}
<div class="modal fade" id="staff_modal" data-bs-backdrop="static" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
   <form class="modal-content" action="{{ url ('/admin/corporate-goals/staff/update') }}" method="POST" enctype="multipart/form-data">
	  <div class="modal-header">             
		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body" style="padding: 0px 40px;">
		 {{ csrf_field() }}
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-12">
			   	<div class="mb-3 row">
					<h4>For Staff</h4>
					<div class="mb-3 row" style="margin-bottom: 10px;">
						<label for="staff_title" class="col-form-label">Section Title</label>
						<input type="text" class="form-control" id="staff_title" name="staff_title" value="{!! $page_data->staff_title !!}">
					</div>
					<div class="space-20"></div>
					<div class="mb-3 row">
						<label for="staff_desc" class="col-form-label">Section Description</label>
						<textarea class="form-control" id="staff_desc" name="staff_desc" rows="10" spellcheck="false" >{!! $page_data->staff_desc !!}</textarea>
					</div>
					<div class="mb-3 row">
						<label for="staff_card_desc_1" class="col-form-label">Staff Section Information 1</label>
						<textarea class="form-control" id="staff_card_desc_1" name="staff_card_desc_1" rows="10" spellcheck="false" >{!! $page_data->staff_card_desc_1 !!}</textarea>
				 	</div>
				  	<div class="space-20"></div>
				  	<div class="mb-3 row">
						<label for="staff_card_img_1" class="col-md-2 col-form-label">Image</label>
						<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
						<input class="form-control" type="file" name="staff_card_img_1" id="staff_card_img_1" />
						<input type="hidden" name="staff_card_img_1_old" id="staff_card_img_1_old" value="{!! $page_data->staff_card_img_1 !!}">
				 	</div>
					<div class="sapce-20"></div>
					<div class="mb-3 row">
				 		<input type="text" class="form-control" id="staff_card_text_1" name="staff_card_text_1" value="{!! $page_data->staff_card_text_1 !!}">
					</div>
				 	<div class="sapce-20"></div>
				 	<div class="mb-3 row">
						<label for="staff_card_link_1" class="col-form-label">Section Detail Link</label>
						<input type="text" class="form-control" id="staff_card_link_1" name="staff_card_link_1" value="{{$page_data->staff_card_link_1	}}">
					</div>
					<div class="space-20"></div>
					<div class="mb-3 row">
						<label for="staff_card_desc_2" class="col-form-label">Stakeholder Section Information 2</label>
						<textarea class="form-control" id="staff_card_desc_2" name="staff_card_desc_2" rows="10" spellcheck="false" >{!! $page_data->staff_card_desc_2 !!}</textarea>
				 	</div>
				  	<div class="space-20"></div>
				  	<div class="mb-3 row">
						<label for="staff_card_img_2" class="col-md-2 col-form-label">Image</label>
						<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
						<input class="form-control" type="file" name="staff_card_img_2" id="staff_card_img_2" />
						<input type="hidden" name="staff_card_img_2_old" id="staff_card_img_2_old" value="{!! $page_data->staff_card_img_2 !!}">
				 	</div>
					<div class="sapce-20"></div>
					<div class="mb-3 row">
				 		<input type="text" class="form-control" id="staff_card_text_2" name="staff_card_text_2" value="{!! $page_data->staff_card_text_2 !!}">
				 	</div>
						<div class="sapce-20"></div>
				 	<div class="mb-3 row">
						<label for="staff_card_link_2" class="col-form-label">Section Detail Link</label>
						<input type="text" class="form-control" id="staff_card_link_2" name="staff_card_link_2" value="{{$page_data->staff_card_link_2	}}">
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
{{-- People --}}
<div class="modal fade" id="people_modal" data-bs-backdrop="static" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
   <form class="modal-content" action="{{ url('/admin/corporate-goals/people/update') }}" method="POST" enctype="multipart/form-data">
	  <div class="modal-header">             
		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body" style="padding: 0px 40px;">
		 {{ csrf_field() }}
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-12">
			   	<div class="mb-3 row">
					<div class="mb-3 row">
						<label for="people_desc" class="col-form-label">Section Description</label>
						<textarea class="form-control" id="people_desc" name="people_desc" rows="10" spellcheck="false" >{!! $page_data->people_desc !!}</textarea>
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
{{-- Stakeholder --}}
<div class="modal fade" id="stakeholder_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
	   <form class="modal-content" action="{{ url('/admin/corporate-goals/stakeholder/update') }}" method="POST" enctype="multipart/form-data">
		  <div class="modal-header">             
			 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body" style="padding: 0px 40px;">
			 {{ csrf_field() }}
			<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-12">
				   	<div class="mb-3 row">
						<h4>For Stakeholders</h4>
						<div class="mb-3 row" style="margin-bottom: 10px;">
							<label for="stakeholder_title" class="col-form-label">Section Title</label>
							<input type="text" class="form-control" id="stakeholder_title" name="stakeholder_title" value="{!! $page_data->stakeholder_title !!}">
						</div>
						<div class="space-20"></div>
						<div class="mb-3 row">
							<label for="stakeholder_desc" class="col-form-label">Section Description</label>
							<textarea class="form-control" id="stakeholder_desc" name="stakeholder_desc" rows="10" spellcheck="false" >{!! $page_data->stakeholder_desc !!}</textarea>
						</div>
						<div class="mb-3 row">
							<label for="stakeholder_card_desc_1" class="col-form-label">Stakeholder Section Information 1</label>
							<textarea class="form-control" id="stakeholder_card_desc_1" name="stakeholder_card_desc_1" rows="10" spellcheck="false" >{!! $page_data->stakeholder_card_desc_1 !!}</textarea>
					 	</div>
					  	<div class="space-20"></div>
					  	<div class="mb-3 row">
							<label for="stakeholder_card_img_1" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="stakeholder_card_img_1" id="stakeholder_card_img_1" />
							<input type="hidden" name="stakeholder_card_img_1_old" id="stakeholder_card_img_1_old" value="{!! $page_data->stakeholder_card_img_1 !!}">
					 	</div>
						<div class="sapce-20"></div>
						<div class="mb-3 row">
					 		<input type="text" class="form-control" id="stakeholder_card_text_1" name="stakeholder_card_text_1" value="{!! $page_data->stakeholder_card_text_1 !!}">
						</div>
					 	<div class="sapce-20"></div>
					 	<div class="mb-3 row">
							<label for="stakeholder_card_link_1" class="col-form-label">Section Detail Link</label>
							<input type="text" class="form-control" id="stakeholder_card_link_1" name="stakeholder_card_link_1" value="{{$page_data->stakeholder_card_link_1	}}">
						</div>
						<div class="space-20"></div>
						<div class="mb-3 row">
							<label for="stakeholder_card_desc_2" class="col-form-label">Staff Section Information 2</label>
							<textarea class="form-control" id="stakeholder_card_desc_2" name="stakeholder_card_desc_2" rows="10" spellcheck="false" >{!! $page_data->stakeholder_card_desc_2 !!}</textarea>
					 	</div>
					  	<div class="space-20"></div>
					  	<div class="mb-3 row">
							<label for="stakeholder_card_img_2" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 150 * 150 - webp )</small>
							<input class="form-control" type="file" name="stakeholder_card_img_2" id="stakeholder_card_img_2" />
							<input type="hidden" name="stakeholder_card_img_2_old" id="stakeholder_card_img_2_old" value="{!! $page_data->stakeholder_card_img_2 !!}">
					 	</div>
						<div class="sapce-20"></div>
						<div class="mb-3 row">
					 		<input type="text" class="form-control" id="stakeholder_card_text_2" name="stakeholder_card_text_2" value="{!! $page_data->stakeholder_card_text_2 !!}">
					 	</div>
							<div class="sapce-20"></div>
					 	<div class="mb-3 row">
							<label for="stakeholder_card_link_2" class="col-form-label">Section Detail Link</label>
							<input type="text" class="form-control" id="stakeholder_card_link_2" name="stakeholder_card_link_2" value="{{$page_data->stakeholder_card_link_2	}}">
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
@include('layouts.admin-footer', ['page'=>''])


<script type="text/javascript">
	$("#customer_card_img_1").change(function() {
		$("#customer_card_img_1_old").val("");
	});
	$("#customer_card_img_2").change(function() {
		$("#customer_card_img_2_old").val("");
	});
	$("#community_card_img_1").change(function() {
		$("#community_card_img_1_old").val("");
	});
	$("#community_card_img_2").change(function() {
		$("#community_card_img_2_old").val("");
	});


	$(".mission_info_read_more").click(function() {
		$(".customer_mission_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".mission_info_hide").removeClass('d-none');
		$(".mission_info_read_more").addClass('d-none');
	});
	$(".mission_info_hide").click(function() {
		$(".customer_mission_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".mission_info_read_more").removeClass('d-none');
		$(".mission_info_hide").addClass('d-none');
	});

	$(".social_sustainability_info_read_more").click(function() {
		$(".customer_sustainability_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".social_sustainability_info_hide").removeClass('d-none');
		$(".social_sustainability_info_read_more").addClass('d-none');
	});
	$(".social_sustainability_info_hide").click(function() {
		$(".customer_sustainability_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".social_sustainability_info_read_more").removeClass('d-none');
		$(".social_sustainability_info_hide").addClass('d-none');
	});

	$(".ungc_info_read_more").click(function() {
		$(".community_ungc_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".community_ungc_section > ol > li:not(:first-child)").show('toggle');
		$(".ungc_info_hide").removeClass('d-none');
		$(".ungc_info_read_more").addClass('d-none');
	});
	$(".ungc_info_hide").click(function() {
		$(".community_ungc_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".community_ungc_section > ol > li:not(:first-child)").hide('toggle');
		$(".ungc_info_read_more").removeClass('d-none');
		$(".ungc_info_hide").addClass('d-none');
	});

	$(".csr_info_read_more").click(function() {
		$(".community_csr_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".csr_info_hide").removeClass('d-none');
		$(".csr_info_read_more").addClass('d-none');
	});
	$(".csr_info_hide").click(function() {
		$(".community_csr_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".csr_info_read_more").removeClass('d-none');
		$(".csr_info_hide").addClass('d-none');
	});


	$(".people_info_read_more").click(function() {
		$(".staff_culture_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".staff_culture_section > ol > li:not(:first-child)").show('toggle');
		$(".people_info_hide").removeClass('d-none');
		$(".people_info_read_more").addClass('d-none');
	});
	$(".people_info_hide").click(function() {
		$(".staff_culture_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".staff_culture_section > ol > li:not(:first-child)").hide('toggle');
		$(".people_info_read_more").removeClass('d-none');
		$(".people_info_hide").addClass('d-none');
	});

	$(".emp_development_info_read_more").click(function() {
		$(".staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3)").show('toggle');
		$(".emp_development_info_hide").removeClass('d-none');
		$(".emp_development_info_read_more").addClass('d-none');
	});
	$(".emp_development_info_hide").click(function() {
		$(".staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3)").hide('toggle');
		$(".emp_development_info_read_more").removeClass('d-none');
		$(".emp_development_info_hide").addClass('d-none');
	});

	$(".governance_framework_info_read_more").click(function() {
		$(".shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".shareholder_gov_frame_section > ol > li:not(:first-child)").show('toggle');
		$(".governance_framework_info_hide").removeClass('d-none');
		$(".governance_framework_info_read_more").addClass('d-none');
	});
	$(".governance_framework_info_hide").click(function() {
		$(".shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".shareholder_gov_frame_section > ol > li:not(:first-child)").hide('toggle');
		$(".governance_framework_info_read_more").removeClass('d-none');
		$(".governance_framework_info_hide").addClass('d-none');
	});

	$(".report_info_read_more").click(function() {
		$(".shareholder_report_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".report_info_hide").removeClass('d-none');
		$(".report_info_read_more").addClass('d-none');
	});
	$(".report_info_hide").click(function() {
		$(".shareholder_report_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".report_info_read_more").removeClass('d-none');
		$(".report_info_hide").addClass('d-none');
	});

	tinymce.init({
		selector: 'textarea',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	});
</script>



@endsection('content')