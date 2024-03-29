<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD Cargo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href="assets/css/cargo.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php require 'views/partial/header.php'; ?>

    <hr>
    <h1 class="titulo">Cargos</h1>
    <hr>

    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="th-lg"> </th>
                    <th scope="col" class="th-lg">Nome</th>
                    <th scope="col" class="th-lg">Departamento</th>
                    <th scope="col" class="fix">
                        <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addCargo" type="submit">Adicionar</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cargos as $cargo) : ?>
                    <tr>
                        <th scope="row">

                            <?= $cargo->id; ?>

                        </th>

                        <td>

                            <?= $cargo->nome; ?>

                        </td>
                        <td><?= $cargo->departamento_nome; ?> </td>
                        <td>
                            <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#edit<?= $cargo->id; ?>">Editar</button>
                            <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#del<?= $cargo->id; ?>">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>




    <!-- Modal -->

    <?php foreach ($cargos as $cargo) : ?>



        <div class="modal fade" id="addCargo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar Novo Cargo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form method='POST' action="/addCargo">
                            <div class="form-group">
                                <label>Cargo:</label>
                                <input class="form-control"placeholder="Enter cargo" name="nome">
                            </div>

                               
                               
             

                                <div class="form-group">
                                    <label>Departamento:</label>
                                    <select name="departamento_id" class="form-control">
                                        <label for="pwd">Departamento:</label>
                                        <?php foreach ($departamentos as $departamento) : ?>
                                            <option value="<?= $departamento->id; ?>">
                                                <?= $departamento->nome; ?>
                                            </option>

                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        <div class="modal fade" id="edit<?= $cargo->id; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Cargo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method='POST' action='/updateCargo'>
                            <div class="form-group">
                                <label for="nomeSeguro">Cargo</label>
                                <input name='id' type='hidden' value='<?= $cargo->id; ?>'>
                                <input name="nome" class="form-control" value="<?= $cargo->nome; ?> ">
                                
                            </div>
                            

                           
                    <div class="form-group">
                        <label>Departamento:</label>
                        <select name="departamento_id" class="form-control">
                            <?php foreach ($departamentos as $departamento) : ?>

                                <option value="<?= $departamento->id; ?>">
                                    <?= $departamento->nome; ?>
                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                            <br>
                            <hr>

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>



        <div class="modal fade" id="del<?= $cargo->id; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modalEcluir">Excluir Cargo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' action='deleteCargo'>
                            <h5 class="centralizado">Deseja realmente excluir o cargo?</h5>
                            <br>
                            <hr>
                            <input type="hidden" name="id" value="<?= $cargo->id; ?>">
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