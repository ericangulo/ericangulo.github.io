<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de alumnos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


	<h1>Sony
  <img src="usuario.png" class="img-circle" alt="" width="50px" height="50px" align="right"></h1>
   <span><a href="iniciarsesion.php"><p style="text-align: right">Usuario</p></span>
  </div>
  <hr>
      <!--Menu-->
      <nav class="navbar navbar-default">
       <div class="container-fluid">

     <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="idioma.php">Idioma</a></li>
             <li><a href="#">Configuracion</a></li>
              

            <li role="separator" class="divider"></li>
            <li><a href="iniciarsesion.php">Iniciar sesion</a></li>

            
          </ul>
        </li>
      </ul>
      <a class="btn btn-primary" href="registro.php">Registro</a>
              <a class="btn btn-primary" href="vendedores.php">Vendedores</a>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar productos por nombre, codigo o categoria">

        </div>
        <button type="submit" class="btn btn-default">Buscar</button>

      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Configuracion</a></li>
            <li><a href="Idioma.html">Idioma</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Iniciar sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
				  <div class="form-group">
				  	<label for="Nombre">Nombre:</label>
				  	<input type="text" name="nombre" class="form-control">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="">Edad</label>
				  	<input type="number" name="edad" class="form-control">
				  	
				  </div>
				  <div class="form-group">
				  	<label for="Telefono">Telefono</label>
				  	<input type="text" name="telefono" class="form-control">
				  	
				  </div>
				   <div class="form-group">
                   <label for="producto">Producto</label>
                   <input type="text" name="producto" class="form-control">
            
                  </div>
				  <div class="form-group">
				  	<label for="Sexo">Sexo</label>
				  	<select name="sexo" id="" class="form-control">
				  		<option value="1">Femenino</option>
				  		<option value="0">Masculino</option>
				  		
				  	</select>
				  	
				  </div>
				  <div class="form-group text-center">
				  	<input type="submit" class="btn btn-primary" value="Registrar">
				  	
				  </div>

				</form>
			</div>
        </div>
    </div>
</body>
</html>