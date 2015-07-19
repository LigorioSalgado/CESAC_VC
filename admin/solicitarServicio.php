<?php
echo "hola";
  session_start();
  if ($_SESSION['username'] != null) {
    # code...
    if ($_SESSION['tipo_usuario'] != '0') {
      # code...
      header ("Location: ../");
    }
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
  <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&key=AIzaSyCQQ-TBEprNpwHYAlHGhZpWAiQ5hVZxjPI"></script>
   <script>
            var map;

            function initialize() {
              var mapOptions = {
                zoom: 18
              };
              map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);

              // Try HTML5 geolocation
              if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                  var pos = new google.maps.LatLng(position.coords.latitude,
                                                   position.coords.longitude);

                 /* var infowindow = new google.maps.InfoWindow({
                    map: map,
                    position: pos,
                    content: 'Location found using HTML5.'
                  }); */

                var marker = new google.maps.Marker({
                position: pos,
                map: map,
                 draggable:true,
                animation: google.maps.Animation.DROP
                /* title:"Hello World!" */});
              var infowindow = new google.maps.InfoWindow;
            google.maps.event.addListener(marker, 'mouseover', function() {
              infowindow.setContent("<p>Marker Location:" + marker.getPosition() + "</p>");
                var lat = marker.getPosition().lat();
                var ln = marker.getPosition().lng();
                 document.servicio.lat.value=lat;
                  document.servicio.lon.value=ln;
                infowindow.open(map, marker);
              });
                  map.setCenter(pos);
                }, function() {
                  handleNoGeolocation(true);
                });
              } else {
                // Browser doesn't support Geolocation
                handleNoGeolocation(false);
              }
            }
            function toggleBounce() {



              infowindow.open(map, marker);

             /* if (marker.getAnimation() != null) {
                //marker.setAnimation(null);
                marker.setTitle="Hola";
              
              } else {
               // marker.setAnimation(google.maps.Animation.BOUNCE);
              } */
            }
            function handleNoGeolocation(errorFlag) {
              if (errorFlag) {
                var content = 'Error: The Geolocation service failed.';
              } else {
                var content = 'Error: Your browser doesn\'t support geolocation.';
              }

              var options = {
                map: map,
                position: new google.maps.LatLng(60, 105),
                content: content
              };

              var infowindow = new google.maps.InfoWindow(options);
              map.setCenter(options.position);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
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
            <li  ><a href="index.php">Inicio</a></li>
            <li><a href="consultarSolicitudes.php">Consultar Servicio</a></li>
            <li class="current"><a href="#">Alta de Servicio</a></li>
            <li ><a href="../signout.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
         </Center>
         <!--end menu-->
       </div>
       <!--end header-->
       <!--start intro-->
       <div id="introForm">
        <div class="group_bannner_right">
          <!--img src="../images/cesac.png" alt="cesac_logo" style="top: 60px; margin-top:50px; margin-left:150px"-->
        </div>
         <section class="wrapper style1">
        <div class="container">
          
          <hgroup>
                <br />
                <form class="registrar" name ="servicio" method="post" action="alta.php" enctype="multipart/form-data">
                  

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
                      <input  id="lat" name="lat" type="hidden"  maxlength="100" /><br />
                      <input  id="lon" name="lon" type="hidden"  maxlength="100" /><br />
                      <div id="map-canvas" style="width:60%; height:60%"></div>
                      <br /><br />
                      
                    <input type="submit" name="registrar" value="Registrar" style="width: 80px;">
                    <input type="submit" name="borrar" value="Borrar" style="width: 80px;">
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
    <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
  </html>