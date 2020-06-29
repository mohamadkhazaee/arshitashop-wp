<section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-label-percent-outline mdi-rotate-180"></i>
                                        <h3>تخفیف ویژه</h3>
                                    </div>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                    <?php
                                    $loop_off_args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => 12,
                                        'meta_query'     => array(
                                                'relation' => 'OR',
                                                array( // Simple products type
                                                    'key'           => '_sale_price',
                                                    'value'         => 0,
                                                    'compare'       => '>',
                                                    'type'          => 'numeric'
                                                ),
                                                array( // Variable products type
                                                    'key'           => '_min_variation_sale_price',
                                                    'value'         => 0,
                                                    'compare'       => '>',
                                                    'type'          => 'numeric'
                                                )
                                            )
                                    );
                                    $loop_off = new WP_Query( $loop_off_args );
                                    if ( $loop_off->have_posts() ) {
                                        while ( $loop_off->have_posts() ) : $loop_off->the_post();
                                            woocommerce_get_template_part( 'templates/content', 'product' );
                                        endwhile;
                                    } else {
                                        echo __( 'No products found' );
                                    }
                                    wp_reset_postdata();
                                    ?>
                                        <!-- <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>