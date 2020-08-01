<section class="loop-slider-categories">
                <div class="container-fluid">
                    <div class="loop-container">
                        <h3 class="loop-title">
                            دسته های مختلف کالا
                        </h3>
                        <div class="owl-container">
                           
                        <div class="owl-loop-slider-categories owl-carousel owl-theme">
                        <?php
                            $loop_slider_categories = array(
                                'taxonomy' => 'product_cat',
                                'show_option_none' => '',
                                'hide_empty' => true,
                                'child_of' => 0,
                                'depth' => 0,
                                'parent' =>0
                             );
                           $loop_slider_sub_cats = get_terms($loop_slider_categories); 
                             foreach($loop_slider_sub_cats as $cat){
                                $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
                                            $category_image_url = wp_get_attachment_url( $thumbnail_id );
                                            $term_link = get_term_link($cat->term_id , 'product_cat');
                                            ?>
                                 <div class="item">
                                    <a href="<?php echo $term_link ?>">
                                        <div class="category-item-icon">
                                            <img class="loop-slider-categories-img" src="<?php echo $category_image_url ?>" alt="">
                                            <h3 class="category-item-title"><?php echo $cat->name ?></h3>
                                            <span><?php echo $cat->count; ?></span>
                                        </div>
                                    </a>
                                </div>
                                <?php
                             }
                          ?>
                      
                    </div>
                </div>
            </section>