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
                <span><i class="icon icon-trash"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Id produto" name="id"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" value="Deletar">
            </div>
        </form>
    <?php
        $id = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = valida($_POST["id"]);
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
    
        //consulta que seleciona o material, para confirmar sua deleção
        $sql = "SELECT  nome, marca
        FROM material 
        WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql) or die ("Erro ao deletar produto");
   
        while($registro = mysqli_fetch_array($result)) {
            $nome = $registro['nome'];
            $marca = $registro['marca'];

            echo " <div class='social-media'>
                    <h5>Item: ".$nome." - Marca: ".$marca." deletado com sucesso!</h5>
                </div>";
        }

        //consulta para deletar dados de determinado produto
        $sql = "DELETE FROM material 
        WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo '';
    }
        $conn->close();
    ?>
       </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>