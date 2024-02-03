<div id="header" class="app-header">
	<!-- BEGIN mobile-toggler -->
	<div class="mobile-toggler">
		<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
			<span class="bar"></span>
			<span class="bar"></span>
		</button>
	</div>
	<!-- END mobile-toggler -->
	
	<!-- BEGIN brand -->
	<div class="brand">
		<div class="desktop-toggler">
			<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
		</div>
		
		<a href="{{ route('dashboard') }}" class="brand-logo">
			{{-- <img src="{{ asset('/') }}/logo.jpeg" alt="" height="50" style="max-height: 500px !important;" /> --}}
			<b>Latjak</b>-Admin
		</a>
	</div>
	<!-- END brand -->
	
	<!-- BEGIN menu -->
	<div class="menu">
		{{-- <form class="menu-search" method="POST" name="header_search_form">
			<div class="menu-search-icon"><i class="fa fa-search"></i></div>
			<div class="menu-search-input">
				<input type="text" class="form-control" placeholder="Search Employee..." />
			</div>
		</form> --}}

		<div class="menu-item dropdown">
			<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
				<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
				<div class="menu-label">0</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-notification">
				<h6 class="dropdown-header text-dark mb-1">Notifications</h6>
				{{-- <a href="#" class="dropdown-notification-item">
					<div class="dropdown-notification-icon">
						<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
					</div>
					<div class="dropdown-notification-info">
						<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
						<div class="time">just now</div>
					</div>
					<div class="dropdown-notification-arrow">
						<i class="fa fa-chevron-right"></i>
					</div>
				</a> --}}
				<div class="p-2 text-center mb-n1">
					<a href="#" class="text-dark text-opacity-50 text-decoration-none">See all</a>
				</div>
			</div>
		</div>

		<div class="menu-item dropdown">
			<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
				<div class="menu-img online">
					<img src="{{ asset('assets/logo.png') }}" alt="" class="ms-100 mh-100 rounded-circle" />
				</div>
				<div class="menu-text" style="">Admin Test</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right me-lg-3">
				<a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"></i></a>
				<a class="dropdown-item d-flex align-items-center" href="#">Setting <i class="fa fa-wrench fa-fw ms-auto text-dark text-opacity-50"></i></a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item d-flex align-items-center" href="#">Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-dark text-opacity-50"></i></a>
			</div>
		</div>
	</div>
	<!-- END menu -->
</div>