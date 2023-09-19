@php
	$base_url = URL::to('/').'/';
@endphp
@if($page == 'aya_bank_profile')
	@php
		$banner = App\Models\AboutAYA\AyabankProfilePageConfigure::first();
	@endphp
@endif
<link rel="stylesheet" href="{{ url('/css/banner.css') }}" />
<style type="text/css">
	.banner_edit_btn {
		position: absolute;
	    right: 0px;
	    top: 10px;
	}
</style>

@if($page == 'corporate_policies')
	@php
		$banner = App\Models\AboutAYA\AyabankProfilePageConfigure::first();
		$banner_link =  URL::to('/').'/'.$banner->banner;
	@endphp
	<div class="corporate_policies_banner banner_bg">
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

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE POLICIES</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'aya_bank_profile')
	@php
		$banner = App\Models\AboutAYA\AyabankProfilePageConfigure::first();
		$banner_link =  URL::to('/').'/'.$banner->banner;
	@endphp
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

@if($page == 'mobilebanking')
	<div class="mbanking_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="mb_tag">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div class="tag_line_div">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Banking within the <span style="color: #A5000B;">palm of your hand</span></h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<p></p>
					</div>
				</div>
				<div class="mb_tag_mid">
					<div class="col-md-8 text-right" style="text-align: right;position: relative;">
						<div class="tag_line_div">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Banking within the <span style="color: #A5000B;">palm of your hand</span></h1>
						</div>
					</div>
					<div class="col-md-5" style="text-align: right;">
						<p></p>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Banking within the</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;color: #A5000B;"><span style="color: #A5000B;">palm of your hand</span></h1>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/online-payment-services') }}" style="color: #666;">ONLINE PAYMENT SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MOBILE BANKING</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'internetbanking')
	<div class="ibanking_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: right;position: relative;">
					<div class="tag_line_div">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Banking with AYA is <span style="color: #A5000B;">easier</span> than <span style="color: #A5000B;">"ABC..."</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 20px;right: 160px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Banking with AYA is <span style="color: #A5000B;">easier</span> than <span style="color: #A5000B;">"ABC..."</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/online-payment-services') }}" style="color: #666;">ONLINE PAYMENT SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">INTERNET BANKING</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'corporate_internet_banking')
	<div class="cib_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: left;position: relative;">
					<div class="cib_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Your business's financial transactions <span style="color: #A5000B;">at your fingertips</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 20px;right: 55px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">Your business's financial transactions <span style="color: #A5000B;">at your fingertips</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/online-payment-services') }}" style="color: #666;">ONLINE PAYMENT SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE INTERNET BANKING</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'debitcard')
	<div class="debitcard_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6" style="position: relative;">
					<div class="debit_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Nothing can be more simpler than <span class="theme_text_color">a cashless payment</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Nothing can be more simpler than <span style="color: #A5000B;">a cashless payment</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">DEBIT CARD</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'creditcard')
	<div class="creditcard_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: right;position: relative;">
					<div class="credit_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Define your life style with <span style="color: #A5000B;">AYA Credit Cards</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Define your life style with</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;"><span style="color: #A5000B;">AYA Credit Cards</span></h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;"></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CREDIT CARD</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'ecommerce')
	<div class="ecommerce_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="ecommerce_banner_tag">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 150px;right: 0;">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Register <span style="color: #A5000B;">E-commerce Business</span> with Us</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
					</div>
				</div>
				<div class="ecommerce_banner_tag_mid">
					<div class="col-md-8 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 150px;right: 0;">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Register <span style="color: #A5000B;">E-commerce Business</span> with Us</h1>
						</div>
					</div>
					<div class="col-md-4" style="text-align: right;">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Register <span style="color: #A5000B;">E-commerce Business</span><br>with Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/card-services/merchant-services') }}" style="color: #666;">MERCHANT SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">E COMMERCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'smsalert')
	<div class="smsalert_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: right;position: relative;">
					<div class="smsalert_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">In touch</span> with your bank account and <span style="color: #A5000B;">transactions 24/7</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;"><span style="color: #A5000B;">Make your priorities</span> with AYA Credit Cards. A Step that changes your <span style="color: #A5000B;">lifestyle.</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/guideline') }}" style="color: #666;">GUIDLINES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/guideline/digital-secure') }}" style="color: #666;">SECURITY ADVICE FOR DIGITAL SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SMS ALERT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'prepaid')
	<div class="prepaid_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div>
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div class="prepaid_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Pick AYA World Travel Card, <span style="color: #A5000B;">explore the world and make life more fun!</span></h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;">Pick AYA World Travel Card,<br><span style="color: #A5000B;">explore the world and make life more fun!</span></h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 20px;line-height: 22px;color: #A5000B;"></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">PREPAID CARD</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'simplepay')
	<div class="simplepay_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: right;position: relative;">
					<div style="position: absolute;top: 156px;right: 75px;">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Buy big,</span> pay by bits</h1>
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"></h1>
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">
							
						</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"><span style="color: #A5000B;">Buy big, </span>pay by bits</h1>
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;color: #A5000B;"></h1>
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SIMPLE PAY</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'reset')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<h1 class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RESET PIN</span>
			</h1>
		</div>
	</div>
@endif

