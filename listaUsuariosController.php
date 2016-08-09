<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="SELECT * FROM usuarios";
$aUsuarios = $db->GetAll($sql);
$oSmarty -> assign("usuarios",$aUsuarios);

$title="Usuarios";
$legend="Listado de Usuarios";
$btnnuevo="Nuevo usuario";
$btneditar="Editar";
$btneliminar="Eliminar";
$oSmarty->assign("t","$title");
$oSmarty->assign("l","$legend");
$oSmarty->assign("n","$btnnuevo");
$oSmarty->assign("update","$btneditar");
$oSmarty->assign("delete","$btneliminar");


$oSmarty->assign("contenido", "listaUsuarios.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>