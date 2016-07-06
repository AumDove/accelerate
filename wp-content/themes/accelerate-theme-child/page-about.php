<?php
/**
 * The template for displaying the about page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
				<p>Accelerate is a strategy and marketing agency <br>located in the heart of NYC. Our goal is to build <br>businesses by making our clients visible and <br>making their customers smile.</p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->

<!-- start our services -->
<section class="services">
	<div class="site-content services">
		<h4>Our Services</h4>
	
		<ul class="about-services">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li class="individual-about-services">
				<figure>
					<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				</figure>
			
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>

</section>


<?php get_footer(); ?>