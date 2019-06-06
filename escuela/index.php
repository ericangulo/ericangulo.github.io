<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Proyecto Parcial 2</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <script src="js/jquery.js"></script>

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

 <!--Inicio del carrusel-->

  <div class="container">
   <div class="row">
    <div class="col-xs-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data_interval="500">
            <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
   <div class="carousel-inner" role="listbox" align="center">
    <div class="item active">
      <img src="descarga.jpg" alt="...">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="television.jpg" alt="...">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="consola.jpg" alt="...">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="Bocina.jpg" alt="...">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="Lampara.jpg" alt="...">
      <div class="carousel-caption">
       ...
      </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       </div>


     </div>
    

   </div>
    
  </div>

<!--Final del carrusel-->


      <h1>Productos de Sony</h1>
      <div style="width: 400px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
        <h2><a href="camara.html" style="color: black">Camara</h2></a>
    <img src="descarga.jpg" alt="" style="border:8px ">
    <hr>
    <div style="width: 370px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
      <h2></h2>
      <div class="model" style="color: black">Camara</div>
       <div class="price priceFixed" style="color: black">$1,600</div>
       <p style="color : black;">
       Esta camara ultimo modelo, mejora la calidad de tus fotos con tu familia, amigos y momentos inolvidables</p>

      </div>
    </div>
   <div style="width: 440px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
      <h2><a href="xbox.html" style="color: black">Xbox</h2></a> 
    <img src="xbox.jpg" alt="" style="border:8px ">
    <hr>
    <div style="width: 370px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
     <h2></h2>
     <div class="model" style="color: black">Xbox</div>
      <div class="price priceFixed" style="color: black">$3,899</div>
      <p style="color : black;">
       Esta Xbox te llena de entretenimiento la vida y la hace mas divertida</p>

   </div>
 </div>
   <div style="width: 500px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
      <h2><a href="computadora.html" style="color: black">Computadora</h2></a>
    <img src="Computadora.jpg" alt="" style="border:8px ">
    <hr>
    <div style="width: 370px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
     <h2></h2>
     <div class="model" style="color: black">Computadora</div>
      <div class="price priceFixed" style="color: black">$5,300</div>
      <p style="color : black;">
       Esta computadora de ultimo modelo, te ayudará en todo momento hasta en los trabajos mas dificiles</p>
  </div>
</div>
     <div>
    <h1>Comics y Mangas</h1><hr>
  <div style="width: 450px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
      <h2 style="color: black">Manga</h2>
    <img src="onepiece.jpg" alt="" style="border:8px ">
    <hr>
    <div style="width: 320px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
     <h2></h2>
     <div class="model" style="color: black">One piece</div>
      <div class="price priceFixed" style="color: black">$650</div>
      <p style="color : black;">
       El primer volumen del exitoso manga por Eichiro Oda,"One piece"</p>
  </div>
</div>
  <div style="width: 420px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
      <h2 style="color: black">Comic</h2>
    <img src="comic.jpg" alt="" style="border:8px " width="200px" height="200px">
    <hr>
    <div style="width: 340px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
     <h2></h2>
     <div class="model" style="color: black">X-Men</div>
      <div class="price priceFixed" style="color: black">$450</div>
      <p style="color : black;">
       El tomo numero 100 de la exitosa serie de comics, "X-men"</p>
  </div>
</div>
   <div style="width: 460px; height: 560px;border: 1px solid black;
    float:left;padding: 20px;background: white;">
      <h2 style="color: black">Lámpara</h2>
    <img src="Lampara.jpg" alt="" style="border:8px " width="200px" height="200px">
    <hr>
    <div style="width: 320px;height: 220px; border: 1px;
    float:left;padding: 20px;background: white;">
     <h2></h2>
     <div class="model" style="color: black">Lampara</div>
      <div class="price priceFixed" style="color: black">$150</div>
      <p style="color : black;">
       Esta lampara iluminará tu vida</p>
  </div>
</div>

   
  


<footer class="text-center">
  <hr>
  Desarrollo de pagina. web&copy; 2019
</footer>
<script src="js/bootstrap.js"></script>

</body>
</html>