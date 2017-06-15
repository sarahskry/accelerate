<?php
/**
 * Error - file not found
 *
 * 
 */

get_header();
?>

<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="fun-image">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/robot.png" alt="robot">
		</div>
		</div>

		<article class="text-container">

			<section class="entry entry-single">
				<h2> Whoops, Took a Wrong Turn...</h2>
				<p><?php esc_html_e( 'Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.'); ?></p>
				<p>Feel free to take a look around our <a href="http://localhost:8888/accelerate-skillcrush/blog/"><span>blog</span></a> or some of our featured <a href="http://localhost:8888/accelerate-skillcrush/case-studies/mailchimp-campaign/"><span>work</span>.</a></p>
			</section>

		</article>
		</div>
	</section>


<?php get_footer(); ?>
