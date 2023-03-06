@extends('layouts.frontend-app')

@section('title', 'Safe Deposit Locker – AYA Bank')
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
    	border-bottom: 5px solid #a02226;
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
    	font-size: 16px;
    }
    .benefit_icon {
		width: 60% !important;
	}
	.outer_benefit_box {
		padding: 0px 20px 20px 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.tab_data_row {
		width: 100%;
	}
	.tab_h2, .tab_upi_h2 {
		font-weight: 800;
		position: absolute;
		top: 230px;
	}
	.how_to_apply_icon {
		width: 80%;
	}
	.how_to_apply_outer_section {
		background-image: url('./images/how_to_apply_bg.jpg');
		background-size: cover;
		background-position: bottom center;
	}
	.debit_how_to_apply_section {
		padding: 40px 50px 60px 50px !important;
	}
	.ecommerce_registration_bg {
		background-image: url('./images/MPU_ecommerce_registration.jpg');
		background-size: cover;
	}
	.ecommerce_registration_container {
		padding: 40px 0px 40px 100px !important;
	}
	.tab-content {
		box-shadow: none !important;
	}
	.benefit_feature_box {
		display: table;
	}
	.why_use_AYA {
		display: table-cell !important;
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row {
			/*width: auto;*/
		}
		.tab_h2{
			top: 380px;
		}
		.tab_upi_h2{
			top: 380px;
			left: 15%;
		}
		.outer_benefit_box {
			margin-bottom: 10px;
		}
		.how_to_apply_icon {
			width: 100%;
		}
		.debit_how_to_apply_section {
		    padding: 40px 30px 60px 30px !important;
		}
		.how_to_apply_outer_section {
			background-image: url('./images/how_to_apply_mobile_bg.jpg');
			background-position: left;
		}
		.ecommerce_registration_bg {
			background-image: none;
			background-color: #f3f3f2;
		}
		.ecommerce_registration_container {
			padding: 40px 0px 40px 40px !important;
		}
		.benefit_table {
			zoom: 75%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'safe_deposit'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'safe_deposit'])
			
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-features" aria-controls="navs-pills-top-features" aria-selected="true" >
								Features
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-requirements" aria-controls="navs-pills-top-requirements" aria-selected="false" >
								Requirement
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-available-size" aria-controls="navs-pills-top-available-size" aria-selected="false" >
								Available Size
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-available-branch" aria-controls="navs-pills-top-available-branch" aria-selected="false" >
								Available Branch
							</button>
						</li>
					</ul>
					<div class="tab-content" style="padding: 20px 0px 0px 0px;">
						<div class="tab-pane fade features show active" id="navs-pills-top-features" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" style="color: #4e4e4e;">
									<div class="col-md-2"></div>
									<div class="col-md-4 benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/feature_safe.png') }}" class="img-fluid w-25">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">Safe</p>
											<p class="mt-10">Your valuables are kept in vault at our designated branches</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/feature_secure.png') }}" class="img-fluid w-25">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">Secure</p>
											<p class="mt-10">Your locker can only be opened with the assigned keys provided to you.</p>
										</div>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-2"></div>
									<div class="col-md-4 benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/feature_quality.png') }}" class="img-fluid w-25">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">Quality</p>
											<p class="mt-10">A fireproof metal box which will keep your contents safe from fire and other disasters</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/feature_access.png') }}" class="img-fluid w-25">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">Access</p>
											<p class="mt-10">You can plan your visit and access your locker on working days during banking hours.</p>
										</div>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane requirements fade" id="navs-pills-top-requirements" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" style="color: #4e4e4e;">
									<div class="col-md-2"></div>
									<div class="col-md-8 text-center benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<p>Lockers can be hired by individuals, limited companies, associations and trusts.</p>
											<p><span class="theme_text_color fw-semibold">MMK 200,000</span> for key deposit</p>
										</div>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane available-size fade" id="navs-pills-top-available-size" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" style="color: #4e4e4e;">
									<div class="col-md-12 text-center p-lg-3">
										<p style="font-size: 15px;">Our Safe Deposit Boxes come in four sizes, and prices start at just MMK 4,200 a month.</p>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-4 text-center benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/locker_icon.png') }}" class="img-fluid w-30">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">3″ x 5″</p>
											<p class="mt-10 theme_text_color fw-semibold">MMK 50,000 a year</p>
										</div>
									</div>
									<div class="col-md-4 text-center benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/locker_icon.png') }}" class="img-fluid w-30">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">3″ x 10″</p>
											<p class="mt-10 theme_text_color fw-semibold">MMK 150,000 a year</p>
										</div>
									</div>
									<div class="col-md-2"></div>
									<div class="col-md-2"></div>
									<div class="col-md-4 text-center benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/locker_icon.png') }}" class="img-fluid w-30">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">5″ x 10″</p>
											<p class="mt-10 theme_text_color fw-semibold">MMK 300,000 a year</p>
										</div>
									</div>
									<div class="col-md-4 text-center benefit_feature_box p-lg-3">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/other-services/safe-deposit/locker_icon.png') }}" class="img-fluid w-30">
											<p class="fw-semibold mt-xl-3 mb-0" style="font-size: 16px;">10″ x 10″</p>
											<p class="mt-10 theme_text_color fw-semibold">MMK 500,000 a year</p>
										</div>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane available-branch fade" id="navs-pills-top-available-branch" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" style="color: #4e4e4e;">
									<div class="col-md-1"></div>
									<div class="col-md-10 benefit_feature_box p-lg-3">
										<p>Our branches to secure your valuables:</p>
										<table class="table table-bordered-less benefit_table b-b-l-radius-10 b-b-r-radius-10" style="background-color: #f2f2f2;box-shadow: 0 0 15px 15px #f4f4f4 !important">
											<tbody>
												<tr class="theme_table_head fw-semibold">
													<td class="b-b-none py-md-4 b-t-l-radius-10 b-b-l-radius-10 w-10">No.</td>
													<td class="b-b-none">Branch</td>
													<td class="b-b-none">Name</td>
													<td class="b-b-none b-t-r-radius-10 b-b-r-radius-10">Address</td>
												</tr>
												<tr>
													<td class="py-md-4">1</td>
													<td>Naypyidaw (1)</td>
													<td>Thiri Yadanar Branch</td>
													<td>111-112, Thiri Yadanar Shopping Complex, Dekhina Thiri, NayPyiDaw.</td>
												</tr>
												<tr>
													<td class="py-md-4">2</td>
													<td>Yangon (1)</td>
													<td>Hlaing Branch</td>
													<td>No. (1) Ywama Curve, Bayint Naung Road, Ward (2), Hlaing Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">3</td>
													<td>Yangon (4)</td>
													<td>North Dagon (1) Branch</td>
													<td>No. (27/6), Myay Taing Ward, Dagon Myo Oo Yeik Mon, Shwe Pin Lon Housing Project, North Dagon Townsip, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">4</td>
													<td>Yangon (7)</td>
													<td>Wardan Branch</td>
													<td>No. (151), Corner of Wardan Street and Bogyoke Road, Ward (8), Lanmadaw Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">5</td>
													<td>Yangon (19)</td>
													<td>Hlaingtharyar (1) Branch</td>
													<td>No. (1948) Bogyoke Road, 5 Ward, Yangon-Pathein Road, Hlaingtharyar Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">6</td>
													<td>Yangon (26)</td>
													<td>Kyauktadar Branch</td>
													<td>No. (416), Maharbandoola Road, Kyauktadar Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">7</td>
													<td>Yangon (29)</td>
													<td>Hlaing (2) Pyay Road Branch</td>
													<td>No. (1/B), Pyay Road, Ward (10), Hlaing Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">8</td>
													<td>Yangon (41)</td>
													<td>Novotel Branch</td>
													<td>No. (459) Pyay Road, Kamayut Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">9</td>
													<td>Yangon (58)</td>
													<td>Bahan (2) Branch</td>
													<td>No. (97) Kabar Aye Pagoda Road, ShweTaungKyar Ward (1), Bahan Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">10</td>
													<td>Yangon (85)</td>
													<td>Windermere Branch</td>
													<td>No. (40/A), Innyar Road, Bahan Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">11</td>
													<td>Yangon (99)</td>
													<td>Khaymarthi Road Branch</td>
													<td>No. (705), Khay Mar Thi Road, North Okkalapa Township, Yangon</td>
												</tr>
												<tr>
													<td class="py-md-4">12</td>
													<td>Yangon (103)</td>
													<td>Thamardi Street Branch</td>
													<td>No. (B2, E1, E2), Thamardi Street, Myittarnyunt Block, Tamwe Township, Yangon.</td>
												</tr>
												<tr>
													<td class="py-md-4">13</td>
													<td>Mandalay (6)</td>
													<td>80th Street Branch</td>
													<td>No. (211), Between 80th Street and 30th x31st Street, Chanayetharzan Township, Mandalay.</td>
												</tr>
												<tr>
													<td class="py-md-4 b-b-none">14</td>
													<td class="b-b-none">Mandalay (21)</td>
													<td class="b-b-none">84th Street Branch</td>
													<td class="b-t-r-radius-10 b-b-r-radius-10 b-b-none">No. (210), Aung Nan Yeik Thar (West) Quarter, (Corner of 84th Street and 34th Street), Chan Aye Thar Zan Township, Mandalay.</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-1"></div>
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


@endsection('content')