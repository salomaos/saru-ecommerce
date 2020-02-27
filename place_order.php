<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <div class="bg-light p-4">
                    <h5>ENDEREÇO DE ENTREGA</h6>
                        <hr>
                        <div class="border p-2">
                            <h6><strong>Salomão Santana</strong></h6>
                            <p class="m-0">Rua Campos Salles, 92</p>
                            <p class="m-0">Sítio Paredão - Ferraz de Vasconeclos - SP</p>
                            <p class="m-0">08501-200</p>
                            <p class="m-0">Complemento</p>
                            <p class="m-0">Outras informações</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <a class="btn btn-warning btn-block" href="#">Selecionar outro endereço</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-warning btn-block" href="#">Adicionar outro endereço</a>
                            </div>
                        </div>
                </div>
                <div class="bg-light p-4 mt-3">
                    <h5>FORMAS DE ENVIO</h6>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Tipo de Entrega
                            </div>
                            <div class="col-3 text-center">
                                Frete(R$)
                            </div>
                            <div class="col-3 text-center">
                                Prazo de Entrega
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">Entrega normal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios2">Sedex</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios3">Outras</label>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div>R$ 10,00</div>
                                <div>R$ 15,00</div>
                                <div>R$ 20,00</div>
                            </div>
                            <div class="col-3 text-center">
                                <div>10 dias úteis</div>
                                <div>5 dias úteis</div>
                                <div>3 dias úteis</div>
                            </div>
                        </div>
                </div>
                <div class="bg-light p-4 mt-3">
                    <h5>FORMAS DE PAGAMENTO</h6>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-barcode"></i> Boleto</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-credit-card"></i> Cartão de Crédito</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="alert alert-success">
                                            O boleto não é enviado via Correios. É necessário imprimir.<br>
                                            Poderá ser pago na agência bancária de sua preferência ou pela internet.
                                        </div>
                                        <div class="alert alert-danger">
                                            Atenção: Caso você tenha um programa anti pop-up você deve desativá-lo antes de finalizar sua compra com esta forma de pagamento.</div>
                                        </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><?php include_once 'credit_card.php' ?></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-4">
                <?php include_once 'cart_details.php' ?>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>