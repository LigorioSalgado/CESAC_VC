<!--?php require('libFPDF/fpdf.php'); class PDF extends FPDF {   function Footer() // Pie de página  {       $this--->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Este es el pie de página creado con el método Footer() de la clase creada PDF que hereda de FPDF','T',0,'C');
    }
 
    function Header() //Encabezado
    {
        $this->SetFont('Arial','B',9);
 
        $this->Line(10,10,206,10);
        $this->Line(10,35.5,206,35.5);
 
        $this->Cell(30,25,'',0,0,'C',$this->Image('images/logo.png', 152,12, 19));
        $this->Cell(111,25,'ALGÚN TÍTULO DE ALGÚN LUGAR <img src="http://s0.wp.com/wp-includes/images/smilies/icon_biggrin.gif?m=1129645325g" alt=":D" class="wp-smiley"> ',0,0,'C', $this->Image('images/logoIzquierda.png',20,12,20));
        $this->Cell(40,25,'',0,0,'C',$this->Image('images/logoDerecha.png', 175, 12, 19));
 
        $this->Ln(25);
    }
 
    function ImprimirTexto($file)
    {
        $txt = file_get_contents($file);
        $this->SetFont('Arial','',12);
        $this->MultiCell(0,5,$txt);
 
    }
 
    function cabecera($cabecera)
    {
        /* Se configura la primera celda
         * , en este caso, la celda que contiene "Nombre",
         * a la posición indicada (y de ahí para abajo
         * seguirán las demás celdas), no olvidar que el origen es la
         * esquina superior izquierda.
         * Así mismo la fuente, estilo y tamaño que tendrá cada celda
         * */
        $this->SetXY(50,115);
        $this->SetFont('Arial','B',15);
 
        /* Se recibirá un array y se generará
         * una celda por cada elemento del mismo
         * con Cell(). El texto que contendrá la celda
         * será cada elemento del array.
         *
         * Cell(40, 7, $columna, 1, 2, 'L')
         * 40 - ancho de la fila
         * 7 - altura de la celda
         * $columna - texto a imprimir, es decir, elementos de array
         * 1 - la celda tendrá activo el borde completo
         * 2 - Cada nueva celda irá una debajo de la anterior
         * 'L' - Texto alineado a la izquierda
         * */
        foreach($cabecera as $columna)
        {
            $this->Cell(40,7,$columna,1, 2 , 'L' ) ;
        }
    }
 
    /* Este método realiza lo mismo que cabecera,
     * la diferencia radica en el parámetro de los bordes
     * Arriba (T)
     * Derecha (R)
     * Abajo (B)
     * los bordes que estarán activos.
     * y el ancho de la celda (90)
     * */
    function datos($datos)
    {
        $this->SetXY(90,115);
        $this->SetFont('Arial','',12);
            foreach ($datos as $columna)
            {
                $this->Cell(65,7,$columna,'TRB',2,'L' );
            }
 
    }
 
    /* El método tabla integra a los métodos cabecera y datos
     * */
    function tabla($cabecera,$datos)
    {
        $this->cabecera ($cabecera) ;
        $this->datos($datos);
    }
 
}//fin clase PDF
        include('mysql.php');
        $consulta = new mysql;
        $consulta->server     = "localhost";
        $consulta->user     = "araceli";
        $consulta->pass     = "huguidugui"; //Cada quien tiene sus formas para ocultar esta información
        $consulta->connect();
        $consulta->select("persona");
 
        //Obtenemos la matricula introducida por el usuario
        $mat=$_POST['buscarMat'];
        //El query que se va a usar
        $cueri = "select Nombre, ApellidoPat, ApellidoMat, Matricula, Puesto, HorarioE, HorarioS FROM empleado WHERE Matricula='$mat'";
 
        //Se asigna a un variable lo que se obtiene del método query
        $respuesta = $consulta->query($cueri);
 
        //Si la consulta tiene 0 resultados, regresar al index.php
        if(($consulta->f_num($respuesta)) == 0)
        {
            header('location:index.php');
        }
        //Sino, generar todo lo que hemos hecho hasta ahora.
        //Y la tabla con los datos extraídos de la BD
        else
        {
 
            $fecha="México D.F. a ".$_POST['dia']." de ". $_POST['mes']. " de ".$_POST['anio'];
 
            $pdf = new PDF();             //Crea objeto PDF
            $pdf->AddPage('P', 'Letter'); //Vertical, Carta
 
            $pdf->SetFont('Arial','B',12); //Arial, negrita, 12 puntos
            $pdf->Cell(0,10,$fecha,0,1,'R'); //Agrega la cadena $fecha
 
            $pdf->Ln();
            $pdf->ImprimirTexto('textoFijo.txt');
 
            //**********************************************************************************************
            $sql = $consulta->query($cueri);
 
            $fila = $consulta->f_array($sql);
 
            $cabecera = array("Nombre","A Paterno","A Materno", "Matricula", "Puesto","HorarioE","HorarioS");
            $datos = array($fila['Nombre'], $fila['ApellidoPat'], $fila['ApellidoMat'],$fila['Matricula'],$fila['Puesto'],$fila['HorarioE'],$fila['HorarioS']);
 
            $pdf->tabla($cabecera,$datos);
            //**********************************************************************************************
 
            $pdf->Output();               //Salida al navegador
        }
?>
