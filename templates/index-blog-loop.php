 <div class="loop-slider-blog">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-pen"></i>
                                        <h3>اخبار و مطالب سایت</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                   <div class="owl-loop-slider-brands owl-carousel owl-theme">
                                   <?php
                                        $args = array(
                                            'post_type' => 'post' ,
                                            'category_name' => 'blog',
                                        );
                                            // The Query
                                            $blog_index_query = new WP_Query( $args );
                                            
                                            // The Loop
                                            if ( $blog_index_query->have_posts() ) {
                                                while ( $blog_index_query->have_posts() ) {
                                                    $blog_index_query->the_post(); ?>
                                                    
                                                    <div class="item">
                                                      <a href="<?php the_permalink(); ?>">
                                               <div class="blog-item">
                                                <?php echo get_the_post_thumbnail(); ?> 
                                                <div class="item-body">
                                                    <h2 class="item-title">
                                                           <?php the_title(); ?>
                                                    </h2>
                                                    <div class="item-details">
                                                        <span class="item-author">
                                                            <i class="mdi mdi-account-edit"></i>
                                                            <span href="<?php the_author_url() ?>">
                                                            <?php the_author(); ?>
                                                            </span>
                                                        </span>
                                                        <div class="item-date">
                                                            <i class="mdi mdi-clock-outline"></i>
                                                            <span>
                                                            <?php echo get_the_date('Y-m-d') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                                 </a>
                                                     </div>
                                      
                                                  
                                                  
                                                    <?php    
                                                }
                                            }   ?>
                                          <?php  wp_reset_postdata();
                                            ?>
                                    
                             
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>