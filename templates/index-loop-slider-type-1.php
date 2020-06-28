<section class="loop-slider-type-1 bg-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="loop-slider-tabs">
                           

                                <ul>
                                    <?php 
                                    
                                            $loop_category = get_term_by('slug' , 'mobile' , 'product_cat');
                                            $category_id = $loop_category->term_id;
                                            $category_name = $loop_category->name;
                                            $thumbnail_id = get_woocommerce_term_meta( $loop_category->term_id, 'thumbnail_id', true );
                                            $category_image_url = wp_get_attachment_url( $thumbnail_id );
                                             $get_categories_type_1 = array(
                                                'taxonomy' => 'product_cat',
                                                'show_option_none' => '',
                                                'hide_empty' => false,
                                                'child_of' => $category_id ,
                                             );
                                           $subcats = get_terms($get_categories_type_1);                                        
                                    ?>
                                       
                                </ul>

                                <h3 class="loop-slider-title">
                                    <?php echo $category_name ?>
                                </h3>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="slider-loop-menu nav nav-tabs" id="loop-slider-type-1-1" role="tablist">
                                             <?php foreach($subcats as $cat){
                                                 
                                                 ?>
                                                <li >
                                                    <a class="active" data-toggle="tab" href="#<?php echo $cat->slug ?>" role="tab"><?php echo $cat->name ?></a>
                                                </li>
                                                <?php
                                             }
                                             ?>
                                                
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
                                                <img src="<?php echo $category_image_url ?>" alt="">
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
                                <?php foreach($subcats as $cat) {
                                    $slider_active_count = 0 ;
                                   ?>
<div class="tab-pane fade" id="<?php echo $cat->slug ; ?>" role="tabpanel" aria-labelledby="home-tab">

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
      <?php } ?>
                                
                            
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>