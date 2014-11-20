<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- FAVICONS GENERATED HERE: http://realfavicongenerator.net/ -->
		<!-- upload a 270px x 270px PNG -->
		<!-- use this as the path: <?php echo get_template_directory_uri(); ?>/library/images/favicons -->
		<?php $iconpath = get_template_directory_uri() . '/library/images/favicons'; ?>
		<link rel="shortcut icon" href="<?php echo $iconpath; ?>/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $iconpath; ?>/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $iconpath; ?>/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $iconpath; ?>/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $iconpath; ?>/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $iconpath; ?>/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $iconpath; ?>/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $iconpath; ?>/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $iconpath; ?>/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php echo $iconpath; ?>/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="<?php echo $iconpath; ?>/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo $iconpath; ?>/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo $iconpath; ?>/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo $iconpath; ?>/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#ffeec6">
		<meta name="msapplication-TileImage" content="get_template_directory_uri(); ?>/library/images/favicons/mstile-144x144.png">
		<meta name="msapplication-square70x70logo" content="get_template_directory_uri(); ?>/library/images/favicons/mstile-70x70.png">
		<meta name="msapplication-square150x150logo" content="get_template_directory_uri(); ?>/library/images/favicons/mstile-150x150.png">
		<meta name="msapplication-square310x310logo" content="get_template_directory_uri(); ?>/library/images/favicons/mstile-310x310.png">
		<meta name="msapplication-wide310x150logo" content="get_template_directory_uri(); ?>/library/images/favicons/mstile-310x150.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script type="text/javascript">
		//uncomment and change this to false if you're having trouble with WOFFs
		//var woffEnabled = true;
		//to place your webfonts in a custom directory 
		//uncomment this and set it to where your webfonts are.
		//var customPath = "/themes/fonts";
		</script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/fonts/TexasGunFest.com.js"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?>>
		<a class="skip" href="#content">Skip to Content</a>

		<div id="container">

			<header class="header" role="banner">

				<div class="toggle-content clearfix">
						<?php if ( has_nav_menu( 'main-nav' ) ) { ?>
						<nav role="navigation" id="my-menu">
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => '',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => '',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => ''                             // fallback function (if there is one)
								)); ?>
						</nav>
					<?php } ?>   
				</div>

				<div id="inner-header" class="wrap cf">
					
					<a href="#my-menu" class="menu-toggler"><i class="fa fa-bars"></i></a>
					<a href="<?php echo home_url(); ?>" id="logo" rel="nofollow" title="<?php bloginfo('name'); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/tiff-logo.png" alt="<?php bloginfo('name'); ?>" /></a>

					<?php $desc = get_bloginfo('description'); 
					if ($desc && is_front_page() ) { ?>
						<span class="site-description"><img src="<?php echo get_template_directory_uri(); ?>/library/images/shoot-shop-buy.png" alt="<?php echo $desc; ?>" /></span>
					<?php } ?>		

					

					<?php if ( has_nav_menu( 'main-nav' ) && !is_front_page() ) { ?>
						<div class="topmenu">
							<nav role="navigation">
								<?php wp_nav_menu(array(
		    					'container' => false,                           // remove nav container
		    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
		    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
		    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
		    					'theme_location' => 'main-nav',                 // where it's located in the theme
		    					'before' => '',                                 // before the menu
			        			'after' => '',                                  // after the menu
			        			'link_before' => '',                            // before each link
			        			'link_after' => '',                             // after each link
			        			'depth' => 0,                                   // limit the depth of the nav
			    					'fallback_cb' => ''                             // fallback function (if there is one)
									)); ?>
							</nav>
						</div>	
					<?php } ?>

					
							

				</div>

				

				<script type="text/javascript">
					jQuery(document).ready(function($) {
					      
				      jQuery("#my-menu").mmenu({
			             classes: "mm-zoom-page mm-zoom-menu mm-zoom-panels"
			         });

				      jQuery("#my-button").click(function() {
				         jQuery("#my-menu").trigger("open.mm");
				      });

				    });

				</script>
			</header>
