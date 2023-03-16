@extends('layouts.frontend-app')

@section('title', 'ATM – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<style type="text/css">
	/* tab */
	.nav-align-top .nav-tabs .nav-item:first-child .nav-link {
    	border-top:  none;
    	border-left: none;
    	border-right: none;
    	box-shadow: none;
    }
    .tab_title > span {
    	padding: 20px 0px;
    }
    .nav-align-top .nav-tabs .tab_title.active span {
    	border-bottom: 5px solid #a02226;
    }
    .nav-pills .tab_title.active, .nav-pills .tab_title.active:hover, .nav-pills .tab_title.active:focus {
    	background-color: transparent !important;
	    color: #000 !important;
	    box-shadow: none !important;
	    border-bottom: 5px solid #ae002c;
	    border-radius: 0;
	    font-weight: 500;
    }
    .nav .tab_title:hover, .nav .tab_title:focus {
    	color: #000 !important;
    }
    .nav-pills .tab_title {
    	font-weight: 400;
    	font-size: 16px;
    }
    .tab-content {
		box-shadow: none !important;
	}
	.tab_section_1 {
	/*	    padding: 0px 100px !important;*/
	}
	/* tab:end */

	.step_point_title {
		color: #000;
		font-size: 13px;
		font-weight: 500;
	}
	.step_desc {
		color: #000;
		font-size: 13px;
	}
	.step_points {
		padding-left: 15px;
		list-style: square;
	}
	.slide-content-available > .swiper-wrapper > .swiper-slide-active {
	    background-color: #f2f2f2;
	}
	.slide-content-available > .swiper-wrapper {
		height: 95% !important;
	}
	.slide-content-quick-cash-withdrawl > .swiper-wrapper, .slide-content-cardless-withdrawal > .swiper-wrapper,
	.slide-content-balance-inquiry > .swiper-wrapper, .slide-content-fund-transfer > .swiper-wrapper {
		height: 85% !important;
	}

	.outer_benefit_box {
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.why_use_AYA_outer > .col-md-6 {
		width: 48%;
	}
	.apply_now_btn {
		background-color: #ae071d !important;
		color: #fff !important;
		padding: 15px 25px !important;
		border-color: #ae071d !important;
		margin-bottom: 2rem !important;
	}
	.apply_now_btn:hover{
		background-color: #fff !important;
		border-color: #ae071d !important;
		color: #ae071d !important;
	}
	.need_more_support_section_inner {
		padding: 10px 100px 10px 100px;
		background-image: url('./images/ayapay/explore_bg.png');
		background-size: cover;
		border-radius: 6px;
	}
	.merchant_agent_div {
		column-gap: 20px;
		width: 100%;
	}
	.merchant_agent_div > .col-md-6 {
		width: 49%;
	}
	.need_more_support_section {
	    padding: 40px 208px 0px 208px;
	}
	.reset_pin_btn {
		background-color: #ae071d !important;
		border: 1px solid #ae071d !important;
		color: #fff !important;
		font-weight: 500;
		padding: 15px 25px !important;
		margin-bottom: 2rem !important;
	}
	.reset_pin_btn:hover {
		border: 1px solid #ae071d !important;
		color: #ae071d !important;
		background-color: #fff !important;
	}
	.swiper-navBtn{
		color: #d7d7d8;
		transition: color 0.3s ease;
		top: 40%;
		border: 1px solid #dedede;
	}
	.swiper-navBtn:hover{
		color: #979797;
		border: 1px solid #979797;
	}
	.swiper-navBtn::before,
	.swiper-navBtn::after{
		font-size: 20px;
	}
	.swiper-button-next{
		right: 0;
		border-radius: 50%;
	    padding: 20px 20px 20px 23px;
	}
	.swiper-button-prev{
		left: 0;
		border-radius: 50%;
	    padding: 20px 23px 20px 20px;
	}
	.swiper-pagination-bullet{
		background-color: #6E93f7;
		opacity: 1;
	}
	.swiper-pagination-bullet-active{
		background-color: #4070F4;
	}
	.card {
		box-shadow: none !important;
		padding: 30px 20px 20px 20px !important;
	    border: 1px solid #dedede !important;
	    border-radius: 10px !important;
	}
	.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic, .swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
		transform: translate(-50%,40%) !important;
		padding: 5px;
	}
	.swiper-pagination-bullet {
	    width: var(--swiper-pagination-bullet-width,var(--swiper-pagination-bullet-size,13px));
	    height: var(--swiper-pagination-bullet-height,var(--swiper-pagination-bullet-size,13px));
	}
	.swiper-pagination-bullet {
		background-color: #c3c3c3;
	}
	.swiper-pagination-bullet-active {
		background-color: #982801;
		border: 2px solid #fff;
  		outline: 2px solid #982801;
	}
	.swiper-wrapper {
		height: 85%;
	}
	.slide-content-desktop > .swiper-wrapper > .swiper-slide-active {
		width: 60% !important;
	}
	.slide-content-desktop > .slide-wrapper > .swiper-slide-next {
		opacity: 0.4;
		width: 60% !important;
	}
	.fee_title {
		color: #5c5c5c;
		margin-bottom: 5px;
	}
	.fee_desc {
		color: #000;
		font-size: 13px;
		margin-bottom: 0px;
	}
	.services_overview_div{
		padding-left: 120px !important;
	}
	.available_services_div {
		padding-left: 77px !important;
	}
	.modal-body {
	    padding: 0.5rem 1.5rem !important;
	}
	.modal .modal-dialog:not(.modal-fullscreen) {
		padding: 0px !important;
	}
	@media (max-width: 1300px) and (min-width: 577px) {
		.why_use_AYA_outer > .col-md-6 {
			width: 47%;
		}
		.need_more_support_section {
		    padding: 40px 130px !important;
		}
		.need_more_support_section_inner {
			padding: 40px 60px 60px 60px;
			background-position: 60% center;
		}
		.merchant_agent_div > .col-md-6 {
			width: 48%;
		}
		.tag_line_mascot {
			margin-top: -50px;
		}
		.services_overview_div{
			padding-left: 85px !important;
		}
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}
		.merchant_agent_div > .col-md-6 {
			width: 100%;
		}
		.tag_line_mascot {
			text-align: center;
		}
		.merchant_agent_div {
			width: auto;
		}
		.need_more_support_section {
		    padding: 0px 20px !important;
		}
		.swiper-wrapper{
		    height: 90%;
		}
		.services_overview_div{
			padding-left: 15px !important;
		}
		/*.swiper_div {
			padding-left: 40px !important;
		}*/
		.slide-content-available > .swiper-wrapper {
			height: 90% !important;
		}
		.modal-body {
			padding-bottom: 40px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'atm'])

			<div class="container section_1">
				@include('layouts.tagline', ['page'=>'atm'])
			</div>

			<div class="space-20"></div>

			<div class="d-none d-sm-block">
				<img src="{{ url('/images/atm/location_holder.jpg') }}" class="img-fluid">
			</div>
			<div class="d-block d-sm-none">
				<img src="{{ url('/images/atm/location_holder_mobile.jpg') }}" class="img-fluid">
			</div>

			<div class="space-60"></div>
			<div class="container section_1">
				<div class="row">
					<div class="col-md-12">
						<h3 style="color: #1d1d1f;">Available ATM Card Services</h3>
					</div>
					<div class="space-20"></div>
					<div class="col-md-4 col-sm-12" id="cash_withdraw_mmk_div">
						<img src="{{ url('/images/atm/cash_withdraw_mmk.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Cash Withdrawal (MMK)</p>
					</div>
					<div class="col-md-4 col-sm-12" id="quick_cash_withdrawal_div">
						<img src="{{ url('/images/atm/fast_cash_withdrawl.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Quick Cash Withdrawal</p>
					</div>
					<div class="col-md-4 col-sm-12" id="cardless_withdrawal_div">
						<img src="{{ url('/images/atm/cardless_withdraw.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Cardless Withdrawal</p>
					</div>
					<div class="col-md-4 col-sm-12" id="pin_change_div">
						<img src="{{ url('/images/atm/pin_change.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">PIN Change</p>
					</div>
					<div class="col-md-4 col-sm-12" id="balance_inquiry_div">
						<img src="{{ url('/images/atm/balance_inquiry.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Balance Enquiry at ATM</p>
					</div>
					<div class="col-md-4 col-sm-12" id="fund_transfer_div">
						<img src="{{ url('/images/atm/fund_transfer.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Funds Transfer</p>
					</div>
				</div>
				<div class="row">
					<div class="modal fade bd-example-modal-lg" id="cash_withdraw_mmk_modal" tabindex="-1" role="dialog" aria-labelledby="CashWithdrawMMK" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">Cash Withdrawal (MMK)</h5>
									<span class="close cash_withdraw_mmk_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>One of the most significant merits of an ATM is withdrawing cash quickly. It is the quickest method of cash withdrawal.</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-cash-withdraw-mmk-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-cash-withdraw-mmk">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/insert_card.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Insert ATM Card</p>
																	<p class="step_desc">Insert your ATM Card in the designated card slot at ATM.</p>
																	<p class="step_desc">Note: Make sure your card is facing the right way when you insert it.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Enter 6-Digit ATM Pin</p>
																	<p class="step_desc">Use the keypad to enter your 6-digit ATM Pin Number.</p>
																	<p  class="step_desc">Note: Be careful while entering the PIN, as a wrong PIN may lead to the blockage of the ATM card.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 4</p>
									                        		<p class="step_point_title mb-1">Select the type of Transaction.</p>
																	<p class="step_desc">You will see different types of transaction options and you will have to select the withdrawal option.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_amount.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 5</p>
									                        		<p class="step_point_title mb-1">Enter amount to withdraw.</p>
																	<p class="step_desc mb-1">Enter your withdrawal amount and press <b>“Enter”</b>.</p>
																	<p  class="step_desc">Note: Be aware of maximum withdrawal amount per day and make sure that you do not enter a withdrawal amount more than the balance in your account. Transactions made through an ATM operated by AYA is free but by Credit cards and other bank’s card will have charges. </p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/collect_cash.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 6</p>
									                        		<p class="step_point_title mb-1">Collect the Cash</p>
																	<p class="step_desc">Collect the cash from the lower slot of the machine.</p>
																	<p  class="step_desc">Please ensure to check your cash amount before you leave from the machine.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/print_receipt.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 7</p>
									                        		<p class="step_point_title mb-1">Take a printed receipt, if needed</p>
																	<p class="step_desc">You will get an option if you want a printed receipt of the transaction. You can choose if needed and close the transaction.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 8</p>
									                        		<p class="step_point_title mb-1">Another Transaction</p>
																	<p class="step_desc">If you want to undertake another transaction, then select that option.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-cash-withdraw-mmk-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-cash-withdraw-mmk-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-cash-withdraw-mmk-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="quick_cash_withdrawal_modal" tabindex="-1" role="dialog" aria-labelledby="QuickCashWithdrawal" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">Quick Cash Withdrawal</h5>
									<span class="close quick_cash_withdrawal_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>ATM card is a great convenience as you can use it to get cash from just about any place in the world. It is even better with “Quick Cash withdrawal” services.</p>
										<p>When you choose “Quick Cash withdrawal”, the screen displays predetermined amounts. This is a useful feature when you are in a hurry or have a busy schedule.</p>
										<p>Enjoy the facilities!</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-quick-cash-withdrawl-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-quick-cash-withdrawl">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/insert_card.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Insert ATM Card</p>
																	<p class="step_desc">Insert your ATM Card in the designated card slot at ATM. </p>
																	<p class="step_desc">Note: Make sure your card is facing the right way when you insert it.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Enter 6-Digit ATM Pin</p>
																	<p class="step_desc">Use the keypad to enter your 6-digit ATM Pin Number.</p>
																	<p  class="step_desc">Note: Be careful while entering the Pin, as a wrong PIN may lead to the blockage of the ATM card.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 4</p>
									                        		<p class="step_point_title mb-1">Select the type of Transaction.</p>
																	<p class="step_desc">You will see different types of transaction options and you will have to select the withdrawal option.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_amount.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 5</p>
									                        		<p class="step_point_title mb-1">Enter amount to withdraw.</p>
																	<p class="step_desc">Select the amount of cash you wish to withdraw. </p>
																	<p class="step_desc">Amount options are available to choose. <b>Press Enter</b>.</p>
																	<p class="step_desc">Note: Be aware of maximum withdrawal amount per day and make sure that you do not enter a withdrawal amount more than the balance in your account.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/collect_cash.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 6</p>
									                        		<p class="step_point_title mb-1">Collect the Cash</p>
																	<p class="step_desc">Collect the cash from the lower slot of the machine.</p>
																	<p  class="step_desc">Please ensure to check your cash amount before you leave from the machine.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/print_receipt.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 7</p>
									                        		<p class="step_point_title mb-1">Take a printed receipt, if needed</p>
																	<p class="step_desc">You will get an option if you want a printed receipt of the transaction. You can choose if needed and close the transaction.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 8</p>
									                        		<p class="step_point_title mb-1">Another Transaction</p>
																	<p class="step_desc">If you want to undertake another transaction, then select that option.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-quick-cash-withdrawl-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-quick-cash-withdrawl-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-quick-cash-withdrawl-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="cardless_withdrawal_modal" tabindex="-1" role="dialog" aria-labelledby="CardlessWithdrawal" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">Cardless Withdrawal</h5>
									<span class="close cardless_withdrawal_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>AYA Bank ATMs allow you to withdraw cash without using an ATM card and instead use your smart phone. Your mobile phone will unlock your banking for you.</p>
										<p>Let’s take a closer look at how exactly this works.</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-cardless-withdrawal-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-cardless-withdrawal">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/request_code.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Get the Cash code from mobile banking.</p>
																	<p class="step_desc">Log in to your mobile banking and go to ATM withdrawal from the service menu.</p>
																	<p class="step_desc">Select “Request Code” and the amount of cash you intend to withdraw.</p>
																	<p class="step_desc">Upon submission, you will get the 6-digits cash code to proceed for cardless withdrawal.</p>
																	<p class="step_desc">Please note that the validity of cash code will be expired after 30 minutes.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Access ATM and choose “Cardless withdrawal”.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_amount.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 4</p>
									                        		<p class="step_point_title mb-1">Enter your phone number.</p>
																	<p class="step_desc">Use the keypad to enter your registered mobile number while you applied for AYA m-Banking.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 5</p>
									                        		<p class="step_point_title mb-1">Enter Cash Code (6 Digits)</p>
																	<p class="step_desc">Enter Cash code of 6-digits that you have received in your mobile.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/collect_cash.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 6</p>
									                        		<p class="step_point_title mb-1">Collect the Cash</p>
																	<p class="step_desc">Collect the cash from the lower slot of the machine.</p>
																	<p  class="step_desc">Please ensure to check your cash amount before you leave from the machine.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/print_receipt.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 7</p>
									                        		<p class="step_point_title mb-1">Take a printed receipt, if needed</p>
																	<p class="step_desc">You will get an option if you want a printed receipt of the transaction. You can choose if needed and close the transaction.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 8</p>
									                        		<p class="step_point_title mb-1">Another Transaction</p>
																	<p class="step_desc">If you want to undertake another transaction, then select that option.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-cardless-withdrawal-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-cardless-withdrawal-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-cardless-withdrawal-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="pin_change_modal" tabindex="-1" role="dialog" aria-labelledby="PINChange" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">PIN Change</h5>
									<span class="close pin_change_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>You can easily reset / change the PIN and create a new one at ATM without personally going to the branch. You may also change the temporary PIN that the Bank initially provides through physical paper mail. You are encouraged to change the PIN for security reasons and not to share with others.</p>
										<p>Note: In case you have forgotten the PIN, it is required to contact Bank.</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-pin-change-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-pin-change">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/insert_card.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Insert ATM Card</p>
																	<p class="step_desc">Insert your ATM Card in the designated card slot at ATM.</p>
																	<p class="step_desc">Note: Make sure your card is facing the right way when you insert it.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Enter PIN</p>
																	<p class="step_desc">Enter current PIN and re-enter your new PIN.</p>
																	<p  class="step_desc">Your new PIN has been accepted.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-pin-change-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-pin-change-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-pin-change-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="balance_inquiry_modal" tabindex="-1" role="dialog" aria-labelledby="BalanceInquiryAtATM" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">Balance Enquiry at ATM</h5>
									<span class="close balance_inquiry_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>Our ATM enables you to view your bank account balance with just a single tap.</p>
										<p>Know your any bank's account balance anytime, anywhere by free of cost.</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-balance-inquiry-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-balance-inquiry">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/insert_card.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Insert ATM Card</p>
																	<p class="step_desc">Insert your ATM Card in the designated card slot at ATM.</p>
																	<p class="step_desc">Note: Make sure your card is facing the right way when you insert it.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Enter 6-Digit ATM Pin</p>
																	<p class="step_desc">Use the keypad to enter your 6-digit ATM Pin Number.</p>
																	<p  class="step_desc">Note: Be careful while entering the Pin, as a wrong PIN may lead to the blockage of the ATM card.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 4</p>
									                        		<p class="step_point_title mb-1">Select the type of Transaction</p>
																	<p class="step_desc">You will see different types of transaction options and you must select Balance Enquiry</p>
																	<p  class="step_desc">You can see the actual balance and available balance that you can withdraw cash.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-balance-inquiry-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-balance-inquiry-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-balance-inquiry-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="fund_transfer_modal" tabindex="-1" role="dialog" aria-labelledby="BalanceInquiryAtATM" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title theme_text_color" id="exampleModalLongTitle">Funds Transfer</h5>
									<span class="close fund_transfer_close" data-dismiss="modal" aria-label="Close" aria-hidden="true">
										<i class="menu-icon tf-icons bx bx-x-circle"></i>
									</span>
								</div>
								<div class="modal-body">
									<div class="row">
										<p>Although there are several ways to transfer money via mobile or internet banking, not all everyone is very tech-savvy. There is still another mode of money transfer very fast and convenience for you.</p>
										<p>Just reach out to the nearest ATM.</p>
									</div>
									<div class="row">
										<div class="col-1 d-none d-sm-block" style="position: relative;">
											<div class="swiper-button-fund-transfer-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
										</div>
										<div class="col-md-10 swiper_div">
									      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
									            <div class="slide-content slide-content-available slide-content-fund-transfer">
									                <div class="card-wrapper swiper-wrapper">
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/insert_card.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 1</p>
									                        		<p class="step_point_title mb-1">Insert ATM Card</p>
																	<p class="step_desc">Insert your ATM Card in the designated card slot at ATM.</p>
																	<p class="step_desc">Note: Make sure your card is facing the right way when you insert it.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_language.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 2</p>
									                        		<p class="step_point_title mb-1">Select Language</p>
																	<p class="step_desc">Select your language from the language options appearing on the display screen.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_pin.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 3</p>
									                        		<p class="step_point_title mb-1">Enter 6-Digit ATM Pin</p>
																	<p class="step_desc">Use the keypad to enter your 6-digit ATM Pin Number.</p>
																	<p  class="step_desc">Note: Be careful while entering the PIN, as a wrong PIN may lead to the blockage of the ATM card.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_transaction.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 4</p>
									                        		<p class="step_point_title mb-1">Select the type of Transaction.</p>
																	<p class="step_desc">You will see different types of transaction options and you must select Funds Transfer.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/select_account_default.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 5</p>
									                        		<p class="step_point_title mb-1">Select the source account and choose the default.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/collect_cash.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 6</p>
									                        		<p class="step_point_title mb-1">Complete information</p>
																	<p class="step_desc">Collect the cash from the lower slot of the machine.Enter the beneficiary account number that you wish to transfer.</p>
																	<p  class="step_desc">Please ensure to check your cash amount before you leave from the machine.Confirm for correct beneficiary number and name of the recipient.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                    <div class="card swiper-slide">
									                        <div class="card-content">
									                        	<div class="row">
									                        		<img src="{{ url('../images/atm/enter_amount.png') }}" class="img-fluid w-30 mb-10">
									                        		<p class="theme_text_color fw-semibold mb-1">STEP - 7</p>
									                        		<p class="step_point_title mb-1">Enter the amount of Funds.</p>
																	<p class="step_desc">Enter the amount of funds you wish to transfer. Transaction is completed.</p>
									                        	</div>
									                        	<div class="space-20"></div>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									    <div class="col-1 d-none d-sm-block" style="position: relative;">
									    	<div class="swiper-button-fund-transfer-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
									    </div>
									    <div class="col-12 d-block d-sm-none" style="position: relative;">
									    	<div class="swiper-button-fund-transfer-prev swiper-button-prev swiper-navBtn" style="left: 37%;"></div>
									    	<div class="swiper-button-fund-transfer-next swiper-button-next swiper-navBtn" style="right: 30%;"></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-20"></div>
			<div style="background-color: #fbfbfd">
				<div class="space-60"></div>
				<div class="section_1">
					<div class="row">
						<div class="col-md-12 services_overview_div">
							<h3 style="color: #1d1d1f;">Service Overview</h3>
						</div>
						<div class="space-20"></div>
						<div class="d-none d-sm-block">
							<div class="row">
								<div class="col-md-1" style="position: relative;">
									<div class="swiper-button-overview-prev swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
								</div>
								<div class="col-md-10">
							      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
							            <div class="slide-content slide-content-desktop">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Universal Debit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Funds transfer</p>
																<p class="fee_desc">300 MMK for every successful transaction.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>						                            	
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password Change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Credit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Visa Prepaid Card</p>
							                        	</div>
							                        	<div class="space-10"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-10"></div>
							                            <div class="row text-center">
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA m-banking</p>
							                        	</div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-10"></div>
							                            <div class="row text-center">
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Pay</p>
							                        	</div>
							                        	<div class="space-10"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
							                            	</div>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">MPU (Other Bank) Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">MPU (Local Other Bank)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">International Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">International (Off-Us Transaction)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							    <div class="col-md-1" style="position: relative;">
							    	<div class="swiper-button-overview-next swiper-button-next swiper-navBtn" style="right: 50%;"></div>
							    </div>
							</div>
						</div>
						<div class="d-block d-sm-none">
							<div class="row">
								<div class="col-12">
							      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
							            <div class="slide-content slide-content-mobile">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Universal Debit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Funds transfer</p>
																<p class="fee_desc">300 MMK for every successful transaction.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>						                            	
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password Change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Credit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Visa Prepaid Card</p>
							                        	</div>
							                        	<div class="space-10"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-10"></div>
							                            <div class="row text-center">
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA m-banking</p>
							                        	</div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-10"></div>
							                            <div class="row text-center">
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Pay</p>
							                        	</div>
							                        	<div class="space-10"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
							                            	</div>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">MPU (Other Bank) Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">MPU (Local Other Bank)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">International Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">International (Off-Us Transaction)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                </div>
							            </div>
							            <!-- <div class="swiper-button-next swiper-navBtn"></div> -->
			           					<!-- <div class="swiper-button-prev swiper-navBtn"></div> -->
			           					<div class="swiper-pagination"></div>
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="space-60"></div>
				<div class="container section_1">
					<div class="row">
						<div class="col-md-12">
							<h3 style="color: #1d1d1f;">Security Tips You Need to Know for Using ATM</h3>
							<p>Despite ATMs offer a simple, easy and convenient way to access your savings, we would like to recommend our customers to follow safety measures to protect from financial crime exposure.  It is essential to practice safety tips while using an ATM.</p>
							<ul style="list-style: disc;">
								<li>
									<p>You should ensure security of your ATM card and Personal Identity Number (“PIN”). Swindlers who have stolen or duplicated your ATM card may impersonate a bank staff to obtain your PIN. Please note that AYA staff will NOT ask customers for their PINs for any purpose.
									</p>
								</li>
								<li>
									<p>Do not set your PIN with easily accessible personal information which is your NRC number, date of birth, etc. Do not write down your PIN without disguising it and use for other services on internet. 
									</p>
								</li>
								<li>
									<p>Our ATMs are equipped with built-in security cameras for tracing if needed and PIN-pad covers which will reduce external visibility around a PIN-pad when in use. Our ATM Cards employ chip security as an extra layer of card protection. 
									</p>
								</li>
								<li>
									<p>Have your ATM card in your hand ready when you approach the machine.
									</p>
								</li>
								<li>
									<p>Before you approach an ATM, scan the area for any suspicious activity. 
									</p>
								</li>
								<li>
									<p>Always be aware of surrounding before proceed with a transaction. Cover the PIN-Pad when entering your PIN number. 
									</p>
								</li>
								<li>
									<p>It is advisable to take your receipt after using an ATM service as it may contain information that could lead criminals to steal your account or identity. 
									</p>
								</li>
								<li>
									<p>If your card is lost, stolen or retained by AYA ATM, or in case of any suspicious transactions or situations, call our Customer Service Hotline on 01 231 7777 immediately.
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	$("#cash_withdraw_mmk_div").click(function(){
		var cash_withdraw_mmk_swiper = new Swiper(".slide-content-cash-withdraw-mmk", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-cash-withdraw-mmk-next",
				prevEl: ".swiper-button-cash-withdraw-mmk-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#cash_withdraw_mmk_modal").modal('show');
	});
	$(".cash_withdraw_mmk_close").click(function(){
		$("#cash_withdraw_mmk_modal").modal('hide');
	});

	$("#quick_cash_withdrawal_div").click(function(){
		var quick_cash_withdrawl_swiper = new Swiper(".slide-content-quick-cash-withdrawl", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-quick-cash-withdrawl-next",
				prevEl: ".swiper-button-quick-cash-withdrawl-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#quick_cash_withdrawal_modal").modal('show');
	});
	$(".quick_cash_withdrawal_close").click(function(){
		$("#quick_cash_withdrawal_modal").modal('hide');
	});

	$("#cardless_withdrawal_div").click(function(){
		var cardless_swiper = new Swiper(".slide-content-cardless-withdrawal", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-cardless-withdrawal-next",
				prevEl: ".swiper-button-cardless-withdrawal-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#cardless_withdrawal_modal").modal('show');
	});
	$(".cardless_withdrawal_close").click(function(){
		$("#cardless_withdrawal_modal").modal('hide');
	});

	$("#pin_change_div").click(function(){
		var pin_change_swiper = new Swiper(".slide-content-pin-change", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-pin-change-next",
				prevEl: ".swiper-button-pin-change-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#pin_change_modal").modal('show');
	});
	$(".pin_change_close").click(function(){
		$("#pin_change_modal").modal('hide');
	});

	$("#balance_inquiry_div").click(function(){
		var balance_inquiry_swiper = new Swiper(".slide-content-balance-inquiry", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-balance-inquiry-next",
				prevEl: ".swiper-button-balance-inquiry-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#balance_inquiry_modal").modal('show');
	});
	$(".balance_inquiry_close").click(function(){
		$("#balance_inquiry_modal").modal('hide');
	});

	$("#fund_transfer_div").click(function(){
		var fund_transfer_swiper = new Swiper(".slide-content-fund-transfer", {
			slidesPerView: 2,
			spaceBetween: 25,
			loop: true,
			centerSlide: 'true',
			fade: 'true',
			grabCursor: 'true',
			pagination: {
				el: ".available_services_pagination",
				clickable: true,
				dynamicBullets: true,
			},
			navigation: {
				nextEl: ".swiper-button-fund-transfer-next",
				prevEl: ".swiper-button-fund-transfer-prev",
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
				1250: {
					slidesPerView: 2,
				},
			},
		});
		$("#fund_transfer_modal").modal('show');
	});
	$(".fund_transfer_close").click(function(){
		$("#fund_transfer_modal").modal('hide');
	});

	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 2,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-overview-next",
			prevEl: ".swiper-button-overview-prev",
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
		},
	});

	var swiper = new Swiper(".slide-content-mobile", {
		slidesPerView: 1,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-overview-next",
			prevEl: ".swiper-button-overview-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 1,
			},
			950: {
				slidesPerView: 1,
			},
		},
	});
</script>

@endsection('content')