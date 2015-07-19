<?php
session_start();
//conexion a la base de datos
  mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
  mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

//comprobamos si ha ocurrido un error.
if ( !isset($_FILES["fImage_servicio"]) || $_FILES["fImage_servicio"]["error"] > 0 ){
  echo "ha ocurrido un error";
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de fImage_servicio permitido.
  //y que el tamano del archivo no exceda los 16MB
  $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
  $limite_kb = 16384;

  if (in_array($_FILES['fImage_servicio']['type'], $permitidos) && $_FILES['fImage_servicio']['size'] <= $limite_kb * 1024){

    //este es el archivo temporal
    $fImage_servicio_temporal  = $_FILES['fImage_servicio']['tmp_name'];
    //este es el tipo de archivo
    $tipo = $_FILES['fImage_servicio']['type'];
    //leer el archivo temporal en binario
                $fp     = fopen($fImage_servicio_temporal, 'r+b');
                $data = fread($fp, filesize($fImage_servicio_temporal));
                fclose($fp);

    //este es el archivo temporal
    $fImage_croquis_temporal  = $_FILES['fImage_Croquis']['tmp_name'];
    //este es el tipo de archivo
    $tipo_croquis = $_FILES['fImage_Croquis']['type'];
    //leer el archivo temporal en binario
                $fp     = fopen($fImage_croquis_temporal, 'r+b');
                $data_croquis = fread($fp, filesize($fImage_croquis_temporal));
                fclose($fp);
                
                //escapar los caracteres
                $data = mysql_escape_string($data);
                $data_croquis = mysql_escape_string($data_croquis);
                $id = $_SESSION['id'];
                $calle = $_POST['txtCalle_Serv'];
                $numero = $_POST['txtNum_Serv'];
                $colonia = $_POST['txtColonia_Serv'];
                $cp = $_POST['txtCodigo_Postal_Serv'];
                $calle_uno = $_POST['txtCalle_Serv_eUno'];
                $calle_dos = $_POST['txtCalle_Serv_eDos'];
                $descripcion = $_POST['taDescripcion_Servicio'];
                $departamento = $_POST['selServicio'];
                $lat = $_POST['lat'];
                $lon = $_POST['lon'];
                if ($_POST['selServicio'] != null && $_POST['selServicio'] != 0) {
                  # code...
                  $status = 1;
                }
                else{
                  $status = 0;
                }
                echo $departamento;
    

    $resultado = @mysql_query("INSERT INTO 
      Reportes (ID_Usuario, Calle, Numero, Colonia, Codigo_Postal, Calle_Uno, Calle_Dos, Descripcion, Estatus, Departamento, Imagen, Tipo_imagen, Lati, Lon) 
      VALUES ('$id', '$calle', '$numero',  '$colonia', '$cp', '$calle_uno', '$calle_dos', '$descripcion', '$status', '$departamento', '$data', '$tipo','$lat','$lon')");
    if ($resultado){
      header('Location: index.php');
    } else {
      echo "ocurrio un error al copiar el archivo."+mysql_error();
    }
  } else {
    echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
  }
}
?>