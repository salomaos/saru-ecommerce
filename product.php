<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-5">
            <div class="col-7">
                <div class="row">
                    <div class="col-3">
                        <img class="rounded w-100 img-thumbnail mb-3" src="img/beers/586135.png" alt="Red Stripe">
                        <img class="rounded w-100 img-thumbnail" src="img/beers/586135.png" alt="Red Stripe">
                    </div>
                    <div class="col-9">
                        <img class="w-100" src="img/beers/586135.png" alt="Cerveja">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <h2>Red Stripe</h2>
                <h6>SKU: 06065296366</h6>
                <hr>
                <p>A cerveja Red Stripe Lager é uma cerveja importada da Jamaica, famosa em todo o mundo. É uma cerveja refrescante, perfeita para o verão. Apresenta uma coloração clara com leve presença do malte. Seu final é suave com um leve amargor.</p>
                <div class="row">
                    <div class="col">Jamaica</div>
                    <div class="col">LAGER</div>
                    <div class="col">330ml</div>
                </div>
                <hr>
                <small class="text-muted"><strike>R$ 13,99</strike></small>
                <h4>R$ 10,99</h4>
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <input class="form-control" type="number" name="quantity" id="quantity" min="0" value="0">
                        </div>
                        <div class="form-group col-9">
                            <a class="btn btn-warning btn-block" href="cart.php">Comprar</a>
                            <!-- <button class="btn btn-warning btn-block" type="submit">Comprar</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <h1 class="mx-auto">Informações Sobre o Produto</h1>
            <div>
                <p>
                    <strong>Origem: </strong>Jamaica
                </p>
                <p>
                    <strong>Região: </strong>Desnoes and Geddes
                </p>
                <p>
                    <strong>Graduação Alcoólica: </strong>4,7%
                </p>
                <p>
                    <strong>Coloração: </strong>Amarela
                </p>
                <p>
                    <strong>Amargor: </strong>Muito baixo
                </p>
                <p>
                    <strong>Temperatura Sugerida: </strong>0º - 4ºC
                </p>
                <p>
                    <strong>Tipo: </strong>Standard American Lager
                </p>
                <p>
                    <strong>Ingredientes: </strong>Malte de cevada, lúpulo, fermento e água
                </p>
                <p>
                    Cerveja importada da Jamaica, famosa em todo o mundo. É refrescante, perfeita para o verão. Apresenta uma coloração clara com leve presença do malte, seu final é suave com um leve amargor.
                </p>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>