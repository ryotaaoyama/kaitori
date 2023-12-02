<?php
/**
 * The template for displaying the footer
 *
 */
?>
  <!-- <footer id="footer" class="footer"> -->
<!-- 
    <div class="container">
      <div class="row">
        <div class="col-lg-12 footer-detail">
          <div class="footer-one-ct">
            <h5>クルマ・バイク関連サービス</h5>
            <ul>
              <li><a href="#">車買取・中古車査定</a></li>
              <li><a href="#">車買取・査定相場シミュレーション</a></li>
              <li><a href="#">車買取業者の評判ランキング</a></li>
              <li><a href="#">車買取・廃車に関する記事</a></li>
              <li><a href="#">お役立ち記事</a></li>
              <li><a href="#">ラジオ局一覧</a></li>
              <li><a href="#">サイトマップ</a></li>
            </ul>
          </div>
          <div class="footer-two-ct">
            <div class="logo-foo">
              <img src="/kaitori/wp-content/themes/ctnkaitori/assets/img/home/logo-top.png">
            </div>
            <div class="menu-foo">
              <ul>
                <li><a href="">会社概要</a></li>
                <li><a href="">利用規約</a></li>
                <li><a href="">個人情報保護方針</a></li>
                <li><a href="">個人情報の取扱いについて</a></li>
                <li><a href="">リンクについて</a></li>
                <li><a href="">質問はコチラ</a></li>
                <li><a href="">ヘルプ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <?php if ( is_page( "form" ) || is_page( "form2" ) || is_page( "form3" ) || is_page( "form4" ) || is_page( "thanks" )) : ?>
<?php else : ?>
  <div id="sp-fixed-menu" class="for-sp">
  <ul>
    <li>
      <a href="https://ctn-net.jp/kaitori/car/#form-sp">
        <p class="bt-menu-custom-o">簡単<span class="number-bt-cus">55秒</span>査定依頼<span class="text-bt-mn-cus">『高価買店上位3社のみ』</span></p>
        <p class="bt-menu-custom-t"><span class="text-bt-mn-cus-t">無料</span>今すぐカンタン査定依頼</p>
        <!-- <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/footer_btn.png"> -->
      </a>
    </li>
  </ul>
</div>
	<?php endif; ?>

    <div class="copy">
      <div class="footer-link">
        <a href="https://ctn-net.jp/kaitori/car/privacypolicy/" target="_blank">プライバシーポリシー<span class="footer-rod">|</span></a>
        <a href="https://ctn-net.jp/kaitori/car/terms/" target="_blank">利用規約<span class="footer-rod">|</span></a>
        <a href="https://ctn-net.jp/kaitori/car/anti_society/" target="_blank">反社会的勢力に対する基本方針<span class="footer-rod">|</span></a>
        <a href="https://ctn-net.jp/" target="_blank">運営会社<span class="footer-rod">|</span></a><a href="https://ctn-net.jp/kaitori/car/contact/" target="_blank">買取店様はこちら<span class="footer-rod">|</span></a>
        <a href="https://ctn-net.jp/kaitori/car/media/" target="_blank">掲載メディア</a>
      </div>
      <div class="copyright">
        Copyright <strong><span>© 2023 CTN Co., Ltd.</span></strong>. All Rights Reserved
      </div>
    </div>

  <!-- </footer> -->
  <!-- End Footer -->
  <!-- End Footer -->
  <!-- <div class="copyright">
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </div> -->
  

  <div id="preloader"></div>

  <?php wp_footer(); ?>




