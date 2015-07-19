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
  <title>CESAC.VC - Solicitud</title>
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
            <li><a href="#" class="current">Crear Reporte</a></li>
            <li><a href="consultarSolicitudes.php">Consultar Reporte</a></li>
            <li><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
	       <!--end menu-->
	     </header>
       <!--end header-->
       <!--start intro-->
       <div id="introForm">
        <div class="group_bannner_right">
          <!--img src="../images/cesac.png" alt="cesac_logo" style="top: 60px; margin-top:50px; margin-left:150px"-->
        </div>
        <header class="group_bannner">
            <hgroup>
                <br />
                <form class="registrar"  method="post" action="alta.php" enctype="multipart/form-data">
                  <div class="container">

                    <h3>Datos del servicio solicitado</h3>
                      <h4>Tipo de servicio</h4>
                      <select id="selServicio" name="selServicio">
                        <option >Seleccione una opción</option>
                        <option value="1">DESARROLLO DELEGACIONAL</option>
                        <option value="2">DESARROLLO SOCIAL</option>
                        <option value="3">JURÍDICA Y DE GOBIERNO</option>
                        <option value="4">OBRAS Y DESARROLLO URBANO</option>
                        <option value="5">PARTICIPACIÓN CIUDADANA</option>
                        <option value="6">SEGURIDAD PÚBLICA</option>
                        <option value="7">SERVICIOS URBANOS</option>
                      </select>
                      <p>Si no estás seguro <a href="http://bit.ly/17CI8Am" target="_blank" style="color: blue;">clic aqui</a></p>
                      <h4>Asunto</h4>
                      <textarea id="taDescripcion_Servicio" name="taDescripcion_Servicio" onFocus="javascript:this.value=''" rows="3" cols="50">Descripción del servicio a solicitar.</textarea><br />
                      <h4>Ubicación</h4>
                      <input id="txtCalle_Serv" name="txtCalle_Serv" type="text" onFocus="javascript:this.value=''" maxlength="100" value="calle"/>
                      <input id="txtNum_Serv" name="txtNum_Serv" type="text" onFocus="javascript:this.value=''" maxlength="5" value="Numero (aprox.)"/>
                      <input id="txtColonia_Serv" name="txtColonia_Serv" type="text" onFocus="javascript:this.value=''" maxlength="100" value="colonia"/>
                      <input id="txtCodigo_Postal_Serv" name="txtCodigo_Postal_Serv" type="text" onFocus="javascript:this.value=''" maxlength="6" value="código postal"/><br />
                      <input id="txtCalle_Serv_eUno" name="txtCalle_Serv_eUno" type="text" onFocus="javascript:this.value=''" maxlength="100" value="Entre qué calle"/>
                      <input id="txtCalle_Serv_eDos" name="txtCalle_Serv_eDos" type="text" onFocus="javascript:this.value=''" maxlength="100" value="y qué calle"/><br />
                      <h4>Fotografía del servicio</h4>
                      <input type="file" name="fImage_servicio" id="fImage_servicio" />
                      <h4>Croquis</h4>
                      <input type="file" name="fImage_Croquis" id="fImage_Croquis" />
                      <br /><br />
                    <input type="submit" name="registrar" value="Registrar" style="width: 80px;">
                    <input type="submit" name="borrar" value="Borrar" style="width: 80px;">
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