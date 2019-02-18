<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/proyecto6.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROYECTO-06</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <?php
  //Me conecto con la base de datos.
  $conector=new mysqli ("localhost","root","","juegos");
  if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
  }
  else {
  $resultado=$conector->query("SELECT id,nombre,puntuacion FROM usuario where id=1");
  //Sale por pantalla la consulta.
  foreach ($resultado as $fila) {
    echo"<br>ID JUGADOR: ".$fila['id'];
    echo"<br>NOMBRE JUGADOR: ".$fila["nombre"];
    echo"<br>PUNTUACIÓN ACTUAL: ".$fila["puntuacion"];
    echo"<br>";
    }
}
  ?>
  <div class="contenedor2"
  <p>Movimientos realizados</p>
  <div id="mov.realizado" class=""></div>
  <p>Numero Movimientos</p>
  <div id="contador.movimientos" class=""></div>
  <script type="text/javascript">
  //Hacemos el array.
  var contador=0;
  document.getElementById('contador.movimientos').innerHTML=contador;
  var fila=[[2,6,5,4,5,5],[4,6,6,3,2,6],[3,4,1,2,6,3],[1,4,2,5,6,1],[5,5,3,2,2,1],[4,1,4,3,1,3]];

  var color=[['blue','yellow','pink','red','yellow','blue'],['blue','white','pink','red','yellow','blue'],['blue','yellow','blue','red','red','pink'],['pink','white','pink','red','green','red'],['green','white','green','green','white','yellow'],['green','white','pink','white','green','yellow']];

  function inicioTablero(){
    document.write("<table border='5' width='500' height='500'>");
    for (var j = 0; j < 6; j++) {
      document.write("<tr>");
      for (var i = 0; i < 6; i++) {
        document.write("<td id='"+j+i+"' onclick=\"pillarceldas(this)\" data-fila=\""+j+"\"data-columna=\""+i+"\"bgcolor=\""+color[j][i]+"\" align=center class='celda'>"+fila[j][i]+"</td>");
      }
      document.write("</tr>");
    }
    document.write("</table>");
  }
  inicioTablero();
  function pillarceldas(celda){
    contador++
    document.getElementById('mov.realizado').innerHTML=celda.dataset.columna+","+celda.dataset.fila;
    document.getElementById('contador.movimientos').innerHTML=contador;
  }

  </script>
</body>
<br><a href="index.php"><button type="button" name="button">Volver.</button></a>
</html>
