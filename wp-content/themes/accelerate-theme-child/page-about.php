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
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->
<div class="site-content"> 

		<section class="services-description">
			
			<?php query_posts('pagename=about'); ?>
			<?php while ( have_posts() ) : the_post();
				$title = get_field("title");
				$services_blurb = get_field("services_blurb");
				?>
		</section>
			<?php endwhile; //end of the loop. ?>
		    <?php wp_reset_query(); ?>

		    <div class="services-blurb">
		      	<h6><?php echo $title; ?></h6>
		      	<?php echo $services_blurb; ?>
		    </div>

		<section class="services">
		      	<?php query_posts('post_type=our_services&orderby=menu_order&order=ASC'); ?>
		      	<?php while ( have_posts() ) : the_post(); 
		       		$description = get_field("description");
		      		$service_image = get_field("service_image");
		      		$size = "medium"; 
		      		$alignment = get_field("alignment");
		      		?>

		  		<div class="individual-service">
		  		<figure class="service-image <?php echo $alignment; ?>">
		        <?php if($service_image) { ?>
		        <?php echo wp_get_attachment_image ( $service_image, $size ); ?>
		        <?php } ?>
				</figure>

			<article class="service-description">
					<h2><?php the_title(); ?></h2>
		     		<p><?php echo $description; ?></p>
		    </article>
		    	</div>
		     <?php endwhile; //end of the loop. ?>
		    <?php wp_reset_query(); // resets the altered query back to the original ?>
		    
		</section>

		<section class="call-to-action">
			<?php query_posts('pagename=about'); ?>
			<?php while ( have_posts() ) : the_post();
				$call_to_action = get_field("call_to_action");
				$contact_us = get_field("contact_us");
				?>
		
				<div class="pre-footer">
		      	<h2><?php echo $call_to_action; ?></h2>
		      	<div class="cta-button">
		      	
		      	<h3><a href="<?php echo $contact_us; ?>">Contact Us</a></h3>
		      	</div>
		      	</div>

			<?php endwhile; //end of the loop. ?>
		    <?php wp_reset_query(); ?>

		</section>
		</div>


		<?php get_footer(); ?>