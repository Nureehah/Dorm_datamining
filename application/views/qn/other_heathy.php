
	<!-- chart heathy-->
	<section class="content">
		<div class="block-header">
			<h2>พฤติกรรมด้านสุขภาพ</h2>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="heathy1"></div>
			<script>
				Highcharts
						.chart(
								'heathy1',
								{
									chart : {
										type : 'column'
									},
									title : {
										text : '1. การมีสมาธิ'
									},
									subtitle : {
										text : 'ประจำปีการศึกษา 2560'
									},
									xAxis : {
										categories : [ '' ],
										crosshair : true
									},
									yAxis : {
										min : 0,
										title : {
											text : 'จำนวนนักศึกษา (คน)'
										}
									},
									tooltip : {
										headerFormat : '<span style="font-size:10px">{point.key}</span><table>',
										pointFormat : '<tr><td style="color:{series.color};padding:0">{series.name}: </td>'
												+ '<td style="padding:0"><b>{point.y:.1f} % คน</b></td></tr>',
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
										data : [ 5.63]

									}, {
										name : 'เล็กน้อย',
										data : [ 30.47 ]

									}, {
										name : 'มาก',
										data : [ 54.96 ]

									}, {
										name : 'มากที่สุด',
										data : [ 8.94 ]

									} ]
								});
			</script>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="heathy2"></div>
			<script>
				// Build the chart
				Highcharts
						.chart(
								'heathy2',
								{
									chart : {
										plotBackgroundColor : null,
										plotBorderWidth : null,
										plotShadow : false,
										type : 'pie'
									},
									title : {
										text : '2. การพักผ่อนไม่เพียงพอ '
									},
									subtitle : {
										text : 'ประจำปีการศึกษา 2560'
									},
									tooltip : {
										pointFormat : '{series.name}: <b>{point.percentage:.1f} %</b>'
									},
									plotOptions : {
										pie : {
											allowPointSelect : true,
											cursor : 'pointer',
											dataLabels : {
												enabled : false
											},
											showInLegend : true
										}
									},
									series : [ {
										name : 'จำนวนนักศึกษา',
										colorByPoint : true,
										data : [ {
											name : 'ไม่เคย',
											y : 8.05,
											sliced : true,
											selected : true
										}, {
											name : 'เล็กน้อย',
											y : 50.52
										}, {
											name : 'มาก',
											y : 30.27
										}, {
											name : 'มากที่สุด',
											y : 11.16
										} ]
									} ]
								});
			</script>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="heathy3"></div>

			<div id="heathy3"></div>
			<script type="text/javascript">
				Highcharts
						.chart(
								'heathy3',
								{
									chart : {
										plotBackgroundColor : null,
										plotBorderWidth : null,
										plotShadow : false,
										type : 'pie'
									},
									title : {
										text : '4. ความบ่อยในการเล่นกีฬา'
									},
									subtitle : {
										text : 'ประจำปีการศึกษา 2560'
									},
									tooltip : {
										pointFormat : '{series.name}: <b>{point.percentage:.1f}%</b>'
									},
									plotOptions : {
										pie : {
											allowPointSelect : true,
											cursor : 'pointer',
											dataLabels : {
												enabled : true,
												format : '<b>{point.name}</b>: {point.percentage:.1f} %',
												style : {
													color : (Highcharts.theme && Highcharts.theme.contrastTextColor)
															|| 'black'
												}
											}
										}
									},
									series : [ {
										name : 'จำนวนนักศึกษา',
										colorByPoint : true,
										data : [ {
											name : 'ไม่เคย',
											y : 10.47,
											sliced : true,
											selected : true
										}, {
											name : 'เล็กน้อย',
											y : 54.72
										}, {
											name : 'มาก',
											y : 26.67
										}, {
											name : 'มากที่สุด',
											y : 8.15 
										} ]
									} ]
								});
			</script>
		</div>


		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="heathy4"></div>
			<script type="text/javascript">
				Highcharts
						.chart(
								'heathy4',
								{
									chart : {
										type : 'column'
									},
									title : {
										text : '3. การตื่นตัวและมีความคิดว่องไว '
									},
									subtitle : {
										text : 'ประจำปีการศึกษา 2560'
									},
									xAxis : {
										categories : [ '' ],
										title : {
											text : null
										}
									},
									yAxis : {
										min : 0,
										title : {
											text : 'จำนวนนักศึกษา (คน)',
											align : 'high'
										},
										labels : {
											overflow : ''
										}
									},
									tooltip : {
										valueSuffix : ' คน'
									},
									plotOptions : {
										bar : {
											dataLabels : {
												enabled : true
											}
										}
									},
									legend : {
										layout : 'vertical',
										align : 'right',
										verticalAlign : 'top',
										x : -40,
										y : 80,
										floating : true,
										borderWidth : 1,
										backgroundColor : ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
										shadow : true
									},
									credits : {
										enabled : false
									},
									series : [ {
										name : 'ไม่เคย',
										data : [ 4.99  ]
									}, {
										name : 'เล็กน้อย',
										data : [ 48.20 ]
									}, {
										name : 'มาก',
										data : [ 42.32  ]
									}, {
										name : 'มากที่สุด',
										data : [ 4.49  ]
									} ]
								});
			</script>
		</div>
	</section>


