<?php
$Numero1=1;
$Numero2=50;
$Contador=0;
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
        <link rel="stylesheet" href="Style.css">
  </head>
  <body>
        <div class="C">
    <h2>Sume todo Los Numeros Dentro</h2>
    <h2>Numero N1 : <?php echo $Numero1 ?></h2>
    <h2>Numero N2 :<?php echo $Numero2; ?></h2>
    <?php

     for ($Numero1;$Numero1<=$Numero2;$Numero1++) {
     $Contador=$Contador+$Numero1;

         echo "$Numero1<br>";
     }
echo "La Suma es : $Contador";

     ?>
</div>
  </body>
</html>
