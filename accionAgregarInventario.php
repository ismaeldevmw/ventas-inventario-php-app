<?php

require_once dirname(__FILE__) ."/include/database.php";

if(isset($_POST['edit_prod'])){
    $db=getDb();//Abrir conexion

    $id=$_POST['id'];
    $existencias=$_POST['existencias'];
    
    $query="CALL updateStock('$existencias','$id')";
    //$query="UPDATE producto SET existencias_prod='$existencias' WHERE idproducto='$id'";
    $db->query($query);
    
    header("location: agregarInventarioController.php");
}

?>