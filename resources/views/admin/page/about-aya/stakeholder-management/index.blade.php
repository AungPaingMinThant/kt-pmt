@extends('layouts.frontend')

@section('title', 'Stakeholder Management – AYA Bank')

@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/our-strategies.css') }}">
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Stakeholder Management', 'page'=>'stakeholder_management'])
        	<br>
			@include('layouts.admin_banner', ['page'=>'stakeholder_management'])

			<div class="container stake_holder_container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold">
						Stakeholder&nbsp;
						<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_chart_modal"></i>
					</h4>
				</div>
				<div class="text-center">
					<img src="{{ url('/images/about-aya/stakeholder-management/stakeholder_chart.webp') }}" class="img-fluid stakeholder_chart">
				</div>

				<div class="space-80"></div>
				
				<div class="row">
					<h4 class="fw-bold">Engagement with Stakeholders</h4>
				</div>
				<div class="row stakeholder_table_div">
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

<!-- Modal -->
<div class="modal fade" id="section_chart_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/stakeholder-management/chart/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12 main_policy_row" style="margin-bottom: 10px;">
								<label class="col-form-label">Section Title</label>
								<input type="text" class="form-control" id="section_title" name="section_title" value="">

								<div class="space-20"></div>
								
								<label class="col-md-2 col-form-label">Mobile Banner Image</label>
								<input class="form-control" type="file" name="chart_image" id="chart_image" />
								<input type="hidden" class="form-control" id="chart_image_old" name="chart_image_old" value="">
								<div class="space-20"></div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.admin-footer', ['page'=>''])

<script type="text/javascript">
	function PolicyDetailAdd(main_policy) {
		var policy_detail_count = $("#"+main_policy+"_policy_detail_count").val();
    	var policy_detail_count_new = parseInt(policy_detail_count) + 1;

    	var policy_add_html = '<div class="row '+main_policy+'_policy_detail_row_'+policy_detail_count_new+'">'+
											'<div class="col-md-6" style="margin-bottom: 10px;">'+
												'<label class="col-form-label">Policy Detail Title '+policy_detail_count_new+'</label>'+
												'<input type="text" class="form-control" name="co_po_detail_title_'+policy_detail_count_new+'" value="">'+
												
												'<input type="hidden" class="form-control" name="co_po_detail_id_'+policy_detail_count_new+'" value="0">'+
												'<div class="space-20"></div>'+
											'</div>'+
											'<div class="col-md-6" style="margin-bottom: 10px;">'+
												'<label class="col-form-label">Policy Detail Desc '+policy_detail_count_new+'</label>'+
												'<textarea class="form-control co_po_detail_desc" name="co_po_detail_desc_'+policy_detail_count_new+'" rows="3" spellcheck="false" ></textarea>'+
												'<div class="space-20"></div>'+
											'</div>'+
											'<hr>'+
										'</div>';

		if (policy_detail_count_new == 1) {
			$("."+main_policy+"_main_policy_row").after(policy_add_html);
		} else {
			$("."+main_policy+"_policy_detail_row_"+policy_detail_count).after(policy_add_html);
		}
		
		$("#"+main_policy+"_policy_detail_count").val(policy_detail_count_new);

		tinymce.remove();
		tinymce.init({
	        selector: 'textarea',
	        height: 250,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });
	}
</script>

@endsection('content')