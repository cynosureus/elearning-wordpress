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

		<?php global $pagenow; ?>

		<div class="col-lg-9 col-md-12 pull-right" id="elearning-body" style="<?= $pagenow== 'wp-login.php' ? 'background-color: #fff' : '' ?>">
			<header id="masthead" class="site-header" role="banner">

				 <div class = "elearning-charcoal elearning-mobile-header row">
	            
		             <div class = "col-xs-4 text-left">

		             	<?php if ( get_the_title( get_the_ID() ) == 'elearning' || get_the_title( get_the_ID() ) == 'Home' ): ?>
		              		<span class="glyphicon glyphicon-menu-hamburger menu-toggle-panel" aria-hidden="true" style="font-size: 20px; padding-top: 14px;"></span>   
		            	<?php endif; ?>
		            </div>

		            <div class = "col-xs-4 text-center" id="cyno-logo-wrapper">
		              
		              <a href="<?= home_url() ?>"><img src="<?= get_header_image(); ?>" id="cyno-logo"></a>
		                     
		            </div>


		           

	          	</div>

	          	<?php if ( is_user_logged_in() ): ?>

	          	 <div class="elearning-user-info elearning-charcoal row" id="el-user-info-panel-desktop">
	             
	           
	                	<div class="col-xs-6" id="el-user-name">
	              
	                		Welcome <a href="<?= bp_loggedin_user_domain() ?>"><?= ucfirst( xprofile_get_field_data(1, get_current_user_id() ) ) ?> <?= ucfirst( xprofile_get_field_data( 2, get_current_user_id() ) ) ?> (View Profile)</a>
	                	</div>

	                	<div class="col-xs-6 text-right" id="el-user-support">
	                		Customer Support | <a href="<?= wp_logout_url() ?>">Sign Out</a> <?= current_user_can('administrator') ? ' | <a href= "' . admin_url() . '" >Admin</a>' : '' ?>
	                	</div>




	           

	             
	            
	          	</div>




	          	 <?php endif; ?>

	          	 <div class="row elearning-section site-branding">
	              
		            <div class = "col-lg-12 elearning-orange elearning-bilboard">
		              <div class="row">
		                <div class="col-lg-7 col-xs-12">
		                  <h1 class="site-title"><?php bloginfo('description'); ?></h1>
		                  <img src="<?= get_template_directory_uri() ?>/assets/images/Elearning_Main_Graphic_247.png">
		                </div>

		                <div class="col-lg-5 elearning-doc-image">
		                  <img src="<?= get_template_directory_uri() ?>/assets/images/Elearning_WomanHeroImage.png">
		                </div>
		              </div>
		            </div>

	          	</div>
			
			</header><!-- #masthead -->


			<div id="content" class="site-content">


