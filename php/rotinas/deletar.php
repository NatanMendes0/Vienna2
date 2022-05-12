<?php
    //conexoes
    require_once("../funcoes/banco.php");
    require_once("../funcoes/usuarios.php");

    if(isset($_POST['deletar'])){
        $id = $_POST['id'];
        
        global $mysqli;

        $usuario = delete_usuario($id);
    }
?>