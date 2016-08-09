<?php

require_once dirname(__FILE__) ."/include/database.php";

if (isset($_POST['reg_tienda']))
	{
	$db = getDb();
	$nombre = $_POST['nombre'];
	$rfc = strtoupper($_POST['rfc']);
	$direccion = strtoupper($_POST['direccion']);	
    $cp = $_POST['cp'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
	$query = "insert into datos_tienda(nombre_tienda,rfc,direccion,cod_postal,telefono_tienda,correo) values('$nombre','$rfc','$direccion','$cp','$telefono','$correo')";
	$db->query($query);
	header("location: formConfiguracionController.php");
	}

if (isset($_POST['edit_tienda']))
	{
	$db = getDb(); //Abrir conexion
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$rfc = strtoupper($_POST['rfc']);
	$direccion = $_POST['direccion'];	
    $cp = $_POST['cp'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
	$query = "UPDATE datos_tienda SET nombre_tienda='$nombre', rfc='$rfc', direccion='$direccion', cod_postal='$cp', telefono_tienda='$telefono', correo='$correo' WHERE id_datos_tienda='$id'";
	$db->query($query);
	header("location: formConfiguracionController.php?id=1");
	}

if (isset($_GET['id']))
	{
	$db = getDb(); //Abrir conexion
	$oSmarty = new Smarty;
	$id = $_GET['id'];
	$query = "delete from datos_tienda where id_datos_tienda='$id'";
	$db->query($query);
	header("location: formConfiguracionController.php");
	}

?>