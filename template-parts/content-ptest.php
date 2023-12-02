<?php
/**
 * Template part for displaying page content in page.php
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
    <div class="entry-content">
        <div class="test-list-post">
            <?php
                $args = array(
                    'posts_per_page'    => '-1', 
                    'orderby'           => 'title',
                    'order'             => 'ASC',
                    'post_type'         => 'kuruma', // the post type or custom post type
                    'tax_query'         => array( // Custom taxonomy query is an array of arrays
                        array(
                            'taxonomy'  => 'brand', // the custom taxonomy
                            'field'     => 'slug',                 
                            'terms'     => 'slug', // term slug(s)
                        ),
                    ),
                );
                // The new Query
                $the_query = new WP_Query( $args );
                // The Loop     
                if ( $the_query->have_posts() ) : // Start the if statement
                ?>
                    <select onchange="window.document.location.href=this.options[this.selectedIndex].value;">
                        <option selected="selected">NATIONAL CLIENTS</option><!-- Initial option in dropdown select menu; must be before the while loop -->
                <?php // swap from HTML to PHP
                            while ($the_query->have_posts()) : $the_query->the_post();
                ?><!-- swap from PHP to HTML -->
                                <option value="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></option><!-- The heart of the dropdown select menu. Displays custom post titles and their permalink URLs. -->
                <?php // swap from HTML to PHP
                            endwhile; // End the while Loop
                ?><!-- swap from PHP to HTML -->
                    </select><!-- Close the select tag for the dropdown select menu -->
                <?php // swap from HTML to PHP
                endif; // End the if statement
                wp_reset_postdata(); // reset global $post
            ?>
        </div>

        <div class="text-test">
    
            
        </div>
    </div>
</article>
