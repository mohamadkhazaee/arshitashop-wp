<?php get_header( ) ?>

<main>
<?php get_template_part( 'templates/index', 'slider' ); ?>
<?php get_template_part( 'templates/index-loop-slider', 'type-1-1' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'off' ) ?>
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-full">
                    <?php $arshita_row_1_ad=arshita_get_option('arshita_row_1_ad'); ?>

                        <a href="<?php echo $arshita_row_1_ad[0]['row-1-ad-link'] ?>">
                            <img src="<?php echo $arshita_row_1_ad[0]['row-1-ad-img'] ?> " alt="">
                        </a>
                    </div>
                    </div>
                </div>
            </section>  
<?php get_template_part( 'templates/index-loop-slider', 'fashion' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'product-categories' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'most-recents' ) ?>  
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-4">
                    <?php $arshita_row_2_ad=arshita_get_option('arshita_row_2_ad'); ?>

                       <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="<?php echo $arshita_row_2_ad[0]['row-2-1-ad-link'] ?>">
                                <img src="<?php echo $arshita_row_2_ad[0]['row-2-1-ad-img'] ?>" alt="">

                               </a>       
                                             </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <a href="<?php echo $arshita_row_2_ad[0]['row-2-2-ad-link'] ?>">
                                <img src="<?php echo $arshita_row_2_ad[0]['row-2-2-ad-img'] ?>" alt="">

                               </a>  
                                               </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <a href="<?php echo $arshita_row_2_ad[0]['row-2-1-link'] ?>">
                                <img src="<?php echo $arshita_row_2_ad[0]['row-2-3-ad-img'] ?>" alt="">

                               </a>                       </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        <a href="<?php echo $arshita_row_2_ad[0]['row-2-1-ad-link'] ?>">
                                <img src="<?php echo $arshita_row_2_ad[0]['row-2-3-ad-img'] ?>" alt="">

                               </a>                      </div>
                       </div>
                    </div>
                    </div>
                </div>
            </section>
<?php get_template_part( 'templates/index-loop-slider', 'type-1-2' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'most-sale' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'camp' ) ?>
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-half">
                    <?php $arshita_row_3_ad=arshita_get_option('arshita_row_3_ad'); ?>

                       <div class="row">
                           <div class="col-md-6">
                            <a href="<?php echo $arshita_row_3_ad[0]['row-3-1-ad-link'] ?>">
                                <img src="<?php  echo $arshita_row_3_ad[0]['row-3-1-ad-img'] ?>" alt="">

                               </a>
                           </div>
                           <div class="col-md-6">
                            <a href="<?php echo $arshita_row_3_ad[0]['row-3-2-ad-link'] ?>">
                                <img src="<?php  echo $arshita_row_3_ad[0]['row-3-2-ad-img'] ?>" alt="">

                               </a>
                           </div>
                       </div>
                    </div>
                    </div>
                </div>
            </section>
<?php get_template_part( 'templates/index-loop-slider', 'most-view' ) ?>
<?php get_template_part( 'templates/index-loop-slider', 'sport' ) ?>
            <section c class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-full">
                    <?php $arshita_row_4_ad=arshita_get_option('arshita_row_4_ad'); ?>

                        <a href="<?php echo $arshita_row_4_ad[0]['row-4-ad-link'] ?>">
                            <img src="<?php echo $arshita_row_4_ad[0]['row-4-ad-img'] ?>" alt="">
                        </a>
                    </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-brands">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-menu-open"></i>
                                        <h3>برندهای ویژه</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                    <?php 
                                    $brands_index_loop_args = array(
                                        'taxonomy' => 'yith_product_brand',
                                        'post_type'  =>'product',
                                        'hide_empty' => false
                                    );
                                      $brands_index_loop =get_categories($brands_index_loop_args);
                                    //var_dump($brands_index_loop);

                                    ?>
                                   <div class="owl-loop-slider-brands owl-carousel owl-theme">
                                   <?php 
                                            foreach($brands_index_loop as $brand){
                                                ?>
                                                       <div class="item">
                                           <a href="<?php echo  bloginfo( 'url' ) . '/product-brands/' . $brand->slug . '/'; ?>">
                                               <?php
                                               $thumb_id = get_woocommerce_term_meta( $brand->term_id, 'thumbnail_id', true );
                                               $term_img = wp_get_attachment_url(  $thumb_id );
                                             
                                            


                                                ?>
                                               <img src="<?php echo $term_img; ?>">
                                           </a>
                                       </div>
                                                <?php
                                            }
                                            ?>
                                       
                                    
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </section>

                    
                    <?php get_template_part( 'templates/index', 'blog-loop' ); ?>

                
            <section id="footer-backTo-top">
                <a id="back-top-btn" href="#main-header">
                    <i class="mdi mdi-chevron-up-circle-outline"></i>
                   <span>
                    پرش به بالا 
                   </span>
                </a>
            </section>
            <section class="website-services">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="<?php echo myRoot ?>/assets/img/service1.svg" alt="">
                                <h4>تحویل اکسپرس</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="<?php echo myRoot ?>/assets/img/service2.svg" alt="">
                                <h4>پشتیبانی 24 ساعته</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="<?php echo myRoot ?>/assets/img/service3.svg" alt="">
                                <h4> پرداخت در محل</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="<?php echo myRoot ?>/assets/img/service4svg.svg" alt="">
                                <h4>ضمانت اصل بودن</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

    <?php get_footer() ?>