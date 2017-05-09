<?php
/*
Template Name: About
Template Post Type: page
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero-about'>
				<h3><span style="color:#45ac9d">Accelerate</span> is a strategy and marketing agency located in the
				heart of NYC. Our goal is to build businesses by making our clients visible and
				making their customers smile.</h3>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->

<section class="our-services">
<div class="site-content">



<?php get_footer(); ?>