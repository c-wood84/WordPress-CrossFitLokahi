<?php
/*
 Template Name: Home Page
 */

get_header(); ?>


<?php 

	// are there any rows within within our flexible content?
	if( have_rows('home_content') ): 

		// loop through all the rows of flexible content
		while ( have_rows('home_content') ) : the_row();

            // STATISTICS
            if( get_row_layout() == 'statistics' ) {
				get_template_part('content/content_sections/statistics', 'none');
            }

            // GET TO KNOW US
            if( get_row_layout() == 'know_us' ) {
				get_template_part('content/content_sections/know_us', 'none');
            }

            // HARMONEY
            if( get_row_layout() == 'harmoney' ) {
				get_template_part('content/content_sections/harmony', 'none');
            }

            // A QUICK WORD
            if( get_row_layout() == 'quickword' ) {
				get_template_part('content/content_sections/quickword', 'none');
            }

            // COACHES
            if( get_row_layout() == 'coaches' ) {
				get_template_part('content/content_sections/coaches', 'none');
            }

            // SCHEDULE
            if( get_row_layout() == 'schedule' ) {
			get_template_part('content/content_sections/schedule', 'none');
            }

            // MEMBERSHIP
            if( get_row_layout() == 'membership' ) {
				get_template_part('content/content_sections/membership', 'none');
            }

            //CONTACT
           if( get_row_layout() == 'contact' ) {
				get_template_part('content/content_sections/contact', 'none');
           }

		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

?>



        </div>
        <!-- === END CONTENT === -->

<?php
get_footer();
