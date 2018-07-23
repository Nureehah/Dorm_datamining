
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<title>การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักมหาวิทยาลัยวลัยลักษณ์</title>
<!-- Favicon-->
<link rel="icon" href="<?php echo base_url();?>../../favicon.ico"
	type="image/x-icon">

<!-- Google Fonts -->
<link
	href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext"
	rel="stylesheet" type="text/css">
<link
	href="<?php echo base_url();?>https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link
	href="<?php echo base_url();?>../../plugins/bootstrap/css/bootstrap.css"
	rel="stylesheet">

<!-- Waves Effect Css -->
<link href="<?php echo base_url();?>../../plugins/node-waves/waves.css"
	rel="stylesheet" />

<!-- Animation Css -->
<link
	href="<?php echo base_url();?>../../plugins/animate-css/animate.css"
	rel="stylesheet" />

<!-- Bootstrap Material Datetime Picker Css -->
<link
	href="<?php echo base_url();?>../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
	rel="stylesheet" />

<!-- Wait Me Css -->
<link href="<?php echo base_url();?>../../plugins/waitme/waitMe.css"
	rel="stylesheet" />

<!-- Bootstrap Select Css -->
<link
	href="<?php echo base_url();?>../../plugins/bootstrap-select/css/bootstrap-select.css"
	rel="stylesheet" />

<!-- Custom Css -->
<link href="<?php echo base_url();?>../../css/style.css"
	rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo base_url();?>../../css/themes/all-themes.css"
	rel="stylesheet" />
</head>

