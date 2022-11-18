@extends('layouts.frontend-app')

@section('title', 'mBanking – AYA Bank')
<style type="text/css">
	.why_use_AYA_btn {
		color: #484848;
		border: 1px solid #484848;
		float: right;
	}
	.why_use_AYA_btn:hover {
		color: #fff;
		background-color: #484848;
		border: 1px solid #484848;
	}
	.why_use_AYA_outer_div:hover>div {
		opacity: 0.25;
	}
	.why_use_AYA_outer_div:hover .simple_login_btn {
		opacity: 1;
	}
	.simple_login_btn {
		opacity: 0;
		position: absolute;
		top: 40%;
		left: 40%;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
   		@include('layouts.admin_sidebar', ['page'=>'Page'])
		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Mobile Banking'])
			<br>
			@include('layouts.admin_banner', ['page'=>'mobilebanking','mobilebanking'=>$mobilebanking])

			<div class="container section_1" >
				@include('layouts.admin_tagline', ['page'=>'mobilebanking'])
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #1d1d1f;">Why Use AYA Mobile Banking?</h3>
					</div>
				</div>
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12 text-right">
						<button class="btn why_use_AYA_btn" data-bs-toggle="modal" data-bs-target="#why_use_AYA_first_modal">Edit Section</button>
					</div>
					@include('admin.page.modal_pop',['mobilebankingfact'=>$mobilebankingfact])
					<div class="col-md-7">
						<div class="row">
							@for ($i = 0; $i < 4; $i++)
								@php $slug = $mobilebankingfact[$i]['section1_title_slug']; @endphp
								<div class="col-md-6 why_use_AYA_outer_div" onclick="imageChange('{{$slug}}')" style="padding: 20px;position: relative;">
									<div class="row why_use_AYA {{$mobilebankingfact[$i]['section1_title_slug']}}">
										<img src="{{ url($mobilebankingfact[$i]['section1_fact_icon']) }}" class="img-fluid" style="width: 91px;">
										<p style="font-weight: 600;margin-top: 1rem;">{{$mobilebankingfact[$i]['section1_fact_title']}}</p>
										<p style="color: #4e4e4e;">{!!$mobilebankingfact[$i]['section1_fact_desc']!!}</p>
									</div>
									<button type="button" class="btn simple_login_btn" data-bs-toggle="modal" data-bs-target="#why_use_AYA_first_modal_{{$i}}">Edit</button>

									<div class="modal fade" id="why_use_AYA_first_modal_{{$i}}" data-bs-backdrop="static" tabindex="-1" style="opacity: 1;">
										<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
											<form class="modal-content" action="{{ url('/admin/mbanking/fact/update') }}" method="POST" enctype="multipart/form-data">
												<div class="modal-header">					
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body" style="padding: 0px 40px;">
													{{ csrf_field() }}							
													<input type="hidden" name="fact_id" value="{{$mobilebankingfact[$i]['id']}}">
													@php $fact_id = $mobilebankingfact[$i]['id']; @endphp
													<div class="row">
														<div class="col-md-11">
															<div class="mb-3 row">
																<label for="section1_fact_icon_{{$fact_id}}" class="col-md-2 col-form-label">Icon</label>
																<div class="col-md-9" style="margin-bottom: 10px;">
																	<a href="{{ url($mobilebankingfact[$i]['section1_fact_icon']) }}" target="_blank" style="color: #000;text-decoration: underline;">
																		{{ $mobilebankingfact[$i]['icon_name'] }}
																	</a><br>
																	<input class="form-control" type="file" name="section1_fact_icon_{{$fact_id}}" id="section1_fact_icon_{{$fact_id}}" style="width: 50%" />
																	<input type="hidden" name="section1_fact_icon_{{$fact_id}}_old" id="section1_fact_icon_{{$fact_id}}_old" value="{{ $mobilebankingfact[$i]['section1_fact_icon'] }}">
																</div>

																<label for="section1_fact_img_{{$fact_id}}" class="col-md-2 col-form-label">Image</label>
																<div class="col-md-9" style="margin-bottom: 10px;">
																	<a href="{{ url($mobilebankingfact[$i]['section1_fact_img']) }}" target="_blank" style="color: #000;text-decoration: underline;">
																		{{ $mobilebankingfact[$i]['img_name'] }}
																	</a>
																	<br>
																	<input class="form-control" type="file" name="section1_fact_img_{{$fact_id}}" id="section1_fact_img_{{$fact_id}}" style="width: 50%;" />
																	<input type="hidden" name="section1_fact_img_{{$fact_id}}_old" id="section1_fact_img_{{$fact_id}}_old" value="{{ $mobilebankingfact[$i]['section1_fact_img'] }}">
																</div>

																<label for="section1_fact_title_{{$fact_id}}" class="col-md-2 col-form-label">Title</label>
																<div class="col-md-9" style="margin-bottom: 10px;">
																	<input type="text" class="form-control" name="section1_fact_title_{{$fact_id}}" id="section1_fact_title_{{$fact_id}}" value="{{ $mobilebankingfact[$i]['section1_fact_title'] }}">
																</div>

																<label for="section1_fact_title_{{$fact_id}}" class="col-md-2 col-form-label">Detail</label>
																<div class="col-md-9" style="margin-bottom: 10px;">
																	<textarea class="ckeditor form-control" name="wysiwyg-editor">{{ $mobilebankingfact[$i]['section1_fact_desc'] }}</textarea>
																</div>
															</div>
														</div>
													</div>
													<br>
													<button type="submit" class="btn btn-primary">Update</button>
												</div>
												<div class="modal-footer"></div>
											</form>
										</div>
									</div>
								</div>
							@endfor
						</div>
					</div>
					<div class="col-md-5 text-center d-none d-sm-block" style="padding-top: 20px;">
						@for ($i = 0; $i < 4; $i++)
							@php $slug = $mobilebankingfact[$i]['section1_title_slug']; @endphp
							@if($i == 0)
								<img src="{{ url($mobilebankingfact[$i]['section1_fact_img']) }}" class="img-fluid first_mockup" id="{{$slug}}_mockup" style="width: 75%;">
							@else
								<img src="{{ url($mobilebankingfact[$i]['section1_fact_img']) }}" class="img-fluid first_mockup" id="{{$slug}}_mockup" style="width: 75%;display: none;">
							@endif
						@endfor
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 text-center d-none d-sm-block" style="padding-top: 20px;">
						@for ($i = 4; $i < count($mobilebankingfact); $i++)
							@php $slug = $mobilebankingfact[$i]['section1_title_slug']; @endphp
							@if($i == 4)
								<img src="{{ url($mobilebankingfact[$i]['section1_fact_img']) }}" class="img-fluid second_mockup" id="{{$slug}}_mockup" style="width: 75%;">
							@else
								<img src="{{ url($mobilebankingfact[$i]['section1_fact_img']) }}" class="img-fluid second_mockup" id="{{$slug}}_mockup" style="width: 75%;display: none;">
							@endif
						@endfor
					</div>
					<div class="col-md-7">
						<div class="row">
							@for ($i = 4; $i < count($mobilebankingfact); $i++)
								@php $slug = $mobilebankingfact[$i]['section1_title_slug']; @endphp
								<div class="col-md-6 why_use_AYA_outer_div" onclick="secondImageChange('{{$slug}}')" style="padding: 20px;position: relative;">
									<div class="row why_use_AYA {{$mobilebankingfact[$i]['section1_title_slug']}}">
										<img src="{{ url($mobilebankingfact[$i]['section1_fact_icon']) }}" class="img-fluid" style="width: 91px;">
										<p style="font-weight: 600;margin-top: 1rem;">{{$mobilebankingfact[$i]['section1_fact_title']}}</p>
										<p style="color: #4e4e4e;">{!!$mobilebankingfact[$i]['section1_fact_desc']!!}</p>
									</div>
									<button type="button" class="btn simple_login_btn" >Edit</button>
								</div>
							@endfor
						</div>
					</div>					
				</div>
			</div>
			<div class="d-block d-sm-none">
				<img src="{{ url('http://localhost/ayab/public/images/how_to_apply_mobile.jpg') }}" class="img-fluid">
			</div>
			<div style="background-image: url('http://localhost/ayab/public/images/how_to_apply.jpg');background-size: cover;">
				<div class="container how_to_apply_section" style="">
					<div class="row">
						<div class="col-md-6 how_to_apply_desc" style="">
							<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 1.5rem;">How to Apply</p>
							<p style="margin-bottom: 1.5rem;">You can easily register AYA Mobile Banking Service at any AYA Branches. Alternatively, you can apply online here. Our application is available to personal and business banking customers. You will need iOS or Android devices.</p>

							<a href="https://ibankapp.ayabank.com" style=""><button class="btn" style="background-color: #ae071d;color: #fff;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">Apply Now</button></a>

							<p style="color: #a02225;font-weight: 500;font-size: 25px;margin-bottom: 5px;">Download the APP Now</p>

							<p style="color: #666;font-weight: 400;">On your mobile or tablet, download AYA Mobile Bankng here.</p>

							<a href="http://bit.ly/ayambankingios"><img src="{{ url('/images/apple.png') }}" class="img-fluid" style="width: 30%;margin-right: 20px;"></a>
							<a href="http://bit.ly/ayambankingandriod"><img src="{{ url('/images/google.png') }}" class="img-fluid" style="width: 35%"></a>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block" style="padding: 40px 100px 60px 100px;background-image: url('http://localhost/ayab/public/images/more_support.png');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-5 col-xs-12 text-center" style="padding-top: 80px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
							<div style="height: 70px;"></div>
						</div>
						<div class="col-md-7"></div>
					</div>
				</div>

				<div class="container d-block d-sm-none" style="padding: 40px 50px 60px 50px;background-color: #f5f5f5;border-radius: 10px;margin-bottom: 50px;">
					<div class="row">
						<div class="col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="container faq_section" style="">
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">FAQs</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									How to apply AYA i-Banking / m-Banking ?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>To get i-Banking / m-Banking service that can be linked to your AYA Bank Account/Card Account, you can apply at nearest branch by filling AYA i-Banking / m-Banking Application form. You will need to bring only your saving book and NRC Card. Altnernatively, you can apply online at https://ibankapp.ayabank.com/ with your details without having to visit the branch. </p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Where can I download m-Banking application?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										On your mobile or tablet, you can download 'AYA m-Banking 2.0 Version' application at 'Play Store' for Android and 'Apple Store' for iOS.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is the limit on i-Banking / m-Banking transfer?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										With AYA i-Banking, the maximum transaction limit for one transaction is MMK 50 million and a user can transfer up to MMK 150 million per day.
										<Br>
										With AYA m-Banking, the maximum transaction limit for one transaction is MMK 20 million and a user can transfer up to MMK 100 million per day.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What should I do if I forgot my i-Banking / m-Banking password?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										In the event of forgetting your i-Banking / m-Banking password, you can either apply new password at nearest branch by bringing NRC Card and saving book (or) reset password yourself at m-Banking 2.0.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How do I change password in m-Banking? 
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can change your m-Banking password by logging to AYA m-Banking application and accessing 'Change password' option under 'AYA m-Banking Settings' menu on the upper left corner of main page. New m-Banking password shall include capital letter, small letter, special letter (for example - @!#), and numbers (or) characters.
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
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script type="text/javascript">
	// $('.ckeditor').ckeditor();

	function imageChange(slug) {
		$("#"+slug+"_mockup").show(500);
		$(".first_mockup").not("#"+slug+"_mockup").hide(500);
	}

	function secondImageChange(slug) {
		$("#"+slug+"_mockup").show(500);
		$(".second_mockup").not("#"+slug+"_mockup").hide(500);
	}

	$(".simple_login_div").click(function() {
		$("#simple_login_mockup").show(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".quick_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").show(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".manage_credit_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").show(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".prepaid_card_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").show(500);
	});

	$(".secure_transaction_div").click(function() {
		$("#secure_transaction_mockup").show(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".easy_transfer_payment_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").show(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".ATM_withdrawal_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").show(500);
	});
</script>

@endsection('content')