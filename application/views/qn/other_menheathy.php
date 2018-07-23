
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>พฤติกรรมด้านสุขภาพจิต</h2>
			</div>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="container"
				style="min-width: 310px; height: 400px; margin: 0 auto"></div>


			<script type="text/javascript">
				Highcharts
						.chart(
								'container',
								{
									chart : {
										type : 'column'
									},
									title : {
										text : 'พฤติกรรมด้านสุขภาพจิต'
									},
									subtitle : {
										text : 'ประจำปีการศึกษา 2560'
									},
									xAxis : {
										categories : [
												'1. การรอคอยเพื่อให้บรรลุเป้าหมายที่พอใจ',
												'2. การถูกบังคับให้ทำในสิ่งที่ไม่ชอบ สามารถอธิบายเหตุผลจนผู้อื่นยอมรับได้ ',
												'3. การยอมรับได้ว่าผู้อื่นก็อาจมีเหตุผลที่จะไม่พอใจการกระทำ',
												'4. การหาเหตุผลที่แท้จริงของปัญหาโดยไม่คิดเอง',
												'5. การตัดสินใจทำอะไรหลายอย่างในเวลาเดียวกัน',
												'6. การทำให้เรื่องเครียดให้เป็นเรื่องผ่อนคลาย',
												'7. ความลำบากที่ต้องอยู่กับคนที่ไม่คุ้นเคย' ],
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
									series : [
											{
												name : 'ไม่เคย',
												data : [ 5.19, 11.36, 4.59, 9.68,5.14, 21.14, 5.63 ]

											},
											{
												name : 'เล็กน้อย',
												data : [ 22.37, 42.42, 24.74, 26.57,25.63, 55.90, 39.36 ]

											},
											{
												name : 'มาก',
												data : [ 59.95, 40.40, 56.69, 53.19, 55.31 ,17.78, 43.75]

											},
											{
												name : 'มากที่สุด',
												data : [ 12.49, 5.83, 13.98, 10.57, 13.93,5.19, 11.26 ]

											} ]
								});
			</script>
		</div>

	</section>
