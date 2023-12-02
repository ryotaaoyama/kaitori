<?php
/**
 *  Template part for displaying posts
 */
?>
<div class="post-detail-cus">
  	<div class="content-post-on">
	    <h1 class="title"><?php the_title()?></h1>
	    <div class="meta-top">
	        <ul>
	            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><p class="date"><?php echo get_the_date(); ?></p></time></li>
	        </ul>
	    </div><!-- End meta top -->
    	<div class="content post-content-all">
        	<?php the_content()?>
    	</div>
	</div>

    <div class="question-content">
	    <div class="ques-detail">
	        <h4>よくある質問</h4>
	        <div class="quse-ct">
		        <div class="quse-item">
		          <h6><?php the_field('question_one'); ?></h6>
		          <p><?php the_field('traloi1'); ?></p>
		        </div>
		        <div class="quse-item">
		          <h6><?php the_field('question_two'); ?></h6>
		          <p><?php the_field('traloi2'); ?></p>
		        </div>
	        </div>
	    </div>
    </div>
    <section class="raita-content">
	    <div class="tt-raita-cus">
	      <h3>この記事の監修者</h3>
	    </div>
	    <div class="raita-detail">
	        <div class="raita-thum">
		        <?php 
		        $image = get_field('raita_image');
		        if( !empty( $image ) ): ?>
		            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
	        </div>
	        <div class="raita-info">
		        <h4><?php the_field('raita_name'); ?></h4>
		        <p><?php the_field('raita_note'); ?></p>
	        </div>
	    </div>
    </section>

    <section class="form-page-small">
		<div class="form-dt article-form" data-aos="fade-up">
		    
		        <div class="form-home-btn-link">
			        <ul>
			            <li>
				            <p class="new-bt-f-custom-o-singel">簡単<span class="number-bt-f-new">55秒</span>査定依頼<span class="text-bt-text-new">高価買取店上位3社のみ</span></p>
				            <a href="https://ctn-net.jp/kaitori/car/#form">
				            	<p class="new-bt-f-custom-t-singel"><span class="text-bt-f-new">無料</span>かんたん査定依頼</p>
				            </a>
			            </li>
			        </ul>
		        </div>
		    
		</div>
    </section>

    <section class="relation-post">
    	<div class="relation-content">
      		<div class="relation-detail">
		        <?php
		            $categories = get_the_category($post->ID);
		            if ($categories) 
		            {
		                $category_ids = array();
		                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		       
		                $args=array(
		                'category__in' => $category_ids,
		                'post__not_in' => array($post->ID),
		                'showposts'=>4, 
		                'caller_get_posts'=>1
		                );
		                $my_query = new wp_query($args);
		                if( $my_query->have_posts() ) 
		                {
		                    echo '<h3>関連記事</h3><ul class="list-news">';
		                    while ($my_query->have_posts())
		                    {
		                        $my_query->the_post();
		                        ?>
		                        <li>
			                        <div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			                        <div class="item-list">
			                          <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			                          <p><?php echo get_the_date(); ?></p>
			                        </div>
		                        </li>
		                        <?php
		                    }
		                    echo '</ul>';
		                }
		            }
		        ?>
        	</div>
        </div>
    </section>
</div>
