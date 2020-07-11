<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action( 'cmb2_admin_init', 'arshita_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function arshita_register_theme_options_metabox() {

    /**
     * Registers options page menu item and form.
     */
    $cmb = new_cmb2_box( array(
        'id'           => 'arshita_option_metabox',
        'title'        => esc_html__( 'قالب آرشیتا', 'arshita' ),
        'object_types' => array( 'options-page' ),

        /*
         * The following parameters are specific to the options-page box
         * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
         */

        'option_key'      => 'arshita_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'arshita' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'arshita' ), // The text for the options-page save button. Defaults to 'Save'.
    ) );

    /*
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */

//    $cmb_options->add_field( array(
//        'name' => __( 'Test Text', 'arshita' ),
//        'desc' => __( 'field description (optional)', 'arshita' ),
//        'id'   => 'test_text',
//        'type' => 'text',
//        'default' => 'Default Text',
//    ) );
//
//    $cmb_options->add_field( array(
//        'name'    => __( 'Test Color Picker', 'arshita' ),
//        'desc'    => __( 'field description (optional)', 'arshita' ),
//        'id'      => 'test_colorpicker',
//        'type'    => 'colorpicker',
//        'default' => '#bada55',
//    ) );
    $group_field_id = $cmb->add_field( array(
        'id'          => 'header_sec',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'group_title'=>'تنظیماب هدر'
        ),
    ) );


//    logo link
  

    //top header
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'لینک لوگو',
        'id'   => 'logo-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'آپلود لوگو',
        'id'   => 'logo',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );



    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    $arshita_slider_ads = $cmb->add_field( array(
        'id'          => 'arshita_slider_ads',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'تبلیعات بالای سایت کتار اسلایدر اصلی'
        ),
    ) );

  
    $cmb->add_group_field( $arshita_slider_ads, array(
        'name' => 'لینک تبلیغ اول',
        'id'   => 'ad-1-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_slider_ads, array(
        'name' => 'آپلود تبلیغ اول',
        'id'   => 'ad-1-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );

  
    $cmb->add_group_field( $arshita_slider_ads, array(
        'name' => 'لینک تبلیغ دوم',
        'id'   => 'ad-2-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_slider_ads, array(
        'name' => 'آپلود تبلیغ دوم',
        'id'   => 'ad-2-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////






    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    $arshita_row_1_ad = $cmb->add_field( array(
        'id'          => 'arshita_row_1_ad',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'سطر اول طبلیغات (اندازه کامل)'
        ),
    ) );

  
    $cmb->add_group_field( $arshita_row_1_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-1-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_1_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-1-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );



    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////







    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    $arshita_row_2_ad = $cmb->add_field( array(
        'id'          => 'arshita_row_2_ad',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'سطر دوم طبلیغات (اندازه یک چهارم )'
        ),
    ) );

  
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-2-1-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-2-1-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );

      
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-2-2-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-2-2-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


      
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-2-3-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-2-3-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


      
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-2-4-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_2_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-2-4-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );




    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////





    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    $arshita_row_3_ad = $cmb->add_field( array(
        'id'          => 'arshita_row_3_ad',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'سطر سوم طبلیغات (اندازه یک دوم )'
        ),
    ) );

  
    $cmb->add_group_field( $arshita_row_3_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-3-1-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_3_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-3-1-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );

      
    $cmb->add_group_field( $arshita_row_3_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-3-2-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_3_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-3-2-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


      



    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////







    
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////



    $arshita_row_4_ad = $cmb->add_field( array(
        'id'          => 'arshita_row_4_ad',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'سطر چهارم طبلیغات (اندازه کامل  )'
        ),
    ) );

  
    $cmb->add_group_field( $arshita_row_4_ad, array(
        'name' => 'لینک تبلیغ ',
        'id'   => 'row-4-ad-link',
        'type' => 'text_url',
    ) );


    //logo setting
    $cmb->add_group_field( $arshita_row_4_ad, array(
        'name' => 'آپلود تبلیغ ',
        'id'   => 'row-4-ad-img',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );



    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////







    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////










    $arshita_logo_group = $cmb->add_field( array(
        'id'          => 'arshita_logo_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'شبکه های اجتماعی'
        ),
    ) );

//    sociale link
    $arshita_social_group = $cmb->add_field( array(
        'id'          => 'arshita_social_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'شبکه های اجتماعی'
        ),
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'فیسبوک',
        'id'   => 'facebook',
        'type' => 'text_url',
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'لینکدین ',
        'id'   => 'linked_in',
        'type' => 'text_url',
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'تویتر',
        'id'   => 'twitter',
        'type' => 'text_url',
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'تلگرام',
        'id'   => 'telegram',
        'type' => 'text_url',
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'اینستاگرام',
        'id'   => 'instagram',
        'type' => 'text_url',
    ) );
    $cmb->add_group_field( $arshita_social_group, array(
        'name' => 'واتساپ',
        'id'   => 'whatsapp',
        'type' => 'text_url',
    ) );

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
    //content _ us
    $arshita_address_group = $cmb->add_field( array(
    'id'          => 'arshita_address_group',
    'type'        => 'group',
    'description' =>  '',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options' => array(
    'group_title'=>'روش های ارتباط با ما',
    )
    ) );
    $cmb->add_group_field( $arshita_address_group, array(
    'name' => 'نشانی',
    'id'   => 'address',
    'type' => 'textarea_small',
    ) );
    $cmb->add_group_field( $arshita_address_group, array(
    'name' => 'شماره موبایل ',
    'id'   => 'mobile_number',
    'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_address_group, array(
        'name' => 'شماره ثابت ',
        'id'   => 'phone_number',
        'type' => 'text',
        ) );
    $cmb->add_group_field( $arshita_address_group, array(
    'name' => 'آدرس ایمیل',
    'id'   => 'email',
    'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_address_group, array(
    'name' => 'contact shortcut',
    'id'   => 'contact_form',
    'type' => 'text',
    ) );

    //about_us
    $arshita_about_us_group = $cmb->add_field( array(
    'id'          => 'arshita_about_us_group',
    'type'        => 'group',
    'description' =>  '',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options' => array(
    'group_title'=>'صفحه درباره ما ',
    )
    ) );
    $cmb->add_group_field( $arshita_about_us_group, array(
    'name' => 'متن درباره ما',
    'id'   => 'about_us',
    'type' => 'textarea',
    ) );
}

















/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function arshita_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'arshita_options', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'arshita_options', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}