<?php 
require_once('librerias/conexionBD.php');

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = md5($_POST['password']);

if($_POST['password']!="" )
{
	$sql = "update usuarios set usuario = '$usuario',correo = '$correo',clave = '$password' where id = $id";
	$result = $conn->query($sql);

	if (!$result) die('Error al editar');
	{
		header('location: usuarios.php');	
	}
}	
else
{
  echo "<h1> INGRESE LA LOS CAMPOS LLENOS</h1>";
  echo '<a href="usuarios.php"> VOLVER </a>';
}
?>

