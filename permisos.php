<?php 

//---------------------------------- conexion ----------------------------------------------------
	require_once('librerias/conexionBD.php');

	$sql = "select p.*, u.usuario, r.descripcion from permisos p, usuarios u, roles r where p.id_usuario=u.id and p.id_rol = r.id order by p.id asc";
	$result = $conn->query($sql);
	$permisos = array();
		while($fila =  $result->fetch_array()) //ponemos la consulta en una fila con la funcion fetch_array
		{
			$permisos[] = $fila; // metemos al array la consulta optenida en $fila
		}

	require_once('librerias/cabe.php');
//-----------------------------------------------------------------------------------------------
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>PERMISOS</h1>
  			<p> <a href="permiso_nuevo.php" class="btn btn-primary active" > NUEVO </a> </p>
  			<table class="table table-dark">
  				<tr>
  					<th>ID</th>
  					<th>USUARIO</th>
            <th>ROL</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
  				</tr>
  				<?php  foreach ($permisos as $item): ?>

  				<tr>
  					<td> <?= $item['id']?> </td>
            <td> <?= $item['usuario']?> </td>
  					<td> <?= $item['descripcion']?> </td>
  					<td> 
 				    <a href="editar_permiso.php?id= <?= $item['id']?>" class="btn btn-warning " > EDITAR </a> 
  					</td>
  					<td> 
 					  <a href="eliminar_permiso.php?id= <?= $item['id']?>" class="btn btn-danger " onclick="return(confirm('seguro que desea eliminar'))"> ELIMINAR </a>
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