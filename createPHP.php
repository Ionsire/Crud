<?php

    include "header.php";


    $deletar = $_GET['id'];

    $nome = $_POST['nome']; //$_REQUEST, $_GET
    $valor = $_POST['valor'];

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $query = "INSERT INTO produto(nome, valor) VALUES( '$nome', '$valor' )"; 

    $query2 = "INSERT INTO caracteristica(peso, altura) VALUES( '$peso', '$altura' )"; 

    // DELETE FROM produto where nome = $deletar
        
    // consulta SQL
    $resultado = $conexao->query($query);
    $resultado2 = $conexao->query($query2);
    

    if($resultado != false && $resultado2 != false){
        echo 'tudo Criado com sucesso';
        
    } 
    else{
        echo ' deu um erro';
       
    }
    echo "<br><a href='index.php'>Voltar</a>";
     

?>

