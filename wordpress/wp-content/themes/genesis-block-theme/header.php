<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Genesis Block Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="page" class="hfeed site container">
	<div id="content" class="site-content">
		<header id="masthead" class="site-header">
			<div class="inner_header">
				<div class="header_logo">
					<a href="/">
						<img src="/wp-content/uploads/2022/08/dyne_logo.svg"/>
					</a>
				</div>
			</div>
		</header><!-- .site-header -->
