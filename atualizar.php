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
                <span><i class="icon icon-reload"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Id" name="id"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Nome" name="nome"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="password" placeholder="Descrição" name="desc"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="Qtd" name="qtd"><!--opcional-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Valor Uni." name="valor"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="Marca" name="marca"><!--opcional-->
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" placeholder="Atualizar produto">
            </div>
        </form>
    </div>
   <!--  <?php
        $nome = $id = $qtd = $valor = $marca = $desc = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = valida($_POST["nome"]);
            $id = valida($_POST["id"]);
            $qtd = valida($_POST["qtd"]);
            $valor = valida($_POST["valor"]);
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
       
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //consulta para atualizar dados de determinado produto
        $sql = ("UPDATE material 
        SET nome ='$nome', quantidade = '$qtd', valorReferencia = '$valor', descricao = '$desc', marca = '$marca'  
        WHERE id = '$id' ");

        if (mysqli_query($conn, $sql)) {
         echo '';
        }
mysqli_close($conn);
        
        mysqli_close($conn); 
    ?> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>