@extends('layouts.frontend-app')

@section('title', 'Stakeholder Management – Our Strategies – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'stakeholder_management'])

			<div class="container stake_holder_container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold">Stakeholder</h4>
				</div>
				<div class="text-center">
					<img src="{{ url('/images/about-aya/stakeholder-management/stakeholder_chart.webp') }}" class="img-fluid stakeholder_chart">
				</div>

				<div class="space-80"></div>
				
				<div class="row">
					<h4 class="fw-bold">Engagement with Stakeholders</h4>
				</div>
				<div class="row stakeholder_table_div">
					<!-- table-responsive text-nowrap sh_table_div -->
					<div class="table-responsive">
						<table class="table table-borderless sh_table stake_table">
							<thead>
								<tr valign="middle">
									<td class="f-white py-4 stake_table_first_column">Our stakeholders</td>
									<td class="f-white stake_table_sec_column">Method of Engagement</td>
									<td class="f-white">Involvement</td>
									<td class="f-white">Scope of Engagement</td>
									<td class="f-white stake_table_last_column">Action Party</td>
								</tr>
							</thead>
							<tbody class=" table-border-bottom-0" style="background-color: #fff;">
								<tr valign="top">
									<td class="fw-semibold stakeholder_tb_r_pd b-t-l-radius-10">Customers</td>
									<td class="stakeholder_tb_r_pd">One-on-One dealings, Social media, Contact center, Surveys, Slogans, Campaign, Conference, Customer feedback forms at branches, AI/IT</td>
									<td class="stakeholder_tb_r_pd">Continuously and Consistently</td>
									<td class="stakeholder_tb_r_pd">Feedback on Customer services, Products, Technology advancement</td>
									<td class="stakeholder_tb_r_pd b-t-r-radius-10">All frontline staff including  Call center,  Branch operations staff and Relationship managers</td>
								</tr>
								<tr valign="top" class="stakeholder_tb_grey">
									<td class="fw-semibold stakeholder_tb_r_pd">Shareholders</td>
									<td class="stakeholder_tb_r_pd">Annual general meetings, Emails, Website, Annual reports, and relevant media platforms</td>
									<td class="stakeholder_tb_r_pd">Annual basis, and as and when necessary</td>
									<td class="stakeholder_tb_r_pd">Financial  return, Share matters, Dividends, Roadmap, Corporate governance</td>
									<td class="stakeholder_tb_r_pd">Board of directors, Secretariat section</td>
								</tr>
								<tr valign="top">
									<td class="fw-semibold stakeholder_tb_r_pd">Employees</td>
									<td class="stakeholder_tb_r_pd">Emails, Internal working groups, Committees, Town-hall meetings, Intranet, Slogans</td>
									<td class="stakeholder_tb_r_pd">Continuously and Consistently</td>
									<td class="stakeholder_tb_r_pd">Bank's directions, Policies and Procedures, Occupational health and safety, Employees' welfare</td>
									<td class="stakeholder_tb_r_pd">Corporate Affairs  , Human Resources , Department Heads and Divison Heads</td>
								</tr>
								<tr valign="top" class="stakeholder_tb_grey">
									<td class="fw-semibold stakeholder_tb_r_pd">Board of Directors</td>
									<td class="stakeholder_tb_r_pd">Leadership briefings, Meetings, Emails</td>
									<td class="stakeholder_tb_r_pd">Monthly and, as and when necessary</td>
									<td class="stakeholder_tb_r_pd">Bank strategies and policies, Corporate governance, Financial, Compliance and Regulatory matters</td>
									<td class="stakeholder_tb_r_pd">Secretariat section</td>
								</tr>
								<tr valign="top">
									<td class="fw-semibold stakeholder_tb_r_pd">Government Regulatory Agencies</td>
									<td class="stakeholder_tb_r_pd">Reports, Meetings, Workshops</td>
									<td class="stakeholder_tb_r_pd">As and when necessary</td>
									<td class="stakeholder_tb_r_pd">Regulatory compliance, Government policies, Instructions, and programs, Directives</td>
									<td class="stakeholder_tb_r_pd">Executive Management</td>
								</tr>
								<tr valign="top" class="stakeholder_tb_grey">
									<td class="fw-semibold stakeholder_tb_r_pd">Vendors</td>
									<td class="stakeholder_tb_r_pd">Meeting, Emails, Technical evaluation, Consultation</td>
									<td class="stakeholder_tb_r_pd">As and when necessary</td>
									<td class="stakeholder_tb_r_pd">Commercial proposal and all modes of agreements</td>
									<td class="stakeholder_tb_r_pd">Purchasing Committee, Department Heads in relevant departments</td>
								</tr>
								<tr valign="top">
									<td class="fw-semibold stakeholder_tb_r_pd">Associations</td>
									<td class="stakeholder_tb_r_pd">Networking events, Meetings, Emails</td>
									<td class="stakeholder_tb_r_pd">As and when necessary</td>
									<td class="stakeholder_tb_r_pd">Guidelines, Cooperation and Coordination</td>
									<td class="stakeholder_tb_r_pd">Corporate Affairs , Financial Institution and relevant deparments</td>
								</tr>
								<tr valign="top" class="stakeholder_tb_grey">
									<td class="fw-semibold stakeholder_tb_r_pd">Other Financial Institutions</td>
									<td class="stakeholder_tb_r_pd">Networking events, Meetings, Emails, Introductory sales calls</td>
									<td class="stakeholder_tb_r_pd">As and when necessary</td>
									<td class="stakeholder_tb_r_pd">Business coordination, Expansion</td>
									<td class="stakeholder_tb_r_pd">Financial Instituation and relevant deparments</td>
								</tr>
								<tr valign="top">
									<td class="fw-semibold stakeholder_tb_r_pd">Community</td>
									<td class="stakeholder_tb_r_pd">Community engagement programs, Corproate social responsibility programs, Civil society organizations,  Community platform, Forum and through relevant Government agencies</td>
									<td class="stakeholder_tb_r_pd">As and when necessary</td>
									<td class="stakeholder_tb_r_pd">Development programs, Financial related aids ,and other related  support</td>
									<td class="stakeholder_tb_r_pd">Corporate communication section, Corporate social responsibility section , Marketing</td>
								</tr>
								<tr valign="top" class="stakeholder_tb_grey">
									<td class="fw-semibold stakeholder_tb_r_pd">Media</td>
									<td class="stakeholder_tb_r_pd">Press release/ Conference,  Advertisments, Interviews, Media related events, PR groups and Social media</td>
									<td class="stakeholder_tb_r_pd">Consistently</td>
									<td class="stakeholder_tb_r_pd">Products and services, Bank's updates and related financial matters</td>
									<td class="stakeholder_tb_r_pd">Corporate communication section, Marketing Team</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')