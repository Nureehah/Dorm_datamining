
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/data.js"></script>
			<script src="https://code.highcharts.com/modules/drilldown.js"></script>

			<div id="container"
				style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			<script type="text/javascript">
					
// Create the chart
Highcharts.setOptions({
				colors : [ '#F44336', '#E91E63', '#9C27B0', '#3F51B5']
			});
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'ดัชนีความสุขโดยเฉลี่ยของนักศึกษาในหอพัก '
  },
  subtitle: {
    text: 'ประจำปีการศึกษา 2/2560 แยกตามระดับเกรดเฉลี่ย'
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
    pointFormat: '<span style="color :{point.color}">{point.name}</span> : <b>{point.y:.2f} %</b><br/>'
  },

  "series": [
    {
      "colorByPoint": true,
      "data": [
        {
          "name": "1.00-1.99 ( ไม่ผ่าน )",
          "y": 83.41,
          "drilldown": "Chrome"
        },
        {
          "name": "2.00-2.69 ( อ่อน )",
          "y": 76.43,
          "drilldown": "Firefox"
        },
        {
          "name": "2.70-2.99 ( ดี )",
          "y": 78.45,
          "drilldown": "Internet Explorer"
        },
        {
          "name": "3.00-4.00 ( ดีมาก )",
          "y": 78.1,
          "drilldown": "Safari"
        }
      ]
    }
  ],
  "drilldown": {
    "series": [
      {
        "name": "Chrome",
        "id": "Chrome",
        "data": [
          [
            "มีสุขภาพจิตมากกว่าคนทั่วไป",
            22.61
          ],
          [
            "มีสุขภาพจิตเท่ากับคนทั่วไป",
            60.8
          ],
          [
            "มีสุขภาพจิตต่ำกว่าคนทั่วไป",
            16.58
          ]
        ]
      },
      {
        "name": "Firefox",
        "id": "Firefox",
        "data": [
          [
            "มีสุขภาพจิตมากกว่าคนทั่วไป",
            15.9
          ],
          [
            "มีสุขภาพจิตเท่ากับคนทั่วไป",
            60.53
          ],
          [
            "มีสุขภาพจิตต่ำกว่าคนทั่วไป",
            23.57
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

</section>
