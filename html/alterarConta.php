<?php
    //conexao com banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "Vienna2");

    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }
    
    //variaveis
    $email = $_POST['email'];
    $id = "";
    $nome_novo = "";
    $email_novo = "";
    $senha_novo = "";
    $confSenhaNovo = "";
    $sql = "SELECT * FROM `usuarios` WHERE `email`='$email'";

    $consulta = mysqli_query($conexao,$sql);

    while($dados = mysqli_fetch_array($consulta)){
        $id = $dados['id'];
        $nome_novo = $dados['nome'];
        $email_novo = $dados['email'];
        $senha_novo = $dados['senha'];
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
    <h2>Gerenciamento de conta:</h2>
    <hr>
    <div class="text-center">
        <form action="../php/rotinas/altera.php" method="POST"> 
            <p>
                <label>Digite um novo nome (ou deixe o mesmo para mantê-lo):</label>  
                <input type="text" name="nome"  >
            </p>
            <p>
                <label>Digite um novo E-mail (ou deixe o mesmo para mantê-lo):</label>
                <input type="email" name="email" required value="<?php echo $email_novo; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </p>
            <p>
                <label>Digite uma nova senha (ou digite a mesma para mantê-la): </label>
                <input type="password" name="senha" required value="">
            </p>
            <p>
                <label>Confirme a nova senha (ou digite a mesma para mantê-la): </label>
                <input type="password" name="confSenha" required value="">
            </p>
            <p>
                <input type="submit" class="btn btn-primary" value="Enviar">
            </p>
            <br><br>
            <p>
                <button name="deletar" class="btn btn-secondary">Deletar Conta</button>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </p>
        </form>
        
    </div>
</body>
</html>