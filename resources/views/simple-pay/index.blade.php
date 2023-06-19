@extends('layouts.frontend-app')

@section('title', 'Simple Pay – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/digital/simple-pay.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'simplepay'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'simplepay'])
			</div>

			<div class="container section_1">				
				<div class="row" >
					<div class="col-md-7">
						<div class="row" style="column-gap: 20px;">
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row benefit_box">
									<img src="{{ url('/images/simplepay/simple_pay_icon_1.png') }}" class="img-fluid benefit_icon_1">
									<p class="solution_text solution_desc">Shop with AYA Credit card at our partner merchants and spreading your payments with SimplePay for low-interest monthly instalment plans that extends up to 12 months.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row benefit_box" >
									<img src="{{ url('/images/simplepay/simple_pay_icon_2.png') }}" class="img-fluid benefit_icon_2">
									<p class="solution_text solution_desc">Enjoy greater spending power (150,000 kyats and above) as it will help you for being financially comfortable. </p>
								</div>
							</div>
							<div class="col-md-12">
								<p style="color: #777;font-style: italic;font-size: 12px;">Full terms and conditions of your credit card will be applied.</p>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center">
						<img src="{{ url('/images/simplepay/simple_pay_cards.png') }}" class="img-fluid">
					</div>
				</div>

				<div class="space-40"></div>
			</div>


			<div class="d-block d-sm-none">
				<img src="{{ url('/images/simplepay/how_to_apply_mobile.jpg') }}" class="img-fluid">
			</div>
			<div class="how_to_apply_outer_section">
				<div class="container prepaid_how_to_apply_section" style="">
					<div class="space-80 d-none d-sm-block"></div>
					<div class="row">
						<div class="col-md-6 how_to_apply_desc">
							<h3 style="font-weight: 600;color: #000;margin-bottom: 30px;">Apply now to maximize your benefits.</h3>
							<a target="_blank" href="https://simplepay.ayabank.com/">
								<button class="btn apply_now_btn">
									Apply Online
								</button>
							</a>
							<p>Alternately, call us at <a href="tel:+95 9 458588953" style="color: #A5000B">+95 9 458588953</a>, <a href="tel:+95 9 450215345" style="color: #A5000B">+95 9 450215345</a> <br>(Monday to Friday, 9 am to 5 pm). </p>
						</div>
						<div class="col-md-6"></div>
					</div>
					<div class="space-60 d-none d-sm-block"></div>
				</div>
			</div>

			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block" style="padding: 40px 100px 60px 100px;background-image: url('../../images/simplepay/contact_center_bg.png');background-size: cover;background-repeat: no-repeat;border-radius: 6px;">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center" style="padding-top: 80px;">
							<p style="color: #000;font-weight: 500;font-size: 20px;margin-bottom: 25px;">Connect with us for more information?<br>We are ready to assist you.</p>
							<a target="_blank" href="https://saltnpixel.com/AYABank/AYABANK_Contact_Us_Hotline.html">
								<button class="btn apply_now_btn" >
									Contact Center
								</button>
							</a>
						</div>
					</div>
				</div>

				<div class="container d-block d-sm-none">
					<div class="row" style="padding: 0px">
						<div class="col-xs-12 " style="padding: 0px;">
							<p style="color: #000;font-weight: 500;font-size: 20px;margin-bottom: 25px;">Connect with us for more information?<br>We are ready to assist you.</p>
							<a target="_blank" href="https://saltnpixel.com/AYABank/AYABANK_Contact_Us_Hotline.html">
								<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;">
									Contact Center
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')