<div>
<div class="sidebar-categories">
	<h2 class="sidebar-header">
		<i class="mdi mdi-format-list-bulleted mdi-rotate-180"></i>
		دسته بندی محصولات
	</h2>
	<ul class="sidebar-categories-list">
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
<?php dynamic_sidebar("sidebar_shop"); ?>
</div>