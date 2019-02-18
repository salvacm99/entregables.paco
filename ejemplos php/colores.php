<?php
$colores=[
  'Rojo'=>'#ff0000',
  'Verde'=>'#00ff00',
  'Azul'=>'#0000ff'
];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php
        foreach ($colores as $key => $color) {
          echo "<li style='color:$color'>$key</li>";
}
       ?>
    </ul>
  </body>
</html>
