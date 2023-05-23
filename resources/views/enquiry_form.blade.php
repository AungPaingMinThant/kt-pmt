@extends('layouts.frontend-app')

@section('title', 'Enquiry Form – AYA Bank')
<style type="text/css">
    
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>''])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'enquiry_form'])

			<div class="container section_1">
				<div class="space-60"></div>			
				<div class="row" >
					<div class="col-md-12">
						<form>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-fullname">Full Name</label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
									<input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"/>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-company">Company</label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
									<input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2"/>
								</div>
							</div>
							<div class="mb-3">
							<label class="form-label" for="basic-icon-default-email">Email</label>
								<div class="input-group input-group-merge">
									<span class="input-group-text"><i class="bx bx-envelope"></i></span>
									<input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2"/>
									<span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
								</div>
								<div class="form-text">You can use letters, numbers & periods</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-phone">Phone No</label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-phone2" class="input-group-text" ><i class="bx bx-phone"></i></span>
									<input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
								</div>
							</div>
							<div class="mb-3">
							<label class="form-label" for="basic-icon-default-message">Message</label>
							<div class="input-group input-group-merge">
							<span id="basic-icon-default-message2" class="input-group-text"
							><i class="bx bx-comment"></i
							></span>
							<textarea
							id="basic-icon-default-message"
							class="form-control"
							placeholder="Hi, Do you have a moment to talk Joe?"
							aria-label="Hi, Do you have a moment to talk Joe?"
							aria-describedby="basic-icon-default-message2"
							></textarea>
							</div>
							</div>
							<button type="submit" class="btn btn-primary">Send</button>
							</form>


						<!-- <h3 style="font-weight: 600;color: #000;margin-bottom: 30px;">GET IN TOUCH</h3>
						<p style="margin-bottom:5px;">Forgot your card PIN?  You can reset / change your PIN easily via online.</p>
						<p style="margin-bottom: 40px;">It’s free and fast to process your application. Save your time queuing at branch.</p>

						<a href="https://cardpin.ayabank.com/" target="_blank">
							<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
								Apply Now for Pin Re-issue
							</button>
						</a>

						<div class="space-10"></div>

						<p style="font-weight: 500;font-size: 16px;">Important Notes: The data in the application form must be consistent with the data when you applied for the card.</p> -->
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