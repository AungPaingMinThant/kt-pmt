@extends('layouts.frontend-app')

@section('title', 'Corporate Milestones – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-milestones.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_milestone'])

			<div class="container " >
				<div class="space-40"></div>
				<div class="col-md-12">
					<p>Over a decade, AYA Bank has built significant strides in fulfilling its mandate. The Bank witnessed a number of milestones in the country along with the effective growth and long-term value creation.</p>

					<div class="space-30"></div>
					<p class="milestone_title fw-bold">Take a journey through our story</p>
					<div class="space-20"></div>
				</div>
				<div class="row">
					<div class="col-md-9 timeline-col">
						<ul class="desktop_timeline timeline">
							<li class="2023" id="2023">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2023</h5>
										<img src="{{ url('/milestone-img/2023_MOU_with_UMFCCI.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 February</p>
										<p>Signed MOU between AYA Bank and UMFCCI on development of MSMEs</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 May</p>
										<p>Launched ‘AYA Green Financing’ for Electric Vehicles to enable accessible and eco-friendly mobility options for the community.</p>

										<div class="space-20"></div>
										<p class="fw-semibold">20 May</p>
										<p>Signed a strategic partnership between AYA Bank and MYANWEN, the Myanmar Women Entrepreneurs Network, to empower SMEs across Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">9 June</p>
										<p>Partnership with ‘Ria’, the renowned money transfer service, to offer seamless and secure international remittance services.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2022" id="2022">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2022</h5>
										<img src="{{ url('/milestone-img/2022_AYA_Express_Zay.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March </p>
										<p>Reached ONE MILLION customers for AYA Pay digital wallet solution</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>First Bank in Myanmar to launch the international remittance saving account “Ngwe Toe Mae-Shwe O”</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October – November</p>
										<p>Organized ‘AYA Banker Quiz’ learning and competition program for staff from all levels of the bank to build up internal relations and improve industrial knowledge</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Conducted ‘AYA Express Zay’ event to offer visitors one-stop digital banking services</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Incorporated as Public Company Limited (PCL) to create long-term growth</p>
									</div>
								</div>
							</li>
							<li class="2021" id="2021">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2021</h5>
										<img src="{{ url('/milestone-img/2021_Core_Banking_System_E7.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">23 March</p>
										<p>Received ‘Best Bank for CSR’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">20 July </p>
										<p>Upgraded to Core Banking System Essence 7</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2020" id="2020">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2020</h5>
										<img src="{{ url('/milestone-img/2020_Highest_Tax_Payer.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">10 August</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2018-2019</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 August</p>
										<p>Opened 265th branch in Kachin State</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>Established quarantine camps and an emergency temporary hospital to treat patients of COVID-19, in collaboration with the Ayeyarwady Foundation</p>
									</div>
								</div>
							</li>
							<li class="2019" id="2019">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2019</h5>
										<img src="{{ url('/milestone-img/2019_AYA_Pay.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">24 January</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2017-2018</p>

										<div class="space-20"></div>
										<p class="fw-semibold">January</p>
										<p>Launched new deposit product; ‘AYA  Su-Buu’ designed for payroll customers</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Bank for CSR’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Bank for SMEs’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">May</p>
										<p>Launched new deposit product; ‘Business Account Call Deposit’ designed for large corporates</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 May</p>
										<p>Received globally recognized EDGE certificate for ‘Gender Equality’ in working environment</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October</p>
										<p>Upgraded to ‘AYA Mobile Banking 2.0’ for banking customers to use the bank services on a day-to-day basis</p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Introduced ‘DBS to AYA Remit (Inward)’, a convenient way to send money</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Launched digital wallet solution, ‘AYA Pay’ for convenient payments and transfers</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2018" id="2018">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2018</h5>
										<img src="{{ url('/milestone-img/2018_Best_Bank_Award.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Launched ‘Home Loan’ that customers can afford to own your desired apartment or condominium or landed house.</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Used CBM Net’s Customer Credit Transfer(CCT) function, an upgraded payment system for easy and fast transfer </p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Domestic Bank’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">May</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 20 large tax payers for the tax assessment year 2016-2017</p>

										<div class="space-20"></div>
										<p class="fw-semibold">August</p>
										<p>Launched ‘MFI Lending’ to provide microfinance to clients </p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Launched ‘Agriculture Loan’ to finance SMEs in the agriculture sector</p>
									</div>
								</div>
							</li>
							<li class="2017" id="2017">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2017</h5>
										<img src="{{ url('/milestone-img/2017_auto_loan.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">31 January</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 20 large tax payers for the tax assessment year 2015-2016</p>

										<div class="space-20"></div>
										<p class="fw-semibold">2 June</p>
										<p>Partnered with Misys for the Bank’s transformation program to digitalize operations and improve overall efficiency</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 November</p>
										<p>Introduced First Corporate Credit Card in Myanmar ‘AYA Universal Corporate MPU-JCB Co-Branded Card’</p>

										<div class="space-20"></div>
										<p class="fw-semibold">25 November</p>
										<p>Launched ‘Automobile Hire Purchase Loan’ to introduce customers with the easiest and convenient financial plan to purchase vehicles</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2016" id="2016">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2016</h5>
										<img src="{{ url('/milestone-img/2016_100th_Branch_at_River_View.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2014-2015</p>

										<div class="space-20"></div>
										<p class="fw-semibold">1 April</p>
										<p>First institution in Myanmar to adopt full compliance with International Financial Reporting Standards (IFRS)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">28 July</p>
										<p>Launched MPU-UPI Co-Brand Prepaid Card</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 August</p>
										<p>Launched AYA-JCB-MPU Co-Brand Prepaid Card </p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 September</p>
										<p>Launched JICA Two Step Loan for SMEs</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Obtained ‘Best Private Bank, Myanmar’ 2016 from World Finance</li>
												<li>Obtained ‘Best Banking Group, Myanmar’ 2016 from World Finance</li>
												<li>Obtained ‘Most Sustainable Bank, Myanmar’ 2016 from World Finance</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Launched Education Loan for students attending at private institutions</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Opened AYA 200th Branch at River View Building, Yangon</p>
									</div>
								</div>
							</li>
							<li class="2015" id="2015">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2015</h5>
										<img src="{{ url('/milestone-img/2015_royal_banking.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">January</p>
										<p>Set up Data Center which incorporates cutting-edge information technology infrastructure and networking equipment</p>

										<div class="space-20"></div>
										<p class="fw-semibold">April</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2013-2014</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 January</p>
										<p>Launched m-Banking to access financial services 24/7 from customers’ mobile device</p>

										<div class="space-20"></div>
										<p class="fw-semibold">26 May</p>
										<p>Launched AYA Royal Banking to provide exclusive financial solutions for premium customers</p>

										<div class="space-20"></div>
										<p class="fw-semibold">2 July</p>
										<p>Collaborated with OCBC Bank for international transfer</p>

										<div class="space-20"></div>
										<p class="fw-semibold">15 July</p>
										<p>Launched ‘Bill Payment Service’ in collaboration with Yangon City Development Committee (YCDC)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Obtained ‘Best Private Bank, Myanmar’ 2015 by World Finance</li>
												<li>Obtained ‘Best Banking Group, Myanmar’ 2015 by World Finance</li>
												<li>Obtained ‘Most Sustainable Bank,  Myanmar’ 2015 by World Finance</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Launched AYA Credit Card to provide customers a convenient way of borrowing money</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2014" id="2014">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2014</h5>
										<img src="{{ url('/milestone-img/2014_ROWE_Office_Building.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">31 March</p>
										<p>Launched AYA World Travel Card (Prepaid Card)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">21 May</p>
										<p>Reached AYA total deposit ONE TRILLION</p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 June</p>
										<p>Obtained approval for AYA i-Banking Service from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">27 June</p>
										<p>Launched AYA i-Banking Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">July</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Received ‘Banker of the Year 2014’ from the Myanmar Times</li>
												<li>Received ‘Global Banking & Finance Review Award 2014’ for Fastest Growing Retail Bank in Myanmar, 2014</li>
												<li>Received ‘Global Banking & Finance Review Award 2014’ for Most Innovative Banking Services (AYA i-Banking) Myanmar, 2014</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Received ‘Best Private Bank Myanmar’ award from World Finance</li>
												<li>Received ‘Best Retail Bank Myanmar’ award from World Finance</li>
												<li>Set up administrative head office at ROWE building</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Opened AYA 100th Branch in Yangon Division</p>
									</div>
								</div>
							</li>
							<li class="2013" id="2013">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2013</h5>
										<img src="{{ url('/milestone-img/2013_VISA_Maser_Card.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">23 February</p>
										<p>Launched AYA Q-Remit Money Transfer Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">4 June</p>
										<p>Signed with Western Union Financial Services Inc. for Money Transfer Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 June</p>
										<p>Obtained Principal License from VISA Payment Network</p>

										<div class="space-20"></div>
										<p class="fw-semibold">1 July</p>
										<p>Obtained Principal License from MasterCard Payment Network</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>Received ‘Best Private Bank Myanmar’ award from World Finance</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2012" id="2012">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2012</h5>
										<img src="{{ url('/milestone-img/2012_SWIFT_Telegraphic_Transfer.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 February</p>
										<p>Launched Maybank Money Express Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">9 July</p>
										<p>Obtained approval for Foreign Currency Account, SWIFT Telegraphic Transfer and Letter of Credit (LC) from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 August</p>
										<p>Became member of United Nations Global Compact (UNGC) with commitments in areas of human rights, labour, environment and anti-corruption</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 September</p>
										<p>Became member of Myanmar Payment Union (MPU)</p>
									</div>
								</div>
							</li>
							<li class="2011" id="2011">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2011</h5>
										<img src="{{ url('/milestone-img/2011_ATM.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">24 October</p>
										<p>Obtained Money Changer License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">8 November</p>
										<p>The first Bank to implement a Centralized Core Banking System</p>

										<div class="space-20"></div>
										<p class="fw-semibold">21 November</p>
										<p>Launched ATM operations</p>

										<div class="space-20"></div>
										<p class="fw-semibold">25 November</p>
										<p>Obtained Authorised Dealer License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">23 December</p>
										<p>Obtained Money Transfer Service License from the Central Bank of Myanmar</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted 2010" id="2010">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2010</h5>
										<img src="{{ url('/milestone-img/2010_AYA_Bank_Establishment.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 July</p>
										<p>Obtained Banking License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 July</p>
										<p>Registered as a Private Company Limited by Shares</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 August</p>
										<p>Established AYA Bank Ltd. and opened its first branch in Nay Pyi Taw</p>
									</div>
								</div>
							</li>
						</ul>
						<ul class="mobile_timeline timeline">
							<li class="2023">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2023</h5>
										<img src="{{ url('/milestone-img/2023_MOU_with_UMFCCI.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 February</p>
										<p>Signed MOU between AYA Bank and UMFCCI on development of MSMEs</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 May</p>
										<p>Launched ‘AYA Green Financing’ for Electric Vehicles to enable accessible and eco-friendly mobility options for the community.</p>

										<div class="space-20"></div>
										<p class="fw-semibold">20 May</p>
										<p>Signed a strategic partnership between AYA Bank and MYANWEN, the Myanmar Women Entrepreneurs Network, to empower SMEs across Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">9 June</p>
										<p>Partnership with ‘Ria’, the renowned money transfer service, to offer seamless and secure international remittance services.</p>
									</div>
								</div>
							</li>
							<li class="2022">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2022</h5>
										<img src="{{ url('/milestone-img/2022_AYA_Express_Zay.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March </p>
										<p>Reached ONE MILLION customers for AYA Pay digital wallet solution</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>First Bank in Myanmar to launch the international remittance saving account “Ngwe Toe Mae-Shwe O”</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October – November</p>
										<p>Organized ‘AYA Banker Quiz’ learning and competition program for staff from all levels of the bank to build up internal relations and improve industrial knowledge</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Conducted ‘AYA Express Zay’ event to offer visitors one-stop digital banking services</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Incorporated as Public Company Limited (PCL) to create long-term growth</p>
									</div>
								</div>
							</li>
							<li class="2021">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2021</h5>
										<img src="{{ url('/milestone-img/2021_Core_Banking_System_E7.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">23 March</p>
										<p>Received ‘Best Bank for CSR’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">20 July </p>
										<p>Upgraded to Core Banking System Essence 7</p>
									</div>
								</div>
							</li>
							<li class="2020">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2020</h5>
										<img src="{{ url('/milestone-img/2020_Highest_Tax_Payer.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">10 August</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2018-2019</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 August</p>
										<p>Opened 265th branch in Kachin State</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>Established quarantine camps and an emergency temporary hospital to treat patients of COVID-19, in collaboration with the Ayeyarwady Foundation</p>
									</div>
								</div>
							</li>
							<li class="2019">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2019</h5>
										<img src="{{ url('/milestone-img/2019_AYA_Pay.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">24 January</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2017-2018</p>

										<div class="space-20"></div>
										<p class="fw-semibold">January</p>
										<p>Launched new deposit product; ‘AYA  Su-Buu’ designed for payroll customers</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Bank for CSR’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Bank for SMEs’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">May</p>
										<p>Launched new deposit product; ‘Business Account Call Deposit’ designed for large corporates</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 May</p>
										<p>Received globally recognized EDGE certificate for ‘Gender Equality’ in working environment</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October</p>
										<p>Upgraded to ‘AYA Mobile Banking 2.0’ for banking customers to use the bank services on a day-to-day basis</p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Introduced ‘DBS to AYA Remit (Inward)’, a convenient way to send money</p>

										<div class="space-20"></div>
										<p class="fw-semibold">December</p>
										<p>Launched digital wallet solution, ‘AYA Pay’ for convenient payments and transfers</p>
									</div>
								</div>
							</li>
							<li class="2018">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2018</h5>
										<img src="{{ url('/milestone-img/2018_Best_Bank_Award.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Launched ‘Home Loan’ that customers can afford to own your desired apartment or condominium or landed house.</p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Used CBM Net’s Customer Credit Transfer(CCT) function, an upgraded payment system for easy and fast transfer </p>

										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received ‘Best Domestic Bank’ award from Asiamoney</p>

										<div class="space-20"></div>
										<p class="fw-semibold">May</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 20 large tax payers for the tax assessment year 2016-2017</p>

										<div class="space-20"></div>
										<p class="fw-semibold">August</p>
										<p>Launched ‘MFI Lending’ to provide microfinance to clients </p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Launched ‘Agriculture Loan’ to finance SMEs in the agriculture sector</p>
									</div>
								</div>
							</li>
							<li class="2017">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2017</h5>
										<img src="{{ url('/milestone-img/2017_auto_loan.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">31 January</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 20 large tax payers for the tax assessment year 2015-2016</p>

										<div class="space-20"></div>
										<p class="fw-semibold">2 June</p>
										<p>Partnered with Misys for the Bank’s transformation program to digitalize operations and improve overall efficiency</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 November</p>
										<p>Introduced First Corporate Credit Card in Myanmar ‘AYA Universal Corporate MPU-JCB Co-Branded Card’</p>

										<div class="space-20"></div>
										<p class="fw-semibold">25 November</p>
										<p>Launched ‘Automobile Hire Purchase Loan’ to introduce customers with the easiest and convenient financial plan to purchase vehicles</p>
									</div>
								</div>
							</li>
							<li class="2016">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2016</h5>
										<img src="{{ url('/milestone-img/2016_100th_Branch_at_River_View.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">March</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2014-2015</p>

										<div class="space-20"></div>
										<p class="fw-semibold">1 April</p>
										<p>First institution in Myanmar to adopt full compliance with International Financial Reporting Standards (IFRS)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">28 July</p>
										<p>Launched MPU-UPI Co-Brand Prepaid Card</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 August</p>
										<p>Launched AYA-JCB-MPU Co-Brand Prepaid Card </p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 September</p>
										<p>Launched JICA Two Step Loan for SMEs</p>

										<div class="space-20"></div>
										<p class="fw-semibold">October</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Obtained ‘Best Private Bank, Myanmar’ 2016 from World Finance</li>
												<li>Obtained ‘Best Banking Group, Myanmar’ 2016 from World Finance</li>
												<li>Obtained ‘Most Sustainable Bank, Myanmar’ 2016 from World Finance</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">November</p>
										<p>Launched Education Loan for students attending at private institutions</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Opened AYA 200th Branch at River View Building, Yangon</p>
									</div>
								</div>
							</li>
							<li class="2015">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2015</h5>
										<img src="{{ url('/milestone-img/2015_royal_banking.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">January</p>
										<p>Set up Data Center which incorporates cutting-edge information technology infrastructure and networking equipment</p>

										<div class="space-20"></div>
										<p class="fw-semibold">April</p>
										<p>Received 'Myanmar Highest Tax Payer Award' for including in top 10 large tax payers for the tax assessment year 2013-2014</p>

										<div class="space-20"></div>
										<p class="fw-semibold">16 January</p>
										<p>Launched m-Banking to access financial services 24/7 from customers’ mobile device</p>

										<div class="space-20"></div>
										<p class="fw-semibold">26 May</p>
										<p>Launched AYA Royal Banking to provide exclusive financial solutions for premium customers</p>

										<div class="space-20"></div>
										<p class="fw-semibold">2 July</p>
										<p>Collaborated with OCBC Bank for international transfer</p>

										<div class="space-20"></div>
										<p class="fw-semibold">15 July</p>
										<p>Launched ‘Bill Payment Service’ in collaboration with Yangon City Development Committee (YCDC)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Obtained ‘Best Private Bank, Myanmar’ 2015 by World Finance</li>
												<li>Obtained ‘Best Banking Group, Myanmar’ 2015 by World Finance</li>
												<li>Obtained ‘Most Sustainable Bank,  Myanmar’ 2015 by World Finance</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Launched AYA Credit Card to provide customers a convenient way of borrowing money</p>
									</div>
								</div>
							</li>
							<li class="2014">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2014</h5>
										<img src="{{ url('/milestone-img/2014_ROWE_Office_Building.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">31 March</p>
										<p>Launched AYA World Travel Card (Prepaid Card)</p>

										<div class="space-20"></div>
										<p class="fw-semibold">21 May</p>
										<p>Reached AYA total deposit ONE TRILLION</p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 June</p>
										<p>Obtained approval for AYA i-Banking Service from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">27 June</p>
										<p>Launched AYA i-Banking Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">July</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Received ‘Banker of the Year 2014’ from the Myanmar Times</li>
												<li>Received ‘Global Banking & Finance Review Award 2014’ for Fastest Growing Retail Bank in Myanmar, 2014</li>
												<li>Received ‘Global Banking & Finance Review Award 2014’ for Most Innovative Banking Services (AYA i-Banking) Myanmar, 2014</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>
											<ul style="list-style: disc;text-align: left;">
												<li>Received ‘Best Private Bank Myanmar’ award from World Finance</li>
												<li>Received ‘Best Retail Bank Myanmar’ award from World Finance</li>
												<li>Set up administrative head office at ROWE building</li>
											</ul>
										</p>

										<div class="space-20"></div>
										<p class="fw-semibold">31 December</p>
										<p>Opened AYA 100th Branch in Yangon Division</p>
									</div>
								</div>
							</li>
							<li class="2013">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2013</h5>
										<img src="{{ url('/milestone-img/2013_VISA_Maser_Card.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">23 February</p>
										<p>Launched AYA Q-Remit Money Transfer Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">4 June</p>
										<p>Signed with Western Union Financial Services Inc. for Money Transfer Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 June</p>
										<p>Obtained Principal License from VISA Payment Network</p>

										<div class="space-20"></div>
										<p class="fw-semibold">1 July</p>
										<p>Obtained Principal License from MasterCard Payment Network</p>

										<div class="space-20"></div>
										<p class="fw-semibold">September</p>
										<p>Received ‘Best Private Bank Myanmar’ award from World Finance</p>
									</div>
								</div>
							</li>
							<li class="2012">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2012</h5>
										<img src="{{ url('/milestone-img/2012_SWIFT_Telegraphic_Transfer.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 February</p>
										<p>Launched Maybank Money Express Service</p>

										<div class="space-20"></div>
										<p class="fw-semibold">9 July</p>
										<p>Obtained approval for Foreign Currency Account, SWIFT Telegraphic Transfer and Letter of Credit (LC) from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">17 August</p>
										<p>Became member of United Nations Global Compact (UNGC) with commitments in areas of human rights, labour, environment and anti-corruption</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 September</p>
										<p>Became member of Myanmar Payment Union (MPU)</p>
									</div>
								</div>
							</li>
							<li class="2011">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-check"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2011</h5>
										<img src="{{ url('/milestone-img/2011_ATM.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">24 October</p>
										<p>Obtained Money Changer License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">8 November</p>
										<p>The first Bank to implement a Centralized Core Banking System</p>

										<div class="space-20"></div>
										<p class="fw-semibold">21 November</p>
										<p>Launched ATM operations</p>

										<div class="space-20"></div>
										<p class="fw-semibold">25 November</p>
										<p>Obtained Authorised Dealer License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">23 December</p>
										<p>Obtained Money Transfer Service License from the Central Bank of Myanmar</p>
									</div>
								</div>
							</li>
							<li class="2010">
								<div class="timeline-badge">
									<i class="glyphicon glyphicon-credit-card"></i>
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h5 class="timeline-title">2010</h5>
										<img src="{{ url('/milestone-img/2010_AYA_Bank_Establishment.webp') }}" class="img-fluid">
									</div>
									<div class="timeline-body">
										<div class="space-20"></div>
										<p class="fw-semibold">2 July</p>
										<p>Obtained Banking License from the Central Bank of Myanmar</p>

										<div class="space-20"></div>
										<p class="fw-semibold">14 July</p>
										<p>Registered as a Private Company Limited by Shares</p>

										<div class="space-20"></div>
										<p class="fw-semibold">11 August</p>
										<p>Established AYA Bank Ltd. and opened its first branch in Nay Pyi Taw</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-1 space-col"></div>
					<div class="col-md-2 year-col">
						<nav class="milestones_side_bar" id="myScrollspy">
							<ul class="nav nav-pills flex-column side_bar">
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_title">
										<span class="pr-5 fw-bold">Year</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link active" id="2023_link" href="#2023">
										<span>2023</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2022_link" href="#2022">
										<span>2022</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2021_link" href="#2021">
										<span>2021</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2020_link" href="#2020">
										<span>2020</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2019_link" href="#2019">
										<span>2019</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2018_link" href="#2018">
										<span>2018</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2017_link" href="#2017">
										<span>2017</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2016_link" href="#2016">
										<span>2016</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2015_link" href="#2015">
										<span>2015</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2014_link" href="#2014">
										<span>2014</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2013_link" href="#2013">
										<span>2013</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2012_link" href="#2012">
										<span>2012</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2011_link" href="#2011">
										<span>2011</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2010_link" href="#2010">
										<span>2010</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var y_2023 = $("#2023");
		if (scrollTop > y_2023.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2023_link").addClass('active');
		}

		var y_2022 = $("#2022");
		if (scrollTop > y_2022.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2022_link").addClass('active');
		}

		var y_2021 = $("#2021");
		if (scrollTop > y_2021.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2021_link").addClass('active');
		}

		var y_2020 = $("#2020");
		if (scrollTop > y_2020.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2020_link").addClass('active');
		}

		var y_2019 = $("#2019");
		if (scrollTop > y_2019.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2019_link").addClass('active');
		}

		var y_2018 = $("#2018");
		if (scrollTop > y_2018.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2018_link").addClass('active');
		}

		var y_2017 = $("#2017");
		if (scrollTop > y_2017.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2017_link").addClass('active');
		}

		var y_2016 = $("#2016");
		if (scrollTop > y_2016.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2016_link").addClass('active');
		}

		var y_2015 = $("#2015");
		if (scrollTop > y_2015.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2015_link").addClass('active');
		}

		var y_2014 = $("#2014");
		if (scrollTop > y_2014.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2014_link").addClass('active');
		}

		var y_2013 = $("#2013");
		if (scrollTop > y_2013.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2013_link").addClass('active');
		}

		var y_2012 = $("#2012");
		if (scrollTop > y_2012.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2012_link").addClass('active');
		}

		var y_2011 = $("#2011");
		if (scrollTop > y_2011.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2011_link").addClass('active');
		}

		var y_2010 = $("#2010");
		if (scrollTop > y_2010.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2010_link").addClass('active');
		}
	});

	function scrollEle(year) {
		var scrollDiv = document.getElementById("phone-txt").offsetTop+100;
		window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
	}
</script>

@endsection('content')