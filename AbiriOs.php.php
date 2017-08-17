<?php 
    $dataConnect = mysqli_connect("localhost", "root", "", "cadastro");
    $sql = "SELECT cliente_nome, cliente_id,cliente_sexo FROM clientes DSC";
    $result = mysqli_query($dataConnect, $sql);
 ?>
<!DOCTYPE html>

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
    <body>
        <?php 
         require_once './_php/PesquisaCliente.php';
         
        ?>
        <form class="form-group-sm" action="_php/CadastraOrdem.php" method="post">
            <h2>Abertura da Ordem de Serviço</h2>
            Cliente.:<h2><?php echo $quemeh; ?></h2> <input type="hidden"  name="id" value="<?php echo $idcliente;?>">
            
            <div class="divider"><h4>Dados do Aparelho</h4></div>
            Marca e Modelo: <input type="text" name="marcamodelo" class="form-control" id="InputForm">
            <h4>Acessórios</h4>
            <table class="table-responsive input-md" id="InputForm">
                <tr>
                    <td>
                        Sem Bateria <input type="checkbox" class="checkbox-inline" name="acessorio" value="Sem Bateria">                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        Sem Carregador/USB   <input type="checkbox" class="checkbox-inline" name="acessorio" value="Sem Carregador/USB">                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Sem Cartão de Memória  <input type="checkbox" class="checkbox-inline" name="acessorio" value="Sem Cartão de Memória">                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Sem Chip <input type="checkbox" class="checkbox-inline" name="acessorio" value="Sem Chip">                        
                    </td>
                </tr>
            </table>
            Defeito <textarea class="form-control" name="defeito" cols="5" rows="5" id="InputForm"></textarea>
            <br>
            <button  type="submit" class="btn btn-success">Cadastrar</button>    
    </form>
</body>
    
</html>
