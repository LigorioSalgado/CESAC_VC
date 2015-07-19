<?php

require 'DataGrid.php';

function Estado($num)
{
	switch ($num) {
    case 1:
        return "DESARROLLO DELEGACIONAL";
        break;
    case 2:
        return "DESARROLLO SOCIAL";
        break;
    case 3:
        return "JURÍDICA Y DE GOBIERNO";
        break;
    case 4:
        return "OBRAS Y DESARROLLO URBANO";
        break;
    case 5:
        return "PARTICIPACIÓN CIUDADANA";
        break;
    case 6:
        return "SEGURIDAD PÚBLICA";
        break;
    case 7:
        return "SERVICIOS URBANOS";
        break;
     default:
     	return "S/A";
    }
}

function Responsable($num)
{
	switch ($num) {
    case 0:
        return "En espera";
        break;
    case 1:
        return "En tramite";
        break;
    case 2:
        return "En proceso";
        break;
    case 3:
        return "Terminado";
        break;
     default:
     	return "En espera";
    }
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'Prueba_1');

$dbLinkId = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Cannot create mysql connection' . mysql_error());
mysql_select_db(DB_NAME, $dbLinkId);
$users = array();
$result = mysql_query("SELECT * FROM Reportes", $dbLinkId);
while ($row = mysql_fetch_assoc($result))
{
    $users[] = $row;
}
mysql_free_result($result);
mysql_close($dbLinkId);

?>

<html>
	<head>
	<title>Solicitudes</title>
	<style>
	.fdg_sortable {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	margin: 45px;
	width: 480px;
	text-align: left;
	border-collapse: collapse;}
	.alterRow {background-color:#dfdfdf}
	</style>
</head>
<body>
<?php

Fete_ViewControl_DataGrid::getInstance($users)
->setGridAttributes(array('cellspacing' => '1', 'cellpadding' => '5', 'border' => '0'))
->enableSorting(true)
->removeColumn('ID_Usuario')
->removeColumn('Calle_Uno')
->removeColumn('Calle_Dos')
->removeColumn('Imagen')
->removeColumn('Tipo_imagen')
->removeColumn('Croquis')
->removeColumn('Tipo_Croquis')

->setup(array(
	'ID_Reporte' => array('header' => 'ID'),
    'Calle' => array('header' => 'Calle'),
    'Numero' => array('header' => 'Numero'),
    'Colonia' => array('header' => 'Colonia'),
    'Codigo_Postal' => array('header' => 'C.P.'),
    'Descripcion' => array('header' => 'Asunto'),
    'Departamento' => array('header' => 'Departamento', 'cellTemplate' => '[[Estado:%data%]]'),
    'Estatus' => array('header' => 'Estatus', 'cellTemplate' => '[[Responsable:%data%]]'),

))
->addColumnAfter('actions', '<a href="#edit.php?id=$user_id$">Edit</a> - <a href="#delete.php?id=$user_id$" onclick="return confirm(\'Are you sure you want to delete user $user_fullname$?\')">Delete</a>', 'Actions', array('align' => 'center'))
#->addColumnBefore('counter', '%counter%.', 'Counter', array('align' => 'right'))
#->setStartingCounter(1)
->setRowClass('row')
->setAlterRowClass('alterRow')
->render();

?>

</body>
</html>