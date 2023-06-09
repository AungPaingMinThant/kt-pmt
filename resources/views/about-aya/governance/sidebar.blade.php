<div class="row risk_side_bar">
	<p class="risk_sidebar_title">Risk Management</p>

	@if($side_page == 'risk_management')
		<p class="risk_sidebar_link side_active">
	@else
		<p class="risk_sidebar_link">
	@endif
		<a href="{{ url('/about-aya/governance/risk-management') }}">Overview</a>
	</p>
	
	@if($side_page == 'risk_governance')
		<p class="risk_sidebar_link side_active">
	@else
		<p class="risk_sidebar_link">
	@endif
		<a href="{{ url('/about-aya/governance/risk-management/risk-governance') }}">Risk Governance</a>
	</p>
	
	@if($side_page == 'risk_mgmt_framework')
		<p class="risk_sidebar_link side_active">
	@else
		<p class="risk_sidebar_link">
	@endif
		<a href="{{ url('/about-aya/governance/risk-management/risk-management-framework') }}">Risk Management Framework</a>
	</p>
	@if($side_page == 'risk_mgmt_ctl')
		<p class="risk_sidebar_link side_active">
	@else
		<p class="risk_sidebar_link">
	@endif
		<a href="{{ url('/about-aya/governance/risk-management/risk-management-control') }}">Risk Management Control</a>
	</p>
	@if($side_page == 'managing_risk')
		<p class="risk_sidebar_link side_active">
	@else
		<p class="risk_sidebar_link">
	@endif
		<a href="{{ url('/about-aya/governance/risk-management/managing-risk') }}">Managing Risk</a>
	</p>
</div>