<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Alumno</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

      <?php 

      $server = "localhost";
      $username = "root";
      $pass = "";
      $db = "sony";

      $conexion = new mysqli ($server, $username, $pass, $db);

      if($conexion->connect_error) {
   	   die("Error en la conexion:" . $conexion->connect_error);
       }
       
       $id = $_GET['id'];

       $sql = "SELECT * FROM alumnos where id=$id LIMIT 1";
       $alumnos = $conexion->query($sql)->fetch_object();


       

       ?>
       <div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="update.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $alumnos->id;  ?>">
				  <div class="form-group">
				  	<label for="Nombre">Nombre:</label>
				  	<input type="text" name="nombre" class="form-control" value="<?php echo $alumnos->nombre; ?>">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="">Edad</label>
				  	<input type="number" name="edad" class="form-control" value="<?php echo $alumnos->edad; ?>">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="Telefono">Telefono</label>
				  	<input type="text" name="telefono" class="form-control" value="<?php echo $alumnos->telefono; ?>">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="producto">Producto</label>
				  	<input type="text" name="producto" class="form-control" value="<?php echo $alumnos->producto; ?>">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="Sexo">Sexo</label>
				  	<select name="sexo" id="" class="form-control" value="<?php echo $alumnos->sexo; ?>">
				  		<option value="0">Femenino</option>
				  		<option value="1">Masculino</option>
				  		
				  	</select>
				  	
				  </div>
				  <div class="form-group text-center">
				  	<input type="submit" class="btn btn-primary" value="Actualizar">
				  	
				  </div>

				</form>
			</div>
        </div>
    </div>



</body>
</html>