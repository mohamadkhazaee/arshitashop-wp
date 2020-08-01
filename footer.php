<footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-social-media">
                    <?php $arshita_social_media=arshita_get_option('arshita_social_group'); ?>
                        <h5>شبکه های اجتماعی :</h5>
                        <div class="icons">
                            <a href="<?php echo $arshita_social_media[0]['facebook'] ?>">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                            <a href="<?php echo $arshita_social_media[0]['linked_in'] ?>">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                            <a href="<?php echo $arshita_social_media[0]['instagram'] ?>">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                            <a href="<?php echo $arshita_social_media[0]['whatsapp'] ?>">
                                <i class="mdi mdi-whatsapp"></i>
                            </a>
                            <a href="<?php echo $arshita_social_media[0]['twitter'] ?>">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                            <a href="<?php echo $arshita_social_media[0]['telegram'] ?>">
                                <i class="mdi mdi-telegram"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-md-6">
                    <div class="footer-social-media">
                        <h5>عضویت در خبرنامه سایت :</h5>
                        <form action="">
                            <div class="form-input">
                                <input type="email" placeholder="ایمیل خود را وارد کنید">
                                <button type="submit">عضویت </button>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                    <span class="footer-ul-header">آرشیتا کالا</span>
                    <?php if( has_nav_menu('footer_arshita')) : ?>
                      <?php
                    $config1 = array(
                        'container'       => 'ul',
                        'menu_class'      => 'footer-menu-1',
                        'menu_id'         => 'footer-1',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'theme_location'  => 'footer_arshita',

                    );
                 wp_nav_menu($config1); ?>
        <?php else : ?>
            <div>برای اینجا یک منو تعریف کنید</div>
        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                    <span class="footer-ul-header">حساب کاربری</span>
                    <?php if( has_nav_menu('footeraccount')) : ?>
                      <?php
                    $config2 = array(
                        'container'       => 'ul',
                        'menu_class'      => 'footer-menu-2',
                        'menu_id'         => 'footer-2',

                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'theme_location'  => 'footeraccount',

                    );
                 wp_nav_menu($config2); ?>
        <?php else : ?>
            <div>برای اینجا یک منو تعریف کنید</div>
        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                    <span class="footer-ul-header">دسترسی سریع</span>
                    <?php if( has_nav_menu('footer_quick_access')) : ?>
                      <?php
                    $config3 = array(
                        'container'       => 'ul',
                        'menu_class'      => 'footer-menu-3',
                        'echo'            => true,
                        'menu_id'         => 'footer-3',
                        'theme_location'  => 'footer_quick_access',

                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );
                 wp_nav_menu($config3); ?>
        <?php else : ?>
            <div>برای اینجا یک منو تعریف کنید</div>
        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                    <span class="footer-ul-header">خدمات مشتریان</span>
                    <?php if( has_nav_menu('footer_services')) : ?>
                      <?php
                    $config4 = array(
                        'container'       => 'ul',
                        'menu_class'      => 'footer-menu-4',
                        'theme_location'  => 'footer_services',

                        'menu_id'         => 'footer-4',

                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );
                 wp_nav_menu($config4); ?>
        <?php else : ?>
            <div>برای اینجا یک منو تعریف کنید</div>
        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- js includes -->
    
    <script type="text/javascript" src="<?php echo myRoot ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo myRoot ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="<?php echo myRoot ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo myRoot ?>/assets/js/owl.carousel.min.js"></script>

     <script type="text/javascript" src="<?php echo myRoot ?>/assets/js/main.js"></script>

    
</body>
</html>
<?php wp_footer() ?>