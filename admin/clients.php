<?php include_once 'header.php'; ?>

<div class="container">

    <h2 class="mt-5">Clientes</h2>
    <table class="table table-hover mt-4 text-center border-bottom">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Pedidos</th>
                <th scope="col">Cadastrado em</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle">Salomão Santana</td>
                <td class="align-middle">salomao.ssn@gmail.com</td>
                <td class="align-middle">5</td>
                <td class="align-middle">01/01/2020</td>
                <td class="align-middle">
                    <a href="client_details.php" class="btn btn-secondary"><i class="fas fa-eye"></i></a>                    
                </td>
            </tr>
            <tr>
                <td class="align-middle">Victor Ramos</td>
                <td class="align-middle">v.ramos@gmail.com</td>
                <td class="align-middle">15</td>
                <td class="align-middle">01/01/2020</td>
                <td class="align-middle">
                    <a href="client_details.php" class="btn btn-secondary"><i class="fas fa-eye"></i></a>                    
                </td>
            </tr>  
        </tbody>
    </table>
</div>

<?php include_once 'footer.php'; ?>