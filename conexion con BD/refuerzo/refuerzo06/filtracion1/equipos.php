<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos.</title>
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
 $resultado=$conector->query("select * from equipo");
//Sale por pantalla la consulta.
 echo "<table border='15'>";
foreach ($resultado as $equipo) {
  echo "<tr align='center'>
    <td><br>ID: <a href=../filtracion2/partidosEQUIPO.php?equipo=".$equipo['id_equipo'].">Resultado partidos</a></td>
    <td><br>NOMBRE: <a href=../filtracion2/jugadoresEQUIPO.php?equipo=".$equipo['id_equipo'].">".$equipo['nombre']."</a></td>
    <td><br>CIUDAD: ".$equipo['ciudad']."</td>
    <td><br>WEB:".$equipo['web']."</td>
    <td><br>PUNTOS:".$equipo['puntos']."</td>
    <td><br></td>
  </tr>";
  }
  echo "</table>";
}
 ?>
  </body>
</html>
