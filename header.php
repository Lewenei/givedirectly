<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
            </div>


            <!-- Navbar -->
            <nav class="navbar">
                <button class="navbar-toggle" id="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false
                ));
                ?>
            </nav>
            <!-- Donate Button -->
            <div class="donate-button">
                <a href="#donate" class="btn-donate">Donate</a>
            </div>
        </div>
    </header>