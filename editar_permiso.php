<?php 
require_once('librerias/cabe.php');
//------------------------------------------------------------  todo editar 
require_once('librerias/conexionBD.php');
$usuario = "";
$descripcion="";
$id_us =0;
$id_ro=0;
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	//------------------------------------------------------------------
	$sql = "select p.*, u.usuario, r.descripcion from permisos p, usuarios u, roles r 
	where 
	p.id_usuario = u.id and 
	p.id_rol = r.id and
	p.id =".$_GET['id'];

	$result = $conn->query($sql);
	$fila = $result->fetch_array();
	//actualizamos
	$usuario = $fila['usuario'];
	$descripcion = $fila['descripcion'];
	$id_us = $fila['id_usuario'];
	$id_ro= $fila['id_rol'];
}	
//------------------------------------------------------------ 
	$sql1 = "select * from usuarios";
	$result = $conn->query($sql1);
	$usuarios = array();
		while($fila =  $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$usuarios[] = $fila; // metemos al array la consulta optenida en $fila
		}
//---------------------------------------------------------------------------------------
		$sql2 = "select * from roles";
	$result = $conn->query($sql2);
	$roles = array();
		while($fila =  $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$roles[] = $fila; // metemos al array la consulta optenida en $fila
		}
  //-----------------------------------------------------------------
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1> PERMISO A EDITAR</h1>
		  			<form action="modificar_permiso.php" method="POST">
		  			<input type="hidden" name="id" value="<?=$id?>" >
						   <div class="form-group">
							    <label for="">USUARIO</label>
						
							    <select name="id_usuario" class="form-control">
		                      	<option value="<?= $id_us ?>"><?=$usuario?></option>
		                      	<?php foreach ($usuarios as $item): ?>
		                        	<option value="<?= $item['id'] ?>"> <?= $item['usuario'] ?> </option>
		                      	<?php endforeach ?>
	                    		</select>

						   </div>

						    <div class="form-group">
							    <label for="">ROL</label>
							    <select name="id_rol" class="form-control">
		                      	<option value="<?= $id_ro ?>"><?=$descripcion?></option>
		                      	<?php foreach ($roles as $item): ?>
		                        	<option value="<?= $item['id'] ?>"> <?= $item['descripcion'] ?> </option>
		                      	<?php endforeach ?>
	                    		</select>
						    </div>
					    <br>
					  	<button type="submit" class="btn btn-primary">EDITAR</button>
				  </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>