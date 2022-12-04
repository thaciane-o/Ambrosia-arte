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
    <div class="registration-form">
    <form action="" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Usuário" name="nome"><!--obrigatório-->
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
                    <input type="text" class="form-control item" id="address" placeholder="Endereço Ex.: Rua: XXX - Bairro: XXX - Número: 000" name="endereco">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" placeholder="Criar conta">
            </div>
            <div>
                Já possui uma conta? <a href="index.php">Login</a>
            </div>
        </form>
        <div class="social-media">
            <h5>Cadastrar com redes sociais</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    <?php
        $nome = $email = $senha = $telefone = $endereco = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = valida($_POST["nome"]);
            $email = valida($_POST["email"]);
            $telefone = valida($_POST["telefone"]);
            $senha = valida($_POST["senha"]);
            $endereco = valida($_POST["endereco"]);
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
       
        //consulta para inserir um novo cliente
        $sql = "INSERT INTO cliente (senha, nome, email, telefone, endereco)
        VALUES (md5('$senha'), '$nome', '$email', $telefone, '$endereco')";

        if (mysqli_query($conn, $sql)) {
            header('Location: '.'index.php');
        }

        mysqli_close($conn); 
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>