<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Camping Maasvallei Admin Tool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Camping Maasvallei Admin Tool" name="description" />
	<meta content="Ramon Robben" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	{{-- App favicon --}}
	<link rel="shortcut icon" href="/images/favicon.ico">

	{{-- App css --}}
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="/css/app.min.css" rel="stylesheet" type="text/css" />

	@yield('styles')

</head>

<body class="left-side-menu-dark">

	<div id="wrapper">

		<div class="navbar-custom">
			<div class="logo-box">
				<a href="/" class="logo text-center">
					<span class="logo-lg">
						<img src="/images/bitsec_logo_white_transparent.png" alt="" height="64">
					</span>
					<span class="logo-sm">
						<img src="/images/bitsec_logo_white_transparent.png" alt="" height="50">
					</span>
				</a>
			</div>

			<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
				<li>
					<button class="button-menu-mobile waves-effect waves-light">
						<i class="fe-menu"></i>
					</button>
				</li>
			</ul>
		</div>

		{{-- ========== Left Sidebar Start ========== --}}
		<div class="left-side-menu">

			<div class="slimscroll-menu">

				{{--- Sidemenu --}}
				<div id="sidebar-menu">

					<ul class="metismenu" id="side-menu">

						<li class="menu-title">Admin</li>

						<li>
							<a href="/camping/stats">
								<i class="fe-pie-chart"></i>
								<span> Camping Statistics </span>
							</a>
						</li>

						<li class="menu-title">Accounts</li>

						<li>
							<a href="/employees">
								<i class="fe-users"></i>
								<span> Employees </span>
							</a>
						</li>

						<li>
							<a href="/customers">
								<i class="fe-users"></i>
								<span> Customers </span>
							</a>
						</li>



					</ul>

				</div>
				{{-- End Sidebar --}}

				<div class="clearfix"></div>

			</div>
			{{-- Sidebar -left --}}

		</div>
		{{-- Left Sidebar End --}}

		{{-- ============================================================== --}}
		{{-- Start Page Content here --}}
		{{-- ============================================================== --}}

		<div class="content-page">
			<div class="content">

				{{-- Start Content--}}
				<div class="container-fluid">

					{{-- start page title --}}
					<div class="row">
						<div class="col-12">
							<div class="page-title-box">
								{{-- <div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
										<li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
										<li class="breadcrumb-item active">Dark Sidebar</li>
									</ol>
								</div> --}}
								<h4 class="page-title">@yield('title')</h4>
							</div>
						</div>
					</div>
					{{-- end page title --}}

					@yield('content')

				</div> {{-- container --}}

			</div> {{-- content --}}

			{{-- Footer Start --}}
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							2019 - 2021 &copy; Copyright <a href="/">BitSec</a>
						</div>
						<div class="col-md-6">
							{{-- <div class="text-md-right footer-links d-none d-sm-block">
								<a href="javascript:void(0);">About Us</a>
								<a href="javascript:void(0);">Help</a>
								<a href="javascript:void(0);">Contact Us</a>
							</div> --}}
						</div>
					</div>
				</div>
			</footer>
			{{-- end Footer --}}

		</div>

		{{-- ============================================================== --}}
		{{-- End Page content --}}
		{{-- ============================================================== --}}


	</div>
	{{-- END wrapper --}}

	<script src="/js/vendor.min.js"></script>

	@yield('scripts')

	<script src="/js/app.min.js"></script>

</body>

</html>