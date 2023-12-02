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
        <form action="/" method="GET" role="form">
            <input type="hidden" name="post_type" value="kuruma">
            <div class="form-group">
                <select name="meka" id="meka" class="form-control" required="required">
                    <option value="">指定なし</option>
                    <?php $args = array( 
                        'hide_empty' => 0,
                        'taxonomy' => 'brand',
                        'parent' => 0
                        ); 
                        $cates = get_categories( $args ); 
                        foreach ( $cates as $cate ) {  ?>
                            <option value="<?php echo $cate->slug; ?>"><?php echo $cate->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <select name="brand" id="brand" class="form-control">
                    <option value="">指定なし</option>
                </select>
            </div>
            <!--<div class="form-group">
                <select name="title-ps" id="title-ps" class="form-control">
                    <option value="">post-name</option>
                </select>
            </div>-->
            <button type="submit" class="btn btn-primary">車買取・査定相場をチェック</button>
        </form>
    </div>
</article>
<div style="display: none;">
    <?php $args = array( 
        'hide_empty' => 0,
        'taxonomy' => 'brand',
        'parent' => 0
        ); 
        $cates = get_categories( $args ); 
        foreach ( $cates as $cate ) {  ?>
            <div class="datameka" id="<?php echo $cate->slug; ?>">
                <option value="">指定なし</option>
                <?php $args2 = array( 
                    'hide_empty' => 0,
                    'taxonomy' => 'brand',
                    'parent' => $cate->term_id
                    ); 
                    $cates2 = get_categories( $args2 ); 
                    foreach ( $cates2 as $cate2 ) {  ?>
                        <option value="<?php echo $cate2->slug; ?>"><?php echo $cate2->name; ?></option>
                <?php } ?>
            </div>
    <?php } ?>
</div>
<!--<div style="display: none;">
    <?php $args = array( 
        'hide_empty' => 0,
        'taxonomy' => 'brand',
        'parent' => 2,
        'post_type' => $type,
        'post_status'      => 'publish'
        ); 
        $posts_array = get_posts( $args ); 
        foreach ( $cates as $cate ) {  ?>
            <div class="datameka" id="<?php echo $cate->posts ?>">
                <option value=""><?php echo the_title(); ?></option>
                <?php $args2 = array( 
                    'hide_empty' => 0,
                    'taxonomy' => 'brand',
                    'parent' => $cate->term_id
                    ); 
                    $cates2 = get_posts( $args2 ); 
                    foreach ( $cates2 as $cate2 ) {  ?>
                        <option value="<?php echo $cate2->post; ?>"><?php echo $cate2->name; ?></option>
                <?php } ?>
            </div>
    <?php } ?>
</div>-->

