<?php
$Numero2=10;
$Sig="*";
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
        <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h2>Multiplique todo Los Numeros Dentro</h2>
    <h2>Numero N1 :<?php echo $Numero2; ?></h2>
    <?php
    $Numero1=1;

     for ($Numero1;$Numero1<=$Numero2;$Numero1++) {
         echo "<h3>$Sig</h3>";
     }
     ?>

  </body>
</html>
