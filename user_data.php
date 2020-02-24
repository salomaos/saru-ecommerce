<?php include_once 'header.php' ?>

<main>
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <?php include_once 'user_account_menu.php' ?>
            </div>
            <div class="col-9">
                <h2>Meus Dados</h2>
                <form id="signup-form">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail*">
                        </div>
                        <div class="form-group col-6">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="CPF*">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nome Completo*">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="date" class="form-control" id="inputAddress2" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group col-6">
                            <select id="inputState" class="form-control">
                                <option selected>Selecione</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="password" class="form-control" id="inputAddress2" placeholder="Senha*">
                        </div>
                        <div class="form-group col-6">
                            <input type="password" class="form-control" id="inputAddress2" placeholder="Confirmar Senha*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Telefone Principal*">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Telefone Secundário*">
                        </div>
                    </div>
                    <h4>Endereço</h4>
                    <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" placeholder="CEP*">
                        </div>
                        <div class="form-group col-8">
                            <input type="text" class="form-control" id="inputCity" placeholder="Rua*">
                        </div>
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" placeholder="Número*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" placeholder="Complemento">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" placeholder="Bairro*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputZip" placeholder="Cidade*">
                        </div>
                        <div class="form-group col-6">
                            <select id="inputState" class="form-control">
                                <option selected>Estado*</option>
                                <option>SP</option>
                                <option>RJ</option>
                                <option>BA</option>
                                <option>AM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Quero receber novidades da SARU
                            </label>
                        </div>
                    </div>
                    <a href="user_account.php" class="btn btn-primary">Salvar</a>
                    <!-- <button type="submit" class="btn btn-primary">Cadastrar</button> -->
                </form>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>