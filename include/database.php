<?php
require_once dirname(__FILE__) ."/../libs/adodb/adodb.inc.php";
require_once dirname(__FILE__) ."/database_config.php";
function getDb (){
  static $db;
  if (!isset ($db)){
   $db = ADONewConnection (DATABASE_DRIVER);
      
   $db -> Connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWD,DATABASE_NAME);      
   //Cadenas de conexion de Oracle:
   /*$cstr = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SID=xe)))";
   $db -> Connect($cstr, DATABASE_USER, DATABASE_PASSWD);*/

   //$db -> Connect('127.0.0.1', DATABASE_USER, DATABASE_PASSWD, 'xe'); //Direccion del servidor y SID o servicename
   //$db -> Connect(false, DATABASE_USER,DATABASE_PASSWD); //PHP y Oracle estan en la misma maquina, usar SID
   $db -> Execute ("SET NAMES 'utf8'");
  }
    return $db;
}
?>