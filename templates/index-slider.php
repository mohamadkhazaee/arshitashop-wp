
 <section class="container-fluid" id="slider-section">
                <div class="row">
                    <div class="col-md-8">


                    <?php
$slider_loop = new WP_Query( array(
    'post_type' => 'slider_post_type',
    'posts_per_page' => -1,
    'orderby'        =>'menu_order'
  )
);
?>

<div class="owl-container">
<div class="owl-main-slider owl-carousel owl-theme">

<?php while ( $slider_loop->have_posts() ) : $slider_loop->the_post(); ?>
                              <?php  $post_meta_url = get_post_meta($post->ID , 'slider_url_metabox_field' , true) ?>
                                <div class="item">
                                    <a href="<?php echo $post_meta_url ?>" >
                                      <?php echo the_post_thumbnail( 'slider-thumbnails' ) ?>
                                    </a>
                                   </div>

<?php endwhile; wp_reset_query(); ?>


</div>
 </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slider-ad">
                            <a href="#">
                                <img src="<?php echo myRoot ?>/assets/img/slider-ad.png" alt="">
                            </a>
                            <a href="#">
                                <img src="<?php echo myRoot ?>/assets/img/slider-ad-1.png" alt="">
                            </a>
                           
                        </div>
                    </div>
                </div>
                <?php 
$descendant= array('child_of'=>54);
$categories = get_categories($descendant);
foreach($categories as $category) :
    echo $category->name;
endforeach;
?>

                            
            </section>










