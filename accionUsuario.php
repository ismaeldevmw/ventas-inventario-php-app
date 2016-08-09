<?php

require_once dirname(__FILE__) ."/include/database.php";

if(isset($_POST['reg_usuario'])){
    $db=getDb();

    $nombre = strtoupper($_POST['nombre']);
    $apaterno = strtoupper($_POST['apaterno']);
    $amaterno = strtoupper($_POST['amaterno']);    
    $fnacimiento = $_POST['fnacimiento'];
    $telefono = $_POST["telefono"];    
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];


$query="insert into usuarios(nombre_usuario,apaterno,amaterno,fnacimiento,telefono,correo,usuario,password,id_tipo_usuario) values('$nombre','$apaterno','$amaterno','$fnacimiento','$telefono','$correo','$usuario','$password','$tipo')";
$db->query($query);
    
    header("location: listaUsuariosController.php");
}

if(isset($_POST['edit_usuario'])){
    $db=getDb();
    
    $id=$_POST['id']; 
    $nombre = strtoupper($_POST['nombre']);
    $apaterno = strtoupper($_POST['apaterno']);
    $amaterno = strtoupper($_POST['amaterno']);    
    $fnacimiento = $_POST['fnacimiento'];
    $telefono = $_POST['telefono'];    
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];
    
    
    $query="UPDATE usuarios SET nombre_usuario='$nombre', apaterno='$apaterno', amaterno='$amaterno', fnacimiento='$fnacimiento',telefono='$telefono',correo='$correo',usuario='$usuario',password='$password', id_tipo_usuario='$tipo' WHERE id_usuario='$id'";
    $db->query($query);    
    
    header("location: listaUsuariosController.php");
}

if(isset($_GET['id'])){
    $db=getDb();//Abrir conexion
	
	$id=$_GET['id'];
    $query = "delete from usuarios where id_usuario='$id'";
	$db->query($query);
	
    header("location: listaUsuariosController.php");
}

?>