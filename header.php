<?php
/**
 * Header file
 *
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4G4L8J');</script>
<!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HRRJ2JE75B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HRRJ2JE75B');
</script>
	
	<?php 
$url = $_SERVER['REQUEST_URI'];
// strstr(検索対象,検索する文字列)
if(strstr($url,'author')): ?>
    <meta name="robots" content="noindex,nofollow"/>
<?php else: ?>
<?php endif; ?>
	<?php 
$url = $_SERVER['REQUEST_URI'];
// strstr(検索対象,検索する文字列)
if(strstr($url,'form-2')): ?>
    <meta name="robots" content="noindex,nofollow"/>
<?php else: ?>
<?php endif; ?>
    
<?php if ( is_home() || is_front_page() ) : ?>
<title>CTN車一括査定｜中古車 事故車 廃車 旧車 輸入車の売却には高価買取一括査定</title>
<meta content="CTN一括査定では全国1,000店舗以上から最高値店舗3社のみをご紹介！電話ラッシュや何十社とのやり取り不要で効率良く高価売却が実現いたします。" name="description">
<?php elseif( is_page( "column" )) : ?>
<title>クルマのあれこれ｜CTN車一括査定</title>
<meta content="中古車やバイクの売却に関するお役立ち情報を配信。自動車業界15年以上の知見を基にCTNならではの見解で情報提供しております。" name="description">
<?php elseif( is_page( "thanks" )) : ?>
<title>問い合わせ頂きありがとうございます｜CTN車一括査定</title>
<?php elseif( is_archive()) : ?>
<title><?php echo the_archive_title(); ?>｜CTN車一括査定</title>
    <meta content="<?php echo the_archive_title(); ?>情報。CTN一括査定では全国1,000店舗以上から最高値店舗2社のみをご紹介！電話ラッシュや何十社とのやり取り不要で効率良く高価売却が実現いたします。" name="description">
    <?php elseif(strstr($url,'maker')): ?>
    <title>メーカーから中古車買取相場、リセールバリューを探す｜CTN車一括査定</title>
<?php elseif( is_singular('maker')) : ?>
  <title><?php echo get_the_title(); ?>車の買取相場 リセールバリューランキング｜CTN車一括査定</title>    
<?php elseif( is_singular()) : ?>
  <title><?php echo get_the_title(); ?>｜CTN車一括査定</title>
  <meta content="<?php the_excerpt(); ?>" name="description">    
  
<?php 
	$url = $_SERVER['REQUEST_URI'];

  
	elseif(strstr($url,'author')): ?>
  <title><?php echo get_the_title(); ?>｜CTN車一括査定</title>

      <?php else : ?>
    <?php endif; ?>

    <?php if ( is_page( "thanks" )): ?>

      <meta name="robots" content="noindex">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11181358613"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11181358613');
</script>

<?php else : ?>
    <?php endif; ?>
<!-- <script src="https://h.accesstrade.net/js/nct/lp.min.js"></script>
  <meta content="" name="keywords"> -->

  <?php if(is_404()): ?>
    <meta name="robots" content="noindex,nofollow"/>
  <?php endif; ?>

  <script src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://ctn-net.jp/kaitori/car/wp-content//themes/ctnkaitori/css/styles.css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<?php if( is_singular('maker')) : ?>
<link href="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/css/style.css" rel="stylesheet">
<?php else : ?>
    <?php endif; ?>
    <!-- font-awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> -->
    <!--Google font 　　 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa+One&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif+Tamil:wght@800&display=swap" rel="stylesheet">
<?php if( is_archive( )) : ?>
  <link rel="canonical" href="<?php echo'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" />
  <?php elseif( is_page('thanks')) : ?>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-831347582"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-831347582');
</script>

	
	
      <?php else : ?>
    <?php endif; ?>
	
	
    	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5H75N4G');</script>
	<!-- End Google Tag Manager -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112247635-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112247635-1');
	</script>
    

  <?php if ( is_home() || is_front_page() ) : ?>
    <!-- <script>(function(){var l=location.search.slice(1).split("&");for(var i=0;l[i];i++){var v=l[i].split("=",2);if(v[0]=="_NQINPX"){var p=v[1].split("_",2);if(p[0]&&p[1]){var t=Date.now();document.cookie="NQINPX_"+p[0]+"="+decodeURIComponent(p[1]+"T"+t)+"; expires="+new Date(t+86400000).toUTCString()+"; path=/;";}}}})();</script> -->
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11181358613"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11181358613');
</script>

    <?php else : ?>
    <?php endif; ?>


  <!-- Favicons -->
  <link href="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/favicon.ico" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body>

	

  </section><!-- End Top Bar -->
  <header>
        <div class="header_inner">
        <a href="https://ctn-net.jp/kaitori/car/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/logo.svg" class="sp-non"></a>
        <a href="https://ctn-net.jp/kaitori/car/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/logo.png" class="sp-b" style="max-height:38px"></a>
            <div class="header-texts">
            <p>CTN車一括査定では中古車・廃車 ・事故車を高価買取 </p>
            <p><span>1,000店舗以上</span>から厳選</p>
            </div>
            <div class="header-btn-area">
            <a href="https://ctn-net.jp/kaitori/car/#form"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/botan1.svg" class="sp-non" style="margin-top:2px"></a>
            <a href="https://ctn-net.jp/kaitori/car/contact/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/botan2.svg" class="sp-non"></a>
            <a href="https://ctn-net.jp/kaitori/car/#form-sp" class="sp-top-btn orange sp-b">無料審査依頼</a>
            <a href="https://ctn-net.jp/kaitori/car/contact/" class="sp-top-btn c-green sp-b">買取店様はこちら</a>
            </div>  
        </div>  
  
    <div class="header_menu">
        <div class="inner">
            <ul>
               <li> <a href="https://ctn-net.jp/kaitori/car/#strong">CTN車一括査定の強み</a></li>
                <li><a href="https://ctn-net.jp/kaitori/car/#line-top">他社との違い</a></li>
                <li><a href="https://ctn-net.jp/kaitori/car/#line-top-2">一括査定の流れ</a></li>
                <li><a href="https://ctn-net.jp/kaitori/car/column">コラム</a></li>
            </ul>
        </div>
    </div>
    
    <div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>
<nav class="globalMenuSp">
    <ul>
        <li><a href="https://ctn-net.jp/kaitori/car/#">TOP</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/#form-sp">一括査定依頼</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/#strong">CTN一括査定の強み</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/#line-top">他社との違い</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/#line-top-2">一括査定の流れ</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/column">コラム</a></li>
        <li><a href="https://ctn-net.jp/kaitori/car/#faq">よくある質問</a></li>
    </ul>
</nav>
</header>
  <!-- End Header -->