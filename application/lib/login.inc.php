<?php

 $mensaje = '';
 $mensaje1 = '';
 $mensaje2 = '';
 $mensaje3 = '';

   if ( isset($_POST['enviar']) && $_POST['enviar'] === 'Enviar') {
     // validar si nombre es string
   $usuario_saneado = filter_var( $_POST['usuario'],FILTER_SANITIZE_STRING );
    if( filter_var( $usuario_saneado, FILTER_VALIDATE_REGEXP, array("options" => array( "regexp" => "/^([a-zA-Z0-9]+$.*)/" ) ) ) ) {
   	
    } else {

       $mensaje = 'Tu nombre de usuario no es el adecuado, por favor 
   intenta uno nuevo: ' . $usuario_saneado;
		}
   }

	echo $mensaje;


   require_once( FMC_FORM_PATH . '/login.frm.php' );
 
   if ( strlen($_POST['password']) > 7) {
      
   } else {

      $mensaje1 = 'No tiene los suficientes caracteres.';
   }  

	echo $mensaje1;


   $password_saneada = filter_var( $_POST['password'],FILTER_SANITIZE_STRING ); {
         
    if ( filter_var( $password_saneada, FILTER_VALIDATE_REGEXP, array( "options" => array( "regexp" => "#^([a-zA-Z0-9]+$.*)#" ) ) ) ) {
        
    } else {
        $mensaje2 = 'Tu password contiene caracteres no admitidos. ';
    }
	echo $mensaje2;
	
    } 

    if (!preg_match('`[a-z]`',$password_saneada)){$error_clave = 'La 
clave debe tener al menos una letra en minúscula. ' ;
    }
   
    if ( !preg_match('`[A-Z]`',$password_saneada)){$error_clave = 'La 
clave debe tener al menos una letra en 
mayúscula. ';
    }

    if ( !preg_match('`[0-9]`',$password_saneada)){
    $error_clave = 'La clave debe tener al menos un carácter numérico. 
';
    }
 	
	echo $error_clave;

    if ( empty($error_clave)) {
	echo 'Validación exitosa';
      
     } else {

	echo 'Intente Ud. con otra clave';
             }

?>

