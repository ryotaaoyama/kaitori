<?php
/**
 * Template part for displaying posts
 */
?>
<ul id="useful_disp" class="clearfix">
    <li class="clearfix">
        <a href="<?php the_permalink() ;?>">
            <figure class="useful_img">
                <?php the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?>
            </figure>
            <div class="useful_text">
                <h5><?php echo the_title(); ?></h5>
                <p><?php echo the_excerpt(); ?></p>
                <p class="date"><?php echo get_the_date(); ?></p>
            </div>
        </a>
    </li>
    
</ul>

