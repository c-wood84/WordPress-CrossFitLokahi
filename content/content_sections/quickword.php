<?php

/* Content - Quick Word */

?>

<!-- === A WORD FROM KORTNEY === -->
<?php


        if( get_row_layout() == 'quickword' ):

            //var
            $heading = get_sub_field('main_heading');
            $sub = get_sub_field('sub_head');
            $desc = get_sub_field('paragraph_description'); ?>

            <div class="about-section wordFromKortney">
                <div class="container">
                    <div class="site-title wow">
                        <p><?php echo $sub; ?></p>
                        <h1><?php echo $heading; ?></h1>
                    </div>
                        <div class="paragraphBacking"><?php echo $desc; ?>
                        </div>
                </div>
            </div>

        <?php endif; ?>
<!-- === END WORD FROM KORTNEY === -->


            
            
            
            