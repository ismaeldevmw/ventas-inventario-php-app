<?php

require_once dirname(__FILE__) ."/include/database.php";

if(isset($_POST['reg_prod'])){
    $db=getDb();
//$telefono = ereg_replace("[]().-", "", $_POST["telefono"]);

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$nombre = strtoupper($nombre);
$descripcion = $_POST['descripcion'];
$descripcion = strtoupper($descripcion);
$existencias = $_POST['existencias'];
$departamento = $_POST['departamento'];
$preciou = $_POST['preciou'];
$preciov = $_POST['preciov'];


$query="call insertarProducto('$nombre','$codigo','$descripcion','$existencias','$departamento','$preciou','$preciov')";
$db->query($query);
    
    
    header("location: listaProductosController.php");
}

if(isset($_POST['edit_prod'])){
    $db=getDb();//Abrir conexion

    $id=$_POST['id'];
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $nombre = strtoupper($nombre);
    $descripcion=$_POST['descripcion'];
    $descripcion = strtoupper($descripcion);
    $existencias=$_POST['existencias'];
    $departamento=$_POST['departamento'];
    $preciou=$_POST['preciou'];
    $preciov=$_POST['preciov'];
    
    
    $query="UPDATE producto SET nombre_producto='$nombre', codigo_producto='$codigo', descripcion='$descripcion', existencias_prod='$existencias', id_departamento='$departamento', precio_u='$preciou', precio='$preciov' WHERE idproducto='$id'";
    $db->query($query);
    
    
    header("location: listaProductosController.php");
}

if(isset($_GET['id'])){
    $db=getDb();//Abrir conexion
	
	$id=$_GET['id'];
    $query = "delete from producto where idproducto='$id'";
	$db->query($query);
    
	
    header("location: listaProductosController.php");
}

?>