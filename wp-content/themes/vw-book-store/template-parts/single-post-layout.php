<?php
/**
 * The template part for displaying Single Post Layout
 *
 * @package VW Book Store
 * @subpackage vw-book-store
 * @since VW Book Store 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="post-info">
        <?php if(get_theme_mod('vw_book_store_toggle_postdate',true)==1){ ?>
            <span class="entry-date"><?php the_date(); ?></span><span>|</span>
        <?php } ?>

        <?php if(get_theme_mod('vw_book_store_toggle_author',true)==1){ ?>
            <span class="entry-author"> <?php the_author(); ?></span><span>|</span>
        <?php } ?>

        <?php if(get_theme_mod('vw_book_store_toggle_comments',true)==1){ ?>
            <span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-book-store'), __('0 Comments', 'vw-book-store'), __('% Comments', 'vw-book-store') ); ?> </span>
        <?php } ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()) { ?>
        <div class="feature-box">   
            <img src="<?php the_post_thumbnail_url('full'); ?>">
        </div>
        <?php } the_content();
        the_tags(); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-book-store' ),
            ) );
        } elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-book-store' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'vw-book-store' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-book-store' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-book-store' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
        }
    ?>
</div>