<!DOCTYPE html>
<html>

<head>
    <title>BCursos OnLine - Página Inicial </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widith, initial-scale=1">
    
    <base href="http://localhost/Site_Aula_PHP/">

    <link rel="shortcut icon" href="imagens/icon.png">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="imagens/logo.png" alt="BCursos" title="BCursos">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <!--mr-auto-->
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cursos-culinaria">Culinária</a>
                            <a class="dropdown-item" href="cursos-informatica.html">Informática</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fotos.html">Fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imagens/banner1.jpg" alt="Cursos de Tecnologia da Informação">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cursos de Tecnologia da Informação</h5>
                    <p>
                        <a href="informatica.html" class="btn btn-success btn-lg">
                            <i class="fas fa-search"></i> Ver mais
                        </a>
                    </p>
                </div>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/banner2.jpg" alt="Cursos 24 horas">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cursos Online 24 horas</h5>
                    <p>
                        <a href="cursos.html" class="btn btn-success btn-lg">
                            <i class="fas fa-search"></i> Ver mais
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main>
        <?php

            $pagina = "home";

            //recuperar o parametro
            if ( isset ( $_GET["param"] )){

                $param = explode("/",$_GET["param"]);
                $pagina = ( $param[0] );

                /*if ( isset ( $param[1] )){
                    $id = trim ( $param[1]);
                }*/

            } 


            $pagina = "paginas/".$pagina.".php";
            
            if (file_exists($pagina)) include $pagina;
            else include "paginas/erro.php";
        ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-map-marker-alt fa-5x"></i>
                    <br>
                    Av Brasil 1000, Centro<br>
                    Xanxerê - SC
                </div>
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-mobile-alt fa-5x"></i>
                    <br>
                    (011) 1406
                </div>
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-envelope-alt fa-5x"></i>
                    <br>
                    contato@bcursos.com.br
                </div>
            </div>
            <hr>
            <div class="row bottom">
                <div class="col-12 col-md-6">
                    <p>2019 - Todos os direitos reservados</p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-right">
                        <a href="#" title="Facebook">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" title="Twiiter">
                            <i class="fab fa-twiiter fa-2x"></i>
                        </a>
                        <a href="#" title="Instagram">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>