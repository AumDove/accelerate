<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="error-content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Looks like you missed your ride to the proper page!!', 'accelerate-theme-child' ); ?></h1>
				
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Perhaps you should follow a menu link... Just sayin&rsquo;', 'accelerate-theme-child' ); ?></h2>
					<p><?php _e( 'For instance, we have a pretty RAD <a href="http://localhost:35496/blog/">BLOG</a> ... start there!!', 'accelerate-theme-child' ); ?></p>

					
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>