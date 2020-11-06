<?php 
require_once('librerias/cabe.php');
?>
  <div class="container">
  	<div class="row"> 
  		<div class="col-12">
  			<h1>NUEVO ROL</h1>
		  			<form action="rol-procesa.php" method="post">
					  <div class="form-group">
					    <label for="">DESCRIPCION</label>
					    <input type="text" class="form-control" name="descripcion" > <br>
					  <button type="submit" class="btn btn-primary">ENVIAR</button>
				 </form>

  		</div>
    </div>
  </div>
<?php
require_once('librerias/pie.php');
 ?>