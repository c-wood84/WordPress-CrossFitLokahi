<?php

/* Content - Membership */

?>

<?php
    // check current row layout
    if( get_row_layout() == 'membership' ):

        //var
        $heading = get_sub_field('main_heading');
        $sub = get_sub_field('sub_heading'); ?>

        <div class="pricing-section" id="shop-section">
            <div class="container">
                <div class="site-title wow fadeInDown">
                    <p><?php echo $sub; ?></p>
                    <h1><?php echo $heading; ?></h1>
                    <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
                </div>

        <?php // check if the nested repeater field has rows of data
        if( have_rows('rate_boxes') ): ?>
                <div class="row">
                <?php // loop through the rows of data
                while ( have_rows('rate_boxes') ) : the_row();

                //var
                $boxtitle = get_sub_field('box_title');
                $boxtitlecolor = get_sub_field('box_title_color');
                $boxbg = get_sub_field('box_bg');
                $price = get_sub_field('price');
                $pricebg = get_sub_field('price_bg');
                $boxanimation = get_sub_field('box_animation'); 
                $greentext = get_sub_field('text_color');
                ?>
                
                    <div class="col-md-4 wow <?php echo $boxanimation; ?>">
                        <div class="pricing-table <?php echo $boxtitlecolor; ?> <?php echo $boxbg; ?>">
                            <h2 class="pricing-table-name"><?php echo $boxtitle; ?></h2>
                            <div class="pricing-table-price <?php echo $greentext; ?> <?php echo $pricebg; ?>">$<?php echo $price; ?> / <span>per month</span></div>

                            <?php // check if the nested repeater field has rows of data
                            if( have_rows('membership_list') ): ?>
                                <ul class="pricing-table-stuff">

                                <?php // loop through the rows of data
                                while ( have_rows('membership_list') ) : the_row();

                                //var
                                $features = get_sub_field('mem_features'); ?>

                                <li><?php echo $features; ?></li>

                                <?php endwhile; ?>
                                </ul>
                                
                            <?php endif; ?>

                        </div>
                    </div>

            <?php endwhile; ?>
            </div>
    <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>