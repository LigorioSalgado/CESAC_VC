<?php
//conexion a la base de datos
  mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
  mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
    

  $resultado = @mysql_query("DROP TABLE IF EXISTS `Reportes`")or die ('Error al eliminar la Base de Datos: '.mysql_error());
  if ($resultado){
    header('Location: index.php');
  } 
  else {
    echo "ocurrio un error al copiar el archivo.";
  }
?>
