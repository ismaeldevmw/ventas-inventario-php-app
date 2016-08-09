<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

if(empty($_GET))
{

$db=getDb();//Abrir conexion
$modo="registrar";
    
$sql="SELECT * FROM tipo_usuario";
$aTipos = $db->GetAll($sql);
    
$title="Registrar usuario";
$oSmarty->assign("t","$title");
    
$oSmarty -> assign("tipos",$aTipos);
$oSmarty->assign("modo",$modo);

$oSmarty -> display("formUsuarios.html.tpl"); 
    
}
else{

$db=getDb();//Abrir conexion
     
$id=$_GET['id'];
  
$modo="editar";
    
$title="Modificar usuario";
$oSmarty->assign("t","$title");

$sql="SELECT * FROM usuarios where id_usuario = $id";
$aUsuario = $db->GetAll($sql);

$oSmarty -> assign("modo",$modo);
$oSmarty -> assign("id",$id);
$oSmarty -> assign("usuario",$aUsuario);

$sql="SELECT * FROM tipo_usuario";
$aTipos = $db->GetAll($sql);
$oSmarty -> assign("tipos",$aTipos);

$sql= "SELECT * FROM tipo_usuario WHERE id_tipo_usuario IN(SELECT id_tipo_usuario FROM usuarios WHERE id_usuario='$id')";
$aDatosTipo = $db->GetAll($sql);
$oSmarty -> assign("datostipo",$aDatosTipo);


$oSmarty -> display("formUsuarios.html.tpl");
}

?>