<!-- <script>
  $('#meka').change(function(event) {
    var id = $(this).val();
    var data = $('#'+id).html();
    $('select#brand').html(data);
  });
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
jQuery(document).ready(function() {
  jQuery('.slider').slick({
    autoplay:true,
  slidesToShow:1,
  infinite:true,
  slidesToScroll:1,
  dots: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [
      {
        breakpoint: 992, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint:767, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  
  });
});
</script>
<script>
	jQuery(function ($) {
  // Contact Form 7
  var wpcf7El = document.querySelector(".wpcf7")

  // エラーが発生した時
  wpcf7El.addEventListener("wpcf7invalid", function() {
    var speed =1; // スクロール速度
    var headerHeight = $(".header").innerHeight(); // ヘッダーの高さを取得
    setTimeout(function () {
      var firstErrorEl = $(".wpcf7-not-valid:first"); // エラーが発生した1番目の要素を取得
      var scrollAmount = firstErrorEl.offset().top - headerHeight; // 要素までのスクロール距離を取得
      $("html, body").animate({ scrollTop: scrollAmount }, speed, "swing"); // 該当箇所までスクロール
    }, 500);
  },false );
});
</script>
<script>
jQuery(document).ready(function() {
  jQuery('.slider2').slick({
    autoplay:true,
  slidesToShow:2,
  infinite:true,
  arrows: false,
  slidesToScroll:1,
  responsive: [
      {
        breakpoint: 992, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint:767, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  
  });
});


</script>
<script>
jQuery(document).ready(function() {
  jQuery('.slider3').slick({
    autoplay:true,
  slidesToShow:2,
  infinite:true,
  arrows: true,
  slidesToScroll:1,
  dots: true,
  responsive: [
      {
        breakpoint: 992, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint:767, // 992px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots:true,
        },
      },
    ],
  
  });
});
</script>
<script>
	let pops = document.querySelector(".popup");
	let bodyElement = document.body;
	
	if(pops.style.display=="block"){
		console.log("あああい！");
		forSp.style.block="none";
		bodyElement.style.overflow="hidden";
	}else{

	}
	
</script>

<!-- <script type="text/javascript">
( function( $ ) {
  $(document).ready(function() {
     
        var provinceOptions = '';
        var url = '/kaitori/car/wp-content/themes/ctnkaitori'; 
        $.getJSON(url+'/resource-parts/meka.json', function(data){
            provinceOptions += '<option value="">メーカーの選択</option>';
            $.each(data, function(key, province){
              provinceOptions += '<option matt="'+province.matt+'" value="'+province.name+'">'+province.name+'</option>';
            });
            $('#input_1_7').html(provinceOptions);
        });
        $(document).on('change', '#input_1_7', function(){
            var districtOptions = '';
            //var province_id = $(this).val();
            var province_id = $(this).find('option:selected').attr("matt");
            if(province_id != '') {
                $.getJSON(url+'/resource-parts/name/'+province_id+'.json', function(data){
                    districtOptions = '<option value="">選択してください</option>';
                    $.each(data, function(key, district){
                        districtOptions += '<option maqh="'+district.maqh+'" value="'+district.name+'">'+district.name+'</option>';
                    });
                    $('#input_1_8').html(districtOptions);
                });
                $('#input_1_9').html('<option value=""></option>');
            } else {
                $('#input_1_8').html('<option value=""></option>');
                $('#input_1_9').html('<option value=""></option>');
            }
        });
        
  });
} )( jQuery )
</script>


<script type="text/javascript">
( function( $ ) {
  $(document).ready(function() {
     
        var provinceOptions = '';
        var url = '/kaitori/car/wp-content/themes/ctnkaitori'; 
        $.getJSON(url+'/resource-parts/meka.json', function(data){
            provinceOptions += '<option value="">メーカーの選択</option>';
            $.each(data, function(key, province){
              provinceOptions += '<option matt="'+province.matt+'" value="'+province.name+'">'+province.name+'</option>';
            });
            $('#input_1_17').html(provinceOptions);
        });
        $(document).on('change', '#input_1_17', function(){
            var districtOptions = '';
            //var province_id = $(this).val();
            var province_id = $(this).find('option:selected').attr("matt");
            if(province_id != '') {
                $.getJSON(url+'/resource-parts/name/'+province_id+'.json', function(data){
                    districtOptions = '<option value="">選択してください</option>';
                    $.each(data, function(key, district){
                        districtOptions += '<option maqh="'+district.maqh+'" value="'+district.name+'">'+district.name+'</option>';
                    });
                    $('#input_1_18').html(districtOptions);
                });
                $('#input_1_19').html('<option value=""></option>');
            } else {
                $('#input_1_18').html('<option value=""></option>');
                $('#input_1_19').html('<option value=""></option>');
            }
        });
        
  });
} )( jQuery )
</script> -->


<script>

   $(window).on("scroll", function() {
    if ($(this).scrollTop() >1000) {
      $(".for-sp").fadeIn("fast");
    } else {
      $(".for-sp").fadeOut("fast");
    }
 
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $("footer").innerHeight();
 
    if ( scrollHeight - scrollPosition  <= footHeight ) {
      $(".for-sp").css({
        "position":"absolute",
      });
    } else {
      $(".for-sp").css({
        "position":"fixed",
      });
    }
  });
 
</script>

<script>
  $(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        } 
      
    });
});
//メニュー内を閉じておく
$(function() {
    $('.globalMenuSp a[href]').click(function() {
        $('.globalMenuSp').removeClass('active');
       $('.hamburger').removeClass('active');

    });
  });
</script>

