@extends('layouts.frontend-app')

@section('title', 'Test Page – AYA Bank')
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
			border: 2px solid #A5000B;
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
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'test'])

			<div class="container section_1">
				<div class="space-60"></div>			
				<div class="row" >
					<div class="col-md-12 text-center">
						<h3 style="font-weight: 600;color: #000;margin-bottom: 30px;">Test</h3>
						
						<div class="space-40"></div>

						<video class="img-fluid" autoplay loop muted>
							<source src="{{ url('/images/home/desk.webm') }}" type="video/mp4" />
						</video>
					</div>
				</div>

				<div class="space-40"></div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')