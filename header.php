<?php
/*
 * Header for Smart Tutorials website.
 *
 * Displays all of the <head> and <header> sections and the opening <body> tag.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<meta charset="utf-8">
		<meta name="keywords" content="smart tutorials computer pc windows mac ios free online videos instructions guides">
    <meta name="description" content="Smart Tutorials provide free online guidance with the aim of helping anyone learn the basics of widely used software and other technology&period;">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    
    <?php wp_head(); ?>
    
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	</head>

	<body <?php body_class(); ?>>

	  <div class="wrapper">

			<header role="banner">

        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        
    		<nav class="top">
      		<ul>
        		<li><a href="#">Home</a></li>
        		<li><a href="#">About</a></li>
        		<li><a href="#">Tutorials</a></li>
        		<li><a href="#">Templates</a></li>
        		<li><a href="#">Contact</a></li>
      		</ul>
    		</nav>

    <div class="category">
      <img src="<?php bloginfo('template_directory'); ?>/images/desk-banner.jpg" alt="a desk with laptop, stationary and coffee laid out">
    </div>

  </header>