@if($page == 'digital_secure')
	<div class="digital_secure_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="digital_secure_tag">
					<div class="col-md-6 text-right" style="text-align: left;position: relative;">
						<div style="position: absolute;top: 156px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Digital security, <span style="color: #A5000B;">our utmost priority</span></h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
					</div>
				</div>
				<div class="digital_secure_tag_mid">
					<div class="col-md-8 text-right" style="text-align: left;position: relative;">
						<div style="position: absolute;top: 156px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Digital security, <span style="color: #A5000B;">our utmost priority</span></h1>
						</div>
					</div>
					<div class="col-md-4" style="text-align: right;">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;right: 55px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">Digital security,</h1>
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"><span style="color: #A5000B;">our utmost priority</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/guideline') }}" style="color: #666;">GUIDELINES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SECURITY ADVICE FOR DIGITAL SERVICES</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'frequently-used-digital')
	<div class="frequently_digital_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="frequently_tag">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 156px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Frequently Used </h1>
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Digital Services</span> in Daily life</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
					</div>
				</div>
				<div class="frequently_tag_mid">
					<div class="col-md-7 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 156px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Frequently Used </h1>
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Digital Services</span> in Daily life</h1>
						</div>
					</div>
					<div class="col-md-5" style="text-align: right;">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;right: 55px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">Frequently Used <span style="color: #A5000B;">Digital Services</span></h1>
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">in Daily life</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/guideline') }}" style="color: #666;">GUIDELINES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FREQUENTLY USED DIGITAL SERVICES IN DAILY LIFE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'pos')
	<div class="pos_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div class="pos_tagline">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Hassel free</span> transactions for your <span style="color: #A5000B;">Business</span></h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 25px;left: 25px;right: 55px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"><span style="color: #A5000B;">Hassel free</span> transactions</h1>
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">for your <span style="color: #A5000B;">Business</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i><a href="{{ url('/digital-services/card-services') }}" style="color: #666;">&nbsp;CARD SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/card-services/merchant-services') }}" style="color: #666;">MERCHANT SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">POS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'ayapay')
	<div class="ayapay_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="ayapay_tag">
					<div class="col-md-12 text-left" style="position: relative;">
						<div style="position: absolute;top: 160px;right: 130px;left: 30px;">
							<h1 class="f-white" style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;color: #A5000B;">Make Your Transactions<br>Easy with AYA Pay</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;"></div>
				</div>
				<!-- <div class="ayapay_tag_mid">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 170px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Make Your Transactions</h1>
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;color: #A5000B;">Easy with AYA Pay</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;"></div>
				</div> -->
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 190px;left: 150px;right: 30px;">
						<h1 class="f-white" style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;">Make Your Transactions Easy with AYA Pay</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services/wallet-solution') }}" style="color: #666;">WALLET SOLUTION&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA PAY</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'atm')
	<div class="atm_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="ayapay_tag">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 200px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;color: #A5000B;">Your 24/7 Teller</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;"></div>
				</div>
				<div class="ayapay_tag_mid">
					<div class="col-md-6 text-right" style="text-align: right;position: relative;">
						<div style="position: absolute;top: 200px;right: 130px;">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;color: #A5000B;">Your 24/7 Teller</h1>
						</div>
					</div>
					<div class="col-md-6" style="text-align: right;"></div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;right: 55px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 25px;color: #A5000B;">Your 24/7 Teller</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/digital-services') }}" style="color: #666;">DIGITAL SERVICES&nbsp;</a>
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ATM</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'health_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">HEALTH INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="health_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/health/family_img.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Health<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Health is wealth.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Guard your hard-earned savings from emergency healthcare and illness expenditures.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							A flexible health insurance product that provides essential healthcare expense and medical coverage is all you need.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/health/family_img.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Health Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Health is wealth.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Guard your hard-earned savings from emergency healthcare and illness expenditures.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							A flexible health insurance product that provides essential healthcare expense and medical coverage is all you need.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'motor_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MOTOR INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="motor_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/motor/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Motor<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Uncertainties are nature of our life and even the road trips can be stressful for you.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Protect yourself and those that matter to you from losses resulting from unforeseen accidents. A motor insurance with a full range of protection features that keep up with your needs is all you need.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/motor/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Motor Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Uncertainties are nature of our life and even the road trips can be stressful for you.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Protect yourself and those that matter to you from losses resulting from unforeseen accidents. A motor insurance with a full range of protection features that keep up with your needs is all you need.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'fire_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FIRE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="fire_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/fire/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div" >
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Fire<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Shield your property and business investments from financial losses arising from damage ranging from fire, explosions, and natural disasters.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							With Fire Insurance, you and your assets are well covered for whatever it is come. 
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/fire/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Fire Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Shield your property and business investments from financial losses arising from damage ranging from fire, explosions, and natural disasters.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							With Fire Insurance, you and your assets are well covered for whatever it is come. 
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'pa_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">PERSONAL ACCIDENT INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="pa_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/PA/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Personal Accident<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Accidents happen when least expected and at times turn into dramatically life changing events. What’s worse is the financial burden that comes with it.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Purchase a personal accident insurance safety net which provides comprehensive accident coverage.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/PA/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Personal Accident Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Accidents happen when least expected and at times turn into dramatically life changing events. What’s worse is the financial burden that comes with it.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Purchase a personal accident insurance safety net which provides comprehensive accident coverage.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_go_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general/travel') }}" style="color: #666;">TRAVEL INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA GO TRAVEL INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="aya_go_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/aya-go/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">AYA Go<br>Travel Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Are you planning for a business travel or a personal trip around Myanmar?
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							You’re protected from a variety of unexpected circumstances, allowing you to enjoy every moment. Explore Myanmar with AYA Go!
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/aya-go/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">AYA Go Travel Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Are you planning for a business travel or a personal trip around Myanmar?
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							You’re protected from a variety of unexpected circumstances, allowing you to enjoy every moment. Explore Myanmar with AYA Go!
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_joy_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general') }}" style="color: #666;text-transform: uppercase;">General Insurance</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/general/travel') }}" style="color: #666;">TRAVEL INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA JOY TRAVEL INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="aya_joy_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/aya-joy/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">AYA Joy<br>Travel Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Planning on a destination trip or quick getaway?
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Enjoy your travel overseas knowing that you have a travel companion to keep you safe and protected. Explore the world with AYA Joy travel insurance.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/aya-joy/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">AYA Joy Travel Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Planning on a destination trip or quick getaway?
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Enjoy your travel overseas knowing that you have a travel companion to keep you safe and protected. Explore the world with AYA Joy travel insurance.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'life_universal_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/life') }}" style="color: #666;">LIFE INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">UNIVERSAL LIFE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="life_universal_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/life/universal/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 life_tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Universal<br>Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Have you ever asked yourself – if you are well prepared financially for any emergency in life?
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							To help protect you and your family’s financial future, we provide the features of protection, saving and flexibility for the ever-changing needs through your life journey.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Protect yourself and your loved ones with Universal Life.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/life/universal/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Universal Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Have you ever asked yourself – if you are well prepared financially for any emergency in life?
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							To help protect you and your family’s financial future, we provide the features of protection, saving and flexibility for the ever-changing needs through your life journey.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Protect yourself and your loved ones with Universal Life.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'life_short_term_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/life') }}" style="color: #666;">LIFE INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SHORT TERM ENDOWMENT LIFE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="life_short_term_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/life/short-term/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 life_tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Short-Term Endowment<br>Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 15%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							It’s always the best idea to increase your financial security. Having a life insurance policy ensures financial stability in case of any uncertainty in the near future.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Our Short-Term Endowment helps you save to meet your financial goals with protection benefits.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/life/short-term/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Short-Term Endowment Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							It’s always the best idea to increase your financial security. Having a life insurance policy ensures financial stability in case of any uncertainty in the near future.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Our Short-Term Endowment helps you save to meet your financial goals with protection benefits.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'life_edu_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/life') }}" style="color: #666;">LIFE INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">EDUCATION LIFE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="life_edu_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/life/education/education_model.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 life_tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Education<br>Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 15%;margin: 0px 0px 20px 0px;">
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							We are creating a community of learners. Our Education Life Insurance is designed to help parents save and ensure that their children could continue their education no matter what the future holds.
						</h1>
						<h1 class="tagline_desc" style="font-weight: 400;font-size: 15px;">
							Learn more about our education insurance products.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/life/education/education_model.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Education Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							We are creating a community of learners. Our Education Life Insurance is designed to help parents save and ensure that their children could continue their education no matter what the future holds.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Learn more about our education insurance products.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'life_one_health_indi_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/insurance/life') }}" style="color: #666;">LIFE INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ONE HEALTH SOLUTION INDIVIDUAL PLAN</span>
			</p>
		</div>
	</div>
	<div class="life_one_health_indi_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/life/one-health/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 one_health_tagline_div">
						<h1 class="one_health_tag_title">One Health Solution<br>Individual Plan</h1>
						<hr style="height: 5px;color: #A5000B;width: 15%;margin: 0px 0px 10px 0px;">
						<h1 class="one_health_tagline_desc" style="margin-bottom: 0px;">
							With the constant escalating costs of healthcare and the ever-rising instances of new diseases in the world, medical insurance becomes a basic need today. The fallout from a medical emergency or unforeseen expense could extend beyond your immediate finances to loss of income.
						</h1>
						<h1 class="one_health_tagline_desc">
							To avoid this, One Health Solution provides comprehensive much-needed financial support and safeguarding in difficult times against escalating medical costs and more, so that you can be rest assured your medical costs are covered.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/life/one-health/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">One Health Solution Individual Plan</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							With the constant escalating costs of healthcare and the ever-rising instances of new diseases in the world, medical insurance becomes a basic need today. The fallout from a medical emergency or unforeseen expense could extend beyond your immediate finances to loss of income.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							To avoid this, One Health Solution provides comprehensive much-needed financial support and safeguarding in difficult times against escalating medical costs and more, so that you can be rest assured your medical costs are covered.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'calldeposit')
	<div class="calldeposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="call_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">A short-term investment that can facilitate <span style="color: #A5000B;">flexible cash management</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">A short-term investment that can facilitate <span style="color: #A5000B;">flexible cash management</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CALL DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'premium_calldeposit')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/call-deposit') }}" style="color: #666;">CALL DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">PREMIUM CALL DEPOSIT</span>
			</p>
		</div>
	</div>
	<div class="premium_calldeposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="premium_calldeposit_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">Premium Call Deposit</span><br><span>A simple deposit option to manage funds</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 15px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">Premium Call Deposit</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 18px;line-height: 28px;">A simple deposit option to manage funds</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'new_business_call')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/call-deposit') }}" style="color: #666;">CALL DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">NEW BUSINESS CALL</span>
			</p>
		</div>
	</div>
	<div class="new_business_call_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="new_business_call_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">New Business Call</span><br><span>Convenient way to save and invest your cash</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 15px;right: 100px;">
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;color: #A5000B;font-size: 18px;">New Business Call</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;font-size: 18px;">Convenient way to save and invest your cash</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'currentdeposit')
	<div class="currentdeposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="call_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Make your everyday</span> banking<br><span style="color: #A5000B;">easy and access</span> funds anytime</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 110px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 28px;"><span style="color: #A5000B;">Make your everyday</span> banking<br><span style="color: #A5000B;">easy and access</span> funds anytime</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CURRENT DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'regular_curr_acc')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/account-saving/current-deposit') }}" style="color: #666;">CURRENT DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">REGUALR CURRENT ACCOUNT</span>
			</p>
		</div>
	</div>
	<div class="regular_curr_acc_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-7 text-left" style="text-align: left;position: relative;">
					<div class="regular_curr_acc_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 26px;line-height: 30px;">Regular Current Account</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;width: 70%;font-size: 26px;line-height: 30px;">Are you looking for an everyday account?</h1>
					</div>
				</div>
				<div class="col-md-5" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 15px;">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 18px;line-height: 28px;color: #A5000B;">Regular Current Account</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 18px;line-height: 28px;">Are you looking for an everyday account?</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'seafarer')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/account-saving/current-deposit') }}" style="color: #666;">CURRENT DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SEAFARER ACCOUNT (FCY)</span>
			</p>
		</div>
	</div>
	<div class="seafarer_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-7 text-left" style="text-align: left;position: relative;">
					<div class="seafarer_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;"><span style="color: #A5000B;font-size: 26px;line-height: 30px;">Seafarer Account (FCY)</span><br><span style="font-size: 26px;line-height: 30px;">Unique banking solution for seafarers to manage payroll and finance</span></h1>
					</div>
				</div>
				<div class="col-md-5" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 240px;left: 15px;background: #fffc;padding: 10px;right: 15px;">
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;color: #A5000B;font-size: 18px;">Seafarer Account (FCY)</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 18px;line-height: 28px;">Unique banking solution for seafarers to manage payroll and finance</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'new_business_curr_acc')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/account-saving/current-deposit') }}" style="color: #666;">CURRENT DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">NEW BUSINESS CURRENT ACCOUNT</span>
			</p>
		</div>
	</div>
	<div class="new_business_curr_acc_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="new_business_curr_acc_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 26px;line-height: 30px;">New Business Current Account</h1>
						<h1 class="new_business_curr_acc_desc" style="font-size: 26px;line-height: 30px;">Make your cash management more accessible</h1>
					</div>
				</div>
				<div class="col-md-5" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 15px;">
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;color: #A5000B;font-size: 18px;">New Business Current Account</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;font-size: 18px;">Make your cash management more accessible</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'retail_fca_curr_acc')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/account-saving/current-deposit') }}" style="color: #666;">CURRENT DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RETAIL FCA CURRENT (FCY)</span>
			</p>
		</div>
	</div>
	<div class="retail_fca_curr_acc_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="retail_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">Retail FCA Current (FCY)</span><br><span>Manage your foreign currency payroll <br>as convenient as local currency</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 15px;">
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;color: #A5000B;font-size: 18px;">Retail FCA Current (FCY)</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;line-height: 24px;font-size: 18px;">Manage your foreign currency payroll <br>as convenient as local currency</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'fixed_deposit')
	<div class="fixed_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="fixed_deposit_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">Maximise savings with<br><span style="color: #A5000B;">AYA Fixed Deposits</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 200px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Maximise savings with<br><span style="color: #A5000B;">AYA Fixed Deposits</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FIXED DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'savingdeposit')
	<div class="savingdeposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="saving_deposit_banner_tagline">
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;">A safe way to save money and<Br><span style="color: #A5000B;">receive the benefits of interest</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 45px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">A safe way to save money and<Br><span style="color: #A5000B;">receive the benefits of interest</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SAVING DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'aya_regular_saving')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}" style="color: #666;">SAVING DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA REGULAR SAVING</span>
			</p>
		</div>
	</div>
	<div class="aya_regular_saving_banner banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-5">
					</div>
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="aya_regular_saving_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">AYA Regular Saving</span><br>A simple account for standard financial transactions</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 70px;left: 140px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">AYA Regular Saving</h1>
						<h1 style="font-weight: 400;margin-bottom: 0;font-size: 18px;line-height: 28px;">A simple account for standard financial transactions</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_maximizer_saving')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}" style="color: #666;">SAVING DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA MAXIMIZER SAVING</span>
			</p>
		</div>
	</div>
	<div class="aya_maximizer_saving_banner banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="aya_maximizer_saving_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">AYA Maximizer Saving</span><br>Earn bonus interest rates on your monthly minimum deposits.</h1>
						</div>
					</div>
					<div class="col-md-5">
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 30px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">AYA Maximizer Saving</h1>
						<h1 style="font-weight: 400;margin-bottom: 10px;width: 65%;font-size: 18px;line-height: 28px;">Earn bonus interest rates on your monthly minimum deposits.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_loyal_saving')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}" style="color: #666;">SAVING DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA LOYAL SAVING</span>
			</p>
		</div>
	</div>
	<div class="aya_loyal_saving_banner banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="aya_loyal_saving_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 10px;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">AYA Loyal Saving</span><br>Reach your goals, grow your savings with competitive interest rate</h1>
						</div>
					</div>
					<div class="col-md-5">
						<h1></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 30px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">AYA Loyal Saving</h1>
						<h1 style="font-weight: 400;margin-bottom: 10px;font-size: 18px;line-height: 28px;">Reach your goals, grow your savings with competitive interest rate</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'ngwe-toe-shwe-o')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}" style="color: #666;">SAVING DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">NGWE TOE MAE-SHWE O</span>
			</p>
		</div>
	</div>
	<div class="ngwe_toe_shwe_o_banner banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="aya_regular_saving_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">Ngwe Toe Mae-Shwe O</span><br>Send money back to your hometown and earn regular interest</h1>
						</div>
					</div>
					<div class="col-md-5">
						<h1></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 30px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">Ngwe Toe Mae-Shwe O</h1>
						<h1 style="font-weight: 400;margin-bottom: 10px;font-size: 18px;line-height: 28px;">Send money back to your hometown and earn regular interest</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aya_su_buu')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving') }}" style="color: #666;">ACCOUNTS AND SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}" style="color: #666;">SAVING DEPOSIT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA SU-BUU</span>
			</p>
		</div>
	</div>
	<div class="aya_su_buu_banner banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="aya_regular_saving_banner_tagline">
							<h1 style="font-weight: 400;margin-bottom: 0;font-size: 26px;line-height: 30px;"><span style="color: #A5000B;">AYA Su-Buu</span><br>Get a head start for future with a well-managed retirement savings scheme</h1>
						</div>
					</div>
					<div class="col-md-5">
						<h1></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 10px;left: 30px;">
						<h1 style="font-weight: 400;margin-bottom: 0;color: #A5000B;font-size: 18px;line-height: 28px;">AYA Su-Buu</h1>
						<h1 style="font-weight: 400;margin-bottom: 10px;font-size: 18px;line-height: 28px;">Get a head start for future with a well-managed retirement savings scheme</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'premium_banking')
	<div class="premium_banking_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="">
					<div class="col-md-6 text-left" style="text-align: left;position: relative;">
						<div class="premium_banking_tagline">
							<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;color: #2e2e2e;"><span style="color: #A5000B;">Relationship</span><br> Beyond Banking</h1>
						</div>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 25px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 25px;color: #2e2e2e;"><span style="color: #A5000B;">Relationship</span><br> Beyond Banking</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/royal-banking') }}" style="color: #A5000B;">ROYAL BANKING</a>&nbsp;
				<!-- <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ROYAL BANKING</span> -->
			</p>
		</div>
	</div>
