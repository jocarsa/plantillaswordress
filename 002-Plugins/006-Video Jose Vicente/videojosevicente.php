<?php
/*
    Plugin Name: Video Jose Vicente
    Description: Plugin para mostrar el video de Jose Vicente
    Version: 1.0.0
    Author: Jose Vicente Carratala
    Author URI: https://jocarsa.com
*/
    


function generaVideoShortcode(){
    
    return '<blockquote><iframe width="560" height="315" src="https://www.youtube.com/embed/_LbSL3G6S6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></blockquote>';
}

add_shortcode("videojosevicente","generaVideoShortcode");

?>