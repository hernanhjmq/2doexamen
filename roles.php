<?php 

//---------------------------------- conexion ----------------------------------------------------
	require_once('librerias/conexionBD.php');
	$sql = "select * from roles";
	$result = $conn->query($sql);
	$roles = array();
		while($fila = $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$roles[] = $fila; // metemos al array la consulta optenida en $fila
		}

	require_once('librerias/cabe.php');
//-----------------------------------------------------------------------------------------------
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>ROLES</h1>
  			<p> <a href="rol_nuevo.php" class="btn btn-primary active" > NUEVO </a> </p>
  			<table class="table table-dark">
  				<tr>
  					<th>ID</th>
  					<th>DESCRIPCION</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
  				</tr>
  				<?php  foreach ($roles as $item): ?>

  				<tr>
  					<td> <?= $item['id']?> </td>
  					<td> <?= $item['descripcion']?> </td>
  					<td> 
 				    <a href="editar_rol.php?id= <?= $item['id']?>" class="btn btn-warning " > EDITAR </a> 
  					</td>
  					<td> 
 					  <a href="eliminar_rol.php?id= <?= $item['id']?>" class="btn btn-danger " onclick="return(confirm('seguro que desea eliminar'))"> ELIMINAR </a>
  					</td>
  				</tr>
  			   <?php endforeach ?>	 
  			</table>
  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>