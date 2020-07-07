<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo myRoot ?>/assets/css/style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo myRoot ?>/assets/css/bootstrap.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="<?php echo myRoot ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo myRoot ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo myRoot ?>/https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css
    ">
    
    <title>آرشیتا کالا</title>
</head>
<body>
    <div class="responsive-overlay"></div>
   
    <header class="main-header" >
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-2 header-row">
                    <div class="header-logo-section">
                        <button class="main-nav-toggle">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <?php $logo=arshita_get_option('header_sec'); ?>
                        <a href="<?php echo $logo[0]['logo-link'];?>" class="header-log-container">
                            <img class="header-logo" src="<?php echo $logo[0]['logo'];?>" alt="">
                        </a>
                        <button class="header-faq">
                            <i class="mdi mdi-help"></i>
                        </button>
                    </div>
                </div>
                <div class="col-8 col-lg-6">
                    <div class="header-search-container">
                        
                          <!-- <form action="">
                              <button type="submit" class="submit-header">
                                  <i class="mdi mdi-magnify"></i>
                              </button>
                              <input type="text" placeholder="جستجوی محصولات...">

                          </form> -->
                    
                          <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <button type="submit"  class="submit-header" >  <i class="mdi mdi-magnify"></i></button>

                            <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                                <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field form-control search-input" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                <input type="hidden" name="post_type" value="product" />
                        </form>

                        </div>
                </div>
                <div class="col-4">
                    <div class="header-action" >
                        <a class="header-cart-btn" href="<?php echo wc_get_cart_url(); ?>">
                            <i class="mdi mdi-cart-outline"></i>
                            <span><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
                        </a>
                        
                          <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="header-account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="mdi mdi-account-circle-outline"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="header-account">
                              <a class="dropdown-item" href="<?php echo bloginfo( 'url' ) ?>/my-account">حساب کاربری</a>
                              <a class="dropdown-item" href="<?php echo bloginfo( 'url' ) ?>/wishlist">لیست علاقه مندی </a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="main-nav">
        <div class="container-fluid">
            <button class="close-btn-res-menu">
                <i class="mdi mdi-close"></i>
            </button>
            <div class="menu-logo">
                <img src="<?php echo myRoot ?>assets/img/logo.png" alt="">
            </div>
            <?php if( has_nav_menu('MainMenu')) : ?>
            <?php
                    $config = array(
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'main-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'    => 'preserve',
                        'depth'           => 0,
                        'walker'          => '',
                        'theme_location'  => '',
                    );
            
                 wp_nav_menu($config); ?>
        <?php else : ?>
            <div>definde a menu for this place in wp admin pannel</div>
        <?php endif; ?>

        </div>
    </nav>
    <?php wp_head() ?>