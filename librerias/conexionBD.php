<?php
$host = 'sql309.epizy.com';
$user = 'epiz_26705612';
$pass = '7GaGj8SrobJPyCs';
$bdat = 'epiz_26705612_bd_blog';
$conn = new mysqli($host, $user, $pass, $bdat);
if($conn->connect_errno > 0)
	{
		die('Error de conneccion'.$conn->connect_errno);	
	}	
?>