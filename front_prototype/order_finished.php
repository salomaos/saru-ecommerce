<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-3">
            <div class="col bg-light p-3">
                <h4 class="w-100 text-white font-weight-bold text-center bg-warning p-1">SEU PEDIDO FOI REALIZADO COM SUCESSO</h4 class="w-100 text-center bg-warning p-1">
                <div class="text-center pt-3">
                    <h3>Número do pedido:</h3>
                    <h2>12345678</h2>
                    <h6>A comfirmação foi enviada para o e-mail: exemplo@gmail.com</h6>
                    <h4 class="font-weight-bold">STATUS: <span class="text-warning">AGUARDANDO PAGAMENTO</span></h4>
                </div>
                <hr>
                <p>Você pode acompanhar o status do seu pedido em MEUS PEDIDOS no seu perfil.</p>
                <p class="m-0"><strong>Data do pedido:</strong> 01/01/2020</p>
                <p class="m-0"><strong>Forma de pagamento:</strong> Boleto</p>
                <p class="m-0"><strong>Valor desconto:</strong> R$ 0,00</p>
                <p><strong>Frete normal:</strong> R$ 10,00 (O prazo de entrega é de 10 dias úteis após pedido ser despachado!)</p>
                <p><strong>Valor total:</strong> 97,92</p>
                <a class="btn btn-warning font-weight-bold" href="#">IMPRIMIR BOLETO</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col p-3 bg-light mr-2">
                <h5 class="p-2">Resumo do Pedido</h5>
                <hr>
                <div class="row">
                    <div class="col-3 pt-3">
                        <img class="w-100" src="img/beers/586135.png" alt="Cerveja">
                    </div>
                    <div class="col-5">
                        <p class="m-0">Red Stripe</p>
                        <p class="m-0 cart_product_info"><strong>País: </strong>Jamaica</p>
                        <p class="m-0 cart_product_info"><strong>Estilo: </strong>Lager</p>
                        <p class="m-0 cart_product_info"><strong>Volume: </strong>330ml</p>
                        <p class="m-0 cart_product_info"><strong>Quantidade: </strong>4</p>
                    </div>
                    <div class="col-4">
                        R$ 43,96
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3 pt-3">
                        <img class="w-100" src="img/beers/586135.png" alt="Cerveja">
                    </div>
                    <div class="col-5">
                        <p class="m-0">Red Stripe</p>
                        <p class="m-0 cart_product_info"><strong>País: </strong>Jamaica</p>
                        <p class="m-0 cart_product_info"><strong>Estilo: </strong>Lager</p>
                        <p class="m-0 cart_product_info"><strong>Volume: </strong>330ml</p>
                        <p class="m-0 cart_product_info"><strong>Quantidade: </strong>4</p>
                    </div>
                    <div class="col-4">
                        R$ 43,96
                    </div>
                </div>
            </div>
            <div class="col p-3 bg-light ml-2">
                <h5 class="p-2">Endereço de Entrega</h5>
                <hr>
                <div class="border p-2">
                    <h6><strong>Salomão Santana</strong></h6>
                    <p class="m-0">Rua Campos Salles, 92</p>
                    <p class="m-0">Sítio Paredão - Ferraz de Vasconeclos - SP</p>
                    <p class="m-0">08501-200</p>
                    <p class="m-0">Complemento</p>
                    <p class="m-0">Outras informações</p>
                </div>
            </div>
        </div>
        <div class="row p-3 mt-3 bg-light">
            <div class="col">
                <a class="btn btn-warning btn-block" href="index.php">Continuar Comprando</a>
            </div>
            <div class="col">
                <a class="btn btn-warning btn-block" href="index.php">Imprimir Página</a>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>