<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula3_PHP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="Destino_PHP_Calc.php" method="POST">

    <h1>DIGITE AS NOTAS DO ALUNO</h1>

      <div class="mb-3">
        <label for="Nota1">Nota 1: </label>
        <input type="number" name="Nota1" id="Nota1" required>
      </div>

      <div class="mb-3">
        <label for="Nota2">Nota 2:</label>
        <input type="number" name="Nota2" id="Nota2" required>
        <br><br>
      </div>

      <div class="mb-3">
        <label for="Nota3">Nota 3:</label>
        <input type="number" name="Nota3" id="Nota3" required>
      </div>

        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>

    </form>

</body>
</html>