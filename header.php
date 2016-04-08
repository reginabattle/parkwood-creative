<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Parkwood Creative
 * @since Parkwood Creative
 */
?>
<!DOCTYPE html>
<html>
<head>
  <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
  <!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
  <!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/icons/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-152x152.png" />

  <title><?php wp_title(''); ?></title>
 	
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 	<?php if (is_front_page()) : ?>
		<style type="text/css">
			html, body {
				height: 100%;
				padding: 0;
				margin: 0;
			}
		</style>
 	<?php endif; ?>

 	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65249901-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?>>

	<!-- Header -->
	<div class="header-wrapper">
		<div class="header-inner row">

			<!-- Logo -->
			<header class="logo three columns">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo THEME_DIR; ?>/images/layout/logo-alt.svg" alt="Parkwood Creative" /></a></h1>
			</header>

			<a id="pull" class="menu-btn"></a>

			<!-- Navigation -->
			<nav class="main-nav eight columns offset-by-one">
				<?php wp_nav_menu( array( 
            'theme_location' => 'header-menu', 
            'container' => false,
            'menu_class' => 'block-grid'
          )); 
        ?>
			</nav>

		</div>
	</div>
	<!-- end header -->
