@extends('layouts.frontend')

@section('title', 'Mission, Corporate Values and Brand Promise – AYA Bank')

@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/mission_promise.css') }}">

@php
	$page_data = App\Models\AboutAYA\MissionCopBrandPromise::first();
	$excellence_info = App\Models\AboutAYA\MissionCopBrandProiseAspectExcellence::get();
	$sincerities_info = App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity::get();
@endphp
<div class="layout-wrapper layout-content-navbar">
	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'AYA Bank Profile', 'page'=>'mission_promise'])
			<br>
			@include('layouts.admin_banner', ['page'=>'mission_promise', 'mobilebanking'=>''])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold">
						{!!$page_data->page_title_1!!}&nbsp;
						<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#our_mission_modal"></i>
					</h4><p>{!!$page_data->page_desc_1!!}</p>
					
				</div>
				<div class="space-20"></div>
				<div class="row">
					<h4 class="fw-bold">
						{!!$page_data->page_title_2!!}&nbsp;
						<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#corporate_values_modal"></i>
					</h4>
					<p>{!!$page_data->page_desc_2!!}</p>
				</div>
				<div class="space-20"></div>
			</div>

			<div class="ethics_section">
				<div class="container">
					<div class="row ethics_box_row">
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								{!!$page_data->aspect_1!!}
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								{!!$page_data->aspect_2!!}
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								{!!$page_data->aspect_3!!}
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">							
								{!!$page_data->aspect_4!!}
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								{!!$page_data->aspect_5!!}
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">							
								{!!$page_data->aspect_6!!}
							</div>
						</div>

						<div class="col-12 space-60"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_1_title!!}&nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#excellance_modal"></i></p>
							<p>{!!$page_data->aspect_1_desc!!}
								<!-- <ul style="margin-left: 16px;padding-left: 15px;color: #4e4e4e;">
										@php
											$excellence_count = 1;
										@endphp
										@foreach ($excellence_info as $item_exce)
											<li class="mb-20" id="excellence_point">{!! htmlspecialchars_decode($item_exce->excellence_desc) !!}</li>
											@php
												$excellence_count = $excellence_count + 1;
											@endphp
										@endforeach
									</li>
								</ul> -->
							</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_2_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#team_modal"></i></p>
							<p>{!!$page_data->aspect_2_desc!!}</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_3_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#honesty_modal"></i></p>
							<p>{!!$page_data->aspect_3_desc!!}</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{{$page_data->aspect_4_title}} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#integrity_modal"></i></p>
							<p>{!!$page_data->aspect_4_desc!!}</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_5_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#care_modal"></i></p>
							<p>{!!$page_data->aspect_5_desc!!}</p>
							<p>{!!$page_data->aspect_5_desc_text!!}</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_6_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#sincerity_modal"></i></p>
							<p>{!!$page_data->aspect_6_desc!!}</p>
							<div class="row">
								@foreach ($sincerities_info as $item_sin)
									@if($item_sin->sincerities_desc != '')
										<div class="row">
											<div class="col-1 sincerity_check_icon_col text-right" style="width: 8%;">
												<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
											</div>
											<div class="col-8 sincerity_check_text_col">
												<span class="sincerity_check_text_admin" id="sincerities_point">
													{!! htmlspecialchars_decode($item_sin->sincerities_desc) !!}
												</span>
											</div>
										</div>
									@endif
								@endforeach
							</div>

							<div class="space-30"></div>
							<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#image_modal"></i>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										@php $section_1_img_link =  URL::to('/').'/'.$page_data->aspect_cta_1_img; @endphp
										<img src="{{ $section_1_img_link }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">

										
										<div class="card-body">
											<h5 class="card-title mb-10">{!!$page_data->aspect_cta_1_title!!}</h5>
											<a href="{{ url($page_data->aspect_cta_1_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										@php $section_2_img_link =  URL::to('/').'/'.$page_data->aspect_cta_2_img; @endphp
										<img src="{{$section_2_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title mb-10">{!!$page_data->aspect_cta_2_title!!}</h5>
											<a href="{{url ($page_data->aspect_cta_2_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										@php $section_3_img_link =  URL::to('/').'/'.$page_data->aspect_cta_3_img; @endphp
										<img src="{{$section_3_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title mb-10">{!!$page_data->aspect_cta_3_title!!}</h5>
											<a href="{{url ($page_data->aspect_cta_3_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="space-60"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>
			
			<div class="container">
				<div class="col-12">
					<div class="row">
						<h4 class="fw-bold">{!!$page_data->brand_title!!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#brand_promise_modal"></i></h4>
						<div class="space-20"></div>
					</div>
					<div class="brand_promise" style="background-image:url('../../../{{$page_data->brand_img}}')">
						<div class="col-md-4 brand_promise_desc">
							<p>{!!$page_data->brand_desc_1!!}</p>
						</div>
						<div class="col-md-8">
							
						</div>
					</div>
					<div class="space-20"></div>
					<div class="row">
						<p>{!!$page_data->brand_desc_2!!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Modal --}}
{{-- Our Mission --}}
<div class="modal fade" id="our_mission_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/ourmission/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Our Mission Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="page_title_1" class="col-form-label">Section Title</label>
								<input type="text" class="form-control" id="page_desc_1" name="page_title_1" value="{!!$page_data->page_title_1!!}">
								
								<div class="space-20"></div>
								
								<label for="page_desc_1" class="col-form-label">Section Information</label>
								<textarea class="form-control" id="page_desc_1" name="page_desc_1" rows="10" spellcheck="false" >{!!$page_data->page_desc_1!!}</textarea>
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
{{-- Our Corporate Values --}}
<div class="modal fade" id="corporate_values_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/corporatevalues/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Our Corporate Values Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="page_title_2" class="col-form-label">Section Title</label>
								<input type="text" class="form-control" id="page_title_2" name="page_title_2" value="{{$page_data->page_title_2}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="page_desc_2" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="page_desc_2" rows="10" spellcheck="false" >{!!$page_data->page_desc_2!!}</textarea>
							</div>

							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_1" class="col-form-label">Aspect 1</label>
								<textarea class="form-control aspect_text" id="aspect_1" name="aspect_1" spellcheck="false" >{{$page_data->aspect_1}}</textarea>
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_2" class="col-form-label">Aspect 2</label>
								<textarea class="form-control aspect_text" id="aspect_2" name="aspect_2" rows="10" spellcheck="false" >{{$page_data->aspect_2}}</textarea>
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_3" class="col-form-label">Aspect 3</label>
								<textarea class="form-control aspect_text" id="aspect_3" name="aspect_3" rows="10" spellcheck="false" >{{$page_data->aspect_3}}</textarea>
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_4" class="col-form-label">Aspect 4</label>
								<textarea class="form-control aspect_text" id="aspect_4" name="aspect_4" rows="10" spellcheck="false" >{{$page_data->aspect_4}}</textarea>
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_5" class="col-form-label">Aspect 5</label>
								<textarea class="form-control aspect_text" id="aspect_5" name="aspect_5" rows="10" spellcheck="false" >{{$page_data->aspect_5}}</textarea>
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_6" class="col-form-label">Aspect 6</label>
								<textarea class="form-control aspect_text" id="aspect_6" name="aspect_6" rows="10" spellcheck="false" >{{$page_data->aspect_6}}</textarea>
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
{{-- Excellance --}}
<div class="modal fade" id="excellance_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/excellance/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px 40px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Excellence Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_1_title" class="col-form-label">Section Title</label>
								<input type="aspect_1_title" class="form-control" id="aspect_1_title" name="aspect_1_title" value="{{$page_data->aspect_1_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_1_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="aspect_1_desc" name="aspect_1_desc" rows="10" spellcheck="false" >{{$page_data->aspect_1_desc}}</textarea>
							</div>

							
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				<br>
			</div>
		</div>
		<div class="modal-footer"></div>
	</form>
