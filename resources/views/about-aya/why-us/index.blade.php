@extends('layouts.frontend-app')

@section('title', 'Why Us – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/why-us.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'why_us'])

			<div class="space-80"></div>

			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row digitalize_end_to_end_process_row">
						<div class="col-md-8 digitalize_end_to_end_process_desc">
							<p class="fw-bold" style="font-size: 20px;">Digitalize End-to-End Process</p>
							<p class="mb-30">While digitalization continues to grow significantly in every industry, we venture into full digitization banking solutions to stay ahead of changing environment. Our in-depth industrial knowledge and technical experience helps digital transformation journey of integrating technology into all areas of the bank, optimizing operations and value delivery to customers. Having the technology in hand, new digital innovations are unlocked to offer banking solutions seamlessly woven into daily life.</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="digitize_fact">
										Rolled out online banking services to have round-the-clock access to the Bank
									</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="digitize_fact">
										Adoption of Straight-Through Processing to increase speed and efficiency in international payments
									</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="digitize_fact">
										Digitized and streamlined loan process to provide easy and instant loan in principle approval.
									</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="digitize_fact">
										Faster, simpler, safer, and trusted payment gateway for overseas payments to enhance e-commerce experience 
									</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="digitize_fact">
										Safeguard your wealth and lock out financial criminals using industry-leading data science tools and expert analysts
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 digitalize_end_to_end_process"></div>
					</div>
				</div>
			</div>
			<div class="space-60"></div>

			<div class="container section_1">
				<div class="col-md-12">
					<p class="fw-bold" style="font-size: 20px;">Positive Impact on Communities</p>
				</div>
			</div>
			<div class="CTA_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 consumer_banking_improve_lifestyle"></div>
						<div class="col-md-8 CTA_detail_col_2">
							<p class="f-white fw-semibold" style="font-size: 18px;">Consumer Banking to Improve Lifestyle </p>
							<p class="f-white">AYA Bank offers borrowing power to the local community by indulging in the various money lending activities. Families and individuals enjoy our consumer loans with affordable interest rates, and a range of choices from authorized dealers and partner institutions.</p>
							<p class="f-white">
								With AYA consumer banking solutions, you can improve your life style in many ways to,
								<ul class="f-white" style="list-style: disc;">
									<li class="mb-10">Turn your dream home into reality</li>
									<li class="mb-10">Own the vehicle of your choice</li>
									<li class="mb-10">Plan your child's education journey to build better future</li>
								</ul>
							</p>
							<p class="f-white mb-0">AYA Bank will plan the finance for you to find better choices and move on smart living.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="space-60"></div>

			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row customized_solutions_row">
						<div class="col-md-8 customized_solutions_manage_your_finance_desc">
							<p class="theme_text_color fw-semibold" style="font-size: 18px;"> Customized solutions to manage your finance</p>
							<p class="mb-30">Where are you in your financial journey? Your finances may be complex, or your requirements may be specific. To address your unique personal and business objectives, AYA Bank offers a full range of banking products, innovative financing options and exclusive benefits.  We work to understand your assets, needs and goals, then provide the right level of support to help you move forward. We have customized products and services where you can</p>
							<p>
								<ul style="list-style: disc;">
									<li class="mb-10">Choose the right credit card with different limits and offers</li>
									<li class="mb-10">Use our premium banking services for exclusive benefits beyond banking</li>
									<li class="mb-10">Reach our dedicated relationship managers to evaluate your specific needs and help you reach your business goals with banking support</li>
								</ul>
							</p>
						</div>
						<div class="col-md-4 customized_solutions_manage_your_finance"></div>
					</div>
				</div>
			</div>
			<div class="space-60"></div>
			
			<div class="we_put_people_first">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-8 we_put_people_first_desc">
						<div class="row we_put_people_first_desc_row">
							<p class="f-white fw-semibold" style="font-size: 18px;">We Put People First</p>
							<p class="f-white">As well as unlocking values in banking, we incorporate people first approach in our strategic direction.</p>
							<p class="f-white mb-0">
								<ul class="f-white we_put_people_first_fact">
									<li class="mb-10">With more than 250 branches across the country and our extensive network, we create job opportunities for the communities where we operate. We nurture talents, build expertise and fuel their growth.  We build the environment which constantly develop leaders as well as equip employees with the skills, knowledge, and attitudes they need.</li>
									<li class="mb-10">We are committed to contribute to society through a vast library of insights on financial markets, and the socio economy. We develop a wide range of corporate social responsibility programs covering a broad spectrum of compiled social, economic, and environmental issues.</li>
									<li class="mb-0">AYA Bank's business encourages strategically re-align products, services, and operations with responsible behaviors. Accordingly, utilization of skills, resources, and management capability leads to sustainable social progress. We provide facility of financing to consumers in both upturns and downturns. In response to the economic impacts stemming from COVID-19 pandemic, we lowered interest rates, waive certain penalties to reduce the burden on borrowers. </li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="we_put_people_first_1020">
				<div class="row">
					<div class="col-md-4 we_put_people_first_img">
						<!-- <img src="{{ url('/images/about-aya/why-us/We_Put_People_First.webp') }}" class="img-fluid"> -->
					</div>
					<div class="col-md-8">
						<div class="row we_put_people_first_desc_row">
							<p class="f-white fw-semibold" style="font-size: 18px;">III. We Put People First</p>
							<p class="f-white">As well as unlocking values in banking, we incorporate people first approach in our strategic direction.</p>
							<p class="f-white mb-0">
								<ul class="f-white we_put_people_first_fact">
									<li class="mb-10">With more than 250 branches across the country and our extensive network, we create job opportunities for the communities where we operate. We nurture talents, build expertise and fuel their growth.  We build the environment which constantly develop leaders as well as equip employees with the skills, knowledge, and attitudes they need.</li>
									<li class="mb-10">We are committed to contribute to society through a vast library of insights on financial markets, and the socio economy. We develop a wide range of corporate social responsibility programs covering a broad spectrum of compiled social, economic, and environmental issues.</li>
									<li class="mb-0">AYA Bank's business encourages strategically re-align products, services, and operations with responsible behaviors. Accordingly, utilization of skills, resources, and management capability leads to sustainable social progress. We provide facility of financing to consumers in both upturns and downturns. In response to the economic impacts stemming from COVID-19 pandemic, we lowered interest rates, waive certain penalties to reduce the burden on borrowers. </li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')