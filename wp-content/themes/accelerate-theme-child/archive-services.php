<?php
/**
 * The template for displaying the archive of case studies
 *
 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); 
		$image_1 = get_field('image_1');
		$size = "full";
		$services = get_field('services');?>

		<article class="services-archive">
			<aside class="services-sidebar-archive">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt(); ?>
				
			</aside>
			<div class="services-images-archive">
				
				<?php if($image_1) { 
					echo wp_get_attachment_image ( $image_1, $size ); 
				} ?>
			</a>				
		</div>
	</article>
<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>