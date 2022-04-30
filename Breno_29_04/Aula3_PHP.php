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
    <div class="container">
    <form action="Destino.php" method="POST">
    <div class="mb-3">
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
      </div>
      <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required>
        <br><br>
     </div>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>

    </form>
</div>

</body>
</html>