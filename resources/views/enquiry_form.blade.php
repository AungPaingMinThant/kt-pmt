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
					<div class="col-md-6">
						<form>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-fullname">Name <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
									<input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Name" required />
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-phone">Contact Number <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-phone2" class="input-group-text" ><i class="bx bx-phone"></i></span>
									<input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="xxx xxx xxxx" required />
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-email">Email Address</label>
								<div class="input-group input-group-merge">
									<span class="input-group-text"><i class="bx bx-envelope"></i></span>
									<input type="text" id="basic-icon-default-email" class="form-control" placeholder="Email Address" />
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-company">Company Name <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
									<input type="text" id="basic-icon-default-company" class="form-control" placeholder="Company Name"/>
								</div>
							</div>
							<div class="mb-3">
		                        <label for="exampleFormControlSelect1" class="form-label">Location <span class="text-danger">*</span></label>
		                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
		                          	<option selected>Select Division/State</option>
		                          	<option value="1">Ayeyarwady</option>
		                          	<option value="2">Bago</option>
		                          	<option value="3">Chin</option>
		                          	<option value="4">Kachin</option>
		                          	<option value="5">Kayah</option>
		                          	<option value="6">Kayin</option>
		                          	<option value="7">Magway</option>
		                          	<option value="8">Mandalay</option>
		                          	<option value="9">Mon</option>
		                          	<option value="10">Naypyidaw</option>
		                          	<option value="11">Rakhine</option>
		                          	<option value="12">Sagaing</option>
		                          	<option value="13">Shan</option>
		                          	<option value="14">Tanintharyi</option>
		                          	<option value="15">Yangon</option>
		                        </select>
		                    </div>

		                    <div class="row gy-3">
			                    <div class="col-md">
				                    <div class="mb-3">
				                    	<label class="form-label d-block ">How Can We Help? <small class="text-light fw-semibold">Feel free to ask a question or simply leave a comment.</small> <span class="text-danger">*</span></label>
		                          		<label class="form-label d-block ">Select Product <span class="text-danger">*</span></label>

										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Loan" />
											<label class="form-check-label" for="inlineCheckbox1">Loan</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trade" />
											<label class="form-check-label" for="inlineCheckbox2">Trade</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="CMS" />
											<label class="form-check-label" for="inlineCheckbox3">CMS</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Digital Banking" />
											<label class="form-check-label" for="inlineCheckbox4">Digital Banking</label>
										</div>
		                    		</div>
		                    	</div>
		                    </div>

		                    <div class="row gy-3">
			                    <div class="col-md">
				                    <div class="mb-3">
		                          		<label class="form-label d-block ">Select Sub Product <span class="text-danger">*</span></label>

										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Loan" />
											<label class="form-check-label" for="inlineCheckbox1">Loan</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trade" />
											<label class="form-check-label" for="inlineCheckbox2">Trade</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="CMS" />
											<label class="form-check-label" for="inlineCheckbox3">CMS</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Digital Banking" />
											<label class="form-check-label" for="inlineCheckbox4">Digital Banking</label>
										</div>
		                    		</div>
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