<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="container-fluid">
            <div class="row" style="padding-top:100px">
             <?php echo woocommerce_breadcrumb(); ?> 
                <div class="col-12"><h1 class="page-title"><?php the_title(); ?></h1></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid" >
        <div class="row">
                <div class="col-12">
                <?php the_content(); ?>
                </div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php endwhile; ?>
    
<?php get_footer(); ?>