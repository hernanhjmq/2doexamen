<?php 

//---------------------------------- conexion ----------------------------------------------------
	require_once('librerias/conexionBD.php');
	$sql = "select * from usuarios";
	$result = $conn->query($sql);
	$usuarios = array();
		while($fila = $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$usuarios[] = $fila; // metemos al array la consulta optenida en $fila
		}

	require_once('librerias/cabe.php');
//-----------------------------------------------------------------------------------------------
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>USUARIOS</h1>
  			<p> <a href="usuarios-nuevo.php" class="btn btn-primary active" > NUEVO </a> </p>
  			<table class="table table-dark">
  				<tr>
  					<th>ID</th>
  					<th>USUARIO</th>
  					<th>CORREO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
  				</tr>
  				<?php  foreach ($usuarios as $item): ?>

  				<tr>
  					<td> <?= $item['id']?> </td>
  					<td> <?= $item['usuario']?> </td>
            <td> <?= $item['correo']?> </td>
  					<td> 
 				    <a href="editar_usu.php?id= <?= $item['id']?>" class="btn btn-warning " > EDITAR </a> 
  					</td>
  					<td> 
 					  <a href="eliminar_usu.php?id= <?= $item['id']?>" class="btn btn-danger " onclick="return(confirm('seguro que desea eliminar'))"> ELIMINAR </a>
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