<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praticando</title>
</head>
<body>

<?php

$titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$cortexto = filter_input(INPUT_POST, "cor");
$urlimg = filter_input(INPUT_POST, "imagem", FILTER_SANITIZE_URL);
$urllink = filter_input(INPUT_POST, "link", FILTER_SANITIZE_URL);
$corfundo = filter_input(INPUT_POST, "corfundo");


echo "<p><h1>Titulo: $titulo </h1><p><br><br> Corpo: $corpo <br><br>
Imagem:<br><br>
<img src='$urlimg'><br><br> 
Link: <a href='$urllink'>Clique e vá para o Uol</a>"
?>
<style>
body{
    background-color: <?= $cortexto; ?>;
}
</style>

</body>
</html>