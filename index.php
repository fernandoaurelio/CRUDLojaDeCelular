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
        <script>
            function Ordem(){
                window.location = 'AbiriOs.php.php';
            }
            
            function Relogio(){
                //cria a data
                var data = new Date();
                var horas = data.getHours();
                var minutos = data.getMinutes();
                var segundos = data.getSeconds();
                //COndição SE a hora for menos que 10
                if(horas < 10){
                    horas = "0"+horas;
                }
                if(minutos < 10){
                    minutos = "0"+minutos;
                }
                if(segundos < 10){
                    segundos = "0"+segundos;
                }
                //Onde deve mostrar o relogio
                document.getElementById('relogio').innerHTML = horas+":"+minutos+":"+segundos;
                // Atualizacao com internvalos de 1000 milesimos de segundos
            window.setInterval("Relogio()",1000);
            }
            
        </script>
        <title>BootStrap 3.0 e PHP</title>
    </head>
    <body onload="Relogio();">
        
        <div class="nav navbar navbar-default navbar-fixed-top"><!-- Inicio da NAV -->
            <div class="container "><!-- Container da NAV -->
                <div class="navbar-brand"><img src="_img/logo_pqna.png" id="LogoNavPena"></div><!-- Logo Ana -->
                <ul class="nav navbar-nav"><!-- Botoes da NAV -->
                    <li><a href="cadastrarCliente.php" target="janela"><span class="glyphicon glyphicon-user"></span> Cadastrar Cliente</a></li>
                    <li><a href="AbiriOs.php.php" target="janela"><span class="glyphicon glyphicon-file"></span> Abrir Ordem de Serviço</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Caixa</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-transfer"></span> Adicionar Orçamento</a></li>
                </ul>
                <div class="navbar-form navbar-left"><!-- Pesquisa na NAV-->
                    <input type="text" class="form-control" placeholder="Busca a OS ou Cliente" id="PesquisaNav">
                    <button class="btn btn-success "><span class="glyphicon glyphicon-search"></span></button>
                </div>
                <div id="relogio" class="navbar-header btn btn-lg btn-info text-center">
                        
                    </div>
            </div><!-- FIm do Container da NAV -->
        </div><!-- FIm da NAV -->
        <div class="container "><!-- Corpo -->
            <div class="row"><!-- Grids do Corpo-->
                <div class="col-md-3 text-justify" id="Amostra">
                    <?php 
                    require_once './_php/MostraTudo.php';
                        while($ordem = mysqli_fetch_assoc($query)){
                            switch ($ordem['status']){
                                case "Aprovado":
                                    echo"<div class='alert alert-success'>
                                            <strong>Ordem ".$ordem['numerodaos']." Aprovado</strong>
                                                <a class='btn btn-primary btn-xs pull-left' href='#'>Mandar para o Técnico</a>
                                                <a class='btn btn-success' href='#'>Entregar ao Cliente</a>
                                        </div>";
                                    break;
                                case "Em Análise":
                                    echo"<div class='alert alert-info'>
                                            <strong>Ordem ".$ordem['numerodaos']."  Técnico está avaliando</strong>
                                                <a class='btn btn-primary btn-xs' href='#'>Adicionar Orçamento</a>
                                                <a class='btn btn-success btn-xs' href='#'>Entregar ao Cliente</a>
                                        </div>";
                                    break;
                                case "Cancelado":
                                    echo"<div class='alert alert-danger'>
                                            <strong>Ordem ".$ordem['numerodaos']."  Foi Cancelada pelo Cliente</strong>
                                                
                                                <a class='btn btn-success btn-xs' href='#'>Entregar ao Cliente</a>
                                        </div>";
                                    break;
                            }
                        }
                    ?>
                </div>
                
                <div class="col-md-8 "><iframe scrolling="no"  id="JanelaFrame" name="janela" src="cadastrarCliente.php" ></iframe></div>
            </div>
        </div><!-- Fim do Corpo -->
    </body>
</html>
