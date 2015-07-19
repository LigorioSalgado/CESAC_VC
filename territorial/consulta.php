<?php
  session_start();
  if (isset($_SESSION['username']) != null) {
    # code...
    if ($_SESSION['tipo_usuario'] < "20" && $_SESSION['tipo_usuario'] > "25") {
      # code...
      header ("Location: ../");
    }
  }
  else {
    # code...
    #header ("Location: ../");
  }
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
function Territorial($num){
    switch ($num) {
    case 21:
        return "Codigo_Postal > '15000' && Codigo_Postal < '15249";
        break;
    case 22:
        return "Codigo_Postal > '15250' && Codigo_Postal < '15499'";
        break;
    case 23:
        return "Codigo_Postal > '15500' && Codigo_Postal < '15749'";
        break;
    case 24:
        return "Codigo_Postal > '15750' && Codigo_Postal < '15999'";
        break;
     default:
        return "0";
    }
}
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'Prueba_1');
$id = $_SESSION['id'];
$tipo = $_SESSION['tipo_usuario'];

$dbLinkId = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Cannot create mysql connection' . mysql_error());
mysql_select_db(DB_NAME, $dbLinkId);
$requests = array();
$result = mysql_query("SELECT * FROM Reportes WHERE ".Territorial($tipo)."", $dbLinkId);
while ($row = mysql_fetch_assoc($result))
{
    $requests[] = $row;
}
mysql_free_result($result);
mysql_close($dbLinkId);
?>

<html>
    <head>
      <meta charset="UTF-8">
      <title>CESAC.VC - Consulta Solicitudes</title>
      <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
       <!--[if lt IE 9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

      <link rel="shortcut icon" href="../images/favicon.gif" type="image/x-icon"/> 
      <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
      <link type="text/css" href="../css/css3.css" rel="stylesheet" />
      <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
      <script type="text/javascript" src="../js/jquery.pikachoose.js"></script>
      <script language="javascript">
        $(document).ready(
            function (){
                $("#pikame").PikaChoose();
            });
      </script>
      <style>
        .fdg_sortable{
            cursor: pointer;
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
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
            if ($requests) {
                # code...
                echo "<h4>Estas son las solicitudes que has realizado.</h4>";
                Fete_ViewControl_DataGrid::getInstance($requests)
                ->setGridAttributes(array('cellspacing' => '1', 'cellpadding' => '5', 'border' => '0'))
                ->enableSorting(true)
                ->removeColumn('ID_Usuario')
                ->removeColumn('Calle_Uno')
                ->removeColumn('Calle_Dos')
                ->removeColumn('Imagen')
                ->removeColumn('Tipo_imagen')
                ->removeColumn('Croquis')
                ->removeColumn('Tipo_Croquis')
                ->removeColumn('ID_Reporte')

                ->setup(array(
                	#'ID_Reporte' => array('header' => 'ID'),
                    'Calle' => array('header' => 'Calle'),
                    'Numero' => array('header' => 'Numero'),
                    'Colonia' => array('header' => 'Colonia'),
                    'Codigo_Postal' => array('header' => 'C.P.'),
                    'Descripcion' => array('header' => 'Asunto'),
                    'Departamento' => array('header' => 'Departamento', 'cellTemplate' => '[[Estado:%data%]]'),
                    'Estatus' => array('header' => 'Estatus', 'cellTemplate' => '[[Responsable:%data%]]'),
                ))
                ->addColumnAfter('acciones', '<a href="ver.php?id=$ID_Reporte$" style="color: blue;">Ver</a>', 'Acciones', array('align' => 'center'))
                ->addColumnBefore('counter', '$ID_Reporte$.', 'ID', array('align' => 'right'))
                #->setStartingCounter(1)
                ->setRowClass('row')
                ->setAlterRowClass('alterRow')
                ->render();
            }
            else{
                echo "<h4>Usted no ha realizado ninguna solicitud hasta el momento.</h4>";
            }
        ?>
    </body>
</html>