<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
   <link href="estilos.css" rel="stylesheet" type="text/css">
   <ul>

 <?php

  $Menu=[
    'Inicio',
    'Blog',
    'Videos',
    'Contacto'
  ];
  ?>
  <ul>
  <?php
  for ($i=0; $i < count($Menu) ; $i++) {
    echo "<li>$Menu[$i]</li>";
  }
  ?>
</ul>
 </body>
</html>
