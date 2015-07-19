<?php
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$id = $_POST['ID_Reporte'];
$status = $_POST['rbEstado'];
$departamento = $_POST['selServicio'];
if ($_POST['selServicio'] != null && $_POST['selServicio'] != 0) {
  # code...
  $status = 1;
}
else{
  $status = 0;
}
$result = mysql_query('UPDATE Reportes SET Estatus = '.$status.' WHERE ID_Reporte ='.$id.';')or die ('Ha fallado Estatus: '.mysql_error());
$result2 = mysql_query('UPDATE Reportes SET Departamento = '.$departamento.' WHERE ID_Reporte ='.$id.';')or die ('Ha fallado Departamento: '.mysql_error());
if ($result && $result2) {
	# code...
	header('Location: consulta.php');
}

?>