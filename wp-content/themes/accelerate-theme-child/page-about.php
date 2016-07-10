<?php
/**
 * The template for displaying the about page
 *
 * 
 *
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>


<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
				<p><a href="http://localhost:35496/">Accelerate</a> is a strategy and marketing agency <br>located in the heart of NYC. Our goal is to build <br>businesses by making our clients visible and <br>making their customers smile.</p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->

<!-- start our services -->
<section class="services">
	<div class="site-content">
		<h4 id="services-hero-head">Our Services</h4>
		<p id="services-hero-text">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
		<ul class="services-list">
		<?php query_posts('posts_per_page=1&post_type=services&name=one'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li>
				<figure class="col-sm-odd">
					<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				</figure>
				<figure class="col-lg-odd">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content() ; ?>
				</figure>
			</li>
			
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			
			<?php query_posts('posts_per_page=1&post_type=services&name=two'); //second loop ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li>
				
				<figure class="col-lg-even">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content() ; ?>
				</figure>
				<figure class="col-sm-even">
					<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				</figure>
			</li>
			
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			
			<?php query_posts('posts_per_page=1&post_type=services&name=three'); //third loop ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li>
				<figure class="col-sm-odd">
					<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				</figure>
				<figure class="col-lg-odd">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content() ; ?>
				</figure>
				
			</li>
			
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			
			<?php query_posts('posts_per_page=1&post_type=services&name=four'); //fourth loop ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li>
				
				<figure class="col-lg-even">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content() ; ?>
				</figure>
				<figure class="col-sm-even">
					<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				</figure>
			</li>
			
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>

</section>
<section class="about-button">
	
	<div>
		<h2>Interested in working with us?</h2>
		<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	</div>
	

</section>

<?php get_footer(); ?>