<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package appleWell
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				
				<div class="row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

					endwhile; ?>
					</div><!-- .row -->

					<div class="row">
							<div class="col-sm-12">
					<?php
					/** Bootstrap 4 pagination
					* 	for WordPress
					*/
						if ( function_exists('wp_bootstrap_pagination') )
						wp_bootstrap_pagination();
					
					?>
						</div><!-- .col -->
					</div><!-- .row -->

	<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- row -->
</div><!-- container -->
<?php
get_footer();
