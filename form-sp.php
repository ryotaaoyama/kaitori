<?php

/**
 * Template Name: Page Form 2
 *
 */

get_header('form'); ?>

<div class="form-page-custom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-detail-cus">
					<div class="form-tt-cus">
						<h2>お客様入力欄</h2>
					</div>
					<div class="form-ct-dt">
						<?php echo do_shortcode('[contact-form-7 id="2075" title="Check Form SP"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<style type="text/css">

</style>


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




$(document).on('wpcf7submit', function()  {
  let email_judge = document.querySelector('[name="your-email"]').value;
  if (!email_judge.match(/.+@.+\..+/)) {
    alert("メールアドレスを正しく入力してください");
  }
  });
	
		
$('.wpcf7 input[type="submit"]').on('click', function (e){
 let zip_judge = document.querySelector('[name="form_zip"]').value;
	if (!String(zip_judge).startsWith(6)&&!String(zip_judge).startsWith(5)&&!String(zip_judge).startsWith(4)){
		e.preventDefault();
             alert("申し訳ございません。ご入力頂いた住所は現在一時停止中になります。");
  }
  	});
	$(zip).on('change', function (e){
 let zip_judge = document.querySelector('[name="form_zip"]').value;
	if (!String(zip_judge).startsWith(6)&&!String(zip_judge).startsWith(5)&&!String(zip_judge).startsWith(4)){
		e.preventDefault();
             alert("申し訳ございません。ご入力頂いた住所は現在一時停止中になります。");
  }
  	});
  

	// name
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (name.value === "") {
			document.querySelector(".a1").innerText = "※氏名を入力してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a1").innerText = "";
			return true;
		}
	}, false);

	// Email
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (email.value === "") {
			document.querySelector(".a2").innerText = "※メールアドレスを正しく入力してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a2").innerText = "";
			return true;
		}

	}, false);

	//郵便番号
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (zip.value === "") {
			document.querySelector(".a3").innerText = "※郵便番号を正しく入力してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a3").innerText = "";
			return true;
		}

	}, false);

	//都道府県
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (ken.value === "") {
			document.querySelector(".a4").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else {
			document.querySelector(".a4").innerText = "";
			return true;
		}
	}, false);

	//市区町村
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (shi.value === "") {
			document.querySelector(".a5").innerText = "※市区町村を正しく入力してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a5").innerText = "";
			return true;
		}

	}, false);



	//番地
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (banchi.value === "") {
			document.querySelector(".a6").innerText = "※番地を正しく入力してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a6").innerText = "";
			return true;
		}

	}, false);

	//車検日

	// Kích hoạt một sự kiện khi nhấn nút gửi
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		//Thêm số vào i cho số nút radio
		for (let i = 0; i < shaken.length; i++) {
		
			//Xuất cảnh báo nếu tất cả các nút radio không được chọn
			if (shaken[0].checked === false&&shaken[1].checked === false&&shaken[2].checked === false) {
			document.querySelector(".a7").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} 
		//Không có cảnh báo nếu bất kỳ nút radio nào được chọn
		else if(shaken[0].checked === true||shaken[1].checked === true||shaken[2].checked === true){
			document.querySelector(".a7").innerText = "";
			return true;
		}
	}}, false);

	//車両状態
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shada.length; i++) {

			if (shada[0].checked === false&&shada[1].checked === false) {
			document.querySelector(".a8").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(shada[0].checked === true||shada[1].checked === true){
			document.querySelector(".a8").innerText = "";
			return true;
		}
	}}, false);

	//自走可否
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shakm.length; i++) {

			if (shakm[0].checked === false&&shakm[1].checked === false){
			document.querySelector(".a9").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(shakm[0].checked === true||shakm[1].checked === true){
			document.querySelector(".a9").innerText = "";
			return true;
		}
	}}, false);


	//駆動
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shawd.length; i++){

		if (shawd[0].checked === false&&shawd[1].checked === false) {
			document.querySelector(".a10").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if(shawd[0].checked === true||shawd[1].checked === true) {
			document.querySelector(".a10").innerText = "";
			return true;
		}
	}}, false);

	//燃料 (mda)
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shane.length; i++){

			if (shane[0].checked === false&&shane[1].checked === false&&shane[2].checked === false&&shane[3].checked === false&&shane[4].checked === false) {
			document.querySelector(".a11").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if (shane[0].checked === true||shane[1].checked === true||shane[2].checked === true||shane[3].checked === true||shane[4].checked === true) {
			document.querySelector(".a11").innerText = "";
			return true;
		}
	}}, false);

	//シフト
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shaxe.length; i++){

		if (shaxe[0].checked === false&&shaxe[1].checked === false&&shaxe[2].checked === false) {
			document.querySelector(".a12").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if(shaxe[0].checked === true||shaxe[1].checked === true||shaxe[2].checked === true) {
			document.querySelector(".a12").innerText = "";
			return true;
		}
	}}, false);

	//排気量
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (xilanh.value === "") {
			document.querySelector(".a13").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a13").innerText = "";
			return true;
		}
	}, false);

	//ボディーカラー
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (bodykit.value === "") {
			document.querySelector(".a14").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a14").innerText = "";
			return true;
		}
	}, false);

	// グレード
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (nhan.value === "") {
			document.querySelector(".a15").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a15").innerText = "";
			return true;
		}
	}, false);

	//売却希望時期
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (timebuy.value === "") {
			document.querySelector(".a16").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else {
			document.querySelector(".a16").innerText = "";
			return true;
		}
	}, false);

	//ローン残債
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {
		if (zansai.value === "") {
			document.querySelector(".a17").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a17").innerText = "";
			return true;
		}
	}, false);

	//事故歴・修復歴
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shasua.length; i++){

			if (shasua[0].checked === false&&shasua[1].checked === false&&shasua[2].checked === false) {
			document.querySelector(".a18").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shasua[0].checked === true||shasua[1].checked === true||shasua[2].checked === true) {
			document.querySelector(".a18").innerText = "";
			return true;
		}
	}}, false);

	//全体状況
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shazen.length; i++) {

		if (shazen[0].checked === false&&shazen[1].checked === false&&shazen[2].checked === false&&shazen[3].checked === false&&shazen[4].checked === false) {
			document.querySelector(".a19").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shazen[0].checked === true||shazen[1].checked === true||shazen[2].checked === true||shazen[3].checked === true||shazen[4].checked === true ) {
			document.querySelector(".a19").innerText = "";
			return true;
		}
	}}, false);

	//傷
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shapa.length; i++){

			if (shapa[0].checked === false&&shapa[1].checked === false) {
			document.querySelector(".a20").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shapa[0].checked === true||shapa[1].checked === true) {
			document.querySelector(".a20").innerText = "";
			return true;
		}
	}}, false);

	//へこみ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shahe.length; i++) {

			if (shahe[0].checked === false&&shahe[1].checked === false) {
			document.querySelector(".a21").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shahe[0].checked === true||shahe[1].checked === true) {
			document.querySelector(".a21").innerText = "";
			return true;
		}
	}}, false);

	//塗装はげ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shage.length; i++) {

			if (shage[0].checked === false&&shage[1].checked === false) {
			document.querySelector(".a22").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shage[0].checked === true||shage[1].checked === true) {
			document.querySelector(".a22").innerText = "";
			return true;
		}
	}}, false);

	//さび
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < shapi.length; i++) {

			if (shapi[0].checked === false&&shapi[1].checked === false) {
			document.querySelector(".a23").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;
		} else if(shapi[0].checked === true||shapi[1].checked === true) {
			document.querySelector(".a23").innerText = "";
			return true;
		}
	}}, false);

	//全体状況
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < naika.length; i++) {

			if (naika[0].checked === false&&naika[1].checked === false&&naika[2].checked === false&&naika[3].checked === false&&naika[4].checked === false) {
			document.querySelector(".a24").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(naika[0].checked === true||naika[1].checked === true||naika[2].checked === true||naika[3].checked === true||naika[4].checked === true) {
			document.querySelector(".a24").innerText = "";
			return true;
		}
	}}, false);

	//汚れ/シミ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < nairua.length; i++){

			if (nairua[0].checked === false&&nairua[1].checked === false) {
			document.querySelector(".a25").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";

			return false;

		} else if(nairua[0].checked === true||nairua[1].checked === true) {
			document.querySelector(".a25").innerText = "";
			return true;
		}
	}}, false);

	//シート破れ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < naishito.length; i++) {

			if (naishito[0].checked === false&&naishito[1].checked === false) {
			document.querySelector(".a26").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(naishito[0].checked === true||naishito[1].checked === true) {
			document.querySelector(".a26").innerText = "";
			return true;
		}
	}}, false);

	//エアコン
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < naieacon.length; i++) {

			if (naieacon[0].checked === false&&naieacon[1].checked === false) {
			document.querySelector(".a27").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(naieacon[0].checked === true||naieacon[1].checked === true) {
			document.querySelector(".a27").innerText = "";
			return true;
		}
	}}, false);

	//禁煙
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < naitabaco.length; i++) {

			if (naitabaco[0].checked === false&&naitabaco[1].checked === false) {
			document.querySelector(".a28").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(naitabaco[0].checked === true||naitabaco[1].checked === true) {
			document.querySelector(".a28").innerText = "";
			return true;
		}
	}}, false);

	//ナビ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinnabi.length; i++) {

			if (sohinnabi[0].checked === false&&sohinnabi[1].checked === false&&sohinnabi[2].checked === false) {
			document.querySelector(".a29").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(sohinnabi[0].checked === true||sohinnabi[1].checked === true||sohinnabi[2].checked === true) {
			document.querySelector(".a29").innerText = "";
			return true;
		}
	}}, false);


	//電動スライド
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinden.length; i++) {

			if (sohinden[0].checked === false&&sohinden[1].checked === false&&sohinden[2].checked === false) {
			document.querySelector(".a30").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if(sohinden[0].checked === true||sohinden[1].checked === true||sohinden[2].checked === true) {
			document.querySelector(".a30").innerText = "";
			return true;
		}
	}}, false);


	//革シート
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinshito.length; i++) {	

			if (sohinshito[0].checked === false&&sohinshito[1].checked === false) {
			document.querySelector(".a31").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(sohinshito[0].checked === true||sohinshito[1].checked === true) {
			document.querySelector(".a31").innerText = "";
			return true;
		}
	}}, false);


	//ハンドル
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinhando.length; i++) {

			if (sohinhando[0].checked === false&&sohinhando[1].checked === false) {
			document.querySelector(".a32").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(sohinhando[0].checked === true||sohinhando[1].checked === true) {
			document.querySelector(".a32").innerText = "";
			return true;
		}
	}}, false);


	//バックモニター
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinmonitor.length; i++) {	

			if (sohinmonitor[0].checked === false&&sohinmonitor[1].checked === false) {
			document.querySelector(".a33").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;

		} else if(sohinmonitor[0].checked === true||sohinmonitor[1].checked === true) {
			document.querySelector(".a33").innerText = "";
			return true;
		}
	}}, false);


	//サンルーフ
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohinsan.length; i++) {

			if (sohinsan[0].checked === false&&sohinsan[1].checked === false) {
			document.querySelector(".a34").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if(sohinsan[0].checked === true||sohinsan[1].checked === true) {
			document.querySelector(".a34").innerText = "";
			return true;
		}
	}}, false);


	//タイヤホイール
	wpcf7Elm.addEventListener('wpcf7submit', function(event) {

		for (let i = 0; i < sohintaiya.length; i++) {

			if (sohintaiya[0].checked === false&&sohintaiya[1].checked === false) {
			document.querySelector(".a35").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else if(sohintaiya[0].checked === true||sohintaiya[1].checked === true) {
			document.querySelector(".a35").innerText = "";
			return true;
		}
	}}, false);


	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (datetime81.value === "") {
			document.querySelector(".a36").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a36").innerText = "";
			return true;
		}
	}, false);

	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (datetime82.value === "") {
			document.querySelector(".a37").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a37").innerText = "";
			return true;
		}
	}, false);


	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (datetime83.value === "") {
			document.querySelector(".a38").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a38").innerText = "";
			return true;
		}
	}, false);



	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (time50.value === "") {
			document.querySelector(".a39").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a39").innerText = "";
			return true;
		}
	}, false);

	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (time51.value === "") {
			document.querySelector(".a40").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a40").innerText = "";
			return true;
		}
	}, false);


	//Date Time
	document.addEventListener('wpcf7submit', function(event) {
		if (time52.value === "") {
			document.querySelector(".a41").innerText = "※選択してください";
			document.querySelector(".allalert").innerText = "※入力内容をご確認ください";
			return false;
		} else {
			document.querySelector(".a41").innerText = "";
			return true;
		}
	}, false);



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