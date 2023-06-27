@extends('layouts.frontend-app')

@section('title', 'Digital Secure – AYA Bank')
<style type="text/css">
	.outer_benefit_box {
		margin-bottom: 20px;*/
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
	.safety_tip_1 > li {
		margin-bottom: 5px;
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'digital_secure'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'digital_secure'])

				<div class="row">
					<div class="col-md-12">
						<h3 style="color: #1d1d1f;margin-bottom: 20px;">
							&#73;. Safety Tips You Need To Follow for Online Banking
						</h3>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/digital_secure/safety_tip_1.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="safety_tip_1" style="list-style: disc;">
							<li>Do not share your OTP code or password with anyone.</li>
							<li>Register online banking with your own device and always lock your computer and mobile phone when you are away.</li>
							<li>Do not use public computers to login.</li>
							<li>Do not save logins or password.</li>
							<li>Remember to log out of system and close your browser once you have done online banking</li>
							<li>Follow practice of using strong password, that includes upper- and lower-case letters, numbers, and special characters.</li>
							<li>Change your password immediately if you suspect it has been revealed.</li>
							<li>Track your financial accounts by logging into your online banking frequently, review the transactions, payments, withdrawals.</li> 
							<li>In touch with your bank account - Use <a href="{{ url('/digital-services/guideline/digital-secure/sms-alert') }}" style="color: #A5000B;text-decoration: underline;">SMS Alert</a> to keep track of what is happening on your account.</li>
							<li>If you receive any suspicious communications or observe suspicious transactions or log in, call our Call Center at <a href="tel:012317777" style="color: #A5000B;">01-2317777</a> (or) consult with In-charge at nearest branch. 
							</li>
						</ul>
					</div>
					<div class="space-60"></div>
					<div class="col-md-12">
						<h3 style="color: #1d1d1f;margin-bottom: 20px;">
							&#73;&#73;. Safety Tips You Need To Follow for Digital Payments (or) Transactions
						</h3>
					</div>
					<div class="col-md-4 col-sm-12 d-block d-sm-none">
						<img src="{{ url('/images/digital_secure/safety_tip_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="safety_tip_1" style="list-style: disc;padding-left: 17px;">
							<li>Do not share your PIN with anyone.</li>
							<li>Do not share your full 16-digit card number or photo of your card with anyone.</li>
							<li>Protect your cards as if they were cash.</li>
							<li>Memorize your PIN either using Credit Card / Debit Card / Prepaid Card. Do not write it down anywhere, especially on the card itself.</li>
							<li>Closely monitor transaction notifications to verify unauthorized payments as soon as possible </li>
							<li>
								Three places you should beware of digital payments / transactions using cards.
								<ul style="list-style: number;">
									<li>ATMs – Insert your card and key-in only in safe environment. Always take your receipts or transaction records with you.</li>
									<li>Buying online – Use the trusted website. Use a private window for transactions. Ensure that your debit/credit card details are not saved when you make purchases online.</li>
									<li>Shop or Restaurant or Gas Station – Keep an eye on your card when doing a transaction. Always check sales vouchers for the correct purchase amount before you sign them. </li>
								</ul>
							</li>
							<li>If your card is lost or stolen, report it to AYA Bank Call Centre immediately (or) at nearest branch.</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 d-none d-sm-block">
						<img src="{{ url('/images/digital_secure/safety_tip_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="space-60"></div>
					<div class="col-md-12">
						<h3 style="color: #1d1d1f;margin-bottom: 20px;">
							&#73;&#73;&#73;. Phishing E-Mails / Smishing Messages
						</h3>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/digital_secure/safety_tip_3.png') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-md-8 col-sm-12">
						<p style="font-weight: 600;color: #A5000B;">Beware of phishing scams.</p>
						<p>The primary intention of sending those emails / messages is to steal your bank details. Fraudsters will send you messages by posing as AYA bank and ask your OTP / Password / other personal information related to your bank account.</p>
						<p>Alternatively, they will send you e-mails with a link which will take you to a fake website and ask you to provide your sensitive information like card details or other bank details.</p>
						<p>If you give these credentials to any one, they will siphon money out of your account. Remember that AYA Bank will never ask for credentials like OTP, PIN, CVV number or other credentials.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'digital-secure'])


@endsection('content')