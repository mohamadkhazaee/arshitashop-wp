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