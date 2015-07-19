<?php
//conexion a la base de datos
  mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
  mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
    

  $resultado = @mysql_query("CREATE TABLE IF NOT EXISTS `Reportes` (
  `ID_Reporte` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int(11) NOT NULL,
  `Calle` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Colonia` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Codigo_Postal` int(11) NOT NULL,
  `Calle_Uno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Calle_Dos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `Estatus` int(4) NOT NULL,
  `Departamento` int(4) NOT NULL,
  `Imagen` mediumblob,
  `Tipo_imagen` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Croquis` mediumblob,
  `Tipo_Croquis` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Reporte`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;")or die ('Error al eliminar la Base de Datos: '.mysql_error());
  if ($resultado){
    header('Location: index.php');
  } 
  else {
    echo "ocurrio un error al copiar el archivo.";
  }
?>