<body class="theme-red">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo base_url();?>javascript:void(0);"
					class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar-collapse" aria-expanded="false"></a> <a
					href="<?php echo base_url();?>javascript:void(0);" class="bars"></a>
				<a class="navbar-brand"
					href="<?php echo base_url();?>../../index.html">การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักมหาวิทยาลัยวลัยลักษณ์</a>
			</div>

			<!-- #Top Bar -->
			<section>
				<!-- Left Sidebar -->
				<aside id="leftsidebar" class="sidebar">
					<!-- User Info -->
					<div class="user-info">
						<div class="image">
							<img src="../../images/user.png" width="48" height="48"
								alt="User" />
						</div>
						<div class="info-container">
							<div class="name" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">นางสาวนูรีฮะห์ บูละ</div>
							<div class="email">noori.hah58@gmail.com</div>
							<div class="btn-group user-helper-dropdown">
								<i class="material-icons" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
								<ul class="dropdown-menu pull-right">
									<li><a href="<?php echo base_url();?>javascript:void(0);"><i
											class="material-icons">person</i>Profile</a></li>
									<li><a href="<?php echo base_url();?>javascript:void(0);"><i
											class="material-icons">input</i>Sign Out</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- #User Info -->
					<!-- Menu -->
					<div class="menu">
						<ul class="list">
							<li class="header"></li>
							<li class="active"><a href="<?php echo base_url();?>index.html">
									<i class="material-icons">home</i> <span>หน้าแรก</span>
							</a></li>
							<li><a
								href="<?php echo base_url();?>pages/forms/basic-form-elements.html">
									<i class="material-icons">assessment</i> <span>การแนะนำรูปแบบการจัดคนเข้าห้องพัก</span>
							</a></li>

							<a href="<?php echo base_url();?>javascript:void(0);"
								class="menu-toggle"> <i class="material-icons">face</i> <span>ผลการวิเคราะห์ดัชนีความสุข</span>
							</a>
							<ul class="ml-menu">
								<li><a href="<?php echo base_url();?>pages/charts/morris.html">ลักษณะนักศึกษาที่มีความสุข</a>
								</li>
								<li><a href="<?php echo base_url();?>pages/charts/chartjs.html">ลักษณะนักศึกษาที่ไม่มีความสุข</a>
								</li>
								<li><a href="<?php echo base_url();?>pages/charts/flot.html">ด้านความรู้สึก</a>
								</li>
							</ul>
							</li>

							<li><a href="<?php echo base_url();?>javascript:void(0);"
								class="menu-toggle"> <i class="material-icons">layers</i> <span>ผลการวิเคราะห์พฤติกรรมด้านการเรียน</span>
							</a>
								<ul class="ml-menu">
									<li><a href="<?php echo base_url();?>pages/helper-classes.html">พฤติกรรมการเรียนในชั้นเรียน</a>
									</li>
									<li><a href="<?php echo base_url();?>pages/typography.html">พฤติกรรมการเรียนนอกชั้นเรียน</a>
									</li>
								</ul></li>
							<li><a href="<?php echo base_url();?>javascript:void(0);"
								class="menu-toggle"> <i class="material-icons">widgets</i> <span>ผลการวิเคราะห์พฤติกรรมด้านอื่นๆ</span>
							</a>
								<ul class="ml-menu">
									<li><a href="<?php echo base_url();?>pages/changelogs.html">พฤติกรรมต่างๆ
											ของนักศึกษา</a></li>
									<li><a
										href="<?php echo base_url();?>pages/forms/basic-form-elements.html">กิจกรรมและกีฬา</a>
									</li>
								</ul></li>
							<li><a
								href="<?php echo base_url();?>pages/widgets/cards/colored.html">
									<i class="material-icons">account_balance</i> <span>ผลการวิเคราะห์รูปแบบการจัดห้องพัก</span>
							</a></li>

							<!-- #Footer -->
				
				</aside>
				<!-- #END# Left Sidebar -->

				<!-- Right Sidebar -->
				<aside id="rightsidebar" class="right-sidebar">
					<ul class="nav nav-tabs tab-nav-right" role="tablist">
						<li role="presentation" class="active"><a href="#skins"
							data-toggle="tab">SKINS</a></li>
						<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active in active"
							id="skins">
							<ul class="demo-choose-skin">
								<li data-theme="red" class="active">
									<div class="red"></div> <span>Red</span>
								</li>
								<li data-theme="pink">
									<div class="pink"></div> <span>Pink</span>
								</li>
								<li data-theme="purple">
									<div class="purple"></div> <span>Purple</span>
								</li>
								<li data-theme="deep-purple">
									<div class="deep-purple"></div> <span>Deep Purple</span>
								</li>
								<li data-theme="indigo">
									<div class="indigo"></div> <span>Indigo</span>
								</li>
								<li data-theme="blue">
									<div class="blue"></div> <span>Blue</span>
								</li>
								<li data-theme="light-blue">
									<div class="light-blue"></div> <span>Light Blue</span>
								</li>
								<li data-theme="cyan">
									<div class="cyan"></div> <span>Cyan</span>
								</li>
								<li data-theme="teal">
									<div class="teal"></div> <span>Teal</span>
								</li>
								<li data-theme="green">
									<div class="green"></div> <span>Green</span>
								</li>
								<li data-theme="light-green">
									<div class="light-green"></div> <span>Light Green</span>
								</li>
								<li data-theme="lime">
									<div class="lime"></div> <span>Lime</span>
								</li>
								<li data-theme="yellow">
									<div class="yellow"></div> <span>Yellow</span>
								</li>
								<li data-theme="amber">
									<div class="amber"></div> <span>Amber</span>
								</li>
								<li data-theme="orange">
									<div class="orange"></div> <span>Orange</span>
								</li>
								<li data-theme="deep-orange">
									<div class="deep-orange"></div> <span>Deep Orange</span>
								</li>
								<li data-theme="brown">
									<div class="brown"></div> <span>Brown</span>
								</li>
								<li data-theme="grey">
									<div class="grey"></div> <span>Grey</span>
								</li>
								<li data-theme="blue-grey">
									<div class="blue-grey"></div> <span>Blue Grey</span>
								</li>
								<li data-theme="black">
									<div class="black"></div> <span>Black</span>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="settings">
							<div class="demo-settings">
								<p>GENERAL SETTINGS</p>
								<ul class="setting-list">
									<li><span>Report Panel Usage</span>
										<div class="switch">
											<label><input type="checkbox" checked><span class="lever"></span></label>
										</div></li>
									<li><span>Email Redirect</span>
										<div class="switch">
											<label><input type="checkbox"><span class="lever"></span></label>
										</div></li>
								</ul>
								<p>SYSTEM SETTINGS</p>
								<ul class="setting-list">
									<li><span>Notifications</span>
										<div class="switch">
											<label><input type="checkbox" checked><span class="lever"></span></label>
										</div></li>
									<li><span>Auto Updates</span>
										<div class="switch">
											<label><input type="checkbox" checked><span class="lever"></span></label>
										</div></li>
								</ul>
								<p>ACCOUNT SETTINGS</p>
								<ul class="setting-list">
									<li><span>Offline</span>
										<div class="switch">
											<label><input type="checkbox"><span class="lever"></span></label>
										</div></li>
									<li><span>Location Permission</span>
										<div class="switch">
											<label><input type="checkbox" checked><span class="lever"></span></label>
										</div></li>
								</ul>
							</div>
						</div>
					</div>
				</aside>
				<!-- #END# Right Sidebar -->
			</section>

			<section class="content">
				<div class="container-fluid">
					<div class="block-header">
						<h2></h2>
					</div>
					<!-- Input -->
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="card">
								<div class="header">
									<h2>
										แบบสอบถามนักศึกษาหอพัก <small>คำตอบของท่านจะเป็นประโยชน์อย่างมากต่อการพัฒนาและปรับปรุงการใช้ชีวิตในหอพักของตัวท่านเองและเพื่อนชาวหอ
										</small>
									</h2>
									<ul class="header-dropdown m-r--5">
									</ul>
								</div>
								<div class="body">
									<h2 class="card-inside-title">กรอกรหัสนักศึกษา</h2>
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<input type="text" class="form-control"
														placeholder="รหัสนักศึกษา 8 หลัก" />
												</div>
											</div>


											<h2 class="card-inside-title">ดัชนีความสุข (การอยู่หอพัก)</h2>
											<small>คำชี้แจง:
												โปรดเลือกคำตอบที่ท่านคิดว่าตรงกับความเป็นจริงเกี่ยวกับตัวของท่านมากที่สุด</small>
											<h2 class="card-inside-title">ก. ด้านความรู้สึกที่ดี *</h2>
											<div class="row clearfix">
												<div class="col-sm-4"></div>
												<div class="col-sm-2">

													<label for="radio_30">ไม่เคย</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">เล็กน้อย</label>

												</div>
												<div class="col-sm-2">
													<label for="radio_31">มาก</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">มากที่สุด</label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													1.ท่านรู้สึกพึงพอใจกับการใช้ชีวิตในหอพัก</div>
												<div class="col-sm-2">
													<input name="group1" id="radio_1"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_1"></label>
												</div>
												<div class="col-sm-2">
													<input name="group1" id="radio_2"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_2"></label>

												</div>
												<div class="col-sm-2">
													<input name="group1" id="radio_3"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_3"></label>
												</div>
												<div class="col-sm-2">
													<input name="group1" id="radio_4"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_4"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													2.ท่านรู้สึกสบายใจเมื่อกลับมายังห้องพัก</div>
												<div class="col-sm-2">
													<input name="group2" id="radio_5"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_5"></label>
												</div>
												<div class="col-sm-2">
													<input name="group2" id="radio_6"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_6"></label>

												</div>
												<div class="col-sm-2">
													<input name="group2" id="radio_7"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_7"></label>
												</div>
												<div class="col-sm-2">
													<input name="group2" id="radio_8"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_8"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">3.ท่านรู้สึกว่าชีวิตมีความสุข</div>
												<div class="col-sm-2">
													<input name="group3" id="radio_9"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_9"></label>
												</div>
												<div class="col-sm-2">
													<input name="group3" id="radio_10"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_10"></label>

												</div>
												<div class="col-sm-2">
													<input name="group3" id="radio_11"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_11"></label>
												</div>
												<div class="col-sm-2">
													<input name="group3" id="radio_12"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_12"></label>
												</div>
											</div>
											<h2 class="card-inside-title">ข. ด้านความรู้สึกไม่ดี *</h2>
											<div class="row clearfix">
												<div class="col-sm-4"></div>
												<div class="col-sm-2">

													<label for="radio_30">ไม่เคย</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">เล็กน้อย</label>

												</div>
												<div class="col-sm-2">
													<label for="radio_31">มาก</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">มากที่สุด</label>
												</div>
											</div>
											<div class="row clearfix">

												<div class="col-sm-4">
													4.ท่านรู้สึกเบื่อหน่ายท้อแท้กับการดำเนินชีวิตประจำวัน</div>
												<div class="col-sm-2">
													<input name="group4" id="radio_13"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_13"></label>
												</div>
												<div class="col-sm-2">
													<input name="group4" id="radio_14"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_14"></label>

												</div>
												<div class="col-sm-2">
													<input name="group4" id="radio_15"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_15"></label>
												</div>
												<div class="col-sm-2">
													<input name="group4" id="radio_16"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_16"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													5.ท่านรู้สึกผิดหวังที่เลือกมาอยู่ห้องนี้</div>
												<div class="col-sm-2">
													<input name="group5" id="radio_17"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_17"></label>
												</div>
												<div class="col-sm-2">
													<input name="group5" id="radio_18"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_18"></label>

												</div>
												<div class="col-sm-2">
													<input name="group5" id="radio_19"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_19"></label>
												</div>
												<div class="col-sm-2">
													<input name="group5" id="radio_20"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_21"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													6.ท่านรู้สึกปรับตัวเข้ากับเพื่อนร่วมห้องไม่ได้</div>
												<div class="col-sm-2">
													<input name="group6" id="radio_21"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_21"></label>
												</div>
												<div class="col-sm-2">
													<input name="group6" id="radio_22"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_22"></label>

												</div>
												<div class="col-sm-2">
													<input name="group6" id="radio_23"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_23"></label>
												</div>
												<div class="col-sm-2">
													<input name="group6" id="radio_24"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_24"></label>
												</div>
											</div>

											<h2 class="card-inside-title">ค. ด้านสมรรถภาพจิตใจ *</h2>
											<div class="row clearfix">
												<div class="col-sm-4"></div>
												<div class="col-sm-2">

													<label for="radio_30">ไม่เคย</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">เล็กน้อย</label>

												</div>
												<div class="col-sm-2">
													<label for="radio_31">มาก</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">มากที่สุด</label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													7.ท่านสามารถทำใจยอมรับได้เมื่อมีปัญหาในการอยู่ร่วมกัน</div>
												<div class="col-sm-2">
													<input name="group7" id="radio_25"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_25"></label>
												</div>
												<div class="col-sm-2">
													<input name="group7" id="radio_26"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_26"></label>

												</div>
												<div class="col-sm-2">
													<input name="group7" id="radio_27"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_27"></label>
												</div>
												<div class="col-sm-2">
													<input name="group7" id="radio_28"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_28"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">8.ท่านมั่นใจว่าสามารถควบคุมอารมณ์ได้
													เมื่อมีความขัดแย้ง (ท่านสามารถแก้ปัญหาได้)</div>
												<div class="col-sm-2">
													<input name="group8" id="radio_29"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_29"></label>
												</div>
												<div class="col-sm-2">
													<input name="group8" id="radio_30"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_31"></label>

												</div>
												<div class="col-sm-2">
													<input name="group8" id="radio_31"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_31"></label>
												</div>
												<div class="col-sm-2">
													<input name="group8" id="radio_32"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_32"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													7.ท่านสามารถทำใจยอมรับได้เมื่อมีปัญหาในการอยู่ร่วมกัน</div>
												<div class="col-sm-2">
													<input name="group9" id="radio_33"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_33"></label>
												</div>
												<div class="col-sm-2">
													<input name="group9" id="radio_34"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_34"></label>

												</div>
												<div class="col-sm-2">
													<input name="group9" id="radio_35"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_35"></label>
												</div>
												<div class="col-sm-2">
													<input name="group9" id="radio_36"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_36"></label>
												</div>
											</div>

											<h2 class="card-inside-title">ง. ด้านคุณภาพจิตใจ *</h2>
											<div class="row clearfix">
												<div class="col-sm-4"></div>
												<div class="col-sm-2">

													<label for="radio_30">ไม่เคย</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">เล็กน้อย</label>

												</div>
												<div class="col-sm-2">
													<label for="radio_31">มาก</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">มากที่สุด</label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													10.ท่านรู้สึกเห็นอกเห็นใจเมื่อเพื่อนร่วมหอ/ร่วมห้องมีความทุกข์
												</div>
												<div class="col-sm-2">
													<input name="group10" id="radio_37"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_37"></label>
												</div>
												<div class="col-sm-2">
													<input name="group10" id="radio_38"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_38"></label>

												</div>
												<div class="col-sm-2">
													<input name="group10" id="radio_39"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_39"></label>
												</div>
												<div class="col-sm-2">
													<input name="group10" id="radio_40"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_40"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													11.ท่านรู้สึกเป็นสุขในการช่วยเหลือเพื่อนร่วมหอ/ร่วมห้องที่มีปัญหา
												</div>
												<div class="col-sm-2">
													<input name="group11" id="radio_41"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_41"></label>
												</div>
												<div class="col-sm-2">
													<input name="group11" id="radio_42"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_42"></label>

												</div>
												<div class="col-sm-2">
													<input name="group11" id="radio_43"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_43"></label>
												</div>
												<div class="col-sm-2">
													<input name="group11" id="radio_44"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_44"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													12.ท่านให้ความช่วยเหลือเพื่อนร่วมหอ/ร่วมห้องเมื่อมีโอกาส</div>
												<div class="col-sm-2">
													<input name="group12" id="radio_45"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_45"></label>
												</div>
												<div class="col-sm-2">
													<input name="group12" id="radio_45"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_45"></label>

												</div>
												<div class="col-sm-2">
													<input name="group12" id="radio_46"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_46"></label>
												</div>
												<div class="col-sm-2">
													<input name="group12" id="radio_47"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_47"></label>
												</div>
											</div>

											<h2 class="card-inside-title">จ. ด้านปัจจัยสนับสนุนของหอพัก*</h2>
											<div class="row clearfix">
												<div class="col-sm-4"></div>
												<div class="col-sm-2">

													<label for="radio_30">ไม่เคย</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">เล็กน้อย</label>

												</div>
												<div class="col-sm-2">
													<label for="radio_31">มาก</label>
												</div>
												<div class="col-sm-2">
													<label for="radio_31">มากที่สุด</label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													13.ท่านรู้สึกมั่นคงปลอดภัยเมื่ออยู่ในหอพัก</div>
												<div class="col-sm-2">
													<input name="group13" id="radio_48"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_48"></label>
												</div>
												<div class="col-sm-2">
													<input name="group13" id="radio_49"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_49"></label>

												</div>
												<div class="col-sm-2">
													<input name="group13" id="radio_50"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_50"></label>
												</div>
												<div class="col-sm-2">
													<input name="group13" id="radio_51"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_51"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">14.หากท่านป่วยท่านเชื่อว่า
													ที่ปรึกษาหอพัก/เพื่อนในหอพัก จะดูแลท่านเป็นอย่างดี</div>
												<div class="col-sm-2">
													<input name="group14" id="radio_52"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_52"></label>
												</div>
												<div class="col-sm-2">
													<input name="group14" id="radio_53"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_53"></label>

												</div>
												<div class="col-sm-2">
													<input name="group14" id="radio_54"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_54"></label>
												</div>
												<div class="col-sm-2">
													<input name="group14" id="radio_55"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_55"></label>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													15.สมาชิกในหอพักมีความรักผูกพันกันเสมือนบ้านอีกหลังหนึ่ง</div>
												<div class="col-sm-2">
													<input name="group15" id="radio_56"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_56"></label>
												</div>
												<div class="col-sm-2">
													<input name="group15" id="radio_57"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_57"></label>

												</div>
												<div class="col-sm-2">
													<input name="group15" id="radio_58"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_58"></label>
												</div>
												<div class="col-sm-2">
													<input name="group15" id="radio_59"
														class="with-gap radio-col-red" checked="" type="radio"> <label
														for="radio_59"></label>
												</div>
											</div>

											<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
												<button type="button"
													class="btn bg-pink btn-block btn-lg waves-effect">แสดงผล</button>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- #END# Input -->

				</div>
			</section>

			<!-- Jquery Core Js -->
			<script
				src="<?php echo base_url();?>../../plugins/jquery/jquery.min.js"></script>

			<!-- Bootstrap Core Js -->
			<script
				src="<?php echo base_url();?>../../plugins/bootstrap/js/bootstrap.js"></script>

			<!-- Select Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

			<!-- Slimscroll Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

			<!-- Waves Effect Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/node-waves/waves.js"></script>

			<!-- Autosize Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/autosize/autosize.js"></script>

			<!-- Moment Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/momentjs/moment.js"></script>

			<!-- Bootstrap Material Datetime Picker Plugin Js -->
			<script
				src="<?php echo base_url();?>../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

			<!-- Custom Js -->
			<script src="<?php echo base_url();?>../../js/admin.js"></script>
			<script
				src="<?php echo base_url();?>../../js/pages/forms/basic-form-elements.js"></script>

			<!-- Demo Js -->
			<script src="<?php echo base_url();?>../../js/demo.js"></script>

</body>
</html>

