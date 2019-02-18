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
  $id_equipo=$_GET["equipo"];
$resultado=$conector->query("select resultado from partido where local=".$id_equipo);
//Sale por pantalla la consulta.
foreach ($resultado as $partido) {
  echo"<br>Local: ".$partido["resultado"];
  echo"<br>";
  }
}
 ?>
