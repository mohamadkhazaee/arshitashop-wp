
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
                              <?php  $post_meta_url = get_post_meta($post->ID , 'slider_url' , true) ?>
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
                        <?php $arshita_slider_ads=arshita_get_option('arshita_slider_ads'); ?>
                            <a href="<?php echo $arshita_slider_ads[0]['ad-1-link'] ?>">
                                <img src="<?php echo $arshita_slider_ads[0]['ad-1-img'] ?>" alt="">
                            </a>
                            <a href="<?php echo $arshita_slider_ads[0]['ad-2-link'] ?>">
                                <img src="<?php echo $arshita_slider_ads[0]['ad-2-img'] ?>" alt="">
                            </a>
                           
                        </div>
                    </div>
                </div>
             

                            
            </section>










