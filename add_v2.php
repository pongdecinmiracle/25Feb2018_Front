<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Raspberry Pi</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- <link rel='stylesheet' href='./css/snorpy.css' type='text/css'></link> -->
   		<link rel="stylesheet" href="./css/jquery-ui.css"></link>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
				li.isHidden{
					display : none
				}
				li.isHidden2{
					display : none
				}
			</style>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="dashboard.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Distributed IPS
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

<!-- All Notification Alert -->
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">10</span>
							</a>
<!-- All Notification -->
							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									10 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa bigger-110 fa-exclamation-triangle"></i>
														All New Detect !!
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>
										
										<li>
											<a href="tables.html">
												<i class="fa bigger-110 fa-user">
														New Update By Raspberry Pi 1
												</i>
												<span class="pull-right badge badge-info">+11</span>
											</a>
										</li>
										
										<li>
											<a href="tables_pi2.html">
													<i class="fa bigger-110 fa-user">
															New Update By Raspberry Pi 2
													</i>
												<span class="pull-right badge badge-info">+12</span>
											</a>
										</li>
										
										<li>
											<a href="tables_pi3.html">
													<i class="fa bigger-110 fa-user">
															New Update By Raspberry Pi 3
													</i>
												<span class="pull-right badge badge-info">+8</span>
											</a>
										</li>
									</ul>
								</li>

								
							</ul>
						</li>

	<!-- Logout -->

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="User's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<div id="user"></div>
<!-- User -->
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a onclick="logout()">
										<i class="ace-icon fa fa-power-off" ></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="dashboard.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<!--  -->
					<li class="isHidden">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon glyphicon glyphicon-user"></i>
								<span class="menu-text"> Admin Modify </span>
	
								<b class="arrow fa fa-angle-down"></b>
							</a>
	
							<b class="arrow"></b>
	
							<ul class="submenu">
									<li class="">
											<a href="add_rule1.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi1
											</a>
					
											<b class="arrow"></b>
									</li>
					
									<li class="">
											<a href="add_rule2.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi2
											</a>
					
											<b class="arrow"></b>
									</li>

									<li class="">
											<a href="add_rule3.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi3
											</a>
					
											<b class="arrow"></b>
									</li>

									<li class="">
												<a href="verify.html">
													<i class="menu-icon glyphicon glyphicon-user"></i>
													Verify By Admin
												</a>
						
												<b class="arrow"></b>
									</li>
								
							</ul>
						</li>
					<!--  -->


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="tables_pi2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 2
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="tables_pi3.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 3
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="dashboard.html">Home</a>
							</li>

							<li>
								<a href="add_rule1.php">Add Rule : Raspberry Pi 1</a>
							</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">

						<div class="page-header">
							<h1>
								Add Rule : Raspberry Pi 1
							</h1>
						</div><!-- /.page-header -->

<!--  Body  -->

<div >
    <form method="post" action="./snorpy_rule1.php" >
        <!-- Add Rule : BlankSpace -->
		<div class="col-sm-12">
				<br><br><br><br>
				<div class="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
				<br><br>
		</div>
        
        <h4>Edit Rule : Raspberry Pi 1</h4>
        <div class="col-sm-12">
            <br><br> Type Action : 
            <input style="width: 20%" type="text" name="type_action" id="type_action" placeholder="Example : action" >
            <br><br> Signature ID : 
            <input style="width: 20%" type="text" name="sid_edit" id="sid_edit" placeholder="Example : 10000001">
            <br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="editRule()" >  			
			
        </div>
                    


    </form>
</div>

		<!-- <button onclick="showRule()">Preview Rule</button> -->


		<!-- <button onclick="showRule()">Preview Rule</button> -->


								

								
<!-- //  -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Distributed IPS</span>
							Application &copy; 2017
						</span>
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
    <script type="text/javascript">

			
			
			

			function editRule(){
				
				var type = document.getElementById("type_action").value
				var sid = document.getElementById("sid_edit").value	
				$(document).ready(function(){
				$.post("http://localhost:3001/addrule/editRule", 
						{Type:type,Sig_id:sid}).then(function(res,status){
							// console.log("pass")
							// if(res.success=="true"){
							// 	alert(res.message)
							// }else{
							// 	alert(res.message)
							// }
						})
				})
			}
			
			

		</script>

	</body>
</html>
