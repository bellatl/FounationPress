<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header hide-for-print" role="banner">
		<?php get_template_part( 'template-parts/head' ); ?>
		<div class="show-for-small-only">
			<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
		</div>
		<div class="row nav hide-for-print">
		<nav id="site-navigation" class="main-navigation top-bar hide-for-small-only hide-for-print" role="navigation">
			<div class="top-bar-left">
				<ul class="menu hide-for-print">
						<?php foundationpress_top_bar_r(); ?>
				</ul>
			</div>
			<div class="top-bar-right">
			</div>
		</nav>
		</div>
	</header>

	<section>
		<?php do_action( 'foundationpress_after_header' );
