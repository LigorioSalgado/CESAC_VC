<?php
  session_start();
  if ($_SESSION['username'] != null) {
    # code...
    if ($_SESSION['tipo_usuario'] != '0') {
      # code...
      header ("Location: ../");
    }
  }
?>
<!doctype html>  
<head>
  <meta charset="UTF-8">
  <title>CESAC.VC - Registro</title>
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
<script>
  function mostrar(){
      if(document.getElementById('selTipo').value=='31'){

          document.getElementById('dep_trabajador').style.display='block';
      }

  }

</script>

</head>
<body>
    <!--start container-->
    <div id="container">
      <!--start header-->
     <div id="header">
     
       <Center> <a href="index.html" id="logo"><img src="../images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
         <Center>
        <nav id="nav">
          <ul>
            <li  ><a href="index.php">Inicio</a></li>
            <li><a href="consultarSolicitudes">Consultar Servicio</a></li>
            <li><a href="solicitarServicio.php">Alta de Servicio</a></li>
            <li class="current"><a href="solicitarServicio.php">Añadir Empleado</a></li>
            <li ><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
         </Center>
         <!--end menu-->
       </div>
       <!--end header-->
       <!--start intro-->
       <div id="intro">
        <div class="group_bannner_right">
          
        </div>
        <header class="group_bannner">
            <hgroup>
                <br />
                <form class="registrar"  method="post" action="altaEmpleados.php">
                  <div class="container">
                    <h3>Nombre</h3>
                      <input id="txtNombre" name="txtNombre" type="text" onFocus="javascript:this.value=''" maxlength="20" value="nombre(s)"/>
                      <input id="txtApellidos" name="txtApellidos" type="text" onFocus="javascript:this.value=''" maxlength="20" value="apellidos"/>

                    <h3>Correo</h3>
                      <input id="txtEmail" name="txtEmail" type="text" onFocus="javascript:this.value=''" maxlength="50" value="Correo electrónico"/>

                    <h3>Usuario</h3>
                      <input id="txtUsername" name="txtUsername" type="text" onFocus="javascript:this.value=''" maxlength="50" value="Usuario"/>
                      <input id="txtPassword" name="txtPassword" type="text" onFocus="javascript:this.value=''" maxlength="50" value="Contraseña"/>
                    
                    <h3>Tipo de usuario</h3>
                      <select id="selTipo" name="selTipo" onChange="mostrar()">
                        <option value="0">Administrador</option>
                        <option value="21">Trabajador de CESAC</option>
                        <option value="31">Trabajador de departamento operativo</option>
                        <option value="1">Ciudadano</option>
                      </select>
                     <br />
                    <br />
                    <div id="dep_trabajador" style='display:none'>
                         <h3>Departameto del trabajador</h3>
                      <select id="selTrabajador" name="selTrabajador">
                        <option value="30">DESARROLLO DELEGACIONAL</option>
                        <option value="31">DESARROLLO SOCIAL</option>
                        <option value="32">JURÍDICA Y DE GOBIERNO</option>
                        <option value="33">OBRAS Y DESARROLLO URBANO</option>
                        <option value="34">PARTICIPACIÓN CIUDADANA</option>
                        <option value="35">SEGURIDAD PÚBLICA</option>
                        <option value="36">SERVICIOS URBANOS</option>
                      </select>
                       <br />
                    <br />
                    </div>
                    <input type="submit" name="registrar" value="Registrar" style="width: 80px;">
                    <input type="reset" name="borrar" value="Borrar" style="width: 80px;">
                  </div>
                  <br />
                </form>
            </hgroup>
        </header>
       </div>
       <!--end intro-->
    </div>
    <!--end container-->
    <!--start footer-->
    <footer>
      <div class="container">
        <div id="FooterTwo"> © 2013 Propósito educativo </div>
        <div id="FooterTree">Diseño HTML5, PHP y CSS </div>
      </div>
    </footer>
    <!--end footer-->
    <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
  </html>