</div>
</div>
{{-- Team --}}
<div class="modal fade" id="team_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/team/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Team Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_2_title" class="col-form-label">Section Title</label>
								<input type="aspect_2_title" class="form-control" id="page_desc_1" name="aspect_2_title" value="{{$page_data->aspect_2_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_2_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_2_desc" rows="10" spellcheck="false" >{{$page_data->aspect_2_desc}}</textarea>
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
{{-- Honesty --}}
<div class="modal fade" id="honesty_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/honesty/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Honestry Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_3_title" class="col-form-label">Section Title</label>
								<input type="aspect_3_title" class="form-control" id="page_desc_1" name="aspect_3_title" value="{{$page_data->aspect_3_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_3_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_3_desc" rows="10" spellcheck="false" >{{$page_data->aspect_3_desc}}</textarea>
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
{{-- Integrity --}}
<div class="modal fade" id="integrity_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/integrity/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Integrity Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_4_title" class="col-form-label">Section Title</label>
								<input type="aspect_4_title" class="form-control" id="page_desc_1" name="aspect_4_title" value="{{$page_data->aspect_4_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_4_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_4_desc" rows="10" spellcheck="false" >{{$page_data->aspect_4_desc}}</textarea>
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
{{-- Care --}}
<div class="modal fade" id="care_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/care/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Care Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_5_title" class="col-form-label">Section Title</label>
								<input type="aspect_5_title" class="form-control" id="page_desc_1" name="aspect_5_title" value="{{$page_data->aspect_5_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_5_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_5_desc" rows="10" spellcheck="false" >{{$page_data->aspect_5_desc}}</textarea>
							</div>
							<!-- <div class="col-md-12">
								<label for="aspect_5_desc_text" class="col-form-label">Section Information 2</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_5_desc_text" rows="10" spellcheck="false" >{{$page_data->aspect_5_desc_text}}</textarea>
							</div> -->
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
{{-- sincerity --}}
<div class="modal fade" id="sincerity_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/sincerity/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Sincerity Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_6_title" class="col-form-label">Section Title</label>
								<input type="aspect_6_title" class="form-control" id="page_desc_1" name="aspect_6_title" value="{{$page_data->aspect_6_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_6_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_6_desc" rows="10" spellcheck="false" >{{$page_data->aspect_6_desc}}</textarea>
							</div>
							<div class="space-20"></div>
							@php
								$sincerities_count = 1
							@endphp
							@foreach ($sincerities_info as $item_sin)
								<div class="col-md-10">								
									<input type="hidden" name="sin_id_{{$sincerities_count}}" value="{{$item_sin->id}}">
									<label class="col-form-label">Point {{$sincerities_count}}</label>
									<textarea class="form-control sin_info" id="sincerities_point_{{$sincerities_count}}" name="sincerities_desc_{{$sincerities_count}}" rows="4" spellcheck="false">{!! htmlspecialchars_decode($item_sin->sincerities_desc) !!}
									</textarea>
									<div class="space-20" id="sincerities_point_space_{{$sincerities_count}}"></div>
									
								</div>
								<div class="col-md-2">
								</div>
								@php
									$sincerities_count = $sincerities_count + 1;
								@endphp
							@endforeach
							<input type="hidden" name="sincerities_count" id="sincerities_count" value="{{$sincerities_count - 1}}">
							<div class="col-md-12" style="margin-bottom: 10px;">
								<button type="button" class="btn btn-primary" onclick="SinceritiesDetailAdd()">Add More Sincerities</button>
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
{{-- Images --}}
<div class="modal fade" id="image_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/mission-corporate-cta/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<label for="aspect_cta_1_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_1_img" id="aspect_cta_1_img" />
							<input type="hidden" name="aspect_cta_1_img_old" id="aspect_cta_1_img_old" value="{{$page_data->aspect_cta_1_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_1_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="aspect_cta_1_title" name="aspect_cta_1_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_1_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_1_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_1_link" value="{{$page_data->aspect_cta_1_link}}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="aspect_cta_2_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_2_img" id="aspect_cta_2_img" />
							<input type="hidden" name="aspect_cta_2_img_old" id="aspect_cta_2_img_old" value="{{$page_data->aspect_cta_2_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_2_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_cta_2_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_2_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_2_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_2_link" value="{{$page_data->aspect_cta_2_link}}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="aspect_cta_3_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_3_img" id="aspect_cta_3_img" />
							<input type="hidden" name="aspect_cta_3_img_old" id="aspect_cta_3_img_old" value="{{$page_data->aspect_cta_3_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_3_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_cta_3_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_3_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_3_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_3_link" value="{{$page_data->aspect_cta_3_link}}">
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
{{-- Brand Promise --}}
<div class="modal fade" id="brand_promise_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/brandpromise/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Brand Promise Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="brand_title" class="col-form-label">Section Title</label>
								<input type="brand_title" class="form-control" id="page_desc_1" name="brand_title" value="{{$page_data->brand_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="brand_desc_1" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="brand_desc_1" name="brand_desc_1" rows="10" spellcheck="false" >{{$page_data->brand_desc_1}}</textarea>
							</div>
							<div class="col-md-12">
								<label for="brand_desc_2" class="col-form-label">Section Information 2</label>
								<textarea class="form-control" id="brand_desc_2" name="brand_desc_2" rows="10" spellcheck="false" >{{$page_data->brand_desc_2}}</textarea>
							</div>
							<label for="aspect_cta_2_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 1100 * 366 - webp )</small>
							<input class="form-control" type="file" name="brand_img" id="page_brand_img" />
							<input type="hidden" name="brand_img_old" id="brand_img_old" value="{{$page_data->brand_img}}">
							
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

