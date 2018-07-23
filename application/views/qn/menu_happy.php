<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
		</div>
		<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
		<div id='myChart'>
			<a class="zc-ref" href="https://www.zingchart.com/"></a>
		</div>
		<script>
zingchart.THEME="classic";
var initState = null; // Used later to store the chart state before changing the data
var bgColors = ["#1976d2", "#1976d2", "#1976d2"]; // ie, chrome, ff, safari, opera, unknown
var myConfig = {
    "globals": {
        "font-family": "Helvetica"
    },
    "type": "bar",
    "background-color": "white",
    "title": {
        "color": "#606060",
        "background-color": "white",
        "text": "ผลการวิเคราะห์ดัชนีความสุข ตามแบบทดสอบดัชนีวัดสุขภาพจิต"
    },
    "subtitle": {
        "color": "#606060",
        "text": "ประจำปีการศึกษา 2/2560 "
    },
    "scale-y": {
        "line-color": "none",
        "tick": {
            "line-color": "none"
        },
        "guide": {
            "line-style": "solid"
        },
        "item": {
            "color": "#606060"
        }
    },
    "scale-x": {
        "values": [
            "มีสุขภาพจิตมากกว่าคนทั่วไป",
            "มีสุขภาพจิตเท่ากับคนทั่วไป",
            "มีสุขภาพจิตต่ำกว่าคนทั่วไป"
        ],
        "line-color": "#C0D0E0",
        "line-width": 1,
        "tick": {
            "line-width": 1,
            "line-color": "#C0D0E0"
        },
        "guide": {
            "visible": false
        },
        "item": {
            "color": "#606060"
        }
    },
    "crosshair-x": {
        "marker": {
            "visible": false
        },
        "line-color": "none",
        "line-width": "0px",
        "scale-label": {
            "visible": false
        },
        "plot-label": {
            "text": "%data-browser: %v% ",
            "multiple": true,
            "font-size": "12px",
            "color": "#606060",
            "background-color": "white",
            "border-width": 3,
            "alpha": 0.9,
            "callout": true,
            "callout-position": "bottom",
            "shadow": 0,
            "placement": "node-top",
            "border-radius": 4,
            "offsetY":-20,
            "padding":8,
            "rules": [
                {
                    "rule": "%i==0",
                    "border-color": "#1976d2"
                },
                {
                    "rule": "%i==1",
                    "border-color": "#1976d2"
                },
                {
                    "rule": "%i==2",
                    "border-color": "#1976d2"
                },
                {
                    "rule": "%i==3",
                    "border-color": "#ffa000"
                },
                {
                    "rule": "%i==4",
                    "border-color": "#7b1fa2"
                },
                {
                    "rule": "%i==5",
                    "border-color": "#c2185b"
                }
            ]
        }
    },
    "plot": {
        "data-browser": [
            "<span style='font-weight:bold;color:#1976d2;'>มีสุขภาพจิตมากกว่าคนทั่วไป</span>",
            "<span style='font-weight:bold;color:#424242;'>มีสุขภาพจิตเท่ากับคนทั่วไป</span>",
            "<span style='font-weight:bold;color:#388e3c;'>มีสุขภาพจิตต่ำกว่าคนทั่วไป</span>",
            "<span style='font-weight:bold;color:#ffa000;'></span>",
            "<span style='font-weight:bold;color:#7b1fa2;'>Opera</span>",
            "<span style='font-weight:bold;color:#c2185b;'>Unknown</span>"
        ],
        "cursor": "hand",
        "value-box": {
            "text": "%v%",
            "text-decoration": "underline",
            "color": "#606060"
        },
        "tooltip": {
            "visible": false
        },
        "animation": {
            "effect": "7"
        },
         "rules": [
                {
                    "rule": "%i==0",
                    "background-color": "#1976d2"
                },
                {
                    "rule": "%i==1",
                    "background-color": "#424242"
                },
                {
                    "rule": "%i==2",
                    "background-color": "#388e3c"
                },
                {
                    "rule": "%i==3",
                    "background-color": "#ffa000"
                },
                {
                    "rule": "%i==4",
                    "background-color": "#7b1fa2"
                },
                {
                    "rule": "%i==5",
                    "background-color": "#c2185b"
                }
            ]
    },
    "series": [
        {
            "values": [
                17.07 ,
                61.51,
                21.42
            ]
        }
    ]
};

