<?php
	$HTTP_POST_VARS = $_POST;  
	session_start();
	//datos para establecer la conexion con la base de mysql.
	mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
	mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	function quitar($mensaje)
	{
		$nopermitidos = array("'",'\\','<','>',"\"");
		$mensaje = str_replace($nopermitidos, "", $mensaje);
		return $mensaje;
	}
	if(trim($HTTP_POST_VARS["txtUsername"]) != "" && trim($HTTP_POST_VARS["txtUserPassword"]) != "")
	{
		// Puedes utilizar la funcion para eliminar algun caracter en especifico
		//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
		//$password = $HTTP_POST_VARS["password"];
		// o puedes convertir los a su entidad HTML aplicable con htmlentities
		$usuario = strtolower(htmlentities($HTTP_POST_VARS["txtUsername"], ENT_QUOTES));
		$password = $HTTP_POST_VARS["txtUserPassword"];
		$result = mysql_query('SELECT * FROM Usuarios WHERE Username=\''.$usuario.'\'');
		if($row = mysql_fetch_array($result)){
			if($row["Pass"] == $password){
				$_SESSION["username"] = $row['Username'];
				$_SESSION['id'] = $row['ID_Usuario'];
				$_SESSION['tipo_usuario'] = $row['Tipo_Usuario'];
				header ("Location: index.php");
				//Elimina el siguiente comentario si quieres que re-dirigir con javascript
				/*Ingreso exitoso, ahora sera dirigido a la pagina principal.
				<SCRIPT LANGUAGE="javascript">
				location.href = "index.php";
				</SCRIPT>*/
			}else{
				echo 'Password incorrecto';
			}
		}else{
			echo 'Usuario no existente en la base de datos';
		}
		mysql_free_result($result);
	}else{
		echo 'Debe especificar un usuario y password';
	}
	mysql_close();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Refresh" content="3; url=login.php">
	</head>
	<body>
		<p>Redirigiendo en 3 segundos</p>
	</body>
</html>