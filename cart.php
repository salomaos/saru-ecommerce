<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-4">
            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <h6>MEU CARRINHO</h6>
                        <hr>
                    </div>
                    <div class="col-2">
                        <h6>QUANTIDADE</h6>
                        <hr>
                    </div>
                    <div class="col-2">
                        <h6>UNITÁRIO</h6>
                        <hr>
                    </div>
                    <div class="col-2">
                        <h6>TOTAL</h6>
                        <hr>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" src="img/beers/586135.png" alt="Cerveja">
                            </div>
                            <div class="col-8">
                                <p>Red Stripe</p>
                                <p class="m-0"><strong>País: </strong>Jamaica</p>
                                <p class="m-0"><strong>Estilo: </strong>Lager</p>
                                <p class="m-0"><strong>Volume: </strong>330ml</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="display: inherit;">
                        <button style="width: 30px; border: solid black 1px;"><strong>-</strong></button>
                        <input class="w-100 text-center" type="text" name="quantity" id="quantity" value="4" style="border: solid black 1px;">
                        <button style="width: 30px; border: solid black 1px;"><strong>+</strong></button>
                    </div>
                    <div class="col-2">
                        <small class="text-muted"><strike>R$ 13,99</strike></small>
                        <p>R$ 10,99</p>
                    </div>
                    <div class="col-2">
                        <small class="text-muted"><strike>R$ 55,96</strike></small>
                        <p>R$ 43,96</p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <img class="w-100" src="img/beers/586135.png" alt="Cerveja">
                            </div>
                            <div class="col-8">
                                <p>Red Stripe</p>
                                <p class="m-0"><strong>País: </strong>Jamaica</p>
                                <p class="m-0"><strong>Estilo: </strong>Lager</p>
                                <p class="m-0"><strong>Volume: </strong>330ml</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="display: inherit;">
                        <button style="width: 30px; border: solid black 1px;"><strong>-</strong></button>
                        <input class="w-100 text-center" type="text" name="quantity" id="quantity" value="4" style="border: solid black 1px;">
                        <button style="width: 30px; border: solid black 1px;"><strong>+</strong></button>
                    </div>
                    <div class="col-2">
                        <small class="text-muted"><strike>R$ 13,99</strike></small>
                        <p>R$ 10,99</p>
                    </div>
                    <div class="col-2">
                        <small class="text-muted"><strike>R$ 55,96</strike></small>
                        <p>R$ 43,96</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 border-right pt-2">
                        <form action="#">
                            <div class="form-row">
                                <div class="form-group col-9">
                                    <input class="form-control" type="text" name="coupon" id="coupon" placeholder="Cupom de desconto">
                                </div>
                                <div class="form-group col-3">
                                    <a class="btn btn-warning btn-block" href="cart.php">Aplicar</a>
                                    <!-- <button class="btn btn-warning btn-block" type="submit">Comprar</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-4 pt-2">
                        <a class="btn btn-warning btn-block" href="index.php">Continuar Comprando</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h4>Resumo</h4>
                <div class="rounded p-2 bg-light">
                    <div class="row">
                        <div class="col">
                            <p>Subtotal:</p>
                            <p>Frete:</p>
                            <p>Desconto:</p>
                            <p>Total:</p>
                        </div>
                        <div class="col">
                            <p>R$ 43,96</p>
                            <p>-</p>
                            <p>R$ 0,00</p>
                            <p>R$ 43,96</p>
                        </div>
                    </div>
                    <a class="btn btn-warning btn-block" href="place_order.php">FINALIZAR COMPRA</a>
                    <!-- <button type="button" class="btn btn-warning btn-block">FINALIZAR COMPRA</button> -->
                </div>
            </div>            
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>
