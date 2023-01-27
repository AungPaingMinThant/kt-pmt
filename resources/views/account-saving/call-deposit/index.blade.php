@extends('layouts.frontend-app')

@section('title', 'Call Deposit – AYA Bank')
<style type="text/css">
	.nav-link, h4 {
		color: #2e2e2e !important;
	}
	.nav-pills .nav-link.active {
		color: #2e2e2e !important;		
	}
	.nav-pills .nav-link.active > span {
		border-bottom: 4px solid #a02226 !important;
    	font-weight: 600 !important;
	}
	.scroll_content::-webkit-scrollbar{
	    display: none;
	}
	#myScrollspy {
		position: sticky;
		top: 20px;
		z-index: 99;
	}
	.col-1 {
		width: 6% !important;
	}
	.col-11 {
		padding-left: 0px !important;
	}
	#quick_look {
		padding-right: 250px;
	}
	.open_at_aya_branch_icon {
		width: 80%;
	}

	@media only screen and (max-width: 576px){
		.call_deposit_title {
			font-size: calc(1.2625rem + 0.15vw);
			font-weight: 600 !important;
		}
		.col-11 {
			padding-left: 15px !important;
		}
		.open_at_aya_branch_icon {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'calldeposit'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#quick_look">
											<span>Quick look</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#eligible">
											<span>Are you eligible?</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#open_account">
											<span>How to open the account</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#requirements">
											<span>What are requirements</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#call_deposit_features">
											<span>Features of call deposit</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#manage_account">
											<span>How to manage the account</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									Earn daily interest with AYA call deposit products which offer benefits of both saving and checking account.
								</p>

								<div class="space-40" id="eligible"></div>
								<h4>Are you eligible?</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Age 18 and above</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Open in sole or joint names</p>
									</div>
								</div>

								<div class="space-40" id="open_account"></div>
								<h4>How to open the account?</h4>
								<div class="row">
									<div class="col-2">
										<img src="{{ url('/images/acc_saving/open_at_aya_branch_icon.png') }}" class="img-fluid open_at_aya_branch_icon">
									</div>
									<div class="col-10" style="padding-top: 30px;margin-left: -30px;">
										<p style="">Open at any AYA branches</p>
									</div>
								</div>

								<div class="space-40" id="requirements"></div>
								<h4>What are requirements?</h4>
								<ul>
									<li>NRC copy</li>
									<li>(2) passport size photos</li>
								</ul>
								
								<div class="space-40" id="call_deposit_features"></div>
								<h4>Upon opening a call deposit account</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Keep record of transactions via saving passbook</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Earn daily interest on the daily end-of-day deposit balance</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Instant access to funds, unlimited deposits and withdrawals</p>
									</div>
								</div>

								<div class="space-40" id="manage_account"></div>
								<h4>How to manage the account?</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Get access of 24/7 banking with AYA iBanking and mBanking.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Visit our branches to receive over-the-counter banking services </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Quick look</p>
							<p>
								Earn daily interest with AYA call deposit products which offer benefits of both saving and checking account.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Are you eligible?</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Age 18 and above</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Open in sole or joint names</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to open the account?</p>
							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/acc_saving/open_at_aya_branch_icon.png') }}" class="img-fluid open_at_aya_branch_icon">
								</div>
								<div class="col-9" style="padding-top: 20px;padding-left: 0px;">
									<p style="">Open at any AYA branches</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">What are requirements?</p>
							<ul>
								<li>NRC copy</li>
								<li>(2) passport size photos</li>
							</ul>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Upon opening a call deposit account</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Keep record of transactions via saving passbook</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Earn daily interest on the daily end-of-day deposit balance</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Instant access to funds, unlimited deposits and withdrawals</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to manage the account?</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Get access of 24/7 banking with AYA iBanking and mBanking.</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Visit our branches to receive over-the-counter banking services </p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-8">
							<div class="space-60"></div>
							<div class="row">
								<div class="col-md-12">
									<h4 style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-6">
									<a href="{{ url('/account-saving/call-deposit/premium-call-deposit') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/related_premium_call_deposit.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Premium Call Deposit</p>
												<p style="color: #2e2e2e;">A Simple deposit option to manage funds</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6">
									<a href="{{ url('/account-saving/call-deposit/new-business-call') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/related_new_business_call.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">New Business Call</p>
												<p style="color: #2e2e2e;">Convenient way to save and invest your cash</p>
											</div>
										</div>
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
<div class="space-60"></div>
@include('layouts.footer')
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>


@endsection('content')