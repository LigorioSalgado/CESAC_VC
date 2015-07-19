<?php

 session_start();
  if (isset($_SESSION['username']) != null) {
    # code...
    if ($_SESSION['tipo_usuario'] != '1') {
      # code...
      
    }
  }
  $usuario = $_SESSION['username'];
  define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'Prueba_1');
	$id = $_SESSION['id'];

	$dbLinkId = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Cannot create mysql connection' . mysql_error());
	mysql_select_db(DB_NAME, $dbLinkId);
	$resultUsuario = mysql_query("SELECT * FROM `Usuarios` WHERE `ID_Usuario` = '$id'", $dbLinkId);
	
	if($row = mysql_fetch_array($resultUsuario)){
		$nombre = $row["Nombre"];
		$colonia = $row["Colonia"];
		$calle = $row["Calle"];
		
		}
	
	mysql_free_result($resultUsuario);
	
	mysql_close($dbLinkId);
	
require('libFPDF/fpdf.php');
 
/*
 * Se debe crear siempre una clase heredada de FPDF
 * y partir de aqui se irán agregando la cabecera
 * footer, cuerpo, etc
 * */
 
//Clase en blanco
class PDF extends FPDF
{
	function Footer() // Pie de página
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        /* Cell(ancho, alto, txt, border, ln, alineacion)
         * ancho=0, extiende el ancho de celda hasta el margen de la derecha
         * alto=10, altura de la celda a 10
         * txt= Texto a ser impreso dentro de la celda
         * border=T Pone margen en la posición Top (arriba) de la celda
         * ln=0 Indica dónde sigue el texto después de llamada a Cell(), en este caso con 0, enseguida de nuestro texto
         * alineación=C Texto alineado al centro
         */
        $this->Cell(0,10,'Este documento tiene validez oficial','T',0,'C');
    } 

function Header() //Encabezado
    {
        //Define tipo de letra a usar, Arial, Negrita, 15
        $this->SetFont('Arial','B',9);
 
        /* Líneas paralelas
         * Line(x1,y1,x2,y2)
         * El origen es la esquina superior izquierda
         * Cambien los parámetros y chequen las posiciones
         * */
        $this->Line(10,10,206,10);
        $this->Line(10,35.5,206,35.5);
 
        /* Explicaré el primer Cell() (Los siguientes son similares)
         * 30 : de ancho
         * 25 : de alto
         * ' ' : sin texto
         * 0 : sin borde
         * 0 : Lo siguiente en el código va a la derecha (en este caso la segunda celda)
         * 'C' : Texto Centrado
         * $this->Image('images/logo.png', 152,12, 19) Método para insertar imagen
         *     'images/logo.png' : ruta de la imagen
         *     152 : posición X (recordar que el origen es la esquina superior izquierda)
         *     12 : posición Y
         *     19 : Ancho de la imagen (w)
         *     Nota: Al no especificar el alto de la imagen (h), éste se calcula automáticamente
         * */
 
        $this->Cell(30,25,'',0,0,'C',$this->Image('/opt/lampp/htdocs/cesac_vc/images/cesac.png', 152,12, 19));
        $this->Cell(111,25,'Constancia de Acreeditacion de Servicio',0,0,'C', $this->Image('/opt/lampp/htdocs/cesac_vc/images/Logo VCarranza.png',20,12,20));
        $this->Cell(40,25,'',0,0,'C',$this->Image('/opt/lampp/htdocs/cesac_vc/images/gdf.png', 175, 12, 19));
 
        //Se da un salto de línea de 25
        $this->Ln(25);
    }




}	
	
	
	$m=date("m");
 	switch($m){
		
		case "1": $mes="Enero";break;
		case "2": $mes="Febrero";break;
		case "3": $mes="Marzo";break;
		case "4": $mes="Abril";break;
		case "5": $mes="Mayo";break;
		case "6": $mes="Junio";break;
		case "7": $mes="Julio";break;
		case "8": $mes="Agosto";break;
		case "9": $mes="Septiembre";break;
		case "10": $mes="Octubre";break;
		case "11": $mes="Noviembre";break;
		case "12": $mes="Diciembre";break;	
	}	


	
	
	//$fecha=gettimeofday();
	$dia=date("d"); 
	$m=date("m");
	$anio=date("Y");
	$fecha="Mexico D.F a ";
        $pdf = new PDF();             //Crea objeto PDF
        $pdf->AddPage('P', 'Letter'); //Agrega hoja, Vertical, Carta
	$pdf->Cell(0,10,$fecha.$dia." de ".$mes." del ".$anio ,0,1,'R');
	$pdf->Ln(45);
	$pdf->SetFont('Arial','',12);
	$pdf->cell(0,9,"El c.".$nombre." con domicilio en ".$calle."  colonia ".$colonia ." ha solicitado un servicio  ",0,1,'L');
	$pdf->Ln(1);
	$pdf->cell(0,9,"a la oficina de CESAC; CESAC  se compromete a cumplir  lo siguiente:",0,1,'L');
	$pdf->Ln(1);
	$pdf->cell(0,9,"*Dar aviso al ciudadano sobre el estatus del servicio",0,1,'C');
	$pdf->Ln(1);
	$pdf->cell(0,9,"*Avisar al ciudadano  sobre el termino del servicio",0,1,'C');
	$pdf->Ln(1);
	$pdf->cell(0,9,"*En caso de que no se pueda relaizar el servicio, responder por escrito al ciudadano",0,1,'C');
	$pdf->Ln(1);
	$pdf->cell(0,7,"los motivos por los cuales no pudo realizarse el servicio",0,1,'C');
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',14);
	$pdf->cell(0,7,"Atentamente",0,1,'R');
	$pdf->Ln(12);
	$pdf->SetFont('Arial','',14);
	$pdf->cell(0,7,"Encargado de CESAC",0,1,'R');
	
    $pdf->Output();               //Salida al navegador


mysql_close($link);
 
?>
