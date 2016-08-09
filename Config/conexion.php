<?php
$manejador="mysql";
$servidor="localhost";
$usuario="root";
$pass="";
$base="tienda24";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
/*$tns = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SID=xe)))";
$db_username = "tienda24";
$db_password = "12345";
$cnx = new PDO("oci:dbname=".$tns,$db_username,$db_password);*/
?>