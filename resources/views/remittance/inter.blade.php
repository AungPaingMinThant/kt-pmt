@extends('layouts.frontend-app')

@section('title', 'Internatioanl Remittance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/remit_inter.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'remittance_inter'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'remittance_inter'])

				<div class="d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<img src="{{ url('/images/remittance/inter/fast_secure.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;">Fast & Secure Transfers</p>
						</div>
						<div class="col-md-4">
							<img src="{{ url('/images/remittance/inter/easy_convenient_transfer.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;">Easy & Convenient Transfers</p>
						</div>
						<div class="col-md-4">
							<img src="{{ url('/images/remittance/inter/competitive_exhange_rate.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;">Competitive Exchange Rate</p>
						</div>
					</div>
				</div>
				<div class="d-block d-sm-none">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="{{ url('/images/remittance/inter/fast_secure.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;margin-bottom: 30px;">Fast & Secure Transfers</p>
						</div>
						<div class="col-md-12 text-center">
							<img src="{{ url('/images/remittance/inter/easy_convenient_transfer.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;margin-bottom: 30px;">Easy & Convenient Transfers</p>
						</div>
						<div class="col-md-12 text-center">
							<img src="{{ url('/images/remittance/inter/competitive_exhange_rate.png') }}" class="img-fluid" style="width: 20%;">
							<p style="font-size: 16px;font-weight: 500;margin-top: 15px;margin-bottom: 30px;">Competitive Exchange Rate</p>
						</div>
					</div>
				</div>
				
				<div class="space-30"></div>
				
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-12">
							<p style="font-weight: 600;font-size: 18px;">Our International Partners</p>
						</div>
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="side-nav nav nav-pills flex-column">
									<li class="nav-item advice_1">
										<a class="nav-link active" href="#q_remit_malay_inward">
											<span>Q-Remit Malaysia (Inward)</span>
										</a>
									</li>
									<li class="nav-item advice_2">
										<a class="nav-link" href="#dbs_remit_singapore">
											<span>DBS Remit Singapore (Inward)</span>
										</a>
									</li>
									<li class="nav-item advice_3">
										<a class="nav-link" href="#western_union_inward">
											<span>Western Union (Inward) Worldwide</span>
										</a>
									</li>
									<li class="nav-item advice_4">
										<a class="nav-link" href="#ria_money_transfer_inward">
											<span>Ria Money Transfer (Inward) Worldwide</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="q_remit_malay_inward">
									Q-Remit Malaysia (Inward)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/remittance/inter/q_remit_malay_inward.png') }}" class="img-fluid">
									<p class="q_remit_malay_inward_tagline">Remit seamlessly without borders with Q-Remit</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Easy and secure way to transfer money from Malaysia to Myanmar. You can receive the transferred amount in MMK at any of AYA Branches.</p>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Visit agents to make payments.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Payout amount Myanmar Kyat is confirmed.</p>
									</div>

									<p style="font-weight: 600;">Contact here to send money</p>

									<div class="col-md-6">
										<div class="row">
											<div class="col-2 text-right">
												<img src="{{ url('/images/remittance/inter/location_icon.png') }}" class="img-fluid" style="float: right;">
											</div>
											<div class="col-10">
												<p>25, Jalan Medan Pasar, 50050<br>Kuala Lumpur, Malaysia</p>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="padding-left: 0px;">
										<div class="row">
											<div class="col-2 text-right">
												<img src="{{ url('/images/remittance/inter/location_icon.png') }}" class="img-fluid" style="float: right;">
											</div>
											<div class="col-10">
												<p>60, Jalan Munshi Abdullah, 75100<Br>Melaka, Malaysia</p>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40" id="dbs_remit_singapore"></div>
								<p class="dbs_remit_singapore">
									DBS Remit Singapore (Inward)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/remittance/inter/DBS_remit_singpapore.png') }}" class="img-fluid">
									<p class="dbs_remit_singapore_tagline">DBS to AYA Remit,<br>a convenient way to send money.</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>DBS and POSB (Singapore) account holder can remit funds to Myanmar 24/7 with AYA – DBS Remit. </p>

									<div class="col-md-12 col-12">
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Zero “0” transfer fee to both sender and receiver.</p>
											</div>
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Instant credit to AYA account and same day transfer to any local banks in Myanmar.</p>
											</div>
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Receive payment with AYA’s Ngwe Toe Mae-Shwe O to earn higher interest and cash out anytime needed.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40" id="western_union_inward"></div>
								<p class="western_union_inward">
									Western Union (Inward) Worldwide 
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/remittance/inter/western_union.png') }}" class="img-fluid">
									<p class="western_tagline">Moving money for better with Western Union</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Ease and fast service with Western Union!</p>
									<p>It commits security and provides cross-border money transfer over 200 countries worldwide. Receivers in Myanmar can withdraw the funds at any of AYA branch in Myanmar Kyat currency.</p>

									<div class="col-md-12 col-12">
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>100% cash out at any AYA Branches using the secure transaction code (i.e. 10 digits MTCN).</p>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40" id="ria_money_transfer_inward"></div>
								<p class="ria_money_transfer_inward">
									Ria Money Transfer (Inward) Worldwide
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/remittance/inter/ria_money_transfer.png') }}" class="img-fluid">
									<p class="ria_tagline">Getting Money to Where it Matters</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>International money transfer made Easy, Fast, Safe and Guaranteed. Compare and save to get low fees and great exchange rates on international money transfers to 165+ countries.</p>

									<div class="col-md-12 col-12">
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>100% cash out at any AYA Branches using the secure transaction code (PIN).</p>
											</div>
										</div>
									</div>
								</div>

								<div class="">
									<div class="space-60"></div>
									<h4 class="fw-bold">Explore More</h4>
									<hr class="bottom_hr">
									<div class="space-20"></div>
									<div class="row">
										<div class="col-md-5">
											<div class="card">
												<div style="position: relative;">
													<img src="{{ url('/images/about-aya/network/correspondent-bank/correspondent-img.webp') }}" alt="Correspondent Bank" class="card-img-top">
												</div>
												<div class="card-body">
													<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Correspondent Bank</p>
													<p class="card_detail_info mb-30">Our network for global money transfers, easy and secure</p>

													<p class="text-decoration-underline">
														<a href="{{ url('/about-aya/network/correspondent-bank') }}">Learn more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="remittance_inter_mobile_title">
								Q-Remit Malaysia (Inward)
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/remittance/inter/q_remit_malay_inward.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 20px;position: absolute;top: 70%;left: 4%;width: 90%;">Remit seamlessly without borders with Q-Remit</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Easy and secure way to transfer money from Malaysia to Myanmar. You can receive the transferred amount in MMK at any of AYA Branches.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Visit agents to make payments.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Payout amount Myanmar Kyat is confirmed.</p>
								</div>

								<p style="font-weight: 600;">Contact here to send money</p>

								<div class="col-md-6">
									<div class="row">
										<div class="col-2 text-right">
											<img src="{{ url('/images/remittance/inter/location_icon.png') }}" class="img-fluid" style="float: right;">
										</div>
										<div class="col-10">
											<p>25, Jalan Medan Pasar, 50050<br>Kuala Lumpur, Malaysia</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-2 text-right">
											<img src="{{ url('/images/remittance/inter/location_icon.png') }}" class="img-fluid" style="float: right;">
										</div>
										<div class="col-10">
											<p>60, Jalan Munshi Abdullah, 75100<Br>Melaka, Malaysia</p>
										</div>
									</div>
								</div>
							</div>

							<div class="space-40" id="dbs_remit_singapore"></div>
							<p class="remittance_inter_mobile_title">
								DBS Remit Singapore (Inward)
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/remittance/inter/DBS_remit_singpapore_mobile.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 20px;position: absolute;top: 70%;left: 4%;width: 90%;">DBS to AYA Remit,<br>a convenient way to send money.</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>DBS and POSB (Singapore) account holder can remit funds to Myanmar 24/7 with AYA – DBS Remit. </p>

								<div class="col-md-12 col-12">
									<div class="row">
										<div class="col-md-1 col-2" style="padding-top: 5px;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>Zero “0” transfer fee to both sender and receiver.</p>
										</div>
										<div class="col-md-1 col-2" style="padding-top: 5px;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>Instant credit to AYA account and same day transfer to any local banks in Myanmar.</p>
										</div>
										<div class="col-md-1 col-2" style="padding-top: 5px;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>Receive payment with AYA’s Ngwe Toe Mae-Shwe O to earn higher interest and cash out anytime needed.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="space-40" id="western_union_inward"></div>
							<p class="remittance_inter_mobile_title">
								Western Union (Inward) Worldwide 
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/remittance/inter/western_union_mobile.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 20px;position: absolute;top: 70%;left: 4%;width: 90%;">Moving money for better with Western Union</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Ease and fast service with Western Union!</p>
								<p>It commits security and provides cross-border money transfer over 200 countries worldwide. Receivers in Myanmar can withdraw the funds at any of AYA branch in Myanmar Kyat currency.</p>

								<div class="col-md-12 col-12">
									<div class="row">
										<div class="col-md-1 col-2" style="padding-top: 5px;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>100% cash out at any AYA Branches using the secure transaction code (i.e. 10 digits MTCN).</p>
										</div>
									</div>
								</div>
							</div>

							<div class="space-40" id="ria_money_transfer_inward"></div>
							<p class="remittance_inter_mobile_title">
								Ria Money Transfer (Inward) Worldwide
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/remittance/inter/ria_money_transfer_mobile.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 20px;position: absolute;top: 80%;left: 4%;width: 90%;">Getting Money to Where it Matters</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>International money transfer made Easy, Fast, Safe and Guaranteed. Compare and save to get low fees and great exchange rates on international money transfers to 165+ countries.</p>

								<div class="col-md-12 col-12">
									<div class="row">
										<div class="col-md-1 col-2" style="padding-top: 5px;">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>100% cash out at any AYA Branches using the secure transaction code (PIN).</p>
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
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>
@endsection('content')