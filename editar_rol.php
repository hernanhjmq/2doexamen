<?php 
require_once('librerias/cabe.php');
//------------------------------------------------------------  todo editar 
require_once('librerias/conexionBD.php');
$descripcion = "";

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	//------------------------------------------------------------------
	$sql = "select * from roles where id =".$_GET['id'];
	$result = $conn->query($sql);
	$fila = $result->fetch_array();
	//actualizamos
	$descripcion = $fila['descripcion'];
}	
//------------------------------------------------------------ 
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1> USUARIO A EDITAR</h1>
		  			<form action="modificar_rol.php" method="POST">
		  			  <input type="hidden" name="id" value="<?=$id?>" >
					  <div class="form-group">
					    <label for="">DESCRIPCION</label>
					    <input type="text" class="form-control" name="descripcion" value="<?=$descripcion?>" > 
					    <br>
					  	<button type="submit" class="btn btn-primary">EDITAR</button>
				 </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>