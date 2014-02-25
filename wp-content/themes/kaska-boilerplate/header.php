<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
		<?php wp_head(); ?>
	</head>
	<body>