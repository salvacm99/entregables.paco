<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
  </head>
  <body>
<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","juegos");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
$resultado=$conector->query("select * from usuario");
//Sale por pantalla la consulta.
foreach ($resultado as $fila) {
  echo"<br>Id: ".$fila['id'];
  echo"<br>Nombre: ".$fila["nombre"];
  echo"<br>Apellidos: ".$fila["apellidos"];
  echo"<br>Edad: ".$fila["edad"];
  echo"<br>Curso: ".$fila["curso"];
  echo"<br>Puntuación: ".$fila["puntuacion"];
  echo"<br>";
  }
}
 ?>
 <br><a href="index.php"><button type="button" name="button">Volver.</button></a>
  </body>
</html>
