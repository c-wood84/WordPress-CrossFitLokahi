<?php

/* Content - Harmony */

?>

<!-- === START HARMONY === -->
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
                    <!-- <form class="contact-form d-bg-c wow bounceInLeft">
                        <input type="text" name="name" class="d-border-c-f contact-form-line" placeholder="Name">
                        <input type="text" name="email" class="d-border-c-f contact-form-line" placeholder="Email Address">
                        <input type="text" name="subject" class="d-border-c-f contact-form-line" placeholder="Subject">
                        <textarea name="message" class="d-border-c-f contact-form-area" placeholder="Message"></textarea>
                        <p class="align-center"><input type="submit" value="Submit" class="form-send"></p>
                    </form> -->


                    <form class="contact-form d-bg-c wow bounceInLeft" id="contactForm"  name="sentmessage" novalidate="">
                        <div>
                            <div id="success"> </div> <!-- For success/fail messages -->
                        </div>

                        <div id="name-input">
                            <input type="text"  name="name" id="name" class="d-border-c-f contact-form-line" placeholder="Name">
                        </div>

                        <div id="email-input">
                            <input type="email"  name="email" id="email" class="d-border-c-f contact-form-line" placeholder="E-mail Address">
                        </div>

                        <div id="subject-input">
                            <input type="text"  name="subject" id="subject" class="d-border-c-f contact-form-line" placeholder="Subject">
                        </div>

                        <div id="message-textarea">
                            <textarea name="message"  id="message" class="d-border-c-f contact-form-area" placeholder="Message"></textarea>
                        </div>

                        <div>
                        <input type="submit" name="submit" class="btn btn-crossfit form-send" value="Send">
                        </div>
                    </form>

                </div>

                    <div class="map-location wow fadeInDown"></div>
            </div>
            <!-- END CONTACT SECTION -->

        <?php endif; ?>
<!-- === END HARMONY === -->