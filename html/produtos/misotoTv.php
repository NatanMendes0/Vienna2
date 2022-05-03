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
            <h1>Misoto TV</h1>
            <img src="https://docs.google.com/uc?id=1T2EAp8f_bw1d6EGx8FvLP9OiBli83Caf">
        </div>
        <div>
            <h3>R$ 199,90</h3>
            <h3>Sobre este item:</h3>
            <ul>
                <li>Vídeo 1080p HD de alta qualidade</li>
                <li>Som surround Dolby Digital Plus 7.1</li>
                <Li>Processador A8 para experiências fantásticas em jogos e apps</Li>
                <li>Filmes e séries Apple Originals na Apple TV+</li>
                <li>As mais recentes séries, filmes, desporto e televisão em direto dos principais serviços de streaming</li>
            </ul>
        </div>
    </main>
</body>
</html>