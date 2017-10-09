<?php

/* Content Statistics */

?>
<!-- === START STATISTICS === -->
<?php
		// check current row layout
        if( get_row_layout() == 'statistics' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('statistic_box') ): ?>

                 <div class="statistics-section">
                    <div class="container">
                        <div class="row">

            <?php
                // loop through the rows of data
			    while ( have_rows('statistic_box') ) : the_row();
                    //var
                    $bgimage = get_sub_field('statistic_image');
                    $numberic = get_sub_field('numberic_header');
                    $subtext = get_sub_field('statistic_subtext');
                    $animation = get_sub_field('animation'); ?>

                            <div class="col-md-4 wow <?php echo $animation; ?>">
                                <div class="statistic" style="background-image: url('<?php echo $bgimage; ?>');">
                                <div class="bg-cover"></div>
                                <div class="statistic-cut"></div>
                                <h3 class="d-text-c"><span class="counter-all numericHeader"><?php echo $numberic; ?></span></h3>
                                <h6><?php echo $subtext; ?></h6>
                                </div>
                            </div>
				<?php endwhile; ?>

                        </div>
                    </div>
                </div>
			<?php endif; ?>
        <?php endif; ?>
<!-- === END STATISTICS === -->