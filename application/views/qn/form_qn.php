<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
		</div>
		<!-- Input -->
		<form action="<?php echo site_url("dorm/insertCus");?>" method"post">
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
										<input type="text"  name="std" class="form-control"
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
									<div class="col-sm-4">1.ท่านรู้สึกพึงพอใจกับการใช้ชีวิตในหอพัก
									</div>
									<div class="col-sm-2">
										<input name="group1" id="radio_1"
											class="with-gap radio-col-red" value= "1" checked="" type="radio"> <label
											for="radio_1"></label>
									</div>
									<div class="col-sm-2">
										<input name="group1" id="radio_2"
											class="with-gap radio-col-red" value= "2" checked="" type="radio"> <label
											for="radio_2"></label>

									</div>
									<div class="col-sm-2">
										<input name="group1" id="radio_3"
											class="with-gap radio-col-red" value= "3" checked="" type="radio"> <label
											for="radio_3"></label>
									</div>
									<div class="col-sm-2">
										<input name="group1" id="radio_4"
											class="with-gap radio-col-red" value= "4" checked="" type="radio"> <label
											for="radio_4"></label>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-4">2.ท่านรู้สึกสบายใจเมื่อกลับมายังห้องพัก</div>
									<div class="col-sm-2">
										<input name="group2" id="radio_5"
											class="with-gap radio-col-red" value= "1" checked="" type="radio"> <label
											for="radio_5"></label>
									</div>
									<div class="col-sm-2">
										<input name="group2" id="radio_6"
											class="with-gap radio-col-red" value= "2" checked="" type="radio"> <label
											for="radio_6"></label>

									</div>
									<div class="col-sm-2">
										<input name="group2" id="radio_7"
											class="with-gap radio-col-red" value= "3" checked="" type="radio"> <label
											for="radio_7"></label>
									</div>
									<div class="col-sm-2">
										<input name="group2" id="radio_8"
											class="with-gap radio-col-red" value= "4" checked="" type="radio"> <label
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
									<div class="col-sm-4">5.ท่านรู้สึกผิดหวังที่เลือกมาอยู่ห้องนี้
									</div>
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
												<a href="<?php echo base_url();?>index.php/dorm/dis"><button type="button"
													class="btn bg-pink btn-block btn-lg waves-effect">แสดงผล</button></a>
													
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<!-- #END# Input -->

	</div>
</section>