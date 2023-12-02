<?php
/**
 * Ctn functions
 */

function wpcf7_add_shortcode_radio_required() {
  wpcf7_add_shortcode( array( 'radio*' ), 'wpcf7_checkbox_form_tag_handler', true );
}
add_action( 'wpcf7_init', 'wpcf7_add_shortcode_radio_required' );
add_filter( 'wpcf7_validate_radio*', 'wpcf7_checkbox_validation_filter', 10, 2 );

add_filter( 'flamingo_csv_quotation', 'my_filter_convert_encoding_csv', 11 );
function my_filter_convert_encoding_csv( $input ) {
	return mb_convert_encoding( $input, "SJIS", "UTF-8" );
}


add_filter('excerpt_mblength', 'new_excerpt_mblength');
 
if ( ! function_exists( 'ctntheme_theme_support' ) ) :

function ctntheme_theme_support(){
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);
	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

/* ContactForm7 のカスタムバリデーション */
add_filter('wpcf7_validate', 'wpcf7_validate_customize', 11, 2);

function wpcf7_validate_customize($result,$tags){

  foreach( $tags as $tag ){
    $type = $tag['type'];
    $name = $tag['name'];
    $post = trim(strtr((string) $_POST[$name], "\n", ""));

    switch($type){
      case 'text':
      case 'text*':
        if(preg_match('/.*-kana$/', $name )){
          if(preg_match("/^[ぁ-ん]+$/u",$_POST[$name]) == false){
            $result->invalidate( $name,'全角ひらがなで入力してください。' );
          }
        }
        break;
      case 'tel':
      case 'tel*':
        if( preg_match( '/^0[0-9]{1,3}-[0-9]{2,4}-[0-9]{3,4}$/',$_POST[$name] ) == false){
          $result->invalidate( $name,'ハイフンは省略せず市外局番からご記入ください。' );
        }
        break;
    }

  }
  return $result;
}

//ここから一つ一つのフォーム項目にバリデーションを追加します。
if ($name === "your-email") {
	//your-emailという名前のフォームに対して
	if(!preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $value)) {
	//if(!この部分はPHPで指定)は指定したい条件に当てはまらない(!)場合は
	if (method_exists($result, 'invalidate')) {
	$result->invalidate( $tag,"メールアドレスを入力してください");
	//"メールアドレスを入力してください"はエラーが出たときに表示される文言
	} else {
	$result['valid'] = false;
	$result['reason'][$name] = 'メールアドレスを入力してください';
	//'メールアドレスを入力してください'エラー時の文言をここにも書いておく。
	}
	//ここまでがContactForm7で入力エラーを出すための部分
	}
	}
	
/*titleを記述させない方法*/
remove_action( 'wp_head', '_wp_render_title_tag', 1 );
/**
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 2000, 600 );

	// Add custom image size used in Cover Template.
	add_image_size( 'ctntheme-fullscreen', 2000, 600 );

	add_theme_support('category-thumbnails');

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);


	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'ctntheme' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );


}
endif;
add_action( 'after_setup_theme', 'ctntheme_theme_support' );

/*
* Theme Menu
*/
function ctntheme_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'ctntheme' ),
		'expanded' => __( 'Desktop Expanded Menu', 'ctntheme' ),
		'mobile'   => __( 'Mobile Menu', 'ctntheme' ),
		'footer'   => __( 'Footer Menu', 'ctntheme' ),
		'social'   => __( 'Social Menu', 'ctntheme' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'ctntheme_menus' );

function custom_excerpt_length( $length ) {
     return 100;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

remove_filter('the_excerpt', 'wpautop');

/*
* Theme Sidebar
*/
function ctntheme_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Sidebar Post
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Sidebar', 'ctntheme' ),
				'id'          => 'sidebar',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'ctntheme' ),
			)
		)
	);


	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'ctntheme' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'ctntheme' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'ctntheme' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'ctntheme' ),
			)
		)
	);

}

add_action( 'widgets_init', 'ctntheme_sidebar_registration' );


