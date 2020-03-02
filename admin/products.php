<?php include_once 'header.php'; ?>

<main class="container">
    <h2 class="mt-5">Produtos</h2>
    <h4 class="float-right">Total de Produtos: 2</h4>
    <table class="table table-hover mt-4 border-bottom table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Selecionar</th>
                <th scope="col" colspan="2">Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Status</th>
                <th scope="col">Estoque</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td class="align-middle"><input class="form-check-input" type="checkbox"></td>
                <td class="align-middle"><img style="width: 50px; height: 50px" src="../img/beers/Guinness-Beer-Foreign-Extra-Stout-33cl.jpg_350x350.jpg" alt=""></td>
                <td class="align-middle">
                    Brooklyn East IPA<br>
                    <small class="text-muted">SKU: 4845646</small>
                </td>
                <td class="align-middle">IPA</td>
                <td class="align-middle">
                <small class="text-muted"><strike>de R$ 19,00</strike></small><br>  
                R$ 17,00
                </td>
                <td class="align-middle">Inativo</td>
                <td class="align-middle">0</td>
                <td class="align-middle">
                    <a href="client_details.php" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
            <tr>
                <td class="align-middle"><input class="form-check-input" type="checkbox"></td>
                <td class="align-middle"><img style="width: 50px; height: 50px" src="../img/beers/37095-0w470h470_Brooklyn_East_Ipa_Beer.jpg" alt=""></td>
                <td class="align-middle">
                    Brooklyn East IPA<br>
                    <small class="text-muted">SKU: 4845646</small>
                </td>
                <td class="align-middle">IPA</td>
                <td class="align-middle">
                <small class="text-muted"><strike>de R$ 20,00</strike></small><br>  
                R$ 19,00
                </td>
                <td class="align-middle">Ativo</td>
                <td class="align-middle">200</td>
                <td class="align-middle">
                    <a href="client_details.php" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                </td>
            </tr>  
        </tbody>
    </table>
</main>

<?php include_once 'footer.php'; ?>