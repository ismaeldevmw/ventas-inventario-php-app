<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="select * from resumen_ventas";
$aDetalleVenta = $db->GetAll($sql);
$oSmarty -> assign("ventas",$aDetalleVenta);

$title="Detalle venta";
$oSmarty->assign("t","$title");


$oSmarty->assign("contenido", "detalleVenta.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>