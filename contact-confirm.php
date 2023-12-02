<?php
/**
 * Template Name: Contact Confirm Page
 *
 */

get_header(); ?>
<section class="banner-post-cus sp-news">
  <div class="post-nav-area">
    <nav class="post-nav">
      <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/#strong">CTN一括査定の強み</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/#line-top">他社との違い</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/#line-top-2">一括査定の流れ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/column">コラム</a></li>
      </ul>
    </nav>
  </div>
  <div class="post-banner">
    <div class="image-bn">
      <img class="slider-pc-cus" src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-new.png">
      <img class="slider-sp-cus" src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-sp-new.png">
      <div class="text-bn">
        <img src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/text-bn.png">
      </div>
    </div>
  </div>
</section>
<div class="brecum-content">
  <div class="container container-blog-custom">
    <div class="brecum-detail">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to CTN一括査定." href="https://ctn-net.jp/kaitori/car" class="home" ><span property="name">CTN一括査定</span></a><meta property="position" content="1"></span> &gt;<span property="name">問い合わせ</span><meta property="position" content="2"></div>

</div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-lg-12 col-md-12">
            <main id="main" class="contact-content">
                <div class="contact-detail">
                  <?php echo do_shortcode('[contact-form-7 id="2388" title="Contact Confirm"]'); ?>
                </div>
            </main>
        </div>
    </div>
</div>
<script>
function back(){
      history.back();
  }
</script>

<?php
get_footer();