
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
		</div>

		<!-- Widgets -->
		<div class="row clearfix">
			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-14">
				<div class="info-box bg-light-blue hover-expand-effect">
					<div class="icon">
						<i class="material-icons">insert_emoticon</i>
					</div>
					<div class="content">
						<div class="text">จำนวนนักศึกษาในหอพักที่มีความสุขมาก ปีการศึกษา
							2/2560</div>
						<div class="number">78.58 %</div>

					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-14">
				<div class="info-box bg-light-green hover-expand-effect">
					<div class="icon">
						<i class="material-icons">assessment</i>
					</div>
					<div class="content">
						<div class="text">ผลการเรียนเฉลี่ยของคนที่มีความสุข ปีการศึกษา 2/2560 </div>

						<div class="number">1.00-1.99 (ไม่ผ่าน)</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	</div>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>

	<div id="container"
		style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	<script type="text/javascript">


	// Create the chart
	Highcharts.setOptions({
				colors : [ '#F44336', '#E91E63', '#9C27B0', '#3F51B5', '#2196F3', '#009688', '#4CAF50', '#8BC34A', '#FFEB3B', '#FFC107', '#FF9800', '#FF5722', '#795548']
			});
	Highcharts.chart('container', {
	  chart: {
	    type: 'column'
	  },
	  title: {
	    text: 'ดัชนีความสุขโดยเฉลี่ยของนักศึกษาในหอพัก '
	  },
	  subtitle: {
	    text: 'ประจำปีการศึกษา 2/2560 แยกตามหอพัก'
	  },
	  xAxis: {
	    type: 'category'
	  },
	  yAxis: {
	    title: {
	      text: 'ระดับความสุข'
	    }

	  },
	  legend: {
	    enabled: false
	  },
	  plotOptions: {
	    series: {
	      borderWidth: 0,
	      dataLabels: {
	        enabled: true,
	        format: '{point.y:.1f} %'
	      }
	    }
	  },

	  tooltip: {
	    headerFormat: '<span style="font-size:11px">{}</span><br>',
	    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} %</b><br/>'
	  },

	  "series": [
	    {
	      "name": "หอ",
	      "colorByPoint": true,
	      "data": [
	        {
	          "name": "หอ 1",
	          "y": 82.14,
	          "drilldown": "หอ 1"
	        },
	        {
	          "name": "หอ 2",
	          "y": 79.64,
	          "drilldown": "หอ 2"
	        },
	        {
	          "name": "หอ 3",
	          "y": 79.24,
	          "drilldown": "หอ 3"
	        },
	        {
	          "name": "หอ 4",
	          "y": 77.27,
	          "drilldown": "หอ 4"
	        },
	        {
	          "name": "หอ 5",
	          "y": 75.56,
	          "drilldown": "หอ 5"
	        },
	        {
	          "name": "หอ 7",
	          "y": 78.51,
	          "drilldown": "หอ 7"
	        },
	        {
	          "name": "หอ 10",
	          "y": 75.29,
	          "drilldown": "หอ 10"
	        },
	        {
	          "name": "หอ 11",
	          "y": 81.25,
	          "drilldown": "Chrome"
	        },
	        {
	          "name": "หอ 13",
	          "y": 78.27,
	          "drilldown": "Firefox"
	        },
	        {
	          "name": "หอ 14",
	          "y": 79.59,
	          "drilldown": "Internet Explorer"
	        },
	        {
	          "name": "หอ 16",
	          "y": 72.56,
	          "drilldown": "Safari"
	        },
	        {
	          "name": "หอ 17",
	          "y": 78.03,
	          "drilldown": "Edge"
	        },
	        {
	          "name": "หอ 18",
	          "y": 81.82,
	          "drilldown": "Opera"
	        }
	      ]
	    }
	  ],
	  "drilldown": {
	    "series": [
	      {
	        "name": "หอ 1",
	        "id": "หอ 1",
	        "data": [
	          [
	            "มีสุขภาพจิตมากกว่าคนทั่วไป",
	           23.21

	          ],
	          [
	            "มีสุขภาพจิตเท่ากับคนทั่วไป",
	            58.93

	          ],
	          [
	            "มีสุขภาพจิตต่ำกว่าคนทั่วไป",
	            17.86

	          ]
	        ]
	      },
	      {
	        "name": "หอ 2",
	        "id": "หอ 2",
	        "data": [
	          [
	            "v58.0",
	            1.02
	          ],
	          [
	            "v57.0",
	            7.36
	          ],
	          [
	            "v56.0",
	            0.35
	          ],
	          [
	            "v55.0",
	            0.11
	          ],
	          [
	            "v54.0",
	            0.1
	          ],
	          [
	            "v52.0",
	            0.95
	          ],
	          [
	            "v51.0",
	            0.15
	          ],
	          [
	            "v50.0",
	            0.1
	          ],
	          [
	            "v48.0",
	            0.31
	          ],
	          [
	            "v47.0",
	            0.12
	          ]
	        ]
	      },
	      {
	        "name": "Internet Explorer",
	        "id": "Internet Explorer",
	        "data": [
	          [
	            "v11.0",
	            6.2
	          ],
	          [
	            "v10.0",
	            0.29
	          ],
	          [
	            "v9.0",
	            0.27
	          ],
	          [
	            "v8.0",
	            0.47
	          ]
	        ]
	      },
	      {
	        "name": "Safari",
	        "id": "Safari",
	        "data": [
	          [
	            "v11.0",
	            3.39
	          ],
	          [
	            "v10.1",
	            0.96
	          ],
	          [
	            "v10.0",
	            0.36
	          ],
	          [
	            "v9.1",
	            0.54
	          ],
	          [
	            "v9.0",
	            0.13
	          ],
	          [
	            "v5.1",
	            0.2
	          ]
	        ]
	      },
	      {
	        "name": "Edge",
	        "id": "Edge",
	        "data": [
	          [
	            "v16",
	            2.6
	          ],
	          [
	            "v15",
	            0.92
	          ],
	          [
	            "v14",
	            0.4
	          ],
	          [
	            "v13",
	            0.1
	          ]
	        ]
	      },
	      {
	        "name": "Opera",
	        "id": "Opera",
	        "data": [
	          [
	            "v50.0",
	            0.96
	          ],
	          [
	            "v49.0",
	            0.82
	          ],
	          [
	            "v12.1",
	            0.14
	          ]
	        ]
	      }
	    ]
	  }
	});
   		</script>
	</div>
</section>