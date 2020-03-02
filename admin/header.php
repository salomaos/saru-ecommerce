<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>SARU Cervejas - ADMIN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand border-right pr-4 font-weight-bold text-warning" href="index.php">SARU Cervejas - ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-sales" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Vendas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-sales">
                            <a class="dropdown-item" href="index.php">Pedidos</a>
                            <a class="dropdown-item" href="reports.php">Relatórios</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients.php">Clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produtos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu-products">
                            <a class="dropdown-item" href="products.php">Listar</a>
                            <a class="dropdown-item" href="new_product.php">Criar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="categories.php">Categorias</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logs</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>