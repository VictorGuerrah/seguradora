<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD Seguro</title>
    <link href="assets/css/seguro.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>
    <?php require 'views/partial/header.php'; ?>

    <hr>
    <h1 class="titulo">Seguros</h1>
    <hr>


    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>

                <?php foreach ($seguros as $seguro) : ?>

                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Preço</th>
                        <th scope="col" class="fix">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal" type="submit">Adicionar</button>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $seguro->id; ?></th>
                        <td><?= $seguro->nome; ?></td>
                        <td><?= $seguro->tipo_nome; ?></td>
                        <td><?= $seguro->preco; ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-success botao" data-toggle="modal" data-target="#exibirSeguro">Exibir</button>
                            <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#editarSeguro">Editar</button>
                            <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#excluirSeguro">Excluir</button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">



                    <h5 class="modal-title" id="addSeguroModalTitulo">Adicionar Novo Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method='POST' action="/addSeguro">
                        <div class="form-group">
                            <label for="nome">Nome :</label>
                            <input class="form-control" placeholder="Enter nome" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="preco">Valor</label>
                            <input class="form-control" placeholder="Enter valor" name="preco">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input class="form-control" placeholder="Enter descricao" name="descricao">
                        </div>

                        <div class="form-group">
                            <label>Tipo:</label>
                            <select name="tipo_seguro_id" class="form-control">
                                <label for="pwd">Tipo:</label>
                                <?php foreach ($tipos as $tipos) : ?>
                                    <option value="<?= $tipo->id; ?>">
                                        <?= $tipo->nome; ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>
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

    <?php foreach($seguros as $seguro) : ?>


    <div class="modal fade" id="editarSeguro<?= $seguro->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarSeguroModal">Editar Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form method='POST' action='/updateSeguro'>
                        <div class="form-group">
                            <label for="nome">Seguro :</label>
                            <input name='id' type='hidden' value='<?= $seguro->id ; ?>'>
                            <input name="nome" class="form-control" value="<?= $seguro->nome ; ?>">

                        </div>

                        <div class="form-group">
                            <label>Tipo:</label>
                                <select name="tipo_seguro_id" class="form-control">
                                <?php foreach ($tipos as $tipo) : ?>

                                    <option value="<?= $tipo->id; ?>">
                                        <?= $tipo->nome; ?>
                                    </option>

                                <?php endforeach; ?>

                                </select>
                         </div>
                        <div class="form-group">
                            <label for="preco">Valor :</label>
                            <input name="preco" class="form-control" value="<?= $seguro->preco ; ?>">

                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição :</label>
                            <input name="descricao" class="form-control" value="<?= $seguro->descricao ; ?>">

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


    <div class="modal fade" id="excluirSeguro<?= $seguro->id; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir" id="excluirModal">Excluir Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method='POST' action='/deleteSeguro'>

                    <input name="id" type="hidden" value="<?= $seguro->id; ?>">
                    <br>
                      <h5 class="centralizado">Deseja Realmente excluir esse Seguro?</h5>
                    <br>
                    <hr>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>



    <div class="modal fade" id="exibirSeguro<?= $seguro->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exibirSeguroModal">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p><b>Seguro: </b> <?= $seguro->nome; ?></p>
                    <hr>
                    <p><b>Tipo: </b> <?= $seguro->tipo_seguro_nome; ?></p>
                    <hr>
                    <p><b>Valor: </b>R$<?= $seguro->preco; ?></p>
                    <hr>
                    <p><b>Descrição: </b><?= $seguro->descricao; ?></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>



    <!--JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>

<?php endforeach; ?>


<footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://codejr.com.br/"> codejr.com.br</a>
    </div>

</footer>

</html>