var updateChart = function(p){
  initState = zingchart.exec(p.id,'getdata'); // Gets the state of the chart when the node was clicked
  var newValues = null;
  var update = null;
  switch(p.nodeindex){
    case 0:
      newValues = store['ie'];
      update = true;
      break;
    case 1:
      newValues = store['chrome'];
      update = true;
      break;
    case 2:
      newValues = store['firefox'];
      update = true;
      break;
    case 3:
      newValues = store['safari'];
      update = true;
      break;
    case 4:
      newValues = store['opera'];
      update = true;
      break;
    case 5:
      update = false; // We don't want to allow drilldown for unknown
      break;
  }
  if(update){
    zingchart.unbind(p.id, 'node_click'); // Disable node_click for second level
    zingchart.exec(p.id, 'modify', {
      update:false, // Making multiple changes, queue these changes
      data:{
        "crosshair-x":{
          "plot-label":{
            "text":"%v% of total",
            "rules":[],
            "border-color": bgColors[p.nodeindex]
          }
        },
        "plot":{
          "cursor":null,
          "rules":[],
          "background-color": bgColors[p.nodeindex]
        },
        "scale-x":{
          "values":[]
        }
      }
    });
    zingchart.exec(p.id, 'setseriesvalues',{ // Replaces all values at plotindex 0
      update:false, // Queue these, too
      plotindex:0,
      values:newValues
    });
    zingchart.exec(p.id,'update'); // Push queued changes
    zingchart.bind(p.id, 'animation_end', function(){ // When the animation ends...
      zingchart.exec(p.id, 'addobject',{ // ...add a back button
        type:'shape',
        data:{
          "type":"rectangle",
          "id":"back_btn",
          "height":20,
          "width":70,
          "background-color":"#ffffff #f6f6f6",
          "x":"80%",
          "y":"16%",
          "border-width":1,
          "border-color":"#888",
          "cursor":"hand",
          "label":{
            "text":"< Back",
            "color": "#606060"
          },
          "hover-state":{
            "background-color":"#1976D2 #ffffff",
            "border-color":"#57a2ff",
            "fill-angle": -180
          }
        }
      });
    });
  }
};

zingchart.render({
	id : 'myChart', 
	data : myConfig,
});

zingchart.bind('myChart','node_click',updateChart);

zingchart.bind('myChart', 'shape_click', function(p){ // Listen for back button click
  zingchart.unbind(p.id,'animation_end');
  if (p.shapeid == "back_btn"){
    zingchart.exec(p.id,'setdata',{ // Set the data back to the state it was in when the node was clicked
      data:initState
    });
    zingchart.bind(p.id,'node_click',updateChart);
  }
});

