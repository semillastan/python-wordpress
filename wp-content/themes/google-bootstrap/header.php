<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Python Wordpress
 * @subpackage python
 * @since 2013 1.0
 */
 
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title( '|', true, 'right' ); ?> Python Short Course</title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="wp-content/themes/eosu/css/bootstrap-responsive.css" rel="stylesheet">
	
    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    
    <!-- Google Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/todc-bootstrap.css">
    
    <!-- Google Prettify -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/prettify.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/sunburst.css">-->

	<!-- Customised Stylesheet -->    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style.css">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>

<body <?php body_class(); ?>>
	<div class="body-container">
		<div class="row-fluid header">
			<div class="span12">
				<div class="navbar navbar-masthead">
					<div class="navbar-inner">
						<a class="brand" href="<?php echo home_url(); ?>">Python <small>(integrated with Django Web Framework)</small></a>
						<!-- Everything you want hidden at 940px or less, place within here -->
						<?php wp_nav_menu( array( 
							'theme_location' => 'header-menu',
							'items_wrap' => '<ul class="nav">%3$s</ul>',
						) ); ?>
						<!--<form class="navbar-form pull-right">
							<input type="text" class="span8" placeholder="Search">
							<button class="btn btn-primary search-button" type="submit"><i class="icon-search icon-white"></i></button>
						</form>-->
					</div>
				</div>
			</div>
		</div>
	    <div class="body">
	    	<div class="wrapper">
