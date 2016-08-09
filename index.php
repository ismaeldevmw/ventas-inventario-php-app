<?php

require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

$title="¡Bienvenido!";
$oSmarty->assign("t","$title");

$oSmarty -> assign("contenido", "bienvenida.html.tpl");
$oSmarty -> display("layout.html.tpl");  

?>
