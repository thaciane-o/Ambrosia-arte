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
            left: 33%;
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
                    <li class="nav-item dropdown"><a class="dropdown-item" aria-current="page" href="inserir.php">Inserir</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-item" aria-current="page" href="atualizar.php">Atualizar</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-item" aria-current="page" href="deletar.php">Deletar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="registration-form" id="divEs">
        <div class="form-icon">
            <span><i class="icon icon-bag"></i></span>
        </div>   
    <?php
       echo '<table style="width: 500px; height: 65px;">
                <tr>
                <td>
                <h4>CÓDIGO</h4>
            </td>
                    <td>
                        <h4>MATERIAL</h4>
                    </td>
                    <td>
                        <h4>QTD</h4>
                    </td>
                    <td>
                        <h4>VALOR</h4>
                    </td>
                    <td>
                        <h4>MARCA</h4>
                    </td>
               </tr>
          ';

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "ambrosiaartss";
       
       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
       }
       
       //consulta que retorna os valores da tabela MATERIAL, 
       //para que os funcionários possam consultar o estoque
       $sql = "SELECT id, nome, quantidade, valorReferencia, marca
       FROM material ORDER BY id";
       $result = mysqli_query($conn,$sql) or die ("Erro ao consultar estoque");
    
        while($registro = mysqli_fetch_array($result)) {
            $id = $registro['id'];
            $nome = $registro['nome'];
            $qtd = $registro['quantidade'];
            $valor = $registro['valorReferencia'];
            $marca = $registro['marca'];

            echo "<tr><td><span>".$id."          </span></td><td><span>".$nome."     </span></td><td><span>".$qtd."      </span></td><td><span>".$valor."            </span></td><td><span>".$marca."</span></td></tr>";
        }

        $conn->close();
        "</table></div>";
        ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>