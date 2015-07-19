<?php
//echo "hola";
function est($num)
{
  switch ($num) {
    case 1:
        return "<input type='radio' id='rbEstado' name='rbEstado' value='0'>Nececita revisión 
                <input type='radio' id='rbEstado' name='rbEstado' checked='yes' value='1'>En trámite 
                <input type='radio' id='rbEstado' name='rbEstado' value='2' disabled>En proceso 
                <input type='radio' id='rbEstado' name='rbEstado' value='3' disabled>Terminado
                ";
        break;
    case 2:
        return "<input type='radio' id='rbEstado' name='rbEstado' value='0'>Nececita revisión
                <input type='radio' id='rbEstado' name='rbEstado' value='1'>En trámite
                <input type='radio' id='rbEstado' name='rbEstado' checked='yes' value='2' disabled>En proceso
                <input type='radio' id='rbEstado' name='rbEstado' value='3' disabled>Terminado
                ";
        break;
    case 3:
        return "<input type='radio' id='rbEstado' name='rbEstado' value='0'>Nececita revisión
                <input type='radio' id='rbEstado' name='rbEstado' value='1'>En trámite
                <input type='radio' id='rbEstado' name='rbEstado' value='2' disabled>En proceso
                <input type='radio' id='rbEstado' name='rbEstado' checked='yes' value='3' disabled>Terminado
                ";
        break;
     default:
        return "<input type='radio' id='rbEstado' name='rbEstado' checked='yes' value='0'>Nececita revisión
                <input type='radio' id='rbEstado' name='rbEstado' value='1'>En trámite
                <input type='radio' id='rbEstado' name='rbEstado' value='2' disabled>En proceso
                <input type='radio' id='rbEstado' name='rbEstado' value='3' disabled>Terminado
                ";
    }
}

function servicio($num){
  switch ($num) {
      case 1:
          return "<select id='selServicio' name='selServicio'>
                    <option selected='selected' value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 2:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option selected='selected' value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 3:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option selected='selected' value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 4:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option selected='selected' value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 5:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option selected='selected' value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 6:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option selected='selected' value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
      case 7:
          return "<select id='selServicio' name='selServicio'>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option selected='selected' value='7'>SERVICIOS URBANOS</option>
                  </select>";
          break;
       default:
        return "<select id='selServicio' name='selServicio'>
                    <option selected='selected' value='0'>Selecciona una opción</option>
                    <option value='1'>DESARROLLO DELEGACIONAL</option>
                    <option value='2'>DESARROLLO SOCIAL</option>
                    <option value='3'>JURÍDICA Y DE GOBIERNO</option>
                    <option value='4'>OBRAS Y DESARROLLO URBANO</option>
                    <option value='5'>PARTICIPACIÓN CIUDADANA</option>
                    <option value='6'>SEGURIDAD PÚBLICA</option>
                    <option value='7'>SERVICIOS URBANOS</option>
                  </select>";;
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
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&key=AIzaSyCQQ-TBEprNpwHYAlHGhZpWAiQ5hVZxjPI"></script>
      <script>
      function initialize() {
        var lat = document.getElementById('lat').value;
        var lon = document.getElementById('lon').value;
        var myLatlng = new google.maps.LatLng(lat,lon);
        var mapOptions = {
          zoom: 18,
          center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Ubicación'
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);


    </script>

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
              $estado = $row["Estatus"];
              $departamento = $row["Departamento"];
              $lat=$row['Lati'];
              $lon=$row['Lon'];
              echo "<form class='editar'  method='post' action='modificar.php?$ID_Reporte' enctype='multipart/form-data'>";
                echo "<h4>Folio: <input id='ID_Reporte' name='ID_Reporte' value='$ID_Reporte' readonly /></h4>";
                echo "<h4>Tipo de servicio</h4>";
                echo servicio($departamento);
                echo "<h5>Estado de la solicitud:</h5>";
                echo est($estado).'<br /><br />';
                echo "<textarea rows='3' cols='50' readonly>$descripcion</textarea><br />";
                echo "<h4>Ubicación</h4>";
                echo "<input id='txtCalle_Serv' name='txtCalle_Serv' type='text' readonly value='$calle'/> ";
                echo "<input id='txtNum_Serv' name='txtNum_Serv' type='text' readonly value='$numero'/> ";
                echo "<input id='txtColonia_Serv' name='txtColonia_Serv' type='text' readonly value='$colonia'/> ";
                echo "<input id='txtCodigo_Postal_Serv' name='txtCodigo_Postal_Serv' type='text' readonly value='$cp'/><br />";
                echo "<input id='txtCalle_Serv_eUno' name='txtCalle_Serv_eUno' type='text' readonly value='$calle_1'/> ";
                echo "<input id='txtCalle_Serv_eDos' name='txtCalle_Serv_eDos' type='text' readonly value='$calle_2'/><br />";
                echo "<div class='holder_content1'>";
                  echo "<div class='group4'>";
                    echo "<h4>Fotografía del servicio</h4>";
                    echo "<img src=\"img_serv.php?id=".$ID_Reporte."\" width=\"300\"/>";
                    echo "<br /><br /><input type='submit' name='registrar' value='Actualizar' style='width: 80px;''>";
                  echo "</div>";
                  echo "<div class='group5'>";
                    echo "<h4>Croquis</h4>"; ?>
                     <input hidden id="lat" name="lat" type="text"  maxlength="100" readonly value=<?php echo $lat ?> /><br />
                  <input hidden id="lon" name="lon" type="text"  maxlength="100" readonly value=<?php echo $lon ?> /><br />
                    <div id="map-canvas" style="width:60%; height:60%"></div>
                    <?php
                   // echo "<br /><br /><a href='consulta.php' id=\"arriba\"><img src='../images/back.png' title='Regresar' width='50px' style='margin-left: 300px'></a>";
                  echo "</div>";
                echo "</div>";
              echo "</form>";
            }
          }
        }
      ?>
    </div>
  </body>
</html>