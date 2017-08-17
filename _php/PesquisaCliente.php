<?php
require_once 'Conexao.php';
$getnome = filter_input(INPUT_GET, "nome");

$sql = "SELECT * FROM clientes WHERE cliente_nome = '$getnome'";
$query = mysqli_query($conecta, $sql);
$clienteOs = mysqli_fetch_array($query);
if(!$clienteOs){
    echo "erro".mysqli_errno($conecta);
}else{
    echo "foi";
}

// Transforma resultados em variavels

$quemeh = $clienteOs['cliente_nome'];
$idcliente = $clienteOs['cliente_id'];
$fonecliente = $clienteOs['cliente_telefone'];
$sexodocliente = $clienteOs['cliente_sexo'];
$emaildocliente = $clienteOs['cliente_email'];
