<!DOCTYPE html>
<html>

<head>
    <title>Luciane C. Bourchardt - Página Inicial </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widith, initial-scale=1">

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
            <a class="navbar-brand" href="home">
                <img src="imagens/logo.png" alt="Luciane" title="Luciane">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fotos">Fotos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="sobre_pessoal">Pessoal</a>
                            <a class="dropdown-item" href="sobre_profissional">Profissional</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="banner" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-90" src="imagens/banner.jpg" alt="tecnologia">
            </div>
        </div>
    </div>

    <main>
        <?php

            $pagina = "home";

            if ( isset ( $_GET["param"] )){

                $param = explode("/",$_GET["param"]);
                $pagina = ( $param[0] );
            } 


            $pagina = $pagina.".php";
            
            if (file_exists($pagina)) include $pagina;
            else include "/erro.php";
        ?>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-map-marker-alt fa-5x"></i>
                    <br>
                    Rua Cesar Fratini - 61, Bairro Salete<br>
                    Concórdia - SC
                </div>
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-mobile-alt fa-5x"></i>
                    <br>
                    (49) 98409 1801
                </div>
                <div class="col-12 col-md-4 text-center">
                    <i class="fas fa-envelope-alt fa-5x"></i>
                    <br>
                    lucianeconte@gmail.com
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>2019 - Todos os direitos reservados</p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-right">
                        <a href="https://www.facebook.com/luciane.conte.3" title="Facebook">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="http://www.linkedin.com/in/lucianeconte" title="LinkedIn">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>