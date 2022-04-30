<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praticando</title>
</head>
<body>
<form action="Destino_PHP_Incremento.php" method="POST">
     
     <h1>SEQUÊNCIA</h1>

   <div class="mb-3">
     <label for="inicio">Inicio: </label>
     <input type="number" name="ini" id="inicio">
   </div>

   <div class="mb-3">
     <label for="final">Final: </label>
     <input type="number" name="fim" id="final">
   </div>

   <div class="mb-3">
     <label for="incremento">Incremento: </label>
     <input type="number" name="inc" id="incremento">
   </div>

     <button type="submit">Gerar</button>
     <button type="reset">Limpar</button>

 </form>
</body>
</html>