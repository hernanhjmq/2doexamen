<?php 
require_once('librerias/cabe.php');
//------------------------------------------------------------  todo editar 
require_once('librerias/conexionBD.php');
$usuario = "";

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	//------------------------------------------------------------------
	$sql = "select * from usuarios where id =".$_GET['id'];
	$result = $conn->query($sql);
	$fila = $result->fetch_array();
	//actualizamos
	$usuario = $fila['usuario'];
	$correo = $fila['correo'];
	$password = "";
}	
//------------------------------------------------------------ 
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1> USUARIO A EDITAR</h1>
		  			<form action="modificar_usuario.php" method="POST">
		  			  <input type="hidden" name="id" value="<?=$id?>" >
					  <div class="form-group">
					    <label for="">USUARIO</label>
					    <input type="text" class="form-control" name="usuario" value="<?=$usuario?>" >
					  </div>
					  <div class="form-group">
					    <label for="">CORREO</label>
					    <input type="email" class="form-control" name="correo" value="<?=$correo?>" >
					  </div>
					  <div class="form-group">
					    <label for="">Nuevo Password</label>
					    <input type="password" name = "password"class="form-control" value="<?=$password?>">
					  </div>
					  <button type="submit" class="btn btn-primary">EDITAR</button>
				 </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>