<?php 
/**
 * Template Name: Thanks Page
 * Template Post Type: post, page
 *
 */
get_header() ?>
<script>
	const param = location.search

if(param ===""){
  console.log("空じゃないよ")
}else{
  console.log("空だよ")
}
</script>
<section class="thanks-content">
	<div class="container thanks-container-custom">
		<div class="thanks-detail">
			<div class="thank-ct">
				<h3>この度はお問い合わせ頂きありがとうございます。</h3>
				<p>ご記入して頂いた情報は無事に送信されました。数日以内に担当者よりご連絡致します。</p>
				<a href="https://ctn-net.jp/kaitori/car/">トップページへ戻る</a>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	section.thanks-content {
	    height: 85vh;
	    display: table;
	    width: 100%;
	}
	.thanks-container-custom {
	    display: table-cell;
	    width: 100%;
	    height: 100%;
	    vertical-align: middle;
	}
	.thanks-detail h3 {
	    font-size: 34px;
	    color: #ff5c00;
	}
	.thanks-detail a {
	    background-color: #ff5c00;
	    color: #fff;
	    padding: 10px 25px;
	    transition: 0.3s;
	}
	.thanks-detail p {
	    margin-bottom: 40px;
	}
	.thanks-detail a:hover {
	    background-color: #5f5f5f;
	    padding: 10px 35px;
	}
	.thanks-detail{
		text-align: center;
		vertical-align: middle;
	}
	@media (max-width: 468px){
		.thanks-detail h3{
			font-size: 28px!important;
		}
	}
</style>
<?php get_footer(); ?>