<?php
/**
 * Template Name: Contact Page
 *
 */

get_header(); ?>

<div class="container">
    <div class="row">
      <h2 class="busines-contact">お問い合わせ</h2>
        <div id="primary" class="content-area col-lg-12 col-md-12">
            <main id="main" class="contact-content">
                <div class="contact-detail">
                	<?php echo do_shortcode('[contact-form-7 id="2382" title="Contact"]'); ?>
                </div>
            </main>
        </div>
    </div>
</div>


<?php
get_footer();