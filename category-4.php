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
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
					<div class="your-model">Выбирите модель:</div>
				</header><!-- .page-header -->
				
				<div class="row">
					<div class="owl-carousel owl-theme 
						<?php 
							if( is_category(2) ) { echo "owl-repair-iphone"; }
							if( is_category(3) ) { echo "owl-repair-ipad"; }
							if( is_category(4) ) { echo "owl-repair-mac"; }
						?>
					">
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

						<div class="repair-carousel__item">

						<?php
							if ( has_post_thumbnail()) { 
								$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
								$post_img_src = $src[0];
							} else $post_img_src = "/wp-content/themes/apple/images/closed.jpg;"; ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<img src="<?php echo $post_img_src; ?>" alt="<?php the_title_attribute(); ?>">
							</a>
							

							<a href="<?php the_permalink(); ?>">
								<?php the_title( '<div class="repair-carousel__title">', '</div>' ); ?>
							</a>
						</div><!-- repair-carousel__item -->

				<? endwhile; ?>
					</div><!-- .owl-carousel -->
				</div><!-- .row -->

	<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>


			</main><!-- #main -->
		</div><!-- #primary -->
</div><!-- container -->
<?php
get_footer();
