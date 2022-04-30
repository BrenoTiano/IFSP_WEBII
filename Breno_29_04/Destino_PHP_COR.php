<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino Cor</title>
</head>
<body>

<h1> DESTINO COR </h1>
<hr>
<?php
$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
$cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_EMAIL);

echo "

Nome informado: $nome
Email: $email
";
?>
<p>
<a href="Destino_PHP_COR.php?nome=Breno&email=breno@ifsp.br&cor=yellow">
Nome : Breno Email: breno@ifsp.br
</p>
<p>
<a href="Destino_PHP_COR.php?nome=BrenoTiano&email=tiano@ifsp.br&cor=silver">
Nome : BrenoTiano Email: tiano@ifsp.br
</p>
<p>
<a href="Destino_PHP_COR.php?cor=lightgreen&nome=<?=$nome ?>&email=<?=$email ?>">
cor = verde
</p>
<p>
<a href="Destino_PHP_COR.php?cor=red&nome=<?=$nome ?>&email=<?=$email ?>">
cor = vermelho
</p>
<a href="Destino_PHP_COR.php?cor=lightblue&nome=<?=$nome?>&email= <?=$email ?>">
cor = azul
</p>

<style>
body{
    background-color: <?=$cor; ?>
}
</style>


</body>
</html>