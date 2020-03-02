<?php include_once 'header.php'; ?>

<main class="mt-4">
    <div class="container">
        <div class="row bg-light p-2">
            <form class="form-inline">
                <h3 class="mr-1 mb-0">Intervalo</h3>
                <div class="form-group row ml-1 pl-2 border-left">
                    <label class="col-form-label" for="inlineFormInputName2">Início</label>
                    <div class="col pl-1">
                        <input type="date" class="form-control" id="inlineFormInputName2">
                    </div>
                </div>                
                <div class="form-group row ml-3">
                    <label class="col-form-label" for="inlineFormInputName2">Fim</label>
                    <div class="col pl-1">
                        <input type="date" class="form-control" id="inlineFormInputName2">
                    </div>
                </div>
                <button type="submit" class="btn btn-warning ml-3">Alterar</button>
            </form>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col bg-warning mr-2 p-3">
                <h6 class="font-weight-bold">Pedidos Finalizados</h6>
                <hr>
                <h4>200</h4>
            </div>
            <div class="col bg-warning mr-2 p-3">
                <h6 class="font-weight-bold">Venda Total</h6>
                <hr>
                <h4>R$ 100.000</h4>
            </div>
            <div class="col bg-warning mr-2 p-3">
                <h6 class="font-weight-bold">Lucro</h6>
                <hr>
                <h4>R$ 75.000</h4>
            </div>
            <div class="col bg-warning p-3">
                <h6 class="font-weight-bold">Meta Lucro</h6>
                <hr>
                <h4>R$ 77.000</h4>
            </div>
        </div>
        <!-- <div class="row bg-light p-3 mb-3">
            <h2>Vendas vs Meta</h2>
            <canvas id="sales-vs-target"></canvas>
            <script src="charts/sales_vs_target.js"></script>
        </div>
        <div class="row bg-light p-3">
            <h2>Vendas por métodos de pagamento</h2>
            <canvas id="sales-by-payment-methods"></canvas>
            <script src="charts/sales_by_payment_methods.js"></script>
        </div> -->
        <div class="row">
            <div class="col-6">
                <div class="mr-1 bg-light p-2">
                    <h4>Vendas vs Meta</h4>
                    <canvas id="sales-vs-target"></canvas>
                    <script src="charts/sales_vs_target.js"></script>
                </div>
            </div>
            <div class="col-6">
                <div class="ml-1 bg-light p-2">
                    <h4>Vendas por métodos de pagamento</h4>
                    <canvas id="sales-by-payment-methods"></canvas>
                    <script src="charts/sales_by_payment_methods.js"></script>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php'; ?>