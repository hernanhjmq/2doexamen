<?php 
require_once('librerias/cabe.php');
require_once('librerias/conexionBD.php');

	$sql = "select * from usuarios";
	$result = $conn->query($sql);
	$usuarios = array();
		while($fila =  $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$usuarios[] = $fila; // metemos al array la consulta optenida en $fila
		}

    $sql2 = "select * from roles";
	$result = $conn->query($sql2);
	$roles = array();
		while($fila =  $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$roles[] = $fila; // metemos al array la consulta optenida en $fila
		}


?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>NUEVO PERMISO</h1>
		  			<form action="per-procesa.php" method="post">
					  <div class="form-group">
					    <label for="">USUARIO</label>
						    <select name="id_usuario" class="form-control">
		                      	<option value="">-- Seleccione --</option>
		                      	<?php foreach ($usuarios as $item): ?>
		                        	<option value="<?= $item['id'] ?>"> <?= $item['usuario'] ?> </option>
		                      	<?php endforeach ?>
	                    	</select>
					  </div>
					 <div class="form-group">
					    <label for="">ROL</label>
					     <select name="id_rol" class="form-control">
		                      	<option value="">-- Seleccione --</option>
		                      	<?php foreach ($roles as $item): ?>
		                        	<option value="<?= $item['id'] ?>"> <?= $item['descripcion'] ?> </option>
		                      	<?php endforeach ?>
	                      </select>
					  </div>
					  <button type="submit" class="btn btn-primary">ENVIAR</button>
				 </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>