<?php

$mensaje = '';

if ( isset($_POST['enviar']) && $_POST['enviar'] === 'Enviar') {

    // validar si nombre es string

    if ( is_numeric($_POST['nombre'])) {
        $mensaje = "Error, no se permiten caracteres numéricos en este campo";

    if ( is_string($_POST['nombre'])) {
        $mensaje = "Oh, tu teniendou nombre de número, tonto!!!";
    }


}

require_once( FMC_FORM_PATH . '/login.frm.php' );

echo $mensaje;
?>
