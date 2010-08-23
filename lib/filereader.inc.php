
<?php

$default_dir = "/home";
$dir = (isset($_GET['dir']))?$_GET['dir']:$default_dir;
$directorio = opendir($dir); 
echo "<b>Directorio actual:</b><br />$dir<br />"; 
echo "<b>Archivos y subdirectorios:</b><br />"; 
while ($archivo = readdir($directorio)) { 
  if($archivo == '.')
    echo "<a href=\"?dir=.\">$archivo</a><br />"; 
  elseif($archivo == '..'){ 
    if($dir != '.'){ 
      $carpetas = split("/",$dir); 
      array_pop($carpetas); 
      $dir2 = join("/",$carpetas); 
      echo "<a href=\"?dir=$dir2\">$archivo</a><br />"; 
    } 
  }
  elseif(is_dir("$dir/$archivo"))
    echo "<a href=\"?dir=$dir/$archivo\">$archivo</a><br />"; 
  else echo "$archivo<br />"; 
} 
closedir($directorio); 
?>
