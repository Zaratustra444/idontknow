<?php
/**
 * The template part for displaying Post Content
 *
 * @package VW Book Store 
 * @subpackage vw_book_store
 * @since VW Book Store 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };
      };
    ?>
    <div class="new-text">
      <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
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
        <hr>
      </div>      
      <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_book_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_book_store_excerpt_number','30')))); ?></p>
      <div class="content-bttn">
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More','vw-book-store' ); ?>"><?php esc_html_e('Read More','vw-book-store'); ?></a>
      </div>
    </div>
  </div>
</div>