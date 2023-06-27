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
							Privacy Notice
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
									<p>Please read this privacy notice (“Privacy Notice”) carefully as it describes our collection, use, disclosure, retention, and protection of your personal information. This Privacy Notice applies to any website, application or service which references this Privacy Notice.</p>

									<p>The purpose of this notice is to explain how we use such technologies and the third parties we work with, and to provide you with clear information about their purpose. It also explains how you can control your online preferences.</p>

									<p>New regulations will change the way in which the use of cookies is governed in the future, and we will update this notice once those changes come into effect. We may also revise this notice from time to time. If we make any material changes to the way we use these technologies, we will prominently publish the changes on our website.</p>
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">How do we collect information?</p>
									<p>To the extent permissible under applicable law, we collect information about you and any other party whose details you provide to us when you:</p>
									<ul>
										<li>register to use our websites, applications, or services (including free trials); this may include your name, address, email address and telephone number. We may also ask you to provide additional information about your business and your preferences;</li>
										<li>use our applications, which may include the collection of metadata;</li>
										<li>complete online forms, take part in surveys, download information, enter any competitions, or prize draws.</li>
									</ul>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/how_do_we_collect.png') }}" class="img-fluid how_do_we_collect">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">How do we use your information?</p>
									<p>To the extent permissible under applicable law, we use your information to:</p>
									<ul>
										<li>provide any information and services that you have requested</li>
										<li>compare information for accuracy and to verify it with third parties;</li>
										<li>manage and administer your use of applications, products and services you have asked us to provide;</li>
										<li>manage our relationship with you (for example, customer services and support activities);</li>
										<li>comply with any other of our regulatory or legal obligations;</li>
										<li>deliver targeted advertising, marketing (which may include in-product messaging) or information which may be useful to you, based on your use of our applications and services; and</li>
										<li>deliver joint content and services with third parties with whom you have a separate relationship (for example, social media providers).</li>
									</ul>
								</div>
								<div class="col-md-5 text-center" style="display: table;">
									<img src="{{ url('/images/cookie_policy/how_do_we_use.png') }}" class="img-fluid how_do_we_use">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Your online privacy</p>
									<p>AYA Bank PCL is responsible for protecting your personal info as carefully as we protect your money. We promise to treat any personal information about you securely, fairly, and lawfully. We are committed to protecting your privacy.</p>

									<p>When we ask you to provide personal information online/in the apps, it will only be in response to you actively or using our online products or services. Even if we transfer your information to third parties who work with us to provide our services to you, we will make sure your information is legally protected.</p>
								</div>
								<div class="col-md-5 text-center">
									<img src="{{ url('/images/cookie_policy/your_online_privacy.png') }}" class="img-fluid your_online_privacy">
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">Who do we share your information with?</p>
									<p>We share your information, as and when necessary, with:</p>
									<ul>
										<li>Our business partners who provide us some of our services</li>
										<li>Credit Bureau</li>
										<li>Industry regulators and government departments</li>
									</ul>
								</div>
								<div class="col-md-5 text-center">
									<!-- <img src="{{ url('/images/cookie_policy/how_long_do_we_keep.png') }}" class="img-fluid how_long_do_we_keep"> -->
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-7">
									<p class="fw-semibold" style="font-size: 16px;">How long do we keep your information?</p>
									<p>We don’t keep your info for longer than we need to, which is usually up to ten years after you close all your accounts. Sometimes we need to keep it longer (for example due to an investigation related to legal obligations).</p>
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
									<p class="fw-semibold" style="font-size: 16px;">What are cookies?</p>
									<p>A “cookie” is a small text file that’s stored on your computer, smartphone, tablet, or other device when you visit a website or use an application. They contain specific information relating to your use of our web site or app, such as login credentials; your preference settings or tracking identifiers. </p>
									<p>Some cookies are deleted when you close your browser. These are known as session cookies. Other cookies (such as tracking cookies or authentication cookies) remain on your device until they expire, or you delete them from your browser. These are known as persistent cookies and enable us to remember things about you as a returning visitor.</p>
									<p>This website uses persistent cookies.</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Why we use cookies?</p>
									<p>We use cookies on our website to provide you with a great online experience. Our cookies help us to see how our website is used and provide tailored online content to make your visit more personal. By allowing all cookies, we can enhance your experience even further. This means helping you find information more quickly and tailoring content or marketing to your needs. </p>
									<p>We will not share any personal information gathered through the cookies on this website with third parties.</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Why we use cookies?</p>
									<p>We use cookies on our website to provide you with a great online experience. Our cookies help us to see how our website is used and provide tailored online content to make your visit more personal. By allowing all cookies, we can enhance your experience even further. This means helping you find information more quickly and tailoring content or marketing to your needs. </p>
									<p>We will not share any personal information gathered through the cookies on this website with third parties.</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">What are the legal grounds for the use of cookies?</p>
									<p>Except in the case of strictly necessary and technical cookies that do not require the visitor's informed consent, the publisher will place cookies on the user's computer only with the user's prior informed consent. Users may give their consent either by clicking on 'Accept all cookies' or by adjusting the settings which users freely choose to approve, through the cookie settings panel displayed by the publisher the first time the user accesses the Website.</p>
								</div>
								<div class="space-20" id="cookie-policy-manage"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">How can you manage/disable your cookies?</p>
									<p>You may be able to configure your browser or our website, application, or service to restrict cookies or block all cookies if you wish, however if you disable cookies, you may find this affects your ability to use certain parts of our website, applications, or services.</p>

									<p class="fw-semibold">Microsoft Internet Explorer</p>
									<ul style="list-style: number;">
										<li>Select the Tools menu > Internet Options</li>
										<li>Click on the Privacy tab.</li>
										<li>Click on Advanced within the Settings section and select the appropriate setting.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Google Chrome</p>
									<ul style="list-style: number;">
										<li>Select Settings > Advanced.</li>
										<li>Under Privacy and Security > Content settings</li>
										<li>Click Cookies and select the relevant options.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Safari</p>
									<ul style="list-style: number;">
										<li>Select Preferences > Privacy</li>
										<li>Click on Remove all Website Data</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Mozilla Firefox</p>
									<ul style="list-style: number;">
										<li>Choose the Tools menu > Options</li>
										<li>Click on the Privacy icon</li>
										<li>Select the Cookie menu and select the relevant options.</li>
									</ul>

									<div class="space-20"></div>

									<p class="fw-semibold">Opera 6.0 and further</p>
									<ul style="list-style: number;">
										<li>Choose Files menu > Preferences.</li>
										<li>Select Privacy</li>
									</ul>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fw-semibold" style="font-size: 16px;">Update to the Cookies Policy and contact details</p>
									<p>This Cookies Policy may change depending on the cookies used. If new types of cookies are included whose use requires informed consent, the publisher will inform the visitor and record their due consent.</p>
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