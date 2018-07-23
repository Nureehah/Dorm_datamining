
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
						<div class="number count-to" data-from="0" data-to="125"
							data-speed="15" data-fresh-interval="20"></div>
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
						<div class="number count-to" data-from="0" data-to="257"
							data-speed="1000" data-fresh-interval="20"></div>
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
						<div class="number count-to" data-from="0" data-to="243"
							data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>

		</div>
		<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
		<div id='myChart'>
			<a class="zc-ref" href="https://www.zingchart.com/">Powered by
				ZingChart</a>
		</div>

		<script type="text/javascript">
	   
    var myConfig = {
        "type": "area",
        "title": {
            "text": "Customer Survey Response Quality",
            "text-align": "center",
            "font-color": "#5b5b5b",
            "font-size": "18px",
            "padding": "10px",
            "background-color": "none",
            "adjust-layout": true
        },
        "plotarea": {
            "margin": "dynamic"
        },
        "scale-x": {
            "values": [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sept",
                "Oct",
                "Nov",
                "Dec"
            ],
            "label": {
                "text": "Surveys per Month",
                "font-color": "#5b5b5b"
            },
            "line-style": "solid",
            "line-width": "1px",
            "line-color": "#5b5b5b",
            "guide": {
                "line-style": "solid",
                "line-width": "1px",
                "line-color": "#5b5b5b"
            },
            "tick": {
                "line-style": "solid",
                "line-width": "1px",
                "line-color": "#5b5b5b"
            }
        },
        "scale-y": {
            "min-value": 0,
            "max-value": 100,
            "step": 20,
            "format": "%v%",
            "label": {
                "text": "Surveys per Quality Guidelines",
                "font-color": "#5b5b5b"
            },
            "line-style": "solid",
            "line-width": "1px",
            "line-color": "#5b5b5b",
            "guide": {
                "line-style": "solid",
                "line-width": "1px",
                "line-color": "#5b5b5b"
            },
            "tick": {
                "line-style": "solid",
                "line-width": "1px",
                "line-color": "#5b5b5b"
            }
        },
        "plot": {
            "stacked": true,
            "stack-type": "100%",
            "active-area": true
        },
        "legend": {
            "layout": "float",
            "toggle-action":"remove",
            "shadow": 0,
            "adjust-layout": true,
            "align": "center",
            "vertical-align": "bottom",
            "marker": {
                "type": "match",
                "show-line": true,
                "line-width": 4,
                "shadow": "none"
            }
        },
        "tooltip": {
            "text": "%t Surveys: %v<br>Percent of Surveys for %k: %npv%",
            "decimals": 0,
            "shadow": 0,
            "border-radius": 5
        },
        "series": [
            {
                "values": [
                    116,
                    125,
                    109,
                    86,
                    76,
                    95,
                    85,
                    77,
                    101,
                    90,
                    87,
                    62
                ],
                "text": "Poor",
                "line-color": "#EF5350",
                "marker": {
                    "background-color": "#EF5350",
                    "border-color": "#EF5350",
                    "border-width": "2px",
                    "shadow": false
                },
                "background-color": "#EF5350"
            },
            {
                "values": [
                    195,
                    206,
                    215,
                    140,
                    185,
                    176,
                    184,
                    190,
                    110,
                    174,
                    155,
                    165
                ],
                "text": "Moderate",
                "line-color": "#FFA726",
                "marker": {
                    "background-color": "#FFA726",
                    "border-color": "#FFA726",
                    "border-width": "2px",
                    "shadow": false
                },
                "background-color": "#FFA726"
            },
            {
                "values": [
                    223,
                    284,
                    268,
                    274,
                    230,
                    199,
                    185,
                    208,
                    248,
                    295,
                    210,
                    225
                ],
                "text": "Good",
                "line-color": "#0CBADB",
                "marker": {
                    "background-color": "#0CBADB",
                    "border-color": "#0CBADB",
                    "border-width": "2px",
                    "shadow": false
                },
                "background-color": "#0CBADB"
            },
            {
                "values": [
                    185,
                    175,
                    168,
                    154,
                    198,
                    175,
                    124,
                    145,
                    168,
                    174,
                    154,
                    125
                ],
                "text": "Excellent",
                "line-color": "#46C28C",
                "marker": {
                    "background-color": "#46C28C",
                    "border-color": "#46C28C",
                    "border-width": "2px",
                    "shadow": false
                },
                "background-color": "#46C28C"
            }
        ]
    };
     
     
    zingchart.render({ 
    	id : 'myChart', 
    	data : myConfig, 
    	height: '100%', 
    	width: '100%' 
    });
     

	   
	     </script>
		</script>
	</div>
</section>