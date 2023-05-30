<?php

    function register_custom_menu() {
        register_nav_menu('nav-primario', 'Navegación primaria');
        register_nav_menu('nav-secundario', 'Navegación secundaria');
    }
    add_action('after_setup_theme', 'register_custom_menu');
?>