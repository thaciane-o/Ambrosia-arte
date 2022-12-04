<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ambrosia Arte</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        #divEs {
            display: inline-block;
            position: absolute;
            left: 27%;
            text-align: center;
        }
        tr, td{
            border-style:groove ;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Ambrosia Arte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item dropdown" ><a class="dropdown-item" aria-current="page" href="vendedor.php">Vendedor</a></li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="registration-form" id='divEs'>
        <div class="form-icon">
            <span><i class="icon icon-bag"></i></span>
        </div>
    <?php
        echo '<table style="width: 500px; height: 65px;">
                <tr>
                    <td>
                        <h4>CLIENTE</h4>
                    </td>
                    <td>
                    <h4>MATERIAL</h4>
                </td>
                    <td>
                        <h4>QTD</h4>
                    </td>
                    <td>
                        <h4>UNIT.</h4>
                    </td>
                    <td>
                        <h4>TOTAL</h4>
                    </td>
                    <td>
                    <h4>ENTREGA</h4>
                </td>
                <td>
                <h4>ENDEREÇO</h4>
            </td>
               </tr>
           ';

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ambrosiaartss";
       
       
        $conn = mysqli_connect($servername, $username, $password, $dbname);
       
      
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
       
        //consulta que retorna os dados da venda, bem como do cliente que 
        //realizou a compra 
        $sql = ("SELECT cliente.nome AS cliNome, material.nome AS matNome , 
         materiaLVenda.quantidade AS qtd,  
         (materialvenda.quantidade * materialvenda.precoUnitario) 
         AS valorTotalC, venda.dataHoraFinal AS entrega, 
         materialVenda.precoUnitario AS unit, cliente.endereco as endereco
        FROM material JOIN materialVenda JOIN cliente JOIN venda
        WHERE  material.id = material_idMaterial AND
        venda.id = venda_idVenda AND
        cliente.id = cliente_idCliente
        GROUP BY venda.id ORDER BY venda.dataHoraFinal ;");


        $result = mysqli_query($conn,$sql) or die ("Erro ao consultar vendas");

        while($registro = mysqli_fetch_array($result)) {
            $cliNome = $registro['cliNome'];
            $matNome = $registro['matNome'];
            $qtd = $registro['qtd'];
            $valorTotalC = $registro['valorTotalC'];
            $dataEntrega = $registro['entrega'];
            $unit = $registro['unit'];
            $endereco = $registro['endereco'];
            echo "<tr><td>". $cliNome."</td><td>".$matNome."</td><td>".$qtd."</td><td>".$unit. "</td><td>".($valorTotalC =  number_format($valorTotalC, 2, '.', ''))."</td><td>".$dataEntrega. "</td><td>".$endereco."</td></tr>";
        }
        $conn->close();
        
        echo "</table></div>";
        ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
