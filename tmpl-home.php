<?php 
/*
Template Name: Home Page
*/

get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

	<div id="main" class="main-content full cf" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="home-content"> <?php the_content(); ?></div>
				<?php if ( has_nav_menu( 'home-nav' ) ) { ?>
					 <div class="home-menu">
						<?php echo '<div class="countme"><h5>Countdown to Festival</h5>';
						echo do_shortcode('[countdown date="11/14/2015"]');
						echo '</div>'; ?>
						<!--
						<nav role="navigation" class="inner-nav">
							<?php /* wp_nav_menu(array(
		    					'container' => false,                           // remove nav container
		    					'container_class' => 'home-menu',                 // class of container (should you choose to use it)
		    					'menu' => __( 'The Home Menu', 'bonestheme' ),  // nav name
		    					'menu_class' => 'home-menu-items',               // adding custom nav class
		    					'theme_location' => 'home-nav',                 // where it's located in the theme
		    					'before' => '',                                 // before the menu
			        			'after' => '',                                  // after the menu
			        			'link_before' => '',                            // before each link
			        			'link_after' => '',                             // after each link
			        			'depth' => 0,                                   // limit the depth of the nav
			    					'fallback_cb' => ''                             // fallback function (if there is one)
							));  wp_nav_menu(array(
		    					'container' => false,                           // remove nav container
		    					'container_class' => 'social-menu',                 // class of container (should you choose to use it)
		    					'menu' => __( 'The Social Menu', 'bonestheme' ),  // nav name
		    					'menu_class' => 'social-menu',               // adding custom nav class
		    					'theme_location' => 'social-nav',                 // where it's located in the theme
		    					'before' => '',                                 // before the menu
			        			'after' => '',                                  // after the menu
			        			'link_before' => '',                            // before each link
			        			'link_after' => '',                             // after each link
			        			'depth' => 0,                                   // limit the depth of the nav
			    					'fallback_cb' => ''                             // fallback function (if there is one)
							)); */ ?>
						</nav>-->
					</div>
				<?php } ?>

				

				

		<?php endwhile; else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div><!-- #main -->

	

	</div><!-- #inner-content -->
	<?php if ( function_exists('get_field') && get_field('call_to_action')) { ?>
		<div class="main-content full cf supplementary">
			<div class="wrap">
				<span class="primary cta"><?php the_field('call_to_action'); ?></span>
				<span class="secondary cta"><?php the_field('secondary_cta'); ?></span>
				<span class="tertiary cta"><?php the_field('tertiary_cta'); ?></span>
			</div>
		</div>

	<?php } ?>

</div>

<?php get_footer(); ?>
