<?php
$conexion=new mysqli("localhost", "root", "", "liga");
  if ($conexion->connect_errno) {
    echo "fallo al conectar Mysql; (" . $conexion->connect_errno .") " . $conexion->connect_error;
  }else {
    $resultado = $conexion->query("SELECT * FROM equipo");
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
      foreach ($resultado as $jugador) {
        echo $jugador['nombre']." ".$jugador['ciudad']." ".$jugador['id_equipo']."<br>";
      }
     ?>
   </body>
 </html>
