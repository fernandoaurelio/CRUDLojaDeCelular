<?php

require_once 'Conexao.php';
$id = filter_input(INPUT_POST, "id");
$marcamodelo = filter_input(INPUT_POST, "marcamodelo");
$acessorios = filter_input(INPUT_POST, "acessorio");
$defeito = filter_input(INPUT_POST, "defeito");
$status = "Em Análise";
$dataEntrada = date("Y-m-d");

$sql = "INSERT INTO ordem VALUES('','$marcamodelo','$acessorios','$defeito','','$status','$id',NOW(),'')";
$query = mysqli_query($conecta, $sql);
if(!$query){
    echo "Nao cadstrou". mysqli_errno($conecta);
}else{
    echo "Cadastrado!";
}