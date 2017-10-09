<?php

/* Content - Harmony */

?>

<!-- === START HARMONY === -->
<?php
        if( get_row_layout() == 'harmoney' ):

            //var
            $banner = get_sub_field('banner');
            $sub = get_sub_field('subtext');
            $heading = get_sub_field('heading'); ?>

            <div class="purchase-section wow fadeInDown lokahiBanner animated" style="background-image: url('<?php echo $banner; ?>');">
                <div class="bg-cover">
                    <div class="container">
                        <div class="site-title">
            <p><?php echo $sub; ?></p>
            <h1 class="reponsiveTextForBanner"><?php echo $sub; ?></h1>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
<!-- === END HARMONY === -->