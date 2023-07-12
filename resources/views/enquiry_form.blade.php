@extends('layouts.frontend-app')

@section('title', 'Enquiry Form – AYA Bank')
<style type="text/css">
    .form-check-input:checked {
	    background-color: rgba(160, 34, 38, 1) !important;
	    border-color: rgba(160, 34, 38, 1) !important;
	}
	#tnc_data {
		text-decoration: underline;
		color: #A5000B;
		cursor: pointer;
	}
	.submit_btn {
		align-content: center;
		background-color: #ae071d !important;
		color: #fff !important;
		font-weight: 500 !important;
		padding: 10px 30px !important;
		border: #ae071d !important;
		margin-bottom: 2rem !important;
		width: 100%;
	}
	.invalid-input-group {
		border-color: #A5000B !important;
    	box-shadow: 0 0 0.25rem 0.05rem rgb(160 34 35 / 10%) !important;
	}
	.invalid-input {
		border-color: #A5000B !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>''])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'enquiry_form'])

			<div class="container section_1">
				<div class="space-40"></div>			
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="font-weight: 600;color: #000;margin-bottom: 30px;">GET IN TOUCH</h3>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<form action="{{ url('/enquiry_form_submit') }}" method="POST" enctype="multipart/form-data" id="enquiry_form">
							{{ csrf_field() }}
							<div class="mb-4">
								<label class="form-label name-txt-label" for="name-txt">Name <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge name-txt-group">
									<span id="basic-icon-default-fullname2" class="input-group-text input-group-text-name"><i class="bx bx-user"></i></span>
									<input type="text" class="form-control" name="name_txt" id="name-txt" placeholder="Name" required />
								</div>
								<small class="w-100 d-block text-danger name-err-msg d-none">* Required</small>
							</div>
							<div class="mb-4">
								<label class="form-label" for="phone-txt">Contact Number <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge phone-txt-group">
									<span id="basic-icon-default-phone2" class="input-group-text input-group-text-phone" ><i class="bx bx-phone"></i></span>
									<input type="text" name="phone_txt" id="phone-txt" class="form-control phone-mask" placeholder="xxx xxx xxxx" required />
								</div>
								<small class="w-100 d-block text-danger phone-err-msg d-none">* Required</small>
							</div>
							<div class="mb-4">
								<label class="form-label" for="email-txt">Email Address</label>
								<div class="input-group input-group-merge">
									<span class="input-group-text"><i class="bx bx-envelope"></i></span>
									<input type="text" name="email_txt" id="email-txt" class="form-control" placeholder="Email Address" />
								</div>
							</div>
							<div class="mb-4">
								<label class="form-label" for="company-txt">Company Name <span class="text-danger">*</span></label>
								<div class="input-group input-group-merge company-txt-group">
									<span id="basic-icon-default-company2" class="input-group-text input-group-text-company"><i class="bx bx-buildings"></i></span>
									<input type="text" name="company_txt" id="company-txt" class="form-control" placeholder="Company Name"/>
								</div>
								<small class="w-100 d-block text-danger company-err-msg d-none">* Required</small>
							</div>
							<div class="mb-4">
		                        <label for="division-select" class="form-label">Location <span class="text-danger">*</span></label>
		                        <select class="form-select" name="division_select" id="division-select" aria-label="Default select example">
		                          	<option value="" selected>Select Division/State</option>
		                          	<option value="Ayeyarwady">Ayeyarwady</option>
		                          	<option value="Bago">Bago</option>
		                          	<option value="Chin">Chin</option>
		                          	<option value="Kachin">Kachin</option>
		                          	<option value="Kayah">Kayah</option>
		                          	<option value="Kayin">Kayin</option>
		                          	<option value="Magway">Magway</option>
		                          	<option value="Mandalay">Mandalay</option>
		                          	<option value="Mon">Mon</option>
		                          	<option value="Naypyidaw">Naypyidaw</option>
		                          	<option value="Rakhine">Rakhine</option>
		                          	<option value="Sagaing">Sagaing</option>
		                          	<option value="Shan">Shan</option>
		                          	<option value="Tanintharyi">Tanintharyi</option>
		                          	<option value="Yangon">Yangon</option>
		                        </select>
		                        <small class="w-100 d-block text-danger division-err-msg d-none">* Required</small>
		                    </div>

		                    <div class="row gy-3">
			                    <div class="col-md">
				                    <div class="mb-4">
				                    	<label class="form-label d-block ">How Can We Help? <small class="text-light fw-semibold">Feel free to ask a question or simply leave a comment.</small></label>
		                          		<label class="form-label d-block ">Select Product <span class="text-danger">*</span></label>

										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input product_check" name="product_check" type="radio" id="inlineCheckbox1" value="Loan" checked />
											<label class="form-check-label" for="inlineCheckbox1">Loan</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input product_check" name="product_check" type="radio" id="inlineCheckbox2" value="Trade" />
											<label class="form-check-label" for="inlineCheckbox2">Trade</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input product_check" name="product_check" type="radio" id="inlineCheckbox3" value="CMS" />
											<label class="form-check-label" for="inlineCheckbox3">CMS</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input product_check" name="product_check" type="radio" id="inlineCheckbox4" value="Digital Banking" />
											<label class="form-check-label" for="inlineCheckbox4">Digital Banking</label>
										</div>
		                    		</div>
		                    	</div>
		                    </div>

		                    <div class="row gy-3">
			                    <div class="col-md">
				                    <div class="mb-2">
		                          		<label class="form-label d-block ">Select Sub Product <span class="text-danger">*</span></label>

		                          		<div class="loan_check">
											<div class="form-check mt-2">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox1" value="Capex Financing" required />
												<label class="form-check-label" for="inlineLoanCheckbox1">Capex Financing</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox1" value="Working Capital Financing" required />
												<label class="form-check-label" for="inlineLoanCheckbox1">Working Capital Financing</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox2" value="Demand Loan" required />
												<label class="form-check-label" for="inlineLoanCheckbox2">Demand Loan</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox3" value="Project Loan / Tender Contract Loan" required />
												<label class="form-check-label" for="inlineLoanCheckbox3">Project Loan / Tender Contract Loan</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox4" value="Franchise Financing" required />
												<label class="form-check-label" for="inlineLoanCheckbox4">Franchise Financing</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineLoanCheckbox5" value="Trade Financing" required />
												<label class="form-check-label" for="inlineLoanCheckbox5">Trade Financing</label>
											</div>
										</div>

										<div class="trade_check d-none">
											<div class="form-check mt-2">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineTradeCheckbox1" value="Import Services" required />
												<label class="form-check-label" for="inlineTradeCheckbox1">Import Services</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineTradeCheckbox2" value="Export Services" required />
												<label class="form-check-label" for="inlineTradeCheckbox2">Export Services</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineTradeCheckbox3" value="Other Services" required />
												<label class="form-check-label" for="inlineTradeCheckbox3">Other Services</label>
											</div>
										</div>

										<div class="CMS_check d-none">
											<div class="form-check mt-2">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineCMSCheckbox1" value="Payroll Service" required />
												<label class="form-check-label" for="inlineCMSCheckbox1">Payroll Service</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineCMSCheckbox2" value="Collection Service" required />
												<label class="form-check-label" for="inlineCMSCheckbox2">Collection Service</label>
											</div>
											<div class="form-check">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineCMSCheckbox3" value="Payment Service" required />
												<label class="form-check-label" for="inlineCMSCheckbox3">Payment Service</label>
											</div>
										</div>

										<div class="digital_check d-none">
											<div class="form-check mt-2">
												<input class="form-check-input sub_prod_check" type="checkbox" name="sub_prod_check[]" id="inlineDigitalCheckbox1" value="Corporate Internet Banking" required />
												<label class="form-check-label" for="inlineDigitalCheckbox1">Corporate Internet Banking</label>
											</div>
										</div>
		                    		</div>
		                    	</div>
		                    	<small class="mt-0 w-100 d-block text-danger sub-prod-err-msg d-none">* Required</small>
		                    </div>

		                    <div class="mt-2 mb-4">
								<label class="form-label" for="comment_question">Comments / Questions <span class="text-danger">*</span></label>
								<textarea class="form-control" name="comment_question_txt" id="comment_question" placeholder="Describe yourself and question" maxlength="500" rows="3"></textarea>
								<p id="counter" style="text-align: right;"></p>
								<small class="w-100 d-block text-danger comment-err-msg d-none">* Required</small>
							</div>

							<div class="row gy-3">
			                    <div class="col-md">
				                    <div class="mb-4">
				                    	<p class="mb-0 mt-3"><span class="text-danger">*</span> Mandatory fields</p>

										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input tnc_check" name="tnc_check" type="checkbox" id="tnc_checkbox" required />
											<label class="form-check-label">I agree to all <span id="tnc_data">terms and conditions</span></label>
										</div>
										<small class="w-100 d-block text-danger tnc-err-msg d-none">* Required</small>

										<div class="tnc_data_div" style="display: none;">
											<p class="mt-2">AYA Bank can collect, use, disclose and/or process the data provided in this form, in order to inform you about the products or services which you have specified.</p>

											<p>Your consents granted herein are solely in relation to the referral activity requested, for one-time use only and do not supersede or replace any other consents which you have previously provided to us in respect of your personal data, and are additional to any rights to disclose your personal data.</p>
										</div>
		                    		</div>
		                    	</div>
		                    </div>
                        
                        	<div class="text-center mt-3">
								<button type="button" class="btn submit_btn">Submit</button>
							</div>
						</form>

						@if(session('success'))
							<div class="col-12 alert text-center" id="success" role="alert" style="margin-top: 20px;background-color: #fff;box-shadow: 0 0 10px 10px #f4f4f4;">
								<img src="{{ url('/images/checked.png') }}" class="img-fluid" style="width: 8%;margin-bottom: 20px;">
								<p class="f-body-color mb-0">{{ session('success') }}</p>
							</div>
						@endif
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	$(".product_check").click(function(e){
		// $('.product_check').prop('checked', false);
		// $(this).prop('checked', true);
		$('.sub_prod_check').prop('checked', false);

		$('input[name="product_check"]:checked').each(function() {
		   	if (this.value == 'Loan') {
				$(".loan_check").removeClass('d-none');
				$(".trade_check").addClass('d-none');
				$(".CMS_check").addClass('d-none');
				$(".digital_check").addClass('d-none');
		   	}
		   	if (this.value == 'Trade') {
		   		$(".loan_check").addClass('d-none');
				$(".trade_check").removeClass('d-none');
				$(".CMS_check").addClass('d-none');
				$(".digital_check").addClass('d-none');
		   	}
		   	if (this.value == 'CMS') {
		   		$(".loan_check").addClass('d-none');
				$(".trade_check").addClass('d-none');
				$(".CMS_check").removeClass('d-none');
				$(".digital_check").addClass('d-none');
		   	}
		   	if (this.value == 'Digital Banking') {
		   		$(".loan_check").addClass('d-none');
				$(".trade_check").addClass('d-none');
				$(".CMS_check").addClass('d-none');
				$(".digital_check").removeClass('d-none');
		   	}
		});
	});

	var messageEle = document.getElementById('comment_question');
	var counterEle = document.getElementById('counter');

	messageEle.addEventListener('input', function (e) {
	    var target = e.target;
	    var maxLength = target.getAttribute('maxlength');
	    var currentLength = target.value.length;

	    $("#counter").text(`${currentLength} out of ${maxLength} max characters.`);
	});

	$("#tnc_data").click(function() {
		$(".tnc_data_div").slideToggle();
	});

	$(".submit_btn").click(function() {
		var name_txt = $("#name-txt").val();
		var phone_txt = $("#phone-txt").val();
		var email_txt = $("#email-txt").val();
		var company_txt = $("#company-txt").val();
		var division_select = $("#division-select").val();
		var product_check = $('input[name="product_check"]:checked').val();
		var sub_prod_check = $('input[name="sub_prod_check[]"]:checked').val();
		var comment_question = $("#comment_question").val();
		var tnc_check = $('input[name="tnc_check"]:checked').val();
		
		if (name_txt == '') {
			$(".name-txt-group").addClass('invalid-input-group');
			$(".input-group-text-name").addClass('invalid-input');
			$("#name-txt").addClass('invalid-input');
			$(".name-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("name-txt").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$(".name-txt-group").removeClass('invalid-input-group');
			$(".input-group-text-name").removeClass('invalid-input');
			$("#name-txt").removeClass('invalid-input');
			$(".name-err-msg").addClass('d-none');
		}
		
		if (phone_txt == '') {
			$(".phone-txt-group").addClass('invalid-input-group');
			$(".input-group-text-phone").addClass('invalid-input');
			$("#phone-txt").addClass('invalid-input');
			$(".phone-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("phone-txt").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$(".phone-txt-group").removeClass('invalid-input-group');
			$(".input-group-text-phone").removeClass('invalid-input');
			$("#phone-txt").removeClass('invalid-input');
			$(".phone-err-msg").addClass('d-none');
		}
		
		if (company_txt == '') {
			$(".company-txt-group").addClass('invalid-input-group');
			$(".input-group-text-company").addClass('invalid-input');
			$("#company-txt").addClass('invalid-input');
			$(".company-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("company-txt").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$(".company-txt-group").removeClass('invalid-input-group');
			$(".input-group-text-company").removeClass('invalid-input');
			$("#company-txt").removeClass('invalid-input');
			$(".company-err-msg").addClass('d-none');
		}
		
		if (division_select == '') {
			$("#division-select").addClass('invalid-input-group');
			$(".division-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("division-select").offsetTop-100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$("#division-select").removeClass('invalid-input-group');
			$(".division-err-msg").addClass('d-none');
		}
		
		if (sub_prod_check == undefined) {
			$(".sub-prod-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("division-select").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$(".sub-prod-err-msg").addClass('d-none');
		}
		
		if (comment_question == '') {
			$("#comment_question").addClass('invalid-input-group');
			$(".comment-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("comment_question").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$("#comment_question").removeClass('invalid-input-group');
			$(".comment-err-msg").addClass('d-none');
		}
		
		if (tnc_check == undefined) {
			$("#tnc_checkbox").addClass('invalid-input-group');
			$(".tnc-err-msg").removeClass('d-none');
			var scrollDiv = document.getElementById("tnc_checkbox").offsetTop+100;
			window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
		} else {
			$("#tnc_checkbox").removeClass('invalid-input-group');
			$(".tnc-err-msg").addClass('d-none');
		}

		if (name_txt != '' && phone_txt != '' && company_txt != '' && division_select != '' && sub_prod_check != undefined && comment_question != '' && tnc_check != undefined) {
			$("#enquiry_form").submit();
		}
		
	});
</script>

@endsection('content')