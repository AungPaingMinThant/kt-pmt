@extends('layouts.frontend-app')

@section('title', 'New Business Call – AYA Bank')
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

			@include('layouts.banner', ['page'=>'new_business_call'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>
								A special account for customers with high volume of cash-based transactions.  Depositing cash at our branches or receive from other new business call accounts. 
							</p>

							<div class="space-40"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/new_business_call/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Start saving with initial deposit MMK 1,000.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/new_business_call/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Interest rate at 6% per annum.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/new_business_call/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Unlimited cash deposits and withdrawal in a month.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/new_business_call/benefit_icon_4.png') }}" class="img-fluid" style="width: 17%;">
									<p>Opening account online with no minimum balance requirement.</p>
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