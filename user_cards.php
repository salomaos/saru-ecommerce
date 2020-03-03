<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <?php include_once 'user_account_menu.php' ?>
            </div>
            <div class="col-9">
                <h2>Endereços</h2>
                <form id="signup-form">
                    <div class="form-row">
                        <div class="form-group col-8">
                            <label for="car-holder">Nome do Titular</label>
                            <input type="text" class="form-control" id="car-holder" placeholder="Como impresso no cartão">
                        </div>
                        <div class="form-group col-4">
                            <label for="card-number">Bandeira</label>
                            <select id="inputState" class="form-control">
                                <option selected disabled>Escolher</option>
                                <option>Visa</option>
                                <option>Elo</option>
                                <option>Masercard</option>
                                <option>Hipercard</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="card-number">Número do cartão</label>
                            <input type="number" class="form-control" id="card-number" placeholder="Digitar número sem espaços" min="0">
                        </div>
                        <div class="form-group col-2">
                            <label for="card-number">Validade</label>
                            <select id="inputState" class="form-control">
                                <option selected>Mês</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-2">
                            <label for="card-number" class="text-white">Validade</label>
                            <select id="inputState" class="form-control">
                                <option selected>Ano</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label for="card-number">Código de segurança</label>
                            <input type="number" class="form-control" id="card-number" placeholder="No verso no cartão" min="0">
                        </div>
                    </div>
                    
                    <a href="user_account.php" class="btn btn-primary">Salvar</a>
                    <!-- <button type="submit" class="btn btn-primary">Cadastrar</button> -->
                </form>
                <hr>
                <a href="user_account.php" class="btn btn-primary">Novo cartão</a>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>