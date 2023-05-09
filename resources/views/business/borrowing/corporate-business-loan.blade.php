@extends('layouts.frontend-app')

@section('title', 'Corporate Business Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/borrowing/corporate-business-loan.css') }}" />
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_borrowing_corporate_business_loan'])

			<div class="container section_1" >
				<div class="space-40"></div>
				<div class="col-md-12">
					<p>If you are operating a business with ongoing capital requirements, we offer a full range of loan packages to suit your property financing needs. We work closely with business clients in advising on appropriate credit facilities and tenors in alignment with their business nature.  </p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">Basic Requirements your company should meet,</p>
				</div>
				<div class="row">
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n5 mt-minus-5">Good credit scores</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n5 mt-minus-5">Healthy financial records coupled with sound purposes for utilizing loans</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n5 mt-minus-5">All prerequisites requested from AYA Bank</p>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<p class="fw-bold" style="font-size: 16px;">What We Offer for Corporate Business Loans</p>
						</div>
						<div class="space-20"></div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" id="capex_financing_link" href="#capex_financing">
											<span class="pr-5">CAPEX Financing / Assets Acquisition Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="working_capital_financing_link" href="#working_capital_financing">
											<span>Working Capital Financing (Overdraft – OD)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="demand_loan_link" href="#demand_loan">
											<span>Demand Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="project_loan_tender_contract_loan_link" href="#project_loan_tender_contract_loan">
											<span class="pr-5">Project Loan / Tender Contract Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="franchise_financing_link" href="#franchise_financing">
											<span class="pr-5">Franchise Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="trade_financing_link" href="#trade_financing">
											<span class="pr-5">Trade Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p class="offers_div" id="capex_financing">
									CAPEX Financing / Assets Acquisition Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/CAPEX_financing.png') }}" class="img-fluid">
									<p class="capex_financing_tagline">Time to fuel your business for the next stage of growth</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>You have vision but require a large amount of financing to invest in fixed assets?</p>
									<p>We have tools to make it happen. AYA Bank offers CAPEX loans, either short, medium or long term, which do not have a fixed date for repayment. It carries a floating interest rate which may varies according to the prime rate. It can be "called" for repayment by the lending institution anytime.</p>

									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/maximum_loan_tenor_12_months.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Maximum Loan Tenor: 12 months from the date of drawdown</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/CAPEX_share_securities.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="w-80">It can be considered under business loans, trade advances, inventory funding, loans against share & securities etc. This would be reviewed from time to time by the Credit Committee.</p>
											</td>
										</tr>
									</table>

									<div class="space-20"></div>

									<div class="col-md-12">
										<p class="fw-semibold" style="font-size: 17px;">Fees and Charges</p>
										<div class="space-10"></div>
										<table class="table table-bordered fee_charge_table">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Interest rate</td>
													<td style="border-right: none;">9% - 14.5% per annum</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Facility fee</td>
													<td style="border-right: none;">1% - 2% per annum</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">Default fee</td>
													<td style="border-right: none;">2% per month</td>
												</tr>
												<tr style="background-color: #fff;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Penalty fee</td>
													<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">2% per month</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-40 offers_div" id="working_capital_financing"></div>
								<p class="working_capital_financing">
									Working Capital Financing (Overdraft – OD)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/working_capital_financing_OD.png') }}" class="img-fluid d-none d-sm-block">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/working_capital_financing_OD_mobile.png') }}" class="img-fluid d-block d-sm-none">
									<p class="working_capital_financing_tagline">Do you have ongoing working capital requirements?<br>You are at the right place!</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Does your business need a working capital for the day-to-day running of the business? Perhaps need financing for payroll? Or making payments for operational expenses?</p>
									<p>AYA Bank’s working capital financing offers a solution to cover short-term internal business expenses.</p>
									
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features and Benefits</p>
									<p>Best suited for businesses with inconsistent cash flow.</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/loan_tenure_1_year.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan Tenure: 1 year (Yearly renewal)</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/calculation_interest_rate.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p class="w-80">Calculation of interest rate is based on the utilization of loan amount</p>
											</td>
										</tr>
									</table>

									<div class="space-20"></div>

									<div class="col-md-12">
										<p class="fw-semibold" style="font-size: 17px;">Fees and Charges</p>
										<div class="space-10"></div>
										<table class="table table-bordered fee_charge_table">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
												<tr style="background-color: #fff;border-top: none;">
													<td class="w-40" style="border-left: none;padding: 20px;">Service Fee</td>
													<td style="border-right: none;">0% - 1% per annum</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Commitment Fee</td>
													<td style="border-right: none;">1% (based on the unutilized portion which is under the 80% of the loan amount)</td>
												</tr>
												<tr style="background-color: #fff;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest rate</td>
													<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">8% - 9% per annum</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-40 offers_div" id="demand_loan"></div>
								<p class="demand_loan">
									Demand Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/demand_loan.png') }}" class="img-fluid">
									<p class="demand_loan_tagline">Enjoy convenience of demanding repayment at any time</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>If you are looking forward to boosting your capital investment or business expansion, let us help you grow your business! AYA Bank offers Demand Loan to SMEs and Corporates for fixed asset purchases, capital expenditure purchases and industrial building construction, etc.</p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features and Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/loan_tenor_3_year.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan Tenor is up to 3 years</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/loan_amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan amount is up to MMK 1 billion for SME, starting from MMK 1 billion for corporates</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/CAPEX_share_securities.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>It can be considered under business loans, trade advances, inventory funding, loans against share & securities etc. (subject to be reviewed by the Credit Committee)</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/repayment.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>You can apply for either short, medium or long term which do not have a fixed repayment date and carry a floating interest rate varying according to the prime date.</p>
											</td>
										</tr>
									</table>

									<div class="space-20"></div>

									<div class="col-md-12">
										<p class="fw-semibold" style="font-size: 17px;">Fees and Charges</p>
										<div class="space-10"></div>
										<table class="table table-bordered fee_charge_table">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
												<tr style="background-color: #fff;border-top: none;">
													<td class="w-30" style="border-left: none;padding: 20px;">Interest rate</td>
													<td style="border-right: none;">10% - 14.5% per annum for SME, 9% - 14.5% per annum for corporates</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Facility fee</td>
													<td style="border-right: none;">1% - 2% per annum (applicable only to corporate)</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">Default fee</td>
													<td style="border-right: none;">2% per month (applicable to SME and corporate)</td>
												</tr>
												<tr style="background-color: #fff;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Penalty fee</td>
													<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">2% per month (applicable to SME and corporate)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-40 offers_div" id="project_loan_tender_contract_loan"></div>
								<p class="project_loan_tender_contract_loan">
									Project Loan / Tender Contract Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/project_loan.png') }}" class="img-fluid">
									<p class="project_loan_tagline">Providing a path to infrastructural solutions with smooth banking experience </p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>AYA Bank finances companies for the development of large-scale construction (or) infrastructure projects granted by the government.</p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features and Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/easy_efficient_application.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Easy and efficient application to increase the source of funds whenever you require</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/able_to_maintain.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Able to maintain a competitive advantage in the market and opportunity of risk sharing</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/corporate-business-loan/extend_debt_capacity.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Can extend the debt capacity with the release of free cash flows</p>
											</td>
										</tr>
									</table>

									<div class="space-20"></div>

									<div class="col-md-12">
										<p class="fw-semibold" style="font-size: 17px;">Fees and Charges</p>
										<div class="space-10"></div>
										<table class="table table-bordered fee_charge_table">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Affordable interest rate</td>
													<td style="border-right: none;">only 13% per annum</td>
												</tr>
												<tr style="background-color: #fff;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Reasonable service fee</td>
													<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">1.5% per annum on pro-rata basis</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-40 offers_div" id="franchise_financing"></div>
								<p class="franchise_financing">
									Franchise Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/franchise_financing.png') }}" class="img-fluid d-none d-sm-block">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/franchise_financing_mobile.png') }}" class="img-fluid d-block d-sm-none">
									<p class="franchise_financing_tagline">Get simple, fast financing for your franchise business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Work with us to receive the type of financing you need to improve your franchised shop and expand business. Our non-revolving credit facility is granted to end-borrower for their franchise business establishment. AYA Bank facilitates finance to franchised customers with collaterals in return for borrowing funds.</p>
								</div>

								<div class="space-40 offers_div" id="trade_financing"></div>
								<p class="trade_financing">
									Trade Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/trade_financing.png') }}" class="img-fluid">
									<p class="trade_financing_tagline d-none d-sm-block">Looking for the solution to be a player<br>on the international trade and commerce stage?</p>
									<p class="trade_financing_tagline d-block d-sm-none">Looking for the solution to be a player on the international trade and commerce stage?</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>AYA Bank provides a comprehensive solution for trade financing needs from import to export and invoice financing. We bridge the funding gap between paying suppliers and receiving customers for both domestic and international trade transactions. With our trade financing, corporates can mitigate non-payment risk and improve working capital efficiency.</p>

									<a href="{{ url('/business/trade/trade-financing') }}"><p class="theme_text_color text-decoration-underline">Learn More</p></a>
								</div>

								<div class="space-40"></div>
								<div class="">
									<div class="col-md-12 c-b-l-div" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Have any questions?</p>
										<a href="#" target="_blank">
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

	if (last_part == 'capex_financing') {
		$(".nav-link").removeClass('active');
  		$("#capex_financing_link").addClass('active');
  	}

  	if (last_part == 'working_capital_financing') {
  		$(".nav-link").removeClass('active');
  		$("#working_capital_financing_link").addClass('active');
  	}

  	if (last_part == 'demand_loan') {
		$(".nav-link").removeClass('active');
  		$("#demand_loan_link").addClass('active');
  	}

  	if (last_part == 'project_loan_tender_contract_loan') {
		$(".nav-link").removeClass('active');
  		$("#project_loan_tender_contract_loan_link").addClass('active');
  	}

  	if (last_part == 'franchise_financing') {
		$(".nav-link").removeClass('active');
  		$("#franchise_financing_link").addClass('active');
  	}

  	if (last_part == 'trade_financing') {
		$(".nav-link").removeClass('active');
  		$("#trade_financing_link").addClass('active');
  	}

	$(".nav-link").click(function(e) {
		$(".nav-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (nav_link_href == '#capex_financing') {
	  		$("#capex_financing_link").addClass('active');
	  	}

	  	if (nav_link_href == '#working_capital_financing') {
	  		$("#working_capital_financing_link").addClass('active');
	  	}

	  	if (nav_link_href == '#demand_loan') {
	  		$("#demand_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#project_loan_tender_contract_loan') {
	  		$("#project_loan_tender_contract_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#franchise_financing') {
	  		$("#franchise_financing_link").addClass('active');
	  	}

	  	if (nav_link_href == '#trade_financing') {
	  		$("#trade_financing_link").addClass('active');
	  	}
	});

  	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var capex_financing_section = $("#capex_financing");
		if (scrollTop > capex_financing_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#capex_financing_link").addClass('active');
		}

		var working_capital_financing_section = $("#working_capital_financing");
		if (scrollTop > working_capital_financing_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#working_capital_financing_link").addClass('active');
		}

		var demand_loan_section = $("#demand_loan");
		if (scrollTop > demand_loan_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#demand_loan_link").addClass('active');
		}

		var prj_tender_contract_loan_section = $("#project_loan_tender_contract_loan");
		if (scrollTop > prj_tender_contract_loan_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#project_loan_tender_contract_loan_link").addClass('active');
		}

		var franchise_financing_section = $("#franchise_financing");
		if (scrollTop > franchise_financing_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#franchise_financing_link").addClass('active');
		}

		var trade_financing_section = $("#trade_financing");
		if (scrollTop > trade_financing_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#trade_financing_link").addClass('active');
		}
	});
</script>
@endsection('content')