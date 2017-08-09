<?php
$Numero1=6;
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
        <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="C">


    <h2>Sume todo Los Numeros Dentro</h2>
  <h2>Numero1 : <?php  echo $Numero1 ?> </h2>
    <?php
    $Conta=1;
    $Conta1=10;
     for ($Conta;$Conta<=$Conta1;$Conta++) {
   $Numero2=$Conta*$Numero1;
   echo "<h2>$Conta*$Numero1=$Numero2 <br></h2>";


     }
;

     ?>
    </div>
  </body>
</html>
