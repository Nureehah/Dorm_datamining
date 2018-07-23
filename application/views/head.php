<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<title>การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักที่ส่งผลต่อการเสริมศักยภาพของนักศีกษา</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext"
	rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link href="<?php echo base_url();?>plugins/bootstrap/css/bootstrap.css"
	rel="stylesheet">

<!-- Waves Effect Css -->
<link href="<?php echo base_url();?>plugins/node-waves/waves.css"
	rel="stylesheet" />

<!-- Animation Css -->
<link href="<?php echo base_url();?>plugins/animate-css/animate.css"
	rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="<?php echo base_url();?>plugins/morrisjs/morris.css"
	rel="stylesheet" />

<!-- Custom Css -->
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo base_url();?>css/themes/all-themes.css"
	rel="stylesheet" />
</head>

<body class="theme-red">
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-collapse"
					aria-expanded="false"></a> <a href="javascript:void(0);"
					class="bars"></a> <a class="navbar-brand"
					href="<?php echo site_url("dorm/chart1");?>">การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักที่ส่งผลต่อการเสริมศักยภาพของนักศีกษา</a>
			</div>

		</div>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info">
				<div class="image">
					<img src="<?php echo base_url();?>images/user.png" width="48"
						height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">นางสาวนูรีฮะห์ บูละ</div>

					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>

							<li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign
									Out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header"></li>
					<li class="active"><a href="<?php echo site_url("dorm/chart1");?>">
							<i class="material-icons">home</i> <span>หน้าแรก</span>
					</a></li>
					<li><a href="<?php echo site_url("dorm/menu_learn");?>"> <i
							class="material-icons">chrome_reader_mode</i> <span>ผลการวิเคราะห์พฤติกรรมด้านการเรียน</span>
					</a></li>


					<li><a href="<?php echo site_url("dorm/menu_happy");?>"> <i
							class="material-icons">insert_emoticon</i> <span>ผลการวิเคราะห์ดัชนีความสุข</span>
					</a></li>

					<!-- <li><a href="javascript:void(0);" class="menu-toggle"> <i
							class="material-icons">layers</i> <span>ผลการวิเคราะห์พฤติกรรมด้านการเรียน</span>
					</a>
						<ul class="ml-menu">
							<li><a href="<?php echo base_url();?>pages/helper-classes.html">พฤติกรรมการเรียนในชั้นเรียน</a>
							</li>
							<li><a href="<?php echo base_url();?>pages/typography.html">พฤติกรรมการเรียนนอกชั้นเรียน</a>
							</li>
						</ul></li>  -->

					<li><a href="javascript:void(0);" class="menu-toggle"> <i
							class="material-icons">widgets</i> <span>ผลการวิเคราะห์พฤติกรรมด้านอื่นๆ</span>
					</a>
						<ul class="ml-menu">
							<li><a href="<?php echo site_url("dorm/other_social");?>">พฤติกรรมด้านสังคม</a></li>
							<li><a href="<?php echo site_url("dorm/other_heathy");?>">พฤติกรรมด้านสุขภาพ</a>
							</li>
							<li><a href="<?php echo site_url("dorm/other_menheathy");?>">พฤติกรรมด้านสุขภาพจิต</a>
							</li>

						</ul></li>
					<li><a href="javascript:void(0);" class="menu-toggle"> <i
							class="material-icons">equalizer</i> <span>ผลการวิเคราะห์รูปแบบการจัดคนเข้าห้องพัก</span>
					</a>
						<ul class="ml-menu">
							<li><a href="<?php echo site_url("dorm/datamining_1");?>">แบบ 4
									รูปแบบ</a></li>
							<li><a href="<?php echo site_url("dorm/datamining_2");?>">แบบ 3
									รูปแบบ</a></li>
						</ul> <!-- <li><a href="<?php echo site_url("dorm/form");?>"> <i
							class="material-icons">assessment</i> <span>การแนะนำรูปแบบการจัดคนเข้าห้องพัก</span>
					</a></li> --> <!-- #Footer -->
		
		</aside>
		<!-- #END# Left Sidebar -->
	</section>