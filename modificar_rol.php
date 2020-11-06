<?php 
require_once('librerias/conexionBD.php');

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

	$sql = "update roles set descripcion = '$descripcion' where id = $id";
	$result = $conn->query($sql);

	if (!$result) die('Error al editar');
	{
		header('location: roles.php');	
	}

?>

