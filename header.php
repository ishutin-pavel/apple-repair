<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appleWell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-menu__bg" role="navigation">
		<div class="container">
			<?php the_custom_logo(); ?>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav primary-menu',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
			<div class="navbar-phone__wrap" style="max-width: 290px;">
				<a class="navbar-phone__link" href="tel:<?php echo get_option('myPhone'); ?>"><?php echo get_option('myPhone'); ?></a><br>
				<span style="color:#fff; font-size: 9px;">Привокзальная площадь 1 а , Одинцовский пассаж, павильон 10</span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div><!-- container -->
	</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php
		if( !is_front_page() and function_exists('yoast_breadcrumb') ){ 
			yoast_breadcrumb('
			<p id="breadcrumbs" class="container breadcrumbs">','</p>
			');
		}
	?>