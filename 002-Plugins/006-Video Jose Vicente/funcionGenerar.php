<?php
function generaCita(){
    $citas = [
        'Hazlo o no lo hagas, pero no lo intentes',
        'La resistencia es futil',
        'De alguna forma, Palpatine ha vuelto'
    ];
    $citaseleccionada = $citas[floor(rand(1,count($citas)))-1]; 
    return $citaseleccionada;
}
?>