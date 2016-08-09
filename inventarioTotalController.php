<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="SELECT * FROM inventario_general";
$aProductos = $db->GetAll($sql);
$oSmarty -> assign("productos",$aProductos);

$title="Inventario general";
$oSmarty->assign("t","$title");


$oSmarty->assign("contenido", "inventarioTotal.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>