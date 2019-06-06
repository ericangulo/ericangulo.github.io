<?php  
 
  $server = "localhost";
  $username = "root";
  $pass = "";
  $db = "sony";

  $conexion = new mysqli ($server, $username, $pass, $db);

   if($conexion->connect_error) {
   	die("Error en la conexion:" . $conexion->connect_error);
   }
   
   $id = $_POST["id"];
   $nombre = $_POST["nombre"];
   $edad = $_POST["edad"];
   $telefono = $_POST["telefono"];
   $sexo = $_POST["sexo"];
   $producto = $_POST["producto"];

   $sql = "INSERT INTO alumnos (id, nombre, edad, telefono, sexo, producto) VALUES ('$id', '$nombre', '$edad', '$telefono', '$sexo', '$producto')";

   if($conexion->query($sql) === TRUE){
   	echo "Registro insertado <a href='vendedores.php'>Regresar</a>";

   }else {

   	echo "Error: " .$sql. "<br>" . $conexion->error;
   }

?>