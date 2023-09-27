@php
	$banner_data = App\Models\PageBanner::where('page_slug',$page)->first();
	$base_url = URL::to('/').'/';
	$banner_link =  $base_url.$banner_data->desktop_banner;
	$mobile_banner_link =  $base_url.$banner_data->mobile_banner;
@endphp

<link rel="stylesheet" href="{{ url('/css/banner.css') }}" />
<style type="text/css">
	.banner_edit_btn {
		position: absolute;
	    right: 0px;
	    top: 10px;
	}
</style>

@if($page == 'corporate_policies')
	<div class="corporate_policies_banner banner_bg" style="background-image:url('{{$banner_link}}')">
		<div class="container" style="position: relative;">
			<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#banner_modal">Edit Banner Section</button>
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_policies_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Corporate Policies</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Corporate Policies</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_bank_profile')
	<div class="aya_bank_profile_banner banner_bg" style="background-image:url('{{$banner_link}}')">
		<div class="container" style="position: relative;">
			<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#banner_modal">Edit Banner Section</button>
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="aya_bank_profile_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">{!! $banner->banner_title !!}</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">AYA Bank <span class="theme_text_color">Profile</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are') }}" style="color: #666;">WHO WE ARE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/corporate-profile') }}" style="color: #666;">CORPORATE PROFILE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile/') }}"><span style="color: #A5000B;">AYA BANK PROFILE</span></a>
			</p>
		</div>
	</div>
@endif









{{-- PMT --}}
@if($page == 'mission_promise')
	<div class="aya_bank_profile_banner banner_bg" style="background-image:url('{{$banner_link}}')">
		<div class="container" style="position: relative;">
			<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#banner_modal">Edit Banner Section</button>
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="aya_bank_profile_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">{!! $banner_data->banner_title !!}</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">AYA Bank <span class="theme_text_color">Profile</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are') }}" style="color: #666;">WHO WE ARE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/corporate-profile') }}" style="color: #666;">CORPORATE PROFILE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile/') }}"><span style="color: #A5000B;">AYA BANK PROFILE</span></a>
			</p>
		</div>
	</div>
@endif


<!-- Modals -->
<div class="modal fade" id="banner_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/banner/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4 for="desktop_banner_image" class="mb-0">Banner Section Update</h4>
							<small class="theme_text_color">Desktop Banner Image Size & Format ( 1920 * 500 - webp )</small>
							<small class="theme_text_color">Mobile Banner Image Size & Format ( 767 * 500 - webp )</small>
							<br><br>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="desktop_banner_image" class="col-md-2 col-form-label">Banner Image</label>
								<input class="form-control" type="file" name="desktop_banner_image" id="desktop_banner_image" />
								
								<div class="space-20"></div>
								
								<label for="desktop_banner_image" class="col-md-2 col-form-label">Mobile Banner Image</label>
								<input class="form-control" type="file" name="mobile_banner_image" id="mobile_banner_image" />
								
								<div class="space-20"></div>

								<input type="hidden" name="desktop_img_old" id="desktop_img_old" value="{{$banner_data->desktop_banner}}">
								<input type="hidden" name="mobile_img_old" id="mobile_img_old" value="{{$banner_data->mobile_banner}}">

								<label for="section1_fact_title" class=" col-form-label">Banner Tagline</label>
								<textarea class="form-control" id="banner_tagline" name="banner_tagline" rows="3" spellcheck="false" >{{$banner_data->banner_title}}</textarea>

								<input type="text" name="page_slug" id="page_slug" value="{{ $banner_data->page_slug }}">
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

