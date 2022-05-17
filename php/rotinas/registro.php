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

        if (empty($nome)) { 
            echo "<script> alert(`Algum campo não foi preenchido. Tente novamente!`)</script>"; 
            header("location: ../../html/registro.html"); 
            die();
        }
        if (empty($email)) { 
            echo "<script> alert(`Algum campo não foi preenchido. Tente novamente!`)</script>"; 
            header("location: ../../html/registro.html"); 
            die();
        }
        if (empty($senha)) { 
            echo "<script> alert(`Algum campo não foi preenchido. Tente novamente!`)</script>"; 
            header("location: ../../html/registro.html"); 
            die();
        }
        if (empty($confsenha)) { 
            echo "<script> alert(`Algum campo não foi preenchido. Tente novamente!`)</script>"; 
            header("location: ../../html/registro.html"); 
            die();
        }

        //checa se a senha é diferente
        if ($senha != $confsenha) {
            die("Senhas diferente!");
        }

        global $mysqli;

        $usuario = banco_insert_usuario($nome, $email, $senha);
    }
?>