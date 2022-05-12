<?php
    $conexao = mysqli_connect("localhost", "root", "", "Vienna2");

    //revive a sessao do usuario
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST['deletar'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id`= '$id'";
        $executa= mysqli_query($conexao,$sql);
        unset($_POST['deletar']);
        header("location: ../../html/home.php");
    }

    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["confSenha"]) && $_POST["senha"] == $_POST["confSenha"]){
        $id = $_POST['id'];
        $nome_novo = $_POST['nome'];
        $email_novo = $_POST['email'];
        $senha_novo = $_POST['senha'];
        
        $hash_senha = hash("sha256", $senha_novo, false);
        
        try{
            $sql = "UPDATE `usuarios` SET  `nome`='$nome_novo', `email`='$email_novo', `senha`='$hash_senha' WHERE `id`='$id'";
            $executa= mysqli_query($conexao,$sql);
        } catch (mysqli_sql_exception $e){
            die("Ocorreu um erro na atualização do usuário! ({$e->getMessage()})");
        }        

        if($executa)
		{
			session_destroy();
            header("location: ../../html/home.php");
		}
    }
?>