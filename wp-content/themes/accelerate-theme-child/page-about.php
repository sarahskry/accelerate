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

		<section class="individual-services">
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

		<section class="pre-footer">
		                <h2 class="interested">Interested in working with us? </h2> 
		              	<a id="contact-button" class="button" href="<?php echo home_url(); ?>/contact">Contact</a>
		</section>

		</div>

		<?php get_footer(); ?>