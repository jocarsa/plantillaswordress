<?php
/*
    Plugin Name: Cita Inspiradora
    Description: Plugin para mostrar citas aleatorias pero inspiradoras
    Version: 1.0.0
    Author: Jose Vicente Carratala
    Author URI: https://jocarsa.com
*/
    
function generaCita(){
    $citas = [
        'Hazlo o no lo hagas, pero no lo intentes',
        'La resistencia es futil',
        'De alguna forma, Palpatine ha vuelto'
    ];
    $citaseleccionada = $citas[floor(rand(1,count($citas)))-1]; 
    return $citaseleccionada;
}

function generaCitaShortcode(){
    $cita = generaCita();
    return "<blockquote>".$cita."</blockquote>";
}

add_shortcode("cita_inspiradora","generaCitaShortcode");

?>