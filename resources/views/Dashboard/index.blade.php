<!DOCTYPE html><html lang="en">

<head>
	<title>ReactionPro - Responsive Bootstrap Admin Template</title>
	<!-- META SECTION -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- END META SECTION --><!-- CSS INCLUDE -->
	<link rel="stylesheet" href="css/styles2c70.css?v=1.0.3">
	<link rel="stylesheet" href="css/extra.css">
	<!-- f<link rel="stylesheet" href="css/bureauDesignSheet.css"> -->
	<!-- EOF CSS INCLUDE -->
	
	</head>
	<body>
		<!-- PAGE WRAPPER -->
		<div class="page page--w-header">
			<!-- PAGE HEADER -->
			<header class="page__header">
				<div class="logo-holder">
					<a href="index.html" class="logo-text d-none d-lg-block">
						<span>R</span>eactionPro</a> 
					<a href="index.html" class="logo-text d-lg-none">
						<span>R</span>
					</a>
					<div class="rw-btn rw-btn--nav" data-action="aside-hide">
						<span>
							
						</span>
						</div>
						</div>
						<div class="box-fluid">
							
						</div>
						<div class="box">
							<form class="page-header-search" id="header_search">
								<input type="text" class="form-control" placeholder="Type in to search">
								<div class="page-header-search__icon">
									
								</div>
							</form>
							<button class="btn btn-light btn-icon float-left" data-action="fixedpanel-toggle">
								<span class="li-cog">
									
								</span>
							</button>
						</div>
			</header>
			<!-- //END PAGE HEADER -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page__content page__content--w-aside-fixed" id="page-content">
				<!-- PAGE ASIDE PANEL -->
				<div class="page-aside invert" id="page-aside">
					<div class="scroll" style="max-height: 100%">
						<div class="navigation" id="navigation-default">
							<div class="user user--bordered user--lg user--w-lineunder user--controls">
								<img src="assets/img/users/user_1.jpg">
								<div class="user__name">
									<strong>John Doe</strong>
									<br>
									<span class="text-muted">Front-end developer</span>
								<div class="user__controls">
								<div class="dropdown">
									<button class="btn btn-light btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="fa fa-cog">
											
										</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Log out</a>
									</div>
								</div>
								</div>
								</div>
								<div class="user__lineunder">
									<div class="text">Last visit 15min ago</div>
									<div class="buttons">
										<div class="dropdown">
											<button class="button button-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Profile</a> 
												<a class="dropdown-item" href="#">Projects</a> 
												<a class="dropdown-item" href="#">Invoices</a> 
												<a class="dropdown-item" href="#">Settings</a>
												<div class="dropdown-divider">
												
												</div>
												<a class="dropdown-item" href="#">Log out</a>
											</div>
										</div>
									<div class="button button-minimize" data-action="aside-minimize" data-toggle="tooltip" data-placement="top" data-original-title="Minimize navigation">
										
									</div>
									</div>
								</div>
							</div>
<ul>
	<li class="title">Navigation</li>
	<li>
		<a href="index-2.html">
			<span class="icon li-shield-check">
				
			</span> 
			<span class="text">Dashboard</span>
		</a>
		</li>





		<li class="title">Menu</li>
		<li class="openable">
			<a href="{{ route('addactivity')}}">
			<span class="icon li-cube">
				
			</span> 
			<span class="text">Add Activity</span>
			</a>
			</li>
			<li class="openable">
			<a href="{{ route('viewactivity')}}">
			<span class="icon li-cube">
				
			</span> 
			<span class="text">View Activity</span>
			</a>
			</li>
			<li class="openable">
			<a href="{{ route('addshipment') }}">
			<span class="icon li-cube">
				
			</span> 
			<span class="text">Add Shipmentt</span>
			</a>
			</li>
			<li class="openable" id="viewShipment">
			<a href="{{route('viewshipment')}}">
			<span class="icon li-cube">
				
			</span> 
			<span class="text">View Shipmentt</span>
			</a>
			</li>
		</ul>

</div>
</div>
</div>

			
			@yield('content')
	




<!-- Scripts  -->

 <script type="text/javascript" src="{{ asset('js/vendors/jquery/jquery.min.js') }}"	></script>
<script type="text/javascript" src="{{ asset('js/vendors/jquery/jquery-migrate.min.js') }}">
	
</script>
<script type="text/javascript" src="{{ asset('js/vendors/bootstrap/bootstrap.bundle.min.js') }}">
	
</script>

<script type="text/javascript" src="{{ asset('js/vendors/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}">
	
</script>
<!-- END IMPORTANT SCRIPTS -->
<!-- THIS PAGE SCRIPTS ONLY -->
<script type="text/javascript" src="{{ asset('js/vendors/moment/moment-with-locales.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendors/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ asset('js/vendors/daterangepicker/daterangepicker.js') }}">
	
</script>
<script type="text/javascript" src="{{ asset('js/vendors/select2/select2.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/vendors/echarts/echarts.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/vendors/echarts/echarts-gl.min.js') }}">
</script>
<!-- //END THIS PAGE SCRIPTS ONLY -->
<!-- TEMPLATE SCRIPTS -->
<script type="text/javascript" src="{{ asset('js/app1.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/demo.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/settings.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/server.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendors/peity/jquery.peity.min.js') }}">
</script>
                                            							<script>$(function(){                                
                $(".peity_donut").peity("donut",{height: "40px", width: "40px", fill: ["#f5836c", "#222b44", "#65b55c", "#e24120", "#ffd934", "#18a3d8"]});
            });</script>




<!-- Mirrored from reactionpro.aqvatarius.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 09:51:47 GMT -->
</html>