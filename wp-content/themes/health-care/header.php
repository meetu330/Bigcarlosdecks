<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package health-care
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/images/favicon-32x32.png"> 
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'health-care'); ?></a>

            <header id="masthead" class="site-header">
                <?php /* 	<div class="site-branding">
                  <?php
                  the_custom_logo();
                  if ( is_front_page() && is_home() ) :
                  ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php
                  else :
                  ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php
                  endif;
                  $health_care_description = get_bloginfo( 'description', 'display' );
                  if ( $health_care_description || is_customize_preview() ) :
                  ?>
                  <p class="site-description"><?php echo $health_care_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                  <?php endif; ?>
                  </div> */ ?><!-- .site-branding -->
                <div class="top-header">
                    <div class="container">
                        <div class="d-flex justify-content-sb align-items-center">
                            <div class="top-header-left">
                                <ul class="d-flex">
                                    <li><i class="fas fa-phone-alt"></i><a href="tel:571 242 8871">571 242 8871</a></li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:bigcarlosdecks@gmail.com">bigcarlosdecks@gmail.com</a></li>
                                   <!-- <li><i class="fas fa-map-marker-alt"></i><a href="tel:+1 1234 5678 90">+1 1234 5678 90</a></li>-->
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="middle-header">
                    <div class="container">
                        <div class="d-flex justify-content-sb align-items-center">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
                            </div>
                            <nav id="site-navigation" class="main-navigation">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <?php
                                wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_id' => 'primary-menu',
                                        )
                                );
                                ?>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->
