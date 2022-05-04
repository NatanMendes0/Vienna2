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
            //mostra mensagem de erro       
            die("Ocorreu um erro na inclusão do usuário. ({$e->getMessage()})");
        }
        
        header("location: ../../html/home.php");
        return $result;
    }

    //seleciona campo email e senha dentro do banco de dados - FALTA ADICIONAR O TRY CATCH
    function banco_select_email_senha ($email, $senha){
        
        //codifica a senha
        $hash_senha = hash("sha256", $senha, false);
    
        //$sql pesquisa no banco de dados os campos nome e email
        global $mysqli; //var que está armazenando valor do banco de dados
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$hash_senha'";
        $obj = null;

        //checar se select retorna valor - MUDAR PARA TRY CATCH
        if($result = $mysqli -> query($sql)) {
            $obj = $result -> fetch_object(); //fetch_object: retorna valores como um objeto
        }
        $result -> close();
        unset($sql);

        return $obj;
    }

    //realiza o update na tabela - NÃO FUNCIONA
    function banco_update_usuario($nome_novo, $email_novo, $senha_novo, $confSenha_novo){
        global $mysqli;

        if($senha_novo!=$confSenha_novo){
            die("Senhas diferentes.");
        }

        $hash_senha = hash("sha256", $senha_novo, false);

        try{
            $sql = "UPDATE `usuarios` SET  `nome`='$nome_novo', `email`='$email_novo', `senha`='$hash_senha' WHERE `id`='$id'";
            $result = $mysqli->query($sql);
        } catch (mysqli_sql_exception $e){
            die("Ocorreu um erro na atualização do usuário. ({$e->getMessage()})");
        }

        header("location: ../../html/home.php");
        return $result;
    }
?>