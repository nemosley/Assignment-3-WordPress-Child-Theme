<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php
    // : wp_head() is REQUIRED.
    // : WordPress + plugins inject scripts, styles, meta tags here.
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="site-title">
        <?php
        // : Themes handle presentation.
        // : If a custom logo exists, show it. Otherwise show site title.
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>';
        }
        ?>
    </div>

    <nav>
        <?php
        // : wp_nav_menu() outputs the menu registered in functions.php.
        wp_nav_menu(array(
            'theme_location' => 'main-menu'
        ));
        ?>
    </nav>
</header>

<main>
