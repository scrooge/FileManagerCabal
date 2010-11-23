<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/xhtml1-strict.dtd">
   <html>  
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
      <style type="text/css">  
      .fila_0 { background-color: #FFFFFF;}  
      .fila_1 { background-color: #E1E8F1;}  
      body { margin:50px 100px 50px 100px ; background-color:#000008 ; font-family:sans-serif }
      table.list { width:100% ; border-left:5px solid #8080ff ; border-right:5px solid #8080ff ; border-collapse:collapse }
      a { color:#900000 ; text-decoration:none }
      a:visited { color:#404040 }
      a:hover { color:#ff4040 ; text-decoration:underline }
      div.path { color:#ffffff ; font-size:20px ; text-align:right ; font-weight:bold ; margin-bottom:10px ; margin-right:25px}
      tr { font-size:12px } th { background-color:#8080ff }
      th.left { width:40px } th.filename { text-align:left }
      th.date { width:150px } th.size { width:80px ; text-align:right}
      th.right { width:30px } td.left { padding-left:5px } 
      td.size { text-align:right } tr.line0 { background-color:#e0e0ff }
      tr.line1 { background-color:#e8e8ff } 
      tr.bottom { background-color:#8080ff ; font-weight:bold }
      td.totalsize { text-align:right }</style>
     </head>  
		<body>	
<?php

function ls()
{
	$path="./"; //directorio a listar
	$directorio=dir($path);

	$pn= array();//pila de nombres
	$pf= array();//pila de fechas
	$pt= array();//pila de tamaNos

//bucle para llenar las pilas :P
		while ($archivo = $directorio->read())
		{
//no mostrar ni "." ni ".." ni el propio "index.php"
		if(($archivo!="index.php") && ($archivo!=".") && ($archivo!=".."))
			{
			array_push($pn, $archivo);
			array_push($pf, date("d/m/Y h:i", filemtime($archivo)));
			array_push($pt, filesize($archivo));
			}
		}
	 $directorio->close();

//ordenar las 3 pilas segun la pila de nombres
		array_multisort($pn,$pf,$pt);
//mostrar los datos en marco
		echo '<div class="path">'.$path.'</div>';
		echo '<table class="list">';
		echo '<tr class="header"> <th class="left"><a href="erase.inc.php">Eliminar Archivo</a></th><th class="filename">Nombre</th><th class="date">Fecha</th>';
		echo '<th class="size">Tamaño</th><th></th></tr>'."\n"; 
//listado	
		for($i=0; $i<count($pn); $i++)
				{
			echo '<form method="get" action="descarga.php?file=" name="forma'.$i.'">';			
			echo '<tr class="' . 'fila_' .($i%2). '">';
			echo '<td></td><td class="filename"> <a href="#" onclick="document.forma'.$i.'.submit();return false;'.'">'.$pn[$i].'</a> </td> <td class="date">'.$pf[$i].'</td> <td class="size">'.$pt[$i].' Bytes</td> <td class="rigth"></td> </tr>'."\n";
			echo '<input type="hidden" name="file" value="'.$pn[$i].'" /> </form>';				
				}
//fondo marco       
      echo '<tr class="bottom"><td></td> <td class="totalfiles">'.count($pn).' archivos</td><td></td> <td class="totalsize">'. array_sum($pt). ' Bytes</td><td></td></tr>';   
		 
}         

echo ls();

		
?>
		</body>
</html>		