<?php 
require_once('librerias/cabe.php');
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>NUEVO USUARIO</h1>
		  			<form action="usu-procesa.php" method="post">
					  <div class="form-group">
					    <label for="">USUARIO</label>
					    <input type="text" class="form-control" name="usuario" >
					  </div>
					  <div class="form-group">
					    <label for="">CORREO</label>
					    <input type="email" class="form-control" name="correo" >
					  </div>
					  <div class="form-group">
					    <label for="">CLAVE</label>
					    <input type="password" name = "password"class="form-control">
					  </div>
					  <button type="submit" class="btn btn-primary">ENVIAR</button>
				 </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>