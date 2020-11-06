<?php 
require_once('librerias/conexionBD.php');
$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];
$id_rol = $_POST['id_rol'];

	$sql = "update permisos set id_usuario = '$id_usuario',id_rol = '$id_rol' 
	where id = $id";
	$result = $conn->query($sql);

	if (!$result) die('Error al editar');
	{
		header('location: permisos.php');	
	}

?>

