<style type="text/css">
	.desktop_menu {
        display: block;
    }
    .mobile_menu {
        display: none;
    }
	@media  only screen and (max-width: 1024px) {
		#slide-navbar-collapse {
            position: fixed;
            top: 0;
            left: 0px;
            z-index: 99;
            width: 350px;
            height: 100%;
            background-color: #f7f7f7;
            overflow: auto;
        }
        .menu-overlay {
            display: none;
            background-color: #000;
            bottom: 0;
            left: 0;
            opacity: 0.5;
            filter: alpha(opacity=50);
            /* IE7 & 8 */
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1;
        }
        .dropdown-toggle::after{
            display: none;
        }
        .desktop_menu {
            display: none;
        }
        .mobile_menu {
            display: block;
        }
    }
</style>

<div class="desktop_menu">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a class="navbar-brand" href="#" style="padding: 22px 0px 20px 4px;">
					<img src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 70%;margin-top: 40px">
				</a>
			</div>
			<div class="col-md-9 text-right">
				<div class="row">
					<div class="col-md-12 text-right">
						<ul class="menu" style="display: flex;list-style: none;float: right;margin-bottom: 1rem;margin-top: 1rem;">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									English
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Myanmar</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<img src="{{ url('/images/register_icon.png') }}" class="img-fluid">&nbsp;Register
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<img src="{{ url('/images/login_icon.png') }}" class="img-fluid">&nbsp;Login
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row" style="border-top: 1px solid #ebeff1;">
					<div class="col-md-12 text-right">
						<ul class="menu" style="display: flex;list-style: none;float: right;margin-bottom: 1rem;margin-top: 1rem;">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Personal Banking</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Business Banking</a>
							</li>
							@if($page == 'mobilebanking' || $page == 'internetbanking')
								<li class="nav-item active">
							@else
								<li class="nav-item">
							@endif
								<a class="nav-link" href="#">Digital Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About AYA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span class="tf-icons bx bx-search"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-default mobile_menu d-block d-sm-none" >
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 10px 0px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false" style="margin-right: 30px;background-color: transparent;border: 1px solid #fff;border-radius: 5px;color: #fff;">
                <span class="tf-icons bx bx-menu" style="font-size: 30px;color: #c1c1c1;"></span>
            </button>
            <a href="#" target="_blank"><img alt="AYA BANK" src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 60%;margin-left: 10px;"></a>
        </div>

        <div class="collapse navbar-collapse" id="slide-navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active" style="padding: 20px;">
                    <a href=""><img src="{{url('/images/logo_wo_tagline_2.png')}}" class="img-fluid" style="width: 50%"></a>
                    <button class="elementskit-menu-close elementskit-menu-toggler" id="navbar_close" type="button" style="float: right;border: 1px solid rgba(0,0,0,.5);color: rgba(51,51,51,.5);padding: 5px 10px 5px 10px;border-radius: 5px;">X</button>
                </li>
                <li style="height: 20px;"></li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">HOME</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">PERSONAL BANKING</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">BUSINESS BANKING</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">DIGITAL SERVICES</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">ABOUT AYA</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">REGISTER</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">LOGIN</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">ENGLISH</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 14px;font-weight: 500;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;">MYANMAR</a>
                </li>
               <!--  <li class="dropdown d-none" style="padding: 10px 0px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 16px;font-weight: 600;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;font-family: 'Frutiger Black' !important;">Insurance Products <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                    <ul class="dropdown-menu" style="border: none;position: static !important;">
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Personal Insurance <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="#">
                                        HOME
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="#">
                                        PERSONAL BANKING
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="#">
                                        BUSINESS BANKING
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="#">
                                        DIGITAL SERVICES
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 0px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="#">
                                        ABOUT AYA
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Commercial Insurance <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/fire-insurance/">
                                        Fire Insurance
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/industrial-all-risks-insurance/">
                                        Industrial All Risks (IAR) Insurance
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 0px 15px 15px 15px;" href="https://ayasompo.com/contractors-all-risks-car-erection-all-risks-ear-insurance/">
                                        Constructor’s All Risks (CAR), Erection All Risks (EAR) Insurance
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/marine-cargo-insurance/">
                                        Marine Cargo Insurance
                                    </a>
                                </li>
                                <li class="d-none" style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/marine-hull-insurance/">
                                        Marine Hull Insurance
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 0px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/inland-transit-insurance/">
                                        Inland Transit Insurance
                                    </a>
                                </li>
                                <li class="d-none" style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/cash-in-safe-insurance/">
                                        Cash In Safe Insurance
                                    </a>
                                </li>
                                <li  class="d-none"style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/cash-in-transit-insurance/">
                                        Cash In Transit Insurance
                                    </a>
                                </li>
                                <li class="d-none" style="padding: 0px 0px 0px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/fidelity-insurance/">
                                        Fidelity Insurance
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

               <!--  <li class="dropdown d-none" style="padding: 10px 0px;">
                    <a href="https://ayasompo.com/knowledgehub/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 16px;font-weight: 600;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;font-family: 'Frutiger Black' !important;">Knowledge Hub <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                    <ul class="dropdown-menu" style="border: none;position: static !important;">
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Services <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/myayasompo" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        My AYASOMPO
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://iprotect.ayasompo.com/payment/index" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        E-payment
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/eclaim-form/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        E-Claim
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/calculate-premium-plan/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Premium Calculator
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/make-online-appointment/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Book An Appointment
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/find-locations-map/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Location Map
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/understand-the-insurance/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Understand Insurance
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 0px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/authorised-workshops" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Authorised Workshops
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Promotions <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/promotions/what-is-thet-taw-saunt/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        What is Thet Taw Saunt?
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                
                <!-- <li class="dropdown" style="padding: 10px 0px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;padding: 10px 15px 10px 15px;font-size: 16px;font-weight: 600;text-transform: uppercase;line-height: 24px;letter-spacing: 0px;font-family: 'Frutiger Black' !important;">About Us <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                    <ul class="dropdown-menu" style="border: none;position: static !important;">
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                            style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Our Company <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/company-profile/#get-to-know-us" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Get to Know Us
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/company-profile/#board-of-directors" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Board of Directors
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/company-profile/#board-committees" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Board Committees
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/company-profile/#management-committees" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;">
                                        Management Committees
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/company-profile/#our-team" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Our Team
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;margin-bottom: -20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/careers/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Careers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                            style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Our Corporate Policies <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/corporate-policies/#whistleblowing-policy">
                                        Whistleblowing Policy
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/corporate-policies/#cookie">
                                        Cookie Policy
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/corporate-policies/#quality">
                                        Cookie Policy
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/corporate-policies/#corporate-governance-policy">
                                        Corporate Governance Policy
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 0px 20px;margin-bottom: -20px;">
                                    <a class="menu-item pl-0" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" href="https://ayasompo.com/corporate-policies/#aml-cft-policy">
                                        AML/CFT Policy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="padding: 15px 0px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                            style="padding: 15px 15px 15px 7px;font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;">Our Corporate Information <i class="fas fa-chevron-down" style="position: absolute;right: 10px;border: 1px solid #000;padding: 5px 15px;border-radius: 30px;font-size: 10px;"></i></a>
                            <ul class="dropdown-menu" style="border: none;position: static !important;">
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/financial-highlights/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Financial Highlights
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/annual-reports/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Annual Reports
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/aya-financial-group/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        AYA Financial Group
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/news-and-events/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Company News & Updates
                                    </a>
                                </li>
                                <li style="padding: 0px 0px 15px 20px;">
                                    <a class="menu-item pl-0" href="https://ayasompo.com/environment-social-and-governance/" style="font-size: 14px;font-weight: bold;letter-spacing: 0px;color: #222222;background-color: #FFFFFF;padding: 15px 15px 15px 15px;" >
                                        Environment, Social, and Governance
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
            
        </div>
    </div>
</nav>