@endif

@if($page == 'remittance_local')
	<div class="remittance_local_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="tag_line_div">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 34px;padding-right: 120px;"><span style="color: #A5000B;">Send or receive money securely & instantly</span> anywhere in Myanmar at AYA Branches</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"><span style="color: #A5000B;">Send or receive money securely & instantly</span> anywhere in Myanmar at AYA Branches</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/remittance') }}" style="color: #666;">REMITTANCE AND PAYMENTS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">LOCAL REMITTANCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'remittance_inter')
	<div class="remittance_inter_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="remit_inter_tag_line_div">
						<h1>AYA International Remittance is <span style="color: #A5000B;">secure and a quick way to send and receive money, across the global network</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 20px;padding-right: 20px;">AYA International Remittance is <span style="color: #A5000B;">secure and a quick way to send and receive money, across the global network</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/remittance') }}" style="color: #666;">REMITTANCE AND PAYMENTS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">INTERNATIONAL REMITTANCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'remittance_payment')
	<div class="remittance_payment_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="tag_line_div">
						<h1 class="remittance_payment_tag_desc"><span style="color: #A5000B;">Easiest way to make your payment</span> is a priority for us.</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;right: 50px;">
						<h1 style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 22px;"><span style="color: #A5000B;">Easiest way to make your payment</span> is a priority for us.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/remittance') }}" style="color: #666;">REMITTANCE AND PAYMENTS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">PAYMENTS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'autoloan')
	<div class="autoloan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-4 text-left" style="text-align: left;position: relative;">
					<div class="autoloan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Own your dream car </span>with AYA Auto Loan</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span style="color: #A5000B;">Own your dream car </span><br>with AYA Auto Loan</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing/hire-purchase') }}" style="color: #666;">HIRE PURCHASE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AUTO LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'c2cautoloan')
	<div class="c2c_autoloan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="c2c_autoloan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Driving a better customer experience, financing for<span style="color: #A5000B;"> auto purchases from any private seller</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Driving a better customer experience, financing for<span style="color: #A5000B;"> auto purchases from any private seller</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing/hire-purchase') }}" style="color: #666;">HIRE PURCHASE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">C2C AUTO LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'educationloan')
	<div class="educationloan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="educationloan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Planning for <span style="color: #A5000B;">your child's education journey</span> with AYA</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 250px;left: 5px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;background-color: #ffffff99;padding: 20px;">Planning for<Br><span style="color: #A5000B;">your child's education <br>journey</span> with AYA</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing/hire-purchase') }}" style="color: #666;">HIRE PURCHASE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">EDUCATION LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'constructionloan')
	<div class="constructionloan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="constructionloan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Explore a new way to bring <span style="color: #A5000B;">your dream world to life</span> with our home construction and renovation financing.</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 260px;left: 50px;right: 50px;background-color: #ffffff8c;padding: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Explore a new way to bring <span style="color: #A5000B;">your dream world to life</span> with our home construction and renovation financing.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing/hire-purchase') }}" style="color: #666;">HIRE PURCHASE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">HOME CONSTRUCTION AND RENOVATION (HCR) LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'homeloan')
	<div class="homeloan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="homeloan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Ready to step into your <span style="color: #A5000B;">dream home with us</span>.</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Ready to step into your<br><span style="color: #A5000B;">dream home with us</span>.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/borrowing/hire-purchase') }}" style="color: #666;">HIRE PURCHASE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">HOME LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'foreign_currency_exchange')
	<div class="foreign_currency_exchange_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="foreign_currency_exchange_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span style="color: #A5000B;">Buy and sell foreign currencies</span> at AYA Currency Exchange</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 25px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span style="color: #A5000B;">Buy and sell foreign currencies</span><br>at AYA Currency Exchange</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/other-services') }}" style="color: #666;">OTHER SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FOREIGN CURRENCY EXCHANGE SERVICE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'safe_deposit')
	<div class="safe_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="safe_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;">Keep your valuables and documents safe</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 160px;left: 25px;right: 130px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Keep your valuables and documents safe</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking') }}" style="color: #666;">PERSONAL BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/personal-banking/other-services') }}" style="color: #666;">OTHER SERVICES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SAFE DEPOSIT LOCKER</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_acc_sav_call_deposit')
	<div class="bu_acc_sav_call_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_acc_sav_call_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">A simple daily interest-bearing </span>account with easy, instant access</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 50px;left: 25px;right: 80px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">A simple daily interest-bearing </span>account with easy, instant access</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/account-saving') }}" style="color: #666;">ACCOUNT & SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CALL DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_acc_sav_saving_deposit')
	<div class="bu_acc_sav_saving_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_acc_sav_saving_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Watch your savings grow </span><br>with business advantage</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 50px;left: 25px;right: 80px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Watch your savings grow </span><br>with business advantage</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/account-saving') }}" style="color: #666;">ACCOUNT & SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SAVING DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_acc_sav_current_deposit')
	<div class="bu_acc_sav_current_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_acc_sav_current_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Easy everyday banking</span><br> for businesses</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 100px;right: 80px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Easy everyday banking</span><br> for businesses</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/account-saving') }}" style="color: #666;">ACCOUNT & SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CURRENT DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_acc_sav_fixed_deposit')
	<div class="bu_acc_sav_fixed_deposit_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_acc_sav_fixed_deposit_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Earn highest interest</span><br>and maximize returns for your business</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 50px;left: 150px;right: 20px;background-color: #ffffff96;padding: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Earn highest interest</span><br>and maximize returns for your business</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/account-saving') }}" style="color: #666;">ACCOUNT & SAVINGS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FIXED DEPOSIT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_remittance_local')
	<div class="bu_remittance_local_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_remittance_local_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Send payments</span> to <br>your business partners and employees <span class="theme_text_color">seamlessly</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 80px;right: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Send payments</span> to <br>your business partners and <br>employees <span class="theme_text_color">seamlessly</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/remittance') }}" style="color: #666;">REMITTANCE AND PAYMENTS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">LOCAL PAYMENTS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_remittance_inter')
	<div class="bu_remittance_inter_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="bu_remittance_inter_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Send payments to overseas </span> securely</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 80px;right: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Send payments to overseas </span> securely</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/remittance') }}" style="color: #666;">REMITTANCE AND PAYMENTS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">INTERNATIONAL PAYMENTS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_borrowing_corporate_business_loan')
	<div class="bu_borrowing_corporate_business_loan_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_borrowing_corporate_business_loan_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Drive your business forward <br>and explore</span> what you can expect from us</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 50px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Drive your business forward and explore</span> what you can expect from us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE BUSINESS LOAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_borrowing_hire_purchase')
	<div class="bu_borrowing_hire_purchase_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_borrowing_hire_purchase_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">A flexible way </span><br>of financing businesses</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 40px;left: 160px;right: 20px;background-color: #ffffffad;padding: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">A flexible way </span><br>of financing businesses</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">HIRE PURCHASE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_borrowing_SME')
	<div class="bu_borrowing_SME_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_borrowing_SME_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">Support the growth </span><br>of your SME business</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 140px;left: 30px;right: 20px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">Support the growth </span><br>of your SME business</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/borrowing') }}" style="color: #666;">BORROWING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SME FINANCING SOLUTION</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_trade_financing')
	<div class="bu_trade_financing_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_trade_financing_banner_tagline">
						<h1 style="font-size: 26px;font-weight: 400;margin-bottom: 0;line-height: 32px;"><span class="theme_text_color">We essentially assist you </span><br>with the trade cycle funding gap and risk mitigation</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;"><span class="theme_text_color">We essentially assist you </span>with the trade cycle funding gap and risk mitigation</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/trade') }}" style="color: #666;">TRADE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">TRADE FINANCING</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_trade_services')
	<div class="bu_trade_services_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-left" style="text-align: left;position: relative;">
					<div class="bu_trade_services_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Our experts’ strong expertise in trading services guarantees <span class="theme_text_color">your success.</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Our experts’ strong expertise in trading services guarantees <span class="theme_text_color">your success.</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/trade') }}" style="color: #666;">TRADE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">TRADE SERVICES</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_cash_management')
	<div class="bu_cash_management_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-5 text-left" style="text-align: left;position: relative;">
					<div class="bu_cash_management_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Cash Management Service <span class="theme_text_color">at your Fingertips</span></h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<h1></h1>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 170px;left: 10px;right: 90px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Cash Management Service <span class="theme_text_color">at your Fingertips</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CASH MANAGEMENT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'bu_domestic_marine_cargo_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">DOMESTIC MARINE CARGO INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_domestic_marine_cargo_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/domestic-marine-cargo/dosmetic.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Domestic Marine Cargo<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_domestic_marine_cargo_insurance_tagline">
							Cargo handling and management either during conveyance or at port poses risks to businesses.
						</h1>
						<h1 class="bu_domestic_marine_cargo_insurance_tagline">
							Domestic marine cargo insurance helps you manage a pool of risks at a timescale that allows you to conduct your business efficiently.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/domestic-marine-cargo/dosmetic.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Domestic Marine Cargo<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Cargo handling and management either during conveyance or at port poses risks to businesses.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Domestic marine cargo insurance helps you manage a pool of risks at a timescale that allows you to conduct your business efficiently.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_oversea_marine_cargo_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">OVERSEA MARINE CARGO INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_oversea_marine_cargo_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/oversea-marine-cargo/oversea.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div" style="padding-right:0">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Oversea Marine Cargo<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_oversea_marine_cargo_insurance_tagline">
							The rough open oceans pose a great threat to the security of marine cargo transportation. The unpredictable seas also carry other dangers and risks like collision, fires, explosions. These risks carry on at port during the discharge and loading of cargo.
						</h1>
						<h1 class="bu_oversea_marine_cargo_insurance_tagline">
							Secure cargo transportation at sea with an effective marine cargo insurance that brings value to you and your business.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/oversea-marine-cargo/oversea.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Oversea Marine Cargo<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							The rough open oceans pose a great threat to the security of marine cargo transportation. The unpredictable seas also carry other dangers and risks like collision, fires, explosions. These risks carry on at port during the discharge and loading of cargo.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Secure cargo transportation at sea with an effective marine cargo insurance that brings value to you and your business.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_domestic_inland_transit_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">DOMESTIC INLAND TRANSIT INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_domestic_inland_transit_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/domestic-inland-transit/inland.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Domestic Inland Transit<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_domestic_inland_transit_insurance_tagline">
							Transporting goods on the road exposes you and your business to unforeseen and unexpected financial loss. Derailment, fire, collision, and explosions are some risks that are inherent to inland transit.
						</h1>
						<h1 class="bu_domestic_inland_transit_insurance_tagline">
							Secure your goods, and your business, with domestic inland transit insurance.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/domestic-inland-transit/inland.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Domestic Inland Transit<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Transporting goods on the road exposes you and your business to unforeseen and unexpected financial loss. Derailment, fire, collision, and explosions are some risks that are inherent to inland transit.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Secure your goods, and your business, with domestic inland transit insurance.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_car_ear_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CONTRACTOR’S ALL RISK & ERECTION ALL RISK (CAR & EAR) INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_car_ear_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/car-ear/CAR_EAR.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Contractor’s All Risk &<br>Erection All Risk (CAR & EAR) Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_car_ear_insurance_tagline">
							Construction projects inherently carry with them risks. We offer comprehensive package for you to run your business safely and ensure protections of your projects and investments.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/car-ear/CAR_EAR.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Contractor’s All Risk &<br>Erection All Risk (CAR & EAR) Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Construction projects inherently carry with them risks. We offer comprehensive package for you to run your business safely and ensure protections of your projects and investments.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_IAR_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">INDUSTRIAL ALL RISK INSURANCE (IAR) INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_IAR_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/IAR/IAR.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Industrial All Risk Insurance (IAR)</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_IAR_insurance_tagline">
							An enhanced solution to the most demanding of needs – the industrial all risk insurance is your go–to product to insure your property and business in one single policy.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/IAR/IAR.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Industrial All Risk Insurance (IAR)</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							An enhanced solution to the most demanding of needs – the industrial all risk insurance is your go–to product to insure your property and business in one single policy.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_group_life_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">GROUP LIFE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="bu_group_life_insurance_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/business/insurance/group-life/group.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Group Life<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 15%;margin: 0px 0px 20px 0px;">
						<h1 class="bu_group_life_insurance_tagline" style="font-weight: 400;font-size: 15px;">
							Employees are greatest asset to any organization. We provide protection Coverage that your employees truly value.
						</h1>
						<h1 class="bu_group_life_insurance_tagline" style="font-weight: 400;font-size: 15px;">
							Group Life Insurance provides life and total permanent disability coverage for employees of your organization.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/business/insurance/group-life/group.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 20px;font-weight: 600;margin-bottom: 0px;color: #000;">Group Life Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Employees are greatest asset to any organization. We provide protection Coverage that your employees truly value.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Group Life Insurance provides life and total permanent disability coverage for employees of your organization.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_motor_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MOTOR INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="motor_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/motor/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Motor<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Uncertainties are nature of our life and even the road trips can be stressful for you.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Protect yourself and those that matter to you from losses resulting from unforeseen accidents. A motor insurance with a full range of protection features that keep up with your needs is all you need.
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/motor/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Motor Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Uncertainties are nature of our life and even the road trips can be stressful for you.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							Protect yourself and those that matter to you from losses resulting from unforeseen accidents. A motor insurance with a full range of protection features that keep up with your needs is all you need.
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'bu_fire_insurance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking') }}" style="color: #666;">BUSINESS BANKING</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/business-banking/insurance') }}" style="color: #666;">INSURANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FIRE INSURANCE</span>
			</p>
		</div>
	</div>
	<div class="fire_ins_banner ins_banner_bg">
		<div class="container">
			<div class="d-none d-sm-block">
				<div class="row">
					<div class="col-md-6 family_img_div">
						<img src="{{ url('/images/insurance/fire/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-6 tagline_div" >
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Fire<br>Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 20%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Shield your property and business investments from financial losses arising from damage ranging from fire, explosions, and natural disasters.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							With Fire Insurance, you and your assets are well covered for whatever it is come. 
						</h1>
					</div>
				</div>
			</div>
			<div class="d-block d-sm-none">
				<div class="row">
					<div class="col-md-6" style="padding-top: 20px;">
						<img src="{{ url('/images/insurance/fire/family.png') }}" class="img-fluid">
					</div>
					<div class="col-md-5" style="padding-top: 20px;padding-left: 30px;">
						<h1 style="font-size: 22px;font-weight: 600;margin-bottom: 0px;color: #000;">Fire Insurance</h1>
						<hr style="height: 5px;color: #A5000B;width: 45%;margin: 0px 0px 20px 0px;">
						<h1 style="font-size: 15px;font-weight: 400;">
							Shield your property and business investments from financial losses arising from damage ranging from fire, explosions, and natural disasters.
						</h1>
						<h1 style="font-size: 15px;font-weight: 400;">
							With Fire Insurance, you and your assets are well covered for whatever it is come. 
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif


