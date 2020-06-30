          
            <section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-eye-outline"></i>
                                        <h3>پر بازدیدترین ها</h3>
                                    </div>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                    <?php
                                $product_new_args = array(
                                    'post_type' => 'product',
                                    'meta_key' => 'views',
                                    'orderby'  => 'meta_value_num',
                                    'posts_per_page' => 20,
                                    'orderby' => 'date',
                                    'order'   => 'DESC'

                                    );
                                $product_news_loop = new WP_Query( $product_new_args );
                                if ( $product_news_loop->have_posts() ) {
                                    while ( $product_news_loop->have_posts() ) : $product_news_loop->the_post();
                                        wc_get_template_part( 'templates/content', 'product' );
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
                </div>
                            </section>