<?php

/* Content - Contact */

?>

<!-- START CONTACT SECTION -->
<?php
        if( get_row_layout() == 'contact' ):

            //var
            $sub = get_sub_field('sub_heading');
            $heading = get_sub_field('main_heading'); ?>

            
            <!-- START CONTACT SECTION -->
            <div class="contact-section" id="contact-section">
                <div class="container">
                    <div class="site-title wow bounceInRight">
                        <p><?php echo $sub; ?></p>
                        <h1><?php echo $heading; ?></h1>
                        <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
                    </div>
                    <div class="contact-form d-bg-c wow bounceInLeft">
                    <?php
	
                        echo do_shortcode('[contact-form-7 id="147" title="CrossFit Lokahi Contact Form"]');
                        ?>
                    </div>

                    <!-- <form class="contact-form d-bg-c wow bounceInLeft">
                        <input type="text" name="name" class="d-border-c-f contact-form-line" placeholder="Name">
                        <input type="text" name="email" class="d-border-c-f contact-form-line" placeholder="Email Address">
                        <input type="text" name="subject" class="d-border-c-f contact-form-line" placeholder="Subject">
                        <textarea name="message" class="d-border-c-f contact-form-area" placeholder="Message"></textarea>
                        <p class="align-center"><input type="submit" value="Submit" class="form-send"></p>
                    </form> -->

                </div>

                    <div class="map-location wow fadeInDown"></div>
            </div>
            

        <?php endif; ?>
<!-- END CONTACT SECTION -->