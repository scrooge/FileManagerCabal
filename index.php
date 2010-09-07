<?php

//Autoconfiguración de rutas de archivo 
$name_path = __FILE__;
$url_name = "/" . basename(dirname($name_path));
$app_path = dirname($name_path);

//Declarar las constantes
	define ( 'FMC_APP_PATH', $app_path );
	define ( 'FMC_URL', $url_name);

//Llamada de configuración general
 require_once( FMC_APP_PATH . '/lib/config_system.inc.php' );

?>
<?php require_once( FMC_LIB_PATH . '/header.inc.php' ); ?>

        <div id="general">
            <div id="encabezado">
                <h1>FileManager Cabal</h1>
                <span>El manejador de archivos de PHPCabal</span>
            </div>

<?php require_once( FMC_LIB_PATH . '/nav.inc.php' ); ?>

            <div id="contenido">
                <p>
                    Hola, mundo!
                </p>
            </div>

            <div id="login">
<?php require_once( FMC_LIB_PATH . '/login.inc.php' ); ?>
            </div>

<?php require_once( FMC_LIB_PATH . '/footer.inc.php' ); ?>
