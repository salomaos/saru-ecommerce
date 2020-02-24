<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>SARU Cervejas</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img class="img-thumbnail" src="https://via.placeholder.com/150" alt="Main Logo">
                </div>
                <div class="col-6">
                    <form id="search" class="form-inline" action="search">
                        <input class="form-control" type="text" name="search" placeholder="Buscar">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-3">
                    <div class="header-right">
                        <div class="row">
                            <a class="social-network pr-3" href="facebook.com"><i class="fab fa-facebook-square"></i></a>
                            <a class="social-network pr-3" href="twitter.com"><i class="fab fa-twitter-square"></i></a>
                            <a class="social-network" href="instagram.com"><i class="fab fa-instagram-square"></i></a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="signup_singin.php">Login/Cadastrar</a>
                        </div>
                        <div class="row cart-icon justify-content-center">
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-item nav-link active" href="#">Promoções <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Estilos</a>
                        <a class="nav-item nav-link" href="#">Fabricantes</a>
                        <a class="nav-item nav-link" href="#">Países</a>
                        <a class="nav-item nav-link" href="#">Cervejarias</a>
                        <a class="nav-item nav-link" href="#">Kits</a>
                        <a class="nav-item nav-link" href="#">Copos & Taças</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>