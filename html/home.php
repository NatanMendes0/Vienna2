<?php
    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
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
    <header style="display: flex; flex-direction: row; justify-content: space-between; margin: 1%;">
        <?php
            if ( isset ($_SESSION['nome']) ) { 
                echo 
                "<h2> Bem-vindo(a), " . $_SESSION['nome'] . "! </h2>";
                echo 
                "<div>
                    <a href='gerenciamento.php'><button class='btn btn-primary'>Gerenciamento de conta</button></a>
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
        <h1 class="text-center">DESTAQUES</h1>
        <div class="d-flex justify-content-between">
            <div>
                <a href="../html/produtos/misotoOne.php" style="text-decoration: none;">
                    <div class="text-center" style="flex-direction: column">
                        <div><h2>Misoto One</h2></div>
                        <div><img src="https://docs.google.com/uc?id=1j3BPkyLcj66iFnFNqPON1GvegICXpmMv"></div>
                        <div><h2>R$ 999,90</h2></div>
                    </div>
                </a>
            </div>
            <div>
                <a href="../html/produtos/misotoX.php" style="text-decoration: none;">
                    <div class="text-center" style="flex-direction: column">
                        <div><h2>Misoto X</h2></div>
                        <div><img src="https://docs.google.com/uc?id=13CmGQCaUfOet0UDStdI66kb5uw4LE_K1"></div>
                        <div><h2>R$ 2999,90</h2></div>
                    </div>
                </a>
            </div>
            <a href="../html/produtos/misotoTv.php" style="text-decoration: none;">
                <div class="text-center" style="flex-direction: column">
                    <div><h2>Misoto TV</h2></div>
                    <div><img src="https://docs.google.com/uc?id=1T2EAp8f_bw1d6EGx8FvLP9OiBli83Caf"></div>
                    <div><h2>R$ 999</h2></div>
                </div>
            </a>
        </div>
    </main>
  </body>
</html>
