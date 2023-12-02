<?php
/**
 * Header file
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>

    
	<?php if ( is_home() || is_front_page() ) : ?>
    <title>査定依頼フォーム｜CTN車一括査定</title>
  <?php elseif( is_page( "column" )) : ?>
    <title>クルマのあれこれ｜CTN車一括査定</title>
    <?php elseif( is_archive()) : ?>
    <title><?php echo the_archive_title(); ?>｜CTN車一括査定</title>
  <?php elseif( is_page("form")) : ?>
    <title>査定依頼フォーム｜CTN車一括査定</title>
  <?php elseif( is_singular()) : ?>
    <title><?php echo get_the_title(); ?>｜CTN車一括査定</title>
  <?php else : ?>
  <?php endif; ?>

    <?php if ( is_page( "thanks" )): ?>
      <meta name="robots" content="noindex">
<?php else : ?>
    <?php endif; ?>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php if(is_404()): ?>
    <meta name="robots" content="noindex,nofollow"/>
  <?php endif; ?>

  <?php if(is_page( "form" )) : ?>
    <meta name="robots" content="noindex,nofollow"/>
    <?php elseif(is_page( "form2" )) : ?>
    <meta name="robots" content="noindex,nofollow"/>
    <?php elseif(is_page( "form3" )) : ?>
    <meta name="robots" content="noindex,nofollow"/>
    <?php elseif(is_page( "form4" )) : ?>
    <meta name="robots" content="noindex,nofollow"/>
  <?php endif; ?>


  <script src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/ctnkaitori/assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/ctnkaitori/css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/JavaScript">
$(document).ready(function(){
    jQuery('#zip').keyup(function(event){
        AjaxZip3.zip2addr('form_zip','','form_pref','form_address');
        return false;
    })
})
</script>

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

<!-- Event snippet for CTN一括査定 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-831347582/vOyZCPTBpMYYEP62tYwD'});
</script>

<?php
    $url = '';
    if(isset($_SERVER['HTTPS'])){
        $url .= 'https://';
    }else{
        $url .= 'http://';
    }
    $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    

    $parameter = parse_url($url,  PHP_URL_QUERY);
    $parameter_2 = substr($parameter, 4, 12);
?>
 <script>(function(){var aid="<'<?php echo $parameter_2 ?>'>",value="";var pid="14098_14108_14109",mode="";var s=document.cookie.split(";");var l=pid.split("_");var t=0,p,c;for(var i=0;i<s.length;i++){var x=s[i].split("=",2);var k=x[0].trim();var v=x[1].trim().split("T",2);for(var j=0;j<l.length;j++){if(k=="NQINPX_"+l[j]&&v[0]&&+v[1]>t){p=l[j];c=v[0];t=+v[1];}}}var u=t?"https://advack.net/m2/img.php?pcode="+p+"&cid="+encodeURIComponent(c):"https://advack.net/m/img.php?pcode="+pid;var g=document.createElement("img");g.width=1;g.height=1;g.src=u+"&md="+mode+"&aid="+encodeURIComponent(aid)+"&value="+encodeURIComponent(value);document.body.appendChild(g);})();</script>
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
    <script>(function(){var l=location.search.slice(1).split("&");for(var i=0;l[i];i++){var v=l[i].split("=",2);if(v[0]=="_NQINPX"){var p=v[1].split("_",2);if(p[0]&&p[1]){var t=Date.now();document.cookie="NQINPX_"+p[0]+"="+decodeURIComponent(p[1]+"T"+t)+"; expires="+new Date(t+86400000).toUTCString()+"; path=/;";}}}})();</script>
    
    <?php else : ?>
    <?php endif; ?>

<style>
  .header {
    box-shadow: 0 2px 2px 2px #ddd;
}
</style>

  <!-- Favicons -->
  <link href="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/favicon.ico" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body>

  </section><!-- End Top Bar -->
  <header>
        <div class="header_inner">
        <a href="https://ctn-net.jp/kaitori/car"><img src="../wp-content/themes/ctnkaitori/img/logo.svg" class="sp-non"></a>
        <a href="https://ctn-net.jp/kaitori/car"><img src="../wp-content/themes/ctnkaitori/img/logo.png" class="sp-b" style="max-height:38px"></a>
            <div class="header-texts">
            <p>CTN車一括査定では中古車・廃車 ・事故車を高価買取 </p>
            <p><span>1,000店舗以上</span>から厳選</p>
            </div>
            <div class="header-btn-area">
            <a href="#form"><img src="../wp-content/themes/ctnkaitori/img/botan1.svg" class="sp-non" style="margin-top:2px"></a>
            <a href="https://ctn-net.jp/kaitori/car/contact/"><img src="../wp-content/themes/ctnkaitori/img/botan2.svg" class="sp-non"></a>
            <a href="#form-sp" class="sp-top-btn orange sp-b">無料査定依頼</a>
            <a href="https://ctn-net.jp/kaitori/car/contact/" class="sp-top-btn c-green sp-b">買取店様はこちら</a>
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