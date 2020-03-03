<?php include_once 'header.php'; ?>

<main class="container mt-3 mb-5 pb-5">
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
                        <div class="form-group col-7">
                            <label for="product-name">Nome</label>
                            <input type="text" class="form-control" id="product-name" placeholder="Nome do produto">
                        </div>
                        <div class="form-group col-3">
                            <label for="inputState">Categoria</label>
                            <select id="inputState" class="form-control">
                                <option selected disabled>Escolher</option>
                                <option>IPA</option>
                                <option>LAGER</option>
                                <option>STOUT</option>
                                <option>SESSION IPA</option>
                                <option>RED ALE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="product-url">URL</label>
                            <input class="form-control-plaintext" readonly type="text" name="product-url" id="url" value="https://sarucervejas.com.br/">
                        </div>
                        <div class="form-group col-6">
                            <label class="text-white" for="product-url">URL</label>
                            <input class="form-control" type="text" name="product-url" id="product-url" value="anderson-valley-bourbon-barrel-stout">
                        </div>
                        <div class="form-group col-2">
                            <label for="product-url">Estoque</label>
                            <input class="form-control" type="number" name="product-url" id="product-url" value="0" min="0">
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
    <div class="row bg-light p-5 mt-3">
        <div class="col-1 border-right">
            <h3 class="font-weight-bold">SEO</h3>
        </div>
        <div class="col-11">
            <form action="">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="product-name">Título</label>
                        <input type="text" class="form-control" id="product-name" placeholder="Título descritivo">
                    </div>
                    <div class="form-group col-6">
                        <label for="product-name">Palavras Chaves</label>
                        <input type="text" class="form-control" id="product-name" placeholder="Separe as palavras por vírgulas">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="row bg-light p-5 mt-3">
        <h3 class="font-weight-bold border-bottom w-100 pb-3 mb-3">Peso e dimensões</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group col-3">
                    <label for="product-name">Peso</label>
                    <input type="text" class="form-control" id="product-name" placeholder="Quilograma">
                </div>
                <div class="form-group col-3">
                    <label for="product-name">Altura</label>
                    <input type="text" class="form-control" id="product-name" placeholder="Centímetros">
                </div>
                <div class="form-group col-3">
                    <label for="product-name">Largura</label>
                    <input type="text" class="form-control" id="product-name" placeholder="Centímetros">
                </div>
                <div class="form-group col-3">
                    <label for="product-name">Profundidade</label>
                    <input type="text" class="form-control" id="product-name" placeholder="Centímetros">
                </div>
            </div>
        </form>
    </div>
    <a class="btn-block btn btn-warning mt-3" href="products.php">Salvar produto</a>
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