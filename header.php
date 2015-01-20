<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Ceará Veículos
 * @since Ceará Veículos
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/engine1/style.css" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header class="header">	
                <div class="wrap"> 
                    <div class="header-top">
                        <h1 class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="header-image" alt="Logo. Ceará Veículos"/>
                            </a>
                        </h1>
                        <div class="menu">
                            <nav id="cssmenu">
                                <?php wp_nav_menu('menu=menu-ceara-veiculos'); ?>
                            </nav>
                        </div>	
                        <div class="clear"></div> 
                    </div>
                </div>	
            </header>
            <div id="main" class="wrapper">