@if($page == 'test')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<h1 class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">TEST</span>
			</h1>
		</div>
	</div>
@endif

@if($page == 'enquiry_form')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<h1 class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">GET IN TOUCH</span>
			</h1>
		</div>
	</div>
@endif

@if($page == 'meet_our_leaders')
	<div class="meet_our_leaders_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="meet_our_leaders_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Meet Our Leaders</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Meet Our Leaders</h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/leadership') }}" style="color: #666;">LEADERSHIP</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MEET OUR LEADERS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'contact_board')
	<div class="news_breadcrumb">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are') }}" style="color: #666;">WHO WE ARE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/leadership') }}" style="color: #666;">LEADERSHIP</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/leadership/meet-our-leaders') }}" style="color: #666;">MEET OUR LEADERS</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CONTACT TO THE BOARD</span>
			</p>
		</div>
	</div>
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">Contact the Board of Directors</h1>
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'stakeholder_management')
	<div class="stakeholder_management_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="stakeholder_management_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Stakeholder <span class="theme_text_color">Management</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Stakeholder <span class="theme_text_color">Management</span></h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/our-strategies') }}" style="color: #666;">OUR STRATEGIES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile/') }}"><span style="color: #A5000B;">STAKEHOLDER MANAGEMENT</span></a>
			</p>
		</div>
	</div>
