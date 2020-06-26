<?php get_header( ) ?>

<main>
            <section class="container-fluid" id="slider-section">
                <div class="row">
                    <div class="col-md-8">
                       <?php get_template_part('partials/main-slider') ?>
                    </div>
                    <div class="col-md-4">
                        <div class="slider-ad">
                            <a href="#">
                                <img src="<?php echo myRoot ?>/assets/img/slider-ad.png" alt="">
                            </a>
                            <a href="#">
                                <img src="<?php echo myRoot ?>/assets/img/slider-ad-1.png" alt="">
                            </a>
                           
                        </div>
                    </div>
                </div>
                <?php 
$descendant= array('child_of'=>54);
$categories = get_categories($descendant);
foreach($categories as $category) :
    echo $category->name;
endforeach;
?>

                            
            </section>
            <section class="loop-slider-type-1 bg-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                         <?php
                                        $categories = get_categories( array(
                                            'parent'=>$cat->'3'
                                        ) );

                                        $subcategories = array();

                                        foreach ( $categories as $category ) {
                                            $subcategories[] = $category;
                                        }
                                    ?>

                                    <?php  print_r($subcategories) ;              
 ?>
                                <h3 class="loop-slider-title">
                              <?php echo get_cat_name(3) ?>
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                             
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#mobile" role="tab">موبایل</a>
                                                </li>
                                                <!-- <li>
                                                    <a  data-toggle="tab" href="#tv" role="tab">سامسونگ</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#ps4" role="tab"> آبفون</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#camp" role="tab">شیائومی</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#laptop" role="tab">هواوی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#device" role="tab">آنر</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                                <img src="assets/img/phone.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a class="see-more" href="#">
                                    موارد بیشتر
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="home-tab">

                                 <div>
                                    <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

                                </div>
                            <div class="tab-pane fade" id="tv" role="tab" aria-labelledby="profile-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ps4" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item1.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ps4" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item3.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="camp" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item4.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="laptop" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="device" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-label-percent-outline mdi-rotate-180"></i>
                                        <h3>تخفیف ویژه</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>  <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-full">
                        <a href="#">
                            <img src="assets/img/ad-full2.jpg" alt="">
                        </a>
                    </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-1 bg-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                                <h3 class="loop-slider-title">
                                   مد و پوشاک
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#clothes-men" role="tab">مردانه</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-women" role="tab">زنانه</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#clothes-childern" role="tab">بچگانه</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-girls" role="tab">دخترانه</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#clothes-boys" role="tab">پسرانه</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                                <img src="assets/img/clothes.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a class="see-more" href="#">
                                    موارد بیشتر
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="home-tab">
        
                                    <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            <div class="tab-pane fade" id="clothes-men" role="tab" aria-labelledby="profile-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-women" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item1.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-children" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item3.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-boys" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item4.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-girls" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                          
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-categories">
                <div class="container-fluid">
                    <div class="loop-container">
                        <h3 class="loop-title">
                            دسته های مختلف کالا
                        </h3>
                        <div class="owl-container">
                            <div class="owl-loop-slider-categories owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-laptop-chromebook"></i>
                                            <h3 class="category-item-title">لپ تاپ</h3>
                                            <span> 18 محصول</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-home"></i>
                                            <h3 class="category-item-title">خانه و آشپزخانه</h3>
                                            <span> 92 محصول</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-wrench-outline"></i>
                                            <h3 class="category-item-title">ابزار آلات</h3>
                                            <span> 25 محصول</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-cellphone-iphone"></i>
                                            <h3 class="category-item-title">موبایل</h3>
                                            <span> 12 محصول</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-baby-carriage"></i>
                                            <h3 class="category-item-title">کودک و نوزاد</h3>
                                            <span> 3 محصول</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="category-item-icon">
                                            <i class="mdi mdi-soccer"></i>
                                            <h3 class="category-item-title">ورزشی</h3>
                                            <span> 3 محصول</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-new-box"></i>
                                        <h3>جدیدترین محصولات</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>  <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-4">
                       <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="#">
                                <img src="assets/img/ad14-1.jpg" alt="">

                               </a>       
                                             </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="#">
                                <img src="assets/img/ad14-2.jpg" alt="">

                               </a>                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="#">
                                <img src="assets/img/ad14-3.jpg" alt="">

                               </a>                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="#">
                                <img src="assets/img/ad14-4.jpg" alt="">

                               </a>                        </div>
                       </div>
                    </div>
                    </div>
                </div>
            </section>
            
            <section class="loop-slider-type3 bg-4">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                                <h3 class="loop-slider-title">
                                لوازم آشپزخانه
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#mobile" role="tab">موبایل</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#tv" role="tab">سامسونگ</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#ps4" role="tab"> آبفون</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#camp" role="tab">شیائومی</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#laptop" role="tab">هواوی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#device" role="tab">آنر</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                               <a href="#">
                                                <img src="assets/img/kitchen.png" alt="">
                                               </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="owl-loop-slider-type3-container">
                                    <div class="owl-loop-slider-type3-brands owl-carousel owl-theme">
                                        <div class="item">
                                                <div class="item-brand">
                                                    
                                                    <a href="#">
                                                        <img src="assets/img/brand2.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-brand">
                                                <a href="#">
                                                    <img src="assets/img/brand1.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-brand">
                                                <a href="#">
                                                    <img src="assets/img/brand3.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-brand">
                                                <a href="#">
                                                    <img src="assets/img/brand3.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <div class="tab-pane fade" id="tv" role="tab" aria-labelledby="profile-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ps4" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item1.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ps4" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item3.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="camp" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item4.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="laptop" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="device" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
            </section>
            <section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-chart-bar"></i>
                                        <h3>پرفروش ترین ها</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>  <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-1 bg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                                <h3 class="loop-slider-title">
                                   کمپ و سفر
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#clothes-men" role="tab">چادر و کیسه خواب</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-women" role="tab">اجاق و پخت و پز</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#clothes-childern" role="tab">کوله کوهنوردی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-girls" role="tab">ابزارآلات سفر</a>
                                                </li>
                                               
                                               
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                                <img src="assets/img/camping.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a class="see-more" href="#">
                                    موارد بیشتر
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="home-tab">
        
                                    <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            <div class="tab-pane fade" id="clothes-men" role="tab" aria-labelledby="profile-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-women" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item1.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-children" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item3.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-boys" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item4.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-girls" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                          
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-half">
                       <div class="row">
                           <div class="col-md-6">
                            <a href="#">
                                <img src="assets/img/ad12-1.jpg" alt="">

                               </a>
                           </div>
                           <div class="col-md-6">
                            <a href="#">
                                <img src="assets/img/ad-12-2.jpg" alt="">

                               </a>
                           </div>
                       </div>
                    </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-2">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-eye-outline"></i>
                                        <h3>پر بازدیدترین ها</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                    <div class="owl-loop-slider-type-2 owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item1.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>  <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="loop-slider-type-1 bg-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                                <h3 class="loop-slider-title">
                                  ورزش و سرگرمی
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#clothes-men" role="tab">انواع توپ</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-women" role="tab">لباس ورزشی</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#clothes-childern" role="tab">ابزار ورزشی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-girls" role="tab">ساک و کوله ورزشی</a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="tab" href="#clothes-girls" role="tab">ورزشی های فکری</a>
                                                </li>
                                               
                                               
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <div class="slider-loop-img">
                                                <img src="assets/img/tennis.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a class="see-more" href="#">
                                    موارد بیشتر
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="mobile" role="tabpanel" aria-labelledby="home-tab">
        
                                    <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item2.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item3.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item4.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item5.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <span class="product-off">20%</span>
                                                <div class="product-top">
                                                    
                                                    <img src="assets/img/product-item6.jpg" alt="">
                                                    <div class="product-overlay">
                                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                            <i class="mdi mdi-cart-outline"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                            <i class="mdi mdi-cards-heart"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                            <i class="mdi mdi-toggle-switch-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="product-permalink" href="#">
                                                    <div class="product-body">
                                                        <h4 class="product-title">
                                                         گوشی موبایل نوکیا
                                                        </h4>
                                                       <div class="price">
                                                            <del class="before">26800</del>
                                                            <span class="after">13750
                                                                <span style="font-size:12px">تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            <div class="tab-pane fade" id="clothes-men" role="tab" aria-labelledby="profile-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-women" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item1.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-children" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item3.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-boys" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item4.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="clothes-girls" role="tab" aria-labelledby="contact-tab">
                                <div class="owl-loop-slider-type-1 owl-carousel owl-theme">
                                        
                                    <div class="item">
                                        <div class="product-item">
                                            <span class="product-off">20%</span>
                                            <div class="product-top">
                                                
                                                <img src="assets/img/product-item5.jpg" alt="">
                                                <div class="product-overlay">
                                                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="مشاهده جزئیات" href="#">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست علاقه مندی" href="#">
                                                        <i class="mdi mdi-cards-heart"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" title="اضافه به لیست مقایسه" href="#">
                                                        <i class="mdi mdi-toggle-switch-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="product-permalink" href="#">
                                                <div class="product-body">
                                                    <h4 class="product-title">
                                                     گوشی موبایل نوکیا
                                                    </h4>
                                                   <div class="price">
                                                        <del class="before">26800</del>
                                                        <span class="after">13750
                                                            <span style="font-size:12px">تومان</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                          
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ad-rows">
                <div class="container-fluid">
                    <div class="ad-full">
                        <a href="#">
                            <img src="assets/img/ad-full.jpg" alt="">
                        </a>
                    </div>
                    </div>
                </div>
            </section>
            <div class="loop-slider-brands">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-menu-open"></i>
                                        <h3>برندهای ویژه</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                   <div class="owl-loop-slider-brands owl-carousel owl-theme">
                                       <div class="item">
                                           <a href="#">
                                               <img src="assets/img/brand1.png" alt="">
                                           </a>
                                       </div>
                                       <div class="item">
                                        <a href="#">
                                            <img src="assets/img/brand2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/brand3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/brand2.jpg" alt="">
                                        </a>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-slider-blog">
                <div class="container-fluid" >
                    <div class="loop-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="loop-header">
                                    <div class="loop-title">
                                        <i class="mdi mdi-pen"></i>
                                        <h3>اخبار و مطالب سایت</h3>
                                    </div>
                                    <a href="#" class="see-all">مشاهده همه</a>
                                </div>
                                <div class="owl-container">
                                   <div class="owl-loop-slider-brands owl-carousel owl-theme">
                                   <?php
                                        $args = array(
                                            'post_type' => 'post' 
                                        );
                                            // The Query
                                            $blog_index_query = new WP_Query( $args );
                                            
                                            // The Loop
                                            if ( $blog_index_query->have_posts() ) {
                                                while ( $blog_index_query->have_posts() ) {
                                                    $blog_index_query->the_post(); ?>
                                                    
                                                    <div class="item">
                                                      <a href="<?php the_permalink(); ?>">
                                               <div class="blog-item">
                                                <?php echo get_the_post_thumbnail(); ?> 
                                                <div class="item-body">
                                                    <h2 class="item-title">
                                                           <?php the_title(); ?>
                                                    </h2>
                                                    <div class="item-details">
                                                        <span class="item-author">
                                                            <i class="mdi mdi-account-edit"></i>
                                                            <span href="<?php the_author_url() ?>">
                                                            <?php the_author(); ?>
                                                            </span>
                                                        </span>
                                                        <div class="item-date">
                                                            <i class="mdi mdi-clock-outline"></i>
                                                            <span>
                                                            <?php echo get_the_date('Y-m-d') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                                 </a>
                                                     </div>
                                      
                                                  
                                                  
                                                    <?php    
                                                }
                                            }   ?>
                                          <?php  wp_reset_postdata();
                                            ?>
                                    
                             
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="footer-backTo-top">
                <a id="back-top-btn" href="#main-header">
                    <i class="mdi mdi-chevron-up-circle-outline"></i>
                   <span>
                    پرش به بالا 
                   </span>
                </a>
            </section>
            <section class="website-services">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="assets/img/service1.svg" alt="">
                                <h4>تحویل اکسپرس</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="assets/img/service2.svg" alt="">
                                <h4>پشتیبانی 24 ساعته</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="assets/img/service3.svg" alt="">
                                <h4> پرداخت در محل</h4>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="service-wrapper">
                                <img src="assets/img/service4svg.svg" alt="">
                                <h4>ضمانت اصل بودن</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

    <?php get_footer() ?>