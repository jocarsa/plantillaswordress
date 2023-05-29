<!doctype html>
<html>
    <head>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            Esta es mi cabecera
            <nav>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'nav-menu',
                        )
                    );
                ?>
            </nav>
        </header>
        <main>
        