<?php

    $servidor = "localhost";    
    $usuario = "root";
    $senha = "";
    $db = "test_cometa";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("error ao conectar ao banco de dados".mysqli_connect_error());
    }

?>