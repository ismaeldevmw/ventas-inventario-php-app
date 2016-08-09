<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

$db=getDb();//Abrir conexion
     
$id=$_GET['id'];
$modo="editar";    
$title="Agregar a inventario";
$sql="SELECT * FROM producto where idproducto = $id";
$aProductos = $db->GetAll($sql);

$oSmarty->assign("t",$title);
$oSmarty -> assign("modo",$modo);
$oSmarty -> assign("id",$id);
$oSmarty -> assign("producto",$aProductos);

$oSmarty->assign('cust_ids', array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25)); 
$mensaje='Seleccione cuantos productos añadira';
$oSmarty->assign('cust_msj',$mensaje);
  
$oSmarty -> display("formAgregarInventario.html.tpl");

?>