<?php

/* Content - Schedule */

?>

<!-- === START SCHEDULE === -->
<?php
        if( get_row_layout() == 'schedule' ):

            //var
            $sub = get_sub_field('subtext');
            $heading = get_sub_field('heading'); 
            $cal = get_sub_field('calendar');
            ?>

            <div class="classes-section" id="classes-section" data-theme-plugin="slider" data-theme-item=".slide" data-theme-next=".slide-next" data-theme-prev=".slide-prev" data-theme-container=".slide-wrapper">
                <div class="container">
                    <div class="site-title wow bounceInRight">
                        <p><?php echo $sub; ?></p>
                        <h1><?php echo $heading; ?></h1>
                        <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> </div>
                        <h5>Please note that unexpected class changes/cancellations will be posted on our <a href="https://www.facebook.com/crossfitlokahi">Facebook page</a></h5>
                    </div>
                </div>
                <!-- <div class="calendar-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lokahi-class-calendar-30189.png" />
                </div> -->

                <div class="timetable calendar-live">
                    <div class="container">
                        <?php echo $cal; ?>
                        <?php
	
                        echo do_shortcode('[calendar id="144"]');
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
<!-- === END HARMONY === -->