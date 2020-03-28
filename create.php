<h1>Formulario</h1>

<?php

include "header.php";

$query = "SELECT * FROM produto WHERE id = 1"; 
$result  = $conexao->query($query);
echo $result['nome'];
 ?>

<form method="POST" action="createPHP.php">
    Nome: <input type="text" name="nome"><br>
    Valor: <input type="text" name="valor"><br>
    

    peso: <input type="text" name="peso"><br>
    altura: <input type="text" name="altura"><br>

    <input type="submit" value="Cadastrar"> 

</form>
 
<a href="index.php">Voltar</a>