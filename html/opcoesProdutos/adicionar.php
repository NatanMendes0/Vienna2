<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Teste</title>
  </head>
  <body>
      <div class="container text-center d-flex justify-content-center flex-column">
            <h1>Adicionar Produto</h1>
            <hr>
            <form method="GET">
                <p><input name="nome" type="text"  id="" placeholder="Nome">
                <p><input name="idCategoria" type="text"  id="" placeholder="ID Categoria">
                <p><input name="preco" type="number"  id="" placeholder="Preço">
                <p><input class="btn btn-primary" type="submit" value="Adicionar">
            </form>
      </div>
        
  </body>
</html>

<?php
  // func (nativa): vincula o arquivo com outro arquivo
  require_once('../../php/funcoes/banco.php');

  if (isset($_GET['nome']) || isset($_GET['idCategoria']) || isset($_GET['preco'])) {
    //  variaveis
    $nome = $_GET['nome'];
    $idCategoria = $_GET['idCategoria'];
    $preco = $_GET['preco'];

    $inserir = "INSERT INTO `produtos`(`nome`, `categoria`, `preço`) VALUES ('$nome','$idCategoria','$preco')";
    $result = $mysqli->query($inserir);
  }
?>