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

		<!-- Blog -->
		@if($page == 'Blog')
			<li class="menu-item active">
		@else
			<li class="menu-item">
		@endif
			<a href="{{ url('/admin/blog') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-list-ul"></i>
				<div>News Room</div>
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

		<!-- Report -->
		<!-- @if($page == 'Report')
			<li class="menu-item active">
		@else
			<li class="menu-item">
		@endif
			<a href="{{ url('/admin/report') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-file-blank"></i>
				<div>Report</div>
			</a>
		</li> -->

		<!-- Exchange -->
		@if($page == 'Exchange')
			<li class="menu-item active">
		@else
			<li class="menu-item">
		@endif
			<a href="{{ url('/admin/exchange-rate') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-dollar"></i>
				<div>Exchange Rate</div>
			</a>
		</li>

		<!-- Layouts -->
		<!-- <li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-layout"></i>
				<div data-i18n="Layouts">Layouts</div>
			</a>
		</li> -->
	</ul>
</aside>