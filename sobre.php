<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ambrosia Arte</title>
        <!-- Favicon-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .social-icons {
            display: inline-block;
            position: absolute;
            left: 24%;
            text-align: center;
            }
            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="inicio.php">Ambrosia Arte</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="inicio.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Loja</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="todos.php">Todos os produtos</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="populares.php">Itens populares</a></li>
                                <li><a class="dropdown-item" href="novidades.php">Novidades</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Carrinho
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Carrinho de compras</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <select id="mySelect" size="4"></select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" type="submit">Salvar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Sobre nós</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5" style="margin-bottom: 300px">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <p class="lead fw-normal text-black-100 mb-0" style="width: 100%;">Fundamos a Ambrosia Arte com um objetivo: oferecer uma loja online confiável, inteligente e de alta qualidade. A paixão pela excelência nos guia desde o início e assim seguimos em direção ao futuro. Sabemos que cada produto é valioso, por isso nosso objetivo é oferecer sua experiência de compra prazerosa. Veja você mesmo!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Ambrosia Arte 2022</p>
            </div>
            <div class="social-icons">
                <a class="m-0 text-center text-white" href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a class="m-0 text-center text-white" href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                <br>
                <a class="m-0 text-center text-white" href="#">Termos de Uso</a>
                <a class="m-0 text-center text-white" href="#">Política de Privacidade</a>
                <a class="m-0 text-center text-white" href="#">Política de Trocas</a>
                <a class="m-0 text-center text-white" href="#">FAQ</a>
                <a class="m-0 text-center text-white" href="#">Regulamentos</a>
                <a class="m-0 text-center text-white" href="#">Trabalhe Conosco</a>
                <a class="m-0 text-center text-white" href="#">SAC</a>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
