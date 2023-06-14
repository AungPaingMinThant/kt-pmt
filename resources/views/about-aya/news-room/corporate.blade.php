@extends('layouts.frontend-app')

@section('title', 'Corporate News – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/news.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'news'])

			<div class="container">
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-feature_benefit" aria-controls="navs-pills-top-feature_benefit" aria-selected="true" >
								Features and Benefits
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-eligibility" aria-controls="navs-pills-top-eligibility" aria-selected="false" >
								Eligibility
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-apply" aria-controls="navs-pills-top-apply" aria-selected="false" >
								How to Apply
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;">
						<div class="tab-pane fade feature_benefit show active" id="navs-pills-top-feature_benefit" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Experience_seamless_payment_services.png') }}" class="img-fluid features_benefit_icon">
											<p style="color: #4e4e4e;margin-top: 20px;">Experience seamless payment services "Secure Payment gateway and reliable processing" with AYA for international widely known brands.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/One_stop_service.png') }}" class="img-fluid features_benefit_icon">
											<p style="color: #4e4e4e;margin-top: 20px;">One stop service for all major card networks and 99.999% uptime for international networks.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/multiple_payment_channels.png') }}" class="img-fluid features_benefit_icon">
											<p style="color: #4e4e4e;margin-top: 20px;">Support with multiple payment channels such as Mobile, Web, Kiosk, POS and Mobile POS.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Secure_Transactions.png') }}" class="img-fluid features_benefit_icon">
											<p style="color: #4e4e4e;margin-top: 20px;">Secure Transactions: Extensively provides 3D Secure (3-domain structure) authentication that helps to prevent frauds and unauthorized transactions.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Accelerate_your_Speed_to_market.png') }}" class="img-fluid features_benefit_icon">
											<p style="color: #4e4e4e;margin-top: 20px;">Accelerate your Speed to market. Our relationship managers will assist you for further application process.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane eligibility fade" id="navs-pills-top-eligibility" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 benefit_feature_box" style="padding: 20px;">
										<!-- <div class="row">
											<p style="color: #4e4e4e;margin-top: 20px;">All Business entity incorporated in Myanmar. Business licenses from Yangon city Development Committee or Company license from DICA and Copy of owner’s NRC is needed to provide. Applicant must have any accounts at AYA.</p>
										</div> -->
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>All Business entity must be incorporated in Myanmar.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p> Need to provide Business License from Yangon city Development Committee (or) Company license from DICA, Copy of owner’s NRC and Copy of owner’s household list.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Applicant must have any account at AYA. We prefer new business call account.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane apply fade" id="navs-pills-top-apply" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;margin-top: 20px;">How to Apply: <br>Call us at Merchant Operations: <a href="tel:+959258889973" style="color: #a02226">+95) 9 25 888 9973</a>, <a href="tel:+95925888993" style="color: #a02226">+95) 9 25 888 9937</a> or <Br>Email us at <a href="mailto:mchecommerce@ayabank.com" style="color: #a02226">mchecommerce@ayabank.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')