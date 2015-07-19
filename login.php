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
            <li class="current"><a href="login.php">Iniciar Sesión</a></li>
            <li><a href="signup.php">Registrarse</a></li>
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
          
          
            <hgroup style="padding: 1px 1px 1px 2px; border-style: double; border-width:4px;">
                <br />
                <form method="post" action="signin.php">
                  <div class="container">
                    <h3>Iniciar Sesión</h3>
                    <h4>Usuario</h4>
                      <input id="txtUsername" name="txtUsername" type="text"/>
                     <h4>Contraseña</h4>
                      <input id="txtUserPassword" name="txtUserPassword" type="password"/>
                    <br /><br />
                    <input type="submit" name="btnLogin" value="Iniciar Sesión" style="width: 120px;"><br>
                    <a href ="lostPasword.php"/><h1> ¿Olvidaste tu contraseña? </h1></a>
                     </div>
                  <?php
                    if (isset($_POST['btnLogin'])) {
                      $registrar = createUser($_REQUEST['txtUser'],$_REQUEST['txtPassword'],$_REQUEST['txtType']);
                      echo "<h4>".$registrar."</h4>";
                    }                    
                    ?>
                  <br />
                </form>
            </hgroup>
          </div>
          </Section>
          </CENTER>
       
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