@endif

@if($page == 'risk_management')
	<div class="risk_management_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="risk_management_banner_tagline">
						<h1 class="theme_text_color" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Risk Management</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="theme_text_color" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Risk Management</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RISK MANAGEMENT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'risk_governance')
	<div class="risk_governance_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="risk_governance_banner_tagline">
						<h1 class="theme_text_color" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Risk Governance</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="theme_text_color" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Risk Governance</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a class="breadcrumb_text_color" href="{{ url('/about-aya/governance/risk-management') }}">RISK MANAGEMENT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RISK GOVERNANCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'risk_mgmt_framework')
	<div class="risk_mgmt_framework_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="risk_mgmt_framework_banner_tagline">
						<h1 class="theme_text_color" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Risk Management Framework</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="theme_text_color" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Risk Management Framework</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a class="breadcrumb_text_color" href="{{ url('/about-aya/governance/risk-management') }}">RISK MANAGEMENT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RISK MANAGEMENT FRAMEWORK</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'risk_mgmt_ctl')
	<div class="risk_mgmt_ctl_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="risk_mgmt_ctl_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Risk Management Control</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Risk Management Control</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a class="breadcrumb_text_color" href="{{ url('/about-aya/governance/risk-management') }}">RISK MANAGEMENT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">RISK MANAGEMENT CONTROL</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'managing_risk')
	<div class="managing_risk_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="managing_risk_banner_tagline">
						<h1 class="theme_text_color" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Managing Risk</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="theme_text_color" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Managing Risk</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a class="breadcrumb_text_color" href="{{ url('/about-aya/governance/risk-management') }}">RISK MANAGEMENT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MANAGING RISK</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'compliance')
	<div class="compliance_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="compliance_banner_tagline">
						<h1 class="theme_text_color" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Compliance</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Compliance</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance/compliance') }}" style="color: #666;">COMPLIANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">COMPLIANCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'news')
	<div class="news_breadcrumb">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/news-room') }}" style="color: #666;">NEWSROOM</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;"><a class="theme_text_color" href="{{ url('/about-aya/news-room/corporate-news') }}">CORPORATE NEWS</a></span>
			</p>
		</div>
	</div>
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">Corporate News</h1>
					@if($news_year != '')
						<p class="mt-10"><a class="f-body-color" href="{{ url('/about-aya/news-room/corporate-news') }}">Corporate News</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp; Year:{{ $news_year }}</p>
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'csr_news')
	<div class="news_breadcrumb">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/news-room') }}" style="color: #666;">NEWSROOM</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;"><a class="theme_text_color" href="{{ url('/about-aya/news-room/csr-news') }}">CSR NEWS</a></span>
			</p>
		</div>
	</div>
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">CSR News</h1>
					@if($news_year != '')
						<p class="mt-10"><a class="f-body-color" href="{{ url('/about-aya/news-room/csr-news') }}">CSR News</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp; Year:{{ $news_year }}</p>
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'annoucement')
	<div class="news_breadcrumb">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/news-room') }}" style="color: #666;">NEWSROOM</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;"><a class="theme_text_color" href="{{ url('/about-aya/news-room/announcements') }}">ANNOUNCEMENTS</a></span>
			</p>
		</div>
	</div>
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">ANNOUNCEMENTS</h1>
					@if($news_year != '')
						<p class="mt-10"><a class="f-body-color" href="{{ url('/about-aya/news-room/announcements') }}">ANNOUNCEMENTS</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp; Year:{{ $news_year }}</p>
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'press_release')
	<div class="news_breadcrumb">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/news-room') }}" style="color: #666;">NEWSROOM</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;"><a class="theme_text_color" href="{{ url('/about-aya/news-room/press-release') }}">PRESS RELEASE</a></span>
			</p>
		</div>
	</div>
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">PRESS RELEASE</h1>
					@if($news_year != '')
						<p class="mt-10"><a class="f-body-color" href="{{ url('/about-aya/news-room/press-release') }}">PRESS RELEASE</a> &nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp; Year:{{ $news_year }}</p>
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'mission_promise')
	<div class="mission_promise_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="mission_promise_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Mission, Corporate Values and Brand Promise</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Mission, Corporate Values and Brand Promise</h1>
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
				<span style="color: #A5000B;">MISSION, CORPORATE VALUES, BRAND PROMISE</span></a>
			</p>
		</div>
	</div>
