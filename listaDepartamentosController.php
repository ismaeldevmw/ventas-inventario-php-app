<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="SELECT * FROM departamento";
$aDepartamentos = $db->GetAll($sql);
$oSmarty -> assign("departamentos",$aDepartamentos);

$title="Departamentos";
$oSmarty->assign("t","$title");


$oSmarty->assign("contenido", "listaDepartamentos.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>