<?php
  session_start();
  if (isset($_SESSION['username']) != null) {
    # code...
    if ($_SESSION['tipo_usuario'] < "20" && $_SESSION['tipo_usuario'] > "25") {
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
  <title>CESAC.VC - Trabajador</title>
  <link rel="icon" href="../images/favicon.gif" type="image/x-icon"/>
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
     
       <Center> <a href="index.html" id="logo"><img src="../images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
         <Center>
        <nav id="nav">
          <ul>
            <li class="current" ><a href="index.php">Inicio</a></li>
            <li><a href="consultarSolicitudes.php">Consultar Servicio</a></li>
            <li><a href="solicitarServicio.php">Alta de Servicio</a></li>
            <li ><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
         </Center>
         <!--end menu-->
       </div>
       <!--end header-->
      <!--start holder-->
      <Center>
      <link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
              <!--[if IE]><link rel="stylesheet" href="cssslider_files/csss_engine1/ie.css"><![endif]-->
              <!--[if lte IE 9]><script type="text/javascript" src="cssslider_files/csss_engine1/ie.js"></script><![endif]-->
              <script type="text/javascript" src="cssslider_files/csss_engine1/gestures.js"></script> <div class='csslider1 autoplay '>
              <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
              <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
              <input name="cs_anchor1" id='cs_pause1_0' type="radio" class='cs_anchor pause'>
              <input name="cs_anchor1" id='cs_pause1_1' type="radio" class='cs_anchor pause'>
              <input name="cs_anchor1" id='cs_pause1_2' type="radio" class='cs_anchor pause'>
              <ul>
                <li class="cs_skeleton"><img src="cssslider_files/csss_images1/imagen1.jpg" style="width: 100%;"></li>
                <li class='num0 img slide'> <img src='cssslider_files/csss_images1/imagen1.jpg' alt='servicios-urbanos' title='servicios-urbanos' /></li>
                <li class='num1 img slide'> <img src='cssslider_files/csss_images1/imagen2.jpg' alt='tepito' title='tepito' /></li>
                <li class='num2 img slide'> <img src='cssslider_files/csss_images1/imagen3.jpg' alt='baches' title='baches' /></li>
              </ul><div class="cs_engine"><a href="http://cssslider.com">angular carousel</a> by cssSlider.com v1.8</div>
              <div class='cs_description'>
                <label class='num0'><span class="cs_title"><span class="cs_wrapper">Bacheo</span></span></label>
                <label class='num1'><span class="cs_title"><span class="cs_wrapper">Alumbrado Público</span></span></label>
                <label class='num2'><span class="cs_title"><span class="cs_wrapper">Poda de Árboles</span></span></label>
              </div>
              <div class='cs_play_pause'>
                <label class='cs_play' for='cs_play1'><span><i></i><b></b></span></label>
                <label class='cs_pause num0' for='cs_pause1_0'><span><i></i><b></b></span></label>
                <label class='cs_pause num1' for='cs_pause1_1'><span><i></i><b></b></span></label>
                <label class='cs_pause num2' for='cs_pause1_2'><span><i></i><b></b></span></label>
                </div>
              <div class='cs_arrowprev'>
                <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
                <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
                <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
              </div>
              <div class='cs_arrownext'>
                <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
                <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
                <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
              </div>
              <div class='cs_bullets'>
                <label class='num0' for='cs_slide1_0'> <span class='cs_point'></span>
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/imagen1.jpg' alt='Restaurar' title='Restaurar' /></span></label>
                <label class='num1' for='cs_slide1_1'> <span class='cs_point'></span>
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/imagen2.jpg' alt='' title='tepito' /></span></label>
                <label class='num2' for='cs_slide1_2'> <span class='cs_point'></span>
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/imagen3.jpg' alt='baches' title='baches' /></span></label>
              </div>
              </div>

            </Center>
        <section class="group4">
          <?php
                 echo "<h4>¡Hola, ".$_SESSION['username']."!</h4>";
          ?>
          </h4>
        <center > <p>Servicio es toda solicitud prestada ante el Gobierno para que realice obras o prestaciones a los que está obligado, en beneficio tuyo y de tu comunidad.</p>
        </center>
        <section class="group5">
         <center> <h3>Pasos</h3>
            <p><span class="purple">1)</span><a href="solicitarServicio.php"><img src="../images/btnSolicitarServicio.png" width="240" height="115" alt="Solicitar un servicio"/></a></p><br />
            <p><span class="purple">2)</span><a href="consultarSolicitudes.php"><img src="../images/btnRevisar.png" width="240" height="115" alt="Consultar el estado se de solucitud"/></a></p>
        
</center>
        </section>
      </div>
      <!--end holder-->
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
