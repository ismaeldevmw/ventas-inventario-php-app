<?php

require_once dirname(__FILE__) ."/include/database.php";

if(isset($_POST['reg_depto'])){
    $db=getDb();

$nombre = $_POST['nombre'];
$nombre = strtoupper($nombre);
$descripcion = $_POST['descripcion'];
$descripcion = strtoupper($descripcion);

$query="insert into departamento(nombre_dept,descripcion_dept) values('$nombre','$descripcion')";
$db->query($query);
    
    header("location: listaDepartamentosController.php");
}

if(isset($_POST['edit_depto'])){
    $db=getDb();//Abrir conexion

    $id=$_POST['id'];    
    $nombre=$_POST['nombre'];
    $nombre = strtoupper($nombre);
    $descripcion=$_POST['descripcion'];
    $descripcion = strtoupper($descripcion);
    
    $query="UPDATE departamento SET nombre_dept='$nombre', descripcion_dept='$descripcion' WHERE id_departamento='$id'";
    $db->query($query);
    
    header("location: listaDepartamentosController.php");
}

if(isset($_GET['id'])){
    $db=getDb();//Abrir conexion
	
	$id=$_GET['id'];
    $query = "delete from departamento where id_departamento='$id'";
	$db->query($query);
	
    header("location: listaDepartamentosController.php");
}

?>