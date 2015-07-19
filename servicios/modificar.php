<?php
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$id = $_POST['ID_Reporte'];
$status = $_POST['rbEstado'];
$result = mysql_query('UPDATE Reportes SET Estatus = '.$status.' WHERE ID_Reporte ='.$id.';')or die ('Ha fallado Estatus: '.mysql_error());
if ($result) {
	# code...
	header('Location: consulta.php');
}

?>