@extends('layouts.frontend-app')

@section('title', 'Hire Purchase – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/borrowing/hire-purchase.css') }}" />
<style type="text/css">
	
</style>
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
					<p>Need to purchase new assets for your business without the stress of having to pay large upfront costs? AYA Bank offers a hire purchase finance option to meet your needs.</p>
					<p>Hire purchase finance can be used for a variety of assets, ranging from heavy machinery, equipment, vehicle to shop house.</p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">All You Need to Know</p>
				</div>
				<div class="row">
					<div class="col-1">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11">
						<p class="mx-n7 mt-minus-5">It is a fixed rate loan, so interest rates tend to be cost effective</p>
					</div>
					<div class="col-1">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11">
						<p class="mx-n7 mt-minus-5">You can utilize the asset while paying back in instalments over a set period of time</p>
					</div>
					<div class="col-1">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11">
						<p class="mx-n7 mt-minus-5">You will legally own the item once all the instalments have been paid in full</p>
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
						<p class="mx-n4 mt-minus-5">Companies can purchase necessary assets quickly</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n4 mt-minus-5">Cost of repaying is spread over a fixed period without impact on working capital</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n4 mt-minus-5">AYA Bank offers competitive interest rate</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="mx-n4 mt-minus-5">It is flexible, straightforward and relatively easy to apply</p>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">How to Qualify</p>
				</div>
				<div class="row why_use_AYA_outer" style="column-gap: 40px;">
					<div class="col-md-6 outer_benefit_box benefit_section_col d-none d-sm-block">
						<div class="row">
							<div class="col-3 py-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/credit-score.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-9 py-md-4 px-md-3">
								<p class="fw-semibold mb-0">Credit Score</p>
								<p class="mb-0" style="color: #4e4e4e;">Does your business have minimum credit score for Business Loan Eligibility? Different credit scores needed for different types of business loans. It ultimately determines loan amount, repayment schedules, etc.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col d-none d-sm-block">
						<div class="row">
							<div class="col-3 py-md-3">
								<img src="{{ url('/images/business/borrowing/hire-purchase/cash-flow.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-9 py-md-4 px-md-3">
								<p class="fw-semibold mb-0">Cash Flow</p>
								<p class="mb-0" style="color: #4e4e4e;">You can qualify for hire purchase financing on the basis of your cash flow.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col d-none d-sm-block">
						<div class="row">
							<div class="col-3 py-md-4">
								<img src="{{ url('/images/business/borrowing/hire-purchase/collateral.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-9 py-md-4 px-md-3">
								<p class="fw-semibold mb-0">Collateral</p>
								<p class="mb-0" style="color: #4e4e4e;">Asset to be financed is secured as collateral in hire purchase agreement.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 outer_benefit_box benefit_section_col d-none d-sm-block">
						<div class="row">
							<div class="col-3 py-md-4">
								<img src="{{ url('/images/business/borrowing/hire-purchase/down-payment.png') }}" class="img-fluid benefit_icon">
							</div>
							<div class="col-9 py-md-4 px-md-3">
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
							<h3 class="fw-bold">Offering Loan</h3>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#heavy_mahine_hp">
											<span class="pr-5">Heavy Machinery HP</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#shop_house">
											<span class="pr-5">Shop House</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#auto_loan_corporate">
											<span class="pr-5">Auto Loan (Corporate)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#equipment_loan">
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
									<img src="{{ url('/images/business/borrowing/hire-purchase/heavy-Machinery-HP.png') }}" class="img-fluid">
									<p class="heavy_mahine_hp_tagline">Buy heavy machinery with us and dedicate your cash flow to more valuable channels!</p>
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
									<img src="{{ url('/images/business/borrowing/hire-purchase/shop-house.png') }}" class="img-fluid d-none d-sm-block">
									<!-- <img src="{{ url('/images/business/borrowing/hire-purchase/shop_house_OD_mobile.png') }}" class="img-fluid d-block d-sm-none"> -->
									<p class="shop_house_tagline">Do you have ongoing working capital requirements?<br>You are at the right place!</p>
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
												<img src="{{ url('/images/business/borrowing/hire-purchase/loan_tenure_1_year.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan Tenure: 1 year (Yearly renewal)</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/calculation_interest_rate.png') }}" class="img-fluid c-b-l-icon">
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

								<div class="space-40" id="auto_loan_corporate"></div>
								<p class="auto_loan_corporate">
									Demand Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/auto_loan_corporate.png') }}" class="img-fluid">
									<p class="auto_loan_corporate_tagline">Enjoy convenience of demanding repayment at any time</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>If you are looking forward to boosting your capital investment or business expansion, let us help you grow your business! AYA Bank offers Demand Loan to SMEs and Corporates for fixed asset purchases, capital expenditure purchases and industrial building construction, etc.</p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-0" style="font-size: 17px;">Features and Benefits</p>

									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/loan_tenor_3_year.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan Tenor is up to 3 years</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/loan_amount.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Loan amount is up to MMK 1 billion for SME, starting from MMK 1 billion for corporates</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/CAPEX_share_securities.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>It can be considered under business loans, trade advances, inventory funding, loans against share & securities etc. (subject to be reviewed by the Credit Committee)</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/repayment.png') }}" class="img-fluid c-b-l-icon">
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

								<div class="space-40" id="equipment_loan"></div>
								<p class="equipment_loan">
									Project Loan / Tender Contract Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/project_loan.png') }}" class="img-fluid">
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
												<img src="{{ url('/images/business/borrowing/hire-purchase/easy_efficient_application.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Easy and efficient application to increase the source of funds whenever you require</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/able_to_maintain.png') }}" class="img-fluid c-b-l-icon">
											</td>
											<td>
												<p>Able to maintain a competitive advantage in the market and opportunity of risk sharing</p>
											</td>
										</tr>
										<tr>
											<td class="benefit_table_icon_td">
												<img src="{{ url('/images/business/borrowing/hire-purchase/extend_debt_capacity.png') }}" class="img-fluid c-b-l-icon">
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

								<div class="space-40" id="franchise_financing"></div>
								<p class="franchise_financing">
									Franchise Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/franchise_financing.png') }}" class="img-fluid d-none d-sm-block">
									<img src="{{ url('/images/business/borrowing/hire-purchase/franchise_financing_mobile.png') }}" class="img-fluid d-block d-sm-none">
									<p class="franchise_financing_tagline">Get simple, fast financing for your franchise business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Work with us to receive the type of financing you need to improve your franchised shop and expand business. Our non-revolving credit facility is granted to end-borrower for their franchise business establishment. AYA Bank facilitates finance to franchised customers with collaterals in return for borrowing funds.</p>
								</div>

								<div class="space-40" id="trade_financing"></div>
								<p class="trade_financing">
									Trade Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/hire-purchase/trade_financing.png') }}" class="img-fluid">
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
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>
@endsection('content')