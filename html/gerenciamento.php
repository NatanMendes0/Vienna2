<?php
    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Vienna - Gerenciamento de conta</title>
</head>

<body>
    <h1 class="text-center">Você deseja alterar seus dados? Se sim, digite seu email abaixo</h1>
    <hr>
    <div class="text-center">
        <form action="alterarConta.php" method="POST">
            <p>
                <label>Digite seu E-mail:</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Digite sua senha:</label>
                <input type="password" name="senha">
            </p>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>