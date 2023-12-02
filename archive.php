<?php
/**
 * The template for displaying archive pages
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
      <img class="slider-pc-cus" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-new.png">
      <img class="slider-sp-cus" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-sp-new.png">
      <div class="text-bn">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/blog/text-bn.png">
      </div>
    </div>
  </div>
</section>
<div class="brecum-content">
  <div class="container container-blog-custom">
    <div class="brecum-detail">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php
  // カテゴリーのデータを取得
  $cat = get_the_category();
  $cat = $cat[0];
?>
    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to CTN一括査定." href="https://ctn-net.jp/kaitori/car" class="home" ><span property="name">CTN一括査定</span></a>
      <meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the コラム" href="https://ctn-net.jp/kaitori/car/column/" class="taxonomy category" ><span property="name">クルマのあれこれ</span></a>
      <meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $cat->cat_name; ?></span>
</div>

</div>
</div>
  </div>
</div>
<section class="blog-news">
    <div class="container container-blog-custom">
        <div class="row">
            <div id="primary" class="col-lg-9 col-md-9 blog-dt">
                <div class="news-content">
                        <?php if (have_posts()) : ?>
                          <?php
                              // カテゴリーのデータを取得
                              $cat = get_the_category();
                              $cat = $cat[0];
                            ?>
                          <h1 class="title-blog"><?php echo $cat->cat_name; ?></h1>
                            <?php
                            while (have_posts()) :
                                the_post();

                                get_template_part('template-parts/content', get_post_type());?>

                            <?php endwhile;?>
                            <?php if(function_exists("hocwp_pagination")) hocwp_pagination(); ?>
                        <?php endif;?>

                </div> 
            </div>
            <aside id="secondary" class="col-lg-3 col-md-3 sidebar-ct">
                <div class="sidebar-content">
                    <div class="category-cus">
                      <h4 class="sidebar-tt-all">CATEGORY</h4>
                        <ul>
                             <?php
                                $args = array(
                                    'child_of'  => 0,
                                    '<strong>orderby</strong>'    => 'id',
                                );
                                $categories = get_categories( $args );
                                foreach ( $categories as $category ) { ?>
                                <li>
                                   <a href="<?php echo get_term_link($category->slug, 'category');?>">
                                      <?php echo $category->name ; ?>
                                   </a>
                                </li>
                                <?php } ?>
                        </ul>
                    </div>
                    <div class="rannking-cus">
                      <h4 class="sidebar-tt-all">RANKING</h4>
                      <ul>
                      <?php 
                $args = array(
                  'post_status' => 'publish',
                  'showposts' => 6,
                  'meta_key'=>'post_views_count',
                  'orderby' => 'meta_value_num',
                  'order' => 'DESC'
                );
              ?>
              <?php $getposts = new WP_query($args); ?>
              <?php global $wp_query; $wp_query->in_the_loop = true; ?>
              <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <li class="clearfix-sidebar">
                              <div class="osusume_img-single-sidebar">
                                <?php echo the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?>
                              </div>
                              <dl>
                                  <dt><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></dt>
                                  <p>View:<span><?php echo getPostViews(get_the_ID()); ?></span></p>
                              </dl>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
        


<?php get_footer();