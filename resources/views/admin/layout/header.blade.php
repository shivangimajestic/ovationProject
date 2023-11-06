<!doctype html>
<html lang="en">

<head>
    <!-- bootstap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	<link href="{{asset('css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('css/header-colors.css')}}" />

    <link rel="stylesheet" href="{{asset('css/header.css')}}"/>

	<title>Ovation</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Ovation</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu menu" id="menu">
				<li>
				<a href="javascript:;" >
						<div class="parent-icon">
                        <i class="bi bi-people"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					
				</li>
				<li>
					<a href="{{url('admin/customer/index')}}" >
						<div class="parent-icon">
                        <i class="bi bi-people"></i>
						</div>
						<div class="menu-title">Customers</div>
					</a>
					
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon">
                            <i class="bi bi-cart-check"></i>
						</div>
						<div class="menu-title">Orders</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" >
						<div class="parent-icon">
                        <i class='fadeIn animated bx bx-category'></i>
						</div>
						<div class="menu-title">Categories</div>
					</a>
					
				</li>
				<li>
					<a  href="{{url('index')}}">
						<div class="parent-icon">
                            <i class="bi bi-boxes"></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
					
				</li>
				
				
				
				<li>
					<a  href="javascript:;">
						<div class="parent-icon"><i class="fadeIn animated bx bx-receipt"></i>
						</div>
						<div class="menu-title">Orders/Bills</div>
					</a>
					
				</li>
				
				
				
				
			
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand nav">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="user-box ">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="name mb-0">Pauline Seitz</p>
								<p class="desig mb-0">Web Designer</p>
							</div>
						</a>
						
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
	
	</div>
	
	
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('js/app.js')}}"></script>
</body>

</html>