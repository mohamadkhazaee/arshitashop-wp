



            <section class="loop-slider-type-1 bg-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                           

                                <ul>
                                    <?php 
                                    
                                            $loop_category = get_term_by('slug' , 'camp' , 'product_cat');
                                            $category_id = $loop_category->term_id;
                                            $category_name = $loop_category->name;
                                            $thumbnail_id = get_woocommerce_term_meta( $loop_category->term_id, 'thumbnail_id', true );
                                            $category_image_url = wp_get_attachment_url( $thumbnail_id );
                                             $get_categories_type_1 = array(
                                                'taxonomy' => 'product_cat',
                                                'show_option_none' => '',
                                                'hide_empty' => false,
                                                'child_of' => $category_id ,
                                             );
                                           $subcats = get_terms($get_categories_type_1);                                        
                                    ?>
                                       
                                </ul>

                                <h3 class="loop-slider-title">
                                    <?php echo $category_name ?>
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                             <?php
                                             $active_first_child_count = 0;
                                             foreach($subcats as $cat){
                                                 
                                                 ?>
                                                <li >
                                                    <a class="<?php if($active_first_child_count ==0 ){echo "active" ; $active_first_child_count++;} ; ?>" data-toggle="tab" href="#<?php  echo $cat->slug ?>" role="tab"><?php echo $cat->name ?></a>
                                                </li>
                                                <?php
                                             }
                                             ?>
                                                
                                                <!-- <li>
                                                    <a  data-toggle="tab" href="#tv" role="tab">سامسونگ</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#ps4" role="tab"> آبفون</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#camp" role="tab">شیائومی</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#laptop" role="tab">هواوی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#device" role="tab">آنر</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                                <img src="<?php echo $category_image_url ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a class="see-more" href="#">
                                    موارد بیشتر
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                           

                                <?php
                                 $slider_active_count = 0 ;
                                 $slider_number_counter = 0; 
                                foreach($subcats as $cat) {
                                   ?>




<div class="tab-pane fade <?php if($slider_active_count ==0 ){echo 'show active' ; $slider_active_count++;} ?>" id="<?php echo $cat->slug ; ?>" role="tabpanel" aria-labelledby="home-tab">

<div>
   <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
       <?php 
       $loop_cat_id = get_the_ID();
         $loop_type_1_args = array(
            'post_type'      => 'product',
            'posts_per_page' => 12,
             'product_cat'  => $cat->slug
        );
       $loop_type_1 = new WP_Query( $loop_type_1_args );
       if ( $loop_type_1->have_posts() ) {
           while ( $loop_type_1->have_posts() ) : $loop_type_1->the_post();
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
      <?php } ?>
                                
                            
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>