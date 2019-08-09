<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_book_store_first_color = get_theme_mod('vw_book_store_first_color');

	$custom_css = '';

	if($vw_book_store_first_color != false){
		$custom_css .='#header .nav ul.sub-menu li a:hover, .search-bar, .more-btn a:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, input[type="submit"], #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer-2, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, nav.woocommerce-MyAccount-navigation ul li, .blogbutton-small, #comments input[type="submit"].submit, .pagination span, .pagination a{';
			$custom_css .='background-color: '.esc_html($vw_book_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_book_store_first_color != false){
		$custom_css .='a, .logo h1 a, button.product-btn, #footer h3, .woocommerce-message::before, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,#footer li a:hover{';
			$custom_css .='color: '.esc_html($vw_book_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_book_store_first_color != false){
		$custom_css .='.woocommerce-message{';
			$custom_css .='border-top-color: '.esc_html($vw_book_store_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_book_store_second_color = get_theme_mod('vw_book_store_second_color');

	if($vw_book_store_second_color != false){
		$custom_css .='.search-bar button[type="submit"], span.cart-value, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .scrollup i, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, .blogbutton-small:hover{';
			$custom_css .='background-color: '.esc_html($vw_book_store_second_color).';';
		$custom_css .='}';
	}
	if($vw_book_store_second_color != false){
		$custom_css .='.search-box i, .top-bar .custom-social-icons i:hover, .post-main-box h3 a{';
			$custom_css .='color: '.esc_html($vw_book_store_second_color).';';
		$custom_css .='}';
	}
	if($vw_book_store_second_color != false){
		$custom_css .='#sidebar h3{';
			$custom_css .='color: '.esc_html($vw_book_store_second_color).'!important;';
		$custom_css .='}';
	}
	if($vw_book_store_second_color != false){
		$custom_css .='#header .nav ul.sub-menu li a:hover, nav.woocommerce-MyAccount-navigation ul li{';
			$custom_css .='border-left-color: '.esc_html($vw_book_store_second_color).';';
		$custom_css .='}';
	}
	if($vw_book_store_second_color != false){
		$custom_css .='#sidebar input[type="submit"], #comments input[type="submit"].submit{
		box-shadow: 5px 5px 0 0 '.esc_html($vw_book_store_second_color).';
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_book_store_width_option','Full Width');

    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_book_store_slider_opacity_color','0.5');

	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_book_store_slider_content_option','Center');
	
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}