<?php if ( is_home() || is_front_page() ) : ?>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "株式会社 CTN",
    "url": "https://www.ctn-net.jp/",
    "logo": "https://www.ctn-net.jp/common/images/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+81-72-800-7106",
      "faxNumber": "+81-72-800-7107",
      "contactType": "customer support",
      "areaServed": "JP",
      "availableLanguage": "Japanese"
      },
    "location": {
      "@type": "Place",
      "@id": "https://www.ctn-net.jp/",
      "name": "株式会社 CTN",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "JP",
        "postalCode": "572-0086",
        "addressRegion": "大阪府",
        "addressLocality": "寝屋川市",
        "streetAddress": "松屋町18-9　Casa Advance 4F"
        }
      }
  }
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
      "@type": "Question",
      "name": " 売却までの流れは？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。 必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」"
      }
    }, {
      "@type": "Question",
      "name": "売却に必要な書類を教えてください。",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "売却時の必要書類については「普通車」・「軽自動車」で異なります。各種書類については「車の買取時に必要な書類は何？買取金額がアップする書類とは？」"
      }
    }, {
      "@type": "Question",
      "name": "自宅での出張査定や買取をしてもらうことはできるの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CTN一括査定では多くの中古車販売店が出張査定を対応しております。自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。"
      }
    },
    {
      "@type": "Question",
      "name": " ローンの残債が残っていても車でも売却できる？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": " 愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。注意点として、売却価格とローンの残債がどちらが大きいかになります。ローンの残債が多い場合は一度完済する必要があります。詳しくは「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」"
      }
    },
    {
      "@type": "Question",
      "name": "買取は全国対応ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": " CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)"
      }
    },
    {
      "@type": "Question",
      "name": "買取ができない車両などはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": " CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動者など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。"
      }
    }]
	}
  </script>
  <?php elseif( is_page( "column" )) : ?>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "株式会社 CTN",
    "url": "https://www.ctn-net.jp/",
    "logo": "https://www.ctn-net.jp/common/images/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+81-72-800-7106",
      "faxNumber": "+81-72-800-7107",
      "contactType": "customer support",
      "areaServed": "JP",
      "availableLanguage": "Japanese"
      },
    "location": {
      "@type": "Place",
      "@id": "https://www.ctn-net.jp/",
      "name": "株式会社 CTN",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "JP",
        "postalCode": "572-0086",
        "addressRegion": "大阪府",
        "addressLocality": "寝屋川市",
        "streetAddress": "松屋町18-9　Casa Advance 4F"
        }
      }
  }
  <script type="application/ld+json">    
{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {
      "@type": "ListItem",
      "position": 1,
      "item":
      {
        "@id": "https://ctn-net.jp/kaitori/car/",
        "name": "CTN一括査定"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item":
      {
        "@id": "https://ctn-net.jp/kaitori/car/",
        "name": "クルマのあれこれ"
      }
    }    
  ]
}    
</script>

</script>
<?php elseif(is_archive()): ?>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "株式会社 CTN",
    "url": "https://www.ctn-net.jp/",
    "logo": "https://www.ctn-net.jp/common/images/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+81-72-800-7106",
      "faxNumber": "+81-72-800-7107",
      "contactType": "customer support",
      "areaServed": "JP",
      "availableLanguage": "Japanese"
      },
    "location": {
      "@type": "Place",
      "@id": "https://www.ctn-net.jp/",
      "name": "株式会社 CTN",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "JP",
        "postalCode": "572-0086",
        "addressRegion": "大阪府",
        "addressLocality": "寝屋川市",
        "streetAddress": "松屋町18-9　Casa Advance 4F"
        }
      }
  }
</script>
  <script type="application/ld+json">    
        {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
        [
            {
            "@type": "ListItem",
            "position": 1,
            "item":
            {
                "@id": "https://www.ctn-net.jp/",
                "name": "株式会社CTN"
            }
            },
            {
            "@type": "ListItem",
            "position": 2,
            "item":
            {
                "@id": "https://ctn-net.jp/kaitori/car/column",
                "name": "クルマのあれこれ "
            }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item":
                {
                    "@id": "<?php echo'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>",
                    "name": "<?php echo the_archive_title(); ?>"
                }
                }                
        ]
        }    
  
</script>
    
  <?php elseif( is_single() ): ?>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "株式会社 CTN",
    "url": "https://www.ctn-net.jp/",
    "logo": "https://www.ctn-net.jp/common/images/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+81-72-800-7106",
      "faxNumber": "+81-72-800-7107",
      "contactType": "customer support",
      "areaServed": "JP",
      "availableLanguage": "Japanese"
      },
    "location": {
      "@type": "Place",
      "@id": "https://www.ctn-net.jp/",
      "name": "株式会社 CTN",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "JP",
        "postalCode": "572-0086",
        "addressRegion": "大阪府",
        "addressLocality": "寝屋川市",
        "streetAddress": "松屋町18-9　Casa Advance 4F"
        }
      }
  }
</script>
  <?php else : ?>
	<?php endif; ?>

