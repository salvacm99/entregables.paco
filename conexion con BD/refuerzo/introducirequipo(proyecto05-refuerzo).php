<?php
$conexion=new mysqli("localhost", "root", "", "liga");
  if ($conexion->connect_errno) {
    echo "fallo al conectar Mysql; (" . $conexion->connect_errno .") " . $conexion->connect_error;
  }else {
    $resultado = $conexion->query("insert into `equipo` (`id_equipo`,`nombre`,`ciudad`,`web`,`puntos`) values
(7,'scm futbol club','valencia','pornhub.com',50)");
  $resultado2 = $conexion->query("SELECT e.* FROM equipo e where e.id_equipo=7");
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <h3>Ejemplo BaseDatos Liga</h3>
      <?php
      foreach ($resultado2 as $jugador) {
        echo $jugador['nombre']." ".$jugador['ciudad']." ".$jugador['id_equipo']."<br>";
        }
     ?>
   </body>
 </html>
