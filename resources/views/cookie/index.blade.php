@extends('layouts.frontend-app')

@section('title', 'Privacy Notice and Cookies Policy – AYA Bank')
<style type="text/css">
    .nav-align-top .nav-tabs .nav-item:first-child .nav-link {
    	border-top:  none;
    	border-left: none;
    	border-right: none;
    	box-shadow: none;
    }
    .tab_title > span {
    	padding: 20px 0px;
    }
    .nav-align-top .nav-tabs .tab_title.active span {
    	border-bottom: 5px solid #A5000B;
    }
    .nav-pills .tab_title.active, .nav-pills .tab_title.active:hover, .nav-pills .tab_title.active:focus {
    	background-color: transparent !important;
	    color: #000 !important;
	    box-shadow: none !important;
	    border-bottom: 5px solid #ae002c;
	    border-radius: 0;
	    font-weight: 500;
    }
    .nav .tab_title:hover, .nav .tab_title:focus {
    	color: #000 !important;
    }
    .nav-pills .tab_title {
    	font-weight: 400;
    	font-size: 16px
    }
    .how_do_we_collect {
    	width: 50% !important;
    }
    .who_do_we_share_information {
    	width: 40% !important;
    	margin-bottom: 30px;
    }
    .how_do_we_use, .your_online_privacy, .how_long_do_we_keep {
    	width: 60%;
    }
	@media only screen and (max-width: 576px){
		.tab_section_1 {
		    padding: 0px 30px !important;
		}
		.tab-pane {
			background-position: -80px -70px;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

        	@include('layouts.banner', ['page'=>'cookie_policy'])
        	<div class="space-40"></div>
			<div class="nav-align-top mb-4">
				<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
					<li class="nav-item">
						<button type="button" class="tab_title nav-link active privacy_notice_btn" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-privacy_notice" aria-controls="navs-pills-top-privacy_notice" aria-selected="true" >
							Privacy Policy and Notice
						</button>
					</li>
					<li class="nav-item">
						<button type="button" class="tab_title nav-link cookie_policy_btn" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-cookies-policy" aria-controls="navs-pills-top-cookies-policy" aria-selected="false" >
							Cookies Policy
						</button>
					</li>
				</ul>
				<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;box-shadow: none;">
					<div class="tab-pane fade privacy_notice show active" id="navs-pills-top-privacy_notice" role="tabpanel" style="padding-bottom: 30px;box-shadow: none;">
						<div class="container">
							<div class="space-20"></div>
							<div class="row" >
								<div class="col-md-12">
									<p>We appreciate your attention to our privacy policy and notice ("Privacy Policy"). This document outlines our practices related to collecting, utilizing, disclosing, preserving, and safeguarding your personal information. This Privacy Policy is applicable to any website, application, or service that refers to it.</p>

									<p>Our objective through this policy is to clarify how we employ such technologies and our collaborations with third parties. It provides comprehensive information regarding the purpose of these technologies and guides you on how to manage your online preferences.</p>

									<p>The regulatory landscape around cookies usage is evolving, and any future changes will be reflected in this policy. We also reserve the right to amend this notice periodically. In the event of substantial alterations in the way we use these technologies, we will conspicuously announce the changes on our website.</p>
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Information Collection: How Do We Do It?</p>
									<p>In compliance with applicable law, we gather information about you and any other party whose details you offer us when you:</p>
									<ul>
										<li>Register for using our websites, applications, or services, including free trials. This could include your name, address, email address, and contact number. We might also request additional details related to your business and preferences. </li>
										<li>Use our applications, which may involve the accumulation of metadata. </li>
										<li>Complete online forms, participate in surveys, download information, engage in competitions or prize draws.</li>
									</ul>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/how_do_we_collect.png') }}" class="img-fluid how_do_we_collect">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Utilizing Your Information: How Do We Do It?</p>
									<p>In accordance with applicable law, we use your information to:</p>
									<ul>
										<li>Deliver the information and services you have requested.</li>
										<li>Cross-verify information for accuracy by comparing it with third-party data. </li>
										<li>Manage and administer your use of applications, products, and services you have sought from us.</li>
										<li>Maintain our relationship with you, encompassing customer services and support activities. </li>
										<li>Abide by any other regulatory or legal obligations of ours. </li>
										<li>Present targeted advertising, marketing (possibly including in-product messaging), or information, which might be beneficial to you, based on your use of our applications and services. </li>
										<li>Provide joint content and services with third parties with whom you share a separate relationship (e.g., social media providers).</li>
									</ul>
								</div>
								<div class="col-md-5 text-center" style="display: table;">
									<img src="{{ url('/images/cookie_policy/how_do_we_use.png') }}" class="img-fluid how_do_we_use">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Preserving Your Online Privacy</p>
									<p>AYA Bank PCL is dedicated to safeguarding your personal information with the same care as we handle your finances. We assure to manage any personal data about you securely, fairly, and lawfully, committing ourselves to protect your privacy.</p>

									<p>We only request your personal information online or through apps in response to your active engagement with our online products or services. Even when your data is transferred to third parties aiding us in offering our services to you, we ensure the legal protection of your information.</p>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/your_online_privacy.png') }}" class="img-fluid your_online_privacy">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Sharing Your Information: Who Are Involved?</p>
									<p>We share your data, when deemed necessary, with:</p>
									<ul>
										<li>Business partners aiding in the provision of our services. </li>
										<li>Credit Bureau. </li>
										<li>Industry regulators and government departments.</li>
									</ul>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/who_do_we_share_information.png') }}" class="img-fluid who_do_we_share_information">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Information Retention: How Long Do We Keep It?</p>
									<p>We retain your information only as long as needed, typically up to ten years following the closure of all your accounts. On certain occasions, due to legal obligations related to an investigation, we may need to retain it for a longer duration.</p>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/how_long_do_we_keep.png') }}" class="img-fluid how_long_do_we_keep">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane cookies-policy fade" id="navs-pills-top-cookies-policy" role="tabpanel">
						<div class="container">
							<div class="space-20"></div>
							<div class="row" >
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Cookies: What Are They?</p>
									<p>A "cookie" is a tiny text file saved on your device—computer, smartphone, or tablet—when you visit a website or use an application. These cookies contain specific information related to your use of our website or app, including login credentials, preference settings, or tracking identifiers.</p>
									<p>Some cookies, known as session cookies, are eliminated when you close your browser. Others, like tracking cookies or authentication cookies, are persistent cookies that stay on your device until they expire or you remove them from your cache. Persistent cookies help us remember you as a returning visitor.</p>
									<p>This website utilizes persistent cookies.</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Rationale and Use of Cookies</p>
									<p>Our primary objective of using cookies on our website is to deliver an exceptional online experience to you. Cookies allow us to understand the usage pattern of our website and enable us to curate personalized online content, enhancing the relevancy of your visits. If you permit all cookies, we can amplify your experience even further by expediting your information search process and customizing content or marketing to cater to your specific needs. </p>
									<p>We assure that no personal information acquired through cookies on this website will be shared with third parties.</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Legal Basis for Cookie Usage</p>
									<p>Unless it involves strictly essential and technical cookies that do not necessitate visitor's informed consent, we will only place cookies on the user's device following the user's prior informed approval. Users can express their consent by either clicking on 'Accept all cookies' or by customizing their cookie preferences through the cookie settings panel presented by us upon the user's first access to the website.</p>
								</div>
								<div class="space-20" id="cookie-policy-manage"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Managing or Disabling Cookies: How Can You Do It?</p>
									<p>If you prefer, you can modify your browser or our website, application, or service settings to limit cookies or entirely block them. However, please note that disabling cookies might impact your ability to use certain sections of our website, applications, or services.</p>

									<div class="space-20"></div>

									<p class="fw-semibold">Microsoft Internet Explorer</p>
									<ul style="list-style: number;">
										<li>Access the Tools menu > Internet Options.</li>
										<li>Navigate to the Privacy tab.</li>
										<li>Click on Advanced within the Settings section and choose the relevant setting.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Google Chrome</p>
									<ul style="list-style: number;">
										<li>Access Settings > Advanced.</li>
										<li>Navigate to Privacy and Security > Content settings.</li>
										<li>Click Cookies and choose the pertinent options.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Safari</p>
									<ul style="list-style: number;">
										<li>Access Preferences > Privacy.</li>
										<li>Click on Remove all Website Data.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Mozilla Firefox</p>
									<ul style="list-style: number;">
										<li>Access the Tools menu > Options.</li>
										<li>Navigate to the Privacy icon.</li>
										<li>Access the Cookie menu and select the appropriate options.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Opera 6.0 and further</p>
									<ul style="list-style: number;">
										<li>Access the Files menu > Preferences.</li>
										<li>Select Privacy.</li>
									</ul>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Updates to the Cookies Policy and Contact Details</p>
									<p>This Cookies Policy is subject to modifications based on the types of cookies employed. Should we introduce new categories of cookies that mandate informed consent, we will notify the visitor and record their consequent consent.</p>
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
@include('layouts.footer', ['page'=>''])
<script type="text/javascript">
	var cur_url = window.location.href;
	var parts = cur_url.split('#');
	var last_part = parts.at(-1);

	if (last_part == 'cookie-policy-manage') {
		$(".privacy_notice").removeClass('active');
		$(".privacy_notice").removeClass('show');
		$(".privacy_notice_btn").removeClass('active');

		$(".cookies-policy").addClass('active');
		$(".cookies-policy").addClass('show');
		$(".cookie_policy_btn").addClass('active');
	}
</script>

@endsection('content')