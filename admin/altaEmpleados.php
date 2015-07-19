<?php
//conexion a la base de datos
  mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
  mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

  $id = null;
  $nombre =utf8_decode( $_POST['txtNombre']);
  $apellidos =utf8_decode( $_POST['txtApellidos']);
  $email = $_POST['txtEmail'];
  $usuario =utf8_decode( $_POST['txtUsername']);
  $pass = utf8_decode($_POST['txtPassword']);
  $tipo = $_POST['selTipo'];
  $trabajador=$_POST['selTrabajador'];
    
if($tipo=='31'){
  $resultado = @mysql_query("INSERT INTO Usuarios (ID_Usuario, Apellidos, Nombre, Email, Username, Pass, Tipo_Usuario) 
    VALUES ('$id', '$apellidos', '$nombre', '$email', '$usuario', '$pass', '$trabajador')")or die ('Error al guardar en la Base de Datos: '.mysql_error());
        if ($resultado){
          header('Location: index.php');
        } 
        else {
          echo "ocurrio un error al copiar el archivo.";
        }
}
else{

      $resultado = @mysql_query("INSERT INTO Usuarios (ID_Usuario, Apellidos, Nombre, Email, Username, Pass, Tipo_Usuario) 
    VALUES ('$id', '$apellidos', '$nombre', '$email', '$usuario', '$pass', '$tipo')")or die ('Error al guardar en la Base de Datos: '.mysql_error());
        if ($resultado){
          header('Location: index.php');
        } 
        else {
          echo "ocurrio un error al copiar el archivo.";
        }


}
?>
