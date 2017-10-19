<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crossfitLokahi
 */

?>

	</div><!-- #content -->

<?php wp_footer(); ?>

<?php 

//var
$footer = get_field('footer_copy');

?>

		<!-- === START FOOTER === -->
        <footer class="footer wow fadeInUp">
            <div class="container">
                <div class="logo wow bounceInRight"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lokahilogoaltfooter.png" alt="logo" /></div>
                <ul class="socials wow bounceInLeft">
                    <li><a href="https://www.facebook.com/crossfitlokahi" class="d-text-c-h d-border-c-h"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://plus.google.com/+CrossFitLokahiWoodstock/about" class="d-text-c-h d-border-c-h"><i class="fa fa-google-plus"></i></a></li>
                    
                </ul>
                <a href="http://journal.crossfit.com/start.tpl?version=CFJ-white123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/white-125x63.png" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a>
                <p class="copywrite"><?php echo $footer; ?></p>
            </div>
        </footer>
        <!-- === END FOOTER === -->
    </div>
</div>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/modernizr.custom.63321.js" type="text/javascript"></script>
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/waypoints.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/placeholder.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/masonry.pkgd.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.swipebox.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/wow.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/knob.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.counterup.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/options.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/plugins.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/color-box/color-js.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/color-box/farbtastic/farbtastic.js" type="text/javascript"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-63183988-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>
