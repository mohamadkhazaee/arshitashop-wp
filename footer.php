<footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
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
                <div class="col-12 col-md-6">
                    <div class="footer-social-media">
                        <h5>عضویت در خبرنامه سایت :</h5>
                        <form action="">
                            <div class="form-input">
                                <input type="email" placeholder="ایمیل خود را وارد کنید">
                                <button type="submit">عضویت </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                        <ul>
                            <span class="footer-ul-header">آرشیتا کالا</span>
                            <li>
                                <a href="#">درباره ما</a>
                            </li>
                            <li>
                                <a href="#">خدمات ما</a>
                            </li>
                            <li>
                                <a href="#">مشتریان ما</a>
                            </li>
                            <li>
                                <a href="#">ارتباط با ما</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                        <ul>
                            <span class="footer-ul-header">خدمات مشتریان</span>
                            <li>
                                <a href="#">پرسش های متداول</a>
                            </li>
                            <li>
                                <a href="#">شرایط بازگرداندن کالا</a>
                            </li>
                            <li>
                                <a href="#">شرایط استفاده</a>
                            </li>
                        
                            
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                        <ul>
                            <span class="footer-ul-header">راهنمای خرید
                            </span>
                            <li>
                                <a href="#">تماس با ایران کالا</a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#">فرصت‌های شغلی</a>
                            </li>
                            <li>
                                <a href="#">اتاق خبر ایران کالا</a>
                            </li>
                            <li>
                                <a href="#">اتاق خبر ایران کالا</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="footer-ul">
                        <ul>
                            <span class="footer-ul-header">آرشیتا کالا</span>
                            <li>
                                <a href="#">درباره ما</a>
                            </li>
                            <li>
                                <a href="#">خدمات ما</a>
                            </li>
                            <li>
                                <a href="#">مشتریان ما</a>
                            </li>
                            <li>
                                <a href="#">ارتباط با ما</a>
                            </li>
                            
                        </ul>
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