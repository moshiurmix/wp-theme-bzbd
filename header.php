<?php
/**
 * Title: Header template.
 *
 * Description: Defines header content.
 *
 * Please do not edit this file. This file is part of the Annymo-wp Framework and all modifications
 * should be made in a child theme.
 *
 * @category Annymo-wp Framework
 * @package  Framework
 * @since    1.0
 * @author   MOSHIUR RAHMAN NIC
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.moshiur.info/
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie ie6 lte9 lte8 lte7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7 lte9 lte8 lte7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 lte9 lte8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if gt IE 9]>  <html <?php language_attributes(); ?>> <![endif]-->
<!--[if !IE]><!--> 
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title(''); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	
<?php do_action('bzbd_before_wrapper'); ?>

<div id="wrapper" class="container-fluid">	
	
	<?php do_action('bzbd_header'); ?>
	
	<?php do_action('bzbd_before_navigation'); ?>

	<nav id="navigation" class="row-fluid" role="navigation">
      <div class="main-navigation navbar">
        <div class="navbar-inner">
        	<div class="container">
          <?php /* hide collapsing menu if not responsive */
						if( bzbd_get_option( 'responsive_design', 'checked' ) ): ?>
  					<div class="nav-collapse collapse">
            <?php endif; ?>
          		<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_class' => 'nav', 'walker' => new bzbd_walker(), 'fallback_cb' => 'bzbd_fallback_menu' ) ); ?>
			
			<?php if( bzbd_get_option( 'searchbar', 1 ) == "1" ) : ?>
				<div class="menu-searchbar">
					<?php get_search_form(); ?>
				</div>
      <?php endif; ?>
      <?php /* hide collapsing menu if not responsive */
						if( bzbd_get_option( 'responsive_design', 'checked' ) ): ?>
			</div><!-- collapse -->
			
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
      <?php endif; ?>
          </div><!-- container -->
        </div><!-- .navbar-inner .row-fluid -->
      </div><!-- main-navigation navbar -->
	</nav><!-- #navigation -->
	
	<?php do_action('bzbd_after_navigation'); ?>
