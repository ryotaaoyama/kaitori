<?php

/**
 * Template Name: Page Form3
 *
 */

get_header('form'); ?>

<div class="form-page-custom">
<img src="<?php echo home_url();?>/wp-content/themes/ctnkaitori/assets/img/back.png" class="back_btn" onclick="history.back()"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-detail-cus">
					<h2>外装の状態を<br class="sp-block">教えてください</h2>
					<div class="step-area">
					<div class="step-area-item">
						お客様情報
					</div>
					<div class="step-area-item">
						おクルマの情報
					</div>
					<div class="step-area-item is__active">
						外装・内装
					</div>
					<div class="step-area-item">
					装備・日程
					</div>

				</div>
					<div class="form-ct-dt">
						<?php echo do_shortcode('[contact-form-7 id="3682" title="フォーム3"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




<script>


	
	var wpcf7Elm = document.querySelector('.wpcf7');
	let name = document.querySelector('[name="your-name"]');
	let email = document.querySelector('[name="your-email"]');
	let zip = document.querySelector('[name="form_zip"]');
	let ken = document.querySelector('[name="form_pref"]');
	let shi = document.querySelector('[name="form_address"]');
	let banchi = document.querySelector('[name="address"]');
	let zansai = document.querySelector('[name="zansai"]');

	// checked
// 	let shaken = document.querySelectorAll('[name="shaken"]');
// 	let shada = document.querySelectorAll('[name="shada"]');
// 	let shakm = document.querySelectorAll('[name="shakm"]');
// 	let shawd = document.querySelectorAll('[name="shawd"]');
// 	let shane = document.querySelectorAll('[name="shane"]');
// 	let shaxe = document.querySelectorAll('[name="shaxe"]');
// 	let shasua = document.querySelectorAll('[name="shasua"]');
// 	let shazen = document.querySelectorAll('[name="shazen"]');
// 	let shapa = document.querySelectorAll('[name="shapa"]');
// 	let shahe = document.querySelectorAll('[name="shahe"]');
// 	let shage = document.querySelectorAll('[name="shage"]');
// 	let shapi = document.querySelectorAll('[name="shapi"]');
// 	let naika = document.querySelectorAll('[name="naika"]');
// 	let nairua = document.querySelectorAll('[name="nairua"]');
// 	let naishito = document.querySelectorAll('[name="naishito"]');
// 	let naieacon = document.querySelectorAll('[name="naieacon"]');
// 	let naitabaco = document.querySelectorAll('[name="naitabaco"]');
// 	let sohinnabi = document.querySelectorAll('[name="sohinnabi"]');
// 	let sohinden = document.querySelectorAll('[name="sohinden"]');
// 	let sohinshito = document.querySelectorAll('[name="sohinshito"]');
// 	let sohinhando = document.querySelectorAll('[name="sohinhando"]');
// 	let sohinmonitor = document.querySelectorAll('[name="sohinmonitor"]');
// 	let sohinsan = document.querySelectorAll('[name="sohinsan"]');
// 	let sohintaiya = document.querySelectorAll('[name="sohintaiya"]');


// 	let xilanh = document.querySelector('[name="xilanh"]');
// 	let bodykit = document.querySelector('[name="body-kit"]');
// 	let nhan = document.querySelector('[name="nhan"]');

// 	// Select
// 	let timebuy = document.querySelector('[name="timebuy"]');





</script>

<script>
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === "") {
					alert("第1査定希望日を選択してください");
		} 
	});
	
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime82.value === "") {
					alert("第2査定希望日を選択してください");
		} 
	});
// 				//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime83.value === "") {
					alert("第3査定希望日を選択してください");
		} 
	});
			//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (time50.value === "") {
alert("第1査定希望日の希望時間を選択してください");
		} 
	});
	
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (time51.value === "") {
				alert("第2査定希望日の希望時間を選択してください");
		} 
	});
				//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (time52.value === "") {
			alert("第3査定希望日の希望時間を選択してください");
		} 
	});
	
		    let today = new Date();
	var Year = today.getFullYear();
	     var Month = today.getMonth()+1;
	      var Day0 = today.getDate();
	      var Day1 = today.getDate()+1;
		  var Day2 = today.getDate()+2;
		  var Day3 = today.getDate()+3;
		var next_month = today.getMonth()+2;
	
	
	month = Month.toString().padStart( 2, '0');
	now0 = Day0.toString().padStart( 2, '0');
now1 = Day1.toString().padStart( 2, '0');
now2 = Day2.toString().padStart( 2, '0');
	
	let thisDay0 = Year+"-"+month + "-" + now0;
	let thisDay1 = Year+"-"+month + "-" + now1;
	let thisDay2 = Year+"-"+month + "-" + now2;
	let nextMonth = Year+"-"+next_month + "-" + now0;
// let a36 =	document.querySelector(".a36");
// 	console.log(a36);
// 	$(document).on('change', '.selectDay_1', function() {
// 		if (datetime81.value > nextMonth) {
// 		document.querySelector(".a36").innerText="本日より1か月後以降の日付はご入力できません";
// 		return true;		
// 		}});
				$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value > nextMonth||datetime82.value > nextMonth||datetime83.value > nextMonth) {
alert("本日より1か月後以降の日付はご入力できません");
		} 
		});
	
	
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value < thisDay0||datetime82.value < thisDay0||datetime83.value < thisDay0) {
alert("本日より以前の日程はご入力できません");
		} 
		});
	
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === thisDay0||datetime81.value === thisDay1||datetime81.value === thisDay2||datetime82.value === thisDay0||datetime82.value === thisDay1||datetime82.value === thisDay2||datetime83.value === thisDay0||datetime83.value === thisDay1||datetime83.value === thisDay2) {
alert("査定希望日は本日より3日後以降をご選択ください");
		} 
		});
		
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime81.value === thisDay1) {
// alert("査定希望日1は本日より3日後以降をご選択ください");
// 		} 
// 		});
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime81.value === thisDay2) {
// alert("査定希望日1は本日より3日後以降をご選択ください");
// 		} 
// 		});

	
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime82.value === thisDay0) {
// alert("査定希望日2は本日より3日後以降をご選択ください");
// 		} 
// 		});
		
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime82.value === thisDay1) {
// alert("査定希望日2は本日より3日後以降をご選択ください");
// 		} 
// 		});
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime82.value === thisDay2) {
// alert("査定希望日2は本日より3日後以降をご選択ください");
// 		} 
// 		});	

	
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime83.value === thisDay0) {
// alert("査定希望日3は本日より3日後以降をご選択ください");
// 		} 
// 		});
		
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime83.value === thisDay1) {
// alert("査定希望日3は本日より3日後以降をご選択ください");
// 		} 
// 		});
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime83.value === thisDay2) {
// alert("査定希望日3は本日より3日後以降をご選択ください");
// 		} 
// 		});	

	
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value ===datetime82.value||datetime81.value ===datetime83.value||datetime82.value ===datetime83.value) {
					alert("査定希望日は3日程とも異なる日付を選択してください");
				return false;
		} 
	});
	
		//Date Time
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime81.value === datetime83.value) {
// 					alert("査定希望日は3日程とも異なる日付を選択してください");
// 				return false;
// 		} 
// 	});
// 			//Date Time
// $('.wpcf7 input[type="submit"]').on('click', function (){
// 		if (datetime82.value === datetime83.value) {
// 					alert("査定希望日は3日程とも異なる日付を選択してください");
// 			return false;
// 		} 
// 	});

</script>
<?php get_footer('form'); ?>