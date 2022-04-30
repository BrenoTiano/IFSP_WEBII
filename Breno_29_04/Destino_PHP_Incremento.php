<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>

<?php

    $ini = filter_input(INPUT_POST, "ini");
    $fim = filter_input(INPUT_POST, "fim");
    $inc = filter_input(INPUT_POST, "inc");


    echo "<hr><h1>Sequência</h1>";

    echo "<p>Inicio: $ini <br> Final: $fim <br> Incremento: $inc </p>";
    echo "<hr>";
    echo"<p>";

 if($fim > $ini){
    for ($i=$ini; $i <= $fim ; $i += $inc) { 
        echo "$i ";
    }
 }else{ 
        if($ini > $fim){
            for ($i=$ini; $i >= $fim ; $i -= $inc) { 
            echo "$i ";
             }
        }else{
            echo "$fim";
        }
         
    }
    echo "</p>";
   
    ?>
</body>
</html>