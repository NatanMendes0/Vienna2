<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Vienna - Home</title>
  </head>
  <body>
    <header style="display: flex; flex-direction: row; justify-content: space-between; margin: 1%;">
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
                "<h2> Faça seu login ou registro para usar essa função! </h2>";
                echo
                "<div>
                    <a href='registro.html'><button class='btn btn-primary'>Registro</button></a>
                    <a href='login.html'><button class='btn btn-secondary'>Login</button></a>
                    
                </div>";
            }
        ?>
    </header>
    <hr>
    <main class="container d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">Produto</h1>
        <div class="d-flex justify-content-center flex-row">
            <a href="opcoesProdutos/adicionar.php" style="margin:10px"><button class="btn btn-primary">Adicionar</button></a><br>
            <a href="opcoesProdutos/editar.php" style="margin:10px"><button class="btn btn-primary">Editar</button></a><br>
            <a href="opcoesProdutos/adicionar.php" style="margin:10px"><button class="btn btn-danger">Remover</button></a>
        </div>
    </main>
  </body>
</html>
