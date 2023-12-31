<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'cloudsdale-master' ); ?></a>



        <header id="masthead" class="site-header">

            <nav id="site-navigation" class="main-navigation">
                <div id="navBox" class="cm-nav ">
                    <div class="container cm-nav-inner">
                        <a id="menuIcon" class="menu-toggle " aria-controls="primary-menu" aria-expanded="false"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                            <div class="menu-icon "></div>
                        </a>
                        <a id="navBrand" class="navbar-brand " href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img id="navImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-wide.svg"
                                alt="Vanguard Logo" style>
                        </a>
                        <div id="soIcons" class="social-icons">
                            <a class="instagram-icon " target="_blank"
                                href="https://www.instagram.com/starskyandhatch/?hl=en"></a>
                            <a class="facebook-icon " target="_blank"
                                href="https://www.facebook.com/starskyandhatchhastings/"></a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasNav"
                    aria-labelledby="offcanvasNavLabel">
                    <div class="container ">

                        <div class="off-canvas-inner">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            <div class="off-canvas-container">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img id="navImg"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/white-logo.svg"
                                        alt="Starsky Logo">
                                </a>



                                <?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'container'      => false,
												'menu_class'     => 'navbar-nav',
										
											)
										);
										
										?>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>