<div class="space-60"></div>
@include('layouts.admin-footer', ['page'=>''])


<script type="text/javascript">
	function ExcellenceDetailAdd() {
		var excellence_count = $("#excellence_count").val();
		var excellence_count_new = parseInt(excellence_count) + 1;
		var excellence_add_html = 	'<input type="hidden" name="exce_id_'+excellence_count_new+'" value="0">'+
									'<label class="col-form-label">Point '+excellence_count_new+'</label>'+
									'<textarea class="form-control exce_info" id="excellence_point_'+excellence_count_new+'" name="excellence_desc_'+excellence_count_new+'" rows="4" spellcheck="false">'+
									'</textarea>'+
									'<div class="space-20" id="excellence_point_space_'+excellence_count_new+'"></div>';

		if (excellence_count_new == 1) {
			$(".excellence_first_point").after(excellence_add_html);
		} else {
			$("#excellence_point_space_"+excellence_count).after(excellence_add_html);
		}

		$("#excellence_count").val(excellence_count_new);

		tinymce.init({
			selector: 'textarea',
			height: 600,
			plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
			file_picker_types: 'image',
			block_unsupported_drop: true
		});
	}
		
	function SinceritiesDetailAdd() {
		var sincerities_count = $("#sincerities_count").val();
		var sincerities_count_new = parseInt(sincerities_count) + 1;

		var sincerities_add_html =	'<input type="hidden" name="sin_id_'+sincerities_count_new+'" value="0">'+
									'<label class="col-form-label">Point '+sincerities_count_new+'</label>'+
									'<textarea class="form-control sin_info" id="sincerities_point_'+sincerities_count_new+'" name="sincerities_desc_'+sincerities_count_new+'" rows="4" spellcheck="false">'+
									'</textarea>'+
									'<div class="space-20" id="sincerities_point_space_'+sincerities_count_new+'"></div>';

		if (sincerities_count_new == 1) {
			$(".sincerities_first_point").after(sincerities_add_html);
		} else {
				$("#sincerities_point_space_"+sincerities_count).after(sincerities_add_html);
		}

		$("#sincerities_count").val(sincerities_count_new);

		tinymce.init({
			selector: 'textarea',
			height: 600,
			plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
			file_picker_types: 'image',
			block_unsupported_drop: true
		});
	}

	$("#page_brand_img").change(function() {
		$("#brand_img_old").val('');
	});

	tinymce.init({
		selector: 'textarea#aspect_1',
        height: 300,
        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
        file_picker_types: 'image',
	    block_unsupported_drop: true
	});

</script>

@endsection('content')