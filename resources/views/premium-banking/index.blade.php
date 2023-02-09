@extends('layouts.frontend-app')

@section('title', 'Premium Banking – AYA Bank')
<style type="text/css">
    p {
    	color: #fff;
    	font-weight: 300;
    }
    .section_1 {
    	padding: 0px 100px !important;
    }
    .intro_box_bg {
    	background-image: url('./images/premium-banking/intro-bg.jpg');
    	background-size: contain;
    	background-repeat: no-repeat;
    	background-position: center top;
    }
    .intro_title {
    	padding: 40px 200px 0px 200px !important
    }
    .intro_title > p {
    	margin-bottom: 30px;
    	font-size: 28px;
    	line-height: 32px;
    }
    .intro_desc {
    	padding: 0px 260px 40px 260px !important;
    }
    .relation_manage_box {
    	background-color: #705c1e;
    	padding: 60px 110px 60px 60px !important;
    	position: absolute;
    	top: 17%;
    	left: -80px;
    }
    .life_style_box {
    	background-color: #705c1e;
    	padding: 60px 140px 60px 60px !important;
    	position: absolute;
    	top: 13%;
    	right: -80px;
    }
    .product_service_box {
    	background-color: #705c1e;
    	padding: 60px 110px 60px 60px !important;
    	position: absolute;
    	top: 17%;
    	left: -80px;
    }
    .travel_box {
    	background-color: #705c1e;
    	padding: 60px 150px 60px 60px !important;
    	position: absolute;
    	top: 13%;
    	right: -80px;
    }
    .health_care_box {
    	background-color: #705c1e;
    	padding: 60px 110px 60px 60px !important;
    	position: absolute;
    	top: 17%;
    	left: -80px;
    }
    .plan_section_1 {
    	padding: 0px 100px !important;
    }
    .planA, .planB, .planC {
    	padding: 0px 30px !important;
    }
    .planC-50 {
    	display: none;
    }
    .input_email_box {
    	padding: 0px 90px;
    }
    .novotel_branch_bg {
    	background-image: url('./images/premium-banking/novotel_branch_bg.jpg');
    	background-size: cover;
    	background-position: center;
    	background-repeat: no-repeat;
    }


    @media (max-width: 1300px) and (min-width: 1271px) {
    	.planC-50 {
	    	display: block;
	    }
    }
    
    @media (max-width: 1270px) and (min-width: 1000px) {
    	.intro_title {
	    	padding: 25px 100px 0px 100px !important;
	    }
	    .intro_title > p {
	    	margin-bottom: 20px;
	    	font-size: 22px;
	    	line-height: 26px;
	    }
	    .intro_desc {
	    	padding: 0px 100px 40px 100px !important;
	    	font-size: 13px;
	    }
	    .relation_manage_box {
	    	padding: 30px !important;
	    	position: absolute;
	    	top: 17%;
	    	left: -60px;
	    }
	    .life_style_box {
	    	padding: 30px !important;
	    	position: absolute;
	    	top: 10%;
	    	right: -60px;
	    }
	    .travel_box {
	    	padding: 30px !important;
	    	position: absolute;
	    	top: 10%;
	    	right: -60px;
	    }
	    .product_service_box {
	    	padding: 30px !important;
	    	position: absolute;
	    	top: 10%;
	    	left: -60px;
	    }
	    .health_care_box {
	    	padding: 30px !important;
	    	position: absolute;
	    	top: 17%;
	    	left: -60px;
	    }
	    .plan_section_1 {
	    	padding: 0px 20px !important;
	    }
	    .planA, .planB, .planC {
	    	padding: 0px 25px !important;
	    }
	    .input_email_box {
	    	padding: 0px 50px;
	    }
    }
    @media only screen and (max-width: 576px) {
    	.intro_title {
	    	padding: 20px 40px 0px 40px !important;
	    }
	    .section_1, .plan_section_1 {
	    	padding: 0px 20px !important;
	    }
	    .intro_title > p {
	    	margin-bottom: 30px;
	    	font-size: 20px;
	    	line-height: 24px;
	    }
	    .intro_desc {
	    	padding: 0px 30px !important;
	    }
	    .intro_box_bg {
	    	background-image: url('./images/premium-banking/intro-bg-mobile.jpg');
	    	background-size: cover;
	    }
	    .relation_manage_box {
	    	padding: 20px !important;
	    	position: inherit;
	    	top: 0;
	    	left: 0;
	    }
	    .life_style_box {
	    	padding: 20px !important;
	    	position: inherit;
	    	top: 0;
	    	left: 0;
	    }
	    .product_service_box {
	    	padding: 20px !important;
	    	position: inherit;
	    	top: 0;
	    	left: 0;
	    }
	    .travel_box {
	    	padding: 20px !important;
	    	position: inherit;
	    	top: 0;
	    	left: 0;
	    }
	    .health_care_box {
	    	padding: 20px !important;
	    	position: inherit;
	    	top: 0;
	    	left: 0;
	    }
	    .planA, .planB {
	    	margin-bottom: 30px;
	    }
	    .input_email_box {
	    	padding: 0px 25px 0px 25px !important;
	    }
	    .novotel_branch_bg {
/*	    	background-position: 50% center;*/
	    }
    }
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'premium_banking'])

			<div class="" style="background-image: url('./images/premium-banking/bg.jpg');background-size: cover;background-repeat: no-repeat;">
				<div class="container section_1">
					<div class="space-60"></div>			
					<div class="row intro_box_bg">
						<div class="col-md-12 text-center intro_title">
							<p style="">Sail on a journey of excellence with exclusive privileges offered by AYA Royal Banking</p>			
						</div>
						<div class="col-md-12 text-center intro_desc">
							<p style="margin-bottom:5px;color: #cccccc;">Our specialized banking solution delivers you an array of special benefits, personalized and rich banking experiences through premium services. Royal Banking is more than just another account, it provides you a range of exclusive offers and lifestyle benefits.</p>							
						</div>
					</div>

					<div class="d-none d-sm-block">
						<div class="space-80"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/relationship_manage_service.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="relation_manage_box">
									<p style="font-size: 18px;font-weight: 600;">Relationship Management Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You have your own Relationship Manager (RM) to provide you with all the banking services. RM will guide you through the complexities of managing your finances and help you reach your goals.</p>
								</div>
							</div>
						</div>

						<div class="space-80"></div>

						<div class="row" >
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="life_style_box">
									<p style="font-size: 18px;font-weight: 600;">Life Style Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You have a wealth of dining, shopping, entertainment, travel and healthcare offers designed to match your evolving lifestyle needs. Enjoy your well-deserved benefits of private events, airport service, royal accommodation, royal dining, gym membership, royal lounge and meeting room usage, and other facilities.</p>
								</div>
							</div>
							<div class="col-md-7" style="padding: 0;">
								<img src="{{ url('/images/premium-banking/life_style_services.jpg') }}" class="img-fluid">
							</div>
						</div>

						<div class="space-80"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/product_services.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="product_service_box">
									<p style="font-size: 18px;font-weight: 600;">Product Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You will be provided exclusive banking services including preferential rate for trade service, exclusive waiver for overdraft loan, exclusive offer for internet banking service, exclusive credit card offer and priority queue service. Furthermore, safe deposit locker is one of the ancillary services.</p>
								</div>
							</div>
						</div>

						<div class="space-80"></div>

						<div class="row" >
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="travel_box">
									<p style="font-size: 18px;font-weight: 600;">Travel Desk Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">Your premium account offers a range of travel perks. Have a great time at our partnership hotels in both local and overseas where we provides booking service and special discounts. It includes airport service of top-notch professional drivers for airport pick up and transfer service.</p>
								</div>
							</div>
							<div class="col-md-7" style="padding: 0;">
								<img src="{{ url('/images/premium-banking/travel_desk_service.jpg') }}" class="img-fluid">
							</div>
						</div>

						<div class="space-80"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/health_care_service.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="health_care_box">
									<p style="font-size: 18px;font-weight: 600;">Health Care Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You will receive special rates for hospital services including operation theatre, ambulance, in-patient room, CT scan, MRI scan, dental, eye and mammogram screening at our partnership hospitals.</p>
								</div>
							</div>
						</div>

						<div class="space-100"></div>
					</div>

					<div class="d-block d-sm-none">
						<div class="space-80"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/relationship_manage_service.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="relation_manage_box">
									<p style="font-size: 18px;font-weight: 600;">Relationship Management Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You have your own Relationship Manager (RM) to provide you with all the banking services. RM will guide you through the complexities of managing your finances and help you reach your goals.</p>
								</div>
							</div>
						</div>

						<div class="space-60"></div>

						<div class="row" >
							<div class="col-md-7" style="padding: 0;">
								<img src="{{ url('/images/premium-banking/life_style_services.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="life_style_box">
									<p style="font-size: 18px;font-weight: 600;">Life Style Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You have a wealth of dining, shopping, entertainment, travel and healthcare offers designed to match your evolving lifestyle needs. Enjoy your well-deserved benefits of private events, airport service, royal accommodation, royal dining, gym membership, royal lounge and meeting room usage, and other facilities.</p>
								</div>
							</div>
						</div>

						<div class="space-60"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/product_services.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="product_service_box">
									<p style="font-size: 18px;font-weight: 600;">Product Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You will be provided exclusive banking services including preferential rate for trade service, exclusive offer for overdraft loan, exclusive offer for internet banking service, exclusive credit card offer and priority queue service. Furthermore, safe deposit locker is one of the ancillary services.</p>
								</div>
							</div>
						</div>

						<div class="space-60"></div>

						<div class="row" >
							<div class="col-md-7" style="padding: 0;">
								<img src="{{ url('/images/premium-banking/travel_desk_service.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="travel_box">
									<p style="font-size: 18px;font-weight: 600;">Travel Desk Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">Your premium account offers a range of travel perks. Have a great time at our partnership hotels in both local and overseas where we provides booking service and special discounts. It includes airport service of top-notch professional drivers for airport pick up and transfer service.</p>
								</div>
							</div>
						</div>

						<div class="space-60"></div>

						<div class="row">
							<div class="col-md-7" style="padding: 0">
								<img src="{{ url('/images/premium-banking/health_care_service.jpg') }}" class="img-fluid">
							</div>
							<div class="col-md-5" style="position: relative;padding: 0;">
								<div class="health_care_box">
									<p style="font-size: 18px;font-weight: 600;">Health Care Service</p>
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You will receive special rates for hospital services including operation theatre, ambulance, in-patient room, CT scan, MRI scan, dental, eye and mammogram screening at our partnership hospitals.</p>
								</div>
							</div>
						</div>

						<div class="space-100"></div>
					</div>
				</div>
			</div>

			<div style="background-color: #272727;background-image: url('./images/premium-banking/plan_section_bottom_bg.png');background-position: center bottom;background-repeat: no-repeat;">
				<div class="container plan_section_1">
					<div class="space-60"></div>
					<div class="row text-center">
						<p style="font-weight: 700;font-size: 30px;">Become a Royal Member</p>
					</div>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-4 planA">
							<div class="row" style="background-color: #555;padding: 40px 20px;background-image: url('./images/premium-banking/package_bottom_bg.png');background-position: center bottom;background-repeat: no-repeat;border-radius: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
								<p style="font-weight: 500;font-size: 16px;margin-bottom:0;">Package A</p>
								<p style="margin-bottom: 0;font-weight: 300;">300 Million</p>
								<p style="font-weight: 300;">(Fixed Deposit at least 1 year)</p>
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 300 Million for individual account, 500 Million for joint account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Bearing 8% of interest rate.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU Member Card and Visa Platinum Credit Card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our Special Discounts at partnership merchants</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room services, and unlimited airport lounge service</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport Pick Up Service (only available at YGN & NPT), semi-monthly</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Membership for F1 Gym or Dagon Golf City</p>
								</div>

								<div class="space-33"></div>
							</div>
						</div>
						<div class="col-md-4 planB">
							<div class="row" style="background-color: #665a34;padding: 40px 20px;background-image: url('./images/premium-banking/package_B_bottom_bg.png');background-position: center bottom;background-repeat: no-repeat;border-radius: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
								<p style="font-weight: 500;font-size: 16px;margin-bottom:0;">Package B</p>
								<p style="margin-bottom: 0;font-weight: 300;">500 Million</p>
								<p style="font-weight: 300;">(Fixed Deposit at least 1 year)</p>
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 300 Million for individual account, 500 Million for joint account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Bearing 8.25% of interest rate either individual or joint account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU Member Card and Visa Platinum Credit Card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our Special Discounts at partnership merchants</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room services, and unlimited airport lounge service</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport Pick Up Service (only available at YGN & NPT), semi-monthly</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Fuel Coupons 1,000,000 MMK at Max Energy in each customer.</p>
								</div>

								<!-- <div class="space-6"></div> -->
							</div>
						</div>
						<div class="col-md-4 planC">
							<div class="row" style="background-color: #705400;padding: 40px 20px;background-image: url('./images/premium-banking/package_C_bottom_bg.png');background-position: center bottom;background-repeat: no-repeat;border-radius: 10px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
								<p style="font-weight: 500;font-size: 16px;margin-bottom:0;">Package C</p>
								<p style="margin-bottom: 0;font-weight: 300;">700 Million</p>
								<p style="font-weight: 300;">(Fixed Deposit at least 1 year)</p>
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- 700 Million</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Bearing 9.5% of interest rate either individual or joint account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU Member Card and Visa Platinum Credit Card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our Special Discounts at partnership merchants</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="space-100"></div>
								<div class="space-86"></div>
								<div class="space-50 planC-50"></div>
							</div>
						</div>
					</div>

					<div class="space-60"></div>

					<div class="row">
						<div class="col-md-12 d-none d-sm-block" style="padding-left: 50px;">
							<div class="row">
								<div class="col-12">
									<p style="font-weight: 500;">Benchmark</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 25%">
								</div>
								<div class="col-11" style="margin-left: -60px;">
									<p style="font-size: 12px;">Royal membership can be applied through either an individual account type or joint account type.</p>
								</div>

								<div class="col-1">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 25%">
								</div>
								<div class="col-11" style="margin-left: -60px;">
									<p style="font-size: 12px;">In the case where the customer fails to maintain the deposit status, the Bank reserves the right to cancel Royal status of such customer and any privileges with effective immediately without any prior notice.</p>
								</div>

								<div class="col-1">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 25%">
								</div>
								<div class="col-11" style="margin-left: -60px;">
									<p style="font-size: 12px;">The bank reserves the right to modify terms and conditions of Royal privileges without prior notice.</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 d-block d-sm-none" style="padding-left: 50px;">
							<div class="row">
								<div class="col-12">
									<p style="font-weight: 500;">Benchmark</p>
								</div>
								<div class="col-2">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 50%">
								</div>
								<div class="col-10" style="margin-left: -30px;">
									<p style="font-size: 12px;">Royal membership can be applied through either an individual account type or joint account type.</p>
								</div>

								<div class="col-2">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 50%">
								</div>
								<div class="col-10" style="margin-left: -30px;">
									<p style="font-size: 12px;">In the case where the customer fails to maintain the deposit status, the Bank reserves the right to cancel Royal status of such customer and any privileges with effective immediately without any prior notice.</p>
								</div>

								<div class="col-2">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 50%">
								</div>
								<div class="col-10" style="margin-left: -30px;">
									<p style="font-size: 12px;">The bank reserves the right to modify terms and conditions of Royal privileges without prior notice.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="space-80"></div>
				</div>
			</div>

			<div style="background-image: url('./images/premium-banking/explore_membership_bg.jpg');background-position: center;background-repeat: no-repeat;">
				<div class="space-60"></div>
				<div class="row text-center" style="width: 100%;margin: 0;">
					<div class="col-md-12">
						<p style="color: #1d1d1f;font-weight:600;font-size: 25px;">Explore more for membership benefits</p>
						<p style="color: #666;font-weight: 500;margin-bottom: 30px;padding: 0px 20px;">Enter your Email Address to download the E-Booklet</p>
					</div>

					<div class="col-md-4"></div>
					<div class="col-md-4 input_email_box">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="you@emailaddress.com" aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-color: #a9a9a9;border-top-left-radius: 2px;border-bottom-left-radius: 2px;height: 50px;">
							<div class="input-group-append">
								<a href="{{ url('/file/premium-banking/Royal Banking E-booklet.pdf') }}" target="_blank">
									<button class="btn btn-outline-secondary" type="button" style="border-top-left-radius: 0;border-bottom-left-radius: 0;border-top-right-radius: 2px;border-bottom-right-radius: 2px;border-color: #a02226;background-color: #a02226;color: #fff;height: 50px;">Submit</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="space-60"></div>
			</div>

			<div class="novotel_branch_bg">
				<div class="container section_1">
					<div class="space-60"></div>
					<div class="row" style="width: 100%">
						<div class="col-md-6">
							<p style="color: #f6eac4;font-weight:400;font-size: 15px;">We assist you with premium banking and financial needs at</p>
							<div class="space-30"></div>
							<p style="font-weight: 500;font-size: 12px;">Novotel branch</p>
							<p style="font-size: 12px;">Second floor, No (459), Pyay Road, Kamayut Township, Novotel Yangon Max Hotel, Yangon.</p>
							<p style="font-size: 12px;">PH: 01-2306327~329      Fax: 2306326 ~ 2306330</p>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="space-60"></div> -->
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')