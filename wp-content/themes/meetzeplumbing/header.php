<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Meetze_Plumbing
 * @since 1.0.0
 */
global $setting_post_id;
global $phonnum;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <!-- Bootstrap -->
  <?php wp_enqueue_script('jquery') ;?>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
         <header class="site-header">
            <div class="middle-header">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-8 col-md-4 col-lg-3">
                        <div class="row">
                           <div class="col-12">
                              <a href="<?php echo home_url( '/' ); ?>" class="header-logo" ><img src="<?php the_field('site_logo', $setting_post_id  ) ; ?>" alt="" width="209"/></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-4 col-md-8 col-lg-9">
                        <div class="row align-items-center justify-content-end">
                           <div class="col-12 col-md-10 col-xl-12 d-none d-md-block text-md-right text-lg-center text-xl-right">
                              <div class="header-phone"><i class="icon-layer-1" aria-hidden="true"></i> Call: <span><?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2 $3", $phonnum); ?></span></div>
                              <?php $link = get_field('header_button', $setting_post_id) ; ?> 
                              <?php $link_url = $link['url'];
                                $link_title = $link['title']; ?>
                              <a href="<?php echo $link_url ; ?>" class="d-none d-lg-inline-block button-default button-primary-shadow"><?php echo $link_title ; ?></a>
                           </div>
                           <div class="col-12 col-md-2 col-xl-12 d-block d-xl-none">
                              <div class="toggle-icon">
                                 <span class="responsive-toggle hamburger-toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                 <span class="toggle-text">Menu</span>
                              </div>
                           </div>  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bg-secondary mobile-phone d-md-none">Call: <a href="tel:<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1$2$3", $phonnum); ?>"> <?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2 $3", $phonnum); ?></a></div>
            <div class="bg-primary-vertical-gradient bottom-header ">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'meetzeplumbing' ); ?>">
                           <?php
                           wp_nav_menu( array(
                              'menu'   => 'Main Menu',
                              'container' => false
                           ) );
                           ?>   
                        </nav>
                        <!-- #site-navigation -->     
                     </div>
                  </div>
               </div>
            </div>
         </header>