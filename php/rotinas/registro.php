<?php
    if (count($_POST) > 0) {
        //ligação com o banco de dados
        require_once("../funcoes/banco.php");
        require_once("../funcoes/usuarios.php");

        //atributos retirados do formulario
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confsenha = $_POST['confSenha'];

        //checa se a senha é diferente
        if ($senha != $confsenha) {
            die("Senhas diferente!");
        }

        global $mysqli;

        //faz uma criptografia da senha
        //$hash_senha = hash("sha256", $senha, false);

        // //insersão de valores no banco de dados 
        // try {
        //     $sql = "INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome','$email','$hash_senha')"; //insere a senha ja codificada no campo senha
        //     $result = $mysqli->query($sql);
        // } catch (mysqli_sql_exception $e) {
        //     //mostra mensagem de erro       
        //     die("Ocorreu um erro na inclusão do usuário. ({$e->getMessage()})");
        // }

        $usuario = banco_insert_usuario($nome, $cpf, $email, $senha);
    }
?>