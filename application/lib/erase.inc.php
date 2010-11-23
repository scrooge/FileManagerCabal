<?php

function lsselect()
{
	$path="./"; //directorio a listar
	$directorio=dir($path);

	$pn= array();//pila de nombres
	
//bucle para llenar las pilas :P
		while ($archivo = $directorio->read())
		{
//no mostrar ni "." ni ".." ni el propio "index.php"
		if(($archivo!="index.php")&&($archivo!=".")&&($archivo!=".."))
			{
			array_push($pn, $archivo);
			}
		}
	 $directorio->close();

//Mostrar los archivos en select
		echo '
		<form>
			<select method="post" action="borrr1.php" name="file">
			<option value="">Seleccione el archivo...</option>'."\n";
//listado de select
			for($i=0; $i<count($pn); $i++)
				{
				echo '<option value="'.$pn[$i].'">'.$pn[$i].'</option>'."\n";	
				}
	         echo '<br /> <input type="submit" method="post" action="borrr1.php" value="Borrar" />
			</select>
		</form>';
}

echo lsselect();

/*function erase() 
{
  if (!unlink($_POST['file']))
		{
			print("ERROR: No se elimin&oacute; el archivo : ".$_POST['file']);
		
			}else{echo 'Se ha eliminado el archivo: '.$_POST['file'];
			
		}
}*/

//depurar
//print_r($_POST). '<br />';
print_r($_GET);

//llamada de funcion borrar
//erase();


?>

