﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักมหาวิทยาลัยวลัยลักษณ์</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>css/themes/all-themes.css" rel="stylesheet" />
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
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo base_url();?>javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="<?php echo base_url();?>javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url();?>index.html">การวิเคราะห์รูปแบบการจัดคนเข้าห้องพักในหอพักมหาวิทยาลัยวลัยลักษณ์</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                   
                    <li class="pull-right"><a href="<?php echo base_url();?>javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
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
                    <img src="<?php echo base_url();?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">นางสาวนูรีฮะห์ บูละ</div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url();?>javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>

                            <li><a href="<?php echo base_url();?>javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li class="active">
                        <a href="<?php echo base_url();?>index.html">
                            <i class="material-icons">home</i>
                            <span>หน้าแรก</span>
                        </a>
                    </li>                                        
                          <li>
                        <a href="<?php echo base_url();?>pages/forms/basic-form-elements.php" >
                            <i class="material-icons">assessment</i>
                            <span>การแนะนำรูปแบบการจัดคนเข้าห้องพัก</span>
                        </a>
                        </li>

                        <a href="<?php echo base_url();?>javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>ผลการวิเคราะห์ดัชนีความสุข</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>pages/charts/morris.html">ลักษณะนักศึกษาที่มีความสุข</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>pages/charts/chartjs.html">ลักษณะนักศึกษาที่ไม่มีความสุข</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>pages/charts/flot.html">ด้านความรู้สึก</a>
                            </li>                           
                        </ul>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url();?>javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>ผลการวิเคราะห์พฤติกรรมด้านการเรียน</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                               <a href="<?php echo base_url();?>pages/helper-classes.html">พฤติกรรมการเรียนในชั้นเรียน</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>pages/typography.html">พฤติกรรมการเรียนนอกชั้นเรียน</a>
                            </li>                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>ผลการวิเคราะห์พฤติกรรมด้านอื่นๆ</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>pages/changelogs.html">พฤติกรรมต่างๆ ของนักศึกษา</a>
                            </li>
                            <li>
                                 <a href="<?php echo base_url();?>pages/forms/basic-form-elements.html">กิจกรรมและกีฬา</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>pages/widgets/cards/colored.html" >
                            <i class="material-icons">account_balance</i>
                            <span>ผลการวิเคราะห์รูปแบบการจัดห้องพัก</span>
                        </a>
                    </li>
                    
            <!-- #Footer -->
        </aside>
         <!-- #END# Left Sidebar -->
        
     
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
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

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-7 col-xs-14">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนผู้เข้าชม</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-7 col-xs-14">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">จำนวนนักศึกษาที่มีความสุข</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-7 col-xs-14">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assessment</i>                            
                        </div>
                        <div class="content">
                            <div class="text">อัตราการย้ายห้องพัก</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>
		
   		<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/"></a></div>
   		<script type="text/javascript">


   		var chart = Highcharts.chart('container', {

   		  title: {
   		    text: 'ดัชนีความสุขในหอพัก'
   		  },

   		  subtitle: {
   		    text: ''
   		  },

   		  xAxis: {
   		    categories: ['หอ 1', 'หอ 2', 'หอ 3', 'หอ 4', 'หอ 5', 'หอ 7', 'หอ 10', 'หอ 11', 'หอ 13', 'หอ 14', 'หอ 16', 'หอ 17', 'หอ 18']
   		  },

   		  ระดับความสุข : [{
   		    type: 'column',
   		    colorByPoint: true,
   		    data: [29.9, 71.5, 80, 50, 70, 85, 65, 75, 68, 48, 55, 54.4, 70],
   		    showInLegend: false
   		  }]

   		});


   		$('#plain').click(function () {
   		  chart.update({
   		    chart: {
   		      inverted: false,
   		      polar: false
   		    },
   		    subtitle: {
   		      text: 'Plain'
   		    }
   		  });
   		});

   		$('#inverted').click(function () {
   		  chart.update({
   		    chart: {
   		      inverted: true,
   		      polar: false
   		    },
   		    subtitle: {
   		      text: 'Inverted'
   		    }
   		  });
   		});

   		$('#polar').click(function () {
   		  chart.update({
   		    chart: {
   		      inverted: false,
   		      polar: true
   		    },
   		    subtitle: {
   		      text: 'Polar'
   		    }
   		  });
   		});


   		</script>
            </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url();?>plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url();?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url();?>plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url();?>plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url();?>plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url();?>plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>js/admin.js"></script>
    <script src="<?php echo base_url();?>js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>js/demo.js"></script>
</body>

</html>