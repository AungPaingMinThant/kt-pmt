@extends('layouts.frontend-app')

@section('title', 'Hire Purchase – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/borrowing/hire-purchase.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_borrowing_hire_purchase'])

			<div class="container section_1" >
				<div class="space-40"></div>
				<div class="col-md-9">
					<p>Need to purchase new assets for your business without the stress of having to pay large upfront costs?<br>AYA Bank offers a hire purchase finance option to meet your needs.</p>
					<p>Hire purchase finance can be used for a variety of assets, ranging from heavy machinery, equipment, vehicle to shop house.</p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">All You Need to Know</p>
				</div>
				<div class="row">
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">It is a fixed rate loan, so interest rates tend to be cost effective</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">You can utilize the asset while paying back in instalments over a set period of time</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">You will legally own the item once all the instalments have been paid in full</p>
					</div>
				</div>
				
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">Why You Should Apply</p>
				</div>
				<div class="row">
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">Companies can purchase necessary assets quickly</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">Cost of repaying is spread over a fixed period without impact on working capital</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">AYA Bank offers competitive interest rate</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">It is flexible, straightforward and relatively easy to apply</p>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">How to Qualify</p>
				</div>
				<div class="row why_use_AYA_outer">
					<div class="col-md-6 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/credit-score.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-md-9">
								<p class="fw-semibold mb-0">Credit Score</p>
								<p class="mb-0" style="color: #4e4e4e;">Does your business have minimum credit score for Business Loan Eligibility? Different credit scores needed for different types of business loans. It ultimately determines loan amount, repayment schedules, etc.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/cash-flow.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-md-9">
								<p class="fw-semibold mb-0">Cash Flow</p>
								<p class="mb-0" style="color: #4e4e4e;">You can qualify for hire purchase financing on the basis of your cash flow.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/collateral.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-md-9">
								<p class="fw-semibold mb-0">Collateral</p>
								<p class="mb-0" style="color: #4e4e4e;">Asset to be financed is secured as collateral in hire purchase agreement.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/down-payment.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-md-9">
								<p class="fw-semibold mb-0">Down Payment</p>
								<p class="pr-15" style="color: #4e4e4e;">The down payment requirement can range from 10% to 30% for the eligible borrowers. The actual amount can vary by the loan type and the borrower’s qualifications</p>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<p class="fw-bold" style="font-size: 18px;">What We Offer</p>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" id="heavy_mahine_hp_link" href="#heavy_mahine_hp">
											<span class="pr-5">Heavy Machinery HP</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="shop_house_link" href="#shop_house">
											<span class="pr-5">Shop House</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="auto_loan_corporate_link" href="#auto_loan_corporate">
											<span class="pr-5">Auto Loan (Corporate)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="equipment_loan_link" href="#equipment_loan">
											<span class="pr-5">Equipment Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="heavy_mahine_hp">
									Heavy Machinery HP
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/heavy-Machinery-HP.png') }}" class="img-fluid d-none d-sm-block">
									<img src="{{ url('/images/business/borrowing/hire-purchase/heavy-Machinery-HP-mobile.png') }}" class="img-fluid d-block d-sm-none">
									<p class="heavy_machine_hp_tagline">Buy heavy machinery with us and dedicate your cash flow to more valuable channels!</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>You can get financing for the heavy machinery while avoiding the financial risk and administrative burden of owning vehicle fleets. AYA Bank made convenient for both sides. Under our heavy machinery HP, seller can become bank’s authorized dealer and buyer can purchase with the bank’s HP scheme.</p>
									<p>AYA Bank provides a convenient option to ownership while paying off and maintenance and value-added services are included. The finance company guarantees the resale value of the vehicle at the end of the contract purchase agreement for a known, fixed amount.</p>

									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">Features</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/financing-amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Financing Amount</p>
												<p class="mb-0" style="color: #4e4e4e;">You will be able to get funds up to 70% of the price of the heavy machinery you plan to buy for your business. It depends on your credit score, etc.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/interest-rate.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Interest Rate</p>
												<p class="mb-0" style="color: #4e4e4e;">Arrangement for flat rate as low as 10%.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/repayment-terms.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Repayment Terms</p>
												<p class="mb-0" style="color: #4e4e4e;">Flexible terms to meet your requirements with variable duration and mileage terms, up to 5 years.</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="shop_house"></div>
								<p class="shop_house">
									Shop House
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/shop-house.png') }}" class="img-fluid">
									<p class="shop_house_tagline">Business loan for shop owners with affordable rate</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Business owners can own shop or shop house instead of paying monthly rentals. Benefit from AYA shop house hire purchase scheme for purchasing a commercial property (store, office or warehouse, for example).</p>
									
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/financing-amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Financing Amount</p>
												<p class="mb-0" style="color: #4e4e4e;">The maximum loan amount you can get is 70% of the agreement value.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/interest-rate.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Interest Rate</p>
												<p class="mb-0" style="color: #4e4e4e;">Business loan for shops come with normal interest rates of 13% per annum.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/repayment-terms.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Repayment Terms</p>
												<p class="mb-0" style="color: #4e4e4e;">Under AYA Bank’s shop house HP, an installment repayment with variable loan tenors is up to 5 years.</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="auto_loan_corporate"></div>
								<p class="auto_loan_corporate">
									Auto Loan (Corporate)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/auto-loan-corporate.png') }}" class="img-fluid">
									<p class="auto_loan_corporate_tagline">Purchase the equipment you need to keep your business rolling</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>If your company relies on one or more vehicles, AYA business auto loan is the way to go. We provides an affordable way to buy a car, van or truck for business advantage. You can select vehicles from the AYA Bank’s authorized dealers, apply at any AYA branches with minimum down-payment and variable loan tenor.</p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/financing-amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Financing Amount</p>
												<p class="mb-0" style="color: #4e4e4e;">We offer maximum funds 70% for commercial auto loans with minimum initial down payment 30%.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/interest-rate.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Interest Rate</p>
												<p class="mb-0" style="color: #4e4e4e;">Annual interest rates start at 9%.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/repayment-terms.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Repayment Terms</p>
												<p class="mb-0" style="color: #4e4e4e;">Loan tenor is convenient and variable with options up to 5 years.</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40" id="equipment_loan"></div>
								<p class="equipment_loan">
									Equipment Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/equipment-loan.png') }}" class="img-fluid">
									<p class="equipment_loan_tagline">Helping you get financing for the equipment essential to run your business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>AYA Bank’s financing options for costly equipment such as computers, vehicles, machinery, electronic appliances, etc. to accelerate the growth of your business. We make it easy to separate your business and equipment expenses.</p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/financing-amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Financing Amount</p>
												<p class="mb-0" style="color: #4e4e4e;">Eligible business owners could receive up to 70% of equipment value.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/interest-rate.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Interest Rate</p>
												<p class="mb-0" style="color: #4e4e4e;">Starting interest rate from 10%.</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/repayment-terms.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="fw-semibold mb-10">Repayment Terms</p>
												<p class="mb-0" style="color: #4e4e4e;">Periodic repayments up to 10 years.</p>
											</td>
										</tr>
									</table>
								</div>

								<div class="space-40"></div>
								<div class="">
									<div class="col-md-12 c-b-l-div" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Contact our team for more information</p>
										<a href="https://saltnpixel.com/AYABank/AYABANK_Contact_Us_Hotline.html" target="_blank">
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
	// $(".nav-link").click(function() {
	// 	$(".nav-link").addClass('active');
	// 	$(".nav-link").not(this).removeClass('active');
	// });


	var cur_url = window.location.href;
	var parts = cur_url.split('#');
	var last_part = parts.at(-1);

	if (last_part == 'heavy_mahine_hp') {
		$(".nav-link").removeClass('active');
  		$("#heavy_mahine_hp_link").addClass('active');
  	}

  	if (last_part == 'shop_house') {
  		$(".nav-link").removeClass('active');
  		$("#shop_house_link").addClass('active');
  	}

  	if (last_part == 'auto_loan_corporate') {
		$(".nav-link").removeClass('active');
  		$("#auto_loan_corporate_link").addClass('active');
  	}

  	if (last_part == 'equipment_loan') {
		$(".nav-link").removeClass('active');
  		$("#equipment_loan_link").addClass('active');
  	}

  	$(".nav-link").click(function(e) {
		$(".nav-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (nav_link_href == '#heavy_mahine_hp') {
	  		$("#heavy_mahine_hp_link").addClass('active');
	  	}

	  	if (nav_link_href == '#shop_house') {
	  		$("#shop_house_link").addClass('active');
	  	}

	  	if (nav_link_href == '#auto_loan_corporate') {
	  		$("#auto_loan_corporate_link").addClass('active');
	  	}

	  	if (nav_link_href == '#equipment_loan') {
	  		$("#equipment_loan_link").addClass('active');
	  	}
	});

  	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var heavy_mahine_hp_section = $("#heavy_mahine_hp");
		if (scrollTop > heavy_mahine_hp_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#heavy_mahine_hp_link").addClass('active');
		}

		var shop_house_section = $("#shop_house");
		if (scrollTop > shop_house_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#shop_house_link").addClass('active');
		}

		var auto_loan_corporate_section = $("#auto_loan_corporate");
		if (scrollTop > auto_loan_corporate_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#auto_loan_corporate_link").addClass('active');
		}

		var equipment_loan_section = $("#equipment_loan");
		if (scrollTop > equipment_loan_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#equipment_loan_link").addClass('active');
		}
	});
</script>
@endsection('content')