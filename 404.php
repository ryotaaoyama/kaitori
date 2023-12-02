<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header(); ?>

<div class="container">
    <div id="primary" class="content-area page-not">
        <main id="main" class="site-main">
            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'ページは更新中です' ); ?></h1>
                </header>
                <div class="page-content">
                    <p><?php esc_html_e( 'ページはコンテンツを更新しています。後で戻ってきてください。' ); ?></p>
    				
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>