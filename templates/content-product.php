<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( 'item', $product ); ?>>
<div class="product-item">
												<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
                                                <div class="product-top">
                                                    <?php do_action( 'woocommerce_before_shop_loop_item_title' ) ?>
                                                    <div class="product-overlay">
                                                   
                                                    <a data-toggle="tooltip" title="افزودن به سبد خرید" href="<?php echo $product->add_to_cart_url(); ?>">
                                                            <i class="mdi mdi-cart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="<?php echo the_permalink(); ?>">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                                      
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                  
															<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
                                                   
                                                       <div class="price">
														   <?php do_action('woocommerce_after_shop_loop_item_title') ?>
                                                            <!-- <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                </a>
</div>
</div>