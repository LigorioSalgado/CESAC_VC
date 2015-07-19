<?php
  session_start();
  if (isset($_SESSION['username']) != null) {
    header("Location: index.php");  
  }
?>
<!doctype html>  
<head>
  <title>CESAC VC-Login</title>
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
  <script language="javascript">
    $(document).ready(
      function (){
        $("#pikame").PikaChoose();
      });
  </script>
</head>
<body>
    <!--start container-->
     <div id="header">
     
       <Center> <a href="index.html" id="logo"><img src="images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
         <Center>
        <nav id="nav">
          <ul>
            <li ><a href="#">Inicio</a></li>
            <li><a href="about.php">Acerca de</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
            <li class="current"><a href="signup.php">Registrarse</a></li>
          </ul>
        </nav>
         </Center>
         <!--end menu-->
       </div>
       <!--end header-->
       <!--start intro-->
       <CENTER>
      <section class="wrapper style1">
        <div class="container">
          
          
            <hgroup>
                <br />
                <form class="registrar"  method="post" action="altaUsuarios.php">
                  <div class="container">
                    <h3>Nombre</h3>
                      <input id="txtNombre" name="txtNombre" type="text" onFocus="javascript:this.value=''" maxlength="20" value="nombre(s)"/>
                      <input id="txtApellidos" name="txtApellidos" type="text" onFocus="javascript:this.value=''" maxlength="20" value="apellidos"/>

                    <h3>Dirección</h3>
                      <input id="txtNum_Ext" name="txtNum_Ext" type="text" onFocus="javascript:this.value=''" maxlength="5" value="No. Ext."/>
                      <input id="txtNum_Int" name="txtNum_Int" type="text" onFocus="javascript:this.value=''" maxlength="5" value="int."/>
                      <input id="txtCalle" name="txtCalle" type="text" onFocus="javascript:this.value=''" maxlength="100" value="calle"/>
                      <input id="txtColonia" name="txtColonia" type="text" onFocus="javascript:this.value=''" maxlength="100" value="colonia"/>
                      <input id="txtCodigo_Postal" name="txtCodigo_Postal" onFocus="javascript:this.value=''" type="text" maxlength="6" value="código postal"/>

                    <h3>Contacto</h3>
                      <input id="txtTelefono" name="txtTelefono" type="text" onFocus="javascript:this.value=''" maxlength="12" value="Teléfono"/>
                      <input id="txtEmail" name="txtEmail" type="text" onFocus="javascript:this.value=''" maxlength="50" value="Correo electrónico"/>

                    <h3>Usuario</h3>
                      <input id="txtUsername" name="txtUsername" type="text" onFocus="javascript:this.value=''" maxlength="50" value="Usuario"/>
                      <input id="txtPassword" name="txtPassword" type="password" onFocus="javascript:this.value=''" maxlength="50" value="Contraseña"/>
                    <br />
                    <input type="submit" name="registrar" value="Registrar" style="width: 80px;">
                    <input type="reset" name="borrar" value="Borrar" style="width: 80px;">
                  </div>
                  <br />
                </form>
            </hgroup>
          </div>
          </Section>
          </CENTER>
       
       <!--end intro-->
   
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