<!doctype html>  
<head>
  <meta charset="UTF-8">
  <title>CESAC.VC - Solicitud</title>
  <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
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
          	<li><a href="#">Acerca de</a></li>
          	<li><a href="#">Iniciar Sesión</a></li>
          	<li><a href="#">Registrarse</a></li>
          </ul>
        </nav>
	       <!--end menu-->
	     </header>
       <!--end header-->
       <!--start intro-->
       <div id="intro">
        <div class="group_bannner_right">
          <img src="../images/cesac.png" alt="cesac_logo" style="top: 60px; margin-top:50px; margin-left:150px">
        </div>
        <header class="group_bannner">
            <hgroup>
                <br />
                <form class="registrar"  method="post" action="subir.php" enctype="multipart/form-data">
                  <div class="container">

                    <h3>Datos del servicio solicitado</h3>
                      <h4>Asunto</h4>
                      <textarea id="taDescripcion_Servicio" name="taDescripcion_Servicio" rows="4" cols="50">Descripción del servicio a solicitar.</textarea><br />
                      <h4>Ubicación</h4>
                      <input id="txtCalle_Serv" name="txtCalle_Serv" type="text" maxlength="100" value="Calle"/>
                      <input id="txtNum_Serv" name="txtNum_Serv" type="text" maxlength="5" value="Número (aprox.)"/>
                      <input id="txtColonia_Serv" name="txtColonia_Serv" type="text" maxlength="100" value="Colonia"/>
                      <input id="txtCodigo_Postal_Serv" name="txtCodigo_Postal" type="text" maxlength="6" value="Código postal"/><br />
                      <input id="txtCalle_Serv_eUno" name="txtCalle_Serv_eUno" type="text" maxlength="100" value="Entre qué calle"/>
                      <input id="txtCalle_Serv_eDos" name="txtCalle_Serv_eDos" type="text" maxlength="100" value="Y qué calle"/><br />
                      <label for="imagen">Imagen:</label>
                      <input type="file" name="imagen" id="imagen" />
                      <br />
                      <input type="submit" name="registrar" value="Registrar" style="width: 80px;">
					  <?php
					  $n = 3;
					  if ("imagen.php?id=".$n.""){
					  	echo "<img src=\"imagen.php?id=".$n."\" width=\"200\"/>";
              echo "<img src=\"imagen2.php?id=".$n."\" width=\"200\"/>";
            }
					  else
					  	echo "<input type=\"file\" name=\"imagen\" id=\"imagen\" />";
					  ?>
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
        <div id="FooterTree">Diseño HTML5, PHP y CSS por Rivera, Salgado, Jaen, Cortés y Cano</div>
      </div>
    </footer>
    <!--end footer-->
    <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
  </html>