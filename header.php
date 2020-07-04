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
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="header-mini-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              سبد خرید
                            </button>
                            <div class="dropdown-menu" aria-labelledby="header-mini-cart">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="header-account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              حساب کاربری
                            </button>
                            <div class="dropdown-menu" aria-labelledby="header-account">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
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

            <!-- <ul class="main-menu">
                <li class="sub-menu-parent">
                    <a href="#">دسته محصولات</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mega-menu-icon mdi mdi-laptop-mac"></span>
                                محصولات دیجیتال
                            </a>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#" >موبایل</a>
                                    <ul>
                                        <li>
                                            <a href="#">اپل</a>
                                        </li>
                                        <li>
                                            <a href="#">سامسونگ</a>
                                        </li>
                                        <li>
                                            <a href="#">ال جی</a>
                                        </li>
                                        <li>
                                            <a href="#">نوکیا</a>
                                        </li>
                                        <li>
                                            <a href="#">شیائومی</a>
                                        </li>

                                        <li>
                                            <a href="#">هواوی</a>
                                        </li>
                                        <li>
                                            <a href="#">کاترپیلار</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >لپ تاپ</a>
                                    <ul>
                                        <li>
                                            <a href="#">اپل</a>
                                        </li>
                                        <li>
                                            <a href="#">دل</a>
                                        </li>
                                        <li>
                                            <a href="#">ایسوس</a>
                                        </li>
                                        <li>
                                            <a href="#">ایسر</a>
                                        </li>
                                        <li>
                                            <a href="#">سامسونگ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >تبلت</a>
                                    <ul>
                                        <li>
                                            <a href="#">اپل</a>
                                        </li>
                                        <li>
                                            <a href="#">هواوی</a>
                                        </li>
                                        <li>
                                            <a href="#">سامسونگ</a>
                                        </li>
                                        <li>
                                            <a href="#">ال جی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        دوربین
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">عکاسی</a>
                                        </li>
                                        <li>
                                            <a href="#">فیلم برداری</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >هدفون و هندزفری</a>
                                    <ul>
                                        <li>
                                            <a href="#">با سیم</a>
                                        </li>
                                        <li>
                                            <a href="#">بی سیم</a>
                                        </li>
                                        <li>
                                            <a href="#">تک گوش</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        لوازم جانبی گوشی
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">کیف و کاور</a>
                                        </li>
                                        <li>
                                            <a href="#">گلس و محافظ صفحه نمایش</a>
                                        </li>
                                        <li>
                                            <a href="#"> پاور بانک</a>
                                        </li>
                                        <li>
                                            <a href="#"> پایه نگه دارنده</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >ساعت هوشمند</a>
                                    <ul>
                                        <li>
                                            <a href="#">اپل</a>
                                        </li>
                                        <li>
                                            <a href="#">سامسونگ</a>
                                        </li>
                                        <li>
                                            <a href="#">شیائومی</a>
                                        </li>
                                        <li>
                                            <a href="#">ال جی</a>
                                        </li>
                                        <li>
                                            <a href="#">جبرا</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >باتری</a>
                                    <ul>
                                        <li>
                                            <a href="#">موبایل</a>
                                        </li>
                                        <li>
                                            <a href="#">تبلت</a>
                                        </li>
                                        <li>
                                            <a href="#">لپ تاپ</a>
                                        </li>
                                
                                       
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >کابل و اتصالات</a>
                                    <ul>
                                        <li>
                                            <a href="#">با سیم</a>
                                        </li>
                                        <li>
                                            <a href="#">بی سیم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li پ>
                                    <a href="#" >کابل و اتصالات</a>
                                    <ul>
                                        <li>
                                            <a href="#">با سیم</a>
                                        </li>
                                        <li>
                                            <a href="#">بی سیم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" >کابل و اتصالات</a>
                                    <ul>
                                        <li>
                                            <a href="#">با سیم</a>
                                        </li>
                                        <li>
                                            <a href="#">بی سیم</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">تلسکوپ</a>
                                </li>
                                <li>
                                    <a href="#">نمایشگر</a>
                                </li>
                                  <li class="menu-item-has-children">
                                    <a href="#" >کامپیوتر و تجهیزات جانبی</a>
                                    <ul>
                                        <li>
                                            <a href="#">کیس</a>
                                        </li>
                                        <li>
                                            <a href="#">کیبورد</a>
                                        </li>
                                        <li>
                                            <a href="#">موس</a>
                                        </li>
                                        <li>
                                            <a href="#">نمایشگر</a>
                                        </li>
                                        <li>
                                            <a href="#">هارد اکسترنال</a>
                                        </li>
                                        <li>
                                            <a href="#">هادر اینترنال</a>
                                        </li>
                                        <li>
                                            <a href="#">کارت گرافیک</a>
                                        </li>
                                        <li>
                                            <a href="#">پردازشگر</a>
                                        </li>
                                        <li>
                                            <a href="#">اتصالات</a>
                                        </li>
                                        <li>
                                            <a href="#">پرینتر</a>
                                        </li>
                                        <li>
                                            <a href="#">فلش و کابل</a>
                                        </li>
                                        <li>
                                            <a href="#">فن و خنک کننده</a>
                                        </li>
                                        <li>
                                            <a href="#">استند و متعلقات</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">ماشین آلات اداری</a>
                                    <ul>
                                        <li>
                                            <a href="#">پرینتر</a>
                                        </li>
                                        <li>
                                            <a href="#">اسکنر</a>
                                        </li>
                                        <li>
                                            <a href="#">فکس</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">کنسول بازی</a>
                                    <ul>
                                        <li>
                                            <a href="#">PS4</a>
                                        </li>
                                        <li>
                                            <a href="#">Xbox</a>
                                        </li>
                                        <li>
                                            <a href="#">بازی</a>
                                        </li>
                                        <li>
                                            <a href="#">تجهیزات جانبی</a>
                                        </li>
                                        <li>
                                            <a href="#">گیفت کارت</a>
                                        </li>
                                        <li>
                                            <a href="#">برچسب و پوسته</a>
                                        </li>
                                        <li>
                                            <a href="#">دسته</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi mdi-home"></span>

                                    خانه و آشپزخانه</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mega-menu-icon mdi mdi-soccer"></span>

                                ورزشی</a>
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#" >موبایل</a>
                                        <ul>
                                            <li>
                                                <a href="#">اپل</a>
                                            </li>
                                            <li>
                                                <a href="#">سامسونگ</a>
                                            </li>
                                            <li>
                                                <a href="#">ال جی</a>
                                            </li>
                                            <li>
                                                <a href="#">نوکیا</a>
                                            </li>
                                            <li>
                                                <a href="#">شیائومی</a>
                                            </li>
    
                                            <li>
                                                <a href="#">هواوی</a>
                                            </li>
                                            <li>
                                                <a href="#">کاترپیلار</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >لپ تاپ</a>
                                        <ul>
                                            <li>
                                                <a href="#">اپل</a>
                                            </li>
                                            <li>
                                                <a href="#">دل</a>
                                            </li>
                                            <li>
                                                <a href="#">ایسوس</a>
                                            </li>
                                            <li>
                                                <a href="#">ایسر</a>
                                            </li>
                                            <li>
                                                <a href="#">سامسونگ</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >تبلت</a>
                                        <ul>
                                            <li>
                                                <a href="#">اپل</a>
                                            </li>
                                            <li>
                                                <a href="#">هواوی</a>
                                            </li>
                                            <li>
                                                <a href="#">سامسونگ</a>
                                            </li>
                                            <li>
                                                <a href="#">ال جی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            دوربین
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">عکاسی</a>
                                            </li>
                                            <li>
                                                <a href="#">فیلم برداری</a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >هدفون و هندزفری</a>
                                        <ul>
                                            <li>
                                                <a href="#">با سیم</a>
                                            </li>
                                            <li>
                                                <a href="#">بی سیم</a>
                                            </li>
                                            <li>
                                                <a href="#">تک گوش</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            لوازم جانبی گوشی
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">کیف و کاور</a>
                                            </li>
                                            <li>
                                                <a href="#">گلس و محافظ صفحه نمایش</a>
                                            </li>
                                            <li>
                                                <a href="#"> پاور بانک</a>
                                            </li>
                                            <li>
                                                <a href="#"> پایه نگه دارنده</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >ساعت هوشمند</a>
                                        <ul>
                                            <li>
                                                <a href="#">اپل</a>
                                            </li>
                                            <li>
                                                <a href="#">سامسونگ</a>
                                            </li>
                                            <li>
                                                <a href="#">شیائومی</a>
                                            </li>
                                            <li>
                                                <a href="#">ال جی</a>
                                            </li>
                                            <li>
                                                <a href="#">جبرا</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >باتری</a>
                                        <ul>
                                            <li>
                                                <a href="#">موبایل</a>
                                            </li>
                                            <li>
                                                <a href="#">تبلت</a>
                                            </li>
                                            <li>
                                                <a href="#">لپ تاپ</a>
                                            </li>
                                    
                                           
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >کابل و اتصالات</a>
                                        <ul>
                                            <li>
                                                <a href="#">با سیم</a>
                                            </li>
                                            <li>
                                                <a href="#">بی سیم</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li پ>
                                        <a href="#" >کابل و اتصالات</a>
                                        <ul>
                                            <li>
                                                <a href="#">با سیم</a>
                                            </li>
                                            <li>
                                                <a href="#">بی سیم</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" >کابل و اتصالات</a>
                                        <ul>
                                            <li>
                                                <a href="#">با سیم</a>
                                            </li>
                                            <li>
                                                <a href="#">بی سیم</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">تلسکوپ</a>
                                    </li>
                                    <li>
                                        <a href="#">نمایشگر</a>
                                    </li>
                                      <li class="menu-item-has-children">
                                        <a href="#" >کامپیوتر و تجهیزات جانبی</a>
                                        <ul>
                                            <li>
                                                <a href="#">کیس</a>
                                            </li>
                                            <li>
                                                <a href="#">کیبورد</a>
                                            </li>
                                            <li>
                                                <a href="#">موس</a>
                                            </li>
                                            <li>
                                                <a href="#">نمایشگر</a>
                                            </li>
                                            <li>
                                                <a href="#">هارد اکسترنال</a>
                                            </li>
                                            <li>
                                                <a href="#">هادر اینترنال</a>
                                            </li>
                                            <li>
                                                <a href="#">کارت گرافیک</a>
                                            </li>
                                            <li>
                                                <a href="#">پردازشگر</a>
                                            </li>
                                            <li>
                                                <a href="#">اتصالات</a>
                                            </li>
                                            <li>
                                                <a href="#">پرینتر</a>
                                            </li>
                                            <li>
                                                <a href="#">فلش و کابل</a>
                                            </li>
                                            <li>
                                                <a href="#">فن و خنک کننده</a>
                                            </li>
                                            <li>
                                                <a href="#">استند و متعلقات</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">ماشین آلات اداری</a>
                                        <ul>
                                            <li>
                                                <a href="#">پرینتر</a>
                                            </li>
                                            <li>
                                                <a href="#">اسکنر</a>
                                            </li>
                                            <li>
                                                <a href="#">فکس</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">کنسول بازی</a>
                                        <ul>
                                            <li>
                                                <a href="#">PS4</a>
                                            </li>
                                            <li>
                                                <a href="#">Xbox</a>
                                            </li>
                                            <li>
                                                <a href="#">بازی</a>
                                            </li>
                                            <li>
                                                <a href="#">تجهیزات جانبی</a>
                                            </li>
                                            <li>
                                                <a href="#">گیفت کارت</a>
                                            </li>
                                            <li>
                                                <a href="#">برچسب و پوسته</a>
                                            </li>
                                            <li>
                                                <a href="#">دسته</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#">
                                
                                <span class="mega-menu-icon mdi mdi-wrench-outline"></span>
                                ابزار آلات
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi  mdi-campfire"></span>
                                سفر و کوهنوردی
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi mdi-chair-rolling"></span>
                                میز و صندلی 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi  mdi-tshirt-crew-outline"></span>
                                پوشاک
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi  mdi-book-open-variant"></span>
                             کتاب و لوازم التحریر
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi  mdi-baby-carriage"></span>
                               لوازم کودک
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="mega-menu-icon mdi  mdi-cat"></span>
                                لوازم حیوانات خانگی
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">فروشگاه</a>
                </li>
                <li>
                    <a href="#">ایران کالای من</a>
                </li>
                <li>
                    <a href="#">ارتباط با ما</a>
                </li>
                <li>
                    <a href="#">درباره ما</a>
                </li>
           
            </ul> -->
        </div>
    </nav>
    <?php echo wp_list_categories() ?>
    <?php wp_head() ?>