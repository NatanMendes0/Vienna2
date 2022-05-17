<?php
//   require_once('../../php/funcoes/banco.php');
  $conexao = mysqli_connect("localhost", "root", "", "Vienna2");

  //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }
    $id = "";
    $nome_novo = "";
    $idCategoria_novo = "";
    $preco_novo = "";

    if(isset($_POST['id']) && !isset($_POST['enviar'])){
        
        //variaveis
        $id = $_POST['id'];
        
        $sql = "SELECT * FROM `produtos` WHERE `ID` = '$id'";
        $consulta = mysqli_query($conexao, $sql);

        if($dados = mysqli_fetch_array($consulta)){
            $nome_novo = $dados['nome'];
            $idCategoria_novo = $dados['categoria'];
            $preco_novo = $dados['preço'];
        }

    }

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Editando produto</title>
  </head>
  <body>
        <div class="container text-center d-flex justify-content-center flex-column">
            <h1>Editando Produto</h1>
            <hr>
            <form method="POST">
                <p><input name="id" type="hidden" value="<?=$id?>">
                <p><input name="nome" type="text"  id="" placeholder="Nome" value="<?=$nome_novo?>">
                <p><input name="idCategoria" type="text"  id="" placeholder="ID Categoria" value="<?=$idCategoria_novo?>">
                <p><input name="preco" type="number"  id="" placeholder="Preço" value="<?=$preco_novo?>">
                <p><input name="enviar" class="btn btn-primary" type="submit" value="Editar">
            </form>
        </div>
  </body>
</html>

<?php

    if (isset($_POST['enviar'])) {

        $id = $_POST['id'];

        $nome_novo = $_POST['nome'];
        $idCategoria_novo = $_POST['idCategoria'];
        $preco_novo = $_POST['preco'];

        $update = 
        " UPDATE `produtos`
            SET `nome`      = '$nome_novo', 
                `categoria` = '$idCategoria_novo', 
                `preço`     = '$preco_novo' 
            WHERE `ID`      = '$id'
        ";
        
        $consulta = mysqli_query($conexao, $update);

        header("location: ../home.php");
        
    }
?>