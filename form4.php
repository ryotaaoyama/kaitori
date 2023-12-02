<?php

/**
 * Template Name: Page Form4
 *
 */

get_header('form'); ?>

<div class="form-page-custom form4">
<img src="<?php echo home_url();?>/wp-content/themes/ctnkaitori/assets/img/back.png" class="back_btn" onclick="history.back()">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-detail-cus">
					<h2>装備品を<br class="sp-block">教えてください</h2>
					<div class="step-area">
					<div class="step-area-item">
						お客様情報
					</div>
					<div class="step-area-item">
						おクルマの情報
					</div>
					<div class="step-area-item ">
						外装・内装
					</div>
					<div class="step-area-item is__active">
					装備・日程
					</div>

				</div>
					<div class="form-ct-dt">
						<?php echo do_shortcode('[contact-form-7 id="3683" title="フォーム4"]'); ?>
						<img src="<?php echo home_url();?>/wp-content/themes/ctnkaitori/assets/img/form_img3.png" class="form_img">
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
	let shaken = document.querySelectorAll('[name="shaken"]');
	let shada = document.querySelectorAll('[name="shada"]');
	let shakm = document.querySelectorAll('[name="shakm"]');
	let shawd = document.querySelectorAll('[name="shawd"]');
	let shane = document.querySelectorAll('[name="shane"]');
	let shaxe = document.querySelectorAll('[name="shaxe"]');
	let shasua = document.querySelectorAll('[name="shasua"]');
	let shazen = document.querySelectorAll('[name="shazen"]');
	let shapa = document.querySelectorAll('[name="shapa"]');
	let shahe = document.querySelectorAll('[name="shahe"]');
	let shage = document.querySelectorAll('[name="shage"]');
	let shapi = document.querySelectorAll('[name="shapi"]');
	let naika = document.querySelectorAll('[name="naika"]');
	let nairua = document.querySelectorAll('[name="nairua"]');
	let naishito = document.querySelectorAll('[name="naishito"]');
	let naieacon = document.querySelectorAll('[name="naieacon"]');
	let naitabaco = document.querySelectorAll('[name="naitabaco"]');
	let sohinnabi = document.querySelectorAll('[name="sohinnabi"]');
	let sohinden = document.querySelectorAll('[name="sohinden"]');
	let sohinshito = document.querySelectorAll('[name="sohinshito"]');
	let sohinhando = document.querySelectorAll('[name="sohinhando"]');
	let sohinmonitor = document.querySelectorAll('[name="sohinmonitor"]');
	let sohinsan = document.querySelectorAll('[name="sohinsan"]');
	let sohintaiya = document.querySelectorAll('[name="sohintaiya"]');


	let xilanh = document.querySelector('[name="xilanh"]');
	let bodykit = document.querySelector('[name="body-kit"]');
	let nhan = document.querySelector('[name="nhan"]');

	// Select
	let timebuy = document.querySelector('[name="timebuy"]');
	let datetime81 = document.querySelector('[name="date-881"]');
	let datetime82 = document.querySelector('[name="date-882"]');
	let datetime83 = document.querySelector('[name="date-883"]');
	let time50 = document.querySelector('[name="menu-520"]');
	let time51 = document.querySelector('[name="menu-521"]');
	let time52 = document.querySelector('[name="menu-522"]');
	

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
	
	month = Month.toString().padStart( 2, '0');
	now0 = Day0.toString().padStart( 2, '0');
