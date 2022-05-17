<?php
// nome do produto
// link foto produto
// preço produto
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Editar Produto</title>
  </head>
  <body>
      <div class="container text-center d-flex justify-content-center flex-column">
            <h1>Editar Produto</h1>
            <hr>
            <form action="edicao.php" method="POST">
                <p><input name="id" type="text"  id="" placeholder="ID Produto">
                <p><input class="btn btn-primary" type="submit" value="Selecionar Produto">
            </form>
        </div>
  </body>
</html>
