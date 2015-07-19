<?php
  function Dep($num)
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

function est($num)
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

    </head>
  <body>
    <div class="container">
      <?php
        $ID_Reporte = $_GET['id'];
        mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
        mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
        if($ID_Reporte != null){
          $consulta = "SELECT * FROM Reportes WHERE ID_Reporte = $ID_Reporte";
          $resultado = @mysql_query($consulta) or die(mysql_error());
          if($row = mysql_fetch_array($resultado)){
            if($row["ID_Reporte"] == $ID_Reporte){
              $username = $row["ID_Usuario"];
              $calle = $row["Calle"];
              $numero = $row["Numero"];
              $colonia = $row["Colonia"];
              $cp = $row["Codigo_Postal"];
              $calle_1 = $row["Calle_Uno"];
              $calle_2 = $row["Calle_Dos"];
              $descripcion = $row["Descripcion"];
              $estado = est($row["Estatus"]);
              $departamento = dep($row["Departamento"]);

              echo "<h4>Folio: ".$ID_Reporte."</h4>";
              echo "<h4>Tipo de servicio</h4>";
              echo "<h5>Departamento encargado: '$departamento'</h5>";
              echo "<h5>Estado de la solicitud: '$estado'</h5><br />";
              echo "<textarea rows='3' cols='50' readonly>$descripcion</textarea><br />";
              echo "<h4>Ubicación</h4>";
              echo "<input id='txtCalle_Serv' name='txtCalle_Serv' type='text' readonly value='$calle'/> ";
              echo "<input id='txtNum_Serv' name='txtNum_Serv' type='text' readonly value='$numero'/> ";
              echo "<input id='txtColonia_Serv' name='txtColonia_Serv' type='text' readonly value='$colonia'/> ";
              echo "<input id='txtCodigo_Postal_Serv' name='txtCodigo_Postal_Serv' type='text' readonly value='$cp'/><br />";
              echo "<input id='txtCalle_Serv_eUno' name='txtCalle_Serv_eUno' type='text' readonly value='$calle_1'/> ";
              echo "<input id='txtCalle_Serv_eDos' name='txtCalle_Serv_eDos' type='text' readonly value='$calle_2'/><br />";
              echo "<class='holder_content1'>";
                echo "<div class='group4'>";
                  echo "<h4>Fotografía del servicio</h4>";
                  echo "<img src=\"img_serv.php?id=".$ID_Reporte."\" width=\"300\"/>";
                echo "</div>";
                echo "<div class='group5'>";
                  echo "<h4>Croquis</h4>";
                  echo "<img src=\"img_croquis.php?id=".$ID_Reporte."\" width=\"300\"/>";
                  echo "<br /><br /><a href='consulta.php' id=\"arriba\"><img src='../images/back.png' title='Regresar' width='50px' style='margin-left: 300px'></a>";
                echo "</div>";
              echo "</div>";
            }
          }
        }
      ?>
    </div>
  </body>
</html>