@endif

@if($page == 'corporate_strategy')
	<div class="corporate_strategy_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_strategy_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Corporate Strategy</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Corporate Strategy</h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/our-strategies') }}" style="color: #666;">OUR STRATEGIES</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE STRATEGY</span></a>
			</p>
		</div>
	</div>
@endif

@if($page == 'corporate_governance')
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE GOVERNANCE</span></a>
			</p>
		</div>
	</div>
	<div class="corporate_governance_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_governance_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Corporate Governance</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 90px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Corporate Governance</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@if($page == 'aml_cft')
	<div class="aml_cft_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="aml_cft_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Implementation of <span class="theme_text_color">AML/CFT</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 90px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Implementation of <span class="theme_text_color">AML/CFT</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance') }}" style="color: #666;">GOVERNANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/governance/compliance') }}" style="color: #666;">COMPLIANCE</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">IMPLEMENTATION OF AML/CFT</span></a>
			</p>
		</div>
	</div>
@endif

@if($page == 'msg_chairman')
	<div class="msg_chairman_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="msg_chairman_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Message from Chairman</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 90px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Message from Chairman</h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/who-we-are/leadership') }}" style="color: #666;">LEADERSHIP</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">MESSAGE FROM CHAIRMAN</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'report')
	<div class="report_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="report_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Reports</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 90px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Reports</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/news-room') }}" style="color: #666;">NEWSROOM</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">REPORTS</span></a>
			</p>
		</div>
	</div>
