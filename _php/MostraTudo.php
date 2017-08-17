<?php

require_once 'Conexao.php';
$sql = "SELECT * FROM ordem";
$query = mysqli_query($conecta, $sql);