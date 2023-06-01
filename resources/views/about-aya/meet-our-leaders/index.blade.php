@extends('layouts.frontend-app')

@section('title', 'Meet Our Leaders – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">
<link rel="stylesheet" href="{{ url('/css/about-aya/meet-our-leaders.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'meet_our_leaders'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Board of Directors</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Executive Management Team</label>
						<span class="glider"></span>
					</div>
				</div>
				<div class="space-80"></div>

				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="bod_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-bod" aria-controls="navs-pills-top-bod" aria-selected="true" >
								Board of Directors
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="emt_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-emt" aria-controls="navs-pills-top-emt" aria-selected="false" >
								Executive Management Team
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-bod" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row">
									<div class="col-md-12">
										<p class="mb-30">The Board is the highest authority of the Bank. The Board of Directors provide strategic direction for the Bank and establishes a policy-based governance system.</p>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_zaw.webp') }}" alt="U Zaw Zaw | Board of Directors | Founder and Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Zaw Zaw</h5>
												<p class="mb-4">Founder and Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_zaw_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_saw_oo.webp') }}" alt="Daw Khin Saw Oo | Board of Directors | Executive Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Khin Saw Oo</h5>
												<p class="mb-4">Executive Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_khin_saw_oo_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_than_zaw.webp') }}" alt="U Than Zaw | Board of Directors | Vice-Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Than Zaw</h5>
												<p class="mb-4">Vice-Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_than_zaw_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_htay_htay_khaing.webp') }}" alt="Daw Htay Htay Khaing | Board of Directors | Vice-Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Htay Htay Khaing</h5>
												<p class="mb-4">Vice-Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_htay_htay_khaing_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_ma_ma.webp') }}" alt="Daw Khin Ma Ma | Board of Directors | Vice-Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Khin Ma Ma</h5>
												<p class="mb-4">Vice-Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_khin_ma_ma_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_myint_zaw.webp') }}" alt="U Myint Zaw | Board of Directors | Chief Executive Officer" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Myint Zaw</h5>
												<p class="mb-4">Chief Executive Officer</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_myint_zaw_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/dr_aung_tun_thet.webp') }}" alt="Professor Dr. Aung Tun Thet | Board of Directors | Independent Non-Executive Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Professor Dr. Aung Tun Thet</h5>
												<p class="mb-4">Independent Non-Executive Director</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#dr_aung_tun_thet_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_min_sein.webp') }}" alt="U Zaw Zaw | Board of Directors" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Min Sein</h5>
												<p class="mb-4">Independent Non-Executive Director</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_min_sein_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_tun_lin_oo.webp') }}" alt="U Tun Lin Oo | Board of Directors | Independent Non-Executive Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Tun Lin Oo</h5>
												<p class="mb-4">Independent Non-Executive Director</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_tun_lin_oo_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="space-20"></div>
								<a class="text-decoration-underline theme_text_color" href="{{ url('/file/about-aya/meet-our-leaders/Contact the Board of Directors.docx') }}" target="_blank">Contact to the Board</a>
							</div>
						</div>
						<div class="tab-pane executive-management-team fade" id="navs-pills-top-emt" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row">
									<div class="col-md-12">
										<p class="mb-30">Executive Management Team reports to the Board and support the Board in the day-to-day management of the Bank, implementation of corporate strategy, ensure that Board’s policies and guidance are implemented in daily operations, and good corporate practices are maintained.</p>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_saw_oo.webp') }}" alt="Daw Khin Saw Oo | Executive Management Team | Executive Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Khin Saw Oo</h5>
												<p class="mb-4">Executive Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_khin_saw_oo_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_than_zaw.webp') }}" alt="U Than Zaw | Executive Management Team | Vice-Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Than Zaw</h5>
												<p class="mb-4">Vice-Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_than_zaw_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_ma_ma.webp') }}" alt="Daw Khin Ma Ma | Executive Management Team | Vice-Chairman" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Khin Ma Ma</h5>
												<p class="mb-4">Vice-Chairman</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_khin_ma_ma_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_myint_zaw.webp') }}" alt="U Myint Zaw | Executive Management Team | Chief Executive Officer" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Myint Zaw</h5>
												<p class="mb-4">Chief Executive Officer</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_myint_zaw_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_thazin_aung.webp') }}" alt="Daw Jasmine Thazin Aung | Executive Management Team | Managing Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Jasmine Thazin Aung</h5>
												<p class="mb-4">Managing Director (Corporate Business)</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_thazin_aung_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_nyein_chan_soe_win.webp') }}" alt="U Nyein Chan Soe Win | Executive Management Team | Managing Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Nyein Chan Soe Win</h5>
												<p class="mb-4">Managing Director (Digital Banking)</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_nyein_chan_soe_win_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_ko_ko_oo.webp') }}" alt="U Ko Ko Oo | Executive Management Team | Managing Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Ko Ko Oo</h5>
												<p class="mb-4">Managing Director (Governance, Risk Management and Compliance)</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_ko_ko_oo_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/u_min_wint_oo.webp') }}" alt="U Minn Wint Oo | Executive Management Team | Managing Director" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">U Minn Wint Oo</h5>
												<p class="mb-4">Managing Director (Banking Operations and Retail Banking)</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#u_min_wint_oo_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/daw_lwin_lwin_aung.webp') }}" alt="Daw Lwin Lwin Aung | Executive Management Team | Chief Financial Officer" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Daw Lwin Lwin Aung</h5>
												<p class="mb-4">Chief Financial Officer</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#daw_lwin_lwin_aung_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 mb-6">
										<div class="card h-100">
											<img src="{{ url('/images/about-aya/meet-our-leaders/nay_lin_htut.webp') }}" alt="Daw Lwin Lwin Aung< | Executive Management Team | Chief Financial Officer" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title fw-semibold mb-0">Nay Lin Htut</h5>
												<p class="mb-4">Chief Credit Officer</p>
												<a class="view_bio_link theme_text_color" data-bs-toggle="modal" data-bs-target="#nay_lin_htut_bio_modal">View Bio <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
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
</div>
<div class="modal fade" id="u_zaw_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_zaw_zaw_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Zaw Zaw</h5>
						<p class="mb-0">Myanmar</p>
						<p>Founder and Chairman ( Non-Executive )</p>

						<p class="mb-10 bio_detail">U Zaw Zaw is a successful business magnate and Founder and Chairman of AYA Bank. He is graduated from the University of Yangon with a major in Mathematics. With a combination of overseas experiences and personal strength, U Zaw Zaw founded Max Myanmar Company in 1993 and AYA Bank in 2010. His achievements include steering the management and growth of AYA Financial Group and Max Myanmar Group of Companies, major conglomerates in Myanmar. He is an established and well-connected entrepreneur and business leader in Myanmar, with 30 years of management experience.</p>
						<p>He is currently serving as the President of the Myanmar Football Federation since 2005 and Vice- President of Asian Football Confederation (AFC). He relentlessly provides both funding and effort for the development of soccer in Myanmar. As a firm believer of contributing to the society and helping the needy, he has supported various philanthropic causes through the Ayeyarwady Foundation, including the Yankin Children Hospital, Ayeyarwady Covid-19 Center, and a wide range of corporate social responsibility initiatives nationwide.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="daw_khin_saw_oo_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_saw_oo_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Daw Khin Saw Oo</h5>
						<p class="mb-0">Myanmar</p>
						<p>Executive Chairman</p>

						<p class="mb-10 bio_detail">Daw Khin Saw Oo, a veteran banker of over 40 years of experience in monetary and financial sector, is the Executive Chairman and a member of the Board of Directors of Ayeyarwady Bank (AYA Bank Ltd.). She held the position of Vice-Chairman since she joined the AYA Bank in 2018. She is one of the driving forces of AYA Bank’s move towards a more accountable, responsible, and transparent organization. Her visionary leadership and zealous efforts resulted her in re-designation as the Executive Chairman of AYA Bank in May 2021.</p>
						<p>She was formerly, the Deputy Governor of the Central Bank of Myanmar and retired in July 2017. She had the professional experience as a Technical Assistant to the Executive Director in the South-East Asia Voting Group Office, International Monetary Fund (IMF). She had the vast exposure to numerous ASEAN and International financial platforms during her Deputy-Governorship at the Central Bank of Myanmar. She has been selected as the Chairperson of the Myanmar Banks Association for two years term starting from May 2021.</p>
						<p>She holds a master’s degree in International Affairs (Economic Policy Management) from Columbia University of New York, U.S.A. She got her bachelor’s degree of Economics (Mathematical Statistics) and a Diploma in Economic Planning from the Institute of Economics, Yangon.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_than_zaw_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_than_zaw_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Than Zaw</h5>
						<p class="mb-0">Myanmar</p>
						<p>Vice-Chairman</p>

						<p class="mb-10 bio_detail">U Than Zaw is a member of the Board of Directors of AYA Bank and presently holds the position of Vice-Chairman. He was appointed as the Managing Director to AYA Bank from 2011 to 2013. During his tenure, he has led the fledging Bank to grow its brand and network in Myanmar. He also heads AYA Sompo Insurance as a Vice-Chairman. U Than Zaw’s vast experience includes eight-year tenure with the Olympics Committee as a Treasurer and another two years as the Chief Executive Officer of the Myanmar Football Federation. He is instrumental in strengthening systems and procedures by taking initiatives. U Than Zaw has been giving the guidance at Board level regards to policies, practices to ensure the bank in full compliance with stipulated laws and regulations.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="daw_htay_htay_khaing_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/daw_htay_htay_khaing_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Daw Htay Htay Khaing</h5>
						<p class="mb-0">Myanmar</p>
						<p>Vice-Chairman</p>

						<p class="mb-10 bio_detail">Daw Htay Htay Khaing has been the Co-Founder and Vice-Chairman of the Board of Directors since the Bank’s inception in 2010. Daw Htay Htay Khaing had completed a Bachelor of Science in Mathematics awarded by the University of Yangon.</p>
						<p>She demonstrated the high degree of commitment to the growth of AYA Bank. Her accolades do not stop here. She has contributed extensively to the welfare of women in various sectors and plays active roles as a Vice-Chairperson with the Myanmar Women Football Association and as a Trustee with the Myanmar Women Sports Association.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="daw_khin_ma_ma_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/daw_khin_ma_ma_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Daw Khin Ma Ma</h5>
						<p class="mb-0">Myanmar</p>
						<p>Vice-Chairman</p>

						<p class="mb-10 bio_detail">Daw Khin Ma Ma is a member of the Board of Directors of AYA Bank since 2010 and presently holds the position of Vice-Chairman. She has been appointed as Deputy Managing Director in 2011, Executive Director in 2013 and currently re-appointed as Vice-Chairman in 2022 due to her strong commitment and constant demonstration on effectiveness of the Board and Bank’s strategic direction. She obtained a bachelor’s degree in Science from University of Yangon.</p>
						<p>Daw Khin Ma Ma brings along with her a wealth of cross- sector experience gained through her 17 years in the service industry. With her passion for delivering quality service, she has improved services providing in all branches to a higher level. She plays a pivotal role in human resources management, provides guidance for talent strategy, and leads in all aspects of human resources and talent management.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_myint_zaw_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_myint_zaw_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Myint Zaw</h5>
						<p class="mb-0">Myanmar</p>
						<p>Chief Executive Officer</p>

						<p class="mb-10 bio_detail">U Myint Zaw is a member of the Board of Directors of AYA Bank. He has been appointed as Managing Director in 2017, re-appointed as Senior Managing Director in 2021 and Chief Executive Officer in 2022 for his growth initiatives, leadership abilities, and managing the strategic direction of the Bank. He graduated with B-Econ (Economics) and received a Master of Public Administration (MPA) as well. He held various senior positions in Advertising and Marketing for well-established and reputable international and local companies in the private sector.</p>
						<p>His professional background comes from over 25 years of working experience from different industries in Agriculture, Advertising, Commodity Future Market, Beverage and Soft Drink Industry, Telecommunications and Education. Before joining AYA Bank, U Myint Zaw founded Professional Marketers Association (PMA) and developed Ground Solution Company that provided management and consultancy services.</p>
						<p>His strong knowledge of marketing and operations in theory and practice rendered invaluable service for the bank. He has proven track record of delivering business impact and optimization of marketing that brings up sustainable and a strong corporate culture and promoting the service quality.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="dr_aung_tun_thet_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/dr_aung_tun_thet_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Professor Dr. Aung Tun Thet</h5>
						<p class="mb-0">Myanmar</p>
						<p>Independent Non-Executive Director</p>

						<p class="mb-10 bio_detail">Prof. Dr. Aung Tun Thet was appointed as Independent Non-Executive Director of AYA Bank in 2013, providing specialist advice in in areas of Corporate Governance, Management, Human Resource and Corporate Social Responsibility (CSR) activities.</p>
						<p>During his career, he built a wealth of working experience as a distinguished International and National Civil Servant in the United Nations as well as in Myanmar civil service. He is currently holding the portfolio as an advisor for the Government sector, business community and civil society organizations. He also plays the role as a management consultant in areas of Management, Leadership, Human Resources, Organizational Development and Corporate Governance for various companies. He holds the position of Honorary Professor at University of British Columbia, Vancouver, Canada as well as Visiting Professor at Yangon University of Economics and Yangon University. Prof, Dr. Aung Tun Thet is a leading advocate of Corporate Governance and Corporate Social Responsibility (CSR) in Myanmar.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_min_sein_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_min_sein_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Min Sein</h5>
						<p class="mb-0">Myanmar</p>
						<p>Independent Non-Executive Director</p>

						<p class="mb-10 bio_detail">U Min Sein was appointed as an Independent Non-Executive Director of AYA Bank in 2013. He is an accomplished lawyer who is an Advocate of the Supreme Court, a Certified Public Accountant and has been practicing law since 1972. He is the Managing Partner of U Min Sein Law Firm (Yangon), a member of Asia Law Alliance, in association with Christopher Bridges (Singapore). Within his illustrious Curriculum Vitae, he has served as legal advisor to the Embassies, Corporates and Multinational Companies in various industries.</p>
						<p>As part of his contribution to the society, U Min Sein served as a lecturer in Commercial Law at the Auditor General’s Office for twenty years and lecturer in Commercial law to Certified Public Accountant (CPA). He is a Founding Member and Management Committee Member of U Hla Tun Hospice, Cancer Foundation, a charitable organization in Yangon. He demonstrates high sense of duty and responsibility and serves in various capacities of the law across all functional areas at AYA Bank.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_tun_lin_oo_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_tun_lin_oo_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Tun Lin Oo</h5>
						<p class="mb-0">Myanmar</p>
						<p>Independent Non-Executive Director</p>

						<p class="mb-10 bio_detail">U Tun Lin Oo was appointed as an Independent Non-Executive Director (INED) of AYA Bank in 2022. He is a Certified Public Accountant (CPA) and obtained a bachelor’s degree in Commerce from Yangon Institute of Economics. Having twenty years of professional experience in the auditing field, he brings a strong financial service background and extensive auditing experience to the Board. He is skilled in outlining risk assessments and evaluating potential compliance issues.</p>
						<p>U Tun Lin Oo has more than ten years of leadership experience with proven records of strong financial and business backgrounds. As an engagement partner of MAT, an audit and professional consultant firm, he outperformed in business dealings and audit programs. He has extended his knowledge of academia in educational programs and also act as the principal and senior lecturer of Accounting, Cost and Management Accounting subjects.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="daw_thazin_aung_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/daw_thazin_aung_popup.webp') }}" class="img-fluid popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Daw Jasmine Thazin Aung</h5>
						<p class="mb-0">Myanmar</p>
						<p>Managing Director (Corporate Business)</p>

						<p class="mb-10 bio_detail">Daw Jasmine Thazin Aung is the Managing Director – Head of Corporate Banking of AYA Bank and Chief Executive Director of Max Global Investment. In her capacity with AYA Bank, she takes charge of Corporate Banking Business and Financial Institutions establishment. She is a member of the Executive Committee of AYA Bank.</p>
						<p>In addition to her MD – Head of Corporate Banking role, she also co-heads and takes several roles with AYA Financial Group (“AFG”). With AFG, she takes charge of AYA Trust Securities Co., Ltd as the Managing Director for Capital Market Activities including securities brokerage and Corporate Finance Transactions, and she is also the member of the Board of Directors of AYA Sompo Insurance Co., Ltd. From her capacity with Corporate Finance activities, she oversees and monitors diversified investment portfolios that includes existing, on-going, and new business ventures of Chairman’s investment office as well new Mergers and Acquisitions [“M&A”], Joint Ventures with Potential Partners for AYA Financial Group’s entities and/or investment in new ventures.</p>
						<p>She holds a master’s degree in Business Administration (Corporate Finance) from Nottingham Trent University. Before joining AYA Financial Group and Max Global Investment, she was a PwC Advisory Partner and local Lead Director/Partner for PwC Myanmar. She has over 16 years of professional experiences including 11.5 years with PwC Singapore and PwC Myanmar for audit, financial advisory and consulting and 5 years in the Maritime service industry in Myanmar.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_nyein_chan_soe_win_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_nyein_chan_soe_win_popup.webp') }}" class="img-fluid u_nyein_chan_soe_win_popup_image popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Nyein Chan Soe Win</h5>
						<p class="mb-0">Myanmar</p>
						<p>Managing Director (Digital Banking)</p>

						<p class="mb-10 bio_detail">U Nyein Chan Soe Win is the Managing Director for ‘Digital Payments’ of AYA Bank and is a member of the Bank’s Executive Committee. He is responsible for managing the roadmap and defining the customer experience for Digital channels where he plays a visible role of driving and delivering the Bank’s digital payments agenda. Over the years, he has been the main strategic driver for digital wallet application namely ‘AYA Pay’.</p>
						<p>He leads and runs the digital innovation across the bank with an aspiration to propel AYA in becoming a premier digital bank. He has strong leadership, management and business development skills with solid experiences in start-ups, entrepreneurship, payments, FinTech, emerging market, e-commerce and IT service management.</p>
						<p>U Nyein Chan Soe Win holds a master’s degree from Nanyang Technology University. Prior to joining AYA Bank, he played the role of IT professional in Singapore for one of the world’s <i>leading energy company and advanced his career</i> as a Managing Director of Singapore based regional payment company where he transformed digital payments in Myanmar, remarkably enablement of digital payments, launch of first virtual prepaid card and the launch of first mobile banking with QR payment. He also co-founded the first blockchain Omni Channel Digital Commerce Platform in Myanmar and became CEO and CTO.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_ko_ko_oo_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_ko_ko_oo_popup.webp') }}" class="img-fluid u_ko_ko_oo_popup_image popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Ko Ko Oo</h5>
						<p class="mb-0">Myanmar</p>
						<p>Managing Director (Banking Operations and Retail Banking)</p>

						<p class="mb-10 bio_detail">U Minn Wint Oo is the Managing Director for “Banking Operations and Retail Banking” of AYA Bank and came on board in 2011. He is a member of the Executive Committee, Asset-Liability Committee, Credit Committee, Product and Business Development Committee, and IT and Digitalization Steering Committee. As the Managing Director of Banking Operations and Retail Banking, he is responsible for daily banking operations, ensuring efficiency of the Bank, necessary to support the business objectives, leading more than 4500 employees who deliver banking services to clients across AYA Bank’s 265 branches in the country. He also oversees the teams handling centralized operations, currency operations as well as branch operations systems support, and retail banking.</p>
						<p>During his early tenure at AYA, he held the post as Chief Technology Officer, the strategic founder and executive decision maker with regards to the technological advances of AYA Bank. He was the main driving force for the bank’s whole IT systems and infrastructure, including, but not limited to, Data Centers, Network Architecture, Software Development, and Information Security. He is responsible for outlining the bank’s technological vision, implementing technological strategies, developing policy and procedures, and ensuring that the technological resources are aligned with business goals.</p>
						<p>He graduated from Yangon Technological University and continued specialization in IT industry. Along with strong technical knowledge and expertise in banking, he is the right talent to take the bank to its next level. He is the core person in driving and reinforcing digital transformation of the bank, integrating digital technology into all areas of the bank, optimizing operations and value delivery to customers. With his technological background as an added advantage, he is able to take AYA Bank to the next level of Banking for the ever-changing customer centric economic environment.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="u_min_wint_oo_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/u_min_wint_oo_popup.webp') }}" class="img-fluid u_min_wint_oo_popup_image popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Minn Wint Oo</h5>
						<p class="mb-0">Myanmar</p>
						<p>Managing Director (Banking Operations and Retail Banking)</p>

						<p class="mb-10 bio_detail">U Minn Wint Oo is the Managing Director for “Banking Operations and Retail Banking” of AYA Bank and came on board in 2011. He is a member of the Executive Committee, Asset-Liability Committee, Credit Committee, Product and Business Development Committee, and IT and Digitalization Steering Committee. As the Managing Director of Banking Operations and Retail Banking, he is responsible for daily banking operations, ensuring efficiency of the Bank, necessary to support the business objectives, leading more than 4500 employees who deliver banking services to clients across AYA Bank’s 265 branches in the country. He also oversees the teams handling centralized operations, currency operations as well as branch operations systems support, and retail banking.</p>
						<p>During his early tenure at AYA, he held the post as Chief Technology Officer, the strategic founder and executive decision maker with regards to the technological advances of AYA Bank. He was the main driving force for the bank’s whole IT systems and infrastructure, including, but not limited to, Data Centers, Network Architecture, Software Development, and Information Security. He is responsible for outlining the bank’s technological vision, implementing technological strategies, developing policy and procedures, and ensuring that the technological resources are aligned with business goals.</p>
						<p>He graduated from Yangon Technological University and continued specialization in IT industry. Along with strong technical knowledge and expertise in banking, he is the right talent to take the bank to its next level. He is the core person in driving and reinforcing digital transformation of the bank, integrating digital technology into all areas of the bank, optimizing operations and value delivery to customers. With his technological background as an added advantage, he is able to take AYA Bank to the next level of Banking for the ever-changing customer centric economic environment.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="daw_lwin_lwin_aung_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/daw_lwin_lwin_aung_popup.webp') }}" class="img-fluid daw_lwin_lwin_aung_popup_image popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">Daw Lwin Lwin Aung</h5>
						<p class="mb-0">Myanmar</p>
						<p>Chief Financial Officer</p>

						<p class="mb-10 bio_detail">Daw Lwin Lwin Aung is the Chief Financial Officer of AYA Bank and is the member of the Bank’s Executive Committee. In her capacity as Chief Financial Officer, she is responsible for the overall financial management of the Bank including financial reporting, budgetary control and performance monitoring, statutory audit, implementation of International Financial Reporting Standards (IFRS) and strategy implementation while working closely with senior management. She leads the Finance & Accounts Team and works closely with Treasury Team in Financial and Treasury related functions respectively.</p>
						<p>Prior to that, she was a Chief Financial Officer of a SGX Listed Company in Singapore and played a key role in Group’s Financial Affairs that includes Financial Planning & Reporting, compliance with SGX regulations, Internal Control & Risk Management, Fund raising including ordinary & preference share issuance, Merger and Acquisition and Investor Relations. She also held other roles in Senior Finance positions in Singapore. In addition to typical Finance related expertise, her expertise covers Business Valuation, Merger & Acquisition, Financial Due Diligence, Initial Public Offering (IPO) and Investment and Divestment activities.</p>
						<p>She holds a Master’s degree in Business Administration from Nanyang Technological University (Singapore), a professional qualification from Association of Chartered Certified Accountants (UK) and a Bachelor of Arts in English. She is also a member of the Institute of Singapore Chartered Accountants (CA Singapore).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="nay_lin_htut_bio_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ url('/images/about-aya/meet-our-leaders/nay_lin_htut_popup.webp') }}" class="img-fluid nay_lin_htut_popup_image popup_image">

						<h5 class="card-title theme_text_color fw-semibold mb-0">U Nay Lin Htut</h5>
						<p class="mb-0">Myanmar</p>
						<p>Chief Credit Officer</p>

						<p class="mb-10 bio_detail">U Nay Lin Htut is the Chief Credit Officer of AYA Bank and a member of the Bank’s Executive Committee. He has been with the Bank for more than 9 years. In his current role, he is responsible for credit underwriting, assessment, administration, monitoring, recovery, and reporting activities of all credit portfolio of the Bank. He is also the member of the Credit Committee, and Assets and Liability Committee.</p>
						<p>Prior to his role in Credit, he spent 8 years in Corporate Banking Unit, heading Domestic Corporate Banking Department and subsequently assigned as a Deputy Head of Corporate Banking Unit whereby he was responsible for the management of the corporate client’s business portfolio which involves profitable partnerships, improving credit quality of the portfolio and developing transactional business through enhanced service experiences. In this role, he has extensive experience to accommodate corporate customers’ business needs and banking needs, specialized in corporate lending and thoroughly familiar with credit assessment under various industries including infrastructure financing.</p>
						<p>He is one of the pioneer members of Credit Bureau Business Committee and Myanmar Credit Bureau (MMCB) since 2019 and was instrumental in setting up system readiness, pricing mechanism and reporting format. U Nay Lin Htut holds a bachelor’s degree in Business Management (Finance) from RMIT (Royal Melbourne Institute of Technology) University in 2012 and completed his Chartered Financial Analyst (CFA) Level 1 in 2019.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
		if(!button.classList.contains('delete')) {
		button.classList.add('delete');
		setTimeout(() => button.classList.remove('delete'), 3200);
		}
		e.preventDefault();
	}));

	$("#radio-1").click(function(){
		$("#bod_tab").click();
	});
	$("#radio-2").click(function(){
		$("#emt_tab").click();
	});
</script>

@endsection('content')