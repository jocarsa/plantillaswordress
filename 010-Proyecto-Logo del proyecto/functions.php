<?php

    function register_custom_menu() {
        register_nav_menu('custom-menu', 'Custom Menu');
    }
    add_action('after_setup_theme', 'register_custom_menu');
?>