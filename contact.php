<?php /* Template Name: contact */ ?>

<?php get_header(); ?>

<main class="contact-page container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="contact-ways">
                <h3>راه های ارتباطی</h3>
                <div class="contact-way">
                <?php $contact_details=arshita_get_option('arshita_address_group'); ?>
                    <div class="contact-icon">
                        <i class="mdi mdi-phone-classic"></i>
                    </div>
                    <div class="contact-content">
                        <span>
                            <?php echo $contact_details[0]['phone_number']; ?>
                        </span>
                    </div>
                </div>
                <div class="contact-way">
                    <div class="contact-icon">
                        <i class="mdi mdi-cellphone-iphone"></i>
                    </div>
                    <div class="contact-content">
                        <span>
                        <?php echo $contact_details[0]['mobile_number']; ?>
                        </span>
                    </div>
                </div>
                <div class="contact-way">
                    <div class="contact-icon">
                        <i class="mdi mdi-email"></i>
                    </div>
                    <div class="contact-content">
                        <span>
                        <?php echo $contact_details[0]['email']; ?>
                        </span>
                    </div>
                </div>
                <div class="contact-way">
                    <div class="contact-icon">
                        <i class="mdi mdi-map-marker"></i>
                    </div>
                    <div class="contact-content">
                        <span>
                        <?php echo $contact_details[0]['address']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="contact-form">
                <h3>فرم تماس با ما</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="contact-map">
            <h3>
                <i class="mdi mdi-map-legend"></i>
                <span>نقشه گوگل</span>
            </h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7578532069615!2d51.41187261460512!3d35.682963937485596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e012567286dbd%3A0xf9c2a10a708da5a1!2sCity%20Park!5e0!3m2!1sen!2s!4v1594450796214!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>