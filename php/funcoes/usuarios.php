<?php
    //insere um usuario dentro do banco de dados
    function banco_insert_usuario($nome, $email, $senha){
        global $mysqli;

        //codificada a senha
        $hash_senha = hash("sha256", $senha, false);

        //validação que verifica se email digitado ja existe
        try {
            $sql = "INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome','$email','$hash_senha')"; //insere a senha ja codificada no campo senha
            $result = $mysqli->query($sql);
        } catch (mysqli_sql_exception $e) {     
            die("Ocorreu um erro na inclusão do usuário. ({$e->getMessage()})");
        }
        
        header("location: ../../html/home.php");
        return $result;
    }
?>