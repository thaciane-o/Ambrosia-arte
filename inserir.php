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
    <div class="registration-form">
    <form action="" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-plus"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="qtde" placeholder="Quantidade" name="qtd"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="nome" placeholder="Nome" name="nome"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="valorRef" placeholder="Valor" name="valorRef"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="desc" placeholder="Descrição" name="desc"><!--opcional-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="marca" placeholder="Marca" name="marca"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" placeholder="Criar conta">
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>
    <!-- <?php
        $nome = $id = $qtd = $valor = $marca = $desc = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = valida($_POST["nome"]);
            $qtd = valida($_POST["qtd"]);
            $valor = valida($_POST["valorRef"]);
            $marca = valida($_POST["marca"]);
            $desc = valida($_POST["desc"]);
        }

        function valida($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }   
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ambrosiaartss";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
       
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        //consulta para inserir dados de um novo produto
        if ($nome != ""){
            $sql = "INSERT INTO material (quantidade, nome, valorReferencia, marca, descricao)
            VALUES ('$qtd', '$nome', '$valor', '$marca', '$desc')";
        }
 
         if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript" type="text/javascript">
            novoProduto('.$nome.','.$valor.');
            }</script>'; 
         }
        mysqli_close($conn); 
     ?>
       
       
    ?>  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>