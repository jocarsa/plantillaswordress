<?php
/*
    Plugin Name: Cita Inspiradora
    Description: Plugin para mostrar citas aleatorias pero inspiradoras
    Version: 1.0.0
    Author: Jose Vicente Carratala
    Author URI: https://jocarsa.com
*/
    
function generaCita(){
    return "hola mundo";
}

function generaCitaShortcode(){
    return "<blockquote>Hola mundo</blockquote>";
}

add_shortcode("cita-aleatoria","generaCitaShortcode");

?>