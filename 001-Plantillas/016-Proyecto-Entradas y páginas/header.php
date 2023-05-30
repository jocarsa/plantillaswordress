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
            <div id="logo"></div>
        </header>
        <nav>
                <?php wp_nav_menu(array('theme_location' => 'nav-primario')); ?>
                <?php wp_nav_menu(array('theme_location' => 'nav-secundario')); ?>
            </nav>
        <main>
        