now1 = Day1.toString().padStart( 2, '0');
now2 = Day2.toString().padStart( 2, '0');

	
	let thisDay0 = Year+"-"+month + "-" + now0;
	let thisDay1 = Year+"-"+month + "-" + now1;
	let thisDay2 = Year+"-"+month + "-" + now2;

	
		console.log(thisDay0);
	console.log(thisDay1);
		console.log(thisDay2);

	
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === thisDay0) {
alert("査定希望日1は本日より3日後以降をご選択ください");
		} 
		});
		
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === thisDay1) {
alert("査定希望日1は本日より3日後以降をご選択ください");
		} 
		});
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === thisDay2) {
alert("査定希望日1は本日より3日後以降をご選択ください");
		} 
		});

	
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime82.value === thisDay0) {
alert("査定希望日2は本日より3日後以降をご選択ください");
		} 
		});
		
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime82.value === thisDay1) {
alert("査定希望日2は本日より3日後以降をご選択ください");
		} 
		});
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime82.value === thisDay2) {
alert("査定希望日2は本日より3日後以降をご選択ください");
		} 
		});	

	
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime83.value === thisDay0) {
alert("査定希望日3は本日より3日後以降をご選択ください");
		} 
		});
		
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime83.value === thisDay1) {
alert("査定希望日3は本日より3日後以降をご選択ください");
		} 
		});
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime83.value === thisDay2) {
alert("査定希望日3は本日より3日後以降をご選択ください");
		} 
		});	

	
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value ===datetime82.value) {
					alert("査定希望日は3日程とも異なる日付を選択してください");
				return false;
		} 
	});
	
		//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime81.value === datetime83.value) {
					alert("査定希望日は3日程とも異なる日付を選択してください");
				return false;
		} 
	});
			//Date Time
$('.wpcf7 input[type="submit"]').on('click', function (){
		if (datetime82.value === datetime83.value) {
					alert("査定希望日は3日程とも異なる日付を選択してください");
			return false;
		} 
	});

	// 選択された時

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shaken.value!==""){
	// 	document.querySelector(".a7").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shada.value!==""){
	// 	document.querySelector(".a8").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shakm.value!==""){
	// 	document.querySelector(".a9").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shawd.value!==""){
	// 	document.querySelector(".a10").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shane.value!==""){
	// 	document.querySelector(".a11").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shaxe.value!==""){
	// 	document.querySelector(".a12").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shasua.value!==""){
	// 	document.querySelector(".a18").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shazen.value!==""){
	// 	document.querySelector(".a19").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shapa.value!==""){
	// 	document.querySelector(".a20").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shahe.value!==""){
	// 	document.querySelector(".a21").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shage.value!==""){
	// 	document.querySelector(".a22").innerText="";
	// 	return true;
	// }
	// }, false );
	
	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(shapi.value!==""){
	// 	document.querySelector(".a23").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(naika.value!==""){
	// 	document.querySelector(".a24").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(nairua.value!==""){
	// 	document.querySelector(".a25").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(naishito.value!==""){
	// 	document.querySelector(".a26").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(naieacon.value!==""){
	// 	document.querySelector(".a27").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(naitabaco.value!==""){
	// 	document.querySelector(".a28").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinnabi.value!==""){
	// 	document.querySelector(".a29").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinden.value!==""){
	// 	document.querySelector(".a30").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinshito.value!==""){
	// 	document.querySelector(".a31").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinhando.value!==""){
	// 	document.querySelector(".a32").innerText="";
	// 	return true;
	// }
	// }, false );

	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinmonitor.value!==""){
	// 	document.querySelector(".a33").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohinsan.value!==""){
	// 	document.querySelector(".a34").innerText="";
	// 	return true;
	// }
	// }, false );


	// wpcf7Elm.addEventListener( 'change', function( event ) {
	// if(sohintaiya.value!==""){
	// 	document.querySelector(".a35").innerText="";
	// 	return true;
	// }
	// }, false );





</script>


<!-- <script type="text/javascript">
 
 
		 add_filter( 'wpcf7_validate_text*', 'cf7_custom_username_required_validation_message', 1, 2 );
 
		 function cf7_custom_username_required_validation_message( $result, $tag ) {
			 $name = $tag->your-name;
 
			 $value = isset( $_POST[$name] ) ? trim( wp_unslash( (string) $_POST[$name] ) ) : '';
 
			 if ( $tag->is_required() && empty( $value ) ) {
				 if ( preg_match( "/^\*\s(.+)/i", $tag->labels[0], $label_text ) ) {
					 $result['valid'] = false;
					 $result['reason'] = array( $name => sprintf( __( "%s is required!", 'text-domain' ), $label_text[1] ) );
				 }
			 }
 
			 return $result;
		 }
 
 </script> -->
<?php get_footer('form'); ?>