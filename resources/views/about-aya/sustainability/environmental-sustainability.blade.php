@extends('layouts.frontend-app')

@section('title', 'Environmental Sustainability – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/sustainability.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'environmental_sustainability'])

			<div class="space-20"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 d-none d-sm-block">
						<div class="space-40"></div>
						<nav id="myScrollspy">
							<ul class="nav nav-pills flex-column side_bar">
								<li class="nav-item">
									<a class="nav-link active" id="reaffirming_commitment_link" href="#reaffirming_commitment">
										<span class="pr-5">Reaffirming our Commitment</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="join_us_making_difference_link" href="#join_us_making_difference">
										<span>Join us in Making a Difference!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="leading_charge_green_financing_link" href="#leading_charge_green_financing">
										<span>Leading the Charge in Green Financing!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="planting_trees_future_generations_link" href="#planting_trees_future_generations">
										<span>Planting Trees for Future Generations!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="combating_air_pollution_link" href="#combating_air_pollution">
										<span>Combating Air Pollution Actively!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="embrace_digitalization_protect_link" href="#embrace_digitalization_protect">
										<span>Embrace Digitalization and Protect the Planet!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="recovering_impact_digital_transformation_link" href="#recovering_impact_digital_transformation">
										<span>Recovering the Impact of Digital Transformation!</span>
										<hr class="nav-item-separate">
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8">
						<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
							<div class="row" id="reaffirming_commitment">
								<div class="space-40"></div>
								<p class="reaffirming_commitment">
									Reaffirming our Commitment
								</p>
								<div class="row">
									<p>We are acutely aware that our business activities may directly or indirectly affect the environment. This encompasses our operations as well as broader concerns such as land and energy consumption, waste management, and water and air pollution. To maintain an ecological balance and safeguard the environment, we are committed to adopting eco-friendly technologies and products and actively participating in environmental conservation efforts.</p>
								</div>
							</div>

							<div class="row d-none" id="join_us_making_difference">
								<div class="space-40"></div>
								<p class="join_us_making_difference">
									Join us in Making a Difference!
								</p>
								<p>Saving the Earth may seem like a formidable task for an individual, but it can be accomplished collectively. We prompt everyone to initiate environmentally friendly practices and become advocates for the environment. In our business operations, we need to ensure that we consume natural resources such as materials, land, water, and fossil fuels at a sustainable rate, keeping in mind the scarcity of these resources. We are wholly dedicated to enhancing environmental performance across all our business activities and invite our business partners and the broader community to collaborate in this endeavor.</p>

								<p>Our environmental corporate social responsibility activities aim to mitigate any adverse effects on the environment from our business operations. We adhere to the highest environmental standards in all areas of operation, consistently meeting and surpassing all relevant legislative requirements.</p>
							</div>

							<div class="row d-none" id="leading_charge_green_financing">
								<div class="space-40"></div>
								<p class="leading_charge_green_financing">
									Leading the Charge in Green Financing!
								</p>
								<div class="row">
									<p>The financial sector plays a pivotal role in combating climate change and fostering sustainable environmental development. We stand ready to facilitate and stimulate green financing in Myanmar. We urge our SMEs and individual customers to embrace opportunities to go green by utilizing and implementing eco-friendly products and services.</p>
									<p>This initiative is crucial in mitigating social risks, reducing the carbon footprint of industrial operations and projects, and supporting efforts to curb climate change risk and mitigate the effects of adverse climatic events. It also enables customers to comply with environmental laws and regulations.</p>
								</div>
							</div>

							<div class="row d-none" id="planting_trees_future_generations">
								<div class="space-40"></div>
								<p class="planting_trees_future_generations">
									Planting Trees for Future Generations!
								</p>
								<div class="row">
									<p>Annual tree planting projects at the Bank underscore our commitment to preserving our natural resources. These initiatives contribute to biodiversity conservation and are a testament to our enduring environmental legacy.</p>
									<p>By planting thousands of trees, we aid in the natural sequestration of atmospheric carbon, thereby nurturing a healthy environment and ecosystem.</p>
								</div>
							</div>

							<div class="row d-none" id="combating_air_pollution">
								<div class="space-40"></div>
								<p class="combating_air_pollution">
									Combating Air Pollution Actively!
								</p>
								<div class="row">
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 combating_air_pollution_desc">
										<p>We are committed to preventing air pollution, aiming to address this pressing environmental issue directly. We have implemented measures within our organization to contribute to the prevention of air pollution:</p>
									</div>

									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 combating_air_pollution_desc">
										<p>We provide transport arrangements for our employees and promote carpooling. By reducing individual transportation needs and consequently the amount of fuel combusted, we can decrease the volume of air pollutants released into the atmosphere, thus mitigating air pollution. These alternatives also offer economic efficiency and convenience for daily commuting.</p>
									</div>

									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 combating_air_pollution_desc">
										<p>We advocate for reusing and recycling products. Our daily operations, workplaces, and communication materials incorporate these practices, minimizing waste production.</p>
									</div>
								</div>
							</div>

							<div class="row d-none" id="embrace_digitalization_protect">
								<div class="space-40"></div>
								<p class="embrace_digitalization_protect">
									Embrace Digitalization and Protect the Planet!
								</p>
								<div class="row">
									<p>The waste generated by paper consumption inflicts significant harm on our ecosystem. Minimizing unnecessary paper use is the primary objective of our "<i>Green Office, No Paper!</i>" vision, aiming to mitigate the negative environmental and social impacts of paper consumption. Shifting from paper to digital platforms is an effective strategy to protect the Earth. </p>
									<p>The transition to digitalization has become the new normal in the Myanmar banking industry. We have significantly reduced paperwork in day-to-day operations and enhanced efficiency through digital engagement. In this journey, we encourage customers to go paperless and utilize e-services and online applications. This shift towards paperless document management enables us to deliver seamless customer experiences while saving costs, improving compliance, and fostering an eco-friendly organization.</p>
								</div>
							</div>

							<div class="row d-none" id="recovering_impact_digital_transformation">
								<div class="space-40"></div>
								<p class="recovering_impact_digital_transformation">
									Recovering the Impact of Digital Transformation!
								</p>
								<div class="row">
									<p>Embracing digital transformation presents a wealth of opportunities. By properly leveraging these opportunities, digitalization can be steered towards global sustainability, environmental stewardship, and human welfare. As we strive to create more value with fewer resources and advocate for digital technologies to enhance service efficiency, we are cognizant of their environmental footprint, including high energy consumption and electronic waste associated with new technologies.</p>
									<p>In this respect, we prioritize longevity in our choice of electronic products to curtail electronic waste and conserve valuable resources. We are devoted to the responsible use and disposal of electronic products, not only to decrease the detrimental environmental impact but also to foster an ethic of sustainability in our digital transformation journey.</p>
									<p>We believe that the impact of digitalization should not be considered in isolation but in the context of our broader commitment to environmental sustainability. Our mission goes beyond the implementation of advanced technology solutions; we strive to ensure that these digital changes are in line with our sustainability goals, creating a future that is both technologically advanced and environmentally conscious.</p>
									<p>While reaping the benefits of digitalization, we maintain a holistic approach towards environmental conservation, always remembering that our electronic advancements should serve, and not hinder, our sustainability commitments. We are thus determined to find innovative ways to reduce the negative impacts of digitalization on the environment, setting an example in the industry for sustainable digital practices.</p>
									<p>In essence, while digital transformation promises countless opportunities for increased efficiency and reduced resource usage, it is imperative that we remain mindful of the associated environmental implications. We are committed to balancing the scales between digital innovation and environmental stewardship, continually seeking ways to marry the two in our pursuit of sustainable progress.</p>
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
		$("#reaffirming_commitment").removeClass('d-none');
  		$("#join_us_making_difference").removeClass('d-none');
  		$("#leading_charge_green_financing").removeClass('d-none');
  		$("#planting_trees_future_generations").removeClass('d-none');
  		$("#combating_air_pollution").removeClass('d-none');
  		$("#embrace_digitalization_protect").removeClass('d-none');
  		$("#recovering_impact_digital_transformation").removeClass('d-none');
	} else {
		if (last_part == 'reaffirming_commitment') {
			$(".nav-link").removeClass('active');
	  		$("#reaffirming_commitment_link").addClass('active');
	  		$("#reaffirming_commitment").removeClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#planting_trees_future_generations").addClass('d-none');
	  		$("#combating_air_pollution").addClass('d-none');
	  		$("#embrace_digitalization_protect").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == 'join_us_making_difference') {
	  		$(".nav-link").removeClass('active');
	  		$("#join_us_making_difference_link").addClass('active');
	  		$("#join_us_making_difference").removeClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#planting_trees_future_generations").addClass('d-none');
	  		$("#combating_air_pollution").addClass('d-none');
	  		$("#embrace_digitalization_protect").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == 'leading_charge_green_financing') {
			$(".nav-link").removeClass('active');
	  		$("#leading_charge_green_financing_link").addClass('active');
	  		$("#leading_charge_green_financing").removeClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  		$("#planting_trees_future_generations").addClass('d-none');
	  		$("#combating_air_pollution").addClass('d-none');
	  		$("#embrace_digitalization_protect").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == 'planting_trees_future_generations') {
			$(".nav-link").removeClass('active');
			$("#planting_trees_future_generations_link").addClass('active');
			$("#planting_trees_future_generations").removeClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  		$("#combating_air_pollution").addClass('d-none');
	  		$("#embrace_digitalization_protect").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == '#combating_air_pollution') {
			$("#combating_air_pollution_link").addClass('active');
			$("#combating_air_pollution").removeClass('d-none');
			$("#planting_trees_future_generations").addClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  		$("#embrace_digitalization_protect").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == '#embrace_digitalization_protect') {	  		
			$("#embrace_digitalization_protect_link").addClass('active');
			$("#embrace_digitalization_protect").removeClass('d-none');
			$("#combating_air_pollution").addClass('d-none');
			$("#planting_trees_future_generations").addClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  		$("#recovering_impact_digital_transformation").addClass('d-none');
	  	}

	  	if (last_part == '#recovering_impact_digital_transformation') {	  		
			$("#recovering_impact_digital_transformation_link").addClass('active');
			$("#recovering_impact_digital_transformation").removeClass('d-none');
			$("#embrace_digitalization_protect").addClass('d-none');
			$("#combating_air_pollution").addClass('d-none');
			$("#planting_trees_future_generations").addClass('d-none');
	  		$("#leading_charge_green_financing").addClass('d-none');
	  		$("#join_us_making_difference").addClass('d-none');
	  		$("#reaffirming_commitment").addClass('d-none');
	  	}
	}

  	$(".nav-link").click(function(e) {
		$(".nav-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (sc_width <= '576') {
			$("#reaffirming_commitment").removeClass('d-none');
	  		$("#join_us_making_difference").removeClass('d-none');
	  		$("#leading_charge_green_financing").removeClass('d-none');
	  		$("#planting_trees_future_generations").removeClass('d-none');
	  		$("#combating_air_pollution").removeClass('d-none');
	  		$("#embrace_digitalization_protect").removeClass('d-none');
	  		$("#recovering_impact_digital_transformation").removeClass('d-none');
		} else {
			if (nav_link_href == '#reaffirming_commitment') {
		  		$("#reaffirming_commitment_link").addClass('active');
		  		$("#reaffirming_commitment").removeClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#planting_trees_future_generations").addClass('d-none');
		  		$("#combating_air_pollution").addClass('d-none');
		  		$("#embrace_digitalization_protect").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}

		  	if (nav_link_href == '#join_us_making_difference') {
		  		$("#join_us_making_difference_link").addClass('active');
		  		$("#join_us_making_difference").removeClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#planting_trees_future_generations").addClass('d-none');
		  		$("#combating_air_pollution").addClass('d-none');
		  		$("#embrace_digitalization_protect").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}

		  	if (nav_link_href == '#leading_charge_green_financing') {
		  		$("#leading_charge_green_financing_link").addClass('active');
		  		$("#leading_charge_green_financing").removeClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  		$("#planting_trees_future_generations").addClass('d-none');
		  		$("#combating_air_pollution").addClass('d-none');
		  		$("#embrace_digitalization_protect").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}

		  	if (nav_link_href == '#planting_trees_future_generations') {
				$("#planting_trees_future_generations_link").addClass('active');
				$("#planting_trees_future_generations").removeClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  		$("#combating_air_pollution").addClass('d-none');
		  		$("#embrace_digitalization_protect").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}

		  	if (nav_link_href == '#combating_air_pollution') {
				$("#combating_air_pollution_link").addClass('active');
				$("#combating_air_pollution").removeClass('d-none');
				$("#planting_trees_future_generations").addClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  		$("#embrace_digitalization_protect").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}

		  	if (nav_link_href == '#embrace_digitalization_protect') {	  		
				$("#embrace_digitalization_protect_link").addClass('active');
				$("#embrace_digitalization_protect").removeClass('d-none');
				$("#combating_air_pollution").addClass('d-none');
				$("#planting_trees_future_generations").addClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  		$("#recovering_impact_digital_transformation").addClass('d-none');
		  	}
		  	
		  	if (nav_link_href == '#recovering_impact_digital_transformation') {	  		
				$("#recovering_impact_digital_transformation_link").addClass('active');
				$("#recovering_impact_digital_transformation").removeClass('d-none');
				$("#embrace_digitalization_protect").addClass('d-none');
				$("#combating_air_pollution").addClass('d-none');
				$("#planting_trees_future_generations").addClass('d-none');
		  		$("#leading_charge_green_financing").addClass('d-none');
		  		$("#join_us_making_difference").addClass('d-none');
		  		$("#reaffirming_commitment").addClass('d-none');
		  	}
		}
	});
</script>

@endsection('content')