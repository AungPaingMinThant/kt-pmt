@extends('layouts.frontend-app')

@section('title', 'Social Sustainability – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/sustainability.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'social_sustainability'])

			<div class="space-60"></div>
			<div class="container">
				<div class="row">
					<p>We are dedicated to expressing our commitment towards playing our part in crafting a sustainable future. Social sustainability serves as an indicator of community welfare and expanding opportunities for everyone, now and in the future. This encompasses fostering a workplace that is respectful, collaborative, and inclusive, promoting professional growth and development, and enabling us to attract, retain, and engage employees effectively.</p>
				</div>
				<div class="row">
					<div class="col-md-4 d-none d-sm-block">
						<div class="space-40"></div>
						<nav id="myScrollspy">
							<ul class="nav nav-pills flex-column side_bar">
								<li class="nav-item">
									<a class="nav-link active" id="enriching_lives_financial_link" href="#enriching_lives_financial">
										<span class="pr-5">Enriching Lives through Financial Inclusion</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="championing_human_rights_link" href="#championing_human_rights">
										<span>Championing Human Rights - Fundamental for a Prosperous Future!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="business_ethics_link" href="#business_ethics">
										<span>Business Ethics - An Imperative Competence</span>
										<hr class="nav-item-separate">
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8">
						<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
							<div class="row" id="enriching_lives_financial">
								<div class="space-40"></div>
								<p class="enriching_lives_financial">
									Enriching Lives through Financial Inclusion
								</p>
								<div class="row">
									<p>Financial inclusion is a powerful catalyst for sustainability and holds paramount importance in the present day. The Myanmar Government is placing a heightened focus on financial inclusion to enhance the quality of life of its citizens. Financial institutions, such as ours, have a crucial role in providing individuals and businesses with access to practical and affordable financial products and services.</p>
									<p>With this in mind, we consistently strive to develop fundamental financial products and services that cater to as many people in the community as possible, providing access to credit cards, loans, and insurance. From a social responsibility perspective, financial inclusion is crucial and can stimulate sustainable investment and economic growth.</p>
									<p>Linking the unbanked population to the financial system through digital wallets is one straightforward and effective approach. In 2019, we launched the <i>AYA Pay digital wallet</i>, which has brought significant value to both unbanked and underbanked populations. Enhancing financial inclusion through e-wallets can result in tangible social impacts. Emerging technologies such as <i>AYA QR</i> codes have been introduced to facilitate seamless online payments for customers.</p>
								</div>
							</div>

							<div class="row" id="championing_human_rights">
								<div class="space-40"></div>
								<p class="championing_human_rights">
									Championing Human Rights - Fundamental for a Prosperous Future!
								</p>
								<p>At AYA Bank, we believe that respect for human rights is vital to achieving successful and sustainable social development. We consider it imperative to integrate human rights considerations into all of our operations. AYA Bank adheres to its own Human Rights Policy and Code of Ethical Conduct, inspired by the Universal Declaration of Human Rights and the Ten Principles of the United Nations Global Compact. In line with these robust policies, we commit to upholding human rights in all aspects of our business, with key stakeholders being:</p>

								<div class="space-20"></div>
								<div style="display: flex; align-items: center; width:500px">
									<img src="{{ url('/images/about-aya/sustainability/social_for_employee.webp') }}" class="img-fluid social_sustainability_icon" width="100" height="100">
									&nbsp;&nbsp;<p class="mb-10 fw-semibold" style="margin-right: 20px">For Employees</p>
								</div>
								<p>Elements of the human rights policy are included in staff orientation and training sessions, along with workplace ethics and non-discrimination policies. We have established a Standard Operating Procedure (SOP) on how to address human rights violations. A whistle-blowing policy is in place to report any misconduct or malpractice by employees. A dedicated HR committee regularly reviews grievance reports to ensure compliance and take necessary action.</p>

								<div class="space-30"></div>
								<div style="display: flex; align-items: center; width:500px">
									<img src="{{ url('/images/about-aya/sustainability/social_for_customer.webp') }}" class="img-fluid social_sustainability_icon">
									&nbsp;&nbsp;<p class="mb-10 fw-semibold" style="margin-right: 20px">For Customers</p>
								</div>
								<p>We give due consideration to our customers' interests and treat them fairly. AYA Bank's external grievance handling procedure allows customers to formally raise grievances related to the Bank's staff or service, thereby identifying, and improving problematic areas to enhance the customer experience in the future. A grievance hotline has been established for human rights grievances, and customers are encouraged to report any suspected violation of human rights through an established channel.</p>

								<div class="space-30"></div>
								<div style="display: flex; align-items: center; width:500px">
									<img src="{{ url('/images/about-aya/sustainability/social_for_community.webp') }}" class="img-fluid social_sustainability_icon">
									&nbsp;&nbsp;<p class="mb-10 fw-semibold" style="margin-right: 20px">For Community</p>
								</div>
								<p>We urge our staff to interact with the community in a way that respects human rights and recognizes diverse cultures. Our CSR initiatives aim to support communities across various regions of Myanmar with diverse cultural backgrounds. AYA Bank is the first bank to voluntarily undergo a human rights audit and implement recommendations from the ILO (International Labour Organization). The Bank will continue to promote and advocate for human rights norms, upholding fundamental human rights for all our stakeholders.</p>
							</div>

							<div class="row" id="business_ethics">
								<div class="space-40"></div>
								<p class="business_ethics">
									Business Ethics - An Imperative Competence
								</p>
								<div class="row">
									<p>Ethics form the bedrock of societal functioning. We firmly believe that our business ethics guide our employees' behavior. We have demonstrated our commitment to conducting business in an upright manner. The Bank has implemented an <a href="{{ url ('about-aya/governance/corporate-governance#code-ethical-conduct')}}"><b>ethical code of conduct</b></a> to foster integrity among our key stakeholders, such as employees, investors, and consumers, and continues to cultivate this culture. It's vital that our employees are committed to making ethical decisions.</p>
									<p>By promoting a culture of awareness among employees, their everyday behaviors, attitudes, and policies positively shape the work environment. We aim to create ethical workplaces where "High Integrity and Honesty" are the second-most important for us, next to professionalism.</p>
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
	var sc_width = $(window).width();

	if (sc_width <= '576') {
		$("#enriching_lives_financial").removeClass('d-none');
  		$("#championing_human_rights").removeClass('d-none');
  		$("#business_ethics").removeClass('d-none');
	} else {
		if (last_part == 'enriching_lives_financial') {
			$(".nav-link").removeClass('active');
	  		$("#enriching_lives_financial_link").addClass('active');
	  		$("#enriching_lives_financial").removeClass('active');
	  		$("#championing_human_rights").addClass('active');
	  		$("#business_ethics").addClass('active');
	  	}

	  	if (last_part == 'championing_human_rights') {
	  		$(".nav-link").removeClass('active');
	  		$("#championing_human_rights_link").addClass('active');
	  		$("#championing_human_rights").removeClass('');
	  		$("#enriching_lives_financial").addClass('');
	  		$("#business_ethics").addClass('');
	  	}

	  	if (last_part == 'business_ethics') {
			$(".nav-link").removeClass('active');
	  		$("#business_ethics_link").addClass('active');
	  		$("#business_ethics").removeClass('');
	  		$("#championing_human_rights").addClass('');
	  		$("#enriching_lives_financial").addClass('');
	  	}
	}

  	$(".nav-link").click(function(e) {
		$(".nav-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (sc_width <= '576') {
			$("#enriching_lives_financial").removeClass('d-none');
	  		$("#championing_human_rights").removeClass('d-none');
	  		$("#business_ethics").removeClass('d-none');
		} else {
			if (nav_link_href == '#enriching_lives_financial') {
		  		$("#enriching_lives_financial_link").addClass('active');
		  		$("#enriching_lives_financial").removeClass('');
		  		$("#championing_human_rights").addClass('');
		  		$("#business_ethics").addClass('');
		  	}

		  	if (nav_link_href == '#championing_human_rights') {
		  		$("#championing_human_rights_link").addClass('active');
		  		$("#championing_human_rights").removeClass('');
		  		$("#enriching_lives_financial").addClass('');
		  		$("#business_ethics").addClass('');
		  	}

		  	if (nav_link_href == '#business_ethics') {
		  		$("#business_ethics_link").addClass('active');
		  		$("#business_ethics").removeClass('');
		  		$("#championing_human_rights").addClass('');
		  		$("#enriching_lives_financial").addClass('');
		  	}
		}
	});

	// $(".nav-link").click(function() {
	// 	$(".nav-link").addClass('active');
	// 	$(".nav-link").not(this).removeClass('active');
	// });

	// $(".side-link").click(function(e) {
	// 	$(".side-link").removeClass('active');

	// 	var nav_link_href = $(this).attr('href');

	// 	if (nav_link_href == '#enriching_lives_financial') {
	//   		$("#enriching_lives_financial_link").addClass('active');
	//   	}

	// 	  if (nav_link_href == '#championing_human_rights') {
	//   		$("#championing_human_rights_link").addClass('active');
	//   	}


	//   	if (nav_link_href == '#business_ethics') {
	//   		$("#business_ethics_link").addClass('active');
	//   	}
	// });

	// if (last_part == 'enriching_lives_financial') {
	// 	$(".side-link").removeClass('active');
  	// 	$("#enriching_lives_financial_link").addClass('active');
  	// }

	//   if (last_part == 'championing_human_rights') {
	// 	$(".side-link").removeClass('active');
  	// 	$("#championing_human_rights_link").addClass('active');
  	// }
	 

  	// if (last_part == 'business_ethics') {
  	// 	$(".side-link").removeClass('active');
  	// 	$("#business_ethics_link").addClass('active');
  	// }

	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var enriching_lives_financial_section = $("#enriching_lives_financial");
		if (scrollTop > enriching_lives_financial_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#enriching_lives_financial_link").addClass('active');
		}

		var championing_human_rights_section = $("#championing_human_rights");
		if (scrollTop > championing_human_rights_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#championing_human_rights_link").addClass('active');
		}

		var business_ethics_section = $("#business_ethics");
		if (scrollTop > business_ethics_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#business_ethics_link").addClass('active');
		}
	});

	$(".apply-tab-link").click(function() {
		$(".apply-tab-link").addClass('active');
		$(".apply-tab-link").not(this).removeClass('active');
	});

	var swiper = new Swiper(".slide-content", {
		slidesPerView: 3,
		spaceBetween: 0,
		loop: true,
		centeredSlides: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			1000: {
				slidesPerView: 2,
			},
			1500: {
				slidesPerView: 3,
			},
		},
	});
</script>

@endsection('content')