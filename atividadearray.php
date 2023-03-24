<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     $comidas = array();
    $comidas[0] = "🍕";
     $comidas[1] = "🍔";
     $comidas[2] = "🍟";
    $comidas[3] = "🌭";
    array_push($comidas, "🍗"); 

    echo "<h1>Banquete do dia</h1>";

    $qtd = count($comidas);

    $contador = 0;
    
    while($contador < $qtd){
     "$contador <br>"; 
     echo $comidas[$contador];
      $contador++;
    }

?>
</body>
</html>
