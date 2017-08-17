<?php
require_once './Conexao.php';

$nome = filter_input(INPUT_POST, "nome");
$sexo = filter_input(INPUT_POST, "sexo");
$email = filter_input(INPUT_POST, "email");
$telefone = filter_input(INPUT_POST, "telefone");
$dataEntrada = date("Y-m-d");

// SQL

$ClienteSql = "INSERT INTO clientes VALUES (NULL, '$nome','$sexo','$email','$telefone','$dataEntrada',NOW())";
$ClienteQuery = mysqli_query($conecta, $ClienteSql);
if(!$ClienteQuery){
    echo "Nao conectou". mysqli_connect_errno();
            
}else{
    
    echo header("Location: http://localhost/bootstrapNophp/AbiriOs.php.php?nome=$nome");
    
}