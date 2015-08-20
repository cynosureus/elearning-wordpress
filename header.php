<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cynosure_elearning
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<div class = "row container-main">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cynosure_elearning' ); ?></a>

		<div class="col-lg-9 col-md-12 pull-right" id="elearning-body">
			<header id="masthead" class="site-header" role="banner">

				 <div class = "elearning-charcoal elearning-mobile-header row">
	            
		             <div class = "col-xs-4 text-left">
		              <span class="glyphicon glyphicon-menu-hamburger menu-toggle-panel" aria-hidden="true" style="font-size: 20px;"></span>   
		            </div>

		            <div class = "col-xs-4 text-center">
		              
		              <img src="<?= get_header_image(); ?>">
		                     
		            </div>

		            <div class = "col-xs-4 text-right login-toggle-panel">
		              
		            	Login

		            </div>

	          	</div>

	          	 <div class="elearning-user-info elearning-charcoal row" id="user-info-panel">
	             
	           
	                	<div class="col-xs-6">
	                		Welcome Dr. A Edwards
	                	</div>

	                	<div class="col-xs-6 text-right">
	                		Customer Support | Sign Out
	                	</div>

	             
	            
	          	</div>

	          	 <div class="row elearning-section site-branding">
	              
		            <div class = "col-lg-12 elearning-white">
		              <div class="row">
		                <div class="col-lg-6 col-xs-12">
		                  <h1 class="site-title"><?php bloginfo('description'); ?></h1>
		                  <img src="<?= get_template_directory_uri() ?>/assets/images/elearning_header.png">
		                </div>

		                <div class="col-lg-6 elearning-doc-image">
		                  <img src="<?= get_template_directory_uri() ?>/assets/images/elearning-doc.jpg">
		                </div>
		              </div>
		            </div>

	          	</div>
				

				<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cynosure_elearning' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			
			</header><!-- #masthead -->



			<div id="content" class="site-content">
