<?php
/**
*当社https://ctn-net.jp/kaitori/car/
* Template Name: News Page
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
			<img class="slider-pc-cus" src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-new.png" loading="lazy">
      <img class="slider-sp-cus" src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/bg-blog-sp-new.png" loading="lazy">
			<div class="text-bn">
				<img src="https://ctn-net.jp/kaitori/car//wp-content/themes/ctnkaitori/assets/img/blog/text-bn.png" loading="lazy">
			</div>
		</div>
	</div>
</section>
<div class="brecum-content">
  <div class="container container-blog-custom">
    <div class="brecum-detail">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to CTN一括査定." href="https://ctn-net.jp/kaitori/car" class="home" ><span property="name">CTN一括査定</span></a><meta property="position" content="1"></span> &gt;<span property="name">クルマのあれこれ</span><meta property="position" content="2"></div>

</div>
    </div>
  </div>
</div>
<section id="blog" class="blog sp-non">
    <div class="container container-blog-custom" data-aos="fade-up">
        <h4 class="title-blog">PICKUP</h4>
        <div class="row gy-4 posts-list">
                    <?php 
          $args = array(
              'post_status' => 'publish', 
              'post_type' => 'post',
              'showposts' => 3, 
            );
          ?>
          <?php $getposts = new WP_query($args);?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-xl-4 col-md-6">
                <article>
                  <div class="post-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-fluid') ); ?>
                      </a>
                  </div>
                  <?php echo the_category(); ?>
                  <h2 class="title">
                    <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                  </h2>
                  <div class="d-flex align-items-center">
                    <div class="post-meta">
                      <p class="date-top"><?php echo get_the_date(); ?></p>
                    </div>
                  </div>
                </article>
            </div><!-- End post list item -->
            <?php endwhile; wp_reset_postdata(); ?>
        </div><!-- End blog posts list -->
    </div>
</section>

<section id="blog" class="blog sp-b">
    <div class="container" data-aos="fade-up">
        <h4 class="title-blog">PICKUP</h4>
        <div class="row gy-4 posts-list">
                    <?php 
          $args = array(
              'post_status' => 'publish', 
              'post_type' => 'post',
              'showposts' => 3, 
            );
          ?>
          <?php $getposts = new WP_query($args);?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <div class="slider3">

          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
          <!-- カルーセルスライダー -->
 
            <div class="col-xl-4 col-md-6">
            <article>
                  <div class="post-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-fluid') ); ?>
                      </a>
                  </div>
                  <?php echo the_category(); ?>
                  <h2 class="title">
                    <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                  </h2>
                  <div class="d-flex align-items-center">
                    <div class="post-meta">
                      <p class="date-top"><?php echo get_the_date(); ?></p>
                    </div>
                  </div>
            </article>
            </div><!-- End post list item -->

            <?php endwhile; wp_reset_postdata(); ?>         

          </div>

          </div>    
        </div><!-- End blog posts list -->
</section>


<section class="blog-news">
    <div class="container container-blog-custom">
        <div class="row">
            <div id="primary" class="col-lg-9 col-md-9 blog-dt">
                <div class="news-content">
                    <h4 class="title-blog">NEW</h4>
           			<ul id="useful_disp" class="clearfix">
                  <?php 
    							$args = array(
    								'post_status' => 'publish', 
    								'post_type' => 'post',
                    'post_per_page' => 1,
                    'paged' => ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1

    							);
      						?>
      						<?php $allposts = new WP_query($args); ?>
      						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
        						<?php while ($allposts->have_posts()) : ?> 
                        <?php $allposts->the_post(); ?>
                        <?php get_template_part('template-parts/content-news'); ?>
                    <?php endwhile;?>
                    <?php if(function_exists("hocwp_pagination")) hocwp_pagination(array("query" => $allposts)); ?>
                  </ul>
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
                    <?php setPostViews(get_the_ID()); ?>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="column-bt-form-new">
  <div class="container">
    <div class="row">
      <div class="column-btn-resize" data-aos="fade-up">
        
          <div class="columnbtn-form-n-dt">
            <ul>
              <li>
                <p class="new-bt-f-custom-o">簡単<span class="number-bt-f-new">55秒</span>査定依頼<span class="text-bt-text-new">高価買取店上位3社のみ</span></p>
                <a href="https://ctn-net.jp/kaitori/car/#form">
                  <p class="new-bt-f-custom-t"><span class="text-bt-f-new">無料</span>かんたん査定依頼</p>
                </a>
              </li>
            </ul>
          </div>
        
      </div>
    </div>
  </div>
</section>
        


<?php get_footer();

