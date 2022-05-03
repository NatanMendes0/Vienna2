<?php
    //revive a sessao do usuario
    if(!isset($_SESSION)){
        session_start();
    }

    //destroi a sessao do usuario
    session_destroy();

    header("location: ../../html/home.php")
?>