<!-- <script type="text/javascript">
  document.addEventListener( 'wpcf7mailsent', function( event ) {
	  location = 'https://ctn-net.jp/kaitori/car/thanks/?aid=' + localStorage.getItem('responseData');
}, false );
</script>


<script type="text/javascript">
  document.addEventListener( 'wpcf7mailsent', function( event ) {
	  location = 'https://ctn-net.jp/kaitori/car/thanks/?aid=' + localStorage.getItem('responseData');
}, false );
</script> -->

  <script type="text/javascript">
  var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  if(day<10){day='0'+day};
  if(month<10){month='0'+month};
  document.addEventListener( 'wpcf7mailsent', function( event ) {
   if ( '591' == event.detail.contactFormId ) {
      location = 'https://ctn-net.jp/kaitori/car/thanks/?aid='+year+month+day+<?php echo do_shortcode('[CF7_counter]'); ?>;
    } else {
      location = 'https://ctn-net.jp/kaitori/car/thanks/?aid='+year+month+day+<?php echo do_shortcode('[CF7_counter]'); ?>;
    }
}, false );
</script>


<script type="text/javascript">
  var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  if(day<10){day='0'+day};
  if(month<10){month='0'+month};
  document.addEventListener( 'wpcf7mailsent', function( event ) {
   if ( '101' == event.detail.contactFormId ) {
      location = 'https://ctn-net.jp/kaitori/car/thanks/?aid='+year+month+day+<?php echo do_shortcode('[CF7_counter]'); ?>;
    } else {
      location = 'https://ctn-net.jp/kaitori/car/thanks/?aid='+year+month+day+<?php echo do_shortcode('[CF7_counter]'); ?>;
    }
}, false );
</script>


<?php if(is_front_page()) : ?>


<script type="text/javascript">
      // Thêm sự kiện "focus" cho trường nhập liệu
    document.getElementById('brandField').addEventListener('focus', function () {
        showPopup('brand');
    });

    document.getElementById('vehiclesField').addEventListener('focus', function () {
        showPopup('brand');
    });

    document.getElementById('yearField').addEventListener('focus', function () {
        showPopup('year');
    });

    document.getElementById('versionField').addEventListener('focus', function () {
        showPopup('version');
    });

    document.getElementById('colorField').addEventListener('focus', function () {
        showPopup('color');
    });

    document.getElementById('kilometField').addEventListener('focus', function () {
        showPopup('kilomet');
    });

    document.getElementById('statusField').addEventListener('focus', function () {
        showPopup('status');
    });

    document.getElementById('autoField').addEventListener('focus', function () {
        showPopup('status');
    });

    document.getElementById('historyField').addEventListener('focus', function () {
        showPopup('status');
    });
</script>


<script type="text/javascript">
      // Thêm sự kiện "focus" cho trường nhập liệu
    document.getElementById('brandFieldsp').addEventListener('focus', function () {
        showPopupsp('brand');
	var bodyElement = document.body;
	bodyElement.style.overflow="hidden";
    });

    document.getElementById('vehiclesFieldsp').addEventListener('focus', function () {
        showPopupsp('brand');
    });

    document.getElementById('yearFieldsp').addEventListener('focus', function () {
        showPopupsp('year');
    });

    document.getElementById('versionFieldsp').addEventListener('focus', function () {
        showPopupsp('version');
    });

    document.getElementById('colorFieldsp').addEventListener('focus', function () {
        showPopupsp('color');
    });

    document.getElementById('kilometFieldsp').addEventListener('focus', function () {
        showPopupsp('kilomet');
    });

    document.getElementById('statusFieldsp').addEventListener('focus', function () {
        showPopupsp('status');
    });

    document.getElementById('autoFieldsp').addEventListener('focus', function () {
        showPopupsp('status');
    });

    document.getElementById('historyFieldsp').addEventListener('focus', function () {
        showPopupsp('status');
    });
</script>

<script src='https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/croll-custom.js'></script>
<script src='https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/script-n-new.js'></script>
<script src='https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/script-sp.js'></script>
<script src='https://inse.ctn-demo.com/wp-content/themes/ctnkaitori/assets/js/popup-top.js'></script>
<!-- <script src='https://inse.ctn-demo.com/wp-content/themes/ctnkaitori/assets/js/load-csv.js'></script> -->
<?php endif; ?>
<input type="hidden" id="ctn_wpc_f7_counter" name="ctn_wpc_f7_counter" value="<?php echo do_shortcode('[CF7_counter]'); ?>">
<input type="hidden" id="ctn_e" name="ctn_e" value="pr">
<input type="hidden" id="ctn_t" name="ctn_t" value="s">
<script src='https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/js/form.js'></script>
</body>

</html>