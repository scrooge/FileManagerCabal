<?php require_once( 'lib/config.inc.php' ); ?>
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
//<?php require_once( $_SERVER['DOCUMENT_ROOT'] . 
//'/lib/filereader.inc.php' ); ?>
// <?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/navbar.inc.php' 
//); ?>

            <div id="login">
<?php require_once( FMC_LIB_PATH . '/login.inc.php' ); ?>
            </div>

<?php require_once( FMC_LIB_PATH . '/footer.inc.php' ); ?>
