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
                <input type="text" class="form-control item" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Senha" name="senha">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-block create-account">
            </div>
            <div>
                Ainda não tem uma conta? <a href="cadastro.php">Cadastrar</a>
            </div>
        </form>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ambrosiaartss";
        $email = $senha  = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $email = valida($_POST["email"]);
          $senha = valida($_POST["senha"]);
          $cod = substr($email,0,2);
        
          if ($cod == "00"){
            $conn = mysqli_connect($servername, $username, $password, $dbname);
          
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          //consulta para validar dados do login do funcionario
          $sql = "SELECT cod,senha FROM empresa WHERE cod = '$email' AND senha = md5('$senha') ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              header('Location: '.'vendedor.php');
            }
          } 
          $conn->close();
          } else {
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            //consulta para validar dados do login do cliente
            $sql = "SELECT email,senha FROM cliente WHERE email = '$email' AND senha = md5('$senha') ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              //criar pagina php user
                header('Location: '.'inicio.php');
              }
              $conn->close();
            }
          }
        }
 
        function valida($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }   
      ?>
        <div class="social-media">
            <h5>Login com redes sociais</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>