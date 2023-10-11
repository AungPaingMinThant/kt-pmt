<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  	<div class="app-brand demo">
    	<a href="{{ url('/') }}" target="_blank" class="app-brand-link">
    		<img src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 70%;margin: 0 auto;">
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<!-- Dashboard -->
		@if($page == 'Dashboard')
			<li class="menu-item active">
		@else
			<li class="menu-item">
		@endif
			<a href="{{ url('/admin/dashboard') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div>Dashboard</div>
			</a>
		</li>

		<!-- News Category -->
		@if(auth()->user()->name != 'AYA Bank Admin')
    		@if($page == 'Categories')
    			<li class="menu-item active">
    		@else
    			<li class="menu-item">
    		@endif
    			<a href="{{ url('/admin/categories') }}" class="menu-link">
    				<i class="menu-icon tf-icons bx bx-category"></i>
    				<div>Categories</div>
    			</a>
    		</li>
    	@endif

    	
    	@if(auth()->user()->name != 'AYA Bank Admin')
    		<!-- Media -->
			@if($page == 'Media')
				<li class="menu-item active">
			@else
				<li class="menu-item">
			@endif
				<a href="{{ url('/admin/media') }}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-cube-alt"></i>
					<div>Media</div>
				</a>
			</li>

			<!-- Page -->
			@if($page == 'Page')
				<li class="menu-item active">
			@else
				<li class="menu-item">
			@endif
				<a href="{{ url('/admin/pagelist') }}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-list-ul"></i>
					<div>Page</div>
				</a>
			</li>

			<!--Location-->
			@if($page == 'Location')
				<li class="menu-item active open">
			@else
				<li class="menu-item open">
			@endif
				<a href="{{ url('/admin/location') }}" class="menu-link menu-toggle">
					<i class="menu-icon tf-icons bx bx-location-plus"></i>
					<div>Locations</div>
				</a>
				<ul class="menu-sub">
					<li class="menu-item">
						<a href="{{ url('/admin/location/branch-location') }}" class="menu-link">
							<div data-i18n="Without menu">Branch Location</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="{{ url('/admin/location/atm-location') }}" class="menu-link">
							<div data-i18n="Without navbar">ATM Location</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="{{ url('/admin/location/fx-location') }}" class="menu-link">
							<div data-i18n="Without navbar">FX Counter Location</div>
						</a>
					</li>
				</ul>
			</li>
		@endif

		<!-- Blog -->
		@if($page == 'Blog')
			<li class="menu-item active">
		@else
			<li class="menu-item">
		@endif
			<a href="{{ url('/admin/blog') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-news"></i>
				<div>News Room</div>
			</a>
		</li>

		<!-- Exchange -->
		@if($page == 'Exchange')
			<li class="menu-item active open">
		@else
			<li class="menu-item open">
		@endif
			<a href="#" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-dollar"></i>
				<div>Currency Exchange</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="{{ url('/admin/exchange-rate') }}" class="menu-link">
						<div data-i18n="Without menu">Exchange Rate</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="{{ url('/admin/worker-remittance') }}" class="menu-link">
						<div data-i18n="Without navbar">Worker Remittance Rate</div>
					</a>
				</li>
			</ul>
		</li>

		@if(auth()->user()->name != 'AYA Bank Admin')
			<!-- FAQ -->
			@if($page == 'FAQ')
				<li class="menu-item active">
			@else
				<li class="menu-item">
			@endif
				<a href="{{ url('/admin/faq/list') }}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-bulb"></i>
					<div>FAQs</div>
				</a>
			</li>
		@endif

		<!-- Layouts -->
		<!-- <li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-layout"></i>
				<div data-i18n="Layouts">Layouts</div>
			</a>
		</li> -->
	</ul>
</aside>