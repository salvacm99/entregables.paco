<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos.</title>
  </head>
  <body>
<br><a href="../filtracion1/equipos.php">VOLVER.</a>
<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","liga");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
  $equipo=$_GET["equipo"];
$resultado=$conector->query("select * from jugador where equipo=".$equipo);
//Sale por pantalla la consulta.
foreach ($resultado as $jugador) {
  echo"<br>ID: ".$jugador["id_jugador"];
  echo"<br>NOMBRE: ".$jugador["nombre"];
  echo"<br>APELLIDO: ".$jugador["apellido"];
  echo"<br>";
  }
} 
 ?>
