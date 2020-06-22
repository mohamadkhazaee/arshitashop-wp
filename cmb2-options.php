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
    $arshita_logo_group = $cmb->add_field( array(
        'id'          => 'arshita_logo_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'شبکه های اجتماعی'
        ),
    ) );

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



// //    slider_dinamic
//     $arshita_slider_group = $cmb->add_field( array(
//         'id'          => 'arshita_slider_group',
//         'type'        => 'group',
//         'description' =>  '',
//         'repeatable'  => true, // use false if you want non-repeatable group
//         'options' => array(
//             'group_title'=>'اسلایدر اصلی سایت{#}',
//             'add_button'=>'ایجاد اسلایدر جدید',
//             'remove_button'=>'حدف اسلایدر',
//             'sortable'=>true,
//         ),
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'عنوان محصول',
//         'id'   => 'title',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'توضیحات محصول',
//         'id'   => 'desc',
//         'type' => 'textarea',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'عناون دکمه سمت رات',
//         'id'   => 'first_button',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'لینک دکمه سمت رات',
//         'id'   => 'link_first_button',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'عنوان دکمه سمت چپ',
//         'id'   => 'second_button',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'لینک دکمه سمت چپ',
//         'id'   => 'link_second_button',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_group, array(
//         'name' => 'تصویر محصول',
//         'id'   => 'image_slider',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );




    //    top_product_static
    $arshita_top_product_group = $cmb->add_field( array(
        'id'          => 'arshita_top_product_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'محصول شماره {#}',
            'add_button'=>'افزودن تاپ محصول جیدید',
            'remove_button'=>'حدف محصول',
            'sortable'=>true,
        )
    ) );
    $cmb->add_group_field( $arshita_top_product_group, array(
        'name' => 'عنوان محصول',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_top_product_group, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'text',
    ) );
    $cmb->add_group_field($arshita_top_product_group, array(
        'name' => 'الینک محصول',
        'type' => 'text_url',
        'id'   => 'link'
    ) );
    $cmb->add_group_field( $arshita_top_product_group, array(
        'name' => 'تصویر محصول',
        'id'   => 'image',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );






//     ///comments_customer
//     $arshita_customer_group = $cmb->add_field( array(
//         'id'          => 'arshita_customer_group',
//         'type'        => 'group',
//         'description' =>  '',
//         'repeatable'  => true, // use false if you want non-repeatable group
//         'options' => array(
//             'group_title'=>'نظر شماره {#}',
//             'add_button'=>'افزودن سرویس جیدید',
//             'remove_button'=>'حدف سرویس',
//             'sortable'=>true,
//         )
//     ) );
//     $cmb->add_group_field( $arshita_customer_group, array(
//         'name' => 'نام کاربر',
//         'id'   => 'name_customer',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_customer_group, array(
//         'name' => 'توضیحات',
//         'id'   => 'text_customer',
//         'type' => 'textarea_small',
//     ) );
//     $cmb->add_group_field( $arshita_customer_group, array(
//         'name' => 'تصویر کاربر',
//         'id'   => 'image_customer',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );





//comarcal
    $arshita_ads_group = $cmb->add_field( array(
        'id'          => 'arshita_ads_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'جدیدترین محصول شماره {#}',
            'add_button'=>'افزودن جیدیدترین محصول',
            'remove_button'=>'حدف جدیدترین محصول',
            'sortable'=>true,
        )
    ) );

    $cmb->add_group_field( $arshita_ads_group, array(
        'name' => 'تصویرجدیدترین محصول',
        'id'   => 'image',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );
    $cmb->add_group_field( $arshita_ads_group, array(
        'name' => 'نام جدیدترین محصول',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_ads_group, array(
        'name' => 'توضیحات جدیدترین محصول',
        'id'   => 'text',
        'type' => 'textarea_small',
    ) );
    $cmb->add_group_field( $arshita_ads_group, array(
        'name' => 'لینک جدیدترین محصول',
        'id'   => 'link_ads',
        'type' => 'text_url',
    ) );




//     //support
//     $arshita_support_group = $cmb->add_field( array(
//         'id'          => 'arshita_support_group',
//         'type'        => 'group',
//         'description' =>  '',
//         'repeatable'  => true, // use false if you want non-repeatable group
//         'options' => array(
//             'group_title'=>'برند شماره{#}',
//             'add_button'=>'افزودن برند',
//             'remove_button'=>'حدف برند',
//             'sortable'=>true,
//         )
//     ) );


//     $cmb->add_group_field( $arshita_support_group, array(
//         'name' => 'تصویر بنر',
//         'id'   => 'image_id',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );
//     $cmb->add_group_field( $arshita_support_group, array(
//         'name' => 'لینک برند',
//         'id'   => 'link',
//         'type' => 'text_url',
//     ) );




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
    'id'   => 'name',
    'type' => 'textarea_small',
    ) );
    $cmb->add_group_field( $arshita_address_group, array(
    'name' => 'شماره تلفن ',
    'id'   => 'tell',
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




// //    slider_main
//     $arshita_slider_main_group = $cmb->add_field( array(
//         'id'          => 'arshita_slider_main_group',
//         'type'        => 'group',
//         'description' =>  '',
//         'repeatable'  => true, // use false if you want non-repeatable group
//         'options' => array(
//             'group_title'=>'اسلایدر اصلی سایت{#}',
//             'add_button'=>'ایجاد اسلایدر جدید',
//             'remove_button'=>'حدف اسلایدر',
//             'sortable'=>true,
//         ),
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عنوان محصول',
//         'id'   => 'title1',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'توضیحات محصول',
//         'id'   => 'desc1',
//         'type' => 'textarea',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عناون دکمه سمت رات',
//         'id'   => 'first_button1',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'لینک دکمه سمت رات',
//         'id'   => 'link_first_button1',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عنوان دکمه سمت چپ',
//         'id'   => 'second_button1',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'لینک دکمه سمت چپ',
//         'id'   => 'link_second_button1',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'تصویر محصول',
//         'id'   => 'image_slider1',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );



//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عنوان محصول',
//         'id'   => 'title2',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'توضیحات محصول',
//         'id'   => 'desc2',
//         'type' => 'textarea',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عناون دکمه سمت رات',
//         'id'   => 'first_button2',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'لینک دکمه سمت رات',
//         'id'   => 'link_first_button2',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'عنوان دکمه سمت چپ',
//         'id'   => 'second_button2',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'لینک دکمه سمت چپ',
//         'id'   => 'link_second_button2',
//         'type' => 'text_url',
//     ) );
//     $cmb->add_group_field( $arshita_slider_main_group, array(
//         'name' => 'تصویر محصول',
//         'id'   => 'image_slider2',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );




// //offer(spesial-offer)
//     $arshita_offer_group = $cmb->add_field( array(
//         'id'          => 'arshita_offer_group',
//         'type'        => 'group',
//         'description' =>  '',
//         'repeatable'  => false, // use false if you want non-repeatable group
//         'options' => array(
//             'group_title'=>'سفارش ویژه',
//         )
//     ) );
//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'عنوان محصول',
//         'id'   => 'name',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'تاریخ شروع تخفیف',
//         'id'   => 'start_timestamp',
//         'type' => 'text_datetime_timestamp',
//     ) );
//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'مدت زمان تخفیف',
//         'id'   => 'duration',
//         'type' => 'text_small',
//         'desc' => 'min',
//     ) );

//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'عنوان دکمه',
//         'id'   => 'button',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'لینک دکمه',
//         'id'   => 'link_button',
//         'type' => 'text_url',
//     ) );

//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'توضیح کوتاه محصول',
//         'id'   => 'desc',
//         'type' => 'text',
//     ) );
//     $cmb->add_group_field( $arshita_offer_group, array(
//         'name' => 'تصویر محصول',
//         'id'   => 'image_id',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );
    
    
    
    
    
    
    
    //    slider_singlepage
    $arshita_baner_group = $cmb->add_field( array(
        'id'          => 'arshita_baner_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'  بنر صفحه های داخلی سایت تماس با ما ، درباره ما ',
            'sortable'=>true,
        ),
    ) );
    $cmb->add_group_field( $arshita_baner_group, array(
        'name' => 'تصویر محصول',
        'id'   => 'image_baner',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود فایل' // Change upload button text. Default: "Add or Upload File"
        ),
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
    


 $arshita_aboutheading_group = $cmb->add_field( array(
        'id'          => 'arshita_aboutheading_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'صفحه درباره ما بخش اهداف باکس اول {#}',
            'add_button'=>'افزودن باکس جدید',
            'remove_button'=>'حدف باکس',
            'sortable'=>true,
        )
    ) );
    $cmb->add_group_field( $arshita_aboutheading_group, array(
        'name' => 'عنوان باکس',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_aboutheading_group, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'text',
    ) );
    $cmb->add_group_field($arshita_aboutheading_group, array(
        'name' => 'نام آیکن',
        'type' => 'text',
        'id'   => 'icon'
    ) );
//     $cmb->add_group_field( $arshita_aboutheading_group, array(
//         'name' => 'تصویر محصول',
//         'id'   => 'image',
//         'type' => 'file',
// //        hidden url
//         'options' => array(
//             'url' => false, // Hide the text input for the url
//         ),
//         'text'    => array(
//             'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
//         ),
//     ) );


 $arshita_abouttime_group = $cmb->add_field( array(
        'id'          => 'arshita_abouttime_group',
        'type'        => 'group',
        'description' =>  '',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title'=>'صفحه درباره ما بخش اعضای تیم ما باکس  {#}',
            'add_button'=>'افزودن باکس جدید',
            'remove_button'=>'حدف باکس',
            'sortable'=>true,
        )
    ) );
    $cmb->add_group_field( $arshita_abouttime_group, array(
        'name' => 'نام شخص',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $arshita_abouttime_group, array(
        'name' => 'سمت شخص',
        'id'   => 'desc',
        'type' => 'text',
    ) );
  
    $cmb->add_group_field( $arshita_abouttime_group, array(
        'name' => 'تصویرشخص',
        'id'   => 'image',
        'type' => 'file',
//        hidden url
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلوذ فایل' // Change upload button text. Default: "Add or Upload File"
        ),
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