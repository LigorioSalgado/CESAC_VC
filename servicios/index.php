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
  <title>CESAC.VC - Ciudadanos</title>
  <link rel="icon" href="../images/favicon.gif" type="image/x-icon"/>
   <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <link rel="shortcut icon" href="../images/favicon.gif" type="image/x-icon"/> 
  <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
  <link type="text/css" href="../css/css3.css" rel="stylesheet" />
  <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.pikachoose.js"></script>
  <script language="javascript">
  	$(document).ready(
  		function (){
  			$("#pikame").PikaChoose();
  		});
  </script>
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
          	<li><a href="#" class="current">Inicio</a></li>
            <li><a href="#solicitarServicio.php">Crear Reporte</a></li>
            <li><a href="consultarSolicitudes.php">Consultar Reporte</a></li>
            <li><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
	       <!--end menu-->
	     </header>
       <!--end header-->
      <!--start holder-->
      <div class="holder_content1">
        <section class="group4">
          <?php
                  echo "<h4>¡Hola, ".$_SESSION['username']."!</h4>";
          ?>
          </h4>
          <p>Servicio es toda solicitud prestada ante el Gobierno para que realice obras o prestaciones a los que está obligado, en beneficio tuyo y de tu comunidad.</p>
          <div class="pikachoose">
            <ul id="pikame" >
              <li><a href="#"><img src="../images/imagen3.jpg" width="500" height="auto" alt="picture"/></a><span>“Poda de Árboles en Vía Pública.”</span></li>
              <li><a href="#"><img src="../images/imagen2.jpg" width="500" height="auto" alt="picture"/></a><span>“Reparación de Alumbrado Público. “ </span></li>
              <li><a href="#"><img src="../images/imagen1.jpg" width="500" height="auto" alt="picture"/></a><span>“Bacheo de Carpeta Asfáltica.”</span></li>
            </ul>
          </div>
        </section>
        <section class="group5">
          <h3>Pasos</h3>
            <p><span class="purple">1)</span><a href="#solicitarServicio.php"><img src="../images/btnSolicitarServicio.png" width="240" height="115" alt="Solicitar un servicio"/></a></p><br />
            <p><span class="purple">2)</span><a href="consultarSolicitudes.php"><img src="../images/btnRevisar.png" width="240" height="115" alt="Consultar el estado se de solucitud"/></a></p><br />
        </section>
      </div>
      <!--end holder-->
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
    <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
  </html>
