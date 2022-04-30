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

$n1 = filter_input(INPUT_POST, "Nota1", FILTER_SANITIZE_SPECIAL_CHARS);
$n2 = filter_input(INPUT_POST, "Nota2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$n3 = filter_input(INPUT_POST, "Nota3");

$media = ($n1 + $n2 + $n3)/3;

switch($media){
    case $media <= 4:
        echo "O aluno com as notas $n1, $n2 e $n3 teve a média: $media <br> O aluno está <b><font color='red'>REPROVADO</font></b>";
    break;
    case $media > 4 && $media <= 6:
        echo "O aluno com as notas $n1, $n2 e $n3 teve a média: $media <br> O aluno está de <b><font color='EEAD2D'>RECUPERAÇÃO</font></b>";
    break;
    case $media > 6:
        echo "O aluno com as notas $n1, $n2 e $n3 teve a média: $media <br> O aluno está <b><font color='green'>APROVADO</font></b>";
    break;
}
?>
</body>
</html>