<?php
    session_start();
  if (isset($_SESSION['username']) != null) {
    # code...
    if ($_SESSION['tipo_usuario'] < "40" && $_SESSION['tipo_usuario'] > "45") {
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
  <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
   <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <link rel="shortcut icon" href="../images/favicon.gif" type="image/x-icon"/> 
  <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
  <link type="text/css" href="../css/css3.css" rel="stylesheet" />
  <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>

</head>
<body>
    <!--start container-->
    <div id="container">
      <!--start header-->
      <header>
        <!--start logo-->
        <a href="#" id="logo"><img src="../images/logo.png" width="221" height="100" alt="logo"/></a>    
        <!--end logo-->
        <!--start menu-->
      	<nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="solicitarServicio.php">Crear Reporte</a></li>
            <li><a href="#" class="current">Consultar Reporte</a></li>
            <li><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
	       <!--end menu-->
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
        <div id="FooterTree">Diseño HTML5, PHP y CSS por Rivera, Salgado, Jaen, Cortés y Cano</div>
      </div>
    </footer>
    <!--end footer-->
  </body>
  </html>