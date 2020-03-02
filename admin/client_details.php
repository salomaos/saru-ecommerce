<?php include_once 'header.php'; ?>

<div class="container mb-5">
    <div class="row mt-3">
        <h1>Salomão Santana do Nascimento</h1>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-2">
            <h4>Meus Dados</h4>
        </div>
        <div class="col-10">
            <form id="signup-form">
                <div class="form-row">
                    <div class="form-group col-6">
                        <input type="email" class="form-control" id="inputEmail4" value="salomao.ssn@gmail.com">
                    </div>
                    <div class="form-group col-6">
                        <input type="text" class="form-control" id="inputPassword4" value="123.456.789.00" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress" value="Salomão Santana do Nascimento">
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <input type="date" class="form-control" id="inputAddress2" value="1988-04-30">
                    </div>
                    <div class="form-group col-6">
                        <select id="inputState" class="form-control">
                            <option selected>Masculino</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <input type="password" class="form-control" id="inputAddress2" value="fakesenhaneamigo">
                    </div>
                    <div class="form-group col-6">
                        <input type="password" class="form-control" id="inputAddress2" value="fakesenhaneamigo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <input type="text" class="form-control" id="inputAddress2" value="(11) 9 1234-45678">
                    </div>
                    <div class="form-group col-6">
                        <input type="text" class="form-control" id="inputAddress2" value="(11) 9 1234-45678">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                        <label class="form-check-label" for="gridCheck">
                            Quero receber novidades da SARU
                        </label>
                    </div>
                </div>
                <a href="user_account.php" class="btn btn-primary">Salvar Alterações</a>
                <!-- <button type="submit" class="btn btn-primary">Cadastrar</button> -->
            </form>
        </div>

    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-2">
            <h4>Endereços</h4>
        </div>
        <div class="col-10">
            <div class="address">
                <form action="">
                    <div class="form-group">

                        <input type="text" class="form-control" id="inputAddress" value="Salomão Santana do Nascimento">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" value="08500-000">
                        </div>
                        <div class="form-group col-8">
                            <input type="text" class="form-control" id="inputCity" value="Rua Brasil Triste">
                        </div>
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" value="321">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" value="Complemento">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" value="Novidades">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputZip" value="Ferraz de Vasconcelos">
                        </div>
                        <div class="form-group col-6">
                            <select id="inputState" class="form-control">
                                <option selected>SP</option>
                                <option>RJ</option>
                                <option>BA</option>
                                <option>AM</option>
                            </select>
                        </div>
                    </div>
                    <a href="user_account.php" class="btn btn-primary">Salvar Alterações</a>
                </form>
            </div>
            <hr>
            <div class="address">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputAddress" value="Mariana Sposito do Nascimento">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" value="08500-000">
                        </div>
                        <div class="form-group col-8">
                            <input type="text" class="form-control" id="inputCity" value="Rua Mundo Triste">
                        </div>
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputCity" value="321">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" value="Complemento">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputCity" value="Velharia">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="inputZip" value="Ferraz de Vasconcelos">
                        </div>
                        <div class="form-group col-6">
                            <select id="inputState" class="form-control">
                                <option selected>SP</option>
                                <option>RJ</option>
                                <option>BA</option>
                                <option>AM</option>
                            </select>
                        </div>
                    </div>
                    <a href="user_account.php" class="btn btn-primary">Salvar Alterações</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>