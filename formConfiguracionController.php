<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

if(empty($_GET))
{

$db=getDb();//Abrir conexion
$modo="registrar";    
    
$title="Configuración";
$oSmarty->assign("t","$title");
    
$oSmarty->assign("modo",$modo);


    $oSmarty->assign("contenido", "formConfiguracion.html.tpl");
$oSmarty->display("layout.html.tpl");
    
}
else{

$db=getDb();//Abrir conexion
     
$id=$_GET['id'];
  
$modo="editar";
    
$title="Configuración";
$oSmarty->assign("t","$title");

$sql="SELECT * FROM datos_tienda where id_datos_tienda = $id";
$aDepartamentos = $db->GetAll($sql);

$oSmarty -> assign("modo",$modo);
$oSmarty -> assign("id",$id);
$oSmarty -> assign("tienda",$aDepartamentos);

    $oSmarty->assign("contenido", "formConfiguracion.html.tpl");
$oSmarty->display("layout.html.tpl");
}

?>