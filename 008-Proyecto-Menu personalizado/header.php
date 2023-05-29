<!doctype html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    </head>
    <body>
        <header>
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'custom-menu')); ?>
            </nav>
        </header>
        <main>
        