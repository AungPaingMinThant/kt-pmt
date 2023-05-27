@extends('layouts.frontend-app')

@section('title', 'Cash Management – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/cash-management.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_cash_management'])

			<div class="container section_1" >
				<div class="space-40"></div>
				<div class="col-md-12">
					<p>We offer a wide range of effective and efficient cash management service and solutions for the businesses. With AYA Cash Management Service, we ensure to provide a full suite of customized receivables and payables solutions alongside a comprehensive and timely management report gearing to facilitate the daily business decisions and to manage and accelerate the business cash flow effectively.</p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">Why AYA Cash Management Service?</p>
				</div>
				<div class="row ">
					<div class="col-md-6 ">
						<div class="why_use_AYA_outer">
							<div class="row outer_benefit_box benefit_section_col">
								<div class="col-md-3">
									<img src="{{ url('/images/business/cash-management/why_AYA_Cash_Management_Service_1.png') }}" class="img-fluid benefit_icon">
								</div>
								<div class="col-md-9">
									<p class="mb-0 mt-10" style="color: #4e4e4e;">Greater control and direct access to your funds. Reliable receivables collection with real-time email alert and secure payments along with consolidated transaction reports </p>
								</div>
							</div>
						</div>

						<div class="why_use_AYA_outer">
							<div class="row outer_benefit_box benefit_section_col">
								<div class="col-md-3">
									<img src="{{ url('/images/business/cash-management/why_AYA_Cash_Management_Service_2.png') }}" class="img-fluid benefit_icon">
								</div>
								<div class="col-md-9">
									<p class="mb-0 mt-20" style="color: #4e4e4e;">Around the clock transaction service and highly skillful support for the timely solution to any errors or down-time </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 ">
						<div class="row">
							<div class="col-md-12 text-center">
								<img src="{{ url('/images/business/cash-management/cash_management_service.png') }}" class="img-fluid cash-management-service-img">
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 d-block d-sm-none">
							<p class="fw-bold" style="font-size: 18px;">Services we offer</p>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<div class="col-md-12">
									<p class="fw-bold" style="font-size: 18px;">Services we offer</p>
								</div>
								<ul class="nav nav-pills flex-column cash_mgmt_link">
									<li class="nav-item">
										<a class="nav-link active" id="payroll_service_link" href="#payroll_service">
											<span class="pr-5">Payroll Service</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="receivables_service_link" href="#receivables_service">
											<span class="pr-5">Receivables Service</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="bulk_payment_payables_services_link" href="#bulk_payment_payables_services">
											<span class="pr-5">Bulk Payment (Payables Service)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="liquidity_service_link" href="#liquidity_service">
											<span class="pr-5">Liquidity Service</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="payroll_service">
									Payroll Service
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/cash-management/payroll-service.png') }}" class="img-fluid">
									<p class="payroll_service_tagline">Simplify pay day and let the payroll tools work for you</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Time saving, high security and minimize paperwork on the payroll operation with AYA Bank.</p>
									<p>With AYA Payroll Service, we offer a very handy and automated Payment service with single debit transaction through our integrated systems.</p>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Multi-beneficiaries accounts with single debit transaction in a timely manner</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Effective and complete report on the successful delivery to both the corporate and the recipients</p>
										</div>
									</div>

									<div class="space-20"></div>
									<p class="fw-semibold mb-10" style="font-size: 17px;">Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/cost-effectiveness.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Cost Effectiveness</p>
												<p class="mb-0" style="color: #4e4e4e;">Minimize costs by streamlining customized payment process in one fingertip from your place or anywhere in the world at any time.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/convenience.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Convenience</p>
												<p class="mb-0" style="color: #4e4e4e;">Numerous branches-networked across Myanmar and 24/7 electronically available in terms of rescheduling a cycle for payroll payments, reducing cash handling workloads and simple user interface.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/security.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Security</p>
												<p class="mb-0" style="color: #4e4e4e;">Highly protected banking channels, high data confidentiality and advanced maintenance system throughout the process.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/customized-splendid-reporting.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Customized and Splendid Reporting</p>
												<p class="mb-0" style="color: #4e4e4e;">Real-time “Management Information System Reports” ensuring detailed and accuracy for each transaction for your reconciliation requirements.</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="receivables_service"></div>
								<p class="receivables_service">
									Receivables Service
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/cash-management/receivables-service.png') }}" class="img-fluid">
									<p class="receivables_service_tagline">Collect your receivables quick for efficient cash flow</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Is your business retail, wholesale, or services? </p>
									<p>Our Collection Services allow you to manage your receivables efficiently and in timely manner through our extensive branches across the nation as well as on the digital channels such as AYA m-banking and i-banking. </p>
									<p>We are very committed in delivering a quality service hence ensuring you to meet your specific business requirements.</p>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">We provide a full suite of customized collection solutions for your business.</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Customized Management Information System (MIS) Report on receivables will be delivered in every end of the day or in agreed intervals.</p>
										</div>
									</div>

									<div class="space-20"></div>
									<p class="fw-semibold mb-10" style="font-size: 17px;">Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/enhance-the-timeliness-accuracy.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Enhance the timeliness and accuracy of collection information and process</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/smoothen-your-collection-cycles.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Smoothen your collection cycles</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/reduce-administrative-costs-minimize-cash.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Reduce administrative costs and minimize cash handling risks. </p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/multi-channel-reporting.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Multi-channel reporting as per your requirements. </p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="bulk_payment_payables_services"></div>
								<p class="bulk_payment_payables_services">
									Bulk Payment (Payables Service)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/cash-management/bulk-payment-payables-service.png') }}" class="img-fluid">
									<p class="bulk_payment_payables_services_tagline">A convenient, secure, and optimal way of fund transfer</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>We provide secure payment services with consolidated reporting system in order to enhance your business turnover and accelerate your cash flow functionality in just simple steps. Our systems are designed to deliver end-to-end payment solutions and multi-recipients with single debit transaction securely and efficiently for all business nature.</p>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5 mb-10">Comprehensive payment solutions available for</p>
											<ul class="mx-n3">
												<li>Staff payroll and bonus payments</li>
												<li>Suppliers' payments,</li>
												<li>Loan disbursements</li>
											</ul>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Automated systems enable users to schedule payments</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Able to transfer multi-beneficiaries accounts with single debit transaction at the same time</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Multi-control with more than two user-levels for approval process</p>
										</div>
									</div>

									<div class="space-20"></div>
									<p class="fw-semibold mb-10" style="font-size: 17px;">Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/minimize-operating-costs.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Minimize operating costs by streamlining payment processes</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/smoothen-your-collection-cycles.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Able to credit beneficiaries’ accounts at specified date</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/highly-protected-system.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Highly protected system and accounts details information</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/able-to-customize-structure.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Able to customize and structure corporate’s organization chart into an effective and efficient authorization matrix</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="liquidity_service"></div>
								<p class="liquidity_service">
									Liquidity Service
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/cash-management/liquidity-service.png') }}" class="img-fluid">
									<p class="liquidity_service_tagline">Improve and optimize your liquidity through our automated sweeping funds</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Our liquidity service serves the businesses to manage the cash in-and-out flow effectively as well as balance the liquidity position in a rapidly growing market. AYA Bank promises to ensure your liquidity requirements are efficiently managed through our comprehensive system while adding value to your business. Our liquidity management solution is automated for sweeping surplus funds from collection account to the centralized account of the corporate, hence optimizing the corporate’s funds.</p>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11">
											<p class="margin_payroll_service mt-minus-5">Sweep the excess funds of collection account into corporate’s central account</p>
										</div>
									</div>

									<div class="space-20"></div>
									<p class="fw-semibold mb-10" style="font-size: 17px;">Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/sweeping-funds-into-corporate-central-account.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Sweeping funds into corporate’s central account</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/sweeping-funds-into-any-interest-bearing-account.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Sweeping funds into any interest-bearing account or any account in the interest of loan purpose (e.g., overdraft loan)</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/reliable-auditable-reporting-system.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Reliable and auditable reporting system for the corporate’s monitoring and reconciliation procedures</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/cash-management/able-to-make-payments-for-payroll.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="mb-0" style="color: #4e4e4e;">Able to make payments for payroll or suppliers’ payments or other expenses</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40"></div>
								<div class="">
									<div class="col-md-12 c-b-l-div" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Have any questions?</p>
										<a href="{{url('/enquiry')}}">
											<button class="btn contact_us_btn">Contact Us</button>
										</a>
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
@include('layouts.footer', ['page'=>'mobilebanking'])
<script type="text/javascript">
	var cur_url = window.location.href;
	var parts = cur_url.split('#');
	var last_part = parts.at(-1);

	$( document ).ready(function() {
		$(".nav-link").click(function(e) {
			$(".nav-link").addClass('active');
			$(".nav-link").not(this).removeClass('active');

			var nav_link_href = $(this).attr('href');






			if (nav_link_href == 'payroll_service') {
				$(".nav-link").removeClass('active');
		  		$("#payroll_service_link").addClass('active');
		  	}

		  	if (nav_link_href == 'receivables_service') {
		  		$(".nav-link").removeClass('active');
		  		$("#receivables_service_link").addClass('active');
		  	}

		  	if (nav_link_href == 'bulk_payment_payables_services') {
				$(".nav-link").removeClass('active');
		  		$("#bulk_payment_payables_services_link").addClass('active');
		  	}

		  	if (nav_link_href == 'liquidity_service') {
				$(".nav-link").removeClass('active');
		  		$("#liquidity_service_link").addClass('active');
		  	}
		});

	    if (last_part == 'payroll_service') {
			$(".nav-link").removeClass('active');
	  		$("#payroll_service_link").addClass('active');
	  	}

	  	if (last_part == 'receivables_service') {
	  		$(".nav-link").removeClass('active');
	  		$("#receivables_service_link").addClass('active');
	  	}

	  	if (last_part == 'bulk_payment_payables_services') {
			$(".nav-link").removeClass('active');
	  		$("#bulk_payment_payables_services_link").addClass('active');
	  	}

	  	if (last_part == 'liquidity_service') {
			$(".nav-link").removeClass('active');
	  		$("#liquidity_service_link").addClass('active');
	  	}
	});
</script>
@endsection('content')