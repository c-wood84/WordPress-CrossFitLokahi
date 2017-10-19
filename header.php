<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crossfitLokahi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <?php echo esc_url( home_url( '/' ) ); ?> -->


	<!-- ======================================================================
                                Style CSS + Google Fonts
    ======================================================================= -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Swipebox css -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/swipebox.css" rel="stylesheet" />

    <!-- Bootstrap Core css -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet" />

	<!--  <link href="css/style.css" rel="stylesheet" /> --> 
	
	<!-- Animate css -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet" />

	<!-- Font-Awesome css -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.css" rel="stylesheet" />

    <!-- <link href="css/custom.css" rel="stylesheet" /> -->
	
	<!-- Color-Box css -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/color-box/color-style.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/color-box/farbtastic/farbtastic.css" rel="stylesheet" />

	

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="home-page" <?php body_class(); ?>>

	<div class="load-complete">
        <div class="load-position">
            <div class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/helmettransparent1.png" alt="logo" /></div>
            <h6>Please wait, loading...</h6>
            <div class="loading">
                <div class="loading-line"></div>
                <div class="loading-break loading-dot-1"></div>
                <div class="loading-break loading-dot-2"></div>
                <div class="loading-break loading-dot-3"></div>
            </div>
        </div>
    </div>

<!-- === START HEADER === -->
<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 110px;">
<header class="header sticky-bar headerColor">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" type="image/x-icon" />
    <div class="container">
        <div class="row">
 
            <div class="col-md-3 bigLogo">
                <div class="logo"><a class="to-top" href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/helmettransparent1.png" alt="logo" /></a></div>
            </div>
            <div class="col-md-3 smallLogo">
                <div class="logo"><a class="to-top" href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/shakaheadIcon.png" alt="logo" /></a></div>
            </div>
            <div class="col-md-9">
                <nav class="menu">
                    <div class="responsive-menu 
                         -h"><i class="fa fa-bars"></i></div>
                    <ul>
                        <li class="active navbar-Shadow"><a class="d-text-c-h" data-anchor="slider-section" href="/">Home</a></li>
                        <li class="navbar-Shadow"><a class="d-text-c-h" data-anchor="about-section" href="#about-section">About</a></li>                     
                        <li class="navbar-Shadow"><a class="d-text-c-h" data-anchor="trainers-section" href="#trainers-section">Coaches</a></li>
                        <li class="navbar-Shadow"><a class="d-text-c-h" data-anchor="classes-section" href="#classes-section">Schedule</a></li>
                        <li class="navbar-Shadow"><a class="d-text-c-h" data-anchor="shop-section" href="#shop-section">Rates</a></li>
                        <li class="navbar-Shadow"><a class="d-text-c-h" data-anchor="contact-section" href="#contact-section">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
</div>
<!-- === END HEADER === -->

<div class="box-wide">
        <!-- === START CONTENT === -->
        <div class="content">


<div id="content" class="site-content">

<?php 
    // check if the nested repeater field has rows of data
    if( have_rows('hero') ): ?>
    <section class="slider-section desktopSlider" id="slider-section">
        <div class="slider" data-theme-plugin="slider" data-theme-item=".slide" data-theme-next=".slide-right" data-theme-prev=".slide-left" data-theme-container=".slide-wrapper">
            <ul class="slider-arrows">
                <li class="slide-left"><i class="fa fa-angle-left"></i></li>
                <li class="slide-right"><i class="fa fa-angle-right"></i></li>
            </ul>
        <div class="bg-cover"></div>

    <?php 
    // loop through the rows of data
    while ( have_rows('hero') ) : the_row(); 
    
    //var
    $banner = get_sub_field('banner');
    $gymname = get_sub_field('gym_name');
    $heading = get_sub_field('heading');
    $info = get_sub_field('info');
    $address = get_sub_field('address');
    $phone = get_sub_field('phone');
    
    
    ?>
    <ul class="slide-wrapper">
        <li class="slide">
            <div class="slide-text">
                <h4 class="wow rollIn" data-wow-delay="1s"><?php echo $gymname; ?></h4>
                <h2 class="wow fadeInDown" data-wow-delay="1s"><?php echo $heading; ?></h2>
                <h5 class="wow bounceInRight" data-wow-delay="1s"><?php echo $info; ?></h5>
                <h4 class="wow rollIn" data-wow-delay="1s"><?php echo $address; ?></h4>
                <h2 class="wow rollIn" data-wow-delay="1s"><?php echo $phone; ?></h2>
            <div class="clearfix"></div>
    </div>

        <img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>" title="<?php echo $banner['title']; ?>" class="backgroundSlider">
        </li>
    </ul>
    <?php endwhile; ?>



    </section>
            <section class="slider-section mobileSlider" id="slider-section">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Lokahi Image Mobile.png" alt="CrossFit Competition 30189 Woodstock Ga" title="CrossFit Lokahi Competition - The Kimura brothers" class="backgroundSlider">
            </section>
    <?php endif; ?> 

           