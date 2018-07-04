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

			<?php query_posts('cat=2,-9'); if ( have_posts() ) : ?>

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


<section class="problem">
	<h2 class="problem__title">или укажите проблему</h2>
	<div class="row">
				<?php
				$problem_posts = new WP_Query('cat=9');
				while ( $problem_posts->have_posts() ) : $problem_posts->the_post();
					//Получаем иконку поста
					if ( has_post_thumbnail()) {
						$post_thumbnail_id =  get_post_thumbnail_id();
						$problem_img_src = wp_get_attachment_image_src( $post_thumbnail_id, 'small');
						$problem_img_src = $problem_img_src[0];
					}
				?>
				<div class="col-sm-4 problem__item">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<img class="problem__img" src="<?php echo $problem_img_src; ?>" alt="<?php the_title_attribute(); ?>">
						<span class="problem__title">
							<?php echo wp_get_attachment_caption( $post_thumbnail_id ); ?>
						</span>
					</a>
				</div>

				<? endwhile; ?>
	</div><!-- .row -->
</section><!-- problem -->

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
