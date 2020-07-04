<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
	<div class="container-fluid single-product-page">

	
	<div class="row">

	
	<div class="col-12 col-lg-3">
	<div class="sidebar-menus">
	<h2 class="sidebar-header">
		<i class="mdi mdi-format-list-bulleted mdi-rotate-180"></i>
		دسته بندی محصولات
	</h2>
	<ul class="sidebar-menu-list">
	<?php 
	 $get_product_categoires_args = array(
		'taxonomy' => 'product_cat',
		'show_option_none' => '',
		'hide_empty' => false,
		'depth'   => 0,
		'parent'   => 0,
	 );
   $product_categoires = get_terms($get_product_categoires_args);
   foreach($product_categoires as $cat){
	   ?>
	   <li>
	   <a href="<?php echo get_term_link( $cat->term_id,'product_cat' ) ?>">
	   		<?php echo $cat->name ?>
	   </a>
	   </li>
	   <?php
   }
	?>
</div>
	</div>



	<div class="col-12 col-lg-9">
	<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	
	
	</div>

</div>
</div>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
