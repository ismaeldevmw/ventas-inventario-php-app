<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

if(empty($_GET))
{

$db=getDb();//Abrir conexion
$modo="registrar";
    
$sql="SELECT * FROM departamento";
$aDepartamentos = $db->GetAll($sql);
    
$title="Registrar producto";
$oSmarty->assign("t","$title");
    
$oSmarty -> assign("departamentos",$aDepartamentos);
$oSmarty->assign("modo",$modo);

$oSmarty -> display("formProductos.html.tpl"); 
    
}
else{

$db=getDb();//Abrir conexion
     
$id=$_GET['id'];
  
$modo="editar";
    
$title="Modificar producto";
$oSmarty->assign("t","$title");

$sql="SELECT * FROM producto where idproducto = $id";
$aProductos = $db->GetAll($sql);

$oSmarty -> assign("modo",$modo);
$oSmarty -> assign("id",$id);
$oSmarty -> assign("producto",$aProductos);

$sql="SELECT * FROM departamento";
$aDepartamentos = $db->GetAll($sql);
$oSmarty -> assign("departamentos",$aDepartamentos);

$sql= "SELECT * FROM departamento WHERE id_departamento IN(SELECT id_departamento FROM producto WHERE idproducto='$id')";
$aDatosDept = $db->GetAll($sql);
$oSmarty -> assign("datosdept",$aDatosDept);


$oSmarty -> display("formProductos.html.tpl");
}

?>