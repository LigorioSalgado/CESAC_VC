<?php
    session_start();
  if (isset($_SESSION['username']) != null) {
    # code...
    if ($_SESSION['tipo_usuario'] < "50" && $_SESSION['tipo_usuario'] > "55") {
      # code...
      header ("Location: ../");
    }
  }
  else {
    # code...
    #header ("Location: ../");
  }
?>
<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>CESAC.VC - Consulta Solicitudes</title>
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
</head>
<body>
    <!--start container-->
    < <div id="header">
     
       <Center> <a href="../index.php" id="logo"><img src="../images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
         <Center>
        <nav id="nav">
          <ul>
           <li><a href="index.php">Inicio</a></li>
            <li class="current" ><a href="#">Consultar Servicio</a></li>
            <li  ><a href="solicitarServicio.php">Alta de Servicio</a></li>
            <li><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
         </Center>
         <!--end menu-->
       </div>
       </header>
       <!--end header-->
       <!--start intro-->
       <div id="intro">
        <div class="group_bannner_right">
          <!--img src="../images/cesac.png" alt="cesac_logo" style="top: 60px; margin-top:50px; margin-left:150px"-->
        </div>
        <header class="group_bannner">
            <hgroup>
                <br />
                <h3>Consultar solucitudes</h3>
                <iframe src="consulta.php" scrolling="yes" width="105%" height="450" frameborder="0">
                  <p>Your browser does not support iframes.</p>
                </iframe>
                <!--iframe src="consulta.php" width="980px" height="500px" seamless/></iframe-->
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
  </body>
  </html>
