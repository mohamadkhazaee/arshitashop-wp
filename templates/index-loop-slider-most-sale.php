<section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-chart-bar"></i>
                                        <h3>پرفروش ترین ها</h3>
                                    </div>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                    <?php
                                    $loop_most_sale_args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => 12,
                                        'meta_key' => 'total_sales',
                                        'orderby' => 'meta_value_num'
                                    );
                                    $loop_most_sale = new WP_Query( $loop_most_sale_args );
                                    if ( $loop_most_sale->have_posts() ) {
                                        while ( $loop_most_sale->have_posts() ) : $loop_most_sale->the_post();
                                            woocommerce_get_template_part( 'templates/content', 'product' );
                                        endwhile;
                                    } else {
                                        echo __( 'No products found' );
                                    }
                                    wp_reset_postdata();
                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>