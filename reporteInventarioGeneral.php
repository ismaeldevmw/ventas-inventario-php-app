<?php
require ('fpdf.php');

class PDF extends FPDF

	{

	// Cabecera de página

	function Header()
		{
		
        // Definir formato para fecha y zona horaria
		date_default_timezone_set('America/Mexico_City');
		$fecha = date("d-m-Y");
		$hora = date("H:i:s");		

		// Logo

		$this->Image('images/gen_image_produit.png', 6, 6, 60); //ruta imagen, X(0 a 210), Y, dimension en porcentaje, width y height si ponemos otro parametro

		// Arial bold 15

		$this->SetFont('Arial', 'B', 15);

		// Movernos a la derecha

		$this->Cell(80);

		// Título

		$this->Cell(25, 10, 'Servicios SellSoft ', 0, 1, 'C');
		$this->SetFont('Arial', 'I', 12);

		// Datos
        // Colores de los bordes, fondo y texto
		$this->SetDrawColor(63, 81, 181);
		$this->SetFillColor(63, 81, 181);
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, 'SellSoft S.A de C.V', 0, 0, 'C');
		$this->SetTextColor(250, 250, 250);
		$this->Cell(40, 6, 'FECHA', 1, 1, 'C', true); // Titulo_Fecha
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, 'RFC: LOCI930402', 0, 0, 'C');
		$this->Cell(40, 6, $fecha, 1, 1, 'C'); // Fecha
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, 'Av. Ferrocarril No. 25 Col. Chalco Centro', 0, 0, 'C');
		$this->SetTextColor(250, 250, 250);
		$this->Cell(40, 6, 'HORA', 1, 1, 'C', true); // Titulo_Hora
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, utf8_decode('Municipio Chalco, Estado de México') , 0, 0, 'C');
		$this->Cell(40, 6, $hora, 1, 1, 'C'); // Hora

		// Salto de línea

		$this->Ln(15);
		global $title;

		// Arial bold 15

		$this->SetFont('Arial', 'I', 15);

		// Calculamos ancho y posición del título.

		$w = $this->GetStringWidth($title) + 6;
		$this->SetX((210 - $w) / 2);
		$this->SetTextColor(26, 35, 126);

		// Ancho del borde (1 mm)
		// $this->SetLineWidth(1);
        
		// Linea

		$this->Line(10, 58, 200, 58);

		// Título

		$this->Cell($w, 9, $title, 0, 1, 'C');

		// Linea

		$this->Line(10, 68, 200, 68);
        
        // Marco
        
        $this->Line(5, 5, 205, 5);// Arriba
        $this->Line(5, 5, 5, 292);// Izquierda
        $this->Line(205, 5, 205, 292);// Derecha
        $this->Line(5, 292, 205, 292);// Abajo
		}

	// Pie de página

	function Footer()
		{

		// Posición: a 1,5 cm del final

		$this->SetY(-15);

		// Arial italic 8

		$this->SetFont('Arial', 'I', 10);

		// Número de página

		$this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . ' de {nb}', 0, 0, 'C');
		}
	}

    // Creación del objeto de la clase heredada

    $pdf = new PDF(); // Orientacion, unidad, tamaño;
    $title = 'Reporte de Inventario General';
    $pdf->AliasNbPages();// Identificar numero de página
    $pdf->AddPage(); // Agregar pagina(orientacion,tamaño)
    $pdf->SetFont("Arial", "", 10); // Establecer fuente (Familia, estilo. tamaño)

    // DATOS DE CONEXION

    mysql_connect("localhost", "root", "");
    mysql_select_db("tienda24");

    // MOSTRAMOS LA TABLA

    $pdf->Ln();
    $pdf->SetX(10);
    $pdf->SetDrawColor(63, 81, 181);
    $pdf->SetTextColor(250, 250, 250);
    $pdf->SetFillColor(63, 81, 181);
    $pdf->Cell(20, 10, utf8_decode("Código"), 1, 0, 'L', true);
    $pdf->Cell(115, 10, utf8_decode("Descripción"), 1, 0, 'L', true);
    $pdf->Cell(19, 10, "Existencias", 1, 0, 'L', true);
    $pdf->Cell(18.3, 10, "$ Unitario", 1, 0, 'L', true);
    $pdf->Cell(18.3, 10, "$ Venta", 1, 0, 'L', true);
   
    $sql1 = "SELECT * from inventario_general";
    $rec = mysql_query($sql1);

while ($row = mysql_fetch_array($rec))
	{
	$pdf->SetFont("Arial", "", 10);
	$pdf->Ln();
	$pdf->SetX(10);
	$pdf->SetTextColor(66, 66, 66);
	$pdf->Cell(20, 5, $row['codigo_producto'], 1, 0, 'L');
	$pdf->Cell(115, 5, $row['descripcion'], 1, 0, 'L');
	$pdf->Cell(19, 5, $row['existencias_prod'], 1, 0, 'L');
	$pdf->Cell(18.3, 5, $row['precio_u'], 1, 0, 'L');	
    $pdf->Cell(18.3, 5, $row['precio'], 1, 0, 'L');	
	}

$pdf->Output();

?>