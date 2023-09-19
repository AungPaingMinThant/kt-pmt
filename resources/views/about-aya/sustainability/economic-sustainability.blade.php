@extends('layouts.frontend-app')

@section('title', 'Economic Sustainability – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/sustainability.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'economic_sustainability'])

			<div class="space-60"></div>
			<div class="container">
				<div class="row">
					<p>We firmly believe that the essence of economic sustainability in business involves conducting our operations responsibly, optimizing our bottom line without inflicting harm on the environment and society that surround us. It is our mission to create a business model that is not only profitable for the Bank but also holds itself accountable, adheres to ethical standards, and contributes positively to society and the environment.</p>
					<p>In every facet of our operations, we exemplify our commitment to responsible functioning and positive impact generation. Our focus is on fostering the long-term social, cultural, and financial wellbeing of Myanmar by incorporating elements like:</p>

					<ul style="list-style: disc;margin-left: 25px;width: 90%;">
						<li>Long-term planning</li>
						<li>Cost optimization</li>
						<li>Empowering Myanmar's Small and Medium Enterprises (SMEs)</li>
						<li>Focusing on retail banking</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-4 d-none d-sm-block">
						<div class="space-40"></div>
						<nav id="myScrollspy">
							<ul class="nav nav-pills flex-column side_bar">
								<li class="nav-item">
									<a class="nav-link active" id="long_term_planning_cornerstone_sustainability_link" href="#long_term_planning_cornerstone_sustainability">
										<span class="pr-5">Long-term Planning - The Cornerstone of Sustainability</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="cost_optimization_key_driver_towards_sustainability_link" href="#cost_optimization_key_driver_towards_sustainability">
										<span>Cost Optimization - A Key Driver towards Sustainability</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="empowering_micro_small_medium_enterprises_overcome_economic_challenges_link" href="#empowering_micro_small_medium_enterprises_overcome_economic_challenges">
										<span>Empowering Micro, Small, and Medium Enterprises – Overcome Economic Challenges</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="focus_retail_banking_tailoring_services_customers_needs_link" href="#focus_retail_banking_tailoring_services_customers_needs">
										<span>Focus on Retail Banking - Tailoring Services to Customers' Needs</span>
										<hr class="nav-item-separate">
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8">
						<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
							<div class="row" id="long_term_planning_cornerstone_sustainability">
								<div class="space-40"></div>
								<p class="long_term_planning_cornerstone_sustainability">
									Long-term Planning - The Cornerstone of Sustainability
								</p>
								<div class="row">
									<p>We are committed to paving a path for sustainable and equitable development, leading to opportunities for the communities we serve. This involves setting clear goals, charting the Bank's roadmap, and driving long-term economic sustainability initiatives. We are vigilant in identifying potential risks and opportunities while maintaining effective relationship-building and strategic communications with key internal and external stakeholders.</p>
									<p>This ensures that the Bank's long-term strategic objectives are seamlessly integrated and realized across all our business operations.</p>
								</div>
							</div>

							<div class="row" id="cost_optimization_key_driver_towards_sustainability">
								<div class="space-40"></div>
								<p class="cost_optimization_key_driver_towards_sustainability">
									Cost Optimization - A Key Driver towards Sustainability
								</p>
								<p>In competent organizational management, sustainability and cost optimization complement each other. Particularly in stringent economic conditions, strategic cost optimization becomes critical to accelerate progress towards sustainability goals. We conduct comprehensive financial impact analysis, assessing cost-effectiveness, performance optimization, and growth potential.</p>
								<p>By harmonizing business objectives with budget considerations, we endeavor to create a cost-effective operational environment, continuously seeking ways to cut unnecessary expenditures and enhance operational efficiencies.</p>
							</div>

							<div class="row" id="empowering_micro_small_medium_enterprises_overcome_economic_challenges">
								<div class="space-40"></div>
								<p class="empowering_micro_small_medium_enterprises_overcome_economic_challenges">
									Empowering Micro, Small, and Medium Enterprises – Overcome Economic Challenges
								</p>
								<div class="row">
									<p>We acknowledge that MSMEs form the nation's primary economic engine, serving as significant drivers of employment generation and development. Their economic and social impact on the community is profound. Myanmar, rich in natural resources and primarily reliant on agriculture and livestock breeding, can reap tremendous benefits if MSMEs efficiently utilize these resources.</p>
									<p>In our mission to stimulate the nation's economy and catalyze the progressive growth of MSMEs, we are dedicated to ensuring smooth business operations and enhancing capital availability for MSMEs.</p>
								</div>
							</div>

							<div class="row" id="focus_retail_banking_tailoring_services_customers_needs">
								<div class="space-40"></div>
								<p class="focus_retail_banking_tailoring_services_customers_needs">
									Focus on Retail Banking - Tailoring Services to Customers' Needs
								</p>
								<div class="row">
									<p>The retail banking sector in Myanmar is evolving rapidly. We are committed to offering an extensive range of retail banking services as a "One-stop-shop retail banking destination" that caters to the public's needs, both in developed and emerging markets. With a robust network of 262 branches nationwide, we ensure on-site customer service for all retail banking requirements.</p>
									<p>In this digital age, we stay abreast of technological changes and offer our services through online portals and mobile applications, thereby limiting the necessity for customers to visit branches physically and influencing key investment decisions for the Bank.</p>
								</div>
								<div class="space-100" style="height: 150px"></div>
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
		$("#long_term_planning_cornerstone_sustainability").removeClass('d-none');
  		$("#cost_optimization_key_driver_towards_sustainability").removeClass('d-none');
  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").removeClass('d-none');
  		$("#focus_retail_banking_tailoring_services_customers_needs").removeClass('d-none');
  		$("#combating_air_pollution").removeClass('d-none');
  		$("#embrace_digitalization_protect").removeClass('d-none');
  		$("#recovering_impact_digital_transformation").removeClass('d-none');
	} else {
		if (last_part == 'long_term_planning_cornerstone_sustainability') {
			$(".nav-link").removeClass('active');
	  		$("#long_term_planning_cornerstone_sustainability_link").addClass('active');
	  		$("#long_term_planning_cornerstone_sustainability").removeClass('');
	  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
	  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
	  		$("#combating_air_pollution").addClass('');
	  		$("#embrace_digitalization_protect").addClass('');
	  		$("#recovering_impact_digital_transformation").addClass('');
	  	}

	  	if (last_part == 'cost_optimization_key_driver_towards_sustainability') {
	  		$(".nav-link").removeClass('active');
	  		$("#cost_optimization_key_driver_towards_sustainability_link").addClass('active');
	  		$("#cost_optimization_key_driver_towards_sustainability").removeClass('');
	  		$("#long_term_planning_cornerstone_sustainability").addClass('');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
	  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
	  		$("#combating_air_pollution").addClass('');
	  		$("#embrace_digitalization_protect").addClass('');
	  		$("#recovering_impact_digital_transformation").addClass('');
	  	}

	  	if (last_part == 'empowering_micro_small_medium_enterprises_overcome_economic_challenges') {
			$(".nav-link").removeClass('active');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges_link").addClass('active');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").removeClass('');
	  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
	  		$("#long_term_planning_cornerstone_sustainability").addClass('');
	  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
	  		$("#combating_air_pollution").addClass('');
	  		$("#embrace_digitalization_protect").addClass('');
	  		$("#recovering_impact_digital_transformation").addClass('');
	  	}

	  	if (last_part == 'focus_retail_banking_tailoring_services_customers_needs') {
			$(".nav-link").removeClass('active');
			$("#focus_retail_banking_tailoring_services_customers_needs_link").addClass('active');
			$("#focus_retail_banking_tailoring_services_customers_needs").removeClass('');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
	  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
	  		$("#long_term_planning_cornerstone_sustainability").addClass('');
	  		$("#combating_air_pollution").addClass('');
	  		$("#embrace_digitalization_protect").addClass('');
	  		$("#recovering_impact_digital_transformation").addClass('');
	  	}
	}

  	$(".nav-link").click(function(e) {
		$(".nav-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (sc_width <= '576') {
			$("#long_term_planning_cornerstone_sustainability").removeClass('d-none');
	  		$("#cost_optimization_key_driver_towards_sustainability").removeClass('d-none');
	  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").removeClass('d-none');
	  		$("#focus_retail_banking_tailoring_services_customers_needs").removeClass('d-none');
	  		$("#combating_air_pollution").removeClass('d-none');
	  		$("#embrace_digitalization_protect").removeClass('d-none');
	  		$("#recovering_impact_digital_transformation").removeClass('d-none');
		} else {
			if (nav_link_href == '#long_term_planning_cornerstone_sustainability') {
		  		$("#long_term_planning_cornerstone_sustainability_link").addClass('active');
		  		$("#long_term_planning_cornerstone_sustainability").removeClass('');
		  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
		  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
		  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
		  		$("#combating_air_pollution").addClass('');
		  		$("#embrace_digitalization_protect").addClass('');
		  		$("#recovering_impact_digital_transformation").addClass('');
		  	}

		  	if (nav_link_href == '#cost_optimization_key_driver_towards_sustainability') {
		  		$("#cost_optimization_key_driver_towards_sustainability_link").addClass('active');
		  		$("#cost_optimization_key_driver_towards_sustainability").removeClass('');
		  		$("#long_term_planning_cornerstone_sustainability").addClass('');
		  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
		  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
		  		$("#combating_air_pollution").addClass('');
		  		$("#embrace_digitalization_protect").addClass('');
		  		$("#recovering_impact_digital_transformation").addClass('');
		  	}

		  	if (nav_link_href == '#empowering_micro_small_medium_enterprises_overcome_economic_challenges') {
		  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges_link").addClass('active');
		  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").removeClass('');
		  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
		  		$("#long_term_planning_cornerstone_sustainability").addClass('');
		  		$("#focus_retail_banking_tailoring_services_customers_needs").addClass('');
		  		$("#combating_air_pollution").addClass('');
		  		$("#embrace_digitalization_protect").addClass('');
		  		$("#recovering_impact_digital_transformation").addClass('');
		  	}

		  	if (nav_link_href == '#focus_retail_banking_tailoring_services_customers_needs') {
				$("#focus_retail_banking_tailoring_services_customers_needs_link").addClass('active');
				$("#focus_retail_banking_tailoring_services_customers_needs").removeClass('');
		  		$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges").addClass('');
		  		$("#cost_optimization_key_driver_towards_sustainability").addClass('');
		  		$("#long_term_planning_cornerstone_sustainability").addClass('');
		  		$("#combating_air_pollution").addClass('');
		  		$("#embrace_digitalization_protect").addClass('');
		  		$("#recovering_impact_digital_transformation").addClass('');
		  	}
		}
	});

	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var long_term_planning_cornerstone_sustainability_section = $("#long_term_planning_cornerstone_sustainability");
		if (scrollTop > long_term_planning_cornerstone_sustainability_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#long_term_planning_cornerstone_sustainability_link").addClass('active');
		}

		var cost_optimization_key_driver_towards_sustainability_section = $("#cost_optimization_key_driver_towards_sustainability");
		if (scrollTop > cost_optimization_key_driver_towards_sustainability_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#cost_optimization_key_driver_towards_sustainability_link").addClass('active');
		}

		var empowering_micro_small_medium_enterprises_overcome_economic_challenges_section = $("#empowering_micro_small_medium_enterprises_overcome_economic_challenges");
		if (scrollTop > empowering_micro_small_medium_enterprises_overcome_economic_challenges_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#empowering_micro_small_medium_enterprises_overcome_economic_challenges_link").addClass('active');
		}

		var focus_retail_banking_tailoring_services_customers_needs_section = $("#focus_retail_banking_tailoring_services_customers_needs");
		if (scrollTop > focus_retail_banking_tailoring_services_customers_needs_section.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#focus_retail_banking_tailoring_services_customers_needs_link").addClass('active');
		}
	});
	// $(".apply-tab-link").click(function() {
	// 	$(".apply-tab-link").addClass('active');
	// 	$(".apply-tab-link").not(this).removeClass('active');
	// });
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
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 3,
			},
		},
	});
</script>

@endsection('content')