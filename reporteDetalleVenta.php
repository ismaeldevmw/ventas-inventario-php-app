<?php
require ('fpdf.php');
require ('numtoletras.php');
$id = $_POST['id'];

class PDF extends FPDF

	{

	// Cabecera de página

	function Header()
		{
        
        // DATOS DE CONEXION

        mysql_connect("localhost", "root", "");
        mysql_select_db("tienda24");
		
        // Definir formato para fecha y zona horaria
		date_default_timezone_set('America/Mexico_City');
		$fecha = date("d-m-Y");
		$hora = date("H:i:s");
		$id = $_POST['id'];

		// Logo

		$this->Image('images/gen_image_produit.png', 6, 6, 50); //ruta imagen, X(0 a 210), Y, dimension en porcentaje, width y height si ponemos otro parametro

		// Arial bold 15

		$this->SetFont('Arial', 'B', 15);

		// Movernos a la derecha

		$this->Cell(80);

		// Título

		$this->Cell(25, 10, 'Servicios SellSoft ', 0, 1, 'C');
		$this->SetFont('Arial', '', 12);
        
        $sql = "SELECT * from datos_tienda WHERE id_datos_tienda=1";
        $rec = mysql_query($sql);

        while ($row = mysql_fetch_array($rec))
        {
            
		// Datos
        // Colores de los bordes, fondo y texto
            
		$this->SetDrawColor(63, 81, 181);
		$this->SetFillColor(63, 81, 181);
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, $row['nombre_tienda'], 0, 0, 'C');
		$this->SetTextColor(250, 250, 250);
        $this->SetFont('Arial', '', 12);
		$this->Cell(40, 6, 'FECHA', 1, 1, 'C', true); // Titulo_Fecha
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'I', 12);
		$this->Cell(118, 6, 'RFC: '.$row['rfc'], 0, 0, 'C');
		$this->Cell(40, 6, $fecha, 1, 1, 'C'); // Fecha
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'I', 12);
		$this->Cell(118, 6, 'Tel: '.$row['telefono_tienda'], 0, 0, 'C');
		$this->SetTextColor(250, 250, 250);
        $this->SetFont('Arial', '', 12);
		$this->Cell(40, 6, 'HORA', 1, 1, 'C', true); // Titulo_Hora
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'I', 12);
		$this->Cell(118, 6, utf8_decode('') , 0, 0, 'C');
		$this->Cell(40, 6, $hora, 1, 1, 'C'); // Hora

		
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, $row['direccion'].',', 0, 0, 'C');
		$this->Cell(40, 6, '', 0, 1, 'C'); 
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
		$this->Cell(118, 6, 'c.p. '.$row['cod_postal'], 0, 0, 'C');
		$this->SetTextColor(250, 250, 250);
        $this->SetFont('Arial', '', 12);
		$this->Cell(40, 6, 'FACTURA', 1, 1, 'C', true); // Titulo_Factura
		$this->Cell(32); // Vacio
		$this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'I', 12);
		$this->Cell(118, 6, 'E-mail: '.$row['correo'], 0, 0, 'C');
		$this->Cell(40, 6, 'No. '.$id, 1, 1, 'C'); // No. factura
        }

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

		$this->Line(10, 76, 200, 76);

		// Título

		$this->Cell($w, 9, $title, 0, 1, 'C');

		// Linea

		$this->Line(10, 86, 200, 86);
        
        // Marco
        
        $this->Line(5, 5, 205, 5);// Arriba
        $this->Line(5, 5, 5, 291);// Izquierda
        $this->Line(205, 5, 205, 291);// Derecha
        $this->Line(5, 291, 205, 291);// Abajo
		}

	// Pie de página

	function Footer()
		{

		// Posición: a 1,5 cm del final

		$this->SetY(-17);

		// Arial italic 8

		$this->SetFont('Arial', 'I', 10);

        // Linea
		$this->Line(5, 278, 205, 278);
        

		// Contenido
        $this->Cell(0, 5, utf8_decode('ESTE DOCUMENTO ES UNA REPRESENTACION IMPRESA DE UN CFD '), 0, 0, 'C');
        $this->Ln();
        $this->Cell(0, 5, utf8_decode('PAGO HECHO EN UNA SOLA EXHIBICIÓN'), 0, 0, 'C');
        $this->Ln();
		$this->Cell(0, 8, utf8_decode('Página ') . $this->PageNo() . ' de {nb}', 0, 0, 'C');		
        
        
		}
	}

    // Creación del objeto de la clase heredada

    $pdf = new PDF('P','mm','A4'); // Orientacion, unidad, tamaño;
    //$pdf = new PDF('P','mm',array(100,297)); // Orientacion, unidad, tamaño;
    $title = 'Detalle de su Compra';
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
    $pdf->Cell(110, 10, utf8_decode("Descripción"), 1, 0, 'L', true);
    $pdf->Cell(20, 10, "Cantidad", 1, 0, 'L', true);
    $pdf->Cell(20, 10, "P. Unitario", 1, 0, 'L', true);
    $pdf->Cell(20, 10, "Importe", 1, 0, 'L', true);
   
    //$sql1 = "SELECT idproducto, cantidad, precio, subtotal FROM venta_detalle WHERE idventa='$id'";
    $sql1 = "SELECT codigo_producto, descripcion, cantidad, venta_detalle.precio, subtotal FROM producto JOIN venta_detalle USING(idproducto) WHERE idventa='$id'";
    $rec = mysql_query($sql1);

while ($row = mysql_fetch_array($rec))
	{
	$pdf->SetFont("Arial", "", 10);
	$pdf->Ln();
	$pdf->SetX(10);
	$pdf->SetTextColor(66, 66, 66);
    $pdf->Cell(20, 5, $row['codigo_producto'], 1, 0, 'L');
	$pdf->Cell(110, 5, $row['descripcion'], 1, 0, 'L');
	$pdf->Cell(20, 5, $row['cantidad'], 1, 0, 'L');
	$pdf->Cell(20, 5, $row['precio'], 1, 0, 'L');
	$pdf->Cell(20, 5, $row['subtotal'], 1, 0, 'L');	
	}

	 $sql2 = "SELECT sum(subtotal)as total from venta_detalle where idventa='$id' group by idventa";
    $rec = mysql_query($sql2);
    while ($row = mysql_fetch_array($rec))
	{
	$pdf->SetFont("Arial", "", 10);
	$pdf->Ln();
	$pdf->Ln();
    $pdf->SetY(255);
	$pdf->SetTextColor(250, 250, 250);
	$pdf->Cell(95);
	$pdf->Cell(47.5, 7, 'SUBTOTAL', 1, 0, 'C', true); 
	$pdf->SetTextColor(66, 66, 66);
	$pdf->Cell(47.5, 7, $row['total'], 1, 0, 'C');
	$pdf->Ln();
	$pdf->Cell(95, 7, numtoletras($row['total']), 0, 0, 'C');
    $pdf->SetTextColor(250, 250, 250);
	$pdf->Cell(47.5, 7, 'TOTAL', 1, 0, 'C', true);
	$pdf->SetTextColor(66, 66, 66);
	$pdf->Cell(47.5, 7, $row['total'], 1, 0, 'C');
	}

$pdf->Output();

?>