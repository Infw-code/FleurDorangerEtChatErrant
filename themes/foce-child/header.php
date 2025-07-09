<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <ul>
                    <li>
                        <img
                            class="logo-desktop"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png"
                            alt="Logo" />
                        <img
                            class="LogoBurger"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-mobile.png"
                            alt="Logo Mobile" />
                    </li>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li class="site-title"><a href="/">Fleurs d'oranger & chats errant</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                    <li><img class="ChatViolet" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Kawaneko-150x150.png" alt="chat violet" /></li>
                    <li><img class="menu-icon RandomFlowerBurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flower.png" alt="RandomFlower" /></li>
                    <li><img class="menu-icon SunFlowerBurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="Fleur Soleil" /></li>
                    <li><img class="menu-icon FleurBurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/random_flower.png" alt="Fleur" /></li>
                    <li><img class="menu-icon OrchidBurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orchid.png" alt="Orchid" /></li>
                    <li><img class="HibiscusBurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus.png" alt="Hibiscus" /></li>
                    <li><img class="ChatNoir" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jaakuna-1-150x150.png" alt="chat noir" /></li>
                    <li><img class="ChatOrange" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Orenjiiro-1-150x150.png" alt="chat orange" /></li>
                </ul>
            </nav>
        </header><!-- #masthead -->