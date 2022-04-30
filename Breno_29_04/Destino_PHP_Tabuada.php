<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praticando</title>
</head>
<body>

<form action="Destino_PHP_Tabuada.php" method="GET">
     
        <h1>Digite um número para saber a tabuada</h1>

      <div class="mb-3">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero" required>
      </div>

        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>

    </form>

<?php

$n = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_NUMBER_INT);

if ($n != null){
    echo "<hr><h1>Tabuada do <b>$n</b></h1>";

    for ($i=1; $i < 11 ; $i++) { 
        $resposta = 0;
        $resposta = $n * $i;
        echo "<p> $i X $n = $resposta</p>";
    }
}

?>
</body>
</html>