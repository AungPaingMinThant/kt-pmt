@extends('layouts.frontend-app')

@section('title', 'Risk Governance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">
<style type="text/css">
	
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'risk_governance'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-8">
						<h4 class="fw-bold">Risk Governance</h4>
						<div class="space-20"></div>
						<div class="row text-center">
							<p class="fw-semibold" style="font-size: 18px;">Reporting lines of Risk Management Function</p>
							<img src="{{ url('/images/about-aya/risk-management/risk_governane_chart.webp') }}" class="img-fluid">
						</div>

						<div class="space-40"></div>

						<div class="accordion import-financing-accord" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding: 10px 0px 10px 20px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Board Risk and Compliance Committee (BRCC)
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row">
											<p>The Audit, Risk and Compliance Committee (ARCC) was established in 2014. In 2018, it was elevated to the Board level and split into two separate entities: the Audit Committee (AC) and the Board Risk and Compliance Committee (BRCC). The BRCC aids the Board in meeting its supervisory responsibilities concerning risk management, compliance, and the preservation of ethics and integrity in compliance with current laws and regulations. In fulfilling its oversight role, the Committee carries out the tasks and responsibilities defined in the Risk and Compliance Committee Charter.</p>
											<p>The Board Risk and Compliance Committee is entrusted with the following duties:</p>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Developing policies tied to risk management that align with the strategic direction and overall risk appetite as determined by the Board of Directors.</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Guaranteeing that the Senior Management abides by the risk tolerance boundaries set and suggesting adjustments as necessary in response to significant shifts in the internal and external environment.</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Consistently supervising and evaluating the effectiveness of the Risk Management Policy.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingTwo">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="padding: 10px 0px 10px 20px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Enterprise Risk Management Department 
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row">
											<p>The Enterprise Risk Management Department holds the responsibility for the oversight of AYA Bank's Enterprise Risk Management (ERM) framework and provides counsel on risk management across all branches and the entirety of the bank's business operations.</p>
											<p>The obligations and duties of the Enterprise Risk Management Department include:</p>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Recognizing and managing potential risk zones to safeguard the bank's and its shareholders' assets,</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Evaluating if the correct risks have been identified and are being appropriately managed,</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Acknowledging the current areas of highest risk (both financial and non-financial) and regularly reviewing these sectors,</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Receiving frequent updates from management, the Bank's legal team, auditors, and any necessary external parties concerning audit, financial reporting, and risk management.</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Assessing the adequacy of the management Information & Intelligence Systems for the effective management of the bank's customers and business – for instance, risks and profitability,</p>
											</div>
											<div class="col-1 risk_governance_col_1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11 risk_governance_col_11">
												<p>Reviewing and tracking the effectiveness of the bank's controls concerning credit, operational, and financial risks.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row risk_side_bar">
							<p class="risk_sidebar_title">Risk Management</p>
							<p class="risk_sidebar_link"><a href="{{ url('/about-aya/governance/risk-management') }}">Overview</a></p>
							<p class="risk_sidebar_link side_active"><a href="{{ url('/about-aya/governance/risk-management/risk-governance') }}">Risk Governance</a></p>
							<p class="risk_sidebar_link">Risk Management Framework</p>
							<p class="risk_sidebar_link">Risk Management Control</p>
							<p class="risk_sidebar_link">Managing Risk</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 3,
		spaceBetween: 5,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-desktop",
			clickable: true,
			dynamicBullets: true,
			loop: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,	
			},
		},
	});
</script>

@endsection('content')