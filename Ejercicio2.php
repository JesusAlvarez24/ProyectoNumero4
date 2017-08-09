<?php
$Numero2=15;
$Numero1=10;
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="C">

    <h2>Dos Numeros y Muestre solo los Impares</h2>
    <h2>Numero N1 :<?php echo $Numero1; ?></h2>

    <h2>Numero N2 :<?php  echo $Numero2;?></h2>

          <?php
          for($Numero1;$Numero1<=$Numero2;$Numero1++) {
            if (($Numero1%2)==1 ) {
        echo "$Numero1 <br>";
                                  }
                                                       }
           ?>

         </div>
  </body>
</html>
