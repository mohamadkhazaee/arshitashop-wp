<?php
    define("myRoot",get_template_directory_uri());
	@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
	//////////////////////////////////////////////////    
						//post view count
	function get_post_view($post_id){
		if(intval($post_id)){
			$post_view = get_post_meta( $post_id , 'views' , true);
			return intval($post_view);
		}
		return 0;
	};
	function set_post_view($post_id){
		if(intval($post_id)){
			$views = get_post_view($post_id);
			$views++;
			update_post_meta($post_id , 'views' , $views);
		}
	}




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
			   add_theme_support( 'woocommerce' );

			   add_theme_support( 'post-thumbnails' );
				add_image_size( 'slider-thumbnails', 850 , 350 , true );

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
add_action('admin_init' , 'slider_url_metabox');

add_action('save_post' , 'save_slider_details');


require_once __DIR__ . '/CMB2-develop/init.php';
require_once dirname( __FILE__ ) . '/cmb2-options.php';


add_action( 'cmb2_admin_init', 'cmb2_slider_url_metabox' );
function cmb2_slider_url_metabox(){
	$cmb = new_cmb2_box( array(
		'id'            => 'slider_url_field',
		'title'         => __( 'لینک اسلادیر', 'cmb2' ),
		'object_types'  => array( 'slider_post_type' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	$cmb->add_field( array(
		'name' => __( 'لینک را وارد کنید :', 'cmb2' ),
		'desc' => __( 'لینک صفحه مورد نظر  (optional)', 'cmb2' ),
		'id'   => 'slider_url',
		'type' => 'text_url',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );
};


















///////////////////////////////////////////////////////////////////

function arshitashop_widget_setup(){
	register_sidebar( array(
        /* translators: %d: Sidebar number. */
        'name'          => 'سایدبار 1',
        'id'            => "sidebar-$i",
        'description'   => 'توضیحات',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
};
add_action('init' , 'arshitashop_widget_setup');


	
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
	//////////////////////////////////////////////////  
		
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
	//////////////////////////////////////////////////  
				