/**
 * Enqueue scripts and styles.
 */
 function ctn_theme_script(){
 	// load bootstrap css
    wp_enqueue_style( 'bootstrap-css', (get_template_directory_uri()) . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'bootstrap-icon-css', (get_template_directory_uri()) . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');

    wp_enqueue_style( 'aos', (get_template_directory_uri()) . '/assets/vendor/aos/aos.css');

    wp_enqueue_style( 'glightbox', (get_template_directory_uri()) . '/assets/vendor/glightbox/css/glightbox.min.css');

    wp_enqueue_style( 'swiper', (get_template_directory_uri()) . '/assets/vendor/swiper/swiper-bundle.min.css');

	wp_enqueue_style( 'main-css', (get_template_directory_uri()).'/assets/css/main.css' );

	wp_enqueue_style( 'style-new-css', (get_template_directory_uri()).'/assets/css/style-new.css' );

    wp_enqueue_style( 'ctnkaitori-style', get_stylesheet_uri() );

    //Vendor JS Files
    wp_enqueue_script('bootstrap-bundle', (get_template_directory_uri()) . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '', true );

    wp_enqueue_script('aos', (get_template_directory_uri()) . '/assets/vendor/aos/aos.js', array(), '', true );

    wp_enqueue_script('glightbox-js', (get_template_directory_uri()) . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', true );

    wp_enqueue_script('vanilla-js', (get_template_directory_uri()) . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '', true );

    wp_enqueue_script('swiper-js', (get_template_directory_uri()) . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '', true );

    wp_enqueue_script('isotope-js', (get_template_directory_uri()) . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '', true );

    wp_enqueue_script('validate-js', (get_template_directory_uri()) . '/assets/vendor/php-email-form/validate.js', array(), '', true );

    wp_enqueue_script('main-js', (get_template_directory_uri()) . '/assets/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 }
add_action( 'wp_enqueue_scripts', 'ctn_theme_script' );


add_filter('use_block_editor_for_post', '__return_false');


add_filter( 'sftth_taxonomies', 'my_taxonomies_with_thumbnail' );

function my_taxonomies_with_thumbnail( $taxonomies ) {
    unset( $taxonomies['post_tag'] );
    $taxonomies['my_custom_tax'] = 'my_custom_tax';
    return $taxonomies;
}


// ** * Cho phép tải lên cho các tệp hình ảnh webp. * /
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['avif'] = 'image/avif';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


function wpb_author_info_box( $content ) {
 
global $post;
 
// Detect if it is a single post with a post author
if ( is_single() && isset( $post->post_author ) ) {
 
// Get author's display name
$display_name = get_the_author_meta( 'display_name', $post->post_author );
 
// If display name is not available then use nickname as display name
if ( empty( $display_name ) )
$display_name = get_the_author_meta( 'nickname', $post->post_author );
 
// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );
 
// Get author's website URL
$user_website = get_the_author_meta('url', $post->post_author);
 
// Get link to the author archive page
$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
 
if ( ! empty( $display_name ) )
 
$author_details = '<p class="author_name">About ' . $display_name . '</p>';
 
if ( ! empty( $user_description ) )
// Author avatar and bio
 
$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';
 
$author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';  
 
// Check if author has a website in their profile
if ( ! empty( $user_website ) ) {
 
// Display author website link
$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
 
} else {
// if there is no author website then just close the paragraph
$author_details .= '</p>';
}
 
// Pass all this info to post content
$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
}
return $content;
}
 
// Add our function to the post content filter
add_action( 'the_content', 'wpb_author_info_box' );
 
// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');


/*function get_the_popular_excerpt($limit){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",",$excerpt");
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $limit);
	$excerpt = substr($excerpt, 0, strripos($excerpt, ""));
	$excerpt = trim(preg_replace( '/s+/', '', $excerpt));
	$excerpt = $excerpt;
return $excerpt;
}*/


// Custom Excerpt
function my_excerpt_length($length){ 
	return 2; 
} 
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


// View Count
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count); // update count
    }
}

// Remove "Category:" on Title Category
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );


// No Index Setup 
function add_noindex_insert(){

	if (is_page(array('kuruma','ｇｔ%E3%80%80ブラックリミテッド'))) {
		echo '<meta name="robots" content="noindex,nofollow,noarchive">'."\n";
		echo '<meta name="googlebot" content="noindex,nofollow,noarchive">'."\n";
	}

}
add_action('wp_head', 'add_noindex_insert');


add_filter("wpcf7_posted_data", function ($wpcf7_posted_data) {

    $post = get_post($wpcf7_posted_data["_wpcf7_container_post"]);

    $wpcf7_posted_data["containerURL"] = get_permalink($post);


    return $wpcf7_posted_data;

});


//   add_action('init', function() {
//   remove_filter('the_excerpt', 'wpautop');
//   remove_filter('the_content', 'wpautop');
//   });
//   add_filter('tiny_mce_before_init', function($init) {
//   $init['wpautop'] = false;
//   $init['apply_source_formatting'] = true;
//   return $init;
//   });

  // // function no_jQuery() {
  // //     if (!is_singular('post')) {
  // //         wp_deregister_script('jquery');
  // //     }
  // // }
  // // add_action('init', 'no_jQuery');
  // remove_filter('the_excerpt', 'wpautop');


/* パラメータのコード */

add_filter( 'wpcf7_form_elements', 'dacrosby_do_shortcodes_wpcf7_form' );
function dacrosby_do_shortcodes_wpcf7_form( $form ) {
    $form = do_shortcode( $form );
    return $form;
}

add_filter( 'wpcf7_mail_components', 'dacrosby_do_shortcodes_wpcf7_mail_body', 10, 2 );
function dacrosby_do_shortcodes_wpcf7_mail_body( $components, $number ) {
    $components['body'] = do_shortcode( $components['body'] );
    return $components;
};

define( 'CF7_COUNTER', 'cf7-counter' );
function cf7dtx_counter(){
    $val = get_option( CF7_COUNTER, 0) + 12; 
    return $val;
}
add_shortcode('CF7_counter', 'cf7dtx_counter');

function cf7dtx_increment_mail_counter(){
    $val = get_option( CF7_COUNTER, 0) + 12; 
    update_option(CF7_COUNTER, $val); 
}
add_action('wpcf7_mail_sent', 'cf7dtx_increment_mail_counter');


function wpcf7_custom_date_shortcode_handler() {
    return date('Ymd');
}
add_shortcode('custom_date', 'wpcf7_custom_date_shortcode_handler');

/*End*/

function the_content_filter($content) {
    $block = join("|",array("one_third", "team_member"));
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");


// 投稿ページのパーマリンクを/columnにカスタマイズ
function add_article_post_permalink( $permalink ) {
    $permalink = '/column' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['column/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );


//Code paginate
/*function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
 
    global $paged;
    if(empty($paged)) $paged = 1;
 
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
 
    if(1 != $pages)
    {
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }
 
        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}*/



