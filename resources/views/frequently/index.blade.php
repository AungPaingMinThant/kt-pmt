@extends('layouts.frontend-app')

@section('title', 'Frequently Used Digital Services In Daily Life – AYA Bank')
<style type="text/css">
	.advice_title_li {
		list-style: none;
		margin-bottom: 15px;
		cursor: pointer;
	}
	.advice_title_li > span{
		padding-bottom: 3px;
	}
	.link_active > span, .advice_title_li:hover > span {
		border-bottom: 4px solid #a02226;
		font-weight: 600;
	}
	.frequently_section_1 {
	    padding: 0px 100px !important;
	}
	.col-1 {
		width: 6% !important;
	}
	.col-11 {
		padding-left: 0px !important;
	}
	@media only screen and (max-width: 576px){
		.frequently_section_1 {
		    padding: 0px 20px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'frequently-used-digital'])

			<div class="container frequently_section_1" >
				@include('layouts.tagline', ['page'=>'frequently-used-digital'])

				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4 advice_title">						
							<li class="advice_title_li link_active advice_1">
								<span>1. Updating Particulars in Mobile Banking</span>
							</li>
							<li class="advice_title_li advice_2">
								<span>2. How to make bill payment</span>
							</li>
							<li class="advice_title_li advice_3">
								<span>3. How to Top-up Mobile</span>
							</li>
							<li class="advice_title_li advice_4">
								<span>4. How to Transfer Funds</span>
							</li>
							<li class="advice_title_li advice_5">
								<span>5. How to check Credit Card Transation Details</span>
							</li>
							<li class="advice_title_li advice_6">
								<span>6. How to Request Money</span>
							</li>
							<li class="advice_title_li advice_7">
								<span>7. Simply Pay With QR Code</span>
							</li>
							<li class="advice_title_li advice_8">
								<span>8. How to check locations of ATMs and Branches</span>
							</li>
							<li class="advice_title_li advice_9">
								<span>9. How to check eligibilty for Loan application</span>
							</li>
							<li class="advice_title_li advice_10">
								<span>10. Calculation for Deposits' Interest</span>
							</li>
							<li class="advice_title_li advice_11">
								<span>11. How to manage payees</span>
							</li>
							<li class="advice_title_li advice_12">
								<span>12. Cardless cash withdrawal at ATM</span>
							</li>
							<!-- <li class="advice_title_li advice_13">
								<span>Create cash code for ATM withdrawal</span>
							</li> -->
						</div>
						<div class="col-md-8">
							<section class="advide_desc" id="advice_1_collapsible">
								<p>Your registered mobile banking number is widely used to directly transfer the funds through mobile banking apps.</p>

								<p>It is very important that your credentials are up to date without fail to ensure you are reachable for any matters related to your account.</p>

								<p>How to update your particulars in your mobile banking?</p>

								<p>This can be done with a few easy steps only.</p>

								<!-- image -->
								<p style="font-weight: 600;margin-bottom: 10px;">Update the following information in mobile banking</p>

								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Name</p>
										<p>Please ensure your name is spelled correctly as you opened your accounts.</p>
									</div>

									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your National Registration Card Number and date of birth</p>
										<p>These data are vital as it is the main proof of identity.</p>
									</div>

									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Email address</p>
										<p>Ensure your email address is up to date, so we can stay in touch.</p>
									</div>

									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Phone number that was registered when opening accounts</p>
										<p>Keep your mobile number updated to receive transaction alerts and be notified of your account activities. The mobile number must be uniquely yours and do not share with another person.</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_2_collapsible" style="display: none;">
								<p>Being available 24/7, AYA mobile banking is great for those who could not be able to visit the actual facility during its working hours. You can use mobile banking to pay for your bills conveniently and in a straightforward way.</p>

								<p>Find out how you can make bill payment using mobile banking. </p>

								<!-- image -->

								<p style="font-weight: 600;margin-bottom: 10px;">Type of bill payments available in AYA mobile banking</p>

								<p>We have a wide range more than hundred over billing organization for you to make hassle-free payment. We provide the following services for your convenience.</p>

								<div class="row">
									<div class="col-12">
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Credit cards
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Electricity
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Loans
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Insurance
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Grocery Stores
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Communication
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											School fees
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Mobile
										</p>
										<p style="color: #4e4e4e;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											Travels
										</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_3_collapsible" style="display: none;">
								<p>Topping up your mobile phone in mobile banking is just on your fingertips.</p>

								<p>You can top up all telecom phone bills operating in Myanmar with deposit account.</p>

								<p>Top up a mobile phone just in 5 easy steps.</p>								

								<!-- image -->

								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Fast and Secure top-up service, applied in real-time. Stay in touch with family and friends.</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_4_collapsible" style="display: none;">
								<p>The days are gone that we need to line up at the bank every time we’d have to pay for or send money.</p>

								<p>You can transfer funds instantly 24/7 to any of AYA Banks accounts or other local banks accounts in Myanmar round the clock through mobile banking.</p>

								<p>Your money can get to where it must be within just seconds.</p>

								<!-- image -->

								<p style="font-size: 12px;">Notes: Please note that there is a transaction fees applied for every transaction.</p>
							</section>
							<section class="advide_desc" id="advice_5_collapsible" style="display: none;">
								<p>A record of previous financial transactions is vital for all individuals and business.</p>

								<p>It is recommended to track spending on credit card before you can reconcile with a credit card statement.</p>

								<p>Monitor your expenses with a few steps here.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_6_collapsible" style="display: none;">
								<p>Do you need to request money from others?</p>

								<p>We offer the option of generating your own QR code in mobile banking apps and send it over as an image to get someone paid to you.</p>

								<p>Please follow the simple steps below.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_7_collapsible" style="display: none;">
								<p>AYA mobile payment feature can keep you comfort.</p>

								<p>At any time anywhere, just scan and pay instantly with QR code to save yourself the hassle of having to exchange currency.</p>

								<!-- image -->

								<p style="font-size: 12px;">Notes: You are advised to ensure the correct recipient and amount of transfer before proceeding the transaction.</p>
							</section>
							<section class="advide_desc" id="advice_8_collapsible" style="display: none;">
								<p>For the sake of convenience and better service, we are using centralized online real-time exchange banking system. You can visit any nearest branches to receive banking services.</p>

								<p>Please find out our ATMs and Branches location in mobile application.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_9_collapsible" style="display: none;">
								<p>Are you looking at applying for any loan with AYA Bank?</p>

								<p>In AYA mobile apps, we will take you to explore various requirements you need to fulfill to take Auto loan, home loan and Education loan with us.</p>

								<p>Learn your eligibility more with simple steps.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_10_collapsible" style="display: none;">
								<p>Are you planning to open saving accounts or a fixed deposit account with us?</p>

								<p>Explore how you can calculate returns on it before saving and investing in a few simple steps.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_11_collapsible" style="display: none;">
								<p>If you need to transfer to specific payee regularly instead of one-off payment, it is advisable to register in your payee list. It helps you saving the time for your next transfer and protects from making payments by mistake.</p>

								<!-- image -->
							</section>
							<section class="advide_desc" id="advice_12_collapsible" style="display: none;">
								<p>Withdrawing funds from ATMs become more convenient now. We have upgraded the system of withdrawing cash from ATMs without using the debit or credit cards.</p>

								<p>This will save our ATM users from having lost cards, declined transactions due to incorrect PIN and taking cards to ATMs.</p>

								<p>Here is step by step guide to access the cardless cash withdrawal facility to our customers.</p>

								<!-- image -->

								<p style="font-size: 12px;">Notes: You can create another cash code if the current cash code was expired.</p>
							</section>
							<section class="advide_desc" id="advice_13_collapsible" style="display: none;">
								<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

								<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

								<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

								<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

								<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

								<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
							</section>
						</div>
					</div>
				</div>

				<style type="text/css">
					.accordion-header {
						padding: 0px 20px !important;
					}
					.accordion-button {
						font-size: 14px !important;
					    padding: 15px 0px !important;
					}
					.accordion-body {
					    padding: 20px !important;
					}
				</style>
				<div class="row d-block d-sm-none">
					<div class="col-md mb-4 mb-md-0">
						<div class="accordion" id="accordionExample">
							<div class="card accordion-item active">
								<p class="accordion-header" id="heading1">
									<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion1" aria-expanded="true" aria-controls="accordion1" >
										Updating Profile / particulars on mobile
									</button>
								</p>
								<div id="accordion1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading2">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
										How to add Bill payment organization
									</button>
								</p>
								<div id="accordion2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading3">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">
										How to top-up the mobile bill
									</button>
								</p>
								<div id="accordion3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>								

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading4">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">
										How to transfer Funds
									</button>
								</p>
								<div id="accordion4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading5">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion5" aria-expanded="false" aria-controls="accordion5">
										How to check credit card transaction details
									</button>
								</p>
								<div id="accordion5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading6">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion6" aria-expanded="false" aria-controls="accordion6">
										How to request Money
									</button>
								</p>
								<div id="accordion6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading7">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion7" aria-expanded="false" aria-controls="accordion7">
										Make payment with QR code
									</button>
								</p>
								<div id="accordion7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading8">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion8" aria-expanded="false" aria-controls="accordion8">
										How to check location of ATMs and Branches
									</button>
								</p>
								<div id="accordion8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading9">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion9" aria-expanded="false" aria-controls="accordion9">
										Check eligibility for HP Auto Loan, Mortgage etc.
									</button>
								</p>
								<div id="accordion9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading10">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion10" aria-expanded="false" aria-controls="accordion10">
										Viewing E-statements
									</button>
								</p>
								<div id="accordion10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading11">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion11" aria-expanded="false" aria-controls="accordion11">
										Calculation for Deposits
									</button>
								</p>
								<div id="accordion11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading12">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion12" aria-expanded="false" aria-controls="accordion12">
										How to manage bank account/ payees
									</button>
								</p>
								<div id="accordion12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading13">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion13" aria-expanded="false" aria-controls="accordion13">
										Create cash code for ATM withdrawal
									</button>
								</p>
								<div id="accordion13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>								

										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

										<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>

										<p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, Leo eget bibendum sodales, augue velit cursus nunc.</p>
									</div>
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
@include('layouts.footer', ['page'=>'digital-secure'])
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  		target: '#scrollspy-collapsible'
	});

	$(".advice_1").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_1_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_1").addClass('link_active');
	});
	$(".advice_2").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_2_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_2").addClass('link_active');
	});
	$(".advice_3").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_3_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_3").addClass('link_active');
	});
	$(".advice_4").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_4_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_4").addClass('link_active');
	});
	$(".advice_5").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_5_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_5").addClass('link_active');
	});
	$(".advice_6").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_6_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_6").addClass('link_active');
	});
	$(".advice_7").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_7_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_7").addClass('link_active');
	});
	$(".advice_8").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_8_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_8").addClass('link_active');
	});
	$(".advice_9").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_9_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_9").addClass('link_active');
	});
	$(".advice_10").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_10_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_10").addClass('link_active');
	});
	$(".advice_11").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_11_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_11").addClass('link_active');
	});
	$(".advice_12").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_12_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_12").addClass('link_active');
	});
	$(".advice_13").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_13_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_13").addClass('link_active');
	});
</script>

@endsection('content')