@endif

@if($page == 'cookie_policy')
	<div class="news_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-6">
					<h1 class="fw-bold" style="font-size: 23px;margin-bottom: 0;">Privacy Notice and Cookies Policy</h1>
				</div>
			</div>
		</div>
	</div>	
@endif

@if($page == 'branch_locations')
	<div class="branch_locations_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="branch_locations_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Branch Locations</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Branch Locations</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/network') }}" style="color: #666;">NETWORK</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">BRANCH LOCATIONS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'atm_locations')
	<div class="atm_locations_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="atm_locations_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">ATM Locations</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">ATM Locations</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/network') }}" style="color: #666;">NETWORK</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ATM LOCATIONS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'fx_counter_locations')
	<div class="fx_counter_locations_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="fx_counter_locations_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">FX Counter Locations</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">FX Counter Locations</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/network') }}" style="color: #666;">NETWORK</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FX COUNTER LOCATIONS</span>
			</p>
		</div>
	</div>
@endif


@if($page == 'corporate_milestone')
	<div class="corporate_milestone_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_milestone_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Our Achievement Journey <span class="theme_text_color">along the Way</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Our Achievement Journey <br><span class="theme_text_color">along the Way</span></h1>
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
				<span style="color: #A5000B;">CORPORATE MILESTONES</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'corporate_goals')
	<div class="corporate_goals_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_goals_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Corporate Goals</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Corporate Goals</h1>
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
				<span style="color: #A5000B;">CORPORATE GOALS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'career_opportunities')
	<div class="career_opportunities_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="career_opportunities_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Unlock Your Potential and Build a Bright Future!</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Unlock Your Potential and Build a Bright Future!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/career') }}" style="color: #666;">CAREER</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CAREER OPPORTUNITIES</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'sustainability')
	<div class="sustainability_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="sustainability_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Sustainability</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Sustainability</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">OUR COMMITMENT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'social_sustainability')
	<div class="social_sustainability_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="sustainability_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Social Sustainability</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Social Sustainability</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability/our-approach') }}" style="color: #666;">OUR APPROACH</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">SOCIAL SUSTAINABILITY</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'environmental_sustainability')
	<div class="environmental_sustainability_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="sustainability_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Environmental Sustainability</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Social Sustainability</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability/our-approach') }}" style="color: #666;">OUR APPROACH</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ENVIRONMENTAL SUSTAINABILITY</span>
			</p>
		</div>
	</div>
