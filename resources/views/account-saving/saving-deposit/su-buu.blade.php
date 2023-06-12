@extends('layouts.frontend-app')

@section('title', 'AYA Su-Buu – AYA Bank')
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
	@media only screen and (max-width: 576px) {
		.related_title {
			margin-top: 30px;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_su_buu'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>An interest-bearing account for payroll customers where their employer has a provident fund scheme for the employees’ retirement plan.</p>
							<div class="space-20"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-su-buu/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Long term savings to support an employee’s retirement.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-su-buu/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest 6% per annum.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-su-buu/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest monthly.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4 class="related_title" style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/saving-deposit/aya-regular-saving') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/aya_regular_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Regular Saving</p>
												<p style="color: #2e2e2e;">A simple account for standard financial transactions</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/saving-deposit/aya-maximizer-saving') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/aya_maximizer_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Maximizer Saving</p>
												<p style="color: #2e2e2e;">Earn bonus interest rates on your monthly minimum deposits</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/saving-deposit/aya-loyal-saving') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/aya_royal_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Loyal Saving</p>
												<p style="color: #2e2e2e;">Reach your goals, grow your savings with competitive interest rate</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/ngwe_toe_shwe_o.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Ngwe Toe Mae-Shwe O</p>
												<p style="color: #2e2e2e;">Send money back to your hometown and earn regular interest</p>
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

@endsection('content')