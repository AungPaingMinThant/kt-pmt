@extends('layouts.frontend-app')

@section('title', 'Reports – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/message-chairman.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'report'])

			<div>
				<div class="container">
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Annual Reports</h4>
							<hr class="bottom_hr">
						</div>
						<div class="space-20"></div>
						<div class="col-md-6 annual_report_main_col">
							<img src="{{ url('/report_cover/annual_2021_2022_main.png') }}" class="img-fluid">
						</div>
						<div class="col-md-6 annual_report_main_desc_col">
							<p class="fw-bold mb-0" style="font-size: 16px;">Annual Report</p>
							<p class="fw-semibold" style="font-size: 16px;">FY 2021 – 2022</p>

							<p class="fw-500 mb-0">Welcome to AYA.</p>
							<p>"Your happiness, our business"</p>

							<p class="mb-40">Welcome to the world of banking with AYA where our customers are our only priority. We value all our customers and take pride in offering fast and reliable banking services.</p>

							<a href="{{ url('/report_files/annual_report/annual_report_fy_2021_2022.pdf#toolbar=0') }}" target="_blank">
								<button class="btn pdf_button">View Online</button>
							</a>
							<!-- annual_report_FY_2021_2022.pdf -->
							<button class="btn pdf_button" onclick="reportModal('Annual Report FY 2021 – 2022', 'annual_report_fy_2021_2022.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal">Download PDF</button>
						</div>
						<div class="space-40"></div>
						<div class="col-md-12">
							<h4 class="fw-bold">Past Annual Reports</h4>
							<hr class="bottom_hr">
						</div>
						<div class="space-20"></div>
					</div>
					<div class="row past_annual_report_row">
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2019_2020.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2019 – 2020</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2019_2020.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2019 – 2020', 'annual_report_FY_2019_2020.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2017_2018.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2017 – 2018</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2017_2018.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2017 – 2018', 'annual_report_FY_2017_2018.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2016_2017.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2016 – 2017</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2016_2017.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2016 – 2017', 'annual_report_FY_2016_2017.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2015_2016.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2015 – 2016</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2015_2016.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2015 – 2016', 'annual_report_FY_2015_2016.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2014_2015.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2014 – 2015</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2014_2015.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2014 – 2015', 'annual_report_FY_2014_2015.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/annual_2013_2014.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual Report</p>
							<p>FY 2013 – 2014</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/annual_report_FY_2013_2014.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual Report FY 2013 – 2014', 'annual_report_FY_2013_2014.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>

						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/IFRS_FS_2022-2023_Summary.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">IFRS Financial Statement</p>
							<p>2022 – 2023 Summary</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/IFRS_Financial_Statement_2022_2023_Summary.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('IFRS Financial Statement 2021 – 2022 Summary', 'IFRS_Financial_Statement_2021_2022_Summary.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/IFRS_FS_2021_2022_Summary.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">IFRS Financial Statement</p>
							<p>2021 – 2022 Summary</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/IFRS_Financial_Statement_2021_2022_Summary.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('IFRS Financial Statement 2021 – 2022 Summary', 'IFRS_Financial_Statement_2021_2022_Summary.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3 annual_report_2" style="background-color: #fafafa;display: none;">
							<img src="{{ url('/report_cover/IFRS_FS_2020-2021_Summary.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">IFRS Financial Statement</p>
							<p>2020 – 2021 Summary</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/IFRS_Financial_Statement_2021_2022_Summary.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('IFRS Financial Statement 2020 – 2021 Summary', 'IFRS_Financial_Statement_2020_2021_Summary.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3 annual_report_2" style="background-color: #fafafa;display: none;">
							<img src="{{ url('/report_cover/IFRS_FS_Sept_30_2020_Summary.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">IFRS Financial Statement</p>
							<p>September 30 2020 Summary</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/IFRS_Financial_Statement_Sept_30_2020_Summary.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('IFRS Financial Statement September 30 2020 Summary', 'IFRS_Financial_Statement_Sept_30_2020_Summary.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>
						<div class="col-md-3 annual_report_2" style="background-color: #fafafa;display: none;">
							<img src="{{ url('/report_cover/IFRS_FS_Sept_30_2019_Summary.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">IFRS Financial Statement</p>
							<p>September 30 2019 Summary</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_report/IFRS_Financial_Statement_2021_2022_Summary.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('IFRS Financial Statement September 30 2019 Summary', 'IFRS_Financial_Statement_Sept_30_2019_Summary.pdf.pdf','1')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid view_online_icon"> Download Annual Report</p>
						</div>

						<div class="load_more_div_1">
							<div class="space-20"></div>
							<div class="col-md-12 text-center">
								<button class="btn load_more_btn" id="load_more_btn_1">Load more <i class="menu-icon tf-icons bx bx-chevron-down"></i> </button>
							</div>
						</div>

						<div class="space-60"></div>
						<hr>
					</div>
					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Notice of the Annual General Meeting</h4>
							<hr class="bottom_hr">
						</div>
						<div class="space-20"></div>
					</div>
					<div class="row past_annual_report_row">
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2019_2020_AGM_Notice_Myanmar_Version.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual General Meeting - AGM (Myanmar Version)</p>
							<p>FY 2019 – 2020</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_notice/FY2019_2020_AGM_Notice_Myanmar_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual General Meeting - AGM (Myanmar Version) FY 2019 – 2020', 'FY2019_2020_AGM_Notice_Myanmar_Version.pdf','2')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Notice of AGM</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2019_2020_AGM_Notice_English_Version.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual General Meeting - AGM <Br>(English Version)</p>
							<p>FY 2019 – 2020</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_notice/FY2019_2020_AGM_Notice_English_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual General Meeting - AGM (English Version) FY 2019 – 2020', 'FY2019_2020_AGM_Notice_English_Version.pdf','2')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Notice of AGM</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2018_2019_AGM_Notice_Myanmar_Version.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual General Meeting - AGM (Myanmar Version)</p>
							<p>FY 2018 – 2019</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_notice/FY2018_2019_AGM_Notice_Myanmar_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual General Meeting - AGM (Myanmar Version) FY 2018 – 2019', 'FY2018_2019_AGM_Notice_Myanmar_Version.pdf','2')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Notice of AGM</p>
						</div>
						<div class="col-md-3 meeting_notice_2" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2018_2019_AGM_Notice_English_Version.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Annual General Meeting - AGM (English Version)</p>
							<p>FY 2018 – 2019</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_notice/FY2018_2019_AGM_Notice_English_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Annual General Meeting - AGM (English Version) FY 2018 – 2019', 'FY2018_2019_AGM_Notice_English_Version.pdf','2')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Notice of AGM</p>
						</div>

						<!-- <div class="load_more_div_2">
							<div class="space-20"></div>
							<div class="col-md-12 text-center">
								<button class="btn load_more_btn" id="load_more_btn_2">Load more <i class="menu-icon tf-icons bx bx-chevron-down"></i> </button>
							</div>
						</div> -->

						<div class="col-md-12 space-60"></div>
						<hr>
					</div>
					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Minutes of the Annual General Meeting</h4>
							<hr class="bottom_hr">
						</div>
						<div class="space-20"></div>
					</div>
					<div class="row past_annual_report_row">
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2019_2020_AGM_minutes_Myanmar.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Financial Year Annual General Meeting (Myanmar Version)</p>
							<p>Minutes of 2019 – 2020</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_minutes/FY2019_2020_AGM_minutes_Myanmar_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Financial Year Annual General Meeting (English Version) Minutes of 2019 – 2020', 'FY2019_2020_AGM_minutes_Myanmar_Version.pdf','3')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Minutes of AGM</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2019_2020_AGM_minutes_English.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Financial Year Annual General Meeting (English Version)</p>
							<p>Minutes of 2019 – 2020</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_minutes/FY2019_2020_AGM_minutes_English_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Financial Year Annual General Meeting (English Version) Minutes of 2019 – 2020', 'FY2019_2020_AGM_minutes_English_Version.pdf','3')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Minutes of AGM</p>
						</div>
						<div class="col-md-3" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2018_2019_AGM_minutes_Myanmar.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Financial Year Annual General Meeting (Myanmar Version)</p>
							<p>Minutes of 2018 – 2019</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_minutes/FY2018_2019_AGM_minutes_Myanmar_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Financial Year Annual General Meeting (Myanmar Version) Minutes of 2018 – 2018', 'FY2018_2019_AGM_minutes_Myanmar_Version.pdf','3')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Minutes of AGM</p>
						</div>
						<div class="col-md-3 meeting_minute_2" style="background-color: #fafafa;">
							<img src="{{ url('/report_cover/FY2018_2019_AGM_minutes_English.png') }}" class="img-fluid report_cover">
							<p class="fw-semibold mb-0">Financial Year Annual General Meeting (English Version)</p>
							<p>Minutes of 2018 – 2019</p>
							<p class="mb-0">
								<a class="report_link" target="_blank" href="{{ url('/report_files/annual_general_meeting_minutes/FY2018_2019_AGM_minutes_English_Version.pdf#toolbar=0') }}">
									<img src="{{ url('/images/about-aya/report/view_online.png') }}" class="img-fluid agm_view_online_icon"> View Online
								</a>
							</p>
							<p class="download_report" onclick="reportModal('Financial Year Annual General Meeting (English Version) Minutes of 2018 – 2018', 'FY2018_2019_AGM_minutes_English_Version.pdf','3')" data-bs-toggle="modal" data-bs-target="#report_download_modal"><img src="{{ url('/images/about-aya/report/download.png') }}" class="img-fluid agm_view_online_icon"> Download Minutes of AGM</p>
						</div>

						<!-- <div class="load_more_div_3">
							<div class="space-20"></div>
							<div class="col-md-12 text-center">
								<button class="btn load_more_btn" id="load_more_btn_3">Load more <i class="menu-icon tf-icons bx bx-chevron-down"></i> </button>
							</div>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="report_download_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>Please enter your email address to download the <span class="fw-semibold" id="report_file_name"></span>.</p>
						<form id="formAuthentication" class="" action="{{ url('/report_download') }}" method="POST">
							{{ csrf_field() }}
							<input type="email" class="form-control" name="report_down_email" id="report_down_email" required>
							<input type="hidden" class="form-control" name="report_file" id="report_file" value="">
							<input type="hidden" class="form-control" name="subscribe_flag" id="subscribe_flag" value="">
							<button class="btn">Download Report</button>
						</form>
					</div>
					<div class="space-40"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script type="text/javascript">
	function reportModal(report_name, report_file, subscribe_flag) {
		$("#report_file_name").text(report_name);
		$("#report_file").val(report_file);
		$("#subscribe_flag").val(subscribe_flag);
	}

	$("#load_more_btn_1").click(function() {
		$(".annual_report_2").slideToggle('show');
		$(".annual_report_2").css('display','contents !important');
		$(".load_more_div_1").addClass('d-none');
	});

	$("#load_more_btn_2").click(function() {
		$(".meeting_notice_2").slideToggle('show');
		$(".meeting_notice_2").css('display','contents !important');
		$(".load_more_div_2").addClass('d-none');
	});

	$("#load_more_btn_3").click(function() {
		$(".meeting_minute_2").slideToggle('show');
		$(".meeting_minute_2").css('display','contents !important');
		$(".load_more_div_3").addClass('d-none');
	});
	
</script>
@endsection('content')