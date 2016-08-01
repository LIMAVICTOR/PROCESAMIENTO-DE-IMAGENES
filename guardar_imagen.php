<?php
include("conexion.php");
  $id_foto=date('YmdHis');
  $consulta="insert into fotos values ('$id_foto','','')";
  $inserta_foto=mysql_query($consulta,$c);
  $filename = "fotos/".$id_foto.'.jpg';
  $result = file_put_contents( $filename, file_get_contents('php://input') );
  if (!$result) 
   {
    	print "No se pudo subir la BD \n";
	   exit();
  }
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $filename;
  print "$url\n";

  
?>
