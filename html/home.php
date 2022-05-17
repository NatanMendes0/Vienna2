<?php
    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }

    function card_produto($nome,$idCategoria,$preco){
        
        $figura = array();
        $figura[1] = "https://docs.google.com/uc?id=1j3BPkyLcj66iFnFNqPON1GvegICXpmMv";
        $figura[2] = "https://docs.google.com/uc?id=1T2EAp8f_bw1d6EGx8FvLP9OiBli83Caf";
        $link = $figura[$idCategoria];
        $html= "";
        $html.= "
            <div class='text-center d-flex flex-column'>
                <div><h2>$nome</h2></div>
                <div><img src='$link'></div>
                <div><h2>R$ $preco,90</h2></div>
            </div>
        ";
        return $html;

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Vienna - Home</title>
  </head>
  <body>
    <header class="d-flex flex-row justify-content-between" style="margin: 1%;">
        <?php
            if ( isset ($_SESSION['nome']) ) { 
                echo 
                "<h2> Bem-vindo(a), " . $_SESSION['nome'] . "! </h2>";
                echo 
                "<div>
                    <a href='produtosHome.php'><button class='btn btn-success'>Produtos</button></a>
                    <a href='gerenciamento.php'><button class='btn btn-primary'>Gerenciar Conta</button></a>
                    <a href='../php/rotinas/logout.php'><button class='btn btn-secondary'>Logout</button></a>
                </div>";
            } else {
                echo 
                "<h2> Bem-vindo(a), Faça seu login ou registro! </h2>";
                echo
                "<div>
                    <a href='registro.html'><button class='btn btn-primary'>Registro</button></a>
                    <a href='login.html'><button class='btn btn-secondary'>Login</button></a>
                    
                </div>";
            }
        ?>
    </header>
    <hr>
    <main class="container">
        <h1 class="text-center">PRODUTOS</h1>
        <div class="d-flex justify-content-between">
            <?php
                $conexao = mysqli_connect("localhost", "root", "", "Vienna2");

                $sql = "SELECT * FROM `produtos`";
                $consulta = mysqli_query($conexao, $sql);
        
                while($dados = mysqli_fetch_array($consulta)){

                    $nome = $dados['nome'];
                    $idCategoria = $dados['categoria'];
                    $preco = $dados['preço'];
                    
                    echo card_produto($nome, $idCategoria, $preco);

                }

                
            ?>
            
        </div>
    </main>
  </body>
</html>
