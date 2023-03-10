@extends('layouts.frontend-app')

@section('title', 'Seafarer Account FCY – AYA Bank')
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'seafarer'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>Designed for seafarers / seamen to receive their salary<br>from overseas or local in foreign currency.</p>
							<div class="space-20"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/seafarer/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Initial deposit as low as US 10 or it can be in other preferred currencies such as Euro or Singapore dollar</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/seafarer/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>open a joint account with family member and allow them to have access to the funds.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/seafarer/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Provides saving passbook for ease of transaction tracking</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/seafarer/benefit_icon_4.png') }}" class="img-fluid" style="width: 17%;">
									<p>Competitive currency exchange rate.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 0px;">
									<img src="{{ url('/images/acc_saving/seafarer/benefit_icon_5.png') }}" class="img-fluid" style="width: 18%;">
								</div>
								<div class="col-md-10" style="margin-bottom: 20px;">
									<p>Dedicated service centre is located at AYA Branch on Bo Aung Kyaw Road, which is designed as a one-stop-service centre to handle seafarers banking transactions</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4 style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/current-deposit/regular-current-account') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/regular_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Regular Current Account</p>
												<p style="color: #2e2e2e;">Are you looking for an everyday account?</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/current-deposit/new-business-current-account') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/new_business_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">New Business Current Account</p>
												<p style="color: #2e2e2e;">Make your cash management more accessible</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/current-deposit/retail-fca-current') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/retail_fca_current.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Retail FCA Current (FCY)</p>
												<p style="color: #2e2e2e;">Manage your foreign currency payroll is as convenient as local currency</p>
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