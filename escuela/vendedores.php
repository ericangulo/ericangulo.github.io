<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vendedores</title>
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

<?php  
 
     $server = "localhost";
     $username = "root";
     $pass = "";
     $db = "sony";

     $conexion = new mysqli ($server, $username, $pass, $db);

      if($conexion->connect_error) {
   	   die("Error en la conexion:" . $conexion->connect_error);
       }
       
       $sql = "SELECT * FROM alumnos";
       $data = $conexion->query($sql);
       echo '<table class="table table-hover">';
       echo '<thead>';
       echo '<tr>';
       echo '<th>Id</th>';
       echo '<th>Nombre</th>';
       echo '<th>Edad</th>';
       echo '<th>Telefono</th>';
       echo '<th>Sexo</th>';
       echo '<th>Producto</th>';
       echo '<th>Editar</th>';//Opcion para editar
       echo '</tr>';
       echo '</thead>';
       echo '<tbody>';
          while($obj = $data->fetch_object()){
             echo '<tr><td>'.$obj->id.'</td>';
             echo '<td>'.$obj->nombre.'</td>';
             echo '<td>'.$obj->edad.'</td>';
             echo '<td>'.$obj->telefono.'</td>';
             echo '<td>'.$obj->sexo.'</td>';
             echo '<td>'.$obj->producto.'</td>';
             echo '<td><a class="btn btn-xs btn-primary" href="editarAlumno.php?id='.$obj->id.'">Editar</a>  <a class="btn btn-xs btn-default" href="eliminar.php?id='.$obj->id.'">Eliminar</a></td></tr>';
             }

     ?>
    
     

</body>
</html>




