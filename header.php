<?php

    $usuario="root"; //nome do usuario do Banco de dados
    $senha="mysql"; //senha do usuario 
    $database="crud"; // nome da base de dados

    // conectando com a base de dados mysql
    $conexao = mysqli_connect("localhost", $usuario, $senha, $database);

    if($conexao === false) {
        echo 'nao foi possivel conectar ao banco';
    }






?>