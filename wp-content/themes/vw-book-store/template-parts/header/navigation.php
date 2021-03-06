<?php
/**
 * The template part for displaying navigation
 *
 * @package VW Book Store 
 * @subpackage vw_book_store
 * @since VW Book Store 1.0
 */
?>

<?php
  $vw_book_store_search_hide_show = get_theme_mod( 'vw_book_store_search_hide_show' );
  if ( 'Disable' == $vw_book_store_search_hide_show ) {
   $colmd = 'col-lg-9 col-md-9';
  } else { 
   $colmd = 'col-lg-8 col-md-8';
  } 
?>

<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-book-store'); ?></a></div>  
<div id="header" class="menubar">
  <div class="container">
    <div class="row bg-home">
      <div class="logo col-lg-3 col-md-3">
        <?php if( has_custom_logo() ){ vw_book_store_the_custom_logo();
        }else{ ?>
          <h1 class="text-sm-center text-md-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); ?></p>
        <?php endif; } ?>
      </div>
      <div class="<?php echo esc_html( $colmd ); ?> nav">
        <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
      </div>
      <?php if ( 'Disable' != $vw_book_store_search_hide_show ) {?>
        <div class="search-box col-lg-1 col-md-1">
          <span><i class="fas fa-search"></i></span>
        </div>
      <?php } ?>
    </div>
    <div class="serach_outer">
      <div class="closepop"><i class="far fa-window-close"></i></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>