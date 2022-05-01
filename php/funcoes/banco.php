<?php
// conecta o banco de dados
mysqli_report( MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT );

// var: 
$mysqli = new mysqli ( "localhost", "root", "", "Vienna2" );

// cond (  )
if ( $mysqli -> error ) {
    die( "Falha ao conectar ao banco de dados: " . $mysqli -> error );
}

?>