<?php

/**
 * Template Name: Page Form
 *
 */

get_header('form'); ?>

<div class="form-page-custom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-detail-cus">
					<h2>お<span style="color:#ff5c00">客様</span>の情報を<br class="sp-block">教えてください</h2>
					<div class="form-ct-dt form1">
						<?php echo do_shortcode('[contact-form-7 id="006e78b" title="フォーム1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<style type="text/css">

</style>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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

	
	
    jQuery(function ($) {

        // 検索データ受信時の処理
        function zipDataReceive(response, data) {
            response($.map(data, function (item) {
                // 住所
                var address = item.pref + item.town + item.block;
                // ラベル
                var label = item.zip_code + ' : ' + address;
                if (item.biz_name) {
                    label += ' (' + item.biz_name + ')';
                } else if (item.street) {
                    label += ' (' + item.street + ')';
                }
                return {
                    label: label,
                    zip_code: item.zip_code,
                    address: address,
                    address2: item.biz == 1 ? item.street : '',
                    address_memo: item.biz == 1 ? '' : item.street,
                    biz_name: item.biz_name,
                    town_code: item.town_code
                }
            }));
        }

        // フォームの項目を更新
        function zipDataUpdate(ui) {
            $('#zipcode').val(ui.item.zip_code);
            $('#address').val(ui.item.address);
            $('#address2').val(ui.item.address2);
            $('#address_memo').html(ui.item.address_memo);
            $('#biz_name').val(ui.item.biz_name);
            $('#town_code').val(ui.item.town_code);
        }

        // 郵便番号の入力フィールドに Autocomplete を適用
       $('#zipcode').autocomplete({
            delay: 0,
            minLength: 3,
            source: function (request, response) {
                $.ajax({
                    url: 'https://tools.softark.net/zipdata/api/search',
                    dataType: 'jsonp',
                    data: {
                        mode: 0,
                        term: request.term,
                        max_rows:20,
                        biz_mode: 2,
                        sort: 0
                    },
                    success: function (data) {
                        zipDataReceive(response, data);
                    }
                });
            },
            select: function (event, ui) {
                zipDataUpdate(ui);
                return false;
            }
        });

        // 住所の入力フィールドに Autocomplete を適用
       $('#address').autocomplete({
            delay: 0,
            minLength: 2,
            source: function (request, response) {
                $.ajax({
                    url: 'https://tools.softark.net/zipdata/api/search',
                    dataType: 'jsonp',
                    data: {
                        mode: 1,
                        term: request.term,
                        max_rows: 20,
                        biz_mode: 2,
                        sort: 1
                    },
                    success: function (data) {
                        zipDataReceive(response, data);
                    }
                });
            },
            select: function (event, ui) {
                zipDataUpdate(ui);
                return false;
            }
        });


    });

	

</script>


<?php get_footer('form'); ?>