<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Auxililiar.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        
        
        <title></title>
    </head>
    
    <form class="form-group-sm" action="_php/CadastraCliente.php" method="post">
            <h2>Cadastro de Cliente</h2>
            Data: <input type="date" name="dataentrada" class="form-control" id="InputForm">
            Nome: <input name="nome" type="text" class="form-control" placeholder="Insira o Nome Completo" id="InputForm">
            Email: <input name="email" type="text" class="form-control" placeholder="Email para Receber quando Orçamento ficar pronto" id="InputForm">
            Telefone: <input name="telefone" type="text" class="form-control" placeholder="Preferencia Celular" id="InputForm" >
            Sexo: Masculino <input type="radio" class="radio-inline" value="M" name="sexo"> Feminino <input type="radio" class="radio-inline" value="F" name="sexo">
         
            <br>
            <button  type="submit" class="btn btn-success">Cadastrar</button>    
    </form>
    
</html>
