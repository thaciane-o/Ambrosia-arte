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
                         
                    </ul>
                </div>
            </div>
        </nav>
    <div class="registration-form">
    <form action="" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Funcionário" name="nome"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Senha" name="senha"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email" name="email"><!--obrigatório-->
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="Número de telefone" name="telefone"><!--opcional-->
            </div>
            <div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="address" placeholder="Código de acesso" name="cod">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" placeholder="Criar conta">
            </div>
        </form>
        <?php
            function imprime ($nome,$cod){
                echo '<div class="social-media">
                        <h5> Usuário ' .$nome.' - ' .$cod. ' cadastrado</h5>
                    </div>';
            }
        ?>
        <?php
            $nome = $email = $senha = $telefone = $cod = "";
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = valida($_POST["nome"]);
                $email = valida($_POST["email"]);
                $telefone = valida($_POST["telefone"]);
                $senha = valida($_POST["senha"]);
                $cod = valida($_POST["cod"]);
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
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
       
        //consulta para inserir um novo funcionario
        $sql = "INSERT INTO empresa (senha, nome, email, telefone, cod)
        VALUES (md5('$senha'), '$nome', '$email', '$telefone', '$cod')";
    
        if (mysqli_query($conn, $sql)) {
            $sql = "SELECT  nome, cod
            FROM empresa 
            WHERE cod = '$cod' ";
            $result = mysqli_query($conn,$sql) or die ("Erro ao inserir funcionário");
       
            while($registro = mysqli_fetch_array($result)) {
                $nome1 = $registro['nome'];
                $cod1 = $registro['cod'];
    
                echo " <div class='social-media'>
                        <h5>Funcionário: ".$nome1." - Código: ".$cod1." inserido com sucesso!</h5>
                    </div>";
            }
        }
       
       mysqli_close($conn); 
    ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>