@extends('layouts.frontend-app')

@section('title', 'Reset Pin – AYA Bank')
<style type="text/css">
    .benefit_icon_1 {
		width: 40% !important;
		margin-bottom: 30px;
	}
	.benefit_icon_2 {
		width: 34% !important;
		margin-bottom: 30px;
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
		margin-top: 40px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.mpu_jbc_tab {
		background-image: url('./images/MPU_JCB_card.png');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.mpu_upi_tab {
		background-image: url('./images/JBC_UPI_card.png');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.tab_data_row {
		width: 100%;
	}
	.tab_h2, .tab_upi_h2 {
		font-weight: 800;
		position: absolute;
		top: 230px;
	}
	.how_to_apply_icon {
		width: 80%;
	}
	.how_to_apply_outer_section {
		background-image: url('./images/simplepay/how_to_apply_bg.jpg');
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
	.bx-check {
		color: #fff;
		background-color: #a0222c;
		border-radius: 50px;
	}
	@media (min-width: 768px){
		.col-md-6 {
		    width: 45% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.col-md-6, .col-md-4 {
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
		.how_to_apply_icon {
			width: 100%;
		}
		.debit_how_to_apply_section {
		    padding: 40px 30px 60px 30px !important;
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
		.outer_benefit_box {
			margin-top: 0px;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'reset'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'reset'])

			<div class="container section_1">
				<div class="space-60"></div>			
				<div class="row" >
					<div class="col-md-12 text-center">
						<h3 style="font-weight: 600;color: #000;margin-bottom: 30px;">Reset Pin of Your Card</h3>
						<p style="margin-bottom:5px;">Forgot your card PIN?  You can reset / change your PIN easily via online.</p>
						<p style="margin-bottom: 40px;">It’s free and fast to process your application. Save your time queuing at branch.</p>

						<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
							Apply Now for Pin Re-issue
						</button>

						<div class="space-10"></div>

						<p style="font-weight: 500;font-size: 16px;">Important Notes: The data in the application form must be consistent with the data when you applied for the card.</p>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<table>
							<tr>
								<td valign="top"><i class='bx bx-check'></i></td>
								<td valign="top" style="padding: 0px 0px 30px 20px;">The card holder will receive email from Bank whether your application is successful or not.</td>
							</tr>
							<tr>
								<td valign="top"><i class='bx bx-check'></i></td>
								<td valign="top" style="padding: 0px 0px 30px 20px;">If your application is successful, you can get issued the new PIN at nearest branches within (7) working days.</td>
							</tr>
							<tr>
								<td valign="top"><i class='bx bx-check'></i></td>
								<td valign="top" style="padding: 0px 0px 30px 20px;">In case you receive email that application is not successful, you are required to visit to the branch with your NRC within branch office hours to verify card information.</td>
							</tr>
						</table>
					</div>
					<div class="col-md-2"></div>
				</div>

				<div class="space-40"></div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')