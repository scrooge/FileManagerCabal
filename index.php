<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/header.inc.php' ); ?>

        <div id="general">
            <div id="encabezado">
                <h1>FileManager Cabal</h1>
                <span>El manejador de archivos de PHPCabal</span>
            </div>

            <div id="contenido">
                <p>
                    Hola, mundo!
                </p>
            </div>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/navbar.inc.php' ); ?>

            <div id="pie">
                <p>
                    <small>acerca</small>
                    <small>|</small>
                    <small>PHPCabal</small>
                    <small>|</small>
                    <small><?php echo date("Y"); ?></small>
                    <small>|</small>
                    <small>GPLv3</small>
                </p>
            </div>
        </div>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/footer.inc.php' ); ?>
