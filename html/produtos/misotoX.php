<?php
    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Vienna - Misoto X</title>
</head>
<body>
    <header style="display: flex; flex-direction: row; justify-content: space-between; margin: 1%;">
        <a href="../home.php"><img src="https://cdn-icons-png.flaticon.com/512/66/66822.png" alt="Voltar" style="width: 30px;"></a>
        <?php
            if ( isset ($_SESSION['nome']) ) { 
                echo 
                "<h2> Bem-vindo(a), " . $_SESSION['nome'] . "! </h2>";
                echo 
                "<div>
                    <a href='login.html'><button class='btn btn-primary'>Gereciar</button></a>
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
    <main class="container" style="flex-direction: row;">
        <div class="text-center">
            <h1>Misoto X</h1>
            <img src="https://docs.google.com/uc?id=13CmGQCaUfOet0UDStdI66kb5uw4LE_K1">
        </div>
        <div>
            <h3>R$2999,90</h3>
            <h3>Sobre este item:</h3>
            <ul>
                <li>Console Xbox mais rápido e poderoso de todos os tempos</li>
                <li>Jogue milhares de títulos: todos os jogos têm melhor aparência e são melhor executados no Xbox Series X</li>
                <Li>No coração do Series X está a Xbox Velocity Architecture, que combina um SSD personalizado e software integrado para diminuir significativamente os tempos de carregamento dentro e fora do jogo</Li>
                <li>Troque simultaneamente entre vários jogos em um instante com o Quick Resume.</li>
                <li>Explore novos mundos e desfrute da ação como nunca antes com 12 teraflops incomparáveis de poder de processamento gráfico</li>
                <li>Desfrute de jogos 4K a até 120 quadros por segundo, som 3D avançado especial e muito mais</li>
                <li>4K a 120 FPS: requer conteúdo e exibição compatíveis Versão X - com leitor de disco</li>
            </ul>
        </div>
    </main>
</body>
</html>