<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
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

//   


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
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
<?php
