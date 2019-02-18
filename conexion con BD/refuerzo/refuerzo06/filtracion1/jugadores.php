<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado jugadores.</title>
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
$resultado=$conector->query("select * from jugador");
//Sale por pantalla la consulta.
foreach ($resultado as $jugador) {
  echo"<br>ID: ".$jugador["id_jugador"];
  echo"<br>NOMBRE: ".$jugador["nombre"];
  echo"<br>APELLIDO: ".$jugador["apellido"];
  echo"<br>POSICION: ".$jugador["posicion"];
  echo"<br>ID_CAPITAN: ".$jugador["id_capitan"];
  echo"<br>FECHA DADO DE ALTA: ".$jugador["fecha_alta"];
  echo"<br>SALARIO: ".$jugador["salario"];
  echo"<br>EQUIPO AL QUE PERTENECE: ".$jugador["equipo"];
  echo"<br>ALTURA: ".$jugador["altura"];
  echo"<br>";
  }
}
 ?>
</body>
</html>
