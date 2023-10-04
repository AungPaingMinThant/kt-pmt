@extends('layouts.frontend-app')

@section('title', 'Royal Banking – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/premium.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'premium_banking'])

			<div class="" style="background-image: url('../images/premium-banking/bg.jpg');background-size: cover;background-repeat: no-repeat;">
				<div class="container section_1">
					<div class="space-60"></div>			
					<div class="row intro_box_bg">
						<div class="col-md-12 text-center intro_title">
							<p style="">Sail on a journey of excellence with exclusive privileges offered by AYA Royal Banking</p>			
						</div>
						<div class="col-md-12 text-center intro_desc">
							<p>Our specialized banking solution delivers you an array of special benefits, personalized and rich banking experiences through premium services. Royal Banking is more than just another account, it provides you a range of exclusive offers and lifestyle benefits.</p>							
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
									<p style="color: #ccc;font-size: 12px;margin-bottom: 0;">You will be provided exclusive banking services including preferential rate for trade service, exclusive offer for overdraft loan, exclusive offer for internet banking service, exclusive credit card offer and priority queue service. Furthermore, safe deposit locker is one of the ancillary services.</p>
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

			<div style="background-color: #272727;background-image: url('../images/premium-banking/plan_section_bottom_bg.png');background-position: center bottom;background-repeat: no-repeat;">
				<div class="container plan_section_container">
					<div class="space-60"></div>
					<div class="row text-center">
						<p style="font-weight: 700;font-size: 30px;">Become a Royal Member</p>
					</div>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-3 planA">
							<div class="row">
								<p class="fw-500 mb-0" style="font-size: 16px;">Royal Signature Banking<br>(Tier 1)</p>
								<p class="mb-0 fw-light">500 Million (Individual Account)</p>
								<p class="mb-10">Bearing 9.5% of Interest Rate</p>
								<p class="fw-light">Fixed Deposit at least One Year</p>
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 500 Million for individual.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU members card and Visa Platinum Credit card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our special discount at partnership merchants.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport pick-up service (only available at YGN).</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport lounge service for domestic air-travel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">International airport lounge service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Express Lane service for International air-travel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Breakfast at Pan Pacific Hotel and Dinner at Novotel Hotel. (1 time each)</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Spa Package worth MMK 500,000. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Membership at Dagon Golf City or F1 Gym.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Hanthawaddy Yunlong VIP Room. (Unlimited)</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Insurance (one beneficiary) which worth MMK 500,000 AIA & MMK 500,000 AYA Sompo.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer fuel coupon MMK 1,000,000 at Max energy for each customer.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="planA_last_space"></div>
							</div>
						</div>
						<div class="col-md-3 planB">
							<div class="row">
								<p class="fw-500 mb-0" style="font-size: 16px;">Royal Signature Banking<br>(Tier 2)</p>
								<p class="mb-0 fw-light">1.5 Billion MMK (Individual Account)</p>
								<p class="mb-10">Bearing 9.5% of Interest Rate</p>
								<p class="fw-light">Fixed Deposit at least One Year</p>
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 500 Million for individual.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU members card and Visa Platinum Credit card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our special discount at partnership merchants.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport pick-up service (only available at YGN). </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport lounge service for domestic air-travel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">International airport lounge service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Express Lane service for International air-travel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Breakfast at Pan Pacific Hotel and Dinner at Novotel Hotel. (1 time each)</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Spa Package worth MMK 500,000.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Membership at Dagon Golf City or F1 Gym.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Hanthawaddy Yunlong VIP Room. (Unlimited)</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Insurance (one beneficiary) which worth MMK 500,000 AIA & MMK 500,000 AYA Sompo.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer fuel coupon MMK 1,000,000 at Max energy for each customer.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive welcome gift.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="planB_last_space"></div>
							</div>
						</div>
						<div class="col-md-3 planC">
							<div class="row">
								<p class="fw-500 mb-0" style="font-size: 16px;">Royal Premier Banking<Br>(Tier 1)</p>
								<p class="mb-10 fw-light">10 Billion- 38 Billion</p>
								<!-- <p class="mb-10 fw-light">500 Million (Joint)<br>Bearing 8.25% of Interest rate</p> -->
								<!-- <p class="fw-light">Fixed Deposit at least One Year</p> -->
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 10 Billion for Individual or Corporate Account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU members card and Visa Platinum Credit card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our special discount at partnership merchants.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Breakfast at Pan Pacific Hotel and Dinner at Novotel Hotel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Spa Package worth MMK 1,000,000.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Membership at Dagon Golf City or F1 Gym.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Insurance (one beneficiary) which worth (MMK 1,250,000) AIA & (MMK 1,250,000) AYA Sompo.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Local staycation 2 Nights 3 Days.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport pick-up service (only available at YGN).</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport lounge service for domestic air-travel. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Express Lane service & airport lounge service for International air-travel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Oversea Spa package worth MMK 1,000,000. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer fuel coupon MMK 3,000,000 at Max energy for each customer.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive welcome gifts.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="planC_last_space"></div>
							</div>
						</div>
						<div class="col-md-3 planD">
							<div class="row">
								<p class="fw-500 mb-0" style="font-size: 16px;">Royal Premier Banking<br>(Tier 2)</p>
								<p class="mb-10 fw-light">45 Billion and above</p>
								<!-- <p class="mb-10 fw-light">Minimum of Fixed Deposit 500 Million at least six months</p> -->
								<!-- <p class="fw-light">Bearing 9.5% of Interest Rate</p> -->
								<div class="space-20"></div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Deposit Size- minimum 45 Billion for individual or corporate account.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>
								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer Royal MPU members card and Visa Platinum Credit card.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Enjoy our special discount at partnership merchants.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive banking services.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Twice a week meeting room service.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Breakfast at Pan Pacific Hotel and Dinner at Novotel Hotel.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Spa Package worth 1,000,000 MMK.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Membership at Dagon Golf City or F1 Gym.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Insurance (one beneficiary) which worth (MMK 1,250,000 ) AIA & (MMK 1,250,000) AYA Sompo.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Local staycation 2 Nights 3 Days.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport pick-up service (only available at YGN).</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Airport lounge service for domestic air-travel. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Express Lane service & airport lounge service for International air-travel. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Oversea Spa package worth MMK 3,000,000. </p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Offer fuel coupon MMK 6,000,000 at Max energy for each customer.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="col-2 text-right" style="padding-right: 0;">
									<img src="{{ url('/images/premium-banking/bullet.png') }}" class="img-fluid" style="width: 80%">
								</div>
								<div class="col-10" style="padding-left: 10px;">
									<p style="font-size: 11px;margin-bottom: 10px;">Exclusive welcome gifts.</p>
									<hr style="color: #ccc;margin: 10px 0;opacity: 0.5;">
								</div>

								<div class="planD_last_space"></div>
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
								<div class="col-11 benchmark_fact">
									<p style="font-size: 12px;">Royal membership can be applied through either an individual account type or joint account type.</p>
								</div>

								<div class="col-1">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 25%">
								</div>
								<div class="col-11 benchmark_fact">
									<p style="font-size: 12px;">In the case where the customer fails to maintain the deposit status, the Bank reserves the right to cancel Royal status of such customer and any privileges with effective immediately without any prior notice.</p>
								</div>

								<div class="col-1">
									<img src="{{ url('/images/premium-banking/check.png') }}" class="img-fluid" style="width: 25%">
								</div>
								<div class="col-11 benchmark_fact">
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

			<div style="background-image: url('../images/premium-banking/explore_membership_bg.jpg');background-position: center;background-repeat: no-repeat;">
				<div class="space-60"></div>
				<div class="row text-center" style="width: 100%;margin: 0;">
					<div class="col-md-12">
						<p style="color: #1d1d1f;font-weight:600;font-size: 25px;">Explore more for membership benefits</p>
						<p style="color: #666;font-weight: 500;margin-bottom: 30px;padding: 0px 20px;">Enter your Email Address to download the E-Booklet</p>
					</div>

					<div class="col-md-4"></div>
					<div class="col-md-4 input_email_box">
						<form id="formAuthentication" class="" action="{{ url('/report_download') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" class="form-control" name="report_file" id="report_file" value="Royal_Banking_E_booklet.pdf">
							<input type="hidden" class="form-control" name="subscribe_flag" id="subscribe_flag" value="5">
							<div class="input-group">
								<input type="email" class="form-control" name="report_down_email" id="e_booklet_txt" placeholder="you@emailaddress.com" aria-label="Recipient's username" aria-describedby="basic-addon2" required style="border-color: #a9a9a9;border-top-left-radius: 2px;border-bottom-left-radius: 2px;height: 50px;">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="submit" id="e_booklet_btn" style="border-top-left-radius: 0;border-bottom-left-radius: 0;border-top-right-radius: 2px;border-bottom-right-radius: 2px;border-color: #A5000B;background-color: #A5000B;color: #fff;height: 50px;">Submit</button>
								</div>
							</div>
						</form>
						<p><small class="theme_text_color d-none" id="e_booklet_err">* Please enter your email address to download the E-Booklet.</small></p>
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
							<p style="color: #f6eac4;font-weight:400;font-size: 15px;width: 80%;">We assist you with premium banking and financial needs at</p>
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
<script type="text/javascript">
	// $("#e_booklet_btn").click(function() {
	// 	if ($("#e_booklet_txt").val() == '') {
	// 		$("#e_booklet_err").removeClass('d-none');
	// 	} else {
	// 		var e_booklet_email = $("#e_booklet_txt").val();
	// 		if (e_booklet_email.indexOf("@") != -1 && e_booklet_email.indexOf(".") != -1) {
	// 			$("#e_booklet_err").addClass('d-none');
	// 			window.open('http://localhost/ayab/file/royal-banking/Royal_Banking_E_booklet.pdf')
	// 		} else {
	// 			$("#e_booklet_err").removeClass('d-none');
	// 		}
	// 	}
	// });
</script>

@endsection('content')