<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>CRUD Tipo</title>
    <link href="assets/css/tipo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>

    <?php require 'views/partial/header.php'; ?>


    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="th-lg"> </th>
                    <th scope="col" class="th-lg">Tipo</th>

                    <th scope="col" class="fix">
                        <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addTipo" type="submit">Adicionar</button>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($tipos as $tipo) : ?>

                    <tr>
                        <th scope="row">

                            <?= $tipo->id; ?>

                        </th>

                        <td>

                            <?= $tipo->nome; ?>

                        </td>

                        <td>
                            <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#edit<?= $tipo->id; ?>">Editar</button>
                            <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#del<?= $tipo->id; ?>">Excluir</button>
                        </td>
                    </tr>


                <?php endforeach; ?>

            </tbody>
        </table>
    </div>


    <!-- Modal -->

    <?php foreach ($tipos as $tipo) : ?>


    <div class="modal fade" id="addTipo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarSeguroModal">Adicionar Novo Tipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="addTipo" method='POST'>
                        <div class="form-group">
                            <label>
                                <h5>Tipo</h5>
                            </label>
                            <input class="form-control" name="nome">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit<?= $tipo->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Tipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method='POST' action='/updateTipo'>
                            <div class="form-group">
                                <label for="nomeSeguro">Tipo</label>
                                <input name='id' type='hidden' value='<?= $tipo->id; ?>'>
                                <input name="nome" placeholder="<?= $tipo->nome; ?> ">
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="del<?= $tipo->id; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modalEcluir">Excluir Tipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' action='deleteTipo'>
                            <h5 class="centralizado">Deseja realmente excluir o tipo de seguro?</h5>
                            <br>
                            <hr>
                            <input type="hidden" name="id" value="<?= $tipo->id; ?>">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    <?php endforeach; ?>

    <!--JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>



<?php require 'views/partial/footer.php'; ?>

</html>