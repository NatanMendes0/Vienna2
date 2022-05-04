<?php
    $conexao = mysqli_connect("localhost", "root", "", "Vienna2");

    //revive a sessao do usuario
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["confSenha"])){
        $nome_novo = $_POST['nome'];
        $email_novo = $_POST['email'];
        $senha_novo = $_POST['senha'];

        $hash_senha = hash("sha256", $senha_novo, false);
        $sql = "UPDATE `usuarios` SET  `nome`='$nome_novo', `email`='$email_novo', `senha`='$hash_senha' WHERE `email`='$email_novo'";
        $executa= mysqli_query($conexao,$sql);

        if($executa)
		{
			session_destroy();
            echo "<div style='color:#F00'> Sucesso ao atualizar</div><br/><br/>";
		}else{
			echo "<div style='color:#F00'> Erro ao atualizar</div><br/><br/>";
		}
    }
?>