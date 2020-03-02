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
                    <a href="user_account.php" class="btn btn-primary">Salvar</a>
                    <!-- <button type="submit" class="btn btn-primary">Cadastrar</button> -->
                </form>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php' ?>