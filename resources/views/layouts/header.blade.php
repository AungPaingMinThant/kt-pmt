<style type="text/css">
	.desktop_menu {
        display: block;
    }
    .mobile_menu {
        display: none;
    }
    .mobile_logo {
    	width: 60% !important;
    	margin-left: 10px;
    }
    .menu_link {
    	padding: 10px 15px 10px 15px;
    	font-size: 14px;
    	font-weight: 500;
    	text-transform: uppercase;
    	line-height: 24px;
    	letter-spacing: 0px;
    }
    #searchModalDialog {
        max-width: 820px;
    }
    #search_txt{
        height: 70px;
        background-color: transparent;
        border-radius: 50px;
        border: 2px solid #fff;
        color: #fff;
        padding: 0 30px;
        width: 100%;
    }
    #search_txt::placeholder {
      color: #fff;
      opacity: 1;
    }
    .personal-dropdown-content {
/*		display: none;*/
		position: absolute;
		background-color: #f6f6f6;
		width: 100%;
		left: 0;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 99;
		top: 19%;
	}
	.left-menu-div {
		background-image: linear-gradient(to right, #980d36 , #d5244e);
		padding: 0px;
	}
	.left-menu-div > .row > a {
		color: #fff;
	}
	.menu-link {
		padding: 20px 0px 0px 60px !important;
		font-weight: 300;
	}
	.menu-link > a {
		padding: 0;
		padding-bottom: 15px;
	}
	.menu-link > a:not(.personal-other-menu) {
		font-size: 13px;
		border-bottom: 1px solid #e7e7e790;
	    width: 90%;
	}
	.menu-link.menu-active {
		background-color: #f6f6f6 !important;
	}
	.menu-link.menu-hover-active {
		background-color: #f6f6f6 !important;
	}
	.menu-active > a {
		color: #000 !important;
		font-weight: 700;
	}
	.menu-hover-active > a {
		color: #000 !important;
		font-weight: 700;
	}
    .personal-banking-li:hover .personal-dropdown-content {
	  display: block;
	}
	.menu_label {
		writing-mode: tb-rl;
	    transform: rotate(180deg);
	    position: absolute;
	    right: 0;
	    font-size: 27px;
	    top: 0;
	    background: #dfdfdf;
	    padding: 20px;
	    bottom: 0;
	    margin-bottom: 0;
	    text-align: center;
	    margin-right: 0px;
	    box-shadow: 10px 0px 40px 4px #ffffff;
	    color: #adadad;
	    font-weight: 200;
	}
    @media (max-width: 1300px) and (min-width: 577px) {
    	.mobile_logo {
	    	width: 30% !important;
	    	margin-left: 10px;
	    }
    }
	@media  only screen and (max-width: 1024px) {
		.mobile_logo {
	    	width: 60%;
	    	margin-left: 10px;
	    }
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
	<div class="container-fluid">
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
							@if($page == 'home')
								<li class="nav-item active">
							@else
								<li class="nav-item">
							@endif
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							@if($page == 'personal_banking')
								<li class="nav-item personal-banking-li active">
							@else
								<li class="nav-item personal-banking-li">
							@endif
								<a class="nav-link" href="#">Personal Banking</a>
								<!-- <div class="personal-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link menu-active">
												<a class="" href="#">ACCOUNTS AND SAVINGS</a>
											</div>
											<div class="row menu-link">
												<a class="" href="#">BORROWING</a>
											</div>
											<div class="row menu-link">
												<a class="" href="#">REMITTANCE AND PAYMENTS</a>
											</div>
											<div class="row menu-link">
												<a class="" href="#">PREMIUM BANKING</a>
											</div>
											<div class="row menu-link">
												<a class="" href="#">INSURANCE</a>
											</div>
											<div class="row menu-link">
												<a class="personal-other-menu" href="#">OTHER SERVIES</a>
											</div>
											<div class="space-50"></div>
										</div>
										<div class="col-md-7">
											<p class="menu_label">PERSONAL BANKING</p>
										</div>
									</div>
								</div> -->
							</li>
							@if($page == 'business_banking')
								<li class="nav-item active">
							@else
								<li class="nav-item">
							@endif
								<a class="nav-link" href="#">Business Banking</a>
							</li>
							@if($page == 'digital_services')
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
								<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBox" >
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

<nav class="navbar navbar-default mobile_menu" >
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 10px 0px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false" style="margin-right: 30px;background-color: transparent;border: 1px solid #fff;border-radius: 5px;color: #fff;">
                <span class="tf-icons bx bx-menu" style="font-size: 30px;color: #c1c1c1;"></span>
            </button>
            <a href="#" target="_blank"><img alt="AYA BANK" src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid mobile_logo"></a>
        </div>

        <div class="collapse navbar-collapse" id="slide-navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active" style="padding: 20px;">
                    <a href=""><img src="{{url('/images/logo_wo_tagline_2.png')}}" class="img-fluid" style="width: 50%"></a>
                    <button class="elementskit-menu-close elementskit-menu-toggler" id="navbar_close" type="button" style="float: right;border: 1px solid rgba(0,0,0,.5);color: rgba(51,51,51,.5);padding: 5px 10px 5px 10px;border-radius: 5px;">X</button>
                </li>
                <li style="height: 20px;"></li>
                <li style="padding: 10px 0px;">
                	@if($page == 'personal_banking')
                		<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #a02226;">HOME</a>
                	@else
                		<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">HOME</a>
                	@endif
                </li>
                <li style="padding: 10px 0px;">
                	@if($page == 'personal_banking')
                    	<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #a02226;">
                    @else
                    	<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">
                    @endif
                    	PERSONAL BANKING
                    </a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">BUSINESS BANKING</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">DIGITAL SERVICES</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">ABOUT AYA</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">REGISTER</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">LOGIN</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">ENGLISH</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">MYANMAR</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

<div class="modal fade" id="searchBox" tabindex="-1" role="dialog" aria-labelledby="searchBoxLabel" aria-hidden="true" style="background-color: #0a0a0ab8">
    <div class="modal-dialog" id="searchModalDialog" role="document" style="background-color: transparent;top: 39%;">
        <div class="modal-content" style="background-color: transparent;border-color: transparent;box-shadow: none !important;">
            <div class="modal-body" style="padding-right: 0px;">
                <form role="search" method="get" class="ekit-search-group" action="https://ayasompo.com/">
                    <input type="search" id="search_txt" class="ekit_search-field" placeholder="Search..." value="" name="s">
                    <button type="submit" class="ekit_search-button" style="background-color: transparent;border: none;color: #fff;position: absolute;top: 40%;right: 3%;">
                        <i aria-hidden="true" class="icon icon-search11"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

