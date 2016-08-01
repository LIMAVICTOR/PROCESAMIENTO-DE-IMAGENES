<?php
include("conexion.php");
  $id_foto=date('YmdHis');
  $consulta="insert into fotos values ('$id_foto','','')";
  $inserta_foto=mysql_query($consulta,$c);
  $filename = "fotos/".$id_foto.'.jpg';
  
?>
