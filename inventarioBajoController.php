<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="SELECT * FROM inventario_bajo";
$aProductos = $db->GetAll($sql);
$oSmarty -> assign("productos",$aProductos);

$title="Inventario bajo";
$oSmarty->assign("t","$title");


$oSmarty->assign("contenido", "inventarioBajo.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>