<?php

/* Content - Coaches */

?>

<?php

		// check current row layout
        if( get_row_layout() == 'coaches' ):

            //var
            $heading = get_sub_field('main_heading');
            $sub = get_sub_field('sub_head'); ?>

            <div class="trainers-section carousel" id="trainers-section" data-theme-plugin="carousel" data-theme-container=".carousel-items" data-theme-item="&gt;div" data-theme-rotate="false" data-theme-autoplay="false" data-theme-hide-effect="false">
                <div class="container">
                    <div class="site-title wow bounceInLeft">
                        <p><?php echo $sub; ?></p>
                        <h1><?php echo $heading; ?></h1>
                        <div class="site-dots d-text-c carousel-arrows"><i class="fa prev fa-angle-left"></i> <i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> <i class="fa next fa-angle-right"></i></div>
                    </div>

        	<?php // check if the nested repeater field has rows of data
        	if( have_rows('coach_boxes') ): ?>
                <div class="row carousel-items">
			 	<?php // loop through the rows of data
			    while ( have_rows('coach_boxes') ) : the_row();
                    //var
                    $image = get_sub_field('coach_image');
                    $coachname = get_sub_field('coach_name');
                    $coachtitle = get_sub_field('coach_title');
                    $icon = get_sub_field('icon');
                    $fblink = get_sub_field('facebook_link');
                    $animation = get_sub_field('animation');
                    $info = get_sub_field('coach_info'); ?>


                    <div class="col-md-4">
                        <div class="trainer wow <?php echo $animation; ?>">
                            <ul class="socials d-bg-c wow fadeInUp">
                                <li><a href="<?php echo $fblink; ?>"><i class="fa <?php echo $icon; ?>"></i></a></li>
                            </ul>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                <div class="trainer-info">
                                    <h4><?php echo $coachname; ?><span><?php echo $coachtitle; ?></span></h4>
                                    <p><?php echo $info; ?></p>
                                </div>
                        </div>
                    </div>
                    
				<?php endwhile; ?>
                </div>
                        
            <?php endif; ?>
            </div>
        </div>
       <?php endif; ?>