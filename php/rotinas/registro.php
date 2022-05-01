<?php
    //ligação com o banco de dados
    require_once("../funcoes/banco.php");

    //atributos retirados do formulario
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confSenha'];

    //checa se a senha é diferente
    if ($senha != $confsenha) {
        die("senha diferente");
    }

    global $mysqli;

    //faz uma criptografia da senha
	$hash_senha = hash("sha256", $senha, false);

    //validação que verifica se email digitado ja existe
	try {
		$sql = "INSERT INTO `usuarios` (`NOME`, `CPF`, `EMAIL`, `SENHA`) VALUES ('$nome','$cpf','$email','$hash_senha')"; //insere a senha ja codificada no campo senha
        $result = $mysqli->query($sql);
	} catch(mysqli_sql_exception $e) {
		//mostra mensagem de erro       
        die("Ocorreu um erro na inclusão do usuário. ({$e->getMessage()})");
	}
    
    header("location: home.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Registro - Vienna</title>
  </head>
  <body style="text-align: center;">
    <h1>Faça seu registro</h1>
    <hr>
    <div class="container"> 
            <form action="" method="POST">
                <p>
                    <label>Nome:</label>
                    <input type="text" name="nome">
                </p>
                <p>
                    <label>E-mail</label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label>Senha</label>
                    <input type="password" name="senha">
                </p>
                <p>
                    <label>Confirmar Senha</label>
                    <input type="password" name="confSenha">
                </p>
            </form>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
  </body>
</html>