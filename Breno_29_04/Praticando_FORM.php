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
    <form action="Destino_PHP.php" method="POST">

      <div class="mb-3">
        <label for="Titulo">Titulo da Página: </label>
        <input type="text" name="titulo" id="titulo" required>
      </div>

      <div class="mb-3">
        <label for="corpo">Corpo</label>
        <textarea type="textarea" name="corpo" id="corpo" placeholder="Digite seu texto" required> </textarea>
        <br><br>
      </div>

      <div class="mb-3">
        <label for="cor">Cor do Texto</label>
        <input type="color" name="cor" id="cor" required>
      </div>

      <div class="mb-3">
        <label for="imagem">Adicione uma imagem</label>
        <input type="url" name="imagem" id="imagem" placeholder="Url da imagem" required>
        <br><br>
      </div>

      <div class="mb-3">
        <label for="link">Link</label>
        <input type="url" name="link" id="link" required>
      </div>

      <div class="mb-3">
        <label for="corfundo">Cor do Plano de fundo</label>
        <input type="color" name="cor" id="cor" required>
        <br><br>
      </div>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>

    </form>

</body>
</html>