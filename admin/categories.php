<?php include_once 'header.php'; ?>

<main class="container mt-4">
    <form class="bg-light p-2 mb-3" action="">
        <h5>Nova categoria</h5>
        <div class="form-row">
            <div class="form-group col-2">
                <label for="product-name">Categoria</label>
                <input type="text" class="form-control" id="product-name" placeholder="Nome">
            </div>
            <div class="form-group col-9">
                <label for="product-name">Descrição</label>
                <input type="text" class="form-control" id="product-name" placeholder="Breve descrição">
            </div>
            <div class="form-group col-1">
                <label class="text-light" for="product-name">Descrição</label>
                <a class="btn btn-warning" href="#">Salvar</a>
            </div>
        </div>
    </form>
    <hr>
    <h2>Categorias</h2>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row align-items-end">
                <div class="col-10">
                    <h5 class="card-title font-weight-bold">IPA</h5>
                    <h6 class="card-subtitle mt-2 font-weight-bold">Descrição:</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="col-2">
                    <a href="#" class="card-link float-right btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="row align-items-end">
                <div class="col-10">
                    <h5 class="card-title font-weight-bold">LAGER</h5>
                    <h6 class="card-subtitle mt-2 font-weight-bold">Descrição:</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="col-2">
                    <a href="#" class="card-link float-right btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="row align-items-end">
                <div class="col-10">
                    <h5 class="card-title font-weight-bold">ALE</h5>
                    <h6 class="card-subtitle mt-2 font-weight-bold">Descrição:</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="col-2">
                    <a href="#" class="card-link float-right btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php'; ?>