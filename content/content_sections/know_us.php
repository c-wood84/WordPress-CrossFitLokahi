<?php

/* Content - Get To Know Us */

?>

<!-- === START ABOUT === -->
<?php

        if( get_row_layout() == 'know_us' ):
            $us_image = get_sub_field('us_image'); 
            $heading = get_sub_field('title_heading');
            $sub = get_sub_field('sub_heading');
            ?>
            
            <div class="about-section" id="about-section">
            <div class="container">
                <div class="site-title wow fadeInDown">
                <p> <?php echo $sub; ?> </p>
                <h1> <?php echo $heading; ?> </h1>
                <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
            </div>
            <div class="row">
                <div class="col-md-6 wow bounceInLeft">
                    <div class="img-box"><img src="<?php echo $us_image['url'] ?>" alt="<?php echo $us_image['alt'] ?>" title="<?php echo $us_image['title'] ?>" /></div>
                </div>

           <?php // check if the nested repeater field has rows of data
        if( have_rows('description') ): ?>
                <div class="col-md-6">
                <div class="services-mark-1">
                
                <?php 
                 // loop through the rows of data
                    while ( have_rows('description') ) : the_row();

                    //var
                    $icon = get_sub_field('icon');
                    $desc_heading = get_sub_field('heading');
                    $desc = get_sub_field('information'); ?>

                    <div class="one-service wow bounceInRight">
                        <img src="<?php echo $icon; ?>" alt="class" />
                        <h4><?php echo $desc_heading; ?></h4>
                        <p><?php echo $desc; ?></p>
                    </div>

               <?php endwhile; ?>
                </div>
                </div>
       <? endif; ?>

            </div>
        </div>
    </div>

        <?php endif; ?>
<!-- === END ABOUT === -->