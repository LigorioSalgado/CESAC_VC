<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-wide.css" />
    </noscript>
    <style >input[type="text"] { width: 500px; }    </style>
    </head>

<body>
    <div id="header">
     
       <Center> <a href="index.html" id="logo"><img src="images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
        
             <Center>
            <nav id="nav">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca de</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="signup.php">Registrarse</a></li>
                  </ul>
            </nav>
             </Center>
             <!--end menu-->
           </div>
           <center>
    <h4> Ingrese su usuario o correo electrónico </h4><center>
            <?php 
                mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
                 mysql_select_db('Prueba_1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
                    // incluímos los datos de acceso a la BD 
                if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos del formulario 
                    if(empty($_POST['usuario_nombre'])) { 
                        echo "No ha ingresado el usuario. <a href='javascript:history.back();'>Reintentar</a>"; 
                    }else { 
                        $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']); 
                        $usuario_nombre = trim($usuario_nombre); 
                        $sql = mysql_query("SELECT usuario_nombre, usuario_clave, usuario_email FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'"); 
                        if(mysql_num_rows($sql)) { 
                            $row = mysql_fetch_assoc($sql); 
                            $num_caracteres = "10"; // asignamos el número de caracteres que va a tener la nueva contraseña 
                            $nueva_clave = substr(md5(rand()),0,$num_caracteres); // generamos una nueva contraseña de forma aleatoria 
                            $usuario_nombre = $row['usuario_nombre']; 
                            $usuario_clave = $nueva_clave; // la nueva contraseña que se enviará por correo al usuario 
                            $usuario_clave2 = md5($usuario_clave); // encriptamos la nueva contraseña para guardarla en la BD 
                            $usuario_email = $row['usuario_email']; 
                            // actualizamos los datos (contraseña) del usuario que solicitó su contraseña 
                            mysql_query("UPDATE usuarios SET usuario_clave='".$usuario_clave2."' WHERE usuario_nombre='".$usuario_nombre."'"); 
                            // Enviamos por email la nueva contraseña 
                            $remite_nombre = ""; // Tu nombre o el de tu página 
                            $remite_email = ""; // tu correo 
                            $asunto = "Recuperación de contraseña"; // Asunto (se puede cambiar) 
                            $mensaje = "Se ha generado una nueva contraseña para el usuario <strong>".$usuario_nombre."</strong>. La nueva contraseña es: <strong>".$usuario_clave."</strong>."; 
                            $cabeceras = "From: ".$remite_nombre." <".$remite_email.">\r\n"; 
                            $cabeceras = $cabeceras."Mime-Version: 1.0\n"; 
                            $cabeceras = $cabeceras."Content-Type: text/html"; 
                            $enviar_email = mail($usuario_email,$asunto,$mensaje,$cabeceras); 
                            if($enviar_email) { 
                                echo "La nueva contraseña ha sido enviada al email asociado al usuario ".$usuario_nombre."."; 
                            }else { 
                                echo "No se ha podido enviar el email. <a href='javascript:history.back();'>Reintentar</a>"; 
                            } 
                        }else { 
                            echo "El usuario <strong>".$usuario_nombre."</strong> no está registrado. <a href='javascript:history.back();'>Reintentar</a>"; 
                        } 
                    } 
                }else { 
            ?> 
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
       <center>
        
        <input type="text" name="usuario_nombre" /><br /> 
        <input type="submit" name="enviar" value="Enviar" /> <center>
    </form> 
    </body>
<?php 
    } 
?>
</html>