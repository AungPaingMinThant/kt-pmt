<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      	<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        	<i class="bx bx-menu bx-sm"></i>
      	</a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    	<!-- Search -->
		<div class="navbar-nav align-items-center">
			<div class="nav-item d-flex align-items-center">
				<h5 class="m-0 me-2 pb-0">
					@if($page == 'corporate_policies' || $page == 'aya_bank_profile' || $page == 'stakeholder_management' || $page == 'mission_promise' || $page == 'corporate_goals')
						<a href="{{ url('/admin/pagelist/about-aya') }}" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i></a>&nbsp;&nbsp;
					@endif
					@if($page == 'foreign_currency_exchange')
						<a href="{{ url('/admin/pagelist/personal-banking') }}" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i></a>&nbsp;&nbsp;
					@endif
					{{ $nav }}
				</h5>
			</div>
		</div>
		<!-- /Search -->
      	<ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
				<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
					<span class="nav-link dropdown-toggle hide-arrow" >
	                	{{ auth()->user()->name }}&nbsp; <i class="menu-icon tf-icons bx bx-chevron-down"></i>
	              	</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li>
						<a class="dropdown-item" href="{{ url('/admin/logout') }}">
							<i class="bx bx-power-off me-2"></i>
							<span class="align-middle">Log Out</span>
						</a>
					</li>
				</ul>
			</li>
            <!--/ User -->
      </ul>
    </div>
	</nav>