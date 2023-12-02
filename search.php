<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>
    <div class="container">
        <div class="row my-4">
            <section id="primary" class="content-area col-lg-9 col-md-9">
                <main id="main" class="site-main module-border-wrap">
                    <div class="row">
                        <?php
                            $post_type  = isset($_GET['post_type']) && $_GET['post_type'] ? $_GET['post_type'] : 'post';
                            $district   = isset($_GET['meka']) && $_GET['meka'] ? $_GET['meka'] : '';
                            $location   = isset($_GET['brand']) && $_GET['brand'] ? $_GET['brand'] : $district;
                            $key        = isset($_GET['s']) && $_GET['s'] ? $_GET['s'] : '';
                            $args = array(
                                'showposts'     => 10,
                                'post_type'     => $post_type,
                                's'             => $key,
                                'brand'       => $location
                            );
                        ?>
                        <?php $the_query = new WP_Query( $args ); ?>
                        <?php if( $the_query->have_posts() ): ?>
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <p><?php the_title(); ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </main>
            </section>
            <aside id="secondary" class="widget-area col-lg-3 col-md-3">
                <div class="sidebar ">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                </div>
            </aside>
        </div>
    </div>
<?php
get_footer();