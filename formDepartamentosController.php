<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

if(empty($_GET))
{

$db=getDb();//Abrir conexion
$modo="registrar";    
    
$title="Registrar departamento";
$oSmarty->assign("t","$title");
    
$oSmarty->assign("modo",$modo);

$oSmarty -> display("formDepartamentos.html.tpl"); 
    
}
else{

$db=getDb();//Abrir conexion
     
$id=$_GET['id'];
  
$modo="editar";
    
$title="Modificar producto";
$oSmarty->assign("t","$title");

$sql="SELECT * FROM departamento where id_departamento = $id";
$aDepartamentos = $db->GetAll($sql);

$oSmarty -> assign("modo",$modo);
$oSmarty -> assign("id",$id);
$oSmarty -> assign("departamento",$aDepartamentos);

$oSmarty -> display("formDepartamentos.html.tpl");
}

?>