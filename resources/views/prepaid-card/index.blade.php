@extends('layouts.frontend-app')

@section('title', 'Prepaid Card – AYA Bank')
<style type="text/css">
    .benefit_icon {
		width: 30% !important;
	}
	.col-md-4 {
	    flex: 0 0 auto;
	    width: 30.333333% !important;
	}
	.outer_benefit_box {
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.how_to_apply_outer_section {
		background-image: url('./images/prepaid/how_to_apply_bg.jpg');
		background-size: cover;
		background-position: center center;
	}
	.prepaid_how_to_apply_section {
		padding: 40px 50px 60px 110px !important;
	}
	.fee_charge_inner_div {
		margin-bottom: 20px;
	}
	.fee_title {
		color: #000;
		margin-bottom: 0px;
		font-weight: 500;
	}
	.fee_desc {
		color: #5c5c5c;
		margin-bottom: 0px;
	}
	.fees_charge_div{
		background-color: #fff;
		border: 2px solid #cccccc;
		border-radius: 10px;
		padding: 40px 30px;
		margin-left: 0px !important;
		margin-bottom: 30px;
	}
	.statment_enquiry {
		background-image: url('./images/prepaid/statement_inquiry.png');
		background-size: cover;
		background-position: left center;
		border-radius: 0px 0px 25px 25px;
	}
	.card_block_termination {
		background-image: url('./images/prepaid/card_block_termination.png');
		background-size: cover;
		background-position: left center;
		border-radius: 0px 0px 25px 25px;
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.col-md-4 {
		    flex: 0 0 auto;
		    width: 100% !important;
		}
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row {
			/*width: auto;*/
		}
		.tab_h2{
			top: 380px;
		}
		.tab_upi_h2{
			top: 380px;
			left: 15%;
		}
		.outer_benefit_box {
			margin-bottom: 10px;
		}
		.how_to_apply_outer_section {
			background-image: none;
			background-color: #f5f5f5;
		}
		.prepaid_how_to_apply_section {
		    padding: 40px 50px 20px 50px !important;
		}
		.statment_enquiry {
			background-position: center;
			border: 2px solid #4b4c4c;
		}
		.card_block_termination {
			background-position: center;
			border: 2px solid #a02225;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'prepaid'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'prepaid'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'prepaid'])
			</div>

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12">
						<h3 style="font-weight: 500;color: #000;">Features</h3>
					</div>
				</div>
				
				<div class="space-20"></div>
				
				<div class="row" style="column-gap: 20px;">
					<div class="col-md-4 outer_benefit_box why_use_AYA">
						<div class="row benefit_box">
							<img src="{{ url('/images/prepaid/one_four_currency.png') }}" class="img-fluid benefit_icon">
							<p style="font-weight: 600;margin-top: 1rem;">One Card – Four Currencies</p>
							<p class="solution_text solution_desc">AYA World Travel Card offers currency options (MMK, USD, SGD, EURO) to preload onto the card and the default currency is Myanmar Kyats (MMK) and refill at nearest branches and m/i banking and AYA Pay.</p>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box why_use_AYA">
						<div class="row benefit_box">
							<img src="{{ url('/images/prepaid/manage_your_funds.png') }}" class="img-fluid benefit_icon">
							<p style="font-weight: 600;margin-top: 1rem;">Manage your funds</p>
							<p class="solution_text solution_desc">Check balance via i/m banking and AYA Pay or withdraw cash at any ATMs and get local currency. (Charges may apply for each cash withdrawal).</p>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box why_use_AYA">
						<div class="row benefit_box">
							<img src="{{ url('/images/prepaid/tab_pay_visa_paywave.png') }}" class="img-fluid benefit_icon">
							<p style="font-weight: 600;margin-top: 1rem;">Tap and Pay with Visa PayWave</p>
							<p class="solution_text solution_desc">Simply Tap and Go with Visa PayWave, the latest in secure, contactless technology, spend less time at sales counter.</p>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box why_use_AYA">
						<div class="row benefit_box">
							<img src="{{ url('/images/prepaid/who_can_apply.png') }}" class="img-fluid benefit_icon">
							<p style="font-weight: 600;margin-top: 1rem;">Who can apply</p>
							<p class="solution_text solution_desc">Any Citizens and PR, 18 years and above.</p>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box why_use_AYA">
						<div class="row benefit_box">
							<img src="{{ url('/images/prepaid/security_protection.png') }}" class="img-fluid benefit_icon">
							<p style="font-weight: 600;margin-top: 1rem;">Security Protection</p>
							<p class="solution_text solution_desc">Extra layer of security (with password) is provided for secure online payment.</p>
						</div>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="row">
					<div class="col-md-12">
						<h3 style="font-weight: 500;color: #000;margin-bottom: 10px;">Fees and Charges</h3>
						<p style="color: #1d1d1f;margin-bottom: 30px;"><a class="credit_fee_charge" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Click here</a><i class="menu-icon tf-icons bx bx-chevron-down annual_fee_chevron"></i></p>
					</div>
					<div class="row fees_charge_div" style="display: none;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Annual Fee</p>
									<p class="fee_desc">Free</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Card Fees</p>
									<p class="fee_desc">10,000 MMK</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Card Lost/Damage/Reissue Fees</p>
									<p class="fee_desc">10,000 MMK</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Card Early Termination / Cancellation Fee</p>
									<p class="fee_desc">NIL</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Top up Fees/ Reload Fees :</p>
									<p class="fee_desc">&nbsp;</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Cash Top up and Account Transfer ( MMK )</p>
									<p class="fee_desc">2,000 MMK</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Cash Top up Fees - Non-MMK<br>( USD ,SGD ,EURO )</p>
									<p class="fee_desc">0.80%</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Account Transfer/Cheque Top up Fees - Non-MMK<br>( USD ,SGD ,EURO )</p>
									<p class="fee_desc">USD 2</p>
									<p class="fee_desc">SGD 2</p>
									<p class="fee_desc">EURO 2</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">PIN Reissue Fees</p>
									<p class="fee_desc">1,000 MMK</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">POS Transactions Fees</p>
									<p class="fee_desc">Free</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Online Transaction Fees</p>
									<p class="fee_desc">Free</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">ATM Withdrawal Fees</p>
									<p class="fee_desc">Overseas bank charges (per transaction)</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Balance Inquiry</p>
									<p class="fee_desc">Free</p>
								</div>
								<div class="col-md-6 fee_charge_inner_div">
									<p class="fee_title">Statement Request fee</p>
									<p class="fee_desc">Free</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
			</div>


			<div class="d-block d-sm-none">
				<img src="{{ url('/images/prepaid/how_to_apply_mobile.jpg') }}" class="img-fluid">
			</div>
			<div class="how_to_apply_outer_section">
				<div class="container prepaid_how_to_apply_section" style="">
					<div class="space-80 d-none d-sm-block"></div>
					<div class="row">
						<div class="col-md-6 how_to_apply_desc">
							<h3 style="font-weight: 600;color: #000;">How to Apply</h3>
							<p>Apply at nearest AYA Branch with your NRC card or via online.</p>
							<a target="_blank" href="#">
								<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
									Apply Now
								</button>
							</a>
						</div>
						<div class="col-md-6"></div>
					</div>
					<div class="space-60 d-none d-sm-block"></div>
				</div>
			</div>
			
			<div class="" style="background-color: #fafafa">
				<div class="container section_1">
					<div class="space-60"></div>
					<div class="row">
						<div class="col-md-12" style="padding: 0px;">
							<h3 style="font-weight: 500;color: #000;">Managing Your card</h3>
						</div>
					</div>

					<div class="row d-block d-sm-none" style="background-color: #4c4b4b;border-radius: 25px 25px 0px 0px;padding: 10px;">
						<img src="{{ url('/images/prepaid/statement_inquiry_mobile.jpg') }}" class="img-fluid">
					</div>
					<div class="row statment_enquiry">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<div class="space-30"></div>
							<p style="font-weight: 700;">Statement Enquiry</p>
							<p>Visit Nearest branches or Email to <a href="mailto:support.card@ayabank.com">support.card@ayabank.com</a> with cardholder’s name, NRC, and card number.</p>
							<div class="space-29"></div>
						</div>
					</div>

					<div class="space-40"></div>

					<div class="row d-block d-sm-none" style="background-color: #a2000c;border-radius: 25px 25px 0px 0px;padding: 10px;">
						<img src="{{ url('/images/prepaid/card_block_termination_mobile.jpg') }}" class="img-fluid">
					</div>
					<div class="row card_block_termination">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<div class="space-30"></div>
							<p style="font-weight: 700;">Card Block and Termination</p>
							<p>In case your card is missing, call to our Customer Services at <a href="tel:+9512317777">+95 1 2317777</a> or visit nearest visit branches for temporary card block and termination.</p>
							<div class="space-29"></div>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>
			
			<div class="space-60"></div>

			<div class="">
				<div class="col-12 text-center">
					<h4 style="font-weight: 500;color: #000;">Forgot your card PIN?</h4>
					<p>You can reset / change your PIN easily via online.</p>
					<a target="_blank" href="#">
						<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
							Reset PIN
						</button>
					</a>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="container faq_section" style="">
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">FAQs</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What is Prepaid Card?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>A prepaid card allows you to purchase items in-store and online in both domestic or overseas without cash, credit card, or a bank account, and use the money you load in advance. It can be loaded or refilled at any of AYA Branches and via m-banking , i-banking, AYA Pay applications or AYA Pay agents.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What do I need to apply  Visa Prepaid Card?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										If you are 18 years old or above, you can apply at nearest branches with your NRC. Visa Prepaid card can be used up to four currencies: MMK, USD, EURO, SGD.
									</p>
									<p>
										It can also be applied online at link <a href="https://prepaidcard.ayabank.com/" target="_blank">https://prepaidcard.ayabank.com/</a> and select the branch to collect the card. Card fees can be charged at MMK 10,000.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									How to check the account balance in Visa Prepaid Card?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can check account balance or request account statment at <a href="mailto:support.card@ayabank.com">support.card@ayabank.com</a> by providing cardholder name and VISA Card details. Alternatively , it can be checked at Prepaid Card enquiry in the i-banking application.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Statement Enquiry
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Visit Nearest branches or Email to <a href="mailto:support.card@ayabank.com">support.card@ayabank.com</a> with cardholder’s name, NRC, and card number. 
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Card Block and Termination
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										In case your card is missing, call to our Customer Services at <a href="tel:+95 1 2317777">+95 1 2317777</a> or visit nearest visit branches for temporary card block and termination.
									</p>
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
	$(".credit_fee_charge").click(function(){
		$(".fees_charge_div").slideToggle();
		if ($(".credit_fee_charge_chevron").hasClass('bx-chevron-up')) {
			$(".credit_fee_charge_chevron").removeClass('bx-chevron-up');
			$(".credit_fee_charge_chevron").addClass('bx-chevron-down');
		} else {
			$(".credit_fee_charge_chevron").addClass('bx-chevron-up');
			$(".credit_fee_charge_chevron").removeClass('bx-chevron-down');
		}
	});
</script>

@endsection('content')
