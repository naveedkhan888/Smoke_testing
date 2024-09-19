<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restimo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

 <style type="text/css">
 	.tcg-smoke-cursor {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  opacity: 0.07;
  z-index: 999;
  pointer-events: none;
}
 </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<canvas class="tcg-smoke-cursor" id="tcg-smoke-cursor"></canvas>
<div id="page" class="site">

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	get_template_part( 'template-parts/content', 'header' );
} ?>
<!-- #site-content-open -->
<div id="content" class="site-content">
	<?php restimo_page_header(); ?>