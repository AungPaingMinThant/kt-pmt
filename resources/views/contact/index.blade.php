@extends('layouts.frontend-app')

@section('title', 'Contact Us – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/contact.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>''])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'contact_us'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container">
					<div class="row text-center">
						<p class="contact_tag">Need an answer? <br>Get in touch with us through available channels</p>
					</div>
				</div>
				
				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Hotline</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Visit Us</label>
						<input type="radio" id="radio-3" name="tabs">
						<label class="tab" for="radio-3">Other Contacts</label>
						<span class="glider"></span>
					</div>
				</div>
				<div class="space-80"></div>

				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="hotline_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-hotline" aria-controls="navs-pills-top-hotline" aria-selected="true" >
								Hotline
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="visit_us_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-visit_us" aria-controls="navs-pills-top-visit_uss" aria-selected="false" >
								Visit Us
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="other_contact_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-other-contacts" aria-controls="navs-pills-other-contacts" aria-selected="false" >
								Other Contacts
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-hotline" role="tabpanel" style="background: transparent;">
							<div class="container section_1">
								<div class="row">
									<p class="mb-30">We will support you with a wide range of information and helps to show you how to do your banking.</p>
									<p class="mb-30" style="color: #495a63;">Should you have any question or suggestion regarding our products, services or promotions?</p>
									<div class="col-md-6 mb-30">
										<table>
											<tr valign="middle">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/contact_hotline_call_icon.webp') }}" class="img-fluid contact_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">Call us</p>
													<p class="mb-0"><a href="tel:+9512317777">(95)-1-231 7777</a></p>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-md-6 mb-30">
										<table>
											<tr valign="middle">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/contact_hotline_mail_icon.webp') }}" class="img-fluid contact_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">E-mail us</p>
													<p class="mb-0"><a href="mailto:feedback@ayabank.com">feedback@ayabank.com</a></p>
												</td>
											</tr>
										</table>
									</div>

									<p>AYA Bank hotline channel is the best way for our customers for enquiries, suggestions, feedbacks and requests. Our call center agents handle inbound (customer service and tech support) and outbound (marketing, surveys, and sales) calls. Customer interactions are handled over the phone and provides practical information and solution on products and services, card loss, mobile banking, bill payment, such as:</p>
								</div>
								<div class="row">
									<div class="col-1 bullet_square_col">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 contact_us_fact">
										<p>How can I access internet banking?</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1 bullet_square_col">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 contact_us_fact">
										<p>I want to know more on mobile banking services.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1 bullet_square_col">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 contact_us_fact">
										<p>What do I do for my loss debit card?</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1 bullet_square_col">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 contact_us_fact">
										<p>Who should I contact for SME loans?</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1 bullet_square_col">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11 contact_us_fact">
										<p>I receive a message from AYA Bank. What should I do?</p>
									</div>
								</div>

								<div class="space-30"></div>

								<div class="row">
									<p class="mb-30" style="color: #495a63;">Should you have any grievance to raise formally related to the Bank’s staff or service?</p>
									<div class="col-md-6 mb-30">
										<table>
											<tr valign="middle">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/contact_hotline_call_icon.webp') }}" class="img-fluid contact_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">Call us</p>
													<p class="mb-0"><a href="tel:+9512317777">(95)-1-231 7777</a></p>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-md-6 mb-30">
										<table>
											<tr valign="middle">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/contact_hotline_mail_icon.webp') }}" class="img-fluid contact_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">E-mail us</p>
													<p class="mb-0"><a href="mailto:info@ayabank.com">info@ayabank.com</a></p>
												</td>
											</tr>
										</table>
									</div>

									<p>Stakeholders can transparently raise their concerns, discontents, disgruntlements and dissatisfactions via phone or e-mail. Complaints received by the Grievance Line are directly resolved or submitted to concerning department / section as required to deliver consistent support and manage complaints in a timely manner. For complaints, please provide your name and correspondence details to facilitate our follow-up action. Apparently, problematic areas can be identified and improved to ensure smooth customer experience in the future.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-visit_us" role="tabpanel" style="background: transparent;">
							<div class="container section_1">
								<div class="row">
									<p class="mb-30">You can explore contact details for our main offices and branches where we operate by list below.</p>
									<p class="mb-30" style="color: #495a63;">Visit us in person to our head offices in Yangon and Naypyitaw.</p>
									<div class="col-md-6 mb-30">
										<table>
											<tr class="address_pin">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/location_pin.webp') }}" class="img-fluid address_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">Operation Head Office</p>
													<p class="mb-0">No. 416, Mahabandoola Road,<br>Kyauktada Township, Yangon, Myanmar.</p>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-md-6 mb-30">
										<table>
											<tr class="address_pin">
												<td class="contact_table_icon_td" >
													<img src="{{ url('/images/contact/location_pin.webp') }}" class="img-fluid address_icon">
												</td>
												<td>
													<p class="mb-10 fw-semibold">Registered Office</p>
													<p class="mb-0">110-112, ThiriYadanar Shopping Complex, <br>DekhinaThiri, Naypyitaw, Myanmar.</p>
												</td>
											</tr>
										</table>
									</div>
								</div>

								<!-- <div class="row">
									<p class="" style="color: #495a63;">Visit us at one of our many branches across Myanmar.</p>
									<p class="fw-bold mb-30"><span class="theme_text_color">Find</span> your nearest AYA branches </p>
									<div class="col-md-12 text-center">
										<img src="{{ url('/images/contact/location_map.webp') }}" class="img-fluid">
									</div>
								</div> -->

								<div class="space-40"></div>
								<div class="branches_address_row">
									<div class="col-md-7">
										<p class="mb-30" style="font-size: 20px;">Click here to locate our branches and their operation hours</p>
										<a href="{{ url('/images/contact/BranchesList.xlsx') }}" target="_blank">
											<button class="btn download_lists_btn">Download Lists</button>
										</a>
									</div>
									<div class="col-md-5"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-other-contacts" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row">
									<div class="col-md-7">
										<img src="{{ url('/images/contact/contact_other_FDI.webp') }}" class="img-fluid">
									</div>
									<div class="col-md-5 other_contact_fdi_detail">
										<div class="row">
											<table>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold" style="font-size: 18px;">Foreign Direct Investment (FDI)</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/contact_hotline_mail_icon.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">E-mail us</p>
														<p class="mb-0"><a href="mailto:fdi@ayabank.com">fdi@ayabank.com</a></p>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="space-50"></div>
								<div class="row other_contact_IR_row">
									<div class="col-md-5 other_contact_IR_detail">
										<div class="row">
											<table>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold" style="font-size: 18px;">Investor Relations</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/contact_hotline_call_icon.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">Call us</p>
														<p class="mb-0"><a href="tel:+951252796">(95)-1-252796-252730 </a><span class="IR_ext">Ext : 228</span></p>
													</td>
												</tr>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold" style="font-size: 18px;">&nbsp;</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/contact_hotline_mail_icon.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">E-mail us</p>
														<p class="mb-0"><a href="mailto:investorrelations@ayabank.com">investorrelations@ayabank.com</a></p>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="col-md-7">
										<img src="{{ url('/images/contact/contact_other_investor_relations.webp') }}" class="img-fluid">
									</div>
								</div>
								<div class="space-50"></div>
								<div class="row">
									<div class="col-md-7">
										<img src="{{ url('/images/contact/contact_other_royal_banking.webp') }}" class="img-fluid">
									</div>
									<div class="col-md-5 other_contact_royal_banking_detail">
										<div class="row">
											<table>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold mb-10" style="font-size: 18px;">Royal Banking</p>
														<p>Novotel branch</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/location_pin.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">Address</p>
														<p class="mb-0">Third floor, No (459), Pyay Road, Kamayut Township, Novotel Yangon Max Hotel, Yangon. </p>
													</td>
												</tr>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold mb-10" style="font-size: 18px;">&nbsp;</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/contact_hotline_call_icon.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">Call us</p>
														<p class="mb-0"><a href="tel:+9512306327">(95)-1-2306327~329</a></p>
													</td>
												</tr>
												<tr valign="middle">
													<td colspan="2">
														<p class="fw-semibold mb-10" style="font-size: 18px;">&nbsp;</p>
													</td>
												</tr>
												<tr valign="middle">
													<td class="contact_table_icon_td" >
														<img src="{{ url('/images/contact/fax_icon.webp') }}" class="img-fluid contact_icon">
													</td>
													<td>
														<p class="mb-10 fw-semibold">Fax</p>
														<p class="mb-0">2306326 ~ 2306330</p>
													</td>
												</tr>
											</table>
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
		$("#hotline_tab").click();
	});
	$("#radio-2").click(function(){
		$("#visit_us_tab").click();
	});
	$("#radio-3").click(function(){
		$("#other_contact_tab").click();
	});
</script>

@endsection('content')