@endif


@if($page == 'economic_sustainability')
	<div class="economic_sustainability_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="sustainability_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Economic Sustainability</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Social Sustainability</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability/our-approach') }}" style="color: #666;">OUR APPROACH</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">ECONOMIC SUSTAINABILITY</span>
			</p>
		</div>
	</div>
@endif


@if($page == 'ungc_compliance')
	<div class="ungc_compliance_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="ungc_compliance_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">UNGC Compliance</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">UNGC Compliance</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability/our-commitment') }}" style="color: #666;">OUR COMMITMENT</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">UNGC COMPLIANCE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'corporate_social_responsibility')
	<div class="corporate_social_responsibility_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="corporate_social_responsibility_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Corporate Social Responsibility</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right:50%;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Corporate Social Responsibility</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/sustainability') }}" style="color: #666;">SUSTAINABILITY</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORPORATE SOCIAL RESPONSIBILITY</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'aya_culture')
	<div class="aya_culture_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="aya_culture_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Crafting a world steeped in value-based culture and opening doors for impactful opportunities</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Crafting a world steeped in value-based culture and opening doors for impactful opportunities</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/career') }}" style="color: #666;">CAREER</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">AYA CULTURE</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'correspondent_bank')
	<div class="correspondent_bank_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="correspondent_bank_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Our network for global money transfers, easy and secure</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Our network for global money transfers, easy and secure</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/network') }}" style="color: #666;">NETWORK</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CORRESPONDENT BANK</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'award')
	<div class="award_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="award_banner_tagline">
						<h1 class="f-white" style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Awards</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 class="f-white" style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Awards</h1>
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
				<span style="color: #A5000B;">AWARDS</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'why_us')
	<div class="why_us_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="why_us_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Your Bank, <span class="theme_text_color">Your Needs</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 30px;left: 20px;right: 40px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Your Bank, <br><span class="theme_text_color">Your Needs</span></h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">WHY US</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'fdi')
	<div class="fdi_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="fdi_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Seek Expert Guidance for<Br>Foreign Direct Investment in Myanmar</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 200px;left: 20px;right: 180px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Seek Expert Guidance for Foreign Direct Investment in Myanmar</h1>
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
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">FOREIGN DIRECT INVESTMENT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'life_at_aya')
	<div class="life_at_aya_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="life_at_aya_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Driven by passion, enriched by diversity, and fueled by empowerment - our people shine by their unique abilities.</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 90px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Driven by passion, enriched by diversity, and fueled by empowerment - our people shine by their unique abilities.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/career') }}" style="color: #666;">CAREER</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">LIFE AT AYA</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'employee_development')
	<div class="employee_development_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="employee_development_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Equipping employees <br><span class="theme_text_color">with the emerging skills</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 90px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Equipping employees <br><span class="theme_text_color">with the emerging skills</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/') }}" style="color: #666;">ABOUT AYA</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;<a href="{{ url('/about-aya/career') }}" style="color: #666;">CAREER</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">EMPLOYEE DEVELOPMENT</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'contact_us')
	<div class="contact_us_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="contact_us_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">We are here <span class="theme_text_color">to help you</span></h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 90px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">We are here <br><span class="theme_text_color">to help you</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">CONTACT US</span>
			</p>
		</div>
	</div>
@endif

@if($page == 'grievance_handling')
	<div class="grievance_handling_banner banner_bg">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div class="grievance_handling_banner_tagline">
						<h1 style="font-size: 23px;font-weight: 400;margin-bottom: 0;line-height: 30px;">Grievance Handling</h1>
					</div>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 20px;left: 20px;right: 90px;">
						<h1 style="font-size: 18px;font-weight: 400;margin-bottom: 0;line-height: 20px;">Grievance Handling</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #f5f5f7;">
		<div class="container">
			<p class="bread_crumb_text"><a href="{{ url('/') }}" style="color: #666;">HOME</a>&nbsp;
				<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
				<span style="color: #A5000B;">GRIEVANCE HANDLING</span>
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

								<input type="hidden" name="desktop_img_old" id="desktop_img_old" value="{{$banner->banner}}">
								<input type="hidden" name="mobile_img_old" id="mobile_img_old" value="{{$banner->mobile_banner}}">

								<label for="section1_fact_title" class=" col-form-label">Banner Tagline</label>
								<textarea class="form-control" id="banner_tagline" name="banner_tagline" rows="3" spellcheck="false" >{{$banner->banner_title}}</textarea>
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