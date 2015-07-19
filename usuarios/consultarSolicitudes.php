<?php
  session_start();
  if ($_SESSION['username'] != null) {
    # code...
    if ($_SESSION['tipo_usuario'] != '1') {
      # code...
      header ("Location: ../");
    }
  }
?>
<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>CESAC VC-Usuarios</title>
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
<body>
    <!--start container-->
    <div id="header">
     
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
       <!--end header-->
       <!--start intro-->
      <section class="wrapper style1">
        <div class="container">
            <hgroup>
                <br />
                <h3>Consultar solucitudes</h3>
                <iframe src="consulta.php" scrolling="yes" width="105%" height="600" frameborder="0">
                  <p>Your browser does not support iframes.</p>
                </iframe>
                <!--iframe src="consulta.php" width="980px" height="500px" seamless/></iframe-->
            </hgroup>
			 <form method="get" action="generador.php">

			<input type="submit" value="Imprimir PDF" />

			</form>
     </div>
  </Section>
            
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