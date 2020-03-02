<?php include_once 'header.php'; ?>

<main class="container mt-3">
    <h2 class="font-weight-bold">Novo Produto</h2>
    <div class="row">
        <div class="col-4">
            <div class="row">
                <img class="w-100 img-thumbnail" src="../img/beers/Anderson-Valley-Bourbon-Barrel-Stout-22OZ-BTL.JPG" alt="">
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <img class="w-100 img-thumbnail" src="../img/beers/Anderson-Valley-Bourbon-Barrel-Stout-22OZ-BTL.JPG" alt="">
                </div>
                <div class="col-4">
                    <img class="w-100 img-thumbnail" src="../img/beers/Anderson-Valley-Bourbon-Barrel-Stout-22OZ-BTL.JPG" alt="">
                </div>
                <div class="col-4">
                    <img class="w-100 img-thumbnail" src="../img/beers/Anderson-Valley-Bourbon-Barrel-Stout-22OZ-BTL.JPG" alt="">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="image-upload-info">
                            <small>
                                Máx. 10 imagens. Tamanho máx. 3MB. <br>
                                Formatos: JPG, PNG ou GIF (não animadas). <br>
                                Prezar pela qualidade das imagens.
                            </small>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="bg-light p-3 ml-2">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-2">
                            <label for="inputState">Produto Ativo?</label>
                            <select id="inputState" class="form-control">
                                <option selected>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                        <div class="form-group col-10">
                            <label for="product-name">Nome</label>
                            <input type="text" class="form-control" id="product-name" placeholder="Nome do produto">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-4">
                            <label for="product-url">URL</label>
                            <input class="form-control-plaintext" readonly type="text" name="product-url" id="url" value="https://sarucervejas.com.br/">
                        </div>
                        <div class="form-group col-8">
                            <label class="text-white" for="product-url">URL</label>
                            <input class="form-control" type="text" name="product-url" id="product-url" value="anderson-valley-bourbon-barrel-stout">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="from-group col-3">
                            <label for="product-name">SKU</label>
                            <input type="text" class="form-control" id="product-name" placeholder="ANV-STO-330-01" style="text-transform: uppercase;">
                        </div>
                        <div class="from-group col-3">
                            <label for="cost-price">Preço custo</label>
                            <input type="text" class="form-control currency" id="cost-price" placeholder="R$ 0,00" value="1.800,00">
                        </div>
                        <div class="from-group col-3">
                            <label for="sales-price">Preço venda</label>
                            <input type="text" class="form-control currency text-muted" id="sales-price" placeholder="R$ 0,00" style="text-decoration: line-through;">
                        </div>
                        <div class="from-group col-3">
                            <label for="promo-price">Preço promocional</label>
                            <input type="text" class="form-control currency" id="promo-price" placeholder="R$ 0,00">
                        </div>
                    </div>
                </form>
                <hr>
                <div class="descrition-editor">
                    <h4>Descrição completa</h4>
                    <div class="bg-light border height-auto" id="editorjs"></div>
                    <div class="btn btn-warning mt-2" id="save-button">
                        Salvar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        SEO
    </div>
</main>


<?php include_once 'footer.php'; ?>
<?php include_once 'editor_config.php'; ?>


<script>
    $(document).ready(function() {
        $("input.currency").maskMoney({
            prefix: "R$",
            decimal: ",",
            thousands: "."
        });
        console.log($("input.currency").maskMoney('unmasked'));
    });
</script>