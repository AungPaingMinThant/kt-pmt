@extends('layouts.frontend-app')

@section('title', 'Compliance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">
<style type="text/css">
	.sidebar-box {
		max-height: 60px;
		position: relative;
		overflow: hidden;
	}
	.sidebar-box .read-more { 
		position: absolute; 
		bottom: 0; 
		left: 0;
		width: 100%; 
		text-align: left; 
		margin: 0; padding: 30px 0 0 0; 
		color: #A5000B;
		/* "transparent" only works here because == rgba(0,0,0,0) */
		background-image: linear-gradient(to bottom, transparent, #fff);
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'compliance'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="col-md-12">
					<h4 class="fw-bold">Compliance</h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Compliance is a crucial function within AYA Bank, responsible for closely monitoring the Bank's financial services businesses to ensure they adhere to regulations and internal controls. The primary objective of the compliance department is to measure and manage the risks faced by the bank while protecting the interests of investors and depositors. By doing so, it aims to mitigate business risks and combat financial crime effectively. Moreover, the compliance department identifies potential risks that the bank may face and provides advice on how to prevent or address them.</p>
						<p>To establish a strong compliance framework, AYA Bank has implemented a comprehensive approach, policies, and functions that encompass fundamental principles, legal and regulatory compliance, and financial reporting. These guidelines are followed by the board, management, and staff to ensure consistent adherence to compliance standards. The independent compliance function serves as a key component of the bank's second line of defense, monitoring and verifying that the bank operates with integrity and complies with applicable laws, regulations, and internal policies. Periodic reviews of the compliance function's effectiveness are conducted, which include assessing the bank's compliance with laws and regulations set by the Central Bank of Myanmar (CBM), as well as the outcomes of management investigations and follow-ups on fraudulent acts or instances of non-compliance. The department also examines any findings from regulatory agency examinations and significant correspondences with such agencies.</p>
						<p>The compliance function not only focuses on risk management but also acts as a point of contact within the Bank for compliance queries from staff members. It provides guidance to employees on the proper implementation of compliance measures. Key areas of focus for the compliance function include preventing bribery, money laundering, country sanctions violations, ensuring fair business practices with consumers, and addressing ethical issues that may pose reputational risks to the Bank.</p>
						<div class="space-20"></div>
						<p>To ensure effective compliance, the following key elements and steps are implemented:</p>
					</div>
				</div>
			</div>

			<div class="space-20"></div>

			<div class="row risk_swiper_row">
				<div class="col-md-1" style="position: relative;">
					<div class="swiper-button-prev swiper-navBtn"></div>
				</div>
				<div class="col-md-10">
					<div class="slide-container swiper" style="padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
			            <div class="slide-content slide-content-desktop">
			                <div class="card-wrapper swiper-wrapper risk_swiper">
			                    <div class="card swiper-slide risk_card_swiper_slide slide_1">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/know_your_customer_policy.webp') }}" alt="Know Your Customer Policy" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20 card_detail_info">Know Your Customer Policy</p>
												<div class="sidebar-box sidebar-box-1">
													<p>AYA Bank has a comprehensive Customer Acceptance Policy that takes into account various factors such as customer types, activities, associated accounts, and risk indicators. This policy includes a detailed description of customers based on their associated risks.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="know_your_customer_policy_show_more"><a class="theme_text_color">Show More</a></p>	
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_2">
			                    	<div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/customer_due_diligence_measures.webp') }}" alt="Risk Management Framework" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Customer Due Diligence Measures</p>
												<div class="sidebar-box sidebar-box-2">
													<p>Customer Due Diligence is a vital process at AYA Bank, involving a systematic procedure to assess potential risks associated with doing business with an organization or individual. This includes verifying the identity of new customers, establishing ownership structures, collecting information about customer activities and markets, and identifying other entities with which a customer conducts business.</p>
													<p class="read-more"><a class="button know_your_customer_policy_btn">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="due_diligence_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_3">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/on_going_monitoring.webp') }}" alt="Risk Management Control" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">On-Going Monitoring of High-Risk Transactions and Accounts</p>
												<div class="sidebar-box sidebar-box-3">
													<p>A risk-based approach is employed to monitor high-risk transactions or customers, specifically targeting money laundering and terrorist financing activities. By understanding the normal and reasonable account activity of customers, the bank can identify and investigate unusual or suspicious patterns of activity.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="ongoing_monitoring_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_4">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/reporting_suspicious.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Reporting of Suspicious Transactions</p>
												<div class="sidebar-box sidebar-box-4">
													<p>AYA Bank adheres to legal requirements and promptly files suspicious transaction reports when necessary. Designated officers within the Bank report any detected suspicious transactions or transactions believed to be related to criminal activity based on reasonable grounds.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="reporting_suspicious_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_5">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/reporting_suspicious_transaction.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Record Keeping of Suspicious Transactions</p>
												<div class="sidebar-box sidebar-box-5">
													<p>The Bank maintains detailed records of suspicious transactions, along with relevant investigation details and decisions made. These records are retained for the required period, in accordance with the Bank's policy and regulatory requirements.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="reporting_suspicious_transaction_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_6">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/compliance_officer.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Appointing Compliance Officers</p>
												<div class="sidebar-box sidebar-box-6">
													<p>Compliance Officers are appointed in all departments and branches of the Bank. Their responsibilities include establishing and maintaining internal policies, procedures, and compliance manuals. Compliance Officers play a crucial role in identifying and mitigating noncompliance risks, both externally and internally. They constantly report to management on the organization's compliance with laws and regulations and ensure that employees are aware of their obligations to comply with internal and external requirements.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="compliance_officer_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_7">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/risk_compliance_training.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Effective Risk and Compliance Training</p>
												<div class="sidebar-box sidebar-box-7">
													<p>AYA Bank recognizes the dynamic nature of the financial industry and the need to stay updated on emerging risks and regulations. The Bank designs training programs to reduce risks, enhance workforce efficiency, and ensure employees are well-versed in banking sector developments. Continuous training and seminars on risk and compliance are provided to help employees detect and report suspicious activities, including predicate offenses to money laundering and terrorist financing. </p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="risk_compliance_training_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_8">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/audits.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Independent Audits</p>
												<div class="sidebar-box sidebar-box-8">
													<p>AYA Bank's Internal Audit Team plays a vital role in proactively identifying and assessing potential risks, weaknesses, and noncompliance situations. They collaborate with all departments and branches across the country to enforce compliance and evaluate the effectiveness of applying anti-money laundering and combating the financing of terrorism (AML/CFT) guidelines and relevant laws on an annual basis.</p>
													<p class="read-more"><a class="button">&nbsp;</a></p>
												</div>

												<div class="space-30"></div>
												<p class="audits_show_more"><a class="theme_text_color">Show More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <p style="padding-left: 20px;margin-top: -40px;">By diligently implementing these compliance measures, AYA Bank aims to foster a culture of integrity, maintain the trust of its customers and stakeholders, and operate within the boundaries of applicable laws and regulations.</p>	
				</div>
				<div class="col-md-1 col-md-1-sec" style="position: relative;">
					<div class="swiper-button-next swiper-navBtn" ></div>
				</div>
				<div class="col-md-12 text-center mobile_navBtn" style="position: relative;">
					<div class="swiper-button-prev swiper-navBtn"></div>
					<div class="swiper-button-next swiper-navBtn"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 3,
		spaceBetween: 5,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-desktop",
			clickable: true,
			dynamicBullets: true,
			loop: true,
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
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,	
			},
		},
	});

	var $el, $ps, $up, totalHeight;

	$(".know_your_customer_policy_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-1 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-1 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".know_your_customer_policy_show_more").addClass('d-none');
		return false;

	});

	$(".due_diligence_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-2 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-2 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".due_diligence_show_more").addClass('d-none');
		return false;

	});

	$(".ongoing_monitoring_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-3 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-3 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".ongoing_monitoring_show_more").addClass('d-none');
		return false;

	});

	$(".reporting_suspicious_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-4 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-4 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".reporting_suspicious_show_more").addClass('d-none');
		return false;

	});

	$(".reporting_suspicious_transaction_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-5 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-5 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".reporting_suspicious_transaction_show_more").addClass('d-none');
		return false;

	});

	$(".compliance_officer_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-6 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-6 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".compliance_officer_show_more").addClass('d-none');
		return false;

	});

	$(".risk_compliance_training_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-7 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-7 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".risk_compliance_training_show_more").addClass('d-none');
		return false;

	});

	$(".audits_show_more").click(function() {
		totalHeight = 0

		$el = $(".sidebar-box-8 .button");
		$p  = $el.parent();
		$up = $p.parent();
		$ps = $up.find("p:not('.read-more')");

		$ps.each(function() {
			totalHeight += $(".sidebar-box-8 .button").outerHeight();
		});
	    
		$up.css({
	  		"height": 'auto',
	  		"max-height": 9999
		}).animate({
	  		"height": 'auto'
		});

		$p.fadeOut();

		$(".audits_show_more").addClass('d-none');
		return false;

	});

</script>

@endsection('content')