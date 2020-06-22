<?php
    define("myRoot",get_template_directory_uri());
	
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////    
                //menus//////
     function myThemeSetup(){
    		  //in here we write code we want to execute when thme is being loaded
    		   register_nav_menu('MainMenu' , 'منوی اصلی');
				}
	function slider_post_type() {

					register_post_type('slider_post_type',
						array(
							'labels'      => array(
								'name'          =>'اسلایدر',
								'singular_name' => 'اسلایدر',
								'add_new'       => 'افزودن اسلاید جدید',
								'add_new_item'  => 'افزودن اسلایدر جدید',
								'all_items'     => 'نمایش همه اسلایدها'
								
							),
								'description' => 'اسلایدر اصلی سایت',
								'public'      => true,
								'has_archive' => true,
								'supports'    =>array('thumbnail' , 'title'),
								'menu_icon'   => 'dashicons-format-gallery'
						)
					);
				};

				
				add_action('init', 'slider_post_type');
add_action('after_setup_theme' , 'myThemeSetup');
add_theme_support( 'post-thumbnails' );
	add_image_size( 'slider-thumbnails', 850 , 350 , true );



add_action('admin_init' , 'slider_url_metabox');
function slider_url_metabox(){
	add_meta_box('slider_url' , 'آدرس  وارد کنید' , 'slider_url_metabox_field' , 'slider_post_type' , 'normal' , 'high');
};

function slider_url_metabox_field(){
	global $post;
	$data = get_post_custom($post->ID);
	$val =isset($data['slider_url_metabox_field']) ? esc_attr( $data['slider_url_metabox_field'][0] ) : 'no value';
	echo ' <input type="text" value="'.$val.'" name="slider_url_metabox_field" id="slider_url_metabox_field" /> ' ;
}
function save_slider_details(){
	global $post;
	if(define('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return $post->ID;
	}
	update_post_meta($post->ID , 'slider_url_metabox_field' , $_POST['slider_url_metabox_field']);
};
add_action('save_post' , 'save_slider_details');


require_once __DIR__ . '/CMB2-develop/init.php';
require_once dirname( __FILE__ ) . '/cmb2-options.php';




