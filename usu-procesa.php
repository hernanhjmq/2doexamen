<?php 
require_once('librerias/conexionBD.php');

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = md5($_POST['password']);
$sql = "insert into usuarios (usuario,correo,clave) values ('$usuario','$correo','$password')";

$result = $conn->query($sql);

	if (!$result) die('Error al insertar');
	{
		header('location: usuarios.php');	
	}
 ?>
