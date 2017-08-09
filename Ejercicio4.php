<?php
$Numero1=1;
$Numero2=10;
$Contador=$Numero1;
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
        <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h2>Multiplique todo Los Numeros Dentro</h2>
    <h2>Numero N1 : <?php echo $Numero1 ?></h2>
    <h2>Numero N2 :<?php echo $Numero2; ?></h2>
    <?php

     for ($Numero1;$Numero1<=$Numero2;$Numero1++) {
     $Contador=$Contador*$Numero1;

         echo "$Contador<br>";
     }
echo "La Multiplicacion es  : $Contador";

     ?>

  </body>
</html>
