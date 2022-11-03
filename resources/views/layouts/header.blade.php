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
            </ul>
            
        </div>
    </div>
</nav>

