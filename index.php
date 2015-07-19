<?php
  session_start();
  if (isset($_SESSION['username']) != null){
    if ($_SESSION['tipo_usuario'] == "0") {
      header ("Location: admin/index.php");
    }
    elseif ($_SESSION['tipo_usuario'] == "1") {
      header ("Location: usuarios/index.php");
    }
      elseif ($_SESSION['tipo_usuario'] > "30" && $_SESSION['tipo_usuario'] < "37") {
      # code...
      header ("Location: obras/index.php");
    }
     elseif ($_SESSION['tipo_usuario'] > "20" && $_SESSION['tipo_usuario'] < "25") {
      # code...
      header ("Location: cesac/index.php");
    }
  }
?>
<!doctype html>  
<head>
  <title>CESAC VC-Inicio</title>
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
    <!--start Header-->
    <div id="header">
     
       <Center> <a href="index.html" id="logo"><img src="images/cesa.png" width="221" height="100" alt="logo"/></a> </Center>   
        <!--end logo-->
        <!--start menu-->
         <Center>
      	<nav id="nav">
          <ul>
          	<li class="current"><a href="#">Inicio</a></li>
          	<li><a href="about.php">Acerca de</a></li>
          	<li><a href="login.php">Iniciar Sesión</a></li>
          	<li><a href="signup.php">Registrarse</a></li>
          </ul>
        </nav>
         </Center>
	       <!--end menu-->
	     </div>
       <!--end header-->
                <Center>
                 <!-- Start cssSlider.com -->
              <!-- Generated by cssSlider.com 1.8 -->
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
                <li class="cs_skeleton"><img src="cssslider_files/csss_images1/serviciosurbanos.jpg" style="width: 100%;"></li>
                <li class='num0 img slide'> <img src='cssslider_files/csss_images1/serviciosurbanos.jpg' alt='servicios-urbanos' title='servicios-urbanos' /></li>
                <li class='num1 img slide'> <img src='cssslider_files/csss_images1/tepito.jpg' alt='tepito' title='tepito' /></li>
                <li class='num2 img slide'> <img src='cssslider_files/csss_images1/baches.jpg' alt='baches' title='baches' /></li>
              </ul><div class="cs_engine"><a href="http://cssslider.com">angular carousel</a> by cssSlider.com v1.8</div>
              <div class='cs_description'>
                <label class='num0'><span class="cs_title"><span class="cs_wrapper">Balizamineto</span></span></label>
                <label class='num1'><span class="cs_title"><span class="cs_wrapper">Banquetas</span></span></label>
                <label class='num2'><span class="cs_title"><span class="cs_wrapper">Bacheo</span></span></label>
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
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/serviciosurbanos.jpg' alt='Restaurar' title='Restaurar' /></span></label>
                <label class='num1' for='cs_slide1_1'> <span class='cs_point'></span>
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/tepito.jpg' alt='' title='tepito' /></span></label>
                <label class='num2' for='cs_slide1_2'> <span class='cs_point'></span>
                  <span class='cs_thumb'><img src='cssslider_files/csss_tooltips1/baches.jpg' alt='baches' title='baches' /></span></label>
              </div>
              </div>
            </Center>
    <!-- End cssSlider.com -->

      <!--start intro-->
       
      <section class="wrapper style2">
        <div class="container">
          <header class="major">
            <h2>Bienvenido a Report V.C. </h2>
            <p>Esta plataforma esta destinada para los habitantes de Venustiano Carranza</p>
            <Center>
            <img src="images/logo.png" width="374" height="128"  alt="baner"></Center>
          </header>
        </div>
      </section>

  </body>
  </html>
