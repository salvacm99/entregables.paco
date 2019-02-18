<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado partidos.</title>
  </head>
  <body>
<br><a href="menu.php">VOLVER.</a>
<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","liga");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
$resultado=$conector->query("select * from partido");
//Sale por pantalla la consulta.
foreach ($resultado as $partido) {
  echo"<br>ID: ".$partido["id_partido"];
  echo"<br>LOCAL: ".$partido["local"];
  echo"<br>VISITANTE: ".$partido["visitante"];
  echo"<br>RESULTADO: ".$partido["resultado"];
  echo"<br>FECHA: ".$partido["fecha"];
  echo"<br>ARBITRO: ".$partido["arbitro"];
  echo"<br>";
  }
}
 ?>
  </body>
</html>
