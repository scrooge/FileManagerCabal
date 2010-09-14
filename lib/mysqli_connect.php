<?php

$link = mysqli_init();
$db = usuarios;

if (!$link) {
    die('La función mysqli_init ha fallado');
}

if (!mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('La configuración de MYSQLI_INIT_COMMAND falló');
}

if (!mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('La configuración de MYSQLI_OPT_CONNECT_TIMEOUT falló');
}

if (!mysqli_real_connect($link, 'localhost', 'fmcabal', 'f4m7c@a.ba3l', $db)) {
    die('Error de conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
	
    echo 'La Conexión a la base de datos ' .$db. ' fue exitosa... ' . mysqli_get_host_info($link) . "\n";

mysqli_close($link);

?>
