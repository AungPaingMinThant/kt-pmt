@extends('layouts.frontend-app')

@section('title', 'Message from Chairman – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/message-chairman.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'msg_chairman'])

			<div style="background-color: #f9f9fb;">
				<div class="container">
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Message from Founder Chairman</h4>
							<hr class="bottom_hr">
						</div>
						<div class="row space-30"></div>
						<div class="col-md-12">
							<img src="{{ url('/images/about-aya/corporate-governance/u-zaw.webp') }}" class="img-fluid chairman_image" alt="U Zaw Zaw | Founder Chairman | AYA Bank">
							
							<p class="fw-semibold mt-10">Dear Valued Clients, Shareholders, and Esteemed Partners,</p>
							<!-- <p>As Founder and Chairman of AYA Bank PCL, I warmly welcome you to our website and thank you for your interest in our bank.</p> -->
							<p>We are living in an era of profound and rapid change, where the financial sector is evolving at an unprecedented pace. Faced with this dynamic environment, our journey since inception has been one of perpetual transformation, aligned with our commitment to serving you with exceptional financial products and services.</p>
							<p>At AYA Bank, we understand that our growth is intrinsically linked with the progress of our customers and the broader community we serve. We are steadfast in our goal to elevate Myanmar's banking sector to international standards and provide our customers with world-class banking solutions, all while nurturing a culture of transparency, trust, and innovation.</p>
							<p>We have made significant strides in integrating digital technologies into our services, fostering an ecosystem where technology and human ingenuity converge. Our continued investments in digital banking serve to provide you with an enhanced, seamless banking experience, always at your fingertips.</p>
							<p>Looking ahead, we anticipate numerous opportunities and challenges. However, we remain confident in our robust strategy, the agility of our team, and our collective capability to navigate these changing times. Your unwavering support motivates us to strive for excellence continually.</p>
							<p>On behalf of AYA Bank, I express my sincere gratitude to our customers for their loyalty, our shareholders for their trust, and our employees for their hard work and dedication. Without you, our success would not be possible. I assure you that AYA Bank will continue to uphold its commitment to providing reliable, innovative, and customer-centric financial solutions.</p>

							<div class="space-20"></div>
							<p class="fw-semibold mb-0" style="font-size: 16px">Zaw Zaw</p>
							<p>Founder Chairman, AYA Bank PCL</p>
							<p class="mb-0">
								<a class="theme_text_color" href="{{ url('/about-aya/governance/corporate-governance#board-committees') }}">Board Committees <i class="bx bx-chevron-right" style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
						<div class="space-60"></div>
					</div>
				</div>
			</div>
			<div>
				<div class="container">
					<div class="space-60"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Message from Executive Chairman</h4>
							<hr class="bottom_hr">
						</div>
						<div class="row space-30"></div>
						<div class="col-md-12">
							<img src="{{ url('/images/about-aya/chairman-message/daw_khin_saw_oo.webp') }}" class="img-fluid exe_chairman_image" alt="Daw Khin Saw Oo | Executive Chairman | AYA Bank">
							
							<p class="fw-semibold mt-10">Greetings!</p>
							<p>On behalf of the members of the Board of Directors and myself, it is with great pleasure that I welcome you to our new and improved website, through which we aim to deliver important information and announcements, as well as our dedicated services.</p>
							<p>Since the Bank’s inception in July 2010, it has grown as one of the leading commercial banks in Myanmar and making significant contribution to national economy. The Bank has been continuously improving and consolidating its credibility in the financial sector by playing a larger and diversified role.</p>
							<p>In 2020, we celebrated our tenth anniversary. These first ten years represent years of growth and extraordinary results which have allowed us to secure a top position in the banking sector. Our Bank has 262 branches across the country, reflected in the lives of 6200 staff members and almost three millions customers.</p>
							<p>Something never changes is our clear vision and long-standing commitment to serving the customers that paves the way for our successful journey over the past years and makes us one of the fastest-growing financial institutions in Myanmar. It was also this clear vision that led us to an important milestone in 2022, which is the transformation from a private owned commercial bank to a commercial bank public company limited. This would not have been possible without strong support from our shareholders but more importantly the dedication of the Bank’s BOD and management.</p>
							<p>We have extended our services to our valued customers, partners, employees, and communities with firm commitment to turn our prime motto <b>“Your Trusted Partner”</b> into reality. Therefore, the Bank has been working towards becoming First Choice for all, with its philosophy of superior customer service at the core. Our accomplishments continue to accumulate while we remain focused on providing better banking services to our valued customers.</p>
							<p>We have already introduced our own ATM Service, VISA card, Master Card, JCB Card, Internet Banking, Mobile Banking, Remittance Service, Bancassurance, AYA Pay and other comprehensive range of competitive financial service and products to improve efficiency and effectiveness of our Banking Services. We are working to set up Agent Banking station and SME Centers in prime locations to ensure our presence closer to our customers. We continued to strengthen our position in the SME and Micro enterprise customer segment, and, in particular, with enterprises that are women-led and women-connected.</p>
							<p>Customer centricity has always been at the core of our business development strategy. It is our constant endeavor to innovate, in order to provide a state-of-the-art digital solution to provide enhanced convenience. The Bank’s digital platforms have transformed over the years to provide best-in-class seamless digital journeys. They are designed to on-board new customers, offer data-driven personalized solutions, and provide self-service and value-added features.</p>
							<p>We have observed remarkable growth on our digital channels during the FY 2022-23 where overall digital transaction increased significantly in number and amount. We have also upgraded our core banking system to set ourselves with a strong base to carry out all the digitization journey and to support our strong commitment to greater financial inclusion across the country.</p>
							<p>The sustainability agenda has been adopted as the Bank embarks on achieving high ambitions in years ahead. An ambitious long-term charter has been mapped to embed environmental, social and governance (ESG) Standards to Bank’s core business operations. The achievements of the past and well-planned growth strategy have given us the confidence to grow and prosper in the coming years with utmost satisfaction from all concerned.</p>
							<p>Finally, I express my sincere thanks and gratitude to our customers, patrons and well-wishers for the enormous support, patronization, and cooperation. I hope this website will help you to discover more about our AYA Bank PCL.</p>

							<div class="space-20"></div>
							<p class="fw-semibold mb-0" style="font-size: 16px">Khin Saw Oo</p>
							<p>Executive Chairman, AYA Bank PCL</p>
							<p class="mb-0">
								<a class="theme_text_color" href="{{ url('/about-aya/who-we-are/leadership/meet-our-leaders') }}">Meet Our Leaders <i class="bx bx-chevron-right" style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
						<div class="space-40"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

@endsection('content')