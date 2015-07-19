<?php
//conexion a la base de datos
  mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
  mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

  $id = null;
  $nombre = $_POST['txtNombre'];
  $apellidos = $_POST['txtApellidos'];
  $num_e = (int)$_POST['txtNum_Ext'];
  $num_i = $_POST['txtNum_Int'];
  $calle = $_POST['txtCalle'];  
  $colonia = $_POST['txtColonia'];
  $cp = (int)$_POST['txtCodigo_Postal'];
  $telefono = $_POST['txtTelefono'];
  $email = $_POST['txtEmail'];
  $usuario = $_POST['txtUsername'];
  $pass = $_POST['txtPassword'];
  $tipo = 1;
    

  $resultado = @mysql_query("INSERT INTO Usuarios (ID_Usuario, Apellidos, Nombre, Numero_Interior, Numero_Exterior, Calle, Colonia, Codigo_Postal, Telefono, Email, Username, Pass, Tipo_Usuario) 
    VALUES ('$id', '$apellidos', '$nombre', '$num_i', '$num_e', '$calle', '$colonia', '$cp', '$telefono', '$email', '$usuario', '$pass', '$tipo')")or die ('Error al guardar en la Base de Datos: '.mysql_error());
  if ($resultado){
    header('Location: index.php');
  } 
  else {
    echo "ocurrio un error al copiar el archivo.";
  }
?>