</script>
		<div class="row clearfix">
			<div id="chart1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<script type="text/javascript">
						Highcharts.setOptions({
							colors : [ '#E91E63', '#2196F3', '#4CAF50',
									'#FFC107' ]
						});

						Highcharts
								.chart(
										'chart1',
										{
											chart : {
												type : 'column'
											},
											title : {
												text : 'จำนวนนักศึกษาตามความสัมพันธ์ด้านความรู้สึกที่ดี '
											},
											subtitle : {
												text : 'ประจำปีการศึกษา 2/2560'
											},
											xAxis : {
												categories : [
														'ความรู้สึกพึงพอใจกับการใช้ชีวิตในหอพัก',
														'ความรู้สึกสบายใจเมื่อกลับมาห้องพัก',
														'ความรู้สึกว่าชีวิตมีความสุข'

												],
												crosshair : true
											},
											yAxis : {
												min : 0,
												title : {
													text : 'จำนวนนักศึกษา (%)'
												}
											},
											tooltip : {
												headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
												pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
														+ '<td style="padding:0"><b>{point.y:.1f} %  คน</b></td></tr>',
												footerFormat : '</table>',
												shared : true,
												useHTML : true
											},
											plotOptions : {
												column : {
													pointPadding : 0.2,
													borderWidth : 0
												}
											},
											series : [ {
												name : 'ไม่เคย',
												data : [ 1.38, 2.12, 1.53 ]

											}, {
												name : 'เล็กน้อย',
												data : [ 18.42, 20.15, 24.00 ]

											}, {
												name : 'มาก',
												data : [69.23, 63.01, 63.06]

											}, {
												name : 'มากที่สุด',
												data : [ 10.96, 14.72, 11.41 ]

											} ]
										});
					</script>

			<div id="chart2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<script type="text/javascript">
							Highcharts.setOptions({
								colors : [ '#E91E63', '#2196F3', '#4CAF50',
										'#FFC107' ]
							});

							Highcharts
									.chart(
											'chart2',
											{
												chart : {
													type : 'column'
												},
												title : {
													text : 'จำนวนนักศึกษาตามความสัมพันธ์ด้านความรู้สึกที่ไม่ดี '
												},
												subtitle : {
													text : 'ประจำปีการศึกษา 2/2560'
												},
												xAxis : {
													categories : [
															'ความรู้สึกเบื่อหน่ายท้อแท้ในการดำเนินชีวิต',
															'ความรู้สึกผิดหวังที่เลือกอยู่ห้องพักนี้',
															'การปรับตัวเข้ากับเพื่อนร่วมห้องไม่ได้'

													],
													crosshair : true
												},
												yAxis : {
													min : 0,
													title : {
														text : 'จำนวนนักศึกษา(%)'
													}
												},
												tooltip : {
													headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
													pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
															+ '<td style="padding:0"><b>{point.y:.1f} %  คน</b></td></tr>',
													footerFormat : '</table>',
													shared : true,
													useHTML : true
												},
												plotOptions : {
													column : {
														pointPadding : 0.2,
														borderWidth : 0
													}
												},
												series : [ {
													name : 'ไม่เคย',
													data : [ 23.60, 62.42, 65.28 ]
												}, {
													name : 'เล็กน้อย',
													data : [ 64.59, 28.84, 24.35 ]
												}, {
													name : 'มาก',
													data : [ 10.27, 7.21, 8.20 ]
												}, {
													name : 'มากที่สุด',
													data : [ 1.53, 1.53, 2.17 ]
												} ]
											});
						</script>


			<div id="chart3" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<script type="text/javascript">
							Highcharts.setOptions({
								colors : [ '#E91E63', '#2196F3', '#4CAF50',
										'#FFC107' ]
							});

							Highcharts
									.chart(
											'chart3',
											{
												chart : {
													type : 'column'
												},
												title : {
													text : 'จำนวนนักศึกษาตามความสัมพันธ์ด้านสมรรถภาพจิตใจ'
												},
												subtitle : {
													text : 'ประจำปีการศึกษา 2/2560'
												},
												xAxis : {
													categories : [
														'การทำใจยอมรับได้เมื่อมีปัญหาในการอยู่ห้องพักร่วมกัน',
														'การมั่นใจว่าสามารถควบคุมอารมณ์ได้เมื่อมีความขัดแย้งในห้องพัก ',
														'การเผชิญหน้ากับปัญหาที่รุนแรงที่อาจเกิดขึ้นในการอยู่ห้องพักร่วมกัน' 

													],
													crosshair : true
												},
												yAxis : {
													min : 0,
													title : {
														text : 'จำนวนนักศึกษา (%)'
													}
												},
												tooltip : {
													headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
													pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
															+ '<td style="padding:0"><b>{point.y:.1f} %  คน</b></td></tr>',
													footerFormat : '</table>',
													shared : true,
													useHTML : true
												},
												plotOptions : {
													column : {
														pointPadding : 0.2,
														borderWidth : 0
													}
												},
												series : [ {
													name : 'มากที่สุด',
													data : [ 11.11, 18.52, 14.32]
												}, {
													name : 'มาก',
													data : [ 62.37, 64.44, 63.21 ]
												}, {
													name : 'เล็กน้อย',
													data : [ 24.00, 15.51, 20.40 ]
												}, {
													name : 'ไม่เคย',
													data : [ 2.52, 1.53, 2.07 ]
												} ]
											});
						</script>


			<div id="chart4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<script type="text/javascript">
						Highcharts.setOptions({
							colors : [ '#E91E63', '#2196F3', '#4CAF50',
									'#FFC107' ]
						});

						Highcharts
								.chart(
										'chart4',
										{
											chart : {
												type : 'column'
											},
											title : {
												text : 'จำนวนนักศึกษาตามความสัมพันธ์ด้านคุณภาพจิตใจ'
											},
											subtitle : {
												text : 'ประจำปีการศึกษา 2/2560'
											},
											xAxis : {
												categories : [
														'ความรู้สึกเห็นอกเห็นใจเมื่อเพื่อนร่วมหอ/ร่วมห้องมีความทุกข์',
														'ความรู้สึกเป็นสุขในการช่วยเหลือเพื่อนร่วมหอ/ร่วมห้องที่มีปัญหา ',
														'ความช่วยเหลือเพื่อนร่วมหอ/ร่วมห้องเมื่อมีโอกาส'

												],
												crosshair : true
											},
											yAxis : {
												min : 0,
												title : {
													text : 'จำนวนนักศึกษา (%)'
												}
											},
											tooltip : {
												headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
												pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
														+ '<td style="padding:0"><b>{point.y:.1f} %  คน</b></td></tr>',
												footerFormat : '</table>',
												shared : true,
												useHTML : true
											},
											plotOptions : {
												column : {
													pointPadding : 0.2,
													borderWidth : 0
												}
											},
											series : [ {
												name : 'ไม่เคย',
												data : [ 1.04, 0.99, 0.74 ]

											}, {
												name : 'เล็กน้อย',
												data : [ 9.93, 8.05, 7.31 ]

											}, {
												name : 'มาก',
												data : [ 68.30, 67.56, 66.72 ]

											}, {
												name : 'มากที่สุด',
												data : [ 20.74, 23.41, 5.68 ]

											} ]
										});
					</script>
		</div>
		<div id="chart5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>

		<script type="text/javascript">
						Highcharts.setOptions({
							colors : [ '#E91E63', '#2196F3', '#4CAF50',
									'#FFC107' ]
						});

						Highcharts
								.chart(
										'chart5',
										{
											chart : {
												type : 'column'
											},
											title : {
												text : 'จำนวนนักศึกษาตามความสัมพันธ์ด้านปัจจัยสนับสนุนของครอบครัว'
											},
											subtitle : {
												text : 'ประจำปีการศึกษา 2/2560'
											},
											xAxis : {
												categories : [
														'ความรู้สึกปลอดภัยเมื่ออยู่ในหอพัก',
														'การดูแลของที่ปรึกษาหอพัก/เพื่อนในหอพัก เมื่อมีอาการป่วย ',
														'สมาชิกในหอพักมีความรักความผูกพันเสมือนบ้านอีกหลังหนึ่ง'

												],
												crosshair : true
											},
											yAxis : {
												min : 0,
												title : {
													text : 'จำนวนนักศึกษา (%)'
												}
											},
											tooltip : {
												headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
												pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
														+ '<td style="padding:0"><b>{point.y:.1f} %  คน</b></td></tr>',
												footerFormat : '</table>',
												shared : true,
												useHTML : true
											},
											plotOptions : {
												column : {
													pointPadding : 0.2,
													borderWidth : 0
												}
											},
											series : [ {
												name : 'ไม่เคย',
												data : [ 1.70, 5.05, 4.78]

											}, {
												name : 'เล็กน้อย',
												data : [ 12.01, 36.42, 32.85  ]

											}, {
												name : 'มาก',
												data : [ 70.55, 54.23, 55.61 ]

											}, {
												name : 'มากที่สุด',
												data : [ 23.39, 11.96, 14.41]

											} ]
										});
					</script>
	</div>
</section>










<!-- Jquery Core Js -->
<script src="../../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../../plugins/node-waves/waves.js"></script>

<!-- Flot Chart Plugins Js -->
<script src="../../plugins/flot-charts/jquery.flot.js"></script>
<script src="../../plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="../../plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="../../plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="../../plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Custom Js -->
<script src="../../js/admin.js"></script>
<script src="../../js/pages/charts/flot.js"></script>

<!-- Demo Js -->
<script src="../../js/demo.js"></script>
</body>

</html>