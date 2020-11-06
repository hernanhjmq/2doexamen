<?php 
require_once('librerias/conexionBD.php');
$descripcion = $_POST['descripcion'];
$sql = "insert into roles (descripcion) values ('$descripcion')";
$result = $conn->query($sql);

	if (!$result) die('Error al insertar');
	{
		header('location: roles